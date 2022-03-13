import { randomInt, renderChart } from "./chart-utils.js";
import {
    anychartChartConstructor,
    barChartConfiguration,
    pieChartConfiguration,
    renderChartWithJson,
    tagCloudConfiguration,
} from "./type/anychart.js";
import { convertReadableData, dxChartConstructor } from "./type/dx-chart.js";

// all chart config will be saved here
export const configurations = [];

$(() => {
    // only support DevExpress library, chartJS soon

    // get questions from controller
    var questions = questionsData;

    var num = 0;
    questions.forEach((question) => {
        let testData = [];
        const questionConfig = JSON.parse(question.configuration);

        // data count as options count to provide and
        // determine correct random chart
        let dataCount = 0;

        let chart;

        // check if configuration exists
        if (question.chart_config != null) {
            const target = "chart" + question.id;
            const config = JSON.parse(question.chart_config.config);
            dataCount = randomInt(10, 5);
            const hasOptions =
                questionConfig.options !== undefined &&
                questionConfig.options !== null &&
                questionConfig.options.length !== 0;

            if (questionConfig.componentName == "fileUpload") {
                for (let i = 0; i < dataCount; i++) {
                    const data = new Object();

                    // random string (soon)
                    data.id = i;
                    data.fullPath = "String " + i;
                    data.respondent = randomInt(100, 10);
                    testData.push(data);
                }
            } else if (questionConfig.componentName === "scale") {
                for (
                    let i = questionConfig.configuration.minVal;
                    i <= questionConfig.configuration.maxVal;
                    i++
                ) {
                    const data = new Object();

                    // random string (soon)
                    // data.id = i;
                    data.x = "Value " + i;
                    data.y = randomInt(100, 10);
                    testData.push(data);
                }
            } else {
                for (let i = 0; i < dataCount; i++) {
                    const data = new Object();

                    // random string (soon)
                    data.id = i;
                    data.x = "String " + i;
                    data.y = randomInt(100, 10);
                    testData.push(data);
                }
            }

            chart = renderChart(
                target,
                config,
                hasOptions
                    ? convertReadableData(questionConfig.options)
                    : testData
            );

            // misc update
            /* const advConfig = $("#config_" + question.id);
            advConfig.get(0).innerHTML = JSON.stringify(
                // chart.option() == null ? chart.toJson() : chart.option(),
                "Implemented soon",
                undefined,
                4
            );

            const chartType = $("#chartType_" + question.id);
            // chartType.get(0).innerHTML = chart.option().chartName == n;
            const changeChartBtn = $("#chartModalTogglerBtn_" + question.id);
            changeChartBtn.on("click", () => {
                chart.dxChart;
            }); */

            // store config
            configurations.push({
                id: question.chart_config.id,
                questionId: question.id,
                config: chart,
            });
        } else {
            // generate random chart
            // question options as data if any
            if (
                questionConfig.options !== undefined &&
                questionConfig.options.length != 0
            ) {
                dataCount = questionConfig.options.length;
                testData = convertReadableData(questionConfig.options);
            } else {
                // generate random string instead
                dataCount = randomInt(10, 5);

                if (questionConfig.componentName === "fileUpload") {
                    for (let i = 0; i < dataCount; i++) {
                        const data = new Object();

                        // random string (soon)
                        data.id = i;
                        data.fullPath = "String " + i;
                        data.respondent = randomInt(100, 10);
                        testData.push(data);
                    }
                } else if (questionConfig.componentName === "scale") {
                    for (
                        let i = questionConfig.configuration.minVal;
                        i <= questionConfig.configuration.maxVal;
                        i++
                    ) {
                        const data = new Object();

                        // random string (soon)
                        // data.id = i;
                        data.x = "Value " + i;
                        data.y = randomInt(100, 10);
                        testData.push(data);
                    }
                } else {
                    for (let i = 0; i < dataCount; i++) {
                        const data = new Object();

                        // random string (soon)
                        data.id = i;
                        data.x = "String " + i;
                        data.value = randomInt(100, 10);
                        testData.push(data);
                    }
                }
            }

            // generate correct random chart
            chart = randomChart(
                questionConfig,
                testData,
                dataCount,
                num,
                "chart" + question.id,
                question.id
            );

            // store config
            configurations.push({
                questionId: question.id,
                config: chart,
            });
        }

        // update question type
        $("#questionType_" + question.id).html(questionConfig.componentName);

        // update chart type
        $("#chartType_" + question.id).html(chart.chartName);

        num++;
    });

    $("#form").on("submit", (e) => {
        // e.preventDefault();
        const formInstance = $("#form");
        configurations.forEach((config) => {
            const input = _hiddenConfigInput(config);
            formInstance.append(input);
        });
    });
});

function randomChart(
    question,
    dataSource,
    dataCount,
    num,
    renderTarget,
    questionId
) {
    const questionTitle = "Q" + (num + 1) + ". " + question.question;
    let chart;
    const target = renderTarget;

    // init dx library helper
    const dxInstance = Object.create(dxChartConstructor);
    dxInstance.target = target;
    dxInstance.question = questionTitle;
    dxInstance.dataSource = dataSource;

    // init anychart library helper
    const anychartInstance = Object.create(anychartChartConstructor);
    anychartInstance.target = target;
    anychartInstance.question = questionTitle;
    anychartInstance.dataSource = dataSource;

    if (question.componentName == "textBox") {
        // textBox should not support any charts
        // show table instead

        // with tag Cloud from anychart
        chart = anychartInstance.createTagCloudChart();
    } else if (question.componentName == "fileUpload") {
        // using table to show information of uploaded files
        chart = dxInstance.createDataGrid();

        // hide export button because
        // dev has default export buttons
        const exports = $("#exportsContainer" + questionId);
        exports.addClass("visually-hidden");
    } else {
        chart = dxInstance.createPieChart();

        // hide export button because
        // dev has default export buttons
        const exports = $("#exportsContainer" + questionId);
        exports.addClass("visually-hidden");
    }

    // use this for advanced configurations (soon)
    /* const advConfig = $("#config_" + question.id);
    advConfig.get(0).innerHTML = JSON.stringify(chartOption, undefined, 4); */

    return chart;
}

function _hiddenConfigInput(value) {
    const input = document.createElement("input");
    input.type = "hidden";
    input.name = "configurations[]";
    input.value = JSON.stringify(value);

    return input;
}
