import { randomInt } from "../chart-utils.js";

// instance type constants
// used to determine which chart belongs to which instance

// https://js.devexpress.com/Documentation/Guide/UI_Components/Chart/
const TYPE_GLOBAL = "dxChart"; // global = dxChart
const TYPE_PIE = "dxPieChart";
const TYPE_DATA_GRID = "dxDataGrid";

/* let globalConfig = {
    chartName: "Bar Chart",
    instanceType: "dxChart",
    libraryFrom: "dxChart",
    question: question,
    dataSource,
    commonSeriesSettings: {
        argumentField: "x",
        valueField: "y",
        type: "bar",
        name: question,
    },
    series: series == null ? baseSeries : series,
    legend: legend == null ? baseLegend : legend,
    title: title == null ? baseTitle : title,
    export: {
        enabled: true,
    },
    tooltip: tooltip == null ? baseTooltip : tooltip,
    loadingIndicator: {
        enabled: true,
    },
    onIncidentOccurred(e) {
        console.log(e);
    },
    onDone(e) {
        const element = e.element;
        element.attr("data-chart-instance", () => {
            return "dxChart";
        });
        element.attr("data-chart-question", () => {
            return question;
        });
        // $("#chartModalTogglerBtn").removeClass("visually-hidden");
    },
    onDrawn(e) {
        // $("#chartModalTogglerBtn").addClass("visually-hidden");
    },
    onSave() {
        return config;
    },
}; */

export const dxChartConstructor = {
    target: "target",
    question: "example question", // override this
    dataSource: [], // override this
    customSeries: null,
    customLegend: null,
    customTitle: null,
    customTooltip: null,

    // create bar
    createBarChart: function (customConfig = null) {
        const config = barChartConfig({
            question: this.question,
            dataSource: this.dataSource,
            series: this.customSeries,
            legend: this.customLegend,
            title: this.customTitle,
            tooltip: this.customTooltip,
        });

        let chart;

        if (customConfig != null) {
            customConfig.dataSource = this.dataSource;
            chart = renderChart(customConfig, this.target);
        } else {
            chart = renderChart(config, this.target);
        }

        return chart;
    },

    // create line
    createLineChart: function (customConfig = null) {
        const config = lineChartConfig({
            question: this.question,
            dataSource: this.dataSource,
            series: this.customSeries,
            legend: this.customLegend,
            title: this.customTitle,
            tooltip: this.customTooltip,
        });

        let chart;

        if (customConfig != null) {
            customConfig.dataSource = this.dataSource;
            chart = renderChart(customConfig, this.target);
        } else {
            chart = renderChart(config, this.target);
        }

        return chart;
    },

    // create pie
    createPieChart: function (customConfig = null) {
        const config = pieChartConfig({
            question: this.question,
            dataSource: this.dataSource,
            series: this.customSeries,
            legend: this.customLegend,
            title: this.customTitle,
            tooltip: this.customTooltip,
        });

        let chart;

        if (customConfig != null) {
            customConfig.dataSource = this.dataSource;
            chart = renderChart(customConfig, this.target);
        } else {
            chart = renderChart(config, this.target);
        }

        return chart;
    },

    // create doughnut
    createDoughnutChart: function (customConfig = null) {
        const config = doughnutChartConfig({
            question: this.question,
            dataSource: this.dataSource,
            series: this.customSeries,
            legend: this.customLegend,
            title: this.customTitle,
            tooltip: this.customTooltip,
        });

        let chart;

        if (customConfig != null) {
            customConfig.dataSource = this.dataSource;
            chart = renderChart(customConfig, this.target);
        } else {
            chart = renderChart(config, this.target);
        }

        return chart;
    },

    // create data grid for file
    createDataGrid: function (customConfig = null) {
        const config = dataGridConfig({
            title: this.question,
            dataSource: this.dataSource,
        });

        let chart;

        if (customConfig != null) {
            customConfig.dataSource = this.dataSource;
            chart = renderChart(customConfig, this.target);
        } else {
            chart = renderChart(config, this.target);
        }

        return chart;
    },
};

export function convertReadableData(arrayData, mode = "xy", dummy = true) {
    // data to be returned
    const dataOutput = [];

    if (mode === "xy") {
        arrayData.forEach((option) => {
            // copy option object and modify
            const data = new Object();
            // data.id = option.id;

            // always set x as argument / label
            // and set y as value
            data.x = option;

            // use dummy instead
            data.y = randomInt(100, 10);

            dataOutput.push(data);
        });
    }

    return dataOutput;
}

