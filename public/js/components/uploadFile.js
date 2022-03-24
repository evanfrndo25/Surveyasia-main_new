import Blueprint from "./blueprint.js";
import { Component } from "./component.js";
import uniqid, { baseRules, buildHelperText } from "./util.js";

export class UploadFile extends Component {
    constructor(config) {
        // init parent
        super(config);
        this.blueprint = config;
    }

    

    content() {
        const wrapper = document.createElement("div");
        wrapper.className += "mb-3";
        wrapper.id = uniqid("wrapper");

        const label = document.createElement("label");
        label.className += "form-label";
        label.innerHTML = this.blueprint.configuration.label;

        const input = document.createElement("input");
        input.id = "mainInput";
        input.type = "file";
        this._fromRespondent()
            ? (input.name = "answers[" + this.blueprint.id + "]")
            : (input.name = "answers[" + this.blueprint.componentId + "]");
        input.className += "form-control";

        wrapper.appendChild(label);
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

    ValidationOptions() {
        const wrapper = document.createElement("div");
        wrapper.className += "row";
        wrapper.id = uniqid("validations");

        // required option
        const requiredField = this._buildUpdatableRequired();

        // maximum length option
        const maxLength = this._buildUpdatableMaxLength();

        // file type
        const fileType = this._buildUpdatableFileType();

        wrapper.appendChild(requiredField);
        wrapper.appendChild(maxLength);
        wrapper.appendChild(fileType);

        return wrapper;
    }

    
    _buildInvalidContainer() {
        const container = document.createElement("div");
        container.id = "validationMessageContainer";
        container.className += "invalid-feedback";

        // build errors based on configured validations
        baseRules.forEach((validation) => {
            const rule = validation.rule;
            let message;

            if (rule === "maxLength" && validation.value === 0) {
                message = "maximum file size of 2000 Kb";
            } else {
                message = validation.message;
            }

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
            if (validation === null) {
                return;
            }
            const rule = validation.rule;
            const value = validation.value;

            // set basic attributes
            const isRequired = rule === "required";
            const withFileType = rule === "fileType";
            if (isRequired) {
                input.setAttribute("required", value);
            } else if (withFileType) {
                if (value === 2) {
                    input.setAttribute("accept", "image/*");
                } else if (value === 1) {
                    const fileTypes = this._getFileTypes(1);
                    input.setAttribute("accept", fileTypes.join(", "));
                    /* input.setAttribute(
                        "accept",
                        ".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                    ); */
                }
            }
        });
    }

    // validate the input when value changed
    _validateInput(validationObserver) {
        const instance = this;
        const input = this._getInput();
        const messageContainer = this._getValidationErrorsContainer();

        input.on("change", function () {
            const validationRules = instance.validationObserver();
            const file = this.files[0];
            validationRules.forEach((validation) => {
                if (validation === null) {
                    return;
                }

                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // check if errors is already shown
                const isShowingErrors = $(this).hasClass("is-invalid");

                // set required
                const isRequired = rule === "required" && value; //is true

                // set max length
                const hasMaximum = rule === "maxLength";

                // set file type
                const hasFileTypes = rule === "fileType";

                // empty value
                const isEmpty = this.value === "";

                // zero set value
                const isNotSet =
                    value === 0 || value === false || value === undefined;

                // exceed max length
                const excMax =
                    file.size > value * 1024 || file.size > 2000 * 1024;

                // incorrect file type
                const incorrectFile =
                    hasFileTypes &&
                    instance._getFileTypes(value).includes(file.type);

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // check if this field is valid
                const isValid = !isEmpty && !excMax && !incorrectFile;

                if (isEmpty && isRequired) {
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
                } else if (!isNotSet && incorrectFile && hasFileTypes) {
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

    // update max length rule of this question
    _buildUpdatableMaxLength() {
        const instance = this;
        const observable = this.validationObserver();

        // check if rule is not defined
        // use a fixed index for easier variable finds
        if (observable[2] === undefined) {
            observable[2] = JSON.parse(JSON.stringify(baseRules[2]));
            observable[2].value = 2000;
            observable[2].message = "maximum file size of 2000 Kb";
        }

        const observableRule = observable[2];

        const container = document.createElement("div");
        container.className += "mb-3";

        const label = this._createInputLabel(
            "Maximum File Size (Max. 2000 Kb)",
            "form-label",
            "maxLength"
        );
        const input = document.createElement("input");
        input.id = "maxLength";
        input.className += "form-control";
        input.type = "number";
        input.setAttribute("min", 0);
        input.setAttribute("max", 2000);

        // use a fixed index for easier variable finds
        input.value = observableRule.value;

        // update maximum value
        input.onchange = function () {
            observableRule.value = this.value;
            observableRule.message =
                "maximum file size of " + this.value + " Kb";
            $(input).removeClass("is-invalid");

            // set default max rule when set 0 / empty
            if (this.value === 0 || this.value === "") {
                observableRule.value = 2000;
                observableRule.message = "maximum file size of 2000 Kb";
            } else if (this.value > 2000 || this.value < 0) {
                // show error when input is invalid
                $(input).addClass("is-invalid");
            }
        };

        const helperText = buildHelperText("Set 0 to remove rule");

        container.appendChild(label);
        container.appendChild(input);
        container.appendChild(helperText);

        return container;
    }

    // update max length rule of this question
    _buildUpdatableFileType() {
        const instance = this;
        const observable = this.validationObserver();

        // check if rule is not defined
        // use a fixed index for easier variable finds
        if (observable[3] === undefined) {
            observable[3] = JSON.parse(JSON.stringify(baseRules[3]));
        }

        const observableRule = observable[3];

        const container = document.createElement("div");
        container.className += "mb-3";

        const selectOption = document.createElement("select");
        selectOption.className += "form-select";
        selectOption.id = "selectOption";

        // option documents
        const option1 = document.createElement("option");
        option1.value = 1;
        option1.innerHTML = "Documents (docs, pdf, xls)";

        // option images
        const option2 = document.createElement("option");
        option2.value = 2;
        option2.innerHTML = "Images (jpg, png, webp)";

        if (observableRule.value === 1) {
            option1.setAttribute("selected", true);
        } else {
            option2.setAttribute("selected", true);
        }

        selectOption.appendChild(option1);
        selectOption.appendChild(option2);

        const label = this._createInputLabel(
            "Allowed File Type",
            "form-label",
            "selectOption"
        );

        selectOption.onchange = function () {
            observableRule.value = this.value;
            const fileTypesToString = instance
                ._getFileTypes(this.value)
                .join(", ");

            if (this.value === 1) {
                observableRule.message =
                    "Only document file allowed (" + fileTypesToString + ")";
            } else {
                observableRule.message =
                    "Only image file allowed (" + fileTypesToString + ")";
            }
        };

        container.appendChild(label);
        container.appendChild(selectOption);

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

    _getFileTypes(type) {
        if (type === 1) {
            // documents
            return [
                ".doc",
                ".docx",
                ".txt",
                ".pdf",
                // ".htm",
                // ".html",
                ".ppt",
                ".pptx",
                ".xls",
                ".xlsx",
            ];
        } else if (type === 2) {
            // images
            return [".jpg", ".png", ".gif", ".eps", ".raw"];
        }
    }
}

customElements.define("upload-file", UploadFile, {
    extends: "div",
});
