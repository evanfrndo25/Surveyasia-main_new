import Blueprint from "../components/blueprint.js";
import { CreateQuestion, openModal } from "./dialog-actions.js";
import { configuration } from "../components/configuration.js";

// initiate objects and variables

export let totalQuestion = 0;
let form = $("#formQuestionBank");
let btnAdd = $("#btnAddQuestion");
let btnSubmit = $("#submitBtn");
let spinner = $("#spinner");
let alert = $("#minQuestionAlert");
let noQuestion = $("#noQuestionContainer");
let questionsContainer = $("#questions_container");

$(function () {
    _initQuestions();

    // init on text box clicked
    $("#addTextboxQb").on("click", function () {
        if (totalQuestion == 0) {
            totalQuestion++;
        }
        let option = new Blueprint();
        option.question = "Example TextBox question Fadhil";
        option.number = totalQuestion;
        option.type = "text";
        option.questionType = "textBox";
        option.label = "Question " + totalQuestion;
        const question = CreateQuestion(option);
    });

    // init on multi options clicked
    $("#addMultiOptionsQb").on("click", function () {
        if (totalQuestion == 0) {
            totalQuestion++;
        }
        let option = new Blueprint();
        option.question = "Example Multi Options question";
        option.number = totalQuestion;
        option.type = "checkbox";
        option.questionType = "multiOptions";
        option.label = "Question " + totalQuestion;
        option.options = ["Option 1", "Option 2", "Option 3", "Option 4"];
        const question = CreateQuestion(option);
    });

    // init on multiple choice clicked
    $("#addMultipleChoiceQb").on("click", function () {
        if (totalQuestion == 0) {
            totalQuestion++;
        }
        let option = new Blueprint();
        option.question = "Example Multiple Choice question";
        option.number = totalQuestion;
        option.type = "radio";
        option.questionType = "multipleChoice";
        option.label = "Question " + totalQuestion;
        option.options = ["Agree", "Disagree"];
        const question = CreateQuestion(option);
    });

    // init on dropdown clicked
    $("#addDropdownQb").on("click", function () {
        if (totalQuestion == 0) {
            totalQuestion++;
        }
        let option = new Blueprint();
        option.question = "Example Dropdown question";
        option.number = totalQuestion;
        option.type = "select";
        option.questionType = "dropdown";
        option.label = "Question " + totalQuestion;
        option.options = ["Option 1", "Option 2", "Option 3", "Option 4"];
        const question = CreateQuestion(option);
    });

    // init on file clicked
    $("#addFileUploadQb").on("click", function () {
        if (totalQuestion == 0) {
            totalQuestion++;
        }
        let option = new Blueprint();
        option.question = "Example File Upload question (on progress)";
        option.number = totalQuestion;
        option.type = "file";
        option.questionType = "fileUpload";
        option.label = "Question " + totalQuestion;
        const question = CreateQuestion(option);
    });

    // init on rating clicked
    $("#addRating").on("click", function () {
        let option = new Blueprint();
        option.question = "Example Rating Question";
        option.number = totalQuestion;
        option.type = "radio";
        option.questionType = "rating";
        option.label = "Question " + totalQuestion;
        option.options = ["1", "2", "3", "4", "5"];
        const question = CreateQuestion(option);
    });
});

function _initFields() {
    /* Sortable.create(form.get(0), {
        animation: 150,
        ghostClass: "ghost",
        draggable: ".draggable",
        // onEnd: onListChanged,
    }); */
    btnAdd.on("click", () => {
        openModal();
    });
    form.on("submit", _saveForm);
    observer.observe(form.get(0), {
        subtree: false,
        childList: true,
    });

    noQuestion.addClass("show");
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
            form.show();
            spinner.hide();
            shouldHideButton();
            _initFields();
            if (response.questions == null) {
                return;
            }
            configuration.user = response.creator;
            configuration.components = response.questions;
            var questions = configuration.components;
            for (let i = 0; i < questions.length; i++) {
                const configuration = questions[i];
                configuration.number = i + 1;
                configuration.label = "Question " + (i + 1);
                // console.log(configuration);
                CreateQuestion(configuration);
            }
        })
        .catch((e) => console.log(e));
}

const observer = new MutationObserver(function (children) {
    children.forEach(function (mutation) {
        const questions = mutation.target.querySelectorAll(".draggable");
        updateQuestionLabel(questions);
        mutation.addedNodes.forEach(function (node) {
            if (node.className.includes("draggable")) {
                nextQuestion();
                shouldHideButton();
            }
        });

        mutation.removedNodes.forEach(function (node, index) {
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

function nextQuestion() {
    totalQuestion++;
}

function previousQuestion() {
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
        questions[i].children[0].innerHTML = "Question " + (i + 1);
        console.log(questions[i].children[0]);
    }
}

function addComponent(option, index = null) {
    configuration.components.push(option);
}

// swap position element in configurationuration
function updateComponent(elA, elB) {
    let arr = configuration.components;

    // console.log(arr);

    // swap
    // [arr[elA], arr[elB]] = [arr[elB], arr[elA]];

    // correcting label / swap label
    // [arr[elA].label, arr[elB].label] = [arr[elB].label, arr[elA].label];
}

function removeComponent(index) {
    configuration.components.pop(index);
}

function _saveForm(event) {
    // event.preventDefault();
    const questions = questionsContainer.children(".draggable");
    for (let i = 0; i < questions.length; i++) {
        // const configuration = questions[i].setBlueprint();
        // addComponent(configuration);
        const hidden = document.createElement("input");
        hidden.type = "hidden";
        hidden.name = "questions[]";

        questions[i].blueprint.questionNumber = i + 1;

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

    // console.log(JSON.stringify(configuration.deleted));
}
