import { TextBox } from "../components/textbox.js";
import { MultipleChoice } from "../components/multipleChoice.js";
import { DropDown } from "../components/dropdown.js";
import { UploadFile } from "../components/uploadFile.js";
import { MultiOption } from "../components/multiOption.js";
import { RepeatQuestion } from "../components/repeatQuestion.js";
import { MatrixOption } from "../components/matrixOption.js";
// import { Rating } from "../components/rating.js";

export var questionUtils = {
    currentQuestion: 0,
    answeredQuestion: 0,
    totalQuestion: 0,
    timeElapsed: 0,
    // used for validate each questions
    validationBag: [],
};

var timeElapsed = 0;
var timer;
export const form = $("#form");
export const questionContainer = $("#questionContainer");
export const nextButton = $("#nextBtn");
export const previousButton = $("#prevBtn");

export function CreateQuestion(config) {
    let question;

    switch (config.componentName) {
        case "textBox":
            question = new TextBox(config);
            break;
        case "multipleChoice":
            question = new MultipleChoice(config);
            break;
        case "multiOptions":
            question = new MultiOption(config);
            break;
        case "matrixOptions":
            question = new MatrixOption(config);
            break;
        case "repeatQuestion":
            question = new RepeatQuestion(config);
            break;
        case "dropdown":
            question = new DropDown(config);
            break;
        case "fileUpload":
            // set form to multipart/form-data
            form.attr("enctype", "multipart/form-data");
            question = new UploadFile(config);
            break;
        case "ratingStar":
            question = new MultipleChoice(config);
            break;
        case "scale":
            question = new MultipleChoice(config);
            break;
        default:
            // undefined
            break;
    }

    return question;
}

export function nextQuestion(event) {
    event.preventDefault();

    // logic untuk mendapatkan componentID dari option yang dipilih
    // hanya berlaku untuk dropdown (multiplechoice dan scale menyusul)
    const getElements = document.getElementsByClassName("show active");
    for (let i = 0; i < getElements.length; i++) {
        const ele = getElements[i].querySelectorAll("#mainInput");
        for (let j = 0; j < ele.length; j++) {
            if (ele[j].tagName == "SELECT") {
                // Apabila tagNamenya SELECT, maka akan diolah di fungsi dropdown
                _checkForDropdown(ele[j]);
            } else if (ele[j].tagName == "UL") {
                // Apabila tagNamenya UL, maka akan diolah di fungsi multipleChoice
                _checkForMultiplechoice(ele[j]);
            } else if (ele[j].tagName == "DIV") {
                console.log("_checkScale");
            } else {
                continue;
            }
        }
    }

    // hide current question first
    _hideQuestion(questionUtils.currentQuestion, questionUtils.totalQuestion);

    const observable = questionObserver();

    //pehitungan presentase pengisian
    const pertanyaan = observable.currentQuestion + 1;
    const presentase = (pertanyaan / observable.totalQuestion) * 100;

    //manipulasi data progress bar
    const progress = document.getElementById("progress");
    progress.style.width = (pertanyaan / observable.totalQuestion) * 100 + "%";
    const result = (pertanyaan / observable.totalQuestion) * 100;
    progress.innerHTML = result.toFixed(0) + "%";

    observable.currentQuestion += 1;
}

function _checkForDropdown(ele) {
    const options = ele.querySelectorAll("option");
    for (let k = 0; k < options.length; k++) {
        if (options[k].getAttribute("value") === ele.value) {
            _redirectTo({
                text: ele.value,
                componentId: options[k].getAttribute("logic"),
            });
        }
        continue;
    }
}

function _checkForMultiplechoice(ele) {
    const inputs = ele.querySelectorAll("input");
    for (let k = 0; k < inputs.length; k++) {
        if (inputs[k].checked) {
            _redirectTo({
                text: inputs[k].value,
                componentId: inputs[k].getAttribute("logic"),
            });
        }
        continue;
    }
}

