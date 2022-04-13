import { Component } from "./component.js";
import uniqid, { baseRules, buildHelperText } from "./util.js";

export class MultipleChoice extends Component {
    constructor(config) {
        // init parent
        super(config);
        this.blueprint = config;
    }

    
    

add
    minimum

    content() {
        const row = document.createElement("div");
        row.className += "row mb-3";

        const col = document.createElement("div");
        col.className += "col";

        let content;

        const ratingOrScaleComponent =
            this.blueprint.componentName === "scale" ||
            this.blueprint.componentName === "ratingStar";

        if (ratingOrScaleComponent) {
            content = this._buildRatingContainer();
        } else {
            content = this._buildChoiceContainer();
        }

        col.appendChild(content);

        // validate when inputable (respondent)
        // TODO : use preferred contentRespondent instead
        if (this._fromRespondent()) {
            if (this.blueprint.validations !== undefined) {
                const invalidMessage = this._buildInvalidContainer();

                // set validations
                this._validateInput();

                col.appendChild(invalidMessage);
            }
        }

        row.appendChild(col);

        return row;
    }

    _buildChoiceContainer() {
        const wrapper = document.createElement("ul");
        wrapper.id = "mainInput";
        wrapper.className += "list-group";

        this._wrapOptions(wrapper);
        return wrapper;
    }

    _wrapOptions(wrapper) {
        const values = this.blueprint.options;

        for (let i = 0; i < values.length; i++) {
            const options = this._createOption(values[i]);
            wrapper.appendChild(options);
        }
    }

    // for standard radio/checkbox type questions
    _createOption(value) {
        const id = uniqid("option");
        const labelWrapper = document.createElement("label");
        labelWrapper.className += "form-check-label";
        labelWrapper.htmlFor = id;

        const item = document.createElement("li");
        item.className += "list-group-item";

        const formWrapper = document.createElement("div");
        formWrapper.className = "form-check";
        let label;
        if (value.id == null) {
            label = document.createTextNode(value);
        } else {
            label = document.createTextNode(value.value);
        }

        const option = document.createElement("input");
        option.id = id;
        if (this._fromRespondent()) {
            if (this.blueprint.configuration.inputType === "checkbox") {
                option.name = "answers[" + this.blueprint.id + "][]";
            } else {
                option.name = "answers[" + this.blueprint.id + "]";
            }
        } else {
            option.name = "answers[" + this.blueprint.componentId + "]";
        }

        option.className += "form-check-input";
        option.type = this.blueprint.configuration.inputType;
        if (value.id != null) {
            option.value = value.value;
        } else {
            option.value = value;
        }

        formWrapper.appendChild(option);
        formWrapper.appendChild(label);
        item.appendChild(formWrapper);
        labelWrapper.appendChild(item);

        return labelWrapper;
    }

    _buildRatingContainer() {
        const wrapper = document.createElement("div");
        wrapper.className += this.blueprint.configuration.style;
        wrapper.id = "mainInput";

        const min = this.observer().configuration.minVal;
        const max = this.observer().configuration.maxVal;

        this.observer().options = [];

        for (let i = max; i >= min; i--) {
            this.observer().options.push(i);
            this._createRatingOption(wrapper, i);
        }

        return wrapper;
    }

    // for rating or scale type questions
    _createRatingOption(wrapper, value) {
        const optionId = uniqid("option");
        const option = document.createElement("input");

        option.type = this.blueprint.configuration.inputType;
        option.id = optionId;
        option.value = value;

        if (this._fromRespondent()) {
            option.name = "answers[" + this.blueprint.id + "]";
        } else {
            option.name = "answers[" + this.blueprint.componentId + "]";
        }

        const label = document.createElement("label");
        label.htmlFor = optionId;
        if (this.blueprint.componentName === "scale") {
            let labelText;
            if (value.id == null) {
                labelText = document.createTextNode(value);
            } else {
                labelText = document.createTextNode(value.value);
            }

            label.appendChild(labelText);
        }

        wrapper.appendChild(option);
        wrapper.appendChild(label);
    }

