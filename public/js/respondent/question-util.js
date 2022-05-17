import { TextBox } from "../components/textbox.js";
import { MultipleChoice } from "../components/multipleChoice.js";
import { DropDown } from "../components/dropdown.js";
import { UploadFile } from "../components/uploadFile.js";
import { MultiOption } from "../components/multiOption.js";
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
    // console.log(observable.currentQuestion);
    // console.log(observable.totalQuestion);

    //pehitungan presentase pengisian
    const pertanyaan = observable.currentQuestion + 1;
    const presentase = (pertanyaan / observable.totalQuestion) * 100;
    console.log(presentase);

    //pengkondisian pada questions terakhir akan dibawah ini

    //manipulasi data progress bar
    const progress = document.getElementById("progressbar");
    // console.log(progress);

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
    } else if (currentQuestion == 0) {
        previousButton.addClass("disabled");
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
        if ($("#submitBtn").length) $("#submitBtn").remove();
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
        if ($("#submitBtn").length === 0)
            // $(".col text-end").append($("#submitBtn"));
            $("#btnContainer").append(
                '<button class="btn btn-orange text-white" type="submit" id="submitBtn">Submit</button>'
            );
    }
}