function _redirectTo(target) {
    console.log(
        `kamu akan dialihkan ke ${target.text} -> ${target.componentId}`
    );
}

export function previousQuestion(event) {
    event.preventDefault();

    // hide current question first
    _hideQuestion(questionUtils.currentQuestion);

    const observable = questionObserver();
    observable.currentQuestion -= 1;
}
export function jumpToQuestion(event, target) {
    event.preventDefault();

    // hide current question first
    _hideQuestion(questionUtils.currentQuestion);

    const observable = questionObserver();
    observable.currentQuestion = target;
}

function validationObserver() {
    let validator = function () {
        return {
            get: function (target, index) {
                const isObjectOrArray =
                    ["[object Object]", "[object Array]"].indexOf(
                        Object.prototype.toString.call(target[index])
                    ) > -1;
                if (isObjectOrArray) {
                    return new Proxy(target[index], validator());
                }
                return target[index];
            },
            set: function (target, key, value) {
                // set the changed value
                target[key] = value;

                // allow next when passed
                isPassed(value);

                return true;
            },
        };
    };

    let observer = new Proxy(questionUtils.validationBag, validator());

    return observer;
}

export function questionObserver() {
    let handler = {
        set: function (target, key, value) {
            if (key == "currentQuestion") {
                _showOrHideButtons(value, target.totalQuestion);
                showQuestion(value);
                // hide_submit();
                // show_submit();
            }
            target[key] = value;
            return true;
        },
    };

    const proxy = new Proxy(questionUtils, handler);

    return proxy;
}

export function startTimer() {
    timer = setInterval(function () {
        timeElapsed++;
    }, 1000);
}

export function stopTimer() {
    clearInterval(timer);
    return timeElapsed;
}

export function showQuestion(index) {
    const questions = questionContainer.children();
    const question = questions.get(index);
    const validation = validationObserver()[index];

    // show this question
    question.showContainer();

    // show next button if no validations
    isPassed(validation.passed);

    // validate
    if (!validation.passed) {
        question.Validate(validation);
    }
}

function _hideQuestion(index) {
    const questions = questionContainer.children();
    questions.get(index).hideContainer();
}

function _showOrHideButtons(currentQuestion, totalQuestion) {
    if (currentQuestion + 1 == totalQuestion) {
        nextButton.hide();
        $("#submitBtnPreview").show();
    } else if (currentQuestion == 0) {
        previousButton.addClass("disabled");
    } else if (currentQuestion != totalQuestion) {
        $("#submitBtnPreview").hide();
        nextButton.show();
        previousButton.removeClass("disabled");
    } else {
        nextButton.show();
        previousButton.removeClass("disabled");
    }
}

function isPassed(passed) {
    // allow next when validation passed
    if (passed) {
        // show submit when all validation passed
        shouldShowSubmit();
        nextButton.removeClass("disabled");
    } else {
        // remove submit button if exists
        if ($("#submitBtnPreview").length) $("#submitBtnPreview").remove();
        if (!nextButton.hasClass("disabled")) nextButton.addClass("disabled");
    }
}

function shouldShowSubmit() {
    let showSubmit = false;

    // detect any validation fail
    showSubmit =
        validationObserver().find((x) => x.passed === false) === undefined;

    if (showSubmit) {
        // create submit button if not exists
        if ($("#submitBtnPreview").length === 0)
            // $(".col text-end").append($("#submitBtn"));
            $("#btnContainer").append(
                '<button class="btn btn-orange text-white ms-2" type="button" id="submitBtnPreview" data-bs-toggle="modal" data-bs-target="#pratinjauModal3">Submit</button>'
            );
    }
}
// '<a href="#" class="btn btn-orange text-white ms-2" data-bs-toggle="modal" data-bs-target="#pratinjauModal3">
//                                                     Submit
//                                                 </a>'

// copy dari responden/survey-quesstion
let creator;

