export let editQuestionModal = $("#updateQuestionModal");
let questionOptionContainer = $("#questionOptionContainer");

$(function () {
    $("#btnCloseEdit").on("click", closeEditModal);
    $("#btnIconClose").on("click", closeEditModal);
});

export function openEditModal(question) {
    editQuestionModal.modal("show");
    questionOptionContainer.append(question.Options());
}

export function closeEditModal() {
    editQuestionModal.modal("hide");
    questionOptionContainer.empty();
    // config = null;
}
