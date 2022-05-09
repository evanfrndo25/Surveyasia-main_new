import { Component } from "./component.js";
import uniqid from "./util.js";
import Blueprint from "./blueprint.js";

export class DropDown extends Component {
    constructor(config) {
        // init parent
        super(config);
        this.blueprint = config;    // Config berasal dari -> componentConfiguration.js
    }

    
    

    content() {
        const wrapper = document.createElement("ul");
        wrapper.id = uniqid("options");
        wrapper.className += "list-group mb-3";

        const values = this.blueprint.options;
        const logic = this.blueprint.logic;

        const select = document.createElement("select");
        select.id = "mainInput";
        this._fromRespondent()
            ? (select.name = "answers[" + this.blueprint.id + "]")
            : (select.name = "answers[" + this.blueprint.componentId + "]");
        select.className += "form-select";

        // label/first option
        const labelOption = document.createElement("option");
        labelOption.innerHTML = "Opsi Pilihan";
        select.appendChild(labelOption);

        for (let i = 0; i < values.length; i++) {
            const options = this._createOption(values[i], logic[values[i]]);
            select.appendChild(options);
        }

        wrapper.appendChild(select);

        // validate when inputable (respondent)
        // TODO : use preferred contentRespondent instead
        if (this._fromRespondent()) {
            if (this.blueprint.validations !== undefined) {
                const invalidMessage = this._buildInvalidContainer();

                // set validations
                // this._validateInput();

                wrapper.appendChild(invalidMessage);
            }
        }

        return wrapper;
    }

