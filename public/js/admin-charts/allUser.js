$(document).ready(function () {
    $("#waktu").on("change", function () {
        if ($("#waktu").val() == "tahun") {
            document.getElementById("bataswaktubulan").disabled = true;
            document.getElementById("bataswaktutahun").disabled = false;
        } else if ($("#waktu").val() == "bulan") {
            document.getElementById("bataswaktutahun").disabled = true;
            document.getElementById("bataswaktubulan").disabled = false;
        }
    });
});

$(() => {
    const chart = $("#chart-all-user")
        .dxChart({
            palette: ["skyblue", "#ed2f2f", "#e6e600", "#339966"],
            dataSource: dataSource1,
            commonSeriesSettings: {
                type: "splinearea",
                argumentField: "Bulan",
                splinearea: {
                    point: { visible: true },
                },
            },
            series: [
                { valueField: "OTpayment", name: "Once Time Payment" },
                { valueField: "personal", name: "Personal" },
                { valueField: "business", name: "Business" },
            ],
            margin: {
                bottom: 20,
            },
            title: "Revenue User SurveyAsia.id",
            argumentAxis: {
                valueMarginsEnabled: false,
            },
            tooltip: {
                enabled: true,
                customizeTooltip(arg) {
                    return {
                        text: getText(arg, arg.valueText),
                    };
                },
            },
            export: {
                enabled: true,
            },
            legend: {
                verticalAlignment: "bottom",
                horizontalAlignment: "center",
            },
        })
        .dxChart("instance");
    function getText(item, text) {
        return `Rp. ${text}`;
    }
});

const dataSource1 = [
    {
        Bulan: "Januari",
        OTpayment: 833333334,
        business: 740250000,
        personal: 926416666,
    },
    {
        Bulan: "Februari",
        OTpayment: 3050000000,
        business: 1016666667,
        personal: 2033333333,
    },
    {
        Bulan: "Maret",
        OTpayment: 4060000000,
        business: 1624000000,
        personal: 2436000000,
    },
    {
        Bulan: "April",
        OTpayment: 6743250000,
        business: 1248750000,
        personal: 1998000000,
    },
    {
        Bulan: "Mei",
        OTpayment: 2397000000,
        business: 3995000000,
        personal: 1598000000,
    },
    {
        Bulan: "Juni",
        OTpayment: 5400000000,
        business: 2130000000,
        personal: 990000000,
    },
    {
        Bulan: "Juli",
        OTpayment: 3980000000,
        business: 2300000000,
        personal: 3140000000,
    },
    {
        Bulan: "Agustus",
        OTpayment: 5060000000,
        business: 3200500000,
        personal: 1859500000,
    },
    {
        Bulan: "September",
        OTpayment: 4205000000,
        business: 1850000000,
        personal: 3195000000,
    },
    {
        Bulan: "Oktober",
        OTpayment: 4550000000,
        business: 2730000000,
        personal: 3640000000,
    },
    {
        Bulan: "November",
        OTpayment: 4624000000,
        business: 2206000000,
        personal: 4200000000,
    },
    {
        Bulan: "Desember",
        OTpayment: 3219000000,
        business: 2526000000,
        personal: 5745000000,
    },
];

// KATEGORI
function piedefault(b, c, d) {
    $(() => {
        $("#pie").dxPieChart({
            size: {
                width: 500,
            },
            palette: ["skyblue", "#ed2f2f", "#e6e600", "#339966"],
            dataSource,
            series: [
                {
                    argumentField: "kategori",
                    valueField: "percent",
                    label: {
                        visible: true,
                        position: "inside",
                        backgroundColor: "none",
                        customizeText(arg) {
                            return `<span style='font-size: 28px'>${arg.percentText}</span><br/>${arg.argumentText}`;
                        },
                    },
                },
            ],
            title: "Kategori User",
            export: {
                enabled: false,
            },
            tooltip: {
                enabled: true,
                customizeTooltip() {
                    return {
                        text: `${this.argumentText}<br> Rp. ${this.valueText}`,
                    };
                },
            },
            legend: {
                visible: false,
            },
            onLegendClick(e) {
                const arg = e.target;

                toggleVisibility(this.getAllSeries()[0].getPointsByArg(arg)[0]);
            },
        });

        function toggleVisibility(item) {
            if (item.isVisible()) {
                item.hide();
            } else {
                item.show();
            }
        }
    });

    // data mengikuti bulan sekarang, di data dummy menggunakan data desember
    const dataSource = [
        {
            kategori: "Once Time Payment",
            percent: b,
        },
        {
            kategori: "Personal",
            percent: c,
        },
        {
            kategori: "Business",
            percent: d,
        },
    ];
}

