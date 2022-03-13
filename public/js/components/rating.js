import Blueprint from "./blueprint.js";
import { Component } from "./component.js";
import uniqid from "./util.js";

export class Rating extends Component {
    constructor(config) {
        /* let option = Object.create(Blueprint);
        if (config.id != null) {
            option.id = config.id;
        }

        if (config.inputable != null) {
            option.inputable = config.inputable;
        }

        option.type = config.type;
        option.question = config.question;
        option.questionType = config.questionType;
        option.number = config.number;
        option.label = config.label; */

        // init parent
        super(config);
        this.blueprint = config;
    }

    content() {
        const wrapper = document.createElement("div");
        wrapper.className += "star-rating";
        wrapper.id = uniqid("wrapper");

        const options = this.blueprint.options;

        for (let i = 0; i < options.length; i++) {
            let id = uniqid("star");
            const input = document.createElement("input");
            input.type = "radio";
            input.name = "answers[" + this.blueprint.id + "]";
            input.id = id;
            if (options[i].id == null) {
                input.value = options[i];
            } else {
                input.value = options[i].value;
            }

            const label = document.createElement("label");
            label.htmlFor = id;

            wrapper.appendChild(input);
            wrapper.appendChild(label);
        }

        return wrapper;
    }
}

customElements.define("rating-bar", Rating, {
    extends: "div",
});
