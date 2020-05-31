var dataMap = [{ name: '北京' ,value:69 }, { name: '天津' ,value:12 }, { name: '上海' ,value:101 },
        { name: '重庆' ,value:3 }, { name: '河北' ,value:5 }, { name: '河南' ,value:0 }, { name: '云南' ,value:4 },
        { name: '辽宁' ,value:1 }, { name: '黑龙江' ,value:425 }, { name: '湖南' ,value:0 }, { name: '安徽' ,value:1 },
        { name: '山东' ,value:15 }, { name: '新疆' ,value:0 }, { name: '江苏' ,value:9 }, { name: '浙江' ,value:16 },
        { name: '江西' ,value:0 }, { name: '湖北' ,value:102}, { name: '广西' ,value:0 }, { name: '甘肃' ,value:0 },
        { name: '山西' ,value:57 }, { name: '内蒙古' ,value:85 }, { name: '陕西' ,value:21 }, { name: '吉林' ,value:98 },
        { name: '福建' ,value:13 }, { name: '贵州' ,value:0 }, { name: '广东' ,value:73 }, { name: '青海' ,value:0 },
        { name: '西藏' ,value:0 }, { name: '四川' ,value:4 }, { name: '宁夏' ,value:0 }, { name: '海南' ,value:0 },
        { name: '台湾' ,value:213 }, { name: '香港' ,value:391 }, { name: '澳门' ,value:23 }]

    var option = {
        tooltip: {
            formatter: function (params) {
                var info = '<p style="font-size:10px">' + params.name
                + '</p><p style="font-size:10px">现存确诊：' + params.value + ' </p>'
                return info;
            },
            fontSize:"12px",
            backgroundColor: "rgba(55,55,55,0.8)",//提示标签背景颜色
            textStyle: { color: "#fff" }, //提示标签字体颜色
            /* triggerOn: 'click', */
            enterable:true
        },

        series: [
            {
                name: '中国',
                type: 'map',
                mapType: 'china',

                label: {
                    normal: {
                        show: true,//显示省份标签
                        textStyle:{ fontSize:8 }
                    },
                    emphasis: {
                        enterable:true,
                        // textStyle:{color:"#800080"}
                    }
                },
                itemStyle: {
                    normal: {
                        borderWidth: .15,//区域边框宽度
                        // borderColor: '#009fe8',//区域边框颜色
                        // areaColor:"#ffefd5",//区域颜色
                        color:function(params){
                            if(params.value >=0 && params.value <10){
                                return "#deebfe";
                            }else if(params.value >=10 && params.value<=100 ){
                                return "#80b2fe";
                            }else if(params.value >=100 && params.value<=500 ){
                                return "#438bf7";
                            }else if(params.value >=500 && params.value<=1000 ){
                                return "#1b65d4";
                            }
                            return "#043173";
                        }
                    },
                    emphasis: {
                        borderWidth: .5,
                        borderColor: "#FFFFFF",
                        areaColor: "#6666CC",
                    }
                },



                data: dataMap
            }
        ]

    };
    var myChart = echarts.init(document.getElementById('map'));
    myChart.setOption(option);