function subpie(e, f, g, h, i, j) {
    // SUB KATEGORI
    $(() => {
        const legendSettings = {
            verticalAlignment: "bottom",
            horizontalAlignment: "center",
            itemTextPosition: "right",
            rowCount: 2,
        };
        const seriesOptions = [
            {
                argumentField: "name",
                valueField: "area",
                label: {
                    visible: true,
                    connector: {
                        visible: true,
                        width: 0.5,
                        padding: 1,
                    },
                    customizeText(point) {
                        return `${point.argumentText}: ${point.percentText}`;
                    },
                },
            },
        ];
        const sizeGroupName = "piesGroup";

        $("#Personal").dxPieChart({
            sizeGroup: sizeGroupName,
            palette: ["#ff1a1a", "#990000", "#cc0000"],
            title: {
                text: "Personal",
                font: {
                    size: 12,
                },
            },
            legend: {
                visible: false,
            },
            dataSource: Personal,
            series: seriesOptions,
            tooltip: {
                enabled: true,
                customizeTooltip() {
                    return {
                        text: `${this.argumentText}<br> Rp. ${this.valueText}`,
                    };
                },
            },
        });

        $("#Business").dxPieChart({
            sizeGroup: sizeGroupName,
            palette: ["#e6e600", "#cccc00", "#ffff1a"],
            title: {
                text: "Business",
                font: {
                    size: 12,
                },
            },
            legend: {
                visible: false,
            },
            dataSource: Business,
            series: seriesOptions,
            tooltip: {
                enabled: true,
                customizeTooltip() {
                    return {
                        text: `${this.argumentText}<br> Rp. ${this.valueText}`,
                    };
                },
            },
        });
    });

    const Personal = [
        {
            name: "Basic",
            area: e,
        },
        {
            name: "Essential Annual",
            area: f,
        },
        {
            name: "Plus Annual",
            area: g,
        },
    ];

    const Business = [
        {
            name: "Advantage",
            area: h,
        },
        {
            name: "Enterprise",
            area: i,
        },
        {
            name: "Coorporate",
            area: j,
        },
    ];
}

document.getElementById("pie").innerHTML = piedefault(
    833333334,
    740250000,
    926416666
);
document.getElementById("Personal", "Business").innerHTML = subpie(
    416666667,
    166666666,
    250000001,
    308805555,
    463208333,
    154402778
);