export function barChartConfig({
    question, //required
    dataSource, //required
    series = null,
    legend = null,
    title = null,
    tooltip = null,
}) {
    // default configurations
    var baseSeries = {
        type: "bar",
        argumentField: "x",
        valueField: "y",
        name: question,
        color: "#fac29a",
    };

    var baseLegend = {
        verticalAlignment: "top",
        horizontalAlignment: "center",
        itemTextPosition: "right",
    };

    var baseTitle = {
        text: question,
        /* subtitle: {
            text: "some subtitle",
        }, */
    };

    var baseTooltip = {
        enabled: true,
        customizeTooltip(arg) {
            return {
                text: `${arg.percentText} - ${arg.valueText}`,
            };
        },
    };

    const config = {
        chartName: "Bar Chart",
        instanceType: "dxChart",
        chartCode: "dev_bar",
        question: question,
        dataSource,
        commonSeriesSettings: {
            argumentField: "x",
            valueField: "y",
            type: "bar",
            name: question,
        },
        series: series == null ? baseSeries : series,
        legend: legend == null ? baseLegend : legend,
        title: title == null ? baseTitle : title,
        export: {
            enabled: false,
        },
        tooltip: tooltip == null ? baseTooltip : tooltip,
        loadingIndicator: {
            enabled: true,
        },
        onIncidentOccurred(e) {
            console.log(e);
        },
        onDone(e) {
            const element = e.element;
            element.attr("data-chart-instance", () => {
                return "dxChart";
            });
            element.attr("data-chart-question", () => {
                return question;
            });
            // $("#chartModalTogglerBtn").removeClass("visually-hidden");
        },
        onDrawn(e) {
            // $("#chartModalTogglerBtn").addClass("visually-hidden");
        },
        onSave() {
            return config;
        },
    };

    return config;
}

export function lineChartConfig({
    question, //required
    dataSource, //required
    series = null,
    legend = null,
    title = null,
    tooltip = null,
}) {
    // default configurations
    var baseSeries = {
        type: "stackedline",
        argumentField: "x",
        valueField: "y",
        name: question,
        color: "#fac29a",
    };

    var baseLegend = {
        verticalAlignment: "top",
        horizontalAlignment: "center",
        itemTextPosition: "right",
    };

    var baseTitle = {
        text: question,
        /*  subtitle: {
            text: "some subtitle",
        }, */
    };

    var baseTooltip = {
        enabled: true,
        customizeTooltip(arg) {
            return {
                text: `${arg.percentText} - ${arg.valueText}`,
            };
        },
    };

    const config = {
        chartName: "Line Chart",
        instanceType: "dxChart",
        chartCode: "dev_line",
        question: question,
        palette: "Violet",
        dataSource,
        commonSeriesSettings: {
            argumentField: "x",
            valueField: "y",
            type: "line",
            name: question,
        },
        margin: {
            bottom: 20,
        },
        argumentAxis: {
            valueMarginsEnabled: false,
            discreteAxisDivisionMode: "crossLabels",
            grid: {
                visible: true,
            },
        },
        series: series == null ? baseSeries : series,
        legend: legend == null ? baseLegend : legend,
        title: title == null ? baseTitle : title,
        export: {
            enabled: false,
        },
        tooltip: tooltip == null ? baseTooltip : tooltip,
        loadingIndicator: {
            enabled: true,
        },
        onIncidentOccurred(e) {
            console.log(e);
        },
        onDone(e) {
            const element = e.element;
            element.attr("data-chart-instance", () => {
                return "dxChart";
            });
            element.attr("data-chart-question", () => {
                return question;
            });
            // $("#chartModalTogglerBtn").removeClass("visually-hidden");
        },
        onDrawn(e) {
            // $("#chartModalTogglerBtn").addClass("visually-hidden");
        },
        onSave() {
            return config;
        },
    };

    return config;
}

export function doughnutChartConfig({
    question, //required
    dataSource, //required
    series = null,
    legend = null,
    title = null,
    tooltip = null,
}) {
    // default configurations
    var baseSeries = [
        {
            argumentField: "x",
            valueField: "y",
            label: {
                visible: true,
                connector: {
                    visible: true,
                },
            },
            name: question,
        },
    ];

    var baseLegend = {
        horizontalAlignment: "right",
        verticalAlignment: "top",
    };

    var baseTitle = question;

    var baseTooltip = {
        enabled: true,
        customizeTooltip(arg) {
            return {
                text: `${arg.valueText} - ${(arg.percent * 100).toFixed(2)}%`,
            };
        },
    };

    const config = {
        chartName: "Doughnut Chart",
        instanceType: "dxPieChart",
        chartCode: "dev_doughnut",
        question: question,
        type: "doughnut",
        palette: "Soft Pastel",
        dataSource,
        series: series == null ? baseSeries : series,
        legend: legend == null ? baseLegend : legend,
        title: title == null ? baseTitle : title,
        export: {
            enabled: false,
        },
        tooltip: tooltip == null ? baseTooltip : tooltip,
        loadingIndicator: {
            enabled: true,
        },
        onIncidentOccurred(e) {
            console.log(e);
        },
        onDone(e) {
            const element = e.element;
            element.attr("data-chart-instance", () => {
                return "dxPieChart";
            });
            element.attr("data-chart-question", () => {
                return question;
            });
            // $("#chartModalTogglerBtn").removeClass("visually-hidden");
        },
        onDrawn(e) {
            // $("#chartModalTogglerBtn").addClass("visually-hidden");
        },
        onSave() {
            return config;
        },
    };

    return config;
}