    observer() {
        let instance = this;
        let validator = function () {
            return {
                get: function (target, property) {
                    const isObjectOrArray =
                        ["[object Object]", "[object Array]"].indexOf(
                            Object.prototype.toString.call(target[property])
                        ) > -1;
                    if (isObjectOrArray) {
                        return new Proxy(target[property], validator());
                    }
                    // console.log("getting : " + "\n" + target[property]);
                    return target[property];
                },
                set: function (target, key, value) {
                    target[key] = value;

                    if (key == "question") {
                        instance._updateQuestion(value);
                    }

                    if (key == "options") {
                        instance._updateOptions();
                    }

                    if (key === "maxVal" || key === "minVal") {
                        instance._updateScale();
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

                    return true;
                },
            };
        };

        let observer = new Proxy(this.blueprint, validator());

        return observer;
    }

    _buildInvalidContainer() {
        const container = document.createElement("div");
        container.id = "validationMessageContainer";
        container.style.display = "none";
        container.className += "invalid-feedback mt-3";

        // build errors based on configured validations
        this.blueprint.validations.forEach((validation) => {
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
        item.className += "my-0 text-danger";
        item.innerHTML = "*" + errorMessage;

        return item;
    }

    _validateInput(validationObserver) {
        const instance = this;
        const input = this._getInput();
        const messageContainer = this._getValidationErrorsContainer();

        $(input).on("change", () => {
            let checkedCount = 0;
            const children = $(this).find(
                'input[type="' +
                    instance.blueprint.configuration.inputType +
                    '"]'
            );

            // loop each children
            children.each((i, child) => {
                // check if children is checked
                if ($(child).is(":checked")) {
                    checkedCount++;
                }
            });

            minimum

            const validations = instance.blueprint.validations;

            validations.forEach((validation) => {
                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // option not checked
                const isEmpty = checkedCount === 0;

                // not set
                const isNotSet = value === 0;

                // check if errors is already shown
                const isShowingErrors = $(children).hasClass("is-invalid");

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // checked at least one option
                const isRequired = rule === "required" && value === true;

                // checked with minimum options
                const minimumOptions = rule === "minLength";

                // checked options is less than minimum
                const isLessThan = checkedCount < value && !isEmpty;

                // checked with minimum options
                const maximumOptions = rule === "maxLength";

                // checked options is less than minimum
                const isExcMax = checkedCount > value && !isEmpty;

                // this field is valid
                const isValid = !isEmpty && !isLessThan && !isExcMax;

                if (isEmpty && isRequired) {
                    if (!isShowingErrors) {
                        children.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && isLessThan && minimumOptions) {
                    if (!isShowingErrors) {
                        children.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && isExcMax && maximumOptions) {
                    if (!isShowingErrors) {
                        children.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else {
                    if (isValid) {
                        $(messageContainer).hide();
                        errorItem.hide();
                        children.removeClass("is-invalid");
                        validationObserver.passed = true;
                    }
                }
            });
        });

        $(input).on("click", () => {
            let checkedCount = 0;
            const children = $(this).find(
                'input[type="' +
                    instance.blueprint.configuration.inputType +
                    '"]'
            );

            // loop each children
            children.each((i, child) => {
                // check if children is checked
                if ($(child).is(":checked")) {
                    checkedCount++;
                }
            });

            const validations = instance.blueprint.validations;

            validations.forEach((validation) => {
                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // option not checked
                const isEmpty = checkedCount === 0;

                // not set
                const isNotSet = value === 0;

                // check if errors is already shown
                const isShowingErrors = $(children).hasClass("is-invalid");

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // checked at least one option
                const isRequired = rule === "required" && value === true;

                // checked with minimum options
                const minimumOptions = rule === "minLength";

                // checked options is less than minimum
                const isLessThan = checkedCount < value && !isEmpty;

                // checked with minimum options
                const maximumOptions = rule === "maxLength";

                // checked options is less than minimum
                const isExcMax = checkedCount > value && !isEmpty;

                // this field is valid
                const isValid = !isEmpty && !isLessThan && !isExcMax;

                if (isEmpty && isRequired) {
                    if (!isShowingErrors) {
                        children.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && isLessThan && minimumOptions) {
                    if (!isShowingErrors) {
                        children.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else if (!isNotSet && isExcMax && maximumOptions) {
                    if (!isShowingErrors) {
                        children.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else {
                    if (isValid) {
                        $(messageContainer).hide();
                        errorItem.hide();
                        children.removeClass("is-invalid");
                        validationObserver.passed = true;
                    }
                }
            });
        });
    }

    Validate(validationObserver) {
        this._validateInput(validationObserver);
    }

    Options() {
        const form = this._buildOptionsContainer();
        const question = this._updateableQuestion();
        const label = this._updateableLabel();
        let choiceOptions;

        if (
            this.blueprint.componentName === "scale" ||
            this.blueprint.componentName === "ratingStar"
        ) {
            choiceOptions = this._updateableScale();
        } else {
            choiceOptions = this._updateableOptions();
        }

        form.appendChild(question);
        form.appendChild(label);
        form.appendChild(choiceOptions);

        return form;
    }

    LogicOptions() {
        const form = this._buildOptionsContainer();
        
        let choiceOptions;

        if (
            this.blueprint.componentName === "scale" ||
            this.blueprint.componentName === "ratingStar"
        ) {
            choiceOptions = this._updateableScale();
        } else {
            choiceOptions = this._updateableOptions();
        }
        
        form.appendChild(choiceOptions);

        return form;
    }

    ValidationOptions() {
        const wrapper = document.createElement("div");
        wrapper.className += "row";
        wrapper.id = uniqid("validations");

        // required option
        const requiredField = this._buildUpdatableRequired();

        wrapper.appendChild(requiredField);

        // only checkbox
        if (this.blueprint.configuration.inputType === "checkbox") {
            // minimum length option
            const minLength = this._buildUpdatableMinLength();

            // maximum length option
            const maxLength = this._buildUpdatableMaxLength();

            wrapper.appendChild(minLength);
            wrapper.appendChild(maxLength);
        }

        return wrapper;
    }

    _updateableOptions() {
        const observable = this.observer();
        const wrapper = document.createElement("div");
        wrapper.id = uniqid("wrapper");
        wrapper.className += "mb-3";

        const label = document.createElement("label");
        label.innerHTML = "Choice Options";
        label.className += "form-input-label mb-2";
        wrapper.appendChild(label);

        for (let i = 0; i < observable.options.length; i++) {
            const editableOption = this._createEditableOption(i);
            wrapper.appendChild(editableOption);
        }

        // add option button
        

        const addOptionContainer = document.createElement("div");
        addOptionContainer.id = "addOptionContainer";
        addOptionContainer.className += "d-flex mt-3";

        const saveOptionContainer = document.createElement("div");
        saveOptionContainer.id = "addOptionContainer";
        saveOptionContainer.className += "d-flex justify-content-end mt-3";

        const addOptionButton = document.createElement("button");
        addOptionButton.className += "btn btn-sm btn-default text-white";
        addOptionButton.innerHTML = "Opsi Pilihan";

        const saveOptionButton = document.createElement("button");
        saveOptionButton.className += "btn btn-md btn-danger text-white";
        saveOptionButton.innerHTML = "Simpan";

        const instance = this;
        addOptionButton.onclick = function (event) {
            event.preventDefault();
            instance._addUpdatableOption();
        };

        addOptionContainer.appendChild(addOptionButton);

        saveOptionContainer.appendChild(saveOptionButton);

        wrapper.appendChild(addOptionContainer);

        wrapper.appendChild(saveOptionContainer);

        return wrapper;
    }

    _updateableScale() {
        const observable = this.observer();
        const wrapper = document.createElement("div");
        wrapper.id = uniqid("wrapper");
        wrapper.className += "mb-3";

        const label = document.createElement("label");
        label.innerHTML = "Value Range";
        label.className += "form-input-label mb-2";
        wrapper.appendChild(label);

        const row = document.createElement("div");
        row.className += "row";

        const minValue = this._createEditableScaleRange();
        const maxValue = this._createEditableScaleRange("max");

        row.appendChild(minValue);
        row.appendChild(maxValue);

        wrapper.appendChild(label);
        wrapper.appendChild(row);

        return wrapper;
    }

    _createEditableScaleRange(type = "min") {
        const col = document.createElement("div");
        col.className += "col-6";

        const select = document.createElement("select");
        select.id = type + "Scale";
        select.className += "form-select";

        const label = type === "min" ? "Minimum" : "Maximum";
        const helperText = buildHelperText(label + " value");

        if (type === "min") {
            for (let i = 0; i < 2; i++) {
                const option = document.createElement("option");
                option.value = i;
                option.innerHTML = i;
                if (i === parseInt(this.blueprint.configuration.minVal)) {
                    option.selected = true;
                }

                select.appendChild(option);
            }
        } else {
            for (let i = 2; i <= 10; i++) {
                const option = document.createElement("option");
                option.value = i;
                option.innerHTML = i;
                if (i === parseInt(this.blueprint.configuration.maxVal)) {
                    option.selected = true;
                }

                select.appendChild(option);
            }
        }

        const observer = this.observer();

        select.onchange = function () {
            if (type === "min") {
                observer.configuration.minVal = this.value;
            } else {
                observer.configuration.maxVal = this.value;
            }
        };

        col.appendChild(select);
        col.appendChild(helperText);

        return col;
    }

    _updateScale() {
        const wrapper = $(this).find("#mainInput");
        wrapper.empty();

        const min = this.observer().configuration.minVal;
        const max = this.observer().configuration.maxVal;

        // empty options
        this.observer().options = [];

        for (let i = max; i >= min; i--) {
            this.observer().options.push(i);
            this._createRatingOption(wrapper.get(0), i);
        }
    }

    _updateStar() {
        const wrapper = $("#mainInput");
        wrapper.empty();

        const min = this.observer().configuration.minVal;
        const max = this.observer().configuration.maxVal;

        // empty options
        this.observer().options = [];

        for (let i = max; i >= min; i--) {
            this.observer().options.push(i);
            this._createRatingOption(wrapper.get(0), i);
        }
    }

    _updateOptions() {
        const wrapper = this._getInput();
        wrapper.empty();
        this._wrapOptions(wrapper.get(0));

        return wrapper;
    }

    _createEditableOption(index) {
        let inputGroup = document.createElement("div");
        inputGroup.className = "input-group mb-2";

        // option prefix (optional)
        const prefix = document.createElement("span");
        prefix.className += "input-group-text";

        let inputPrefix = document.createElement("input");
        inputPrefix.className += "form-control-input";
        inputPrefix.type = this.blueprint.configuration.inputType;

        const suffix = this._createOptionsSuffix(index);
        const optionInput = this._createOptionUpdateInput(index);

        prefix.appendChild(inputPrefix);

        inputGroup.appendChild(prefix);
        inputGroup.appendChild(optionInput);
        inputGroup.appendChild(suffix);

        return inputGroup;
    }

    // input option text and value update
    _createOptionUpdateInput(index) {
        const observable = this.observer();

        const optionInput = document.createElement("input");
        optionInput.type = "text";
        optionInput.required = true;

        var options = [];

        // load options if exists (always true)
        if (observable.options != null) {
            options = observable.options;
        }

        // load configuration from database if exists
        if (index != null && observable.options[index].id == null) {
            optionInput.value = observable.options[index];
        } else if (index != null) {
            optionInput.value = observable.options[index].value;
        }

        optionInput.onchange = function (e) {
            // change value if not empty
            if (this.value != "") {
                if (index != null) {
                    if (observable.options[index].id != null) {
                        options[index].value = this.value;
                    } else {
                        options[index] = this.value;
                    }
                } else {
                    options.push(this.value);
                }
                observable.options = options;
            } else {
                // get parent form and force to show error
                this.parentElement.parentElement.parentElement.classList.add(
                    "was-validated"
                );
            }
        };
        optionInput.className += "form-control";

        return optionInput;
    }

    // delete icon for each option
    _createOptionsSuffix(index) {
        const suffix = document.createElement("span");
        suffix.style.cursor = "pointer";
        suffix.className += "input-group-text";

        const instance = this;
        suffix.onclick = function (event) {
            event.preventDefault();

            var options = instance.observer().options;
            // if options is more than 2
            if (options.length > 2) {
                // allow delete
                instance._deleteOption(options[index]);
                options.splice(index, 1);
                instance.observer().options = options;
                this.parentElement.remove();
            } else {
                // delete option not allowed!
            }
        };

        // option delete button
        // const deleteButton = document.createElement("button");
        const deleteIcon = document.createElement("i");
        deleteIcon.ariaHidden = true;
        deleteIcon.style.cursor = "pointer";
        deleteIcon.className += "fas fa-trash";
        deleteIcon.onclick = function (event) {
            event.preventDefault();
            // if options is more than 2
            if (options.length > 2) {
                // allow delete
                instance._deleteOption(options[index]);
                options.splice(index, 1);
                instance.observer().options = options;
                this.parentElement.remove();
            } else {
                // delete option not allowed!
            }
        };

        // deleteButton.appendChild(deleteIcon);
        suffix.appendChild(deleteIcon);

        return suffix;
    }

    // create a new updatable option
    _addUpdatableOption() {
        const option = this._createEditableOption();
        $(option).insertBefore("#addOptionContainer");
    }

    // get current input
    _getInput() {
        return $(this).find("#mainInput");
    }

    // get validation errors container
    _getValidationErrorsContainer() {
        return $(this).find("#validationMessageContainer");
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
        const observable = this.validationObserver();
        // check if rule is not defined
        // use a fixed index for easier variable finds
        if (observable[1] === undefined) {
            observable[1] = JSON.parse(JSON.stringify(baseRules[1]));
        }

        const observableRule = observable[1];

        const container = document.createElement("div");
        container.className += "mb-3";

        const label = this._createInputLabel(
            "Minimum Choice",
            "form-label",
            "minLength"
        );

        const input = document.createElement("input");
        input.id = "minLength";
        input.className += "form-control";
        input.type = "number";
        input.setAttribute("min", 0);
        input.setAttribute("max", this.observer().options.length);

        input.value = observableRule.value;

        // update minimum value
        $(input).on("keyup", function () {
            observableRule.value = this.value;
            observableRule.message = "min choice of " + this.value;
            $(input).removeClass("is-invalid");

            if (this.value === 0 || this.value === "") {
                observable.splice(1, 1);
            } else if (
                this.value > instance.observer().options.length ||
                this.value < 0
            ) {
                $(input).addClass("is-invalid");
            }
        });

        $(input).on("change", function () {
            observableRule.value = this.value;
            observableRule.message = "min choice of " + this.value;
            $(input).removeClass("is-invalid");

            if (this.value === 0 || this.value === "") {
                observable.splice(1, 1);
            } else if (
                this.value > instance.observer().options.length ||
                this.value < 0
            ) {
                $(input).addClass("is-invalid");
            }
        });

        const helperText = buildHelperText("Pilih 0 untuk mengatur kembali");

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
        if (this.validationObserver()[2] === undefined) {
            observable[2] = JSON.parse(JSON.stringify(baseRules[2]));
            observable[2].value = 0;
            observable[2].message = "max choice of " + 0;
        }

        const observableRule = observable[2];

        const container = document.createElement("div");
        container.className += "mb-3";

        const label = this._createInputLabel(
            "Maximum Choice",
            "form-label",
            inputId
        );
        const input = document.createElement("input");
        input.id = inputId;
        input.className += "form-control";
        input.type = "number";
        input.setAttribute("min", 0);
        input.setAttribute("max", this.observer().options.length);

        // use a fixed index for easier variable finds
        input.value = observableRule.value;

        // update maximum value
        $(input).on("keyup", function () {
            observableRule.value = this.value;
            observableRule.message = "max choice of " + this.value;
            $(input).removeClass("is-invalid");

            if (this.value === 0 || this.value === "") {
                instance.validationObserver().splice(1, 1);
            } else if (
                this.value > instance.observer().options.length ||
                this.value < 0
            ) {
                $(input).addClass("is-invalid");
            }
        });

        const helperText = buildHelperText("Pilih 0 untuk mengatur kembali");

        container.appendChild(label);
        container.appendChild(input);
        container.appendChild(helperText);

        return container;
    }
}

customElements.define("multiple-choice", MultipleChoice, {
    extends: "div",
});
