import { randomInt } from "./chart-utils.js";
import { configurations } from "./main.js";
import { anychartChartConstructor } from "./type/anychart.js";
import {
    barChartConfig,
    convertReadableData,
    doughnutChartConfig,
    dxChartConstructor,
    lineChartConfig,
    pieChartConfig,
} from "./type/dx-chart.js";

$(() => {
    var modelId = $("#chartListModal");
    let container;
    let selectedIndex;
    let chartTypeDesc;
    let question;
    let questionConfig;
    let questionTitle;
    let questionId;
    let dxInstance;
    let errorMessage;

    modelId.on("show.bs.modal", function (event) {
        // Button that triggered the modal
        let button = event.relatedTarget;

        // Extract info from data-bs-* attributes
        selectedIndex = button.getAttribute("data-question-index");
        // const typeId = button.getAttribute("data-chart-type");

        // Use above variables to manipulate the DOM
        question = questionsData[selectedIndex];
        questionConfig = JSON.parse(question.configuration);
        questionId = question.id;
        container = $("#chart" + questionId);

        questionTitle = container.attr("data-chart-question");

        // use this to retain data (bugs)
        // chartTypeDesc = $("#chartType_" + questionId);
        /* const instanceType = chart.get(0).getAttribute("data-chart-instance");
        question = chart.get(0).getAttribute("data-chart-question");

        if (instanceType == "dxChart") {
            oldChart = chart.dxChart("instance");
        } else if (instanceType == "dxPieChart") {
            oldChart = chart.dxPieChart("instance");
        } else {
            // undefined
        } */

        // use this to re render chart (all options will be destroyed)
        /* dxInstance = Object.create(dxChartConstructor);
        dxInstance.target = "chart" + question.id;
        dxInstance.question = questionTitle; */

        $("#chartListContainer").on("click", _handleClick);
        errorMessage = $("#errorMsg");
    });

    /* $("#lineChart").on("click", function () {
        // use this to retain data (bugs)
        const dataSource = oldChart.option("dataSource");
        chart.replaceWith('<div id="' + chartId + '"' + "/><div>");
        const config = lineChartConfig({
            question: question,
            dataSource: dataSource,
        });
        const newChart = $("#" + chartId)
            .dxChart(config)
            .dxChart("instance");
        newChart.render({
            options: {
                force: true, // forces redrawing
                animate: true, // redraws the UI component with animation
            },
        });

        chartTypeDesc.get(0).innerHTML = newChart.option("chartName");
        _changeConfiguration(newChart.option().onSave());

        $(container).replaceWith(
            '<div id="chart' + question.id + '"' + "/><div>"
        );

        dxInstance.dataSource = convertReadableData(question.options);
        const chart = dxInstance.createLineChart();

        modelId.modal("hide");
    }); */

    function _handleClick(event) {
        event.preventDefault();
        const buttonTarget = event.target;

        if (buttonTarget.tagName === "BUTTON") {
            event.stopPropagation();
            const code = buttonTarget.getAttribute("data-chart-code");
            _identifyCode(
                code.substring(0, 3),
                code.substring(4, code.length),
                questionConfig.options.length != 0
            );
        }

        return true;
    }

    function _identifyCode(prefix, suffix, withOptions = true) {
        let chart;

        if (prefix === "any") {
            // show export if hidden
            const exports = $("#exportsContainer" + questionId);
            exports.removeClass("visually-hidden");

            const anychartInstance = Object.create(anychartChartConstructor);
            anychartInstance.target = "chart" + question.id;
            anychartInstance.question = questionTitle;
            if (withOptions) {
                anychartInstance.dataSource = convertReadableData(
                    questionConfig.options
                );
            } else {
                const testData = [];
                const dataCount = randomInt(10, 5);
                for (let i = 0; i < dataCount; i++) {
                    const data = new Object();

                    // random string (soon)
                    data.x = "String " + i;
                    data.y = randomInt(100, 10);
                    testData.push(data);
                }

                anychartInstance.dataSource = testData;
            }

            switch (suffix) {
                case "line":
                    if (withOptions) {
                        _cleanContainer();
                        chart = anychartInstance.createLineChart();
                    } else {
                        showMessage();
                    }
                    break;
                case "bar":
                    if (withOptions) {
                        _cleanContainer();
                        chart = anychartInstance.createBarChart();
                    } else {
                        showMessage();
                    }
                    break;
                case "pie":
                    if (withOptions) {
                        _cleanContainer();
                        chart = anychartInstance.createPieChart();
                    } else {
                        showMessage();
                    }
                    break;
                case "tag_cloud":
                    if (!withOptions) {
                        _cleanContainer();
                        chart = anychartInstance.createTagCloudChart();
                    } else {
                        showMessage();
                    }
                    break;
                default:
                    break;
            }

            if (chart !== undefined) {
                _updateConfiguration(chart);

                // update chart type
                $("#chartType_" + question.id).html(chart.chartName);

                modelId.modal("hide");
            }
        } else if (prefix === "dev") {
            // hide export if shown
            const exports = $("#exportsContainer" + questionId);
            exports.addClass("visually-hidden");

            dxInstance = Object.create(dxChartConstructor);
            dxInstance.target = "chart" + question.id;
            dxInstance.question = questionTitle;
            if (withOptions) {
                dxInstance.dataSource = convertReadableData(
                    questionConfig.options
                );
            } else {
                const testData = [];
                const dataCount = randomInt(10, 5);
                for (let i = 0; i < dataCount; i++) {
                    const data = new Object();

                    // random string (soon)
                    data.x = "String " + i;
                    data.y = randomInt(100, 10);
                    testData.push(data);
                }

                dxInstance.dataSource = testData;
            }

            switch (suffix) {
                case "line":
                    if (withOptions) {
                        _cleanContainer();
                        chart = dxInstance.createLineChart();
                    } else {
                        showMessage();
                    }
                    break;
                case "bar":
                    if (withOptions) {
                        _cleanContainer();
                        chart = dxInstance.createBarChart();
                    } else {
                        showMessage();
                    }
                    break;
                case "pie":
                    if (withOptions) {
                        _cleanContainer();
                        chart = dxInstance.createPieChart();
                    } else {
                        showMessage();
                    }
                    break;
                case "doughnut":
                    if (withOptions) {
                        _cleanContainer();
                        chart = dxInstance.createDoughnutChart();
                    } else {
                        showMessage();
                    }
                    break;
                default:
                    break;
            }

            if (chart !== undefined) {
                _updateConfiguration(chart);

                // update chart type
                $("#chartType_" + question.id).html(chart.chartName);

                modelId.modal("hide");
            }
        } else if (prefix === "cjs") {
            // soon
            showMessage();
        } else {
            // undefined
            showMessage();
        }
    }

    function _updateConfiguration(value) {
        // find by id
        /* let currentConfig = configurations.find((x) => {
            return x.questionId == questionId;
        });
        currentConfig.config = value; */

        // use index (faster)
        configurations[selectedIndex].config = JSON.stringify(value);
    }

    function _cleanContainer() {
        const pureElement = document.createElement("div");
        pureElement.style.height = 440;
        pureElement.style.paddingTop = 50;
        pureElement.id = "chart" + question.id;
        pureElement.setAttribute("data-chart-question", questionTitle);
        $(container).replaceWith(pureElement);
    }

    // show error message
    function showMessage(text) {
        if (errorMessage.hasClass("show")) {
            errorMessage.removeClass("show");
        }
        errorMessage.addClass("show");

        setTimeout(() => {
            errorMessage.removeClass("show");
        }, 3000);
    }
});
