import { baseRules, maxSizeRule, requiredRule } from "./util.js";

export const textBoxComponent = {
    question: "Example Question",
    componentName: "textBox",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "text",
        label: "text box question",
        placeholder: "insert your answer",
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
    question: "Example Question",
    componentName: "multipleChoice",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "radio",
        label: "example label",
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
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    meta: {},
};

export const multiOptionsComponent = {
    question: "Example Question",
    componentName: "multiOptions",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "checkbox",
        label: "example label",
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

export const scaleComponent = {
    question: "Example Question",
    componentName: "scale",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "rating",
    }, */
    configuration: {
        inputType: "radio",
        label: "example label",
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
    validations: [JSON.parse(JSON.stringify(requiredRule))],
    media: {},
    meta: {},
};

export const ratingStarComponent = {
    question: "Example Question",
    componentName: "ratingStar",
    questionNumber: 0,
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "rating",
    }, */
    configuration: {
        inputType: "radio",
        label: "example label",
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
    question: "Example Question",
    questionNumber: 0,
    componentName: "dropdown",
    // use this for dynamic container
    /* container: {
        elementName: "div",
        style: "p-3 mb-3 border rounded shadow-sm draggable",
    }, */
    configuration: {
        inputType: "select",
        label: "example label",
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

export const fileUploadComponent = {
    question: "Example Question",
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
