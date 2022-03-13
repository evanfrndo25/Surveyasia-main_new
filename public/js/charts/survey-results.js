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

function renderCharts(responseData) {
    console.log(responseData);

    for (let i = 0; i < responseData.data.length; i++) {
        const questionData = responseData.data[i];
        const ctx = document.getElementById("chart" + questionData.id);
        var cfg = exampleChart(questionData, _randomChart(i));
        const chart = new Chart(ctx, cfg);
    }
}

function _randomChart(index) {
    const chartType = ["bar", "doughnut", "pie", "pie", "bar", "bar"];

    return chartType[index];
}

function exampleChart(questionData, type) {
    var labels = [];
    var datas = [];
    var colors = [];
    var borders = [];
    // console.log(Array.from(questionData.data));

    for (let i = 0; i < questionData.data.length; i++) {
        labels.push(questionData.data[i].x);
        datas.push(questionData.data[i].y);
        colors.push(getRandomRgb());
        borders.push(getRandomRgb());
    }

    if (labels.length != 0) {
        const cfg = {
            type: type,
            data: {
                labels: labels,
                datasets: [
                    {
                        label: questionData.question,
                        data: datas, //data
                        backgroundColor: colors,
                        borderColor: borders,
                    },
                ],
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: "Custom Title",
                    },
                },
            },
        };
        return cfg;
    }

    console.log(cfg);

    return null;
}

function getRandomRgb(transparentize) {
    var num = Math.round(0xffffff * Math.random());
    var r = num >> 16;
    var g = (num >> 8) & 255;
    var b = num & 255;

    if (transparentize != null) {
        t = transparentize;
        return "rgb(" + r + ", " + g + ", " + b + "," + t + ")";
    }

    return "rgb(" + r + ", " + g + ", " + b + ")";
}
