import { TextBox } from "../components/textbox.js";
import { MultipleChoice } from "../components/multipleChoice.js";
import { DropDown } from "../components/dropdown.js";
import { UploadFile } from "../components/uploadFile.js";
import { Rating } from "../components/rating.js";
import { getQuestionBank } from "../question-bank/question_bank.js";
import { openEditModal } from "./edit-dialog-options.js";

export let modalDialog = $("#formModal");
export function CreateQuestion(config) {
    let question;

    config.onPositiveButtonClickListener = function (event) {
        event.preventDefault();
        openModal();
    };

    config.onEditButtonClickListener = function (event) {
        event.preventDefault();
        openEditModal(question);
    };

    if (config.questionType == "textBox") {
        question = new TextBox(config);
    } else if (config.questionType == "multiOptions") {
        question = new MultipleChoice(config);
    } else if (config.questionType == "multipleChoice") {
        question = new MultipleChoice(config);
    } else if (config.questionType == "dropdown") {
        question = new DropDown(config);
    } else if (config.questionType == "fileUpload") {
        question = new UploadFile(config);
    } else if (config.questionType == "rating") {
        question = new Rating(config);
    } else {
        // unspecified
    }
    addQuestion(question);
    return question;
}

export function openModal() {
    modalDialog.modal("show");
    getQuestionBank();
}

export function closeModal() {
    modalDialog.modal("hide");
}

let form = document.getElementById("formQuestionBank");
let line = document.getElementById("horizontalLine");

function addQuestion(element) {
    form.insertBefore(element, line);
    closeModal();
}

function deleteQuestion(element) {
    element.remove();
}

export function randomID(prefix = null) {
    var rand = Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);

    if (prefix != null) {
        return prefix + "_" + rand;
    }

    return rand;
}
