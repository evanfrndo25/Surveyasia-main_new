export default function Blueprint(
    type = "text",
    question = "Example Question",
    label = "Question 1",
    questionType = "textBox",
    input = true,
    draggable = true,
    actionButton = null
) {
    this.type = type;
    this.question = question;
    this.label = label;
    this.questionType = questionType;
    this.input = input;
    this.draggable = draggable;
    this.actionButton = actionButton;
}
