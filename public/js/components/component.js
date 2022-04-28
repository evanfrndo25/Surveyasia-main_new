import uniqid, {
    buildHelperText,
    isUrl,
    loadingButtonToNormal,
    transformToLoadingButton,
} from "./util.js";
import { configuration } from "./configuration.js";

export class Component extends HTMLDivElement {
    constructor(config) {
        super();
        this.blueprint = JSON.parse(JSON.stringify(config));

        if (this.blueprint.inputable != null) {
            this._buildInputable();
        } else {
            this._buildContainer();
        }
    }

    _addComponent(parent, component) {
        parent.appendChild(component);
    }

    // respondent side
    _buildInputable() {
        this.id = this.blueprint.componentId;
        /* if (
            this.blueprint.questionNumber == 1 ||
            this.blueprint.configuration.position == 0
        ) {
            this.className += "tab-pane fade show active";
        } else {
            this.className += "tab-pane fade";
        } */

        this.className += "tab-pane fade";

        this._addComponent(this, this._buildHeader());
        this._addComponent(this, this._buildBody());

        return this;
    }

    // respondent side
    // show box
    showContainer() {
        this.classList.add("show");
        this.classList.add("active");
    }

    // respondent side
    // hide box
    hideContainer() {
        this.classList.remove("show");
        this.classList.remove("active");
    }

    // respondent side
    // check if should show to respondent
    _fromRespondent() {
        return this.blueprint.inputable != null;
    }

    // researcher side
    _buildContainerBagian() {
        this.setAttribute("id", this.blueprint.componentId);
        this.setAttribute("class", "mx-2 p-4 mb-3 border rounded-top");

        this._addComponent(this, this._buildBody());

        return this;
    }

    _buildContainer() {
        this.setAttribute("id", this.blueprint.componentId);

        this.setAttribute(
            "class",
            "mx-2 p-4 mb-3 border rounded shadow-sm draggable"
        );

        // this.onclick = this._setOnClickListener();

        this._addComponent(this, this._buildHeader());
        this._addComponent(this, this._buildBody());
        // this._addComponent(this, this._buildQuestion());
        // this._addComponent(this, this.content());
        this._addComponent(this, this._buildActionButton());
        this.onmouseover = this._highlightQuestion;
        this.onmouseleave = this._removeHighlight;

        return this;
    }

    _buildQuestion() {
        let question = document.createElement("h6");
        question.id = "questionText";
        if (this.blueprint.inputable !== undefined) {
            question.className = "mt-3 mb-3";
        } else {
            question.className = "mb-3";
        }
        question.innerHTML = this.blueprint.question;

        return question;
    }

    _buildMedia() {
        const wrapper = document.createElement("div");
        wrapper.id = "mediaContainer";
        wrapper.className += "mb-3";

        const observableMedia = this.observer().media;

        const image = document.createElement("img");
        image.id = "mainImage_" + this.blueprint.componentId;
        image.className += "img-fluid rounded";
        if (observableMedia.source !== undefined) {
            image.src = observableMedia.source;
        }
        image.style.maxHeight = 280;

        image.onload = function () {
            wrapper.classList.remove("visually-hidden");
        };

        image.onerror = function () {
            wrapper.classList.add("visually-hidden");
        };

        wrapper.appendChild(image);

        const mediaDescription = buildHelperText(
            this.blueprint.media.description
        );
        mediaDescription.id = "mediaDescription_" + this.blueprint.componentId;
        mediaDescription.classList.add("visually-hidden");
        wrapper.appendChild(mediaDescription);
        if (this.blueprint.media.description !== undefined) {
            mediaDescription.classList.remove("visually-hidden");
        }

        return wrapper;
    }

