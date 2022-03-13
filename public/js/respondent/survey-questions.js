import {
    CreateQuestion,
    nextButton,
    nextQuestion,
    previousButton,
    previousQuestion,
    questionContainer,
    questionObserver,
    questionUtils,
    showQuestion,
    startTimer,
    stopTimer,
} from "./question-util.js";

let creator;

$(function () {
    showQuestions();

    nextButton.on("click", nextQuestion);
    previousButton.on("click", previousQuestion);

    $("#form").on("submit", function (event) {
        // event.preventDefault();

        var hiddenCreatorField = document.createElement("input");
        hiddenCreatorField.type = "hidden";
        hiddenCreatorField.name = "creator";
        hiddenCreatorField.value = JSON.stringify(creator);

        this.appendChild(hiddenCreatorField);

        var hiddenTimer = document.createElement("input");
        hiddenTimer.type = "hidden";
        hiddenTimer.name = "time_elapsed";
        hiddenTimer.value = stopTimer();

        this.appendChild(hiddenTimer);

        var hiddenTotalQuestion = document.createElement("input");
        hiddenTotalQuestion.type = "hidden";
        hiddenTotalQuestion.name = "total_question";
        hiddenTotalQuestion.value = questionUtils.totalQuestion;

        this.appendChild(hiddenTotalQuestion);

        // use stop propagation if necessary
        // event.stopPropagation();
    });
});

async function _fetchSurvey() {
    const response = await fetch(url, {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
        mode: "cors",
    });

    return await response.json();
}

function showQuestions() {
    _fetchSurvey()
        .then((response) => {
            if (response.questions == null) {
                console.log("No questions present");
                return;
            }

            // get survey creator object for necessary actions
            creator = response.creator;

            // clean all questions
            questionContainer[0].innerHTML = "";

            // fetch questions
            const questions = response.questions;

            // get observable values and modify
            const observable = questionObserver();
            observable.totalQuestion = questions.length;

            // create questions
            for (let i = 0; i < questions.length; i++) {
                // modify config to be inputable for respondent
                const config = JSON.parse(questions[i].configuration);
                config.id = questions[i].id;
                config.inputable = true;

                // check validation
                const hasValidation =
                    config.validations !== undefined &&
                    config.validations.length != 0;

                if (hasValidation) {
                    // if exists, validation will be captured
                    // and user not allowed to next question

                    let rules = [];
                    let passed = false;

                    config.validations.forEach((validation) => {
                        if (validation !== null) {
                            // if not required, question can be passed
                            const isNotRequired =
                                validation.rule === "required" &&
                                validation.value === false;

                            if (isNotRequired) {
                                passed = true;
                                return;
                            }

                            /*  rules.push({
                                rule: validation.rule,
                                passed: false,
                            }); */
                        }
                    });

                    questionUtils.validationBag.push({
                        id: config.componentId,
                        // rules: rules,
                        passed: passed,
                    });
                } else {
                    // if not, this question can be passed
                    // without input
                    questionUtils.validationBag.push({
                        id: config.componentId,
                        passed: true,
                    });
                }

                // render questions
                _renderQuestion(config);
            }

            showQuestion(0);

            // startTimer();
        })
        .catch((e) => console.log(e));
}

function _renderQuestion(config) {
    const questionBox = CreateQuestion(config);
    questionContainer.append(questionBox);
}