    _createOption(value, logic = null) {
        const option = document.createElement("option");

        // menambahkan attribute logic pada tag option
        // attribute logic yang berisi component_id question
        const logicAttr = document.createAttribute('logic');
        logicAttr.value = logic;    // logic = component_id (example: component_x123)
        option.setAttributeNode(logicAttr);

        if (value.id == null) {
            option.value = value;
            option.innerHTML = value;
        } else {
            option.value = value.value;
            option.innerHTML = value.value;
        }

        return option;
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
                    return target[property]; // console.log(property)
                },
                set: function (target, key, value) {
                    target[key] = value;

                    if (key == "question") {
                        instance._updateQuestion(value);
                    }

                    if (key == "options") {
                        instance._updateOptions();
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

                    if (key === "logic") {
                        console.log('logic berubah');
                    }

                    return true;
                },
            };
        };

        let observer = new Proxy(this.blueprint, validator());

        return observer;
    }

    Options() {
        const form = document.createElement("form");
        const question = this._updateableQuestion();
        const label = this._updateableLabel();
        const choiceOptions = this._updateableOptions();

        form.appendChild(question);
        form.appendChild(label);
        form.appendChild(choiceOptions);

        return form;
    }

    LogicOptions() {
        const form = document.createElement("form");
        const choiceOptions = this._updateableLogicOptions();

        form.appendChild(choiceOptions);

        return form;
    }

    Validate(validationObserver) {
        this._validateInput(validationObserver);
    }

    ValidationOptions() {
        const wrapper = document.createElement("div");
        wrapper.className += "row";
        wrapper.id = uniqid("validations");

        // required option
        const requiredField = this._buildUpdatableRequired();

        wrapper.appendChild(requiredField);

        return wrapper;
    }

    _buildInvalidContainer() {
        const container = document.createElement("div");
        container.id = "validationMessageContainer";
        container.style.display = "none";
        container.className += "invalid-feedback mt-3";

        // build errors based on configured validations
        this.blueprint.validations.forEach((validation) => {
            const rule = validation.rule;
            let message;

            if (rule === "required") {
                message = "Please select an option";
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
        item.className += "my-0 text-danger";
        item.innerHTML = "*" + errorMessage;

        return item;
    }

    _validateInput(validationObserver) {
        const instance = this;
        const input = this._getInput();
        const messageContainer = this._getValidationErrorsContainer();

        $(input).on("change", () => {
            const validations = instance.blueprint.validations;

            const selectedOption = $(input).find(":selected").val();

            validations.forEach((validation) => {
                const rule = validation.rule;
                const value = validation.value;
                const message = validation.message;

                // option not checked
                const isEmpty = selectedOption === "Select an option";

                // check if errors is already shown
                const isShowingErrors = $(input).hasClass("is-invalid");

                // error item
                const errorItem = $(messageContainer).find("#" + rule);
                errorItem.get(0).innerHTML = message;

                // checked at least one option
                const isRequired = rule === "required" && value === true;

                // this field is valid
                const isValid = !isEmpty;

                if (isEmpty && isRequired) {
                    if (!isShowingErrors) {
                        input.addClass("is-invalid");
                    }

                    $(messageContainer).show();
                    errorItem.show();
                    validationObserver.passed = false;
                } else {
                    if (isValid) {
                        $(messageContainer).hide();
                        errorItem.hide();
                        input.removeClass("is-invalid");
                        validationObserver.passed = true;
                    }
                }
            });
        });
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
        addOptionButton.innerHTML = "Tambah Opsi";

        // const saveOptionButton = document.createElement("button");
        // saveOptionButton.className += "btn btn-md btn-danger text-white";
        // saveOptionButton.innerHTML = "Simpan";

        const instance = this;
        addOptionButton.onclick = function (event) {
            event.preventDefault();
            instance._addOption();
        };

        addOptionContainer.appendChild(addOptionButton);

        // saveOptionContainer.appendChild(saveOptionButton);

        wrapper.appendChild(addOptionContainer);

        wrapper.appendChild(saveOptionContainer);

        return wrapper;
    }

// tab Logic
    _updateableLogicOptions() {
        const observeable = this.observer();
        const wrapper = document.createElement("div");
        wrapper.id = uniqid("wrapper");
        wrapper.className += "row";

        // membuat div untuk logic bagian Pilihan
        const divPilihan = document.createElement('div');
        divPilihan.className = "col-md-4";

        // membuat div untuk logic bagian Lanjutkan Ke
        const divLanjutkan = document.createElement('div');
        divLanjutkan.className = "col-md-8";
        
        const labelPilihan = document.createElement("label");
        labelPilihan.innerHTML = "Pilihan Opsi";
        labelPilihan.className += "form-input-label";

        const labelLanjutkan = document.createElement("label");
        labelLanjutkan.innerHTML = "Lanjutkan Ke";
        labelLanjutkan.className += "form-input-label";

        divPilihan.appendChild(labelPilihan);
        divLanjutkan.appendChild(labelLanjutkan);

        const options = observeable.options;
        const logic = observeable.logic;

        for(let i = 0; i < options.length; i++) {
            const rowLanjutkan = document.createElement('div');
            rowLanjutkan.className = 'row mb-3 mt-3';

            const col1 = document.createElement('div');
            col1.className = "col-md-5";

            const col2 = document.createElement('div');
            col2.className = "col-md-5";

            const col3 = document.createElement('div');
            col3.className = "col-md-2";

            const select1 = document.createElement('select');
            select1.className = "form-select";
            select1.id = `row-${i}`;

            const select2 = document.createElement('select');
            select2.className = "form-select";
            select2.id = `row-${i}`;

            const iconTrash = document.createElement('a');
            iconTrash.href = '#';
            iconTrash.className = "btn link-dark";
            iconTrash.innerHTML = '<i class="fas fa-trash"></i>';
            iconTrash.id = `row-${i}`;

            const input = document.createElement('input');
            input.className = "form-control mb-3 mt-3";
            input.value = options[i];
            input.readOnly = true;
            input.id = `row-${i}`;

            // mendapatkan id dan value dari tiap-tiap pertanyaan
            const getContainerQuestion = document.getElementById('questions_container');
            const getQuestion = getContainerQuestion.children;
            
            // Untuk menampung text dan id dari masing-masing pertanyaan
            const objectQuestion = [];

            for(let x = 0; x < getQuestion.length; x++) {
                objectQuestion.push({
                    id: getQuestion[x].id, 
                    text: getQuestion[x].childNodes[1].innerText.split('\n')[1]
                });
            }
            
            // fungsi untuk mencari text pertanyaan berdasarkan value/id pertanyaan
            // example: getTextByValue(component_c747)
            const getTextByValue = (value) => {
                return objectQuestion.find(obj => {
                    return obj.id === value;
                })  // Akan me-return object yang berisi text dan id dari pertanyaan
            }

            // Default option
            const defaultOption = document.createElement('option');
            defaultOption.value = logic[options[i]] || null;
            defaultOption.innerHTML = getTextByValue(logic[options[i]])?.text || '-- Select --';
            //-- defaultOption.innerHTML melakukan pengecekan 
            //-- apabila getTextByValue null maka akan ditampilkan '-- Select --'

            select2.appendChild(defaultOption);

            for (let index = 0; index < getQuestion.length; index++) {
                // membuat tag option melalui function createOptionLanjutkan dengan dua argumen
                select2.appendChild(this._createOptionLanjutkan(
                    getQuestion[index].childNodes[1].innerText.split('\n')[1],  //argumen 1 text
                    getQuestion[index].id   //argumen 2 value
                ));

                // untuk memantau apabila tag select berubah/onChange
                select2.onchange = (event) => {
                    const selectElement = event.target;
                    const value = selectElement.value;
                    logic[options[i]] = value;
                }
            }

            iconTrash.onclick = () => {
                logic[options[i]] = null;
                defaultOption.innerHTML = '-- Select --';
            };

            col1.appendChild(select1);
            col2.appendChild(select2);
            col3.appendChild(iconTrash);
            rowLanjutkan.appendChild(col1);
            rowLanjutkan.appendChild(col2);
            rowLanjutkan.appendChild(col3);
            divLanjutkan.appendChild(rowLanjutkan);

            divPilihan.appendChild(input);

            // select2.onchange = () => {
            //     logic[options[i]] = "test";
            // }
        }

        wrapper.appendChild(divPilihan);
        wrapper.appendChild(divLanjutkan);

        return wrapper;
    }

    _createOptionLanjutkan(text, value) {
        const option = document.createElement('option');
        option.innerHTML = text;
        option.value = value;

        return option;
    }
// end tab Logic

    _updateOptions() {
        const wrapper = this._getInput().get(0);
        wrapper.innerHTML = "";
        const values = this.blueprint.options;

        // label/first option
        const labelOption = document.createElement("option");
        labelOption.innerHTML = "Opsi Pilihan";
        wrapper.appendChild(labelOption);

        for (let i = 0; i < values.length; i++) {
            const options = this._createOption(values[i]);
            wrapper.appendChild(options);
        }
    }

    _createEditableOption(index) {
        let inputGroup = document.createElement("div");
        inputGroup.className = "input-group mb-2";

        // option prefix (optional)
        const prefix = document.createElement("span");
        prefix.className += "input-group-text";

        let textPrefix = document.createElement("label");
        textPrefix.className += "form-input-label";
        textPrefix.innerHTML = "Option " + (index + 1);

        const suffix = this._createOptionsSuffix(index);
        const optionInput = this._createOptionUpdateInput(index);

        prefix.appendChild(textPrefix);

        inputGroup.appendChild(prefix);
        inputGroup.appendChild(optionInput);
        inputGroup.appendChild(suffix);

        return inputGroup;
    }

    // input option text update
    _createOptionUpdateInput(index) {
        const observable = this.observer();

        const optionInput = document.createElement("input");
        optionInput.type = "text";
        optionInput.required = true;
        optionInput.value = "";

        var options = [];

        // load options if exists (always true)
        if (observable.options != null) {
            options = observable.options;
        }

        // load configuration from database if exists
        if (index != null && observable.options[index] != null) {
            if (index != null && observable.options[index].id == null) {
                optionInput.value = observable.options[index];
            } else if (
                index != null &&
                observable.options[index].value != null
            ) {
                optionInput.value = observable.options[index].value;
            }
        }

        optionInput.onchange = function (e) {
            // change value if not empty
            if (this.value != "") {
                if (index != null && observable.options[index] != null) {
                    if (observable.options[index].id != null) {
                        options[index].value = this.value;
                    } else {
                        options[index] = this.value;
                    }
                } else {
                    options.push(this.value);
                }
                observable.options = options;
                // console.log(options);
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
    // TODO : Correct index position
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

        // deleteButton.appendChild(deleteIcon);
        suffix.appendChild(deleteIcon);

        return suffix;
    }

    // create a new option
    _addOption() {
        const lastIndex = this.observer().options.length;
        const option = this._createEditableOption(lastIndex);
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
}

customElements.define("drop-downs", DropDown, {
    extends: "div",
});
