import { renderChart } from "./chart-utils.js";
import { renderChartWithJson } from "./type/anychart.js";

$(function () {
    showResult();
});

async function fetchResult() {
    var response = await fetch(url, {
        headers: {
            Accept: "application/json",
        },
    });

    return await response.json();
}

function showResult() {
    fetchResult()
        .then((response) => renderCharts(response))
        .catch((e) => console.log(e));
}

function renderCharts(response) {
    const chartListContainer = $("#chartContainer");
    response.survey.questions.forEach((question) => {
        const target = "chart" + question.id;
        const questionConfig = JSON.parse(question.configuration);
        if (question.chart_config !== null) {
            const config = JSON.parse(question.chart_config.config);
            const dataSource = response.data.find(
                (x) => x.id == question.id
            ).data;

            if (questionConfig.componentName == "fileUpload") {
                let number = 1;
                dataSource.forEach((data) => {
                    data.id = number;
                    data.fullPath = data.x;
                    data.respondent = data.y;

                    delete data.x;
                    delete data.y;

                    number++;
                });

                console.log(dataSource);
            }
            const container = _buildChartContainer(target, true);
            chartListContainer.append(container);
            const chart = renderChart(target, config, dataSource);
        }
    });
}

function _buildChartContainer(id, empty = false) {
    const row = document.createElement("div");
    row.className += "row mb-3";

    const col = document.createElement("div");
    col.className += "col";

    const card = document.createElement("div");
    card.className += "card";

    const cardBody = document.createElement("div");
    cardBody.className += "card-body";

    const container = document.createElement("div");
    container.style.height = 450;
    container.id = id;

    if (empty) {
        const emptyConfig = document.createElement("h6");
        emptyConfig.className +=
            "text-center position-absolute top-50 start-50 translate-middle";
        emptyConfig.innerHTML = "Configuration Not Set";
        container.className += "position-relative";
        container.appendChild(emptyConfig);
    }

    row.appendChild(col);
    col.appendChild(card);
    card.appendChild(cardBody);
    cardBody.appendChild(container);

    return row;
}
