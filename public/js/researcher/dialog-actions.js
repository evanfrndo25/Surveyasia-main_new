import { TextBox } from "../components/textbox.js";
import { MultipleChoice } from "../components/multipleChoice.js";
import { DropDown } from "../components/dropdown.js";
import { UploadFile } from "../components/uploadFile.js";
import { Rating } from "../components/rating.js";
import { openEditModal } from "./edit-dialog-options.js";

export let modalDialog = $("#questionComponentModal");

let targetId;
let targetPosition;

export function CreateQuestion(config) {
    let question;

    // store function as string
    config.onPositiveButtonClickListener = function (event) {
        // event.preventDefault();
        // openModal();
        // targetId = config.containerId;
    };

    // store function as string
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
        // undefined
    }
    if (targetId != undefined) {
        question.blueprint.appendAfter = targetId;
    }
    closeModal();
    return question;
}

export function openModal() {
    modalDialog.modal("show");
}

export function closeModal() {
    modalDialog.modal("hide");
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