$(function () {
    showQuestions();

    // mendapatkan element berdasarkan class "show active"
    // -> mednapatkan semua option
    // -> melakukan looping dan memvalidasi pada setiap option, ada tidaknya logic
    //    DONE

    // disini tempat untuk logika jika option pada question X terdapat logic
    // maka akan memanggil fungsi jumpToQuestion()
    // selain itu akan memanggil fungsi nextQuestion()

    // akan muncul masalah yaitu jika sudah masuk di jumpToQuestion
    // maka previousQuestion harus menyesuaikan hasil dari jumpToQuestion
    /**
     *  jika jumping ke question 3 kemudian maju lagi satu question (posisi di question 4)
     *  maka ketika menekan previous sekali maka harus mundur 1 question
     *  dan ketika menekan previous sekali lagi maka harus mundur 3 question
     */

    // nextButton.on("click", jumpToQuestion);
    nextButton.on("click", nextQuestion);
    previousButton.on("click", previousQuestion);

    $("#form").on("submit", function (event) {
        // event.preventDefault();

        var hiddenCreatorField = document.createElement("input");
        hiddenCreatorField.type = "hidden";
        hiddenCreatorField.name = "creator";
        hiddenCreatorField.value = JSON.stringify(creator);

        this.appendChild(hiddenCreatorField);

        var hiddenTimer = document.createElement("input");
        hiddenTimer.type = "hidden";
        hiddenTimer.name = "time_elapsed";
        hiddenTimer.value = stopTimer();

        this.appendChild(hiddenTimer);

        var hiddenTotalQuestion = document.createElement("input");
        hiddenTotalQuestion.type = "hidden";
        hiddenTotalQuestion.name = "total_question";
        hiddenTotalQuestion.value = questionUtils.totalQuestion;

        this.appendChild(hiddenTotalQuestion);

        // use stop propagation if necessary
        // event.stopPropagation();
    });
});

async function _fetchSurvey() {
    const response = await fetch(url, {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
        mode: "cors",
    });

    return await response.json();
}

function showQuestions() {
    _fetchSurvey()
        .then((response) => {
            if (response.questions == null) {
                console.log("No questions present");
                return;
            }

            // get survey creator object for necessary actions
            creator = response.creator;

            // clean all questions
            questionContainer[0].innerHTML = "";

            // fetch questions
            const questions = response.questions;

            // get observable values and modify
            const observable = questionObserver();
            observable.totalQuestion = questions.length;

            // create questions
            for (let i = 0; i < questions.length; i++) {
                // modify config to be inputable for respondent
                const config = JSON.parse(questions[i].configuration);
                config.id = questions[i].id;
                config.inputable = false;

                // check validation
                const hasValidation =
                    config.validations !== undefined &&
                    config.validations.length != 0;

                if (hasValidation) {
                    // if exists, validation will be captured
                    // and user not allowed to next question

                    let rules = [];
                    let passed = false;

                    config.validations.forEach((validation) => {
                        if (validation !== null) {
                            // if not required, question can be passed
                            const isNotRequired =
                                validation.rule === "required" &&
                                validation.value === false;

                            if (isNotRequired) {
                                passed = true;
                                return;
                            }

                            /*  rules.push({
                                rule: validation.rule,
                                passed: false,
                            }); */
                        }
                    });

                    questionUtils.validationBag.push({
                        id: config.componentId,
                        // rules: rules,
                        passed: passed,
                        // passed: true,
                    });
                } else {
                    // if not, this question can be passed
                    // without input
                    questionUtils.validationBag.push({
                        id: config.componentId,
                        passed: true,
                    });
                }

                // render questions
                _renderQuestion(config);
            }

            showQuestion(0);

            // startTimer();
        })
        .catch((e) => console.log(e));
}

function _renderQuestion(config) {
    const questionBox = CreateQuestion(config);
    questionContainer.append(questionBox);
}