export function pieChartConfig({
    question, //required
    dataSource, //required
    series = null,
    legend = null,
    tooltip = null,
}) {
    // default configurations
    var baseSeries = [
        {
            argumentField: "x",
            valueField: "y",
            label: {
                visible: true,
                connector: {
                    visible: true,
                    width: 1,
                },
                position: "columns",
                customizeText(arg) {
                    return `${arg.valueText} (${arg.percentText})`;
                },
            },
            name: question,
        },
    ];

    var baseLegend = {
        /* title: {
            text: question,
            subtitle: {
                text: "some subtitle",
            },
        }, */
        orientation: "vertical",
        itemTextPosition: "right",
        columnCount: 4,
    };

    var baseTitle = question;

    var baseTooltip = {
        enabled: true,
        customizeTooltip(arg) {
            return {
                text: `${arg.valueText} - ${(arg.percent * 100).toFixed(2)}%`,
            };
        },
    };

    const config = {
        chartName: "Pie Chart",
        instanceType: "dxPieChart",
        chartCode: "dev_pie",
        question: question,
        /* size: {
            width: 500,
        }, */
        palette: "bright",
        dataSource,
        series: series == null ? baseSeries : series,
        legend: legend == null ? baseLegend : legend,
        title: baseTitle,
        export: {
            enabled: false,
        },
        tooltip: tooltip == null ? baseTooltip : tooltip,
        loadingIndicator: {
            enabled: true,
        },
        onIncidentOccurred(e) {
            console.log(e);
        },
        onDone(e) {
            const element = e.element;
            element.attr("data-chart-instance", () => {
                return "dxPieChart";
            });
            element.attr("data-chart-question", () => {
                return question;
            });
            // $("#chartModalTogglerBtn").removeClass("visually-hidden");
        },
        onDrawn(e) {
            // $("#chartModalTogglerBtn").addClass("visually-hidden");
        },
        onPointClick(e) {
            const item = e.target;

            if (item.isVisible()) {
                item.hide();
            } else {
                item.show();
            }
        },
        onLegendClick(e) {
            const arg = e.target;

            const item = this.getAllSeries()[0].getPointsByArg(arg)[0];

            if (item.isVisible()) {
                item.hide();
            } else {
                item.show();
            }
        },
        onSave() {
            return config;
        },
    };

    return config;
}

export function dataGridConfig({ title, dataSource }) {
    return {
        dataSource: dataSource,
        instanceType: "dxDataGrid",
        chartCode: "dev_data_grid",
        keyExpr: "id",
        /* editing: {
            mode: "popup",
            // allowUpdating: true,
            allowDeleting: true,
            // allowAdding: true
        }, */
        columnFixing: { enabled: true },
        columns: [
            {
                dataField: "id",
                dataType: "int",
                visible: false,
            },
            {
                dataField: "fullPath",
                dataType: "string",
            },
            {
                dataField: "respondent",
                dataType: "int",
                visible: true,
            },
        ],
        filterRow: { visible: true },
        searchPanel: { visible: true },
    };
}

export function renderChart(config, target) {
    const instance = $("#" + target).attr(
        "data-chart-question",
        config.question
    );

    // instance.empty();

    // get widget instance type in config
    const instanceType = config.instanceType;

    let chart;

    // determine which instance to use
    if (instanceType == TYPE_GLOBAL) {
        chart = $("#" + target)
            .dxChart(config)
            .dxChart("instance");
    } else if (instanceType == TYPE_PIE) {
        chart = $("#" + target)
            .dxPieChart(config)
            .dxPieChart("instance");
    } else if (instanceType == TYPE_DATA_GRID) {
        chart = $("#" + target)
            .dxDataGrid(config)
            .dxDataGrid("instance");
    } else {
        // undefined
    }

    const exportableConfig = chart.option();
    exportableConfig.chartCode = config.chartCode;

    return exportableConfig;
}
