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

$(function () {
    for (let i = 0; i < data.length; i++) {
        const config = JSON.parse(data[i].default_configuration);
        config.type = data[i].type;
        config.data = generateRandomData(7, data[i].type);
        config.options = {
            plugins: {
                title: {
                    display: false,
                    text: "Chart Title",
                },
            },
        };
        const ctx = $("#chart" + i);

        const chart = new Chart(ctx, config);
    }
});

function drawChart() {}

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
