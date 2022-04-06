import { Component } from "./component.js";
import uniqid, { baseRules, buildHelperText } from "./util.js";

export class TextBox extends Component {
    constructor(config) {
        // init parent
        super(config);
        this.blueprint = config;
    }

    content() {
        const wrapper = document.createElement("div");
        wrapper.className += "mb-3";

        const input = this._buildTextField();
        wrapper.appendChild(input);

        // validate when inputable (respondent)
        // TODO : use preferred contentRespondent instead
        if (this._fromRespondent()) {
            if (this.blueprint.validations !== undefined) {
                const invalidMessage = this._buildInvalidContainer();

                // set validations
                this._setValidations(input);
                // this._validateInput();

                wrapper.appendChild(invalidMessage);
            }
        }

        return wrapper;
    }

    observer() {
        let instance = this;
        let validator = function () {
            return new Object({
                get: function (target, index) {
                    const isObjectOrArray =
                        ["[object Object]", "[object Array]"].indexOf(
                            Object.prototype.toString.call(target[index])
                        ) > -1;
                    if (isObjectOrArray) {
                        return new Proxy(target[index], validator());
                    }
                    // console.log("getting : " + "\n" + target[index]);
                    return target[index];
                },
                set: function (target, key, value) {
                    target[key] = value;

                    if (key == "question") {
                        instance._updateQuestion(value);
                    }

                    if (key === "source") {
                        instance._updateMedia();
                    }

                    if (key === "description") {
                        instance._updateMediaDescription();
                    }

                    if (key === "label") {
                        instance._updateLabel();
                    }

                    if (key === "width") {
                        instance._updateAnswerLength();
                    }

                    return true;
                },
            });
        };

        let observer = new Proxy(this.blueprint, validator());

        return observer;
    }

    Options() {
        const form = this._buildOptionsContainer();
        const question = this._updateableQuestion();
        const label = this._updateableLabel();
        const textBoxType = this._buildUpdatableQuestionType();
        const answerLength = this._buildAnswerLengthOption();
        const inputType = this._buildUpdatableInputType();

        form.appendChild(question);
        form.appendChild(label);
        form.appendChild(textBoxType);
        form.appendChild(answerLength);
        form.appendChild(inputType);

        return form;
    }

    ValidationOptions() {
        const wrapper = document.createElement("div");
        wrapper.className += "row";
        wrapper.id = uniqid("validations");

        // validate when option
        const validateWhen = this._buildUpdatableValidateWhen();

        // required option
        const requiredField = this._buildUpdatableRequired();

        // minimum length option
        const minLength = this._buildUpdatableMinLength();

        // maximum length option
        const maxLength = this._buildUpdatableMaxLength();

        wrapper.appendChild(validateWhen);
        wrapper.appendChild(requiredField);
        wrapper.appendChild(minLength);
        wrapper.appendChild(maxLength);

        return wrapper;
    }

    _buildTextField() {
        const input = document.createElement("input");
        input.id = "mainInput";
        input.type = this.blueprint.configuration.inputType;
        input.className += this.blueprint.configuration.style;
        if (this.blueprint.configuration.placeholder !== undefined) {
            input.placeholder += this.blueprint.configuration.placeholder;
        }
        if (this.blueprint.configuration.width === "short") {
            input.style.maxWidth = 350;
        }
        this._fromRespondent()
            ? (input.name = "answers[" + this.blueprint.id + "]")
            : (input.name = "answers[" + this.blueprint.componentId + "]");

        return input;
    }

    _buildInvalidContainer() {
        const container = document.createElement("div");
        container.id = "validationMessageContainer";
        container.className += "invalid-feedback";

        // build errors based on configured validations
        baseRules.forEach((validation) => {
            const rule = validation.rule;
            const message = validation.message;

            const errorItem = this._buildErrorItem(rule, message);
            container.appendChild(errorItem);
        });

        return container;
    }

