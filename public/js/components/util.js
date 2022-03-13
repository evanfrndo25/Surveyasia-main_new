export default function uniqid(prefix) {
    var rand = Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);

    if (prefix != null) {
        return prefix + "_" + rand;
    }

    return rand;
}

export const baseRules = [
    {
        rule: "required",
        value: true,
        message: "this field is required",
    },
    {
        rule: "minLength",
        value: 0,
        message: "min length of 0",
    },
    {
        rule: "maxLength",
        value: 0,
        message: "max length of 0",
    },
    {
        rule: "fileType",
        value: 1,
        message: "Only document file are allowed",
    },
];

export const requiredRule = JSON.parse(JSON.stringify(baseRules[0]));

export const maxSizeRule = function () {
    const rule = JSON.parse(JSON.stringify(baseRules[2]));
    rule.value = 2000;
    rule.message = "max. size of 2000 Kb";

    return rule;
};

export function buildHelperText(
    text,
    element = "div",
    style = "form-text",
    id = null
) {
    const container = document.createElement(element);
    container.className += style;
    container.innerHTML = text;
    if (id !== null) container.id = id;

    return container;
}

// detect a url from a string
// return true if correct, false otherwise
export function isUrl(string) {
    const regex = /(https?:\/\/[^\s]+)/g;
    return string.match(regex);
}

export function transformToLoadingButton(button) {
    // unclickable
    button.classList.add("disabled");
    button.innerHTML = "";

    // transform button into loading
    const spinner = buildIcon("fas fa-spinner fa-spin");
    const loadingText = document.createTextNode("Loading ");
    button.appendChild(loadingText);
    button.appendChild(spinner);
}

export function loadingButtonToNormal(button, text, hide = false) {
    // turn to normal and hide button
    button.classList.add("visually-hidden");
    if (hide) button.classList.remove("disabled");
    button.innerHTML = text;
}

function buildIcon(iconClass) {
    let icon = document.createElement("i");
    icon.className += iconClass;
    icon.ariaHidden = true;

    return icon;
}
