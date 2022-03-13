import Blueprint from "../components/blueprint.js";
import { CreateQuestion, openModal } from "./dialog-actions.js";
import { configuration } from "../components/configuration.js";
import { getQuestionBank } from "../question-bank/question_bank.js";
import uniqid, { baseRules } from "../components/util.js";

// initiate objects and variables

export let totalQuestion = 0;
let form = $("#formSurveyQuestion");
let btnAdd = $("#btnAddQuestion");
let btnSubmit = $("#submitBtn");
let spinner = $("#spinner");
let alert = $("#minQuestionAlert");
let noQuestion = $("#noQuestionContainer");
let questionsContainer = $("#questions_container");

$(function () {
    _initFields();
    _initQuestions();

    // init on text box clicked
    $("#addTextbox").on("click", function () {
        const question = _createQuestion(
            "Example textBox question",
            "textBox",
            "text",
            null,
            [baseRules[0]]
        );
    });

    // init on multi options clicked
    $("#addMultiOptions").on("click", function () {
        const question = _createQuestion(
            "Example multi options question",
            "multiOptions",
            "checkbox",
            ["Option 1", "Option 2", "Option 3", "Option 4", "Other Option"],
            [
                {
                    rule: "required",
                    value: true,
                    message: "Please pick an option",
                },
                {
                    rule: "minLength",
                    value: 2,
                    message: "Please pick minimum of 2 options",
                },
            ]
        );
    });

    // init on multiple choice clicked
    $("#addMultipleChoice").on("click", function () {
        const question = _createQuestion(
            "Example multiple choice question",
            "multipleChoice",
            "radio",
            ["Agree", "Disagree"],
            [
                {
                    rule: "required",
                    value: true,
                    message: "this field is required",
                },
                {
                    rule: "minLength",
                    value: 2,
                    message: "Please pick minimum of 2 options",
                },
            ]
        );
    });

    // init on dropdown clicked
    $("#addDropdown").on("click", function () {
        const question = _createQuestion(
            "Example dropdown question",
            "dropdown",
            "select",
            ["Option 1", "Option 2", "Option 3", "Option 4"]
        );
    });

    // init on file clicked
    $("#addFileUpload").on("click", function () {
        const question = _createQuestion(
            "Example file upload question",
            "fileUpload",
            "file",
            null
        );
    });

    // init on rating clicked
    $("#addRating").on("click", function () {
        const question = _createQuestion(
            "Example rating question",
            "rating",
            "radio",
            ["1", "2", "3", "4", "5"]
        );
    });

    getQuestionBank();
});

function _initFields() {
    Sortable.create(questionsContainer.get(0), {
        swap: true,
        animation: 150,
        ghostClass: "ghost",
        draggable: ".draggable",
        handle: ".dragger",
        onEnd: onListChanged,
    });
    btnAdd.on("click", () => {
        openModal();
    });
    form.on("submit", _saveForm);
    observer.observe(questionsContainer.get(0), {
        subtree: false,
        childList: true,
    });

    // noQuestion.addClass("show");
}

function _createQuestion(
    question,
    questionType,
    inputType,
    options = null,
    validations
) {
    let config = new Blueprint();

    // set container id from here
    config.containerId = uniqid("component");
    config.question = question;

    config.number = totalQuestion + 1;
    config.type = inputType;
    config.questionType = questionType;
    config.label = "Question " + (totalQuestion + 1);

    // set validation for this question
    config.validations = validations;

    if (options != null) {
        config.options = options;
    }

    const questionInstance = CreateQuestion(config);

    const componentLength = configuration.components.length;

    if (questionInstance.blueprint.appendAfter != undefined) {
        $("#" + questionInstance.blueprint.appendAfter).after(questionInstance);
        const position = questionInstance.getPositionInParent();
        config.position = position;
    } else {
        questionsContainer.append(questionInstance);
        const position = questionInstance.getPositionInParent();
        config.position = position;
    }

    addComponent(config);
    sortComponents();

    return questionInstance;
}

async function _fetchQuestions() {
    const response = await fetch(url, {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
        mode: "cors",
    });
    return await response.json();
}

function _createQuestions(question) {}

function _initQuestions() {
    _fetchQuestions()
        .then((response) => {
            // form.show();
            spinner.hide();
            shouldHideButton();
            if (response.questions.length == 0) {
                noQuestion.addClass("show");
                return;
            }
            configuration.user = response.creator;
            configuration.components = response.questions;
            var questions = configuration.components;

            for (let i = 0; i < questions.length; i++) {
                const configuration = questions[i];
                configuration.containerId = uniqid("component");
                configuration.index = i;
                configuration.number = i + 1;
                configuration.label = "Question " + (i + 1);
                const question = CreateQuestion(configuration);

                questionsContainer.append(question);
                addComponent(configuration, configuration.index);
            }
        })
        .catch((e) => console.log(e));
}

