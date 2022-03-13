var questionNo = 0;
var questionCount = 1;
var optionCount = 0;

// Primary Question
function addQuestion() {
    var container = document.getElementById("primary-question");
    var question = createQuestionElement();
    container.append(question);
}

function createQuestionElement() {
    questionNo++;
    questionCount++;

    // reset option count
    optionCount = 0;

    // Question container div
    var questionContainer = document.createElement("div");
    questionContainer.className += "border rounded mt-3 p-3";
    questionContainer.id = "question_container" + questionNo;

    var col = document.createElement("div");
    col.className += "col-md-12";

    var row = document.createElement("div");
    row.className += "row";

    var questionLabel = document.createElement("p");
    questionLabel.innerHTML = "Pertanyaan Anda";

    row.append(questionLabel);

    var col9 = document.createElement("div");
    col9.className += "col-9";

    var formFloatingContainer = document.createElement("div");
    formFloatingContainer.className += "form-floating";

    col9.append(formFloatingContainer);

    var questionInput = document.createElement("input");
    questionInput.className += "form-control";
    questionInput.placeholder = "Masukkan Pertanyaan";
    questionInput.id = "questions[" + questionNo + "]";
    questionInput.name = "questions[" + questionNo + "]";
    questionInput.type = "text";

    var questionLabel = document.createElement("label");
    questionLabel.className += "text-muted";
    questionLabel.innerHTML = "Masukkan Pertanyaan";

    formFloatingContainer.append(questionInput, questionLabel);

    var questionTypeContainer = document.createElement("div");
    questionTypeContainer.className += "col-3";

    row.append(col9, questionTypeContainer);

    // answer container - gone if text field
    var ansContainer = document.createElement("div");
    ansContainer.className += "answer-div";
    ansContainer.id = "answer_container" + questionNo;

    // create 2 options
    for (let i = 0; i < 2; i++) {
        var option = createAnswerOption(ansContainer.id, questionNo, i);
        ansContainer.append(option);
        optionCount++;
    }

    // console.log(ansContainer.outerHTML);

    //question type select dropdowns
    var questionTypeSelect = document.createElement("select");
    questionTypeSelect.id = "question_type[" + questionNo + "]";
    questionTypeSelect.name = "question_type[" + questionNo + "]";
    questionTypeSelect.className += "form-select";
    questionTypeSelect.onchange = function () {
        optionTypeChange(this, ansContainer.id);
    };

    //create list of options for question type
    var optionText = document.createElement("option");
    optionText.value = 1;
    optionText.innerHTML = "Textbox";
    var optionCheckbox = document.createElement("option");
    optionCheckbox.value = 2;
    optionCheckbox.innerHTML = "Checkbox";
    var optionMultipleChoice = document.createElement("option");
    optionMultipleChoice.value = 3;
    optionMultipleChoice.innerHTML = "Multiple Choice";
    var optionRating = document.createElement("option");
    optionRating.value = 4;
    optionRating.innerHTML = "Rating";
    var optionDropdown = document.createElement("option");
    optionDropdown.value = 5;
    optionDropdown.innerHTML = "Dropdown";
    var optionFileUpload = document.createElement("option");
    optionFileUpload.value = 6;
    optionFileUpload.innerHTML = "File Upload";

    questionTypeSelect.append(
        optionText,
        optionCheckbox,
        optionMultipleChoice,
        optionRating,
        optionDropdown,
        optionFileUpload
    );

    questionTypeContainer.append(questionTypeSelect);

    ansContainer.style.display = "none";

    var horizontalDivider = document.createElement("hr");

    var actionButton = createQuestionActionButton(questionContainer.id);

    col.append(row, ansContainer, horizontalDivider, actionButton);

    questionContainer.append(col);

    return questionContainer;
}

function optionTypeChange(element, id) {
    console.log(element.value);

    var ansContainer = document.getElementById(id);

    // reset option count
    optionCount = 0;

    if (element.value == 1) {
        ansContainer.style.display = "none";
    } else {
        ansContainer.style.display = "block";
    }
}

