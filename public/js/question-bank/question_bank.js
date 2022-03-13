import { configuration } from "../components/configuration.js";
import uniqid from "../components/util.js";
import { renderQuestion } from "../researcher/util.js";
import {
    addComponent,
    sortComponents,
    totalQuestion,
} from "../researcher/create-survey.js";

const container = $("#questionBankContainer");

var components = [];

// question bank should only be fetched when dialog is opened
async function _fetchQuestionBank() {
    const response = await fetch(
        "http://localhost:8000/api/survey/question-bank",
        {
            headers: {
                Accept: "application/json",
            },
        }
    );

    return await response.json();
}

export function getQuestionBank() {
    _fetchQuestionBank()
        .then((response) => buildQuestionBank(response))
        .catch((e) => console.log(e));
}

// separate this code to a new file
function buildQuestionBank(data) {
    for (let i = 0; i < data.length; i++) {
        const item = _buildTemplateItem(data[i]);
        container.append(item);
    }
}

function _buildTemplateItem(data) {
    // console.log(data);
    if (data.sub_templates.length < 1) {
        return false;
    }

    const targetId = uniqid("template");

    const templateItem = document.createElement("div");
    templateItem.className += "accordion-item";

    const templateTitle = document.createElement("h2");
    templateTitle.className += "accordion-header";
    const textTitleNode = document.createTextNode(data.name);

    const btnToggler = document.createElement("button");
    btnToggler.className += "accordion-button collapsed";
    btnToggler.dataset.bsToggle = "collapse";
    btnToggler.dataset.bsTarget = "#" + targetId;
    btnToggler.ariaExpanded = true;
    btnToggler.ariaControls = targetId;

    btnToggler.appendChild(textTitleNode);
    templateTitle.appendChild(btnToggler);

    const templateItemContent = document.createElement("div");
    templateItemContent.id = targetId;
    templateItemContent.className += "accordion-collapse collapse";
    templateItemContent.ariaLabel = data.name;
    templateItemContent.dataset.bsParent = "#questionBankContainer";

    const itemContent = document.createElement("div");
    itemContent.className += "accordion-body";

    const content = document.createElement("div");
    content.id = uniqid("content");
    content.className += "list-group";

    // const templateDescription = document.createElement("h6");
    // templateDescription.innerHTML = "Place some description here...";

    // sub templates
    for (let i = 0; i < data.sub_templates.length; i++) {
        const subtemplates = data.sub_templates[i];
        const subtemplateEl = _buildSubtemplateItem(subtemplates, content.id);
        itemContent.appendChild(subtemplateEl);
    }

    // itemContent.appendChild(templateDescription);
    itemContent.appendChild(content);

    templateItemContent.appendChild(itemContent);

    templateItem.appendChild(templateTitle);
    templateItem.appendChild(templateItemContent);

    return templateItem;
}

function _buildSubtemplateItem(data, parentId) {
    const item = document.createElement("button");
    item.className += "list-group-item list-group-item-action";
    item.innerHTML = data.sub_template_name;
    item.onclick = function (e) {
        e.preventDefault();
        openModal(data);
    };

    return item;
}

function openModal(data) {
    $("#questionBankModal").modal("show");

    // modal title
    $("#questionBankTitle").get(0).innerHTML = data.sub_template_name;

    // preview cards
    const previewContainer = buildPreview();

    // question cards
    const questionsContainer = buildQuestions(data);

    // save btn click
    $("#saveQuestionBankBtn").on("click", function (e) {
        e.preventDefault();
        appendSelectedQuestions();
    });
}

function closeModal() {
    $("#questionBankModal").modal("hide");
}

function buildQuestions(data) {
    // question cards container
    const questionsContainer = $("#questionBankModalContent").get(0);
    questionsContainer.innerHTML = "";

    const questionContent = document.createElement("div");
    questionContent.className += "row";

    // build question card item
    for (let i = 0; i < data.questions.length; i++) {
        var isAdded = false;
        for (let j = 0; j < configuration.questionBank.length; j++) {
            const addedQ = configuration.questionBank[j];
            if (data.questions[i].id == addedQ.questionBankId) {
                isAdded = true;
                break;
            }
        }
        const config = JSON.parse(data.questions[i].configuration);
        config.id = data.questions[i].id;
        config.configuration.label = data.sub_template_name;
        const question = _buildQuestionItem(config, i, isAdded);
        questionContent.appendChild(question);
    }

    questionsContainer.appendChild(questionContent);

    return questionsContainer;
}

function addAll() {
    btn = document.querySelectorAll("#btn-add");
    btn.forEach(function (item) {
        return item.value;
    });
    undefined;
    btn.forEach(function (item) {
        item.click();
    });
}

