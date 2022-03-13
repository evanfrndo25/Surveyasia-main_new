//1
$(function () {
    var series = [
        {
            argumentField: "arg",
            valueField: "y1",
        },
    ];

    $("#zoomedChart").dxChart({
        palette: "Harmony Light",
        dataSource: zoomingData,
        commonSeriesSettings: {
            point: {
                size: 7,
            },
        },
        scale: {
            startValue: 0,
            endValue: 10,
        },
        title: {
            text: "1. What’s your age?",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },
        valueAxis: {
            title: {
                text: "Sum of Customer",
            },
        },
        argumentAxis: {
            title: "Age",
        },
        export: {
            enabled: true,
        },
        series: series,
        legend: {
            visible: false,
        },
        tooltip: {
            visible: true,
        },
    });

    $("#rangeSelector").dxRangeSelector({
        size: {
            height: 120,
        },
        margin: {
            left: 10,
        },
        scale: {
            minorTickCount: 1,
        },
        dataSource: zoomingData,
        chart: {
            series: series,
            palette: "Harmony Light",
        },
        behavior: {
            callValueChanged: "onMoving",
        },
        onValueChanged: function (e) {
            var zoomedChart = $("#zoomedChart").dxChart("instance");
            zoomedChart.getArgumentAxis().visualRange(e.value);
        },
    });
});
var zoomingData = [
    { arg: 18, y1: 1 },
    { arg: 19, y1: 3 },
    { arg: 20, y1: 4 },
    { arg: 22, y1: 2 },
    { arg: 23, y1: 1 },
    { arg: 25, y1: 2 },
    { arg: 26, y1: 1 },
    { arg: 27, y1: 1 },
    { arg: 29, y1: 2 },
    { arg: 30, y1: 1 },
    { arg: 32, y1: 1 },
    { arg: 35, y1: 1 },
];
//2
$(function () {
    $("#pie").dxPieChart({
        palette: "bright",
        dataSource: dataSource2,
        title: {
            text: "2. What's your gender",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },
        legend: {
            orientation: "horizontal",
            itemTextPosition: "right",
            horizontalAlignment: "center",
            verticalAlignment: "top",
            columnCount: 4,
        },
        export: {
            enabled: true,
        },
        series: [
            {
                argumentField: "gender",
                valueField: "value",
                label: {
                    visible: true,
                    font: {
                        size: 16,
                    },
                    connector: {
                        visible: true,
                        width: 0.5,
                    },
                    position: "columns",
                    customizeText: function (arg) {
                        return arg.valueText + " (" + arg.percentText + ")";
                    },
                },
            },
        ],
    });
});
var dataSource2 = [
    {
        gender: "Male",
        value: 14,
    },
    {
        gender: "Female",
        value: 6,
    },
];
//3
$(function () {
    $("#chart3").dxChart({
        dataSource: dataSource3,
        commonSeriesSettings: {
            argumentField: "product",
            type: "bar",
            label: {
                visible: true,
                customizeText: function (arg) {
                    if (arg.valueText > 0) {
                        return arg.percentText;
                    }
                },
            },
        },
        series: [
            { valueField: "very_often", name: "Very Often" },
            { valueField: "often", name: "Often" },
            { valueField: "quite_often", name: "Quite Often" },
            { valueField: "not_to_often", name: "Not Too Often" },
            { valueField: "not_at_all", name: "Not At All" },
        ],
        legend: {
            verticalAlignment: "bottom",
            horizontalAlignment: "center",
        },
        title: {
            text: "3. How often do you use the product you bought?",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },
        export: {
            enabled: true,
        },
        valueAxis: {
            title: {
                text: "Sum of Customer",
                font: {
                    size: 12,
                },
            },
        },
        argumentAxis: {
            title: {
                text: "How Often",
                font: {
                    size: 12,
                },
            },
        },
        tooltip: {
            enabled: true,
            customizeTooltip: function (arg) {
                return {
                    text: arg.valueText,
                };
            },
        },
    });
});
var dataSource3 = [
    {
        product: "Bolu",
        very_often: 0,
        often: 0,
        quite_often: 3,
        not_to_often: 2,
        not_at_all: 1,
    },
    {
        product: "Donat",
        very_often: 0,
        often: 0,
        quite_often: 1,
        not_to_often: 3,
        not_at_all: 0,
    },
    {
        product: "Kue",
        very_often: 2,
        often: 1,
        quite_often: 1,
        not_to_often: 0,
        not_at_all: 1,
    },
    {
        product: "Roti",
        very_often: 1,
        often: 2,
        quite_often: 1,
        not_to_often: 0,
        not_at_all: 0,
    },
    {
        product: "Snack",
        very_often: 0,
        often: 1,
        quite_often: 0,
        not_to_often: 0,
        not_at_all: 0,
    },
]; //4
$(function () {
    $("#chart").dxChart({
        dataSource: dataSource4,
        commonSeriesSettings: {
            argumentField: "product",
            type: "fullStackedBar",
        },
        customizeLabel: function () {
            if (this.value > 0) {
                return {
                    visible: true,
                    font: {
                        weight: "bold",
                    },
                    customizeText: function () {
                        return this.percentText;
                    },
                };
            }
        },
        series: [
            { valueField: "very_satisfied", name: "Very Satisfied" },
            { valueField: "satisfied", name: "Satisfied" },
            { valueField: "quite_satisfied", name: "Quite Satisfied" },
            {
                valueField: "somewhat_disatisfied",
                name: "Somewhat Disatisfied",
            },
            { valueField: "very_disatisfied", name: "Very Disatisfied" },
        ],
        legend: {
            verticalAlignment: "top",
            horizontalAlignment: "center",
            itemTextPosition: "right",
        },
        title: {
            text: "4. How satisfied are you with our product or service",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },
        argumentAxis: {
            title: "Product",
        },
        export: {
            enabled: true,
        },
        tooltip: {
            enabled: true,
            customizeTooltip: function (arg) {
                return {
                    text: arg.percentText + " - " + arg.valueText,
                };
            },
        },
    });
});
var dataSource4 = [
    {
        product: "Bolu",
        very_satisfied: 1,
        satisfied: 3,
        quite_satisfied: 1,
        somewhat_disatisfied: 1,
        very_disatisfied: 0,
    },
    {
        product: "Donat",
        very_satisfied: 0,
        satisfied: 2,
        quite_satisfied: 1,
        somewhat_disatisfied: 0,
        very_disatisfied: 1,
    },
    {
        product: "Kue",
        very_satisfied: 0,
        satisfied: 1,
        quite_satisfied: 3,
        somewhat_disatisfied: 1,
        very_disatisfied: 0,
    },
    {
        product: "Roti",
        very_satisfied: 1,
        satisfied: 2,
        quite_satisfied: 0,
        somewhat_disatisfied: 1,
        very_disatisfied: 0,
    },
    {
        product: "Snack",
        very_satisfied: 1,
        satisfied: 0,
        quite_satisfied: 0,
        somewhat_disatisfied: 0,
        very_disatisfied: 0,
    },
];
//5
$(function () {
    $("#chart5").dxChart({
        dataSource: dataSource5,
        commonSeriesSettings: {
            type: "bubble",
        },
        title: {
            text: "5. What do you really like about our product or service?",
            font: {
                size: 19,
                weight: "bold",
                family: "arial",
                color: "grey",
            },
        },
        tooltip: {
            enabled: true,
            location: "edge",
            customizeTooltip: function (arg) {
                return {
                    text:
                        arg.point.tag +
                        "<br/>Sum of Customer: " +
                        arg.argumentText +
                        "<br>Percentage: " +
                        arg.size +
                        "%",
                };
            },
        },
        argumentAxis: {
            title: "Sum of Customer",
        },
        legend: {
            position: "outside",
            border: {
                visible: true,
            },
        },
        palette: ["#00ced1", "#008000", "#ffd700", "#ff7f50"],
        onSeriesClick: function (e) {
            var series = e.target;
            if (series.isVisible()) {
                series.hide();
            } else {
                series.show();
            }
        },
        export: {
            enabled: true,
        },
        series: [
            {
                name: "Bolu",
                argumentField: "total1",
                valueField: "older1",
                sizeField: "perc1",
                tagField: "tag1",
            },
            {
                name: "Donat",
                argumentField: "total2",
                valueField: "older2",
                sizeField: "perc2",
                tagField: "tag2",
            },
            {
                name: "Kue",
                argumentField: "total3",
                valueField: "older3",
                sizeField: "perc3",
                tagField: "tag3",
            },
            {
                name: "Roti",
                argumentField: "total4",
                valueField: "older4",
                sizeField: "perc4",
                tagField: "tag4",
            },
            {
                name: "Snack",
                argumentField: "total5",
                valueField: "older5",
                sizeField: "perc5",
                tagField: "tag5",
            },
        ],
    });
});
var dataSource5 = [
    {
        total1: 6,
        total2: 4,
        total3: 5,
        total4: 4,
        total5: 1,
        older1: 1,
        older2: 2,
        older3: 3,
        older4: 4,
        older5: 5,
        perc1: 30,
        perc2: 20,
        perc3: 25,
        perc4: 20,
        perc5: 5,
        tag1: "Bolu",
        tag2: "Donat",
        tag3: "Kue",
        tag4: "Roti",
        tag5: "Snack",
    },
];
//6
$(function () {
    $("#pie6").dxPieChart({
        palette: "ocean",
        dataSource: dataSource6,
        type: "doughnut",
        title: {
            text: "6. Why you like this product or service?",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
            subtitle: {
                text: "Lapisan 1: Bolu, Lapisan 2: Donat, Lapisan 3: Kue, Lapisan 4: Roti, Lapisan 5: Snack",
                position: "end",
                font: {
                    size: 13,
                    style: "italic",
                    color: "grey",
                    family: "arial",
                },
            },
        },
        legend: {
            visible: true,
        },
        innerRadius: 0.2,
        commonSeriesSettings: {
            label: {
                visible: true,
                position: "inside",
                backgroundColor: "transparent",
                customizeText: function (point) {
                    if (point.valueText > 0) {
                        visible: true;
                        return (point.percent * 100).toFixed(0) + "%";
                    }
                },
            },
        },
        tooltip: {
            enabled: true,
            customizeTooltip: function (arg) {
                return {
                    text:
                        arg.argumentText +
                        "<br>" +
                        arg.seriesName +
                        ": " +
                        (arg.percent * 100).toFixed(0) +
                        "%",
                };
            },
        },
        export: {
            enabled: true,
        },
        series: [
            {
                name: "Bolu",
                argumentField: "opinion",
                valueField: "Bolu",
            },
            {
                name: "Donat",
                argumentField: "opinion",
                valueField: "Donat",
            },
            {
                name: "Kue",
                argumentField: "opinion",
                valueField: "Kue",
            },
            {
                name: "Roti",
                argumentField: "opinion",
                valueField: "Roti",
            },
            {
                name: "Snack",
                argumentField: "opinion",
                valueField: "Snack",
            },
        ],
    });
});
var dataSource6 = [
    {
        opinion: "Rasa",
        Bolu: 2,
        Donat: 1,
        Kue: 0,
        Roti: 1,
        Snack: 0,
    },
    {
        opinion: "Tampilan",
        Bolu: 1,
        Donat: 1,
        Kue: 1,
        Roti: 0,
        Snack: 0,
    },
    {
        opinion: "Tekstur",
        Bolu: 0,
        Donat: 0,
        Kue: 1,
        Roti: 1,
        Snack: 0,
    },
    {
        opinion: "Tekstur Lembut",
        Bolu: 0,
        Donat: 0,
        Kue: 0,
        Roti: 0,
        Snack: 1,
    },
    {
        opinion: "Warna",
        Bolu: 1,
        Donat: 0,
        Kue: 0,
        Roti: 0,
        Snack: 0,
    },
    {
        opinion: "Enak",
        Bolu: 0,
        Donat: 1,
        Kue: 0,
        Roti: 1,
        Snack: 0,
    },
    {
        opinion: "Gurih",
        Bolu: 0,
        Donat: 0,
        Kue: 1,
        Roti: 0,
        Snack: 0,
    },
    {
        opinion: "Kemasan Bagus",
        Bolu: 0,
        Donat: 0,
        Kue: 0,
        Roti: 1,
        Snack: 0,
    },
    {
        opinion: "Kematangan Pas",
        Bolu: 0,
        Donat: 0,
        Kue: 1,
        Roti: 0,
        Snack: 0,
    },
    {
        opinion: "Lembut",
        Bolu: 0,
        Donat: 0,
        Kue: 1,
        Roti: 0,
        Snack: 0,
    },
    {
        opinion: "Manis",
        Bolu: 2,
        Donat: 0,
        Kue: 0,
        Roti: 0,
        Snack: 0,
    },
    {
        opinion: "Menarik",
        Bolu: 0,
        Donat: 1,
        Kue: 0,
        Roti: 0,
        Snack: 0,
    },
];
//7
$(function () {
    $("#gauge").dxCircularGauge({
        scale: {
            startValue: -100,
            endValue: 100,
            tickInterval: 20,
        },
        value: -15,
        title: {
            text: "7. How likely is it that you would recommend our product or service to a friend, family?",
            subtitle: {
                text: "Net Promoter Score",
                font: {
                    size: 14,
                    style: "italic",
                    color: "grey",
                    family: "arial",
                },
            },
            horizontalAlignment: "center",
            verticalAlignment: "top",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
            margin: {
                top: 25,
            },
        },
        export: {
            enabled: true,
        },
        label: {
            customizeText: function (arg) {
                return arg.valueText + " %";
            },
        },
    });
});
$(function () {
    $("#grid").dxDataGrid({
        dataSource: customers,
        keyExpr: "ID",
        columns: ["Detractor", "Passive", "Promoters", "Net Promotor Score"],
        showBorders: true,
    });
});
var customers = [
    {
        ID: 1,
        Detractor: 45,
        Passive: 25,
        Promoters: 30,
        "Net Promotor Score": -15, //NPS = PROMOTERS - DETRACTOR
    },
];