function createQuestionActionButton(parentId) {
    var row = document.createElement("div");
    row.className += "row";

    var col = document.createElement("div");
    col.className += "col text-end";

    var deleteButton = document.createElement("button");
    deleteButton.className +=
        "btn btn-link link-secondary text-decoration-none";
    deleteButton.addEventListener("click", function (event) {
        event.preventDefault();
        removeQuestion(this, parentId);
    });
    deleteButton.type = "button";

    var deleteIcon = document.createElement("i");
    deleteIcon.className += "fas fa-trash-alt fa-fw";
    deleteButton.append(deleteIcon);

    var deleteText = document.createTextNode("Hapus");
    deleteButton.appendChild(deleteText);

    var createButton = document.createElement("button");
    createButton.className +=
        "btn btn-link link-secondary text-decoration-none";
    createButton.addEventListener("click", function (event) {
        event.preventDefault();
        addQuestion();
    });
    createButton.type = "button";

    var createIcon = document.createElement("i");
    createIcon.className += "fas fa-file-medical fa-fw";
    createButton.append(createIcon);

    var createText = document.createTextNode("Tambah");
    createButton.appendChild(createText);

    col.append(deleteButton, createButton);

    row.append(col);

    return row;
}

function createAnswerOption(parentId, no, count) {
    optionCount++;
    count++;
    var row = document.createElement("div");
    row.className += "row survey-answer mt-2";
    row.id = "option" + no + count;
    var col = document.createElement("div");
    col.className += "col-10";

    var formCheck = document.createElement("div");
    formCheck.className += "form-check";

    var option = document.createElement("input");
    option.id = "options[" + no + "][]";
    option.name = "options[" + no + "][]";
    option.type = "text";
    option.className += "form-control";
    option.placeholder = "Masukkan Jawaban";

    formCheck.append(option);
    col.append(formCheck);

    var answerButtonActions = createAnswerActionButton(
        parentId,
        row.id,
        no,
        count
    );

    row.append(col, answerButtonActions);

    return row;
}

function createAnswerActionButton(parentId, rowId, no, count) {
    var col = document.createElement("div");
    col.className += "col-2 text-center";

    var deleteButton = document.createElement("button");
    deleteButton.className +=
        "btn btn-link link-secondary text-decoration-none";
    deleteButton.style.display = "none";
    deleteButton.addEventListener("click", function (e) {
        e.preventDefault();
        //delete ans
        removeAnswer(rowId);
    });

    var deleteIcon = document.createElement("i");
    deleteIcon.className += "fas fa-minus-circle fa-fw";

    deleteButton.append(deleteIcon);

    var createButton = document.createElement("button");
    createButton.className +=
        "btn btn-link link-secondary text-decoration-none";
    createButton.addEventListener("click", function (e) {
        e.preventDefault();
        //add ans
        addAnswer(parentId, no, count);
    });

    var createIcon = document.createElement("i");
    createIcon.className += "fas fa-plus-circle fa-fw";

    createButton.append(createIcon);

    if (count == 1) {
        createButton.style.display = "none";
    }

    if (count == 1 || count == 2) {
        deleteButton.style.display = "none";
    } else {
        deleteButton.style.margin = "0";
        deleteButton.style.display = "inline";
    }

    col.append(deleteButton, createButton);

    return col;
}

function removeQuestion(element, id) {
    console.log(id);
    var questionContainer = document.getElementById(id);
    questionContainer.remove();
    questionCount--;
}

function addAnswer(parentId, no, count) {
    var answerContainer = document.getElementById(parentId);
    var answerOption = createAnswerOption(parentId, no, count);
    answerContainer.append(answerOption);
}

function removeAnswer(parentId) {
    var answer = document.getElementById(parentId);
    answer.remove();
    console.log(parentId);
}
// End Primary Question

function createDropdownItem(value, questionId, index) {
    var select = document.createElement("select");
    select.className += "form-select";

    var container = document.createElement("div");
    container.id = "option" + questionId + index;

    var item = document.createElement("option");
    item.value = value;
    item.name = "answer[" + questionId + "]";
    item.innerHTML = value;

    item.onchange = function () {
        nextBtn.classList.remove("disabled");

        if (questionNo + 1 == totalQuestions) {
            nextBtn.style.display = "none";
            document.getElementById("submitBtn").style.display = "inline";
        }
    };

    var questionType = createQuestionType(questionId, TYPE_DROPDOWN);

    container.appendChild(questionType);
    container.appendChild(item);
    select.appendChild(container);

    console.log(select.outerHTML);

    return select;
}