function _buildQuestionItem(data, number, isAdded) {
    const container = document.createElement("div");
    container.className += "col-6 mt-3";

    const card = document.createElement("div");
    card.className += "card";
    // add some hover effect here
    // card.onmouseover
    // card.onmouseleave
    // card.style.cursor = "pointer";

    const content = document.createElement("div");
    content.className += "card-body";
    if (data.componentName == "textBox") {
        content.style.height = "100px";
    } else {
        content.style.height = "220px";
    }

    const questionTitle = document.createElement("h6");
    questionTitle.className += "card-title";
    questionTitle.innerHTML = data.question;

    const addBtn = document.createElement("div");
    addBtn.id = "btn-add";
    addBtn.className += "d-flex justify-content-end";
    addBtn.onclick = function (event) {
        event.preventDefault();

        // add position for easier search
        // data.position = number;

        // add selected question to preview
        _addQuestion(data);

        // set disabled for this question
        this.onclick = null;
        this.innerHTML = "";
    };

    const addIcon = document.createElement("i");
    addIcon.style.cursor = "pointer";
    addIcon.className += "fas fa-plus-circle rounded-circle";

    addBtn.appendChild(addIcon);

    if (!isAdded) content.appendChild(addBtn);
    content.appendChild(questionTitle);
    // question options if any
    if (data.options != null) {
        const optionContainer = document.createElement("div");
        optionContainer.className += "list-group list-group-flush";
        for (let i = 0; i < data.options.length; i++) {
            const option = createOptions(
                data.options[i],
                data.configuration.inputType,
                i == 2,
                data.options.length - i
            );
            optionContainer.appendChild(option);
            if (i == 2) break;
        }
        content.appendChild(optionContainer);
    }

    const infoFooter = document.createElement("div");
    infoFooter.className += "card-footer";

    const componentNameBadge = document.createElement("div");
    componentNameBadge.className += "badge bg-secondary mx-1";
    componentNameBadge.innerHTML += data.componentName;

    const inputTypeBadge = document.createElement("div");
    inputTypeBadge.className += "badge bg-secondary mx-1";
    inputTypeBadge.innerHTML += data.configuration.inputType;

    infoFooter.appendChild(componentNameBadge);
    infoFooter.appendChild(inputTypeBadge);
    // const componentName = document.createElement("span");

    // content.appendChild(question);
    card.appendChild(content);
    card.appendChild(infoFooter);
    container.appendChild(card);

    return container;
}

function createOptions(option, type, truncate, length) {
    const container = document.createElement("li");
    container.className += "list-group-item";

    if (type == "select") {
        container.innerHTML = option;

        // truncate option
        if (truncate && length != 2) {
            container.innerHTML = length + " more options..";
        }
    } else {
        // truncate option
        if (truncate && length != 2) {
            container.innerHTML = length + " more options..";
        } else {
            const inputContainer = document.createElement("div");
            inputContainer.className += "form-check";
            const inputPreview = document.createElement("input");
            inputPreview.name = "prefs[]";
            inputPreview.type = type;
            inputPreview.className += "form-check-input";

            const optionValue = document.createElement("label");
            optionValue.className += "card-text";
            optionValue.innerHTML = option;

            inputContainer.appendChild(inputPreview);
            inputContainer.appendChild(optionValue);
            container.appendChild(inputContainer);
        }
    }

    return container;
}

function buildPreview() {
    const previewContainer = $("#questionBankModalPreview").get(0);
    previewContainer.innerHTML = "";

    const row = document.createElement("div");
    row.id = "previewContainer";
    row.style.maxHeight = 550;
    row.className += "row overflow-auto";

    // title preview
    const titleHeader = document.createElement("h5");
    titleHeader.className += "mb-3 text-center";
    titleHeader.innerHTML = "My Questions";

    row.appendChild(titleHeader);

    if (configuration.questionBank.length != 0) {
        for (let i = 0; i < configuration.questionBank.length; i++) {
            const myQuestion = configuration.questionBank[i];
            const questionEl = createPreviewItem(myQuestion);
            row.appendChild(questionEl);
        }
    }

    previewContainer.appendChild(row);

    return previewContainer;
}

function _addQuestion(data) {
    components.push(data);
    // create preview question card
    const questionEl = createPreviewItem(data);
    $("#previewContainer").append(questionEl);

    showSaveButton();
}

function createPreviewItem(data) {
    const container = document.createElement("div");
    container.className += "mb-3";

    const card = document.createElement("div");
    card.className += "card";

    const content = document.createElement("div");
    content.className += "card-body";

    const question = document.createTextNode(data.question);
    content.appendChild(question);

    card.appendChild(content);

    container.appendChild(card);

    return container;
}

function showSaveButton() {
    $("#saveQuestionBankBtn").removeClass("visually-hidden");
}

// append all selected questions in question bag
function appendSelectedQuestions() {
    for (let i = 0; i < components.length; i++) {
        // set default question config
        const config = components[i];
        // set container id from here
        config.questionBankId = config.id;
        config.id = null; //set null to prevent override

        const options = [];

        // set default question options config if any
        if (config.options != null) {
            for (let i = 0; i < config.options.length; i++) {
                options.push(config.options[i]);
            }
            config.options = Array.from(options);
        }
        _createQuestion(config);

        // push only required values
        const questionConfig = new Object();
        questionConfig.question = config.question;
        questionConfig.questionBankId = config.questionBankId;
        configuration.questionBank.push(config);
    }

    // empty component for next selection
    components = [];
    // sortComponents();
    closeModal();
}

function _createQuestion(config) {
    // console.log(config);
    const questionInstance = renderQuestion(config);
    addComponent(config);

    return questionInstance;
}