$('select[name="bataswaktubulan"]').change(function () {
    if ($(this).val() == "Februari") {
        document.getElementById("pie").onchange = piedefault(
            3050000000,
            1016666667,
            2033333333
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            210012000,
            179009000,
            150900000,
            467000000,
            1016666666,
            677777777
        );
    } else if ($(this).val() == "Maret") {
        document.getElementById("pie").onchange = piedefault(
            4060000000,
            1624000000,
            2436000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            124500000,
            212340000,
            100900000,
            1099000000,
            546700000,
            435000000
        );
    } else if ($(this).val() == "April") {
        document.getElementById("pie").onchange = piedefault(
            6743250000,
            1248750000,
            1998000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            3244000000,
            1543000000,
            1432500000,
            543000000,
            234540000,
            343200000
        );
    } else if ($(this).val() == "Mei") {
        document.getElementById("pie").onchange = piedefault(
            2397000000,
            3995000000,
            1598000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            1232100000,
            907600000,
            543450000,
            123210000,
            234100000,
            567400000
        );
    } else if ($(this).val() == "Juni") {
        document.getElementById("pie").onchange = piedefault(
            5400000000,
            2130000000,
            990000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            1256400000,
            890700000,
            453300000,
            46900000,
            46900000,
            46900000
        );
    } else if ($(this).val() == "Juli") {
        document.getElementById("pie").onchange = piedefault(
            3980000000,
            2300000000,
            3140000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            597000000,
            598000000,
            597000000,
            71900000,
            71800000,
            71800000
        );
    } else if ($(this).val() == "Agustus") {
        //sampai sini
        document.getElementById("pie").onchange = piedefault(
            5060000000,
            3200500000,
            1859500000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            84900000,
            35000000,
            74900000,
            40400000,
            100300000,
            100300000
        );
    } else if ($(this).val() == "September") {
        document.getElementById("pie").onchange = piedefault(
            4205000000,
            1850000000,
            3195000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            80300000,
            80300000,
            80400000,
            97100000,
            97000000,
            97000000
        );
    } else if ($(this).val() == "Oktober") {
        document.getElementById("pie").onchange = piedefault(
            4550000000,
            2730000000,
            3640000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            122700000,
            122700000,
            122700000,
            116300000,
            116400000,
            116300000
        );
    } else if ($(this).val() == "November") {
        document.getElementById("pie").onchange = piedefault(
            4624000000,
            2206000000,
            4200000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            130300000,
            130300000,
            130400000,
            131800000,
            131800000,
            131800000
        );
    } else if ($(this).val() == "Desember") {
        document.getElementById("pie").onchange = piedefault(
            3219000000,
            2526000000,
            5745000000
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            16060000,
            160500000,
            160500000,
            133700000,
            133700000,
            133800000
        );
    } else if ($(this).val() == "Januari") {
        document.getElementById("pie").onchange = piedefault(
            833333334,
            740250000,
            926416666
        );
        document.getElementById("Personal", "Business").onchange = subpie(
            416666667,
            166666666,
            250000001,
            308805555,
            463208333,
            154402778
        );
    }
});

