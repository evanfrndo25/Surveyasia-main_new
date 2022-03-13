// see base configuration using JSON
// https://playground.anychart.com/api/v8/_samples/anychart.fromJson

export const anychartChartConstructor = {
    target: "target",
    question: "example question", // override this
    dataSource: [], // override this
    customSeries: null,
    customLegend: null,
    customTitle: null,
    customTooltip: null,

    // create bar
    createBarChart: function (customConfig = null) {
        const config = barChartConfiguration(this.question, this.dataSource);
        let chart;

        if (customConfig != null) {
            const dataSet = anychart.data.set(this.dataSource);
            customConfig.chart.series = [
                { name: "value", data: dataSet.mapAs({ x: "x", value: "y" }) },
            ];
            chart = renderChartWithJson(customConfig, this.target);
        } else {
            chart = renderChartWithJson(config, this.target);
        }

        // set chart name
        chart.chartName = "Bar Chart";

        return chart;
    },

    // create line
    createLineChart: function (customConfig = null) {
        // console.log(this.dataSource);
        const config = lineChartConfiguration(this.question, this.dataSource);
        let chart;

        if (customConfig != null) {
            const dataSet = anychart.data.set(this.dataSource);
            customConfig.chart.data = dataSet.mapAs({ x: "x", value: "y" });
            chart = renderChartWithJson(customConfig, this.target);
        } else {
            chart = renderChartWithJson(config, this.target);
        }

        // set chart name
        chart.chartName = "Line Chart";

        return chart;
    },

    // create pie
    createPieChart: function (customConfig = null) {
        const config = pieChartConfiguration(this.question, this.dataSource);
        let chart;

        if (customConfig != null) {
            const dataSet = anychart.data.set(this.dataSource);
            customConfig.chart.data = dataSet.mapAs({ x: "x", value: "y" });
            chart = renderChartWithJson(customConfig, this.target);
        } else {
            chart = renderChartWithJson(config, this.target);
        }

        // set chart name
        chart.chartName = "Pie Chart";

        return chart;
    },

    // create doughnut
    /*  createDoughnutChart: function () {
        const config = barChartConfiguration(this.question, this.dataSource);
        const chart = renderChartAlternative(this.target, config);
        chart.getConfig = function () {
            return config;
        };

        return chart
    }, */

    // create pie
    createTagCloudChart: function (customConfig = null) {
        const config = tagCloudConfiguration(this.question, this.dataSource);
        let chart;

        if (customConfig != null) {
            const dataSet = anychart.data.set(this.dataSource);
            customConfig.chart.data = dataSet.mapAs({ x: "x", value: "y" });
            chart = renderChartWithJson(customConfig, this.target);
        } else {
            chart = renderChartWithJson(config, this.target);
        }

        // set chart name
        chart.chartName = "Tag Cloud";

        return chart;
    },
};

const globalConfig = {
    chart: {
        zIndex: 0,
        enabled: true,
        type: "override type here",
        data: [],
        title: {
            text: "override title here",
            fontSize: 22,
            align: "center",
            // fontFamily,
            // fontColor
        },
        series: [],
        autoRedraw: true,
    },
};

export function convertReadableData(arrayData, mode = "value", dummy = true) {
    // data to be returned
    const dataOutput = [];

    if (mode === "value") {
        arrayData.forEach((option) => {
            // copy option object and modify
            const data = new Object();
            data.id = option.id;

            // always set x as argument / label
            // and set y as value
            data.x = option.value;

            // use dummy instead
            data.value = randomInt(100, 10);

            dataOutput.push(data);
        });
    }

    return dataOutput;
}

export function tagCloudConfiguration(title, dataSource) {
    const config = new Object(globalConfig);
    const dataSet = anychart.data.set(dataSource);
    config.chart.type = "tag-cloud";
    config.chart.data = dataSet.mapAs({ x: "x", value: "y" });
    config.chart.title.text = title;
    config.chartCode = "any_tag_cloud";

    return config;
}

export function pieChartConfiguration(title, dataSource) {
    const config = new Object(globalConfig);
    const dataSet = anychart.data.set(dataSource);
    config.chart.type = "pie";
    config.chart.data = dataSet.mapAs({ x: "x", value: "y" });
    config.chart.title.text = title;
    config.chartCode = "any_pie";

    return config;
}

export function barChartConfiguration(title, dataSource) {
    const config = new Object(globalConfig);
    const dataSet = anychart.data.set(dataSource);
    config.chart.type = "bar";
    config.chart.series = [
        { name: "value", data: dataSet.mapAs({ x: "x", value: "y" }) },
    ];
    config.chart.title.text = title;
    config.chart.isVertical = true;
    config.chartCode = "any_bar";

    return config;
}

export function lineChartConfiguration(title, dataSource) {
    const config = new Object(globalConfig);
    const dataSet = anychart.data.set(dataSource);
    config.chart.type = "line";
    config.chart.data = dataSet.mapAs({ x: "x", value: "y" });
    config.chart.title.text = title;
    config.chartCode = "any_line";

    return config;
}

// render anychart using jQuery with anychart-jquery plugin
// https://github.com/AnyChart/AnyChart-jQuery
export function renderChartAlternative(target, chartType, dataArray) {
    // render chart to target element
    return $("#" + target).anychart(chartType, dataArray);
}

// render chart using JSON object
export function renderChartWithJson(jsonConfig, target, withEditor = true) {
    const instance = $("#" + target).attr(
        "data-chart-question",
        jsonConfig.chart.title.text
    );
    // get question id from target string
    const questionId = target.substring(5, target.length);

    instance.empty();

    const chart = anychart.fromJson(jsonConfig);
    chart.container(target);
    chart.draw();

    // handle export

    // export server (needs to use PhantomJS)
    // change localhost to domain when tested
    // anychart.exports.server("http://localhost:8000");

    const exports = $("#exportsContainer" + questionId);
    setExportListeners(exports, chart);

    // const instance = $("#" + target).anychart(jsonConfig);

    if (withEditor) {
        /* const editor = anychart.editor();
        editor.render(target + "_editor"); */
    }

    const exportableConfig = chart.toJson();
    exportableConfig.chartCode = jsonConfig.chartCode;

    return exportableConfig;
}

function setExportListeners(container, instance) {
    const exportableType = [
        { id: "asPng", type: "png" },
        { id: "asJpg", type: "jpg" },
        { id: "asSvg", type: "svg" },
        { id: "asPdf", type: "pdf" },
        { id: "asCsv", type: "csv" },
        { id: "asExc", type: "exc" },
    ];

    exportableType.forEach((exportable) => {
        // handle clicks
        $(container)
            .find("#" + exportable.id)
            .on("click", (event) => {
                event.preventDefault();
                handleExport(instance, exportable.type);
            });
    });
}

function handleExport(instance, as) {
    switch (as) {
        case "png":
            instance.saveAsPng();
            break;

        case "jpg":
            instance.saveAsJpg();
            break;

        case "svg":
            instance.saveAsSvg();
            break;

        case "pdf":
            instance.saveAsPdf();
            break;

        case "csv":
            instance.saveAsCsv();
            break;

        case "exc":
            instance.saveAsXlsx("default", "excel");
            break;

        default:
            // unspecified
            break;
    }
}