    _buildHeader() {
        const wrapper = document.createElement("div");
        wrapper.className += "position-relative";

        const labelContainer = document.createElement("div");
        labelContainer.className += "position-absolute top-0 start-0";
        const label = this._buildLabel();
        labelContainer.appendChild(label);
        wrapper.appendChild(labelContainer);

        if (this.blueprint.configuration.label !== null) {
            label.classList.remove("visually-hidden");
        }

        const draggerIconContainer = document.createElement("div");
        draggerIconContainer.id = "dragIconContainer";
        draggerIconContainer.className +=
            "position-absolute top-0 end-0 visually-hidden";

        const dragIcon = this._buildIcon("fas fa-arrows-alt dragger");
        dragIcon.style.cursor = "move";

        draggerIconContainer.appendChild(dragIcon);
        wrapper.appendChild(draggerIconContainer);

        return wrapper;
    }

    _buildBody() {
        const wrapper = document.createElement("div");
        wrapper.id = "componentBody";
        wrapper.className += "row mt-5";

        // check if media is configured
        if (this.blueprint.media !== undefined) {
            const media = this._buildMedia();
            wrapper.appendChild(media);
        }

        const question = this._buildQuestion();
        const content = this.content();

        wrapper.appendChild(question);
        wrapper.appendChild(content);

        return wrapper;
    }

    _buildFooter() {}

    _buildLabel() {
        const label = document.createElement("label");
        label.id = "mainLabel_" + this.blueprint.componentId;
        label.className += "form-label fw-light visually-hidden";
        label.innerHTML = this.blueprint.configuration.label;

        return label;
    }

    _buildActionButton() {
        let container = document.createElement("div");
        container.className += "row justify-content-end visually-hidden";

        let column = document.createElement("div");
        column.className += "col-auto";

        let positiveButton = this._addButton();
        let negativeButton = this._removeButton();
        let editButton = this._editButton();

        column.appendChild(positiveButton);
        column.appendChild(editButton);
        column.appendChild(negativeButton);

        container.appendChild(column);

        return container;
    }

    _getHeader() {
        return this.firstElementChild;
    }

    _getActionButtonContainer() {
        return this.lastElementChild;
    }

    getContainerId() {
        return this.id;
    }

    getPositionInParent() {
        if (this.parentNode == undefined) {
            return null;
        }
        return [...this.parentNode.children].indexOf(this);
    }

    _addButton() {
        let option = new Object();
        option.id = "addQuestionButton";
        option.label = "Tambahkan Pertanyaan ";
        option.target = this.blueprint.componentId;
        option.className = "btn border rounded-end-0 text-orange";
        option.icon = this._buildIcon("fas fa-plus");
        return this._buildButton(option);
    }

    _removeButton() {
        let option = new Object();
        option.id = "deleteQuestionButton";
        option.icon = this._buildIcon("fal fa-trash");
        option.label = " Hapus";
        option.className =
            "btn border border-start-0 rounded-start text-orange";
        option.target = this.blueprint.componentId;
        option.onclick = this.onNegativeButtonClickListener();
        return this._buildButton(option);
    }

    _editButton() {
        let option = new Object();
        option.id = "editQuestionButton";
        option.label = "Edit ";
        option.className = "btn border rounded-0 text-orange";
        option.icon = this._buildIcon("fal fa-pen");
        option.target = this.blueprint.componentId;
        return this._buildButton(option);
    }

    _buildButton(option) {
        var button = document.createElement("button");
        button.id = option.id;
        button.className += option.className;
        button.type = "button";
        button.setAttribute("data-target-id", option.target);
        if (option.id === "addQuestionButton") {
            button.setAttribute("data-bs-toggle", "modal");
            button.setAttribute("data-bs-target", "#questionComponentModal");
        } else if (option.id === "editQuestionButton") {
            button.setAttribute("data-bs-toggle", "modal");
            button.setAttribute("data-bs-target", "#updateQuestionModal");
        }

        let label = document.createTextNode(option.label);
        button.appendChild(label);

        if (option.onclick != null) {
            button.onclick = option.onclick;
        }

        if (option.icon != null) {
            button.append(option.icon);
        }
        return button;
    }

    _buildIcon(iconClass) {
        let icon = document.createElement("i");
        icon.className += iconClass;
        icon.ariaHidden = true;

        return icon;
    }