// DATA TAHUN
$('select[name="waktu"]').change(function () {
    if ($(this).val() == "tahun") {
        $(() => {
            document.getElementById("bataswaktubulan").disabled = true;
            document.getElementById("bataswaktutahun").disabled = false;
            const chart = $("#chart-all-user")
                .dxChart({
                    palette: ["skyblue", "#ed2f2f", "#e6e600", "#339966"],
                    dataSource,
                    commonSeriesSettings: {
                        // type: types[0],
                        argumentField: "Tahun",
                    },
                    series: [
                        { valueField: "OTpayment", name: "Once Time Payment" },
                        { valueField: "personal", name: "Personal" },
                        { valueField: "business", name: "Business" },
                    ],
                    margin: {
                        bottom: 20,
                    },
                    title: "Pengguna SurveyAsia.id",
                    argumentAxis: {
                        valueMarginsEnabled: false,
                    },
                    tooltip: {
                        enabled: true,
                        customizeTooltip(arg) {
                            return {
                                text: getText(arg, arg.valueText),
                            };
                        },
                    },
                    export: {
                        enabled: true,
                    },
                    legend: {
                        verticalAlignment: "bottom",
                        horizontalAlignment: "center",
                    },
                })
                .dxChart("instance");
            function getText(item, text) {
                return `${text} pengguna`;
            }
        });
        const dataSource = [
            {
                Tahun: "2021",
                OTpayment: 35150000000,
                business: 35150000000,
                personal: 35150000000,
            },
            {
                Tahun: "2022",
                OTpayment: 40570000000,
                business: 23900000000,
                personal: 34250000000,
            },
            {
                Tahun: "2023",
                OTpayment: 56080000000,
                business: 45320000000,
                personal: 12344000000,
            },
        ];

        // PIE CHART TAHUN
        function pieT(b, c, d) {
            $(() => {
                $("#pie").dxPieChart({
                    size: {
                        width: 500,
                    },
                    palette: ["skyblue", "#ed2f2f", "#e6e600"],
                    dataSource: dataSourceT,
                    series: [
                        {
                            argumentField: "kategori",
                            valueField: "percent",
                            label: {
                                visible: true,
                                position: "inside",
                                backgroundColor: "none",
                                customizeText(arg) {
                                    return `<span style='font-size: 28px'>${arg.percentText}</span><br/>${arg.argumentText}`;
                                },
                            },
                        },
                    ],
                    title: "Kategori User",
                    export: {
                        enabled: false,
                    },
                    tooltip: {
                        enabled: true,
                        customizeTooltip() {
                            return {
                                text: `${this.argumentText}<br>${this.valueText}`,
                            };
                        },
                    },
                    legend: {
                        visible: false,
                    },
                    onLegendClick(e) {
                        const arg = e.target;

                        toggleVisibility(
                            this.getAllSeries()[0].getPointsByArg(arg)[0]
                        );
                    },
                });

                function toggleVisibility(item) {
                    if (item.isVisible()) {
                        item.hide();
                    } else {
                        item.show();
                    }
                }
            });

            const dataSourceT = [
                {
                    kategori: "Once Time Payment",
                    percent: b,
                },
                {
                    kategori: "Personal",
                    percent: c,
                },
                {
                    kategori: "Business",
                    percent: d,
                },
            ];
        }

        // SUB KATEGORI
        function subpieT(e, f, g, h, i, j) {
            $(() => {
                const legendSettings = {
                    verticalAlignment: "bottom",
                    horizontalAlignment: "center",
                    itemTextPosition: "right",
                    rowCount: 2,
                };
                const seriesOptions = [
                    {
                        argumentField: "name",
                        valueField: "area",
                        label: {
                            visible: true,
                            connector: {
                                visible: true,
                                width: 0.5,
                                padding: 1,
                            },
                            customizeText(point) {
                                return `${point.argumentText}: ${point.percentText}`;
                            },
                        },
                    },
                ];
                const sizeGroupName = "piesGroup";

                $("#Personal").dxPieChart({
                    sizeGroup: sizeGroupName,
                    palette: ["#ff1a1a", "#990000", "#cc0000"],
                    title: {
                        text: "Personal",
                        font: {
                            size: 12,
                        },
                    },
                    legend: {
                        visible: false,
                    },
                    dataSource: PersonalT,
                    series: seriesOptions,
                    tooltip: {
                        enabled: true,
                        customizeTooltip() {
                            return {
                                text: `${this.argumentText}<br> Rp. ${this.valueText}`,
                            };
                        },
                    },
                });

                $("#Business").dxPieChart({
                    sizeGroup: sizeGroupName,
                    palette: ["#e6e600", "#cccc00", "#ffff1a"],
                    title: {
                        text: "Business",
                        font: {
                            size: 12,
                        },
                    },
                    legend: {
                        visible: false,
                    },
                    dataSource: BusinessT,
                    series: seriesOptions,
                    tooltip: {
                        enabled: true,
                        customizeTooltip() {
                            return {
                                text: `${this.argumentText}<br> Rp. ${this.valueText}`,
                            };
                        },
                    },
                });
            });

            const PersonalT = [
                {
                    name: "Basic",
                    area: e,
                },
                {
                    name: "Essential Annual",
                    area: f,
                },
                {
                    name: "Plus Annual",
                    area: g,
                },
            ];

            const BusinessT = [
                {
                    name: "Advantage",
                    area: h,
                },
                {
                    name: "Enterprise",
                    area: i,
                },
                {
                    name: "Coorporate",
                    area: j,
                },
            ];
        }

        document.getElementById("pie").onchange = pieT(
            35150000000,
            35150000000,
            35150000000
        );
        document.getElementById("PersonalT", "BusinessT").onchange = subpieT(
            11716666666,
            11716666666,
            11716666666,
            11716666666,
            11716666666,
            11716666666
        );

        $('select[name="bataswaktutahun"]').change(function () {
            if ($(this).val() == "t2022") {
                document.getElementById("pie").onchange = pieT(
                    40570000000,
                    23900000000,
                    34250000000
                );
                document.getElementById("PersonalT", "BusinessT").onchange =
                    subpieT(
                        20360000000,
                        13570000000,
                        27160000000,
                        18786000000,
                        93930000000,
                        28181000000
                    );
            } else if ($(this).val() == "t2023") {
                document.getElementById("pie").onchange = pieT(
                    56080000000,
                    45320000000,
                    12344000000
                );
                document.getElementById("PersonalT", "BusinessT").onchange =
                    subpieT(
                        27110000000,
                        1084400000,
                        43377000000,
                        1608100000,
                        26803000000,
                        53606000000
                    );
            } else if ($(this).val() == "t2021") {
                document.getElementById("pie").onchange = pieT(
                    35150000000,
                    35150000000,
                    35150000000
                );
                document.getElementById("PersonalT", "BusinessT").onchange =
                    subpieT(
                        11716666666,
                        11716666666,
                        11716666666,
                        11716666666,
                        11716666666,
                        11716666666
                    );
            }
        });
    } else if ($(this).val() == "bulan") {
        $(() => {
            const chart = $("#chart-all-user")
                .dxChart({
                    palette: ["skyblue", "#ed2f2f", "#e6e600"],
                    dataSource: dataSource1,
                    commonSeriesSettings: {
                        type: "splinearea",
                        argumentField: "Bulan",
                        splinearea: {
                            point: { visible: true },
                        },
                    },
                    series: [
                        { valueField: "OTpayment", name: "Once Time Payment" },
                        { valueField: "personal", name: "Personal" },
                        { valueField: "business", name: "Business" },
                    ],
                    margin: {
                        bottom: 20,
                    },
                    title: "Revenue User SurveyAsia.id",
                    argumentAxis: {
                        valueMarginsEnabled: false,
                    },
                    tooltip: {
                        enabled: true,
                        customizeTooltip(arg) {
                            return {
                                text: getText(arg, arg.valueText),
                            };
                        },
                    },
                    export: {
                        enabled: true,
                    },
                    legend: {
                        verticalAlignment: "bottom",
                        horizontalAlignment: "center",
                    },
                })
                .dxChart("instance");
            function getText(item, text) {
                return `Rp. ${text}`;
            }
        });

        const dataSource1 = [
            {
                Bulan: "Januari",
                OTpayment: 833333334,
                business: 740250000,
                personal: 926416666,
            },
            {
                Bulan: "Februari",
                OTpayment: 3050000000,
                business: 1016666667,
                personal: 2033333333,
            },
            {
                Bulan: "Maret",
                OTpayment: 4060000000,
                business: 1624000000,
                personal: 2436000000,
            },
            {
                Bulan: "April",
                OTpayment: 6743250000,
                business: 1248750000,
                personal: 1998000000,
            },
            {
                Bulan: "Mei",
                OTpayment: 2397000000,
                business: 3995000000,
                personal: 1598000000,
            },
            {
                Bulan: "Juni",
                OTpayment: 5400000000,
                business: 2130000000,
                personal: 990000000,
            },
            {
                Bulan: "Juli",
                OTpayment: 3980000000,
                business: 2300000000,
                personal: 3140000000,
            },
            {
                Bulan: "Agustus",
                OTpayment: 5060000000,
                business: 3200500000,
                personal: 1859500000,
            },
            {
                Bulan: "September",
                OTpayment: 4205000000,
                business: 1850000000,
                personal: 3195000000,
            },
            {
                Bulan: "Oktober",
                OTpayment: 4550000000,
                business: 2730000000,
                personal: 3640000000,
            },
            {
                Bulan: "November",
                OTpayment: 4624000000,
                business: 2206000000,
                personal: 4200000000,
            },
            {
                Bulan: "Desember",
                OTpayment: 3219000000,
                business: 2526000000,
                personal: 5745000000,
            },
        ];
    }
});
