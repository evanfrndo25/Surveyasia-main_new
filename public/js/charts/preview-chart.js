import { config } from "./chart-configuration.js";
import {
    addData,
    addDatasets,
    randomInt,
    randomizeDatasets,
    randomRgb,
    removeData,
    removeDataset,
} from "./chart-utils.js";

$(function () {
    const ctx = $("#chartPreview");
    const cfg = new Object(config);

    cfg.data = generateRandomData(7);

    const chart = new Chart(ctx, cfg);

    $("#chartTypeSelect").on("change", function () {
        _chartSelectChanged(this, chart, cfg);
    });

    $("#random").on("click", function () {
        randomizeDatasets(chart, cfg);
    });

    $("#add").on("click", function () {
        addData(chart);
    });

    $("#delete").on("click", function () {
        removeData(chart);
    });

    $("#addDataset").on("click", function () {
        addDatasets(chart);
    });

    $("#deleteDataset").on("click", function () {
        removeDataset(chart);
    });

    $("#titleInput").on("change", function () {
        _titleInputChanged(this, chart, cfg);
    });
});

function _chartSelectChanged(element, chart, cfg) {
    // for bubble and scatter
    if (element.value == "bubble" || element.value == "scatter") {
        cfg.data = generateRandomData(7, true);
    }

    cfg.type = element.value;
    cfg.options.scales = {};
    chart.update();
    console.log(cfg.options);
}

function generateRandomData(length, spc) {
    var labels = [];
    var datas = [];
    var colors = [];
    var borders = [];

    for (let i = 0; i < length; i++) {
        labels.push("Data " + (i + 1));
        if (spc) {
            datas.push({
                x: randomInt(20, 3),
                y: randomInt(20, 3),
                r: randomInt(20, 3),
            });
        } else {
            datas.push(randomInt(200, 10));
        }
        colors.push(randomRgb());
        // borders.push(randomRgb(0.5));
    }

    var data = {
        labels: labels,
        datasets: [
            {
                label: "Dataset 1",
                data: datas,
                backgroundColor: colors,
                // borderColor: borders,
                // borderWidth: 1,
            },
        ],
    };

    return data;
}

function _titleInputChanged(element, chart, cfg) {
    if (element.value != "") {
        cfg.options.plugins.title.text = element.value;
        cfg.options.plugins.title.display = true;
    } else {
        cfg.options.plugins.title.text = null;
        cfg.options.plugins.title.display = false;
    }

    chart.update();
}