    // override content here
    content() {
        // default
        let inputGroup = document.createElement("div");
        inputGroup.id = uniqid("content");

        return inputGroup;
    }

    onNegativeButtonClickListener() {
        const instance = this;
        return function (event) {
            event.preventDefault();
            Swal.fire({
                template: "#deleteQuestionTemplate",
            }).then((result) => {
                if (result.isConfirmed) {
                    instance.destroy();
                }
            });
        };
    }

    getId() {
        return this.id;
    }

    getType() {
        return this.blueprint.configuration.inputType;
    }

    destroy() {
        // mark this component as deleted if stored in database
        if (this.blueprint.id !== undefined) {
            configuration.deleted.components.push(this.blueprint.id);
        }

        // check if deleted component is from question bank
        if (configuration.questionBank.length != 0) {
            for (let i = 0; i < configuration.questionBank.length; i++) {
                const question = configuration.questionBank[i];

                // any match id will be deleted
                if (question.questionBankId == this.blueprint.questionBankId) {
                    configuration.questionBank.splice(i, 1);

                    // the id is unique, there is no need to continue looping
                    break;
                }
            }
        }
        this.remove();
    }

    // mark option as deleted
    _deleteOption(option) {
        // for stored option in database
        if (option != null && option.id != null) {
            configuration.deleted.options.push(option.id);
        }
        return;

        // else ignore (not stored in database)
    }

    // observer are used to observe changes in observed values
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

