import { configuration } from "../components/configuration.js";
import { DropDown } from "../components/dropdown.js";
import { MultipleChoice } from "../components/multipleChoice.js";
import { MultiOption } from "../components/multiOption.js"
import { TextBox } from "../components/textbox.js";
import { UploadFile } from "../components/uploadFile.js";
import uniqid from "../components/util.js";


export function renderQuestion(config, after = null) {
    let questionsContainer = $("#questions_container");
    let questionElement;
    
    if (config.componentId === undefined) {
        config.componentId = uniqid("component");
    }

    if (config.media === undefined) {
        config.media = {};
    }

    if (config.meta === undefined) {
        config.meta = {
            survey: {},
            user: {},
        };
        config.meta.survey = {
            id: configuration.id,
            title: configuration.title,
        };
        config.meta.user = configuration.user;
    }

    switch (config.componentName) {
        case "textBox":
            questionElement = new TextBox(config);
            break;
        case "multipleChoice":
            questionElement = new MultipleChoice(config);
            break;
        case "multiOptions":
            questionElement = new MultiOption(config);
            break;
        case "dropdown":
            questionElement = new DropDown(config);
            break;
        case "fileUpload":
            questionElement = new UploadFile(config);
            break;
        case "ratingStar":
            questionElement = new MultipleChoice(config);
            break;
        case "scale":
            questionElement = new MultipleChoice(config);
            break;
        default:
            // undefined
            break;
    }

    if (after !== null) {
        $("#" + after).after(questionElement);
    } else {
        questionsContainer.append(questionElement);
    }

    return questionElement;
}