//8
$(function () {
    $("#chart8").dxChart({
        rotated: true,
        dataSource: dataSource8,
        commonSeriesSettings: {
            argumentField: "product",
            type: "fullStackedBar",
        },
        customizeLabel: function () {
            if (this.value > 0) {
                return {
                    visible: true,
                    font: {
                        weight: "bold",
                    },
                    customizeText: function () {
                        return this.percentText;
                    },
                };
            }
        },
        series: [
            { valueField: "very_high_quality", name: "Very High Quality" },
            { valueField: "high_quality", name: "High Quality" },
            {
                valueField: "neither_high_nor_low_quality",
                name: "Neither High Nor Low Quality",
            },
            { valueField: "low_quality", name: "Low Quality" },
            { valueField: "very_low_quality", name: "Very Low Quality" },
        ],
        legend: {
            verticalAlignment: "top",
            horizontalAlignment: "center",
            itemTextPosition: "right",
        },
        title: {
            text: "8. How would you rate the quality of our product or service?",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },

        export: {
            enabled: true,
        },
        tooltip: {
            enabled: true,
            customizeTooltip: function (arg) {
                return {
                    text: arg.percentText + " - " + arg.valueText,
                };
            },
        },
    });
});
var dataSource8 = [
    {
        product: "Bolu",
        very_high_quality: 0,
        high_quality: 2,
        neither_high_nor_low_quality: 3,
        low_quality: 1,
        very_low_quality: 0,
    },
    {
        product: "Donat",
        very_high_quality: 1,
        high_quality: 2,
        neither_high_nor_low_quality: 1,
        low_quality: 0,
        very_low_quality: 0,
    },
    {
        product: "Kue",
        very_high_quality: 1,
        high_quality: 3,
        neither_high_nor_low_quality: 1,
        low_quality: 0,
        very_low_quality: 0,
    },
    {
        product: "Roti",
        very_high_quality: 1,
        high_quality: 2,
        neither_high_nor_low_quality: 2,
        low_quality: 0,
        very_low_quality: 0,
    },
    {
        product: "Snack",
        very_high_quality: 1,
        high_quality: 0,
        neither_high_nor_low_quality: 0,
        low_quality: 0,
        very_low_quality: 0,
    },
];
//9
anychart.onDocumentReady(function () {
    var data = [
        { x: "Dekat Rumah", value: 2 },
        { x: "Enak", value: 4 },
        { x: "Enak Banget", value: 1 },
        { x: "Murah", value: 6 },
        { x: "Produk Menarik", value: 1 },
        { x: "Terdekat", value: 1 },
        { x: "Terjangkau", value: 3 },
        { x: "Terkenal", value: 1 },
        { x: "Toko Nyaman", value: 1 },
    ];

    // create a tag (word) cloud chart
    var chart = anychart.tagCloud(data);

    // set a chart title
    chart.title(
        "9. Why did you choose our product or service over than competitor’s product?"
    );
    // set an array of angles at which the words will be laid out
    chart.angles([0, -45, 90]);
    // enable a color range
    // chart.colorRange(true);
    // set the color range length
    // chart.colorRange().length('80%');

    // display the word cloud chart
    chart.container("container9");
    chart.draw();
});
//10