                    return true;
                },
            });
        };

        let observer = new Proxy(this.blueprint, validator());

        return observer;
    }

    // observe validation changes
    validationObserver() {
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
                    if (target.rule === "required") {
                        // instance._updateQuestion(value);
                    }

                    target[key] = value;
                    return true;
                },
            });
        };

        let observer = new Proxy(this.blueprint.validations, validator());

        return observer;
    }

    Options() {
        const form = this._buildOptionsContainer();
        const question = this._updateableQuestion();
        const label = this._updateableLabel();

        form.appendChild(question);
        form.appendChild(label);

        return form;
    }

    LogicOptions() {
        return "<p class='badge bg-danger'>Maaf, logic tidak didukung untuk tipe pertanyaan ini.</p>";
    }

    MediaOptions() {
        const wrapper = document.createElement("form");
        wrapper.className += "needs-validation";

        const mediaPreview = this._buildMediaOptionPreview();

        const mediaLabel = this._createInputLabel(
            "Sumber Gambar (File atau URL))"
        );
        const sourceRow = document.createElement("div");
        sourceRow.id = "mediaInputRow_" + this.blueprint.componentId;
        sourceRow.className += "row mb-3";

        const mediaFileInput = this._buildMediaInput("file");
        const mediaUrlInput = this._buildMediaInput("url");
        const mediaDescription = this._buildMediaDescriptionOption();

        sourceRow.appendChild(mediaLabel);
        sourceRow.appendChild(mediaUrlInput);
        sourceRow.appendChild(mediaFileInput);

        wrapper.appendChild(mediaPreview);
        wrapper.appendChild(sourceRow);
        wrapper.appendChild(mediaDescription);

        return wrapper;
    }

    _buildMediaOptionPreview() {
        const imageContainer = document.createElement("div");
        imageContainer.className += "mb-3";

        const label = this._createInputLabel("Pratinjau Gambar");
        const image = document.createElement("img");
        image.id = "previewImage_" + this.blueprint.componentId;
        image.className += "img-fluid rounded mb-2";
        image.height = 280;

        // use this to show error on loading source
        /* image.onerror = function () {
            this.src = "https://img.icons8.com/ios/50/000000/error--v1.png";
        }; */

        const instance = this;

        const hasMedia =
            this.blueprint.media !== undefined &&
            this.blueprint.media.source !== undefined;

        // find pushed file if exists
        const pushedFile = configuration.files.find(
            (x) => x.signature === instance.blueprint.componentId
        );

        imageContainer.appendChild(label);
        imageContainer.appendChild(image);

        if (hasMedia) {
            image.src = this.blueprint.media.source;
        } else if (pushedFile !== undefined) {
            // see https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsDataURL
            const reader = new FileReader();
            reader.addEventListener(
                "load",
                () => {
                    // if image loaded, render to preview
                    image.src = reader.result;
                },
                false
            );

            reader.addEventListener(
                "error",
                () => {
                    console.log(reader.result);
                },
                false
            );

            if (pushedFile.file) {
                reader.readAsDataURL(pushedFile.file);
            }
        } else {
            image.src =
                "https://via.placeholder.com/550x280?text=Ukuran yang direkomendasikan+550x280";
        }

        // button action container
        const btnContainer = document.createElement("div");
        btnContainer.id = "mediaBtnContainer_" + this.blueprint.componentId;
        btnContainer.className += "row justify-content-end visually-hidden";

        if (hasMedia) btnContainer.classList.remove("visually-hidden");

        const btnCol = document.createElement("div");
        btnCol.className += "col-auto";

        // Approach 1 (direct upload)
        // upload button when the loaded source is file
        /* const uploadBtn = document.createElement("button");
        uploadBtn.id = "btnUpload";
        uploadBtn.className += "btn btn-sm btn-info m-1 visually-hidden";
        uploadBtn.innerHTML = "Upload";

        uploadBtn.onclick = function (event) {
            event.preventDefault();
            // unclickable
            this.classList.add("disabled");
            this.innerHTML = "";

            // transform button into loading
            const spinner = instance._buildIcon("fas fa-spinner fa-spin");
            const loadingText = document.createTextNode("Loading ");

            this.appendChild(loadingText);
            this.appendChild(spinner);

            const inputContainer = $(
                "#mediaInputRow_" + instance.blueprint.componentId
            );
            const file = inputContainer.find("#mediaInput_file").get(0)
                .files[0];
            instance.uploadFile(file, this);
            // console.log(file);
        }; */

        // Approach 2 (upload when saved) recommended
        // apply button
        const applyImgBtn = document.createElement("button");
        applyImgBtn.id = "btnApply";
        applyImgBtn.className += "btn btn-sm btn-info m-1 visually-hidden";
        applyImgBtn.innerHTML = "Apply";

        applyImgBtn.onclick = function (event) {
            event.preventDefault();

            // empty all source
            // delete source
            instance.observer().media.source = undefined;
            // find and delete pushed file if exists
            configuration.files.filter(
                (x) => x.signature !== instance.blueprint.componentId
            );

            // transform button into loading
            transformToLoadingButton(this);

            const inputContainer = $(
                "#mediaInputRow_" + instance.blueprint.componentId
            );
            const link = inputContainer.find("#mediaInput_url").val();
            const file = inputContainer.find("#mediaInput_file").get(0)
                .files[0];

            if (link !== "" && file !== undefined) {
                // prefer link
                instance.observer().media.source = link;

                // turn to normal and hide button
                loadingButtonToNormal(this, "Apply", true);
            } else if (file !== undefined) {
                // render image to main
                instance.renderImageSource(file, true);

                // set file to upload later
                // find pushed file if exists
                const currentFile = configuration.files.find(
                    (x) => x.signature === instance.blueprint.componentId
                );

                if (currentFile !== undefined) {
                    // update
                    currentFile.file = file;
                } else {
                    // no existing current file
                    // push
                    configuration.files.push({
                        id: instance.blueprint.meta.user.id,
                        name: instance.blueprint.meta.user.name,
                        signature: instance.blueprint.componentId,
                        title: instance.blueprint.meta.survey.title,
                        file: file,
                    });
                }

                // turn to normal and hide button
                loadingButtonToNormal(this, "Apply", true);
            } else {
                // set link
                instance.observer().media.source = link;

                // turn to normal and hide button
                loadingButtonToNormal(this, "Apply", true);
            }
        };

        // remove button if any source is present
        const removeImgBtn = document.createElement("button");
        removeImgBtn.id = "btnRemove";
        removeImgBtn.className += "btn btn-sm btn-danger m-1";
        removeImgBtn.innerHTML = "Remove";

        removeImgBtn.onclick = function (event) {
            event.preventDefault();

            if (hasMedia) {
                // push any existing media to be deleted if any
                const source = instance.observer().media.source;
                configuration.deleted.media.push(source);
            }

            instance.observer().media.source = undefined;
        };

        btnCol.appendChild(removeImgBtn);
        btnCol.appendChild(applyImgBtn);
        // btnCol.appendChild(uploadBtn);

        btnContainer.appendChild(btnCol);

        imageContainer.appendChild(btnContainer);

        return imageContainer;
    }

    _buildMediaInput(type) {
        const container = document.createElement("div");
        container.className += "col-6";

        const id = "mediaInput_" + type;
        const input = document.createElement("input");
        input.id = id;
        input.className += "form-control form-control-md";

        const observableMedia = this.observer().media;

        const hasMedia =
            observableMedia !== undefined &&
            observableMedia.source !== undefined;

        /* if (hasMedia) {
            const fromUrl = isUrl(observableMedia.source);
            if (fromUrl) {
                input.value = observableMedia.source;
            }
        } */

        let helperText;

        const instance = this;

        if (type === "file") {
            // set input attributes for file
            input.accept = "image/*";
            input.type = "file";
            helperText = buildHelperText(
                "File Gambar maks. ukuran 1mb",
                "small"
            );

            // validate input
            input.onchange = function () {
                // get file input
                const file = this.files[0];
                const btnContainer = $(
                    "#mediaBtnContainer_" + instance.blueprint.componentId
                );

                // when the file isn't empty
                if (file !== undefined) {
                    // show upload button
                    btnContainer.removeClass("visually-hidden");
                    btnContainer
                        .find("#btnApply")
                        .removeClass("visually-hidden");

                    // if file size exceed 1 Mb
                    // show error
                    if (file.size > 1024 * 1024) {
                        this.classList.add("is-invalid");
                    } else {
                        this.classList.remove("is-invalid");

                        // render image
                        instance.renderImageSource(file);
                    }
                } else {
                    btnContainer.addClass("visually-hidden");
                }
            };
        } else {
            // set input attributes for url
            input.type = "url";
            input.placeholder = "Masukkan URL valid";
            helperText = buildHelperText(
                "Media gambar dari URL diterima",
                "small"
            );

            input.onchange = function () {
                const isCorrectUrl = isUrl(this.value);
                const btnContainer = $(
                    "#mediaBtnContainer_" + instance.blueprint.componentId
                );

                if (!isCorrectUrl && this.value !== "") {
                    btnContainer.addClass("visually-hidden");
                    this.classList.add("is-invalid");
                } else if (this.value !== "") {
                    btnContainer.removeClass("visually-hidden");
                    btnContainer
                        .find("#btnApply")
                        .removeClass("visually-hidden");
                    // observableMedia.source = this.value;
                    const previewImage = $(
                        "#previewImage_" + instance.blueprint.componentId
                    );
                    previewImage.attr("src", this.value);
                    this.classList.remove("is-invalid");
                } else {
                    btnContainer.addClass("visually-hidden");
                    // observableMedia.source = undefined;
                }
            };
        }

        // container.appendChild(label);
        container.appendChild(input);
        container.appendChild(helperText);

        return container;
    }

    renderImageSource(file, renderMainImage = false) {
        const mainImage = $("#mainImage_" + this.blueprint.componentId);
        const previewImage = $("#previewImage_" + this.blueprint.componentId);

        // see https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsDataURL
        const reader = new FileReader();
        reader.addEventListener(
            "load",
            () => {
                if (renderMainImage) mainImage.attr("src", reader.result);

                // if image loaded, render to preview
                previewImage.attr("src", reader.result);
            },
            false
        );

        reader.addEventListener(
            "error",
            () => {
                console.log(reader.result);
            },
            false
        );

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    uploadFile(file, button) {
        const mainImage = $("#mainImage_" + this.blueprint.componentId);
        const previewImage = $("#previewImage_" + this.blueprint.componentId);

        const formData = new FormData();
        formData.append("name", this.blueprint.meta.user.name);
        formData.append("signature", this.blueprint.componentId);
        formData.append("survey_title", this.blueprint.meta.survey.title);
        formData.append("ssf_file", file);

        const origin_url = window.location.origin;
        $.ajax({
            url: `${origin_url}/api/uploader/image`, // url
            method: "POST",
            // option to prevent error (do not modify)
            contentType: false,
            processData: false,
            data: formData, //data
        })
            .done((result) => {
                // returned result
                button.classList.add("visually-hidden");
                button.classList.remove("disabled");
                button.innerHTML = "Upload";
                this.observer().media.source = result;
                // mainImage.attr("src", result);
                // previewImage.attr("src", result);
                // console.log(result);
            })
            .fail((e) => console.log(e));
    }

    _updateMedia() {
        const mainImage = $("#mainImage_" + this.blueprint.componentId);
        const previewImage = $("#previewImage_" + this.blueprint.componentId);
        const descriptionInput = $("#mediaDescriptionOption");
        const btnContainer = $(
            "#mediaBtnContainer_" + this.blueprint.componentId
        );

        const observableMedia = this.observer().media;

        if (
            observableMedia.source !== undefined &&
            observableMedia.source !== null
        ) {
            mainImage.attr("src", observableMedia.source);
            previewImage.attr("src", observableMedia.source);
            descriptionInput.removeClass("visually-hidden");
        } else {
            mainImage.parent().addClass("visually-hidden");
            descriptionInput.addClass("visually-hidden");
            btnContainer.addClass("visually-hidden");
            previewImage.attr(
                "src",
                "https://via.placeholder.com/550x280?text=550x280+Recommended+size"
            );
        }
    }

    _buildMediaDescriptionOption() {
        const container = document.createElement("div");
        container.id = "mediaDescriptionOption";
        container.className += "mb-3";

        const label = this._createInputLabel("Image Description");

        const observableMedia = this.observer().media;

        const hasDescription = observableMedia.description !== undefined;

        const input = document.createElement("input");
        input.className += "form-control";
        input.value = hasDescription ? observableMedia.description : "";

        const hasMedia = observableMedia.source !== undefined;
        if (!hasMedia) {
            container.classList.add("visually-hidden");
        }

        input.onchange = function () {
            if (this.value.length < 20) {
                observableMedia.description = this.value;
                this.classList.remove("is-invalid");
            } else {
                this.classList.add("is-invalid");
            }
        };

        const helperText = buildHelperText("Empty to remove description");

        container.appendChild(label);
        container.appendChild(input);
        container.appendChild(helperText);

        return container;
    }

    _updateMediaDescription() {
        const mediaDescription = $(
            "#mediaDescription_" + this.blueprint.componentId
        );

        const observableMedia = this.observer().media;

        if (
            observableMedia.source !== undefined &&
            observableMedia.description !== undefined &&
            observableMedia.description !== ""
        ) {
            mediaDescription.get(0).innerHTML = observableMedia.description;
            mediaDescription.removeClass("visually-hidden");
        } else {
            mediaDescription.addClass("visually-hidden");
        }
    }

    _buildOptionsContainer() {
        const form = document.createElement("form");
        form.className += "needs-validation";
        form.noValidate = true;

        return form;
    }

    _buildInvalidMessage(message = "This field is required") {
        const invalid = document.createElement("div");
        invalid.className += "invalid-feedback";
        invalid.innerHTML = message;

        return invalid;
    }

    _updatableWrapper() {
        const wrapper = document.createElement("div");
        wrapper.id = uniqid("wrapper");
        wrapper.className += "mb-3";

        return wrapper;
    }

    _updateableLabel() {
        const wrapper = document.createElement("div");
        wrapper.id = uniqid("wrapper");
        wrapper.className += "mb-3";

        const label = this._createInputLabel("Label Pertanyaan");

        const input = document.createElement("input");
        input.className += "form-control";

        // observe text change
        const configuration = this.observer().configuration;

        const hasLabel = configuration.label !== undefined;
        if (hasLabel) input.value = configuration.label;

        input.onchange = function () {
            configuration.label = this.value;
        };

        wrapper.appendChild(label);
        wrapper.appendChild(input);

        return wrapper;
    }

    _updateLabel() {
        const mainLabel = $(this).find(
            "#mainLabel_" + this.blueprint.componentId
        );

        const observableLabel = this.observer().configuration.label;

        if (observableLabel !== undefined && observableLabel !== "") {
            mainLabel.get(0).innerHTML = observableLabel;
            mainLabel.removeClass("visually-hidden");
        } else {
            mainLabel.addClass("visually-hidden");
        }
    }

    _updateableQuestion() {
        var observable = this.observer();
        const wrapper = this._updatableWrapper();

        const label = document.createElement("label");
        label.innerHTML = "Pertanyaan";

        const textArea = document.createElement("textarea");
        textArea.className += "form-control";
        textArea.rows = 3;
        textArea.required = true;

        // observe question change
        textArea.value = observable.question;
        textArea.onchange = function (e) {
            if (this.value != "") {
                observable.question = this.value;
            }

            this.parentElement.classList.add("was-validated");
        };

        const invalidMessage = document.createElement("div");
        invalidMessage.className += "invalid-feedback";
        invalidMessage.innerHTML = "Question cannot be empty!";

        wrapper.appendChild(label);
        wrapper.appendChild(textArea);
        wrapper.appendChild(invalidMessage);

        return wrapper;
    }

    _updateQuestion(value) {
        const label = this.getQuestion();
        label.innerHTML = value;
    }

    _createInputLabel(placeholder, style = null, labelFor = null) {
        const label = document.createElement("label");
        label.innerHTML = placeholder;
        if (labelFor != null) label.htmlFor = labelFor;
        if (style != null) label.className += style;

        return label;
    }

    _createSelect(options, selectedIndex = null) {
        const select = document.createElement("select");
        select.className += "form-select";

        // options should be an array
        for (let i = 0; i < options.length; i++) {
            const optionElement = document.createElement("option");
            optionElement.value = options[i].value;
            optionElement.innerHTML = options[i].name;

            if (selectedIndex === i) {
                optionElement.selected = true;
            }

            select.appendChild(optionElement);
        }

        return select;
    }

    _createRadio(options, wrapper) {
        for (let i = 0; i < options.length; i++) {
            const container = document.createElement("div");
            container.className += "form-check";

            const label = document.createElement("label");
            label.className += "form-check-label";
            label.innerHTML = options[i].name;

            const option = document.createElement("input");
            if (i == 0) option.checked = true;
            option.type = "radio";
            option.className += "form-check-input";
            option.name = "textbox_type";
            option.value = options[i].value;

            label.appendChild(option);
            container.appendChild(label);
            wrapper.appendChild(container);
        }
    }

    getQuestion() {
        return $(this).find("#questionText").get(0);
    }

    _highlightQuestion(event) {
        event.currentTarget.classList.add("shadow");

        const dragIcon = $(this).find("#dragIconContainer");
        const actionButton = this._getActionButtonContainer();

        $(actionButton).removeClass("visually-hidden");
        dragIcon.removeClass("visually-hidden");
    }

    _removeHighlight(event) {
        event.currentTarget.classList.remove("shadow-lg");

        const dragIcon = $(this).find("#dragIconContainer");
        const actionButton = this._getActionButtonContainer();

        $(actionButton).addClass("visually-hidden");
        dragIcon.addClass("visually-hidden");
    }
}

customElements.define("custom-component", Component, { extends: "div" });
