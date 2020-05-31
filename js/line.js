var dom = document.getElementById("line");
var myCharta1 = echarts.init(dom);
var app = {};
option1 = null;
option1 = {
    title: {
        text: ''
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data: ['新增确诊数', '境外输入数']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    toolbox: {
        feature: {
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: [ '4.5', '4.6', '4.7', '4.8', '4.9', '4.10', '4.11', '4.12', '4.13', '4.14', '4.15', '4.16', '4.17','4.18','4.19','4.20','4.21']
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
            name: '境外输入数',
            type: 'line',
            stack: '总量',
            data: [38, 32, 59, 61, 38, 42, 97, 98, 86, 36, 34, 15, 17, 9, 8, 4, 4]
        },
        {
            name: '新增确诊数',
            type: 'line',

            data: [75, 66, 86, 92, 56, 64, 113, 115, 99, 49, 52, 25, 27, 31, 21, 36, 13]
        }
    ]
};
;
if (option1 && typeof option1 === "object") {
    myCharta1.setOption(option1, true);
}
