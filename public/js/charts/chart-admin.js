// API
/* async function fetchChart() {
    const response = await fetch(url, {
        headers: {
            Accept: "application/json",
        },
    });

    return await response.json();
}

function getChart() {
    fetchChart()
        .then((response) => {
            // draw charts
            console.log(response);
        })
        .catch((e) => console.log(e));
} */

import { randomInt, randomRgb } from "./chart-utils.js";
import { convertReadableData, dxChartConstructor } from "./type/dx-chart.js";

$(function () {
    for (let i = 0; i < data.length; i++) {
        let target = 'chart' + i;
        switch (data[i].library_from) {
            case "Chart JS":
                let config = JSON.parse(data[i].default_configuration);
                config.type = data[i].type.slice(4);
                config.data = generateRandomData(7, data[i].type.slice(4));
                config.options = {
                    plugins: {
                        title: {
                            display: false,
                            text: "Chart Title",
                        },
                    },
                };
                const ctx = $(`#${target}`);

                new Chart(ctx, config);
                break;
            case "AnyChart":
                this.getElementById('chart' + i).remove();
                switch (data[i].type.slice(4)) {
                    case "pie":
                        let pieChart = anychart.pie(randomDataForAnychart(7));
                        pieChart.container('chart-container' + i);
                        pieChart.draw();
                        break;
                    case "line":
                        let lineChart = anychart.line(randomDataForAnychart(7));
                        lineChart.container('chart-container' + i);
                        lineChart.draw();
                        break;
                    case "bar":
                        let barChart = anychart.bar(randomDataForAnychart(7));
                        barChart.barGroupsPadding(0);
                        barChart.container('chart-container' + i);
                        barChart.draw();
                        break;
                    case "doughnut":
                        let doughnutChart = anychart.pie(randomDataForAnychart(7));
                        doughnutChart.innerRadius("30%");
                        doughnutChart.container('chart-container' + i);
                        doughnutChart.draw();
                        break;
                    case "tag_cloud":
                        let tagCloudChart = anychart.tagCloud(randomDataForAnychart(7));
                        tagCloudChart.container('chart-container' + i);
                        tagCloudChart.draw();
                        break;
                    default:
                        break;
                }
                break;
            case "DevExpress":
                const targetChart = $('#chart-container' + i);
                switch (data[i].type.slice(4)) {
                    case "bar":
                        this.getElementById('chart' + i).remove();
                        targetChart.dxChart({
                            dataSource: generateDataforDevX(7),
                            title: null,
                            commonSeriesSettings: {
                              type: data[i].type.slice(4),
                              label: {
                                visible: true,
                              },
                              argumentField: 'label',
                            },
                            series: {
                              name: 'Value',
                              valueField: 'value',
                              color: randomRgb(),
                            },
                          });
                        break;
                    case "line":
                        targetChart.dxChart({
                            dataSource: generateDataforDevX(7),
                            title: null,
                            commonSeriesSettings: {
                              type: data[i].type.slice(4),
                              label: {
                                visible: true,
                              },
                              argumentField: 'label',
                            },
                            series: {
                              name: 'Value',
                              valueField: 'value',
                              color: randomRgb(),
                            },
                          });
                        break;
                    case "pie":
                        targetChart.dxPieChart({
                            size: {
                                width: 500,
                            },
                            palette: 'bright',
                            dataSource: generateDataforDevX(7),
                            series: [
                            {
                                argumentField: 'label',
                                valueField: 'value',
                                label: {
                                    visible: true,
                                    connector: {
                                        visible: true,
                                        width: 1,
                                    },
                                },
                            },
                            ],
                            title: null,
                          });
                        break;
                    case "doughnut":
                        targetChart.dxPieChart({
                            type: 'doughnut',
                            size: {
                                width: 500,
                            },
                            palette: 'bright',
                            dataSource: generateDataforDevX(7),
                            series: [
                            {
                                argumentField: 'label',
                                valueField: 'value',
                                label: {
                                    visible: true,
                                    connector: {
                                        visible: true,
                                        width: 1,
                                    },
                                },
                            },
                            ],
                            title: null,
                          });
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        }
    }
});

function generateRandomData(length, type) {
    var labels = [];
    var datas = [];
    var colors = [];
    var borders = [];

    for (let i = 0; i < length; i++) {
        labels.push("Data " + (i + 1));
        if (type == 'scatter' || type == 'bubble') {
            datas.push({
                x: randomInt(20, 3),
                y: randomInt(20, 3),
                r: randomInt(20, 3),
            });
        } else {
            datas.push(randomInt(50, 10));
        }
        colors.push(randomRgb());
        // if (index == 0) borders.push(randomRgb(0.5));
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

const randomDataForAnychart = (length) => {
    let series = [];
    let labels = [];
    let rgb = [];

    for( let i = 0; i < length; i++ ) {
        labels.push(`Data ${i+1}`);
        series.push(randomInt(50, 100));
    }
    let data = [];
    for (var i = 0; i < series.length; i++) {
        data.push({ 
            x: labels[i],
            value: series[i],
            normal: { fill: randomRgb() }
        });
    } 

    return data;
};

const generateDataforDevX = (length) => {
    const labels = [];
    const series = [];
    
    for( let i = 0; i < length; i++ ) {
        labels.push(`Data ${i+1}`);
        series.push(randomInt(50, 100));
    }

    let data = [];
    for (let i = 0; i < series.length; i++) {
        data.push({ 
            label: labels[i],
            value: series[i]
        });
    }

    return data;
  }