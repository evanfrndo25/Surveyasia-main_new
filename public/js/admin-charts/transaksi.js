const dataSource = [
    {
        month: "Januari",
        Cost: 1000000,
        Revenue: 2000000,
    },
    {
        month: "Februari",
        Cost: 3855000000,
        Revenue: 6100000000,
    },
    {
        month: "Maret",
        Cost: 3000000000,
        Revenue: 8120000000,
    },
    {
        month: "April",
        Cost: 2890000000,
        Revenue: 9990000000,
    },
    {
        month: "Mei",
        Cost: 2770000000,
        Revenue: 7990000000,
    },
    {
        month: "Juni",
        Cost: 3150000000,
        Revenue: 8520000000,
    },
    {
        month: "Juli",
        Cost: 3670000000,
        Revenue: 9420000000,
    },
    {
        month: "Agustus",
        Cost: 2980000000,
        Revenue: 10120000000,
    },
    {
        month: "September",
        Cost: 2150000000,
        Revenue: 9250000000,
    },
    {
        month: "Oktober",
        Cost: 3820000000,
        Revenue: 10920000000,
    },
    {
        month: "November",
        Cost: 3240000000,
        Revenue: 11030000000,
    },
    {
        month: "Desember",
        Cost: 2930000000,
        Revenue: 11490000000,
    },
];

$(() => {
    $("#chart").dxChart({
        dataSource,
        commonSeriesSettings: {
            argumentField: "month",
            type: "splinearea",
            splinearea: {
                point: { visible: true },
            },
        },
        series: [
            { valueField: "Revenue", name: "Revenue", color: "#8882ff" },
            { valueField: "Cost", name: "Cost", color: "#bcc41f" },
        ],
        title: {
            text: "Transaksi SurveyAsia.id",
        },
        tooltip: {
            enabled: true,
        },
        export: {
            enabled: true,
        },
        argumentAxis: {
            valueMarginsEnabled: false,
            label: {
                format: {
                    type: "decimal",
                },
            },
        },
        legend: {
            verticalAlignment: "bottom",
            horizontalAlignment: "center",
        },
    });
});

// SELECT BOX
$('select[name="waktu"]').change(function () {
    if ($(this).val() == "tahun") {
        const dataSource = [
            {
                year: "2021",
                Cost: 50000000000,
                Revenue: 25000000000,
            },
            {
                year: "2022",
                Cost: 38055000000,
                Revenue: 61000000000,
            },
            {
                year: "2023",
                Cost: 30000000000,
                Revenue: 81200000000,
            },
        ];
        $(() => {
            $("#chart").dxChart({
                dataSource,
                commonSeriesSettings: {
                    argumentField: "year",
                    type: "splinearea",
                    splinearea: {
                        point: { visible: true },
                    },
                },
                series: [
                    {
                        valueField: "Revenue",
                        name: "Revenue",
                        color: "#8882ff",
                    },
                    { valueField: "Cost", name: "Cost", color: "#bcc41f" },
                ],
                title: {
                    text: "Transaksi SurveyAsia.id",
                },
                tooltip: {
                    enabled: true,
                },
                export: {
                    enabled: true,
                },
                argumentAxis: {
                    valueMarginsEnabled: false,
                    label: {
                        format: {
                            type: "decimal",
                        },
                    },
                },
                legend: {
                    verticalAlignment: "bottom",
                    horizontalAlignment: "center",
                },
            });
        });
    } else if ($(this).val() == "bulan") {
        const dataSource = [
            {
                month: "Januari",
                Cost: 5000000000,
                Revenue: 2500000000,
            },
            {
                month: "Februari",
                Cost: 3855000000,
                Revenue: 6100000000,
            },
            {
                month: "Maret",
                Cost: 3000000000,
                Revenue: 8120000000,
            },
            {
                month: "April",
                Cost: 2890000000,
                Revenue: 9990000000,
            },
            {
                month: "Mei",
                Cost: 2770000000,
                Revenue: 7990000000,
            },
            {
                month: "Juni",
                Cost: 3150000000,
                Revenue: 8520000000,
            },
            {
                month: "Juli",
                Cost: 3670000000,
                Revenue: 9420000000,
            },
            {
                month: "Agustus",
                Cost: 2980000000,
                Revenue: 10120000000,
            },
            {
                month: "September",
                Cost: 2150000000,
                Revenue: 9250000000,
            },
            {
                month: "Oktober",
                Cost: 3820000000,
                Revenue: 10920000000,
            },
            {
                month: "November",
                Cost: 3240000000,
                Revenue: 11030000000,
            },
            {
                month: "Desember",
                Cost: 2930000000,
                Revenue: 11490000000,
            },
        ];
        $(() => {
            $("#chart").dxChart({
                dataSource,
                commonSeriesSettings: {
                    argumentField: "month",
                    type: "splinearea",
                    splinearea: {
                        point: { visible: true },
                    },
                },
                series: [
                    {
                        valueField: "Revenue",
                        name: "Revenue",
                        color: "#8882ff",
                    },
                    { valueField: "Cost", name: "Cost", color: "#bcc41f" },
                ],
                title: {
                    text: "Transaksi SurveyAsia.id",
                },
                tooltip: {
                    enabled: true,
                },
                export: {
                    enabled: true,
                },
                argumentAxis: {
                    valueMarginsEnabled: false,
                    label: {
                        format: {
                            type: "decimal",
                        },
                    },
                },
                legend: {
                    verticalAlignment: "bottom",
                    horizontalAlignment: "center",
                },
            });
        });
    }
});