$(function () {
    $("#pyramid").dxFunnel({
        dataSource: dataSource10,
        valueField: "count",
        argumentField: "level",
        title: {
            text: "10. How likely are you to purchase any of our product or service again?",
            margin: {
                bottom: 30,
            },
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },
        tooltip: {
            enabled: true,
        },
        export: {
            enabled: true,
        },
        inverted: true,
        algorithm: "dynamicHeight",
        item: {
            border: {
                visible: true,
            },
        },
        legend: {
            visible: true,
        },
        label: {
            visible: true,
            backgroundColor: "none",
            horizontalAlignment: "left",
            customizeText: function (point) {
                return (point.percent * 100).toFixed(0) + "%";
            },
            font: {
                size: 14,
            },
            palette: "Harmony light",
            sortData: false,
        },
    });
});
var dataSource10 = [
    {
        count: 8,
        level: "Extremely likely",
    },
    {
        count: 6,
        level: "Very likely",
    },
    {
        count: 3,
        level: "Somewhat likely",
    },
    {
        count: 1,
        level: "Not so likely",
    },
    {
        count: 2,
        level: "Not at all likely",
    },
];

//11
$(function () {
    $("#chart11").dxChart({
        dataSource: dataSource11,
        commonSeriesSettings: {
            argumentField: "improve",
            type: "spline",
            point: {
                hoverMode: "allArgumentPoints",
            },
            label: {
                visible: true,
                customizeText: function () {
                    return ((this.valueText * 100) / 20).toFixed(0) + "%";
                },
            },
        },
        argumentAxis: {
            valueMarginsEnabled: false,
            discreteAxisDivisionMode: "crossLabels",
            grid: {
                visible: true,
            },
        },
        crosshair: {
            enabled: true,
            color: "#949494",
            width: 3,
            dashStyle: "dot",
            label: {
                visible: true,
                backgroundColor: "#949494",
                font: {
                    color: "#fff",
                    size: 12,
                },
            },
        },
        series: [{ valueField: "value", name: "Value" }],
        legend: {
            verticalAlignment: "bottom",
            horizontalAlignment: "center",
            itemTextPosition: "bottom",
            equalColumnWidth: true,
        },
        title: {
            text: "11. How can we improve our product or service?",
            font: {
                size: 19,
                weight: "bold",
                color: "grey",
                family: "arial",
            },
        },
        export: {
            enabled: true,
        },
        tooltip: {
            enabled: true,
        },
    });
});
var dataSource11 = [
    {
        improve: "Adakan Promo",
        value: 1,
    },
    {
        improve: "Cukup",
        value: 4,
    },
    {
        improve: "Diskon",
        value: 2,
    },
    {
        improve: "Kebersihan",
        value: 1,
    },
    {
        improve: "Keju di Perbanyak",
        value: 1,
    },
    {
        improve: "Mungkin Kecepatan Pelayanan",
        value: 1,
    },
    {
        improve: "Rasanya Sudah Enak",
        value: 2,
    },
    {
        improve: "Sudah Baik",
        value: 5,
    },
    {
        improve: "Tidak Perlu",
        value: 2,
    },
    {
        improve: "Varian Rasa Ditambah",
        value: 1,
    },
];
// GAP ANALYSIS
const datagap = {
    datasets: [
        {
            label: ["Enak"],
            data: [{ y: 1.2, x: 1.4, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Gurih"],
            data: [{ y: 0.4, x: 0.6, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Kemasan Bagus"],
            data: [{ y: 0.8, x: 0.8, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Kematangan"],
            data: [{ y: 0.6, x: 1, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Lembut"],
            data: [{ y: 0.6, x: 0.8, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Manis"],
            data: [{ y: 1.8, x: 1.2, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Menarik"],
            data: [{ y: 0.6, x: 0.8, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Rasa"],
            data: [{ y: 2.8, x: 3, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Tampilan"],
            data: [{ y: 2, x: 2.4, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Tekstur"],
            data: [{ y: 1.4, x: 1.8, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Tekstur Lembut"],
            data: [{ y: 1, x: 1, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
        {
            label: ["Warna"],
            data: [{ y: 0.6, x: 0.4, r: 6 }],
            borderColor: "brown",
            backgroundColor: "brown",
        },
    ],
};
const quadrants = {
    id: "quadrants",
    beforeDraw(chart, args, options) {
        const {
            ctx,
            chartArea: { left, top, right, bottom },
            scales: { x, y },
        } = chart;
        const midX = x.getPixelForValue(1.267);
        const midY = y.getPixelForValue(1.15);
        ctx.save();
        ctx.fillStyle = options.topLeft;
        ctx.fillRect(left, top, midX - left, midY - top);
        ctx.fillStyle = options.topRight;
        ctx.fillRect(midX, top, right - midX, midY - top);
        ctx.fillStyle = options.bottomRight;
        ctx.fillRect(midX, midY, right - midX, bottom - midY);
        ctx.fillStyle = options.bottomLeft;
        ctx.fillRect(left, midY, midX - left, bottom - midY);
        ctx.restore();
    },
};
const configgap = {
    type: "scatter",
    data: datagap,
    options: {
        plugins: {
            legend: {
                display: false,
            },
            quadrants: {
                topLeft: "khaki",
                topRight: "honeydew",
                bottomRight: "lightblue",
                bottomLeft: "ivory",
            },
            title: {
                display: true,
                text: "IMPROVEMENT ANALYSIS",
                color: "black",
                font: {
                    size: 30,
                    weight: "bold",
                },
            },
            subtitle: {
                display: false,
                text: "Product",
                color: "black",
                font: {
                    size: 16,
                    family: "tahoma",
                    weight: "normal",
                    style: "italic",
                },
                padding: {
                    bottom: 10,
                },
            },
            datalabels: {
                anchor: function (context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r ? "end" : "center";
                },
                align: function (context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r ? "end" : "center";
                },
                font: {
                    weight: "bold",
                },
                color: "black",
                formatter: function (value, context) {
                    return context.dataset.label[context.dataIndex];
                },
                offset: 2,
                padding: 0,
            },
        },
        scales: {
            y: {
                title: {
                    display: true,
                    text: "Importance",
                    color: "black",
                    font: {
                        size: 14,
                        weight: "bold",
                    },
                },
            },
            x: {
                title: {
                    display: true,
                    text: "Performance",
                    color: "black",
                    font: {
                        size: 14,
                        weight: "bold",
                    },
                },
            },
        },
    },
    plugins: [quadrants, ChartDataLabels],
};
var myChart = new Chart(document.getElementById("myChartgap"), configgap);
