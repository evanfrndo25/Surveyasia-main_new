export let editQuestionModal = $("#updateQuestionModal");
let questionOptionContainer = $("#questionOptionContainer");
let questionValidationContainer = $("#questionValidationContainer");
let questionLogicContainer = $("#questionLogicContainer");

$(function () {
    $("#btnCloseEdit").on("click", closeEditModal);
    $("#btnIconClose").on("click", closeEditModal);
});

export function openEditModal(question) {
    editQuestionModal.modal("show");
    questionOptionContainer.append(question.Options());
    questionValidationContainer.append(question.ValidationOptions());
    questionLogicContainer.append(question.LogicOptions());
}

export function closeEditModal() {
    editQuestionModal.modal("hide");
    questionOptionContainer.empty();
    questionValidationContainer.empty();
    questionLogicContainer.empty();
    // config = null;
}