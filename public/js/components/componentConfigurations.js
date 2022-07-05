import { baseRules, maxSizeRule, requiredRule } from "./util.js";

export const textBoxComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "textBox",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "text",
        label: "Masukkan Label Pertanyaan Anda ",
        placeholder: "Masukkan Jawaban Anda",
        width: "long",
        style: "form-control",
        // position: 0,
        helperText: "this is a textBox",
        /* listeners: {
            change: function () {},
        }, */
    },

    media: {
        /* mediaType: "image",
        source: "https://images.unsplash.com/photo-1638913662252-70efce1e60a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=550&q=80",
        description: "sample image", */
    },
    validations: [
        JSON.parse(JSON.stringify(requiredRule)), // required
    ],
    meta: {},
};

export const multipleChoiceComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "multipleChoice",
    questionNumber: 0,
    // use this for dynamic container
    /*\ container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "radio",
        label: "Masukkan Label Pertanyaan Anda",
        style: "form-check-input",
        // position: 0,
    },
    options: ["Agree", "Disagree", "Other"],
    media: {},
    otherOption: {
        inputType: "text",
        placeholder: "input your answer",
        style: "form-control",
        /* listeners: {
            change: function () {},
        }, */
    },
    logic: {
        Agree: null,
        Disagree: null,
        Other: null,
    },
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    meta: {},
};

export const multiOptionsComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "multiOptions",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "checkbox",
        label: "Masukkan Label Pertanyaan Anda",
        style: "form-check-input",
        // position: 0,
    },
    options: ["Option 1", "Option 2", "Option 3", "Option 4"],
    otherOption: {
        inputType: "text",
        placeholder: "input your answer",
        style: "form-control",
        /* listeners: {
            change: function () {},
        }, */
    },
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    media: {},
    meta: {},
};

// matriks options
export const matrixOptionsComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "matrixOptions",
    questionNumber: 0,

    questionLeft: ["Option 1", "Option 2", "Option 3"],
    componentName: "matrixOptions",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "checkbox",
        label: "Masukkan Label Pertanyaan Anda",
        style: "form-check-input",
        // position: 0,
    },
    options: ["Option 1", "Option 2", "Option 3", "Option 4"],
    otherOption: {
        inputType: "text",
        placeholder: "input your answer",
        style: "form-control",
        /* listeners: {
            change: function () {},
        }, */
    },
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    media: {},
    meta: {},
};

// Repeat Question
export const repeatQuestComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "repeatQuestion",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "text",
        label: "Masukkan Label Pertanyaan Anda ",
        placeholder: "Masukkan Jawaban Anda",
        width: "long",
        style: "form-control",
        // position: 0,
        helperText: "this is a textBox",
        /* listeners: {
            change: function () {},
        }, */
    },

    media: {
        /* mediaType: "image",
        source: "https://images.unsplash.com/photo-1638913662252-70efce1e60a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=550&q=80",
        description: "sample image", */
    },
    validations: [
        JSON.parse(JSON.stringify(requiredRule)), // required
    ],
    meta: {},
};

export const scaleComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "scale",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "rating",
    }, */
    configuration: {
        inputType: "radio",
        label: "Masukkan Label Pertanyaan Anda",
        style: "scale",
        minVal: 1,
        maxVal: 10,
        // position: 0,
    },
    options: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1],
    otherOption: {
        inputType: "text",
        placeholder: "input your answer",
        style: "form-control",
        /* listeners: {
            change: function () {},
        }, */
    },
    logic: {
        "1-3": null,
    },
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    media: {},
    meta: {},
};

export const ratingStarComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "ratingStar",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "rating",
    }, */
    configuration: {
        inputType: "radio",
        label: "Masukkan Label Pertanyaan Anda",
        style: "star-rating",
        minVal: 1,
        maxVal: 10,
        // position: 0,
    },

    // options: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1],
    otherOption: {
        inputType: "text",
        placeholder: "input your answer",
        style: "form-control",
        /* listeners: {
            change: function () {},
        }, */
    },
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    media: {},
    meta: {},
};

export const dropDownComponent = {
    question: "Tulis Pertanyaan Anda disini",
    questionNumber: 0,
    componentName: "dropdown",
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "select",
        label: "Masukkan Label Pertanyaan Anda",
        style: "form-check-input",
        // position: 0,
    },
    options: ["Option 1", "Option 2", "Option 3", "Option 4"],
    otherOption: {
        inputType: "text",
        placeholder: "input your answer",
        style: "form-control",
        /* listeners: {
            change: function () {},
        }, */
    },
    logic: {
        "Option 1": null,
        "Option 2": null,
        "Option 3": null,
        "Option 4": null,
    },
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    media: {},
    meta: {},
};

export const fileUploadComponent = {
    question: "Tulis Pertanyaan Anda disini",
    componentName: "fileUpload",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "file",
        label: "file question",
        style: "form-control",
        // position: 0,
        helperText: "this is a file upload",
        listeners: {
            change: function () {},
        },
    },
    validations: [
        JSON.parse(JSON.stringify(requiredRule)),
        JSON.parse(JSON.stringify(maxSizeRule())), // max size
        JSON.parse(JSON.stringify(baseRules[3])), // file type
    ],
    media: {},
    meta: {},
};
