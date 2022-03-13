export let editQuestionModal = $("#updateQuestionModal");
let questionOptionContainer = $("#questionOptionContainer");
let questionValidationContainer = $("#questionValidationContainer");

$(function () {
    $("#btnCloseEdit").on("click", closeEditModal);
    $("#btnIconClose").on("click", closeEditModal);
});

export function openEditModal(question) {
    editQuestionModal.modal("show");
    questionOptionContainer.append(question.Options());
    questionValidationContainer.append(question.ValidationOptions());
}

export function closeEditModal() {
    editQuestionModal.modal("hide");
    questionOptionContainer.empty();
    questionValidationContainer.empty();
    // config = null;
}
