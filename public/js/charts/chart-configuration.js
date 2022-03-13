export var config = {
    type: "pie",
    data: null,
    options: {
        plugins: {
            title: {
                display: false,
                text: "Chart Title",
            },
        },
    },
};

export function renderNewChart(questionData, elementContext, configuration) {
    var labels = [];
    var datas = [];
    var colors = [];
    var borders = [];

    for (let i = 0; i < questionData.data.length; i++) {
        labels.push(questionData.data[i].x);
        datas.push(questionData.data[i].y);
        colors.push(getRandomRgb());
        borders.push(getRandomRgb());
    }
}
