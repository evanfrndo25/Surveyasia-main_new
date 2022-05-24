import Blueprint from "../components/blueprint.js";
import { getQuestionBank } from "../question-bank/question_bank.js";
import uniqid, {
    baseRules,
    loadingButtonToNormal,
    transformToLoadingButton,
} from "../components/util.js";
import {
    dropDownComponent,
    fileUploadComponent,
    multiOptionsComponent,
    matrixOptionsComponent,
    multipleChoiceComponent,
    ratingStarComponent,
    scaleComponent,
    textBoxComponent,
} from "../components/componentConfigurations.js";
import { renderQuestion } from "./util.js";
import { configuration } from "../components/configuration.js";

// initiate objects and variables
export let totalQuestion = 0;
let form = $("#formSurveyQuestion");
let btnAdd = $("#btnAddQuestion");
let btnSubmit = $("#submitBtn");
let btnDraftSubmit = $("#submitDraftBtn");
let btnSave = $("#btnSave");
let btnGroup = $("#groupBtn");
let spinner = $("#spinner");
let alert = $("#minQuestionAlert");
let noQuestion = $("#noQuestionContainer");
let questionsContainer = $("#questions_container");
const customElementModal = $("#questionComponentModal");
const editElementModal = $("#updateQuestionModal");

$(function () {
    _initFields();
    _initQuestions();

    customElementModal.on("shown.bs.modal", (event) => {
        const ancessor = event.relatedTarget.getAttribute("data-target-id");
        _initCustomComponentClick(ancessor);
    });

    editElementModal.on("shown.bs.modal", (event) => {
        let questionOptionContainer = $("#questionOptionContainer");
        let questionValidationContainer = $("#questionValidationContainer");
        let questionMediaContainer = $("#questionMediaContainer");
        let questionLogicContainer = $("#questionLogicContainer");

        // empty options first
        questionOptionContainer.empty();
        questionValidationContainer.empty();
        questionMediaContainer.empty();
        questionLogicContainer.empty();

        const componentId = event.relatedTarget.getAttribute("data-target-id");
        const question = $("#" + componentId).get(0);

        questionOptionContainer.append(question.Options());
        questionValidationContainer.append(question.ValidationOptions());
        questionMediaContainer.append(question.MediaOptions());
        questionLogicContainer.append(question.LogicOptions());
        // console.log(question);
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
    btnSubmit.on("click", (event) => {
        event.preventDefault();
        transformToLoadingButton(btnSubmit.get(0));

        // submit when all files are processed
        _saveForm().then(() => {
            form.trigger("submit");
        });
    });

    // submit form with draft type
    btnDraftSubmit.on("click", (event) => {
        event.preventDefault();
        transformToLoadingButton(btnSubmit.get(0));

        // override attribute form action to url storeDraftQuestions
        form[0].action = `${document.location.origin}/researcher/surveys/${survey_id}/draft-questions`;

        // submit when all files are processed
        _saveForm().then(() => {
            form.trigger("submit");
        });
    });

    observer.observe(questionsContainer.get(0), {
        subtree: false,
        childList: true,
    });

    // noQuestion.addClass("show");
}

function _initCustomComponentClick(target) {
    // init on text box clicked
    $("#addTextbox").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(textBoxComponent));
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    // init on multi options clicked
    $("#addMultiOptions").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(multiOptionsComponent));
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    // init on triple options clicked
    $("#addMatrixOptions").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(matrixOptionsComponent));

        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    // init on multiple choice clicked
    $("#addMultipleChoice").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(multipleChoiceComponent));
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    // init on dropdown clicked
    $("#addDropdown").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(dropDownComponent));
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        config.configuration.label = "Masukkan Label Pertanyaan Anda";
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    // init on file clicked
    $("#addFileUpload").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(fileUploadComponent));
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        config.configuration.label = "Unggah bagian file";
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    $("#addScale").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(scaleComponent));
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
        config.configuration.label = "Masukkan Label Pertanyaan Anda";
        renderQuestion(config, target);

        customElementModal.modal("hide");
    };

    // init on rating clicked
    /* $("#addRating").get(0).onclick = function () {
        const config = JSON.parse(JSON.stringify(ratingStarComponent));
        config.configuration.label = "Scale section";
        renderQuestion(config, target);

        customElementModal.modal("hide");
    }; */
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
function _initQuestions() {
    _fetchQuestions()
        .then((response) => {
            // form.show();
            configuration.id = response.id;
            configuration.title = response.title;
            configuration.user = response.creator;

            spinner.hide();
            shouldHideButton();
            if (response.questions.length == 0) {
                noQuestion.addClass("show");
                return;
            }

            configuration.components = response.questions;
            var questions = configuration.components;

            for (let i = 0; i < questions.length; i++) {
                const configuration = JSON.parse(questions[i].configuration);
                configuration.id = questions[i].id;
                const question = renderQuestion(configuration);
                addComponent(configuration, configuration.index);
            }
        })
        .catch((e) => console.log(e));
}

const observer = new MutationObserver(function (children) {
    children.forEach(function (mutation) {
        // const questions = mutation.target.querySelectorAll(".draggable");
        // updateQuestionLabel(questions);
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
        btnSave.addClass("disabled");
    } else {
        noQuestion.addClass("disabled");
        noQuestion.addClass("show");
        noQuestion.show();
    }

    if (totalQuestion >= 5) {
        btnGroup.removeClass("disabled");
        alert.removeClass("show");
        btnSave.removeClass("disabled");
    } else if (totalQuestion >= 1) {
        btnGroup.addClass("disabled");
        btnGroup.addClass("show");
        btnGroup.show();
        alert.addClass("show");
    } else {
        btnGroup.hide();
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

async function _saveForm() {
    const files = await processFiles();
    const questions = questionsContainer.children(".draggable");
    for (let i = 0; i < questions.length; i++) {
        // const configuration = questions[i].setBlueprint();
        const hidden = document.createElement("input");
        hidden.type = "hidden";
        hidden.name = "questions[]"; //this.blueprint.number

        // set/update question position
        questions[i].blueprint.questionNumber = i + 1;
        const currentFile = files.find(
            (x) => x.signature === questions[i].blueprint.componentId
        );
        const hasFile = currentFile !== undefined;

        if (hasFile) {
            questions[i].blueprint.media.source = currentFile.url;
            console.log(questions[i].blueprint.media);
        }

        hidden.value = JSON.stringify(questions[i].blueprint);
        form.append(hidden);
    }

    if (configuration.deleted != null) {
        const deleted = document.createElement("input");
        deleted.type = "hidden";
        deleted.name = "deleted";
        deleted.value = JSON.stringify(configuration.deleted);

        form.append(deleted);
    }
}

function processFiles() {
    // results
    // const results = [];

    // promises
    const promises = [];

    // upload file first
    if (configuration.files != null) {
        configuration.files.forEach((file) => {
            const files = new FormData();
            files.append("user_id", file.id);
            files.append("name", file.name);
            files.append("signature", file.signature);
            files.append("survey_title", file.title);
            files.append("ssf_file", file.file);

            // upload data using API (async)
            promises.push(uploadFile(files));
        });
    }
    return Promise.all(promises);
}

function uploadFile(file) {
    const origin_url = window.location.origin;
    const task = $.ajax({
        url: `${origin_url}/api/uploader/image`, // url
        method: "POST",
        // option to prevent error (do not modify)
        contentType: false,
        processData: false,
        data: file, //data
    });

    return new Promise((resolve) => {
        task.done((result) => resolve(result));
    });
}