const observer = new MutationObserver(function (children) {
    children.forEach(function (mutation) {
        const questions = mutation.target.querySelectorAll(".draggable");
        updateQuestionLabel(questions);
        mutation.addedNodes.forEach(function (node, position) {
            if (node.className.includes("draggable")) {
                nextQuestion();
                shouldHideButton();
            }
        });

        mutation.removedNodes.forEach(function (node, position) {
            if (node.className.includes("draggable")) {
                previousQuestion();
                shouldHideButton();
                // removeComponent(index);
            }
        });
    });
});

function shouldHideButton() {
    if (totalQuestion >= 1) {
        noQuestion.hide();
    } else {
        noQuestion.show();
    }

    if (totalQuestion >= 5) {
        btnSubmit.removeClass("disabled");
        alert.removeClass("show");
    } else if (totalQuestion >= 1) {
        btnSubmit.addClass("disabled");
        btnSubmit.addClass("show");
        btnSubmit.show();
        alert.addClass("show");
    } else {
        btnSubmit.hide();
    }

    return totalQuestion >= 1;
}

export function nextQuestion() {
    totalQuestion++;
}

export function previousQuestion() {
    totalQuestion--;
}

function resetQuestion() {
    totalQuestion = 0;
}

function onListChanged(event) {
    var itemEl = event.item; // dragged HTMLElement

    // children list
    // 1. hidden input @csrf (reserved)
    // 2. button add question card (reserved)
    // 3. question element
    // 4. question element
    // 5. ......

    updateComponent(event.oldDraggableIndex, event.newDraggableIndex);

    /* console.log(
        "item : " +
            itemEl + // element's old index within old parent
            "\n" +
            "target_list_childrens: " +
            event.to.children.length + // target list (parent : form)
            "\n" +
            "previous: " +
            event.oldIndex + // previous list
            "\n" +
            "new_index_in_parent: " +
            event.newIndex + // element's new index within new parent
            "\n" +
            "old_draggable_index: " +
            event.oldDraggableIndex + // element's old index within old parent, only counting draggable elements
            "\n" +
            "new_draggable_index: " +
            event.newDraggableIndex + // element's new index within new parent, only counting draggable elements
            "\n" +
            "clone_element: " +
            event.clone + // the clone element
            "\n" +
            "pull_mode: " +
            event.pullMode + // when item is in another sortable: `"clone"` if cloning, `true` if moving
            "\n"
    ); */
}

function updateQuestionLabel(questions) {
    for (let i = 0; i < questions.length; i++) {
        // update label
        questions[i].children[0].children[0].children[0].innerHTML =
            "Question " + (i + 1);
        // console.log(questions[i].children[0]);
    }
}

export function addComponent(option, index = null) {
    const arr = configuration.components;
    if (index != null) {
        arr[index] = option;
    } else {
        arr.push(option);
    }
}

// set new position after accessor question to correct position
// in order to work with draggable
function appendAfterComponent(elementPosition) {
    let arr = configuration.components;

    // get configuration of affected element
    let affectedElement = arr[elementPosition];

    // get configuration of new element
    let newElement = arr[elementPosition - 1];

    if (arr.length >= 4 && elementPosition == 1) {
        // swap
        [arr[elementPosition], arr[arr.length - 1]] = [
            arr[arr.length - 1],
            arr[elementPosition],
        ];
    } else {
        // swap
        [arr[elementPosition], arr[elementPosition + 1]] = [
            arr[elementPosition + 1],
            arr[elementPosition],
        ];
    }

    // correcting label / swap label
    /* [arr[oldPosition].label, arr[newPosition + 1].label] = [
        arr[newPosition + 1].label,
        arr[oldPosition].label,
    ]; */

    // remove duplicate
    // arr.splice(newPosition, 1);

    console.log(arr);
}

export function sortComponents() {
    const arr = configuration.components;
    arr.sort((a, b) => {
        if (a.position < b.position) {
            return -1;
        }
        if (a.position > b.position) {
            return 1;
        }
        return 0;
    });
}

// swap position element in configuration
function updateComponent(elA, elB) {
    let arr = configuration.components;

    // swap
    [arr[elA], arr[elB]] = [arr[elB], arr[elA]];

    // correcting label / swap label
    [arr[elA].label, arr[elB].label] = [arr[elB].label, arr[elA].label];
}

export function removeComponent(index) {
    configuration.components.splice(index, 1);
}

function _saveForm(event) {
    // event.preventDefault();
    const questions = form[0].querySelectorAll(".draggable");
    for (let i = 0; i < questions.length; i++) {
        // const configuration = questions[i].setBlueprint();
        const hidden = document.createElement("input");
        hidden.type = "hidden";
        hidden.name = "questions[]"; //this.blueprint.number
        hidden.value = JSON.stringify(questions[i].blueprint);
        form.append(hidden);
    }
    if (configuration.deleted != null) {
        const deleted = document.createElement("input");
        deleted.type = "hidden";
        deleted.name = "deleted";
        deleted.value = JSON.stringify(configuration.deleted);

        this.appendChild(deleted);
    }
}
