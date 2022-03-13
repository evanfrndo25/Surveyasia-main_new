import { anychartChartConstructor } from "./type/anychart.js";
import { convertReadableData, dxChartConstructor } from "./type/dx-chart.js";

export function randomizeDatasets(chart, cfg) {
    cfg.data.datasets.forEach((dataset) => {
        for (let i = 0; i < chart.data.labels.length; i++) {
            dataset.data[i] = randomInt(200, 10);
        }
    });
    chart.update();
    return chart.data.datasets;
}

export function addData(chart) {
    if (chart.data.datasets.length > 0) {
        chart.data.labels.push("Data " + (chart.data.labels.length + 1));

        for (var index = 0; index < chart.data.datasets.length; ++index) {
            chart.data.datasets[index].data.push(randomInt(200, 10));
            chart.data.datasets[index].backgroundColor.push(randomRgb());
            // chart.data.datasets[index].borderColor.push(randomRgb(0.5));
        }

        chart.update();
    }
    return chart.data.datasets;
}

export function removeData(chart) {
    chart.data.labels.splice(-1, 1);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.pop();
    });

    chart.update();
    return chart.data.datasets;
}

export function addDatasets(chart) {
    const data = chart.data;
    const newDataset = {
        label: "Dataset " + (data.datasets.length + 1),
        backgroundColor: [],
        // borderColor: [],
        // borderWidth: 1,
        data: [],
    };
    for (let i = 0; i < 7; i++) {
        newDataset.data.push(randomInt(200, 10));
        newDataset.backgroundColor.push(randomRgb());
        // newDataset.borderColor.push(randomRgb(0.5));
    }
    chart.data.datasets.push(newDataset);
    chart.update();
    return chart.data.datasets;
}

export function removeDataset(chart) {
    chart.data.datasets.pop();
    chart.update();
    return chart.data.datasets;
}

export function randomInt(max, min) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

export function randomRgb(transparentize) {
    var num = Math.round(0xffffff * Math.random());
    var r = num >> 16;
    var g = (num >> 8) & 255;
    var b = num & 255;

    if (transparentize != null) {
        var t = transparentize;
        return "rgba(" + r + ", " + g + ", " + b + "," + t + ")";
    }

    return "rgb(" + r + ", " + g + ", " + b + ")";
}

// use this for intelligence chart render
// accross all library
export function renderChart(target, config = null, customData = null) {
    const prefix = config.chartCode.substring(0, 3);
    const suffix = config.chartCode.substring(4, config.chartCode.length);

    // get question id from target string
    const questionId = target.substring(5, target.length);

    const pureElement = document.createElement("div");
    pureElement.style.height = 440;
    pureElement.style.paddingTop = 50;

    let chart;

    if (prefix === "any") {
        const anychartInstance = Object.create(anychartChartConstructor);
        anychartInstance.target = target;
        anychartInstance.question = config.chart.title.text;
        if (customData != null) anychartInstance.dataSource = customData;

        switch (suffix) {
            case "line":
                chart = anychartInstance.createLineChart(config);
                break;
            case "bar":
                chart = anychartInstance.createBarChart(config);
                break;
            case "pie":
                chart = anychartInstance.createPieChart(config);
                break;
            case "tag_cloud":
                chart = anychartInstance.createTagCloudChart(config);
                break;
            default:
                break;
        }
    } else if (prefix === "dev") {
        // hide export button because
        // dev has default export buttons
        const exports = $("#exportsContainer" + questionId);
        exports.addClass("visually-hidden");

        // console.log(exports);

        const dxInstance = Object.create(dxChartConstructor);
        dxInstance.target = target;
        dxInstance.question = config.question;
        if (customData != null) dxInstance.dataSource = customData;

        switch (suffix) {
            case "line":
                chart = dxInstance.createLineChart(config);
                break;
            case "bar":
                chart = dxInstance.createBarChart(config);
                break;
            case "pie":
                chart = dxInstance.createPieChart(config);
                break;
            case "doughnut":
                chart = dxInstance.createDoughnutChart(config);
                break;
            case "data_grid":
                chart = dxInstance.createDataGrid(config);
                break;
            default:
                break;
        }
    } else if (prefix === "cjs") {
        // soon
    } else {
        // undefined
    }

    return chart;
}