    _buildErrorItem(itemId, errorMessage) {
        const item = document.createElement("p");
        item.id = itemId;
        item.style.display = "none";
        item.className += "my-0";
        item.innerHTML = "*" + errorMessage;

        return item;
    }

    Validate(validationObserver) {
        this._validateInput(validationObserver);
    }

    // set basic validation
    _setValidations(input) {
        const validationRules = this.blueprint.validations;
        validationRules.forEach((validation) => {
            const rule = validation.rule;

            // set basic attributes
            const isRequired = rule === "required";
            const withMinLength = rule === "minLength";
            const withMaxLength = rule === "maxLength";
            if (isRequired && validation.value) {
                input.setAttribute("required", true);
            } else if (withMinLength) {
                input.setAttribute("min", validation.value);
            } else if (withMaxLength) {
                input.setAttribute("max", validation.value);
            }
        });
    }

    // validate the input when value changed
    _validateInput(validationObserver) {
        const instance = this;
        const input = this._getInput();
        const messageContainer = this._getValidationErrorsContainer();

        input.on("keyup", function () {
            const validationRules = instance.validationObserver();
            validationRules.forEach((validation) => {
                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // check if errors is already shown
                const isShowingErrors = $(this).hasClass("is-invalid");

                // set required
                const isRequired = rule === "required" && value; //is true
                // set min length
                const hasMinimum = rule === "minLength";
                // set max length
                const hasMaximum = rule === "maxLength";

                // empty value
                const isEmpty = this.value === "";

                // zero set value
                const isNotSet =
                    value === 0 || value === false || value === undefined;

                // exceed max length
                const excMax = this.value.length > value;
                // less than min length
                const lessMin = this.value.length < value;

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // check if this field is valid
                const isValid = !isEmpty && !excMax && !lessMin;

                if (isEmpty && isRequired) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && lessMin && hasMinimum) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && excMax && hasMaximum) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else {
                    if (isValid) {
                        errorItem.hide();
                        $(this).removeClass("is-invalid");
                        validationObserver.passed = true;
                    }
                }
            });
        });

        input.on("change", function () {
            const validationRules = instance.validationObserver();
            validationRules.forEach((validation) => {
                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // check if errors is already shown
                const isShowingErrors = $(this).hasClass("is-invalid");

                // set required
                const isRequired = rule === "required" && value; //is true
                // set min length
                const hasMinimum = rule === "minLength";
                // set max length
                const hasMaximum = rule === "maxLength";

                // empty value
                const isEmpty = this.value === "";

                // zero set value
                const isNotSet =
                    value === 0 || value === false || value === undefined;

                // exceed max length
                const excMax = this.value.length > value;
                // less than min length
                const lessMin = this.value.length < value;

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // check if this field is valid
                const isValid = !isEmpty && !excMax && !lessMin;

                if (isEmpty && isRequired) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && lessMin && hasMinimum) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && excMax && hasMaximum) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else {
                    if (isValid) {
                        errorItem.hide();
                        $(this).removeClass("is-invalid");
                        validationObserver.passed = true;
                    }
                }
            });
        });

        input.on("click", function () {
            const validationRules = instance.validationObserver();
            validationRules.forEach((validation) => {
                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // check if errors is already shown
                const isShowingErrors = $(this).hasClass("is-invalid");

                // set required
                const isRequired = rule === "required" && value; //is true
                // set min length
                const hasMinimum = rule === "minLength";
                // set max length
                const hasMaximum = rule === "maxLength";

                // empty value
                const isEmpty = this.value === "";

                // zero set value
                const isNotSet =
                    value === 0 || value === false || value === undefined;

                // exceed max length
                const excMax = this.value.length > value;
                // less than min length
                const lessMin = this.value.length < value;

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // check if this field is valid
                const isValid = !isEmpty && !excMax && !lessMin;

                if (isEmpty && isRequired) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && lessMin && hasMinimum) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && excMax && hasMaximum) {
                    if (!isShowingErrors) {
                        $(this).addClass("is-invalid");
                    }

                    errorItem.show();
                    validationObserver.passed = false;
                } else {
                    if (isValid) {
                        errorItem.hide();
                        $(this).removeClass("is-invalid");
                        validationObserver.passed = true;
                    }
                }
            });
        });
    }

    _buildUpdatableInputType() {
        const wrapper = this._updatableWrapper();
        const label = this._createInputLabel("Tipe Masukkan");

        // check https://www.w3schools.com/html/html_form_input_types.asp for input types
        const inputTypes = [
            {
                value: "text",
                name: "Teks",
                // description: "Input for generic text",
            },
            {
                value: "number",
                name: "Numerik",
                // description: "Input for generic text",
            },
            {
                value: "date",
                name: "Tanggal",
                // description: "Input for generic text",
            },
            {
                value: "datetime-local",
                name: "Tanggal dan waktu",
                // description: "Input for generic text",
            },
            {
                value: "email",
                name: "Email",
                // description: "Input for generic text",
            },
            {
                value: "month",
                name: "Bulan",
                // description: "Input for generic text",
            },
            {
                value: "time",
                name: "Time",
                // description: "Input for time",
            },
            {
                value: "url",
                name: "URL / Tautan",
                // description: "Input for web address",
            },
        ];

        const selectInput = this._createSelect(inputTypes);

        wrapper.appendChild(label);
        wrapper.appendChild(selectInput);
        return wrapper;
    }

    _updateInputType() {}

    _buildAnswerLengthOption() {
        const wrapper = this._updatableWrapper();
        const label = this._createInputLabel("Panjang Jawaban ");

        const observableConfiguration = this.observer().configuration;

        const options = [
            {
                value: "long",
                name: "Jawaban Panjang",
                // description: "Input for generic text",
            },
            {
                value: "short",
                name: "Jawaban Pendek",
                // description: "Input for generic text",
            },
        ];

        const selected = observableConfiguration.width === "long" ? 0 : 1;

        const selectInput = this._createSelect(options, selected);

        selectInput.onchange = function () {
            const selectedOption = $(this).find(":selected").val();
            observableConfiguration.width = selectedOption;
        };

        wrapper.appendChild(label);
        wrapper.appendChild(selectInput);
        return wrapper;
    }

    _updateAnswerLength() {
        const mainInput = $(this).find("#mainInput");
        const width = this.observer().configuration.width;
        if (width === "short") {
            mainInput.get(0).style.maxWidth = 350;
        } else {
            mainInput.get(0).style.maxWidth = "";
        }
    }

    _buildUpdatableQuestionType() {
        const wrapper = this._updatableWrapper();
        const label = this._createInputLabel("Tipe Kotak Teks");
        const types = [
            {
                name: "Baris tunggal",
                value: "input",
            },
            {
                name: "Bidang Teks",
                value: "textarea",
            },
        ];

        wrapper.appendChild(label);
        this._createRadio(types, wrapper);

        return wrapper;
    }

    _updateQuestionType() {}

    _buildUpdatableValidateWhen() {
        const container = document.createElement("div");
        container.className += "mb-3";

        const selectOption = document.createElement("select");
        selectOption.className += "form-select";
        selectOption.id = "selectOption";

        // option onkeyup
        const option1 = document.createElement("option");
        option1.value = "keyup";
        option1.innerHTML = "On user input";

        // option onchange
        const option2 = document.createElement("option");
        option2.value = "change";
        option2.innerHTML = "On value changed";

        selectOption.appendChild(option1);
        selectOption.appendChild(option2);

        const label = this._createInputLabel(
            "Validate When",
            "form-label",
            "selectOption"
        );

        const helperText = buildHelperText(
            "Determine when the validations should be executed"
        );

        container.appendChild(label);
        container.appendChild(selectOption);
        container.appendChild(helperText);

        return container;
    }

    _buildUpdatableRequired() {
        const container = document.createElement("div");
        container.className += "mb-3";

        const label = this._createInputLabel("Required");

        const wrapper = document.createElement("div");
        wrapper.className += "form-check";

        const check = document.createElement("input");
        check.id = "requiredCheck";
        check.type = "checkbox";
        check.className += "form-check-input";
        check.checked = this.validationObserver()[0].value || false;

        // use a fixed index for easier variable finds
        let observableRule = this.validationObserver()[0];

        // update required
        check.onchange = function () {
            // const rule = observableRule;
            // rule.value = this.checked;
            observableRule.value = this.checked;
        };

        const checkLabel = this._createInputLabel(
            "True",
            "form-check-label",
            "requiredCheck"
        );

        wrapper.appendChild(check);
        wrapper.appendChild(checkLabel);

        container.appendChild(label);
        container.appendChild(wrapper);

        return container;
    }

    // update min length rule of this question
    _buildUpdatableMinLength() {
        const instance = this;

        // check if rule is not defined
        // use a fixed index for easier variable finds
        if (this.validationObserver()[1] === undefined) {
            this.validationObserver()[1] = JSON.parse(
                JSON.stringify(baseRules[1])
            );
        }

        const observableRule = this.validationObserver()[1];

        const container = document.createElement("div");
        container.className += "mb-3";

        const label = this._createInputLabel(
            "Minimum Length",
            "form-label",
            "minLength"
        );

        const input = document.createElement("input");
        input.id = "minLength";
        input.className += "form-control";
        input.type = "number";
        input.setAttribute("min", 0);

        input.value = observableRule.value;

        // update minimum value
        input.onchange = function () {
            observableRule.value = this.value;
            observableRule.message = "min length of " + this.value;

            if (this.value === 0 || this.value === "") {
                instance.validationObserver().splice(1, 1);
            }
        };
        const helperText = buildHelperText("Set 0 to remove rule");

        container.appendChild(label);
        container.appendChild(input);
        container.appendChild(helperText);

        return container;
    }

    // update max length rule of this question
    _buildUpdatableMaxLength() {
        const instance = this;
        const observable = this.validationObserver();

        // unique id to avoid collision
        const inputId = uniqid("upMax");

        // check if rule is not defined
        // use a fixed index for easier variable finds
        if (observable[2] === undefined) {
            observable[2] = JSON.parse(JSON.stringify(baseRules[2]));
        }

        const observableRule = observable[2];

        const container = document.createElement("div");
        container.className += "mb-3";

        const label = this._createInputLabel(
            "Maximum Length",
            "form-label",
            inputId
        );
        const input = document.createElement("input");
        input.id = inputId;
        input.className += "form-control";
        input.type = "number";
        input.setAttribute("min", 0);

        // use a fixed index for easier variable finds
        input.value = observableRule.value;

        // update maximum value
        input.onchange = function () {
            observableRule.value = this.value;
            observableRule.message = "max length of " + this.value;

            if (this.value === 0 || this.value === "") {
                instance.validationObserver().splice(2, 1);
            }
        };

        const helperText = buildHelperText("Set 0 to remove rule");

        container.appendChild(label);
        container.appendChild(input);
        container.appendChild(helperText);

        return container;
    }

    // get current input
    _getInput() {
        return $(this).find("#mainInput");
    }

    // get validation errors container
    _getValidationErrorsContainer() {
        return $(this).find("#validationMessageContainer");
    }
}

customElements.define("text-box", TextBox, {
    extends: "div",
});

//user-answer method

/* [
    // single answer
    {
        user: {
            username: "test",
        },
        question: {
            title: "example question",
            type: "text",
        },
        answer: "single line answer",
    },

    // multiple choices
    {
        user: {
            username: "test",
        },
        question: {
            title: "example question",
            type: "multiple choice",
        },
        answer: ["option A", "option B", "option C"],
    },
];

// survey-answer method
[]; */
