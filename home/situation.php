<?php
require_once("conn.php");
$sql = "SELECT * FROM dailystiuation ORDER BY date DESC";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sqlHotword = "SELECT * FROM hotword";
$result3 = mysqli_query($conn,$sqlHotword);
$word = mysqli_fetch_array($result3); 
$sql2 = "SELECT * FROM dailystiuation  ORDER BY date DESC";
$result2 = mysqli_query($conn,$sql);
$row1 = mysqli_fetch_array($result2);
$row2 = mysqli_fetch_array($result2);
$aa=array(0=>'#EA2027',1=>'#006266',2=>'#1B1464',3=>'#5758BB',4=>'#6F1E51');
$sql3 = "SELECT * FROM domesticoutbreak  ORDER BY date DESC";
$result4 = mysqli_query($conn,$sql3);
$dob = mysqli_fetch_array($result4);
$sql5 = "SELECT * FROM daily  ORDER BY existingConfirmed DESC";
$result5 = mysqli_query($conn,$sql5);
$sql_line = "SELECT * FROM linedata ORDER BY date ASC";
$result_line1 = mysqli_query($conn,$sql_line);
$result_line2 = mysqli_query($conn,$sql_line);
$result_line3 = mysqli_query($conn,$sql_line);
mysqli_close($conn);
session_start();
$id;
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
	$dsn = "mysql:host=127.0.0.1;port=3306;dbname=zybst;charset=utf8";
	$username = "root";
	$pwd = "12345";
	//创建PDO类的对象
	$pdo = new PDO($dsn,$username,$pwd);
	$sql_select = "SELECT identity FROM user WHERE id = ?";
	//sql语句执行
	$PDOStatement = $pdo->prepare($sql_select);
	$PDOStatement->bindValue(1,$id);
	$PDOStatement->execute();
	$record=$PDOStatement->fetch(PDO::FETCH_ASSOC);
	$identity = $record['identity'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>最新疫情</title>
	    <link rel="stylesheet" href="../css/page.css">
        <link rel="stylesheet" href="../css/iconfont.css">
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/echarts.min.js"></script>
		<script src="../js/china.js"></script>
        <script src="../js/miaov.js"></script>
	</head>

	<body>
	<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../index.php"><img src="../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="situation.php" id="this">最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="story.php">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="gdmu.php">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="us.php">关于我们</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="more.php">更多</a>
        </div>
        <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='../admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='login.php' target='_blank' class ='register'>注册</a>";
						echo"<a href='login.php' target='_blank' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
    </div>
</div>
<!-- 顶部标签结束 -->
<!-- 宣传页标签开始 -->
    <div class="view">
        <img src="../image/xcy.png" alt="">
    </div>
<!-- 宣传页标签结束 -->
<!-- 内容标签开始 -->
<div class="content_top">
<div class="content_top1"><i class="icon-liulan iconfont"></i>&nbsp;疫情数据可视化</div>
<div class="content_top2">
    <div class="line1">
    <div class="line_name">国内疫情趋势<i class="icon-shuju3 iconfont"></i></div>
    <div id="line"></div>
    </div>
    <div id="situation">
    <div class="situation_top">国内疫情数据<i class="icon-yiqingtianbao iconfont"></i></div>
    <div class="situation_date">截至 <?php echo $row['date']; ?> 12:50 全国数据统计</div>
    <div class="situation_bottom">
        <div class="bottom1">
            <div class="bottom_box">
                <div class="zz"><?php if($row1['existingConfirmed'] - $row2['existingConfirmed']>=0)
{
	echo '+'.number_format($row1['existingConfirmed'] - $row2['existingConfirmed']);
}else
{
	echo number_format($row1['existingConfirmed'] - $row2['existingConfirmed']);
} ?></div>
                <div class="sj1"><?php echo $row['existingConfirmed']; ?></div>
                <div class="mc">现存确诊</div>
            </div>
            <div class="bottom_box">
                <div class="zz"><?php if($row1['existingSuspected'] - $row2['existingSuspected']>=0)
{
	echo '+'.number_format($row1['existingSuspected'] - $row2['existingSuspected']);
}else
{
	echo number_format($row1['existingSuspected'] - $row2['existingSuspected']);
} ?></div>
                <div class="sj2"><?php echo $row['existingSuspected']; ?></div>
                <div class="mc">现存疑似</div>
            </div>
            <div class="bottom_box">
                <div class="zz"><?php if($row1['outsideInput'] - $row2['outsideInput']>=0)
{
	echo '+'.number_format($row1['outsideInput'] - $row2['outsideInput']);
}else
{
	echo number_format($row1['outsideInput'] - $row2['outsideInput']);
} ?></div>
                <div class="sj3"><?php echo $row['outsideInput']; ?></div>
                <div class="mc">境外输入</div>
            </div>
        </div>
        <div class="bottom1">
            <div class="bottom_box">
                <div class="zz"><?php if($row1['cumulativeConfirmed'] - $row2['cumulativeConfirmed']>=0)
{
	echo '+'.number_format($row1['cumulativeConfirmed'] - $row2['cumulativeConfirmed']);
}else
{
	echo number_format($row1['cumulativeConfirmed'] - $row2['cumulativeConfirmed']);
} ?></div>
                <div class="sj4"><?php echo $row['cumulativeConfirmed']; ?></div>
                <div class="mc">累记确诊</div>
            </div>
            <div class="bottom_box">
                <div class="zz"><?php if($row1['cumulativeDeath'] - $row2['cumulativeDeath']>=0)
{
	echo '+'.number_format($row1['cumulativeDeath'] - $row2['cumulativeDeath']);
}else
{
	echo number_format($row1['cumulativeDeath'] - $row2['cumulativeDeath']);
} ?></div>
                <div class="sj5"><?php echo $row['cumulativeDeath']; ?></div>
                <div class="mc">累计死亡</div>
            </div>
            <div class="bottom_box">
                <div class="zz"><?php if($row1['cumulativeRecovery'] - $row2['cumulativeRecovery']>=0)
{
	echo '+'.number_format($row1['cumulativeRecovery'] - $row2['cumulativeRecovery']);
}else
{
	echo number_format($row1['cumulativeRecovery'] - $row2['cumulativeRecovery']);
} ?></div>
                <div class="sj6"><?php echo $row['cumulativeRecovery']; ?></div>
                <div class="mc">累计治愈</div>
            </div>
        </div>
    </div>
    </div>
    <div class="word1">
    <div class="word_name">战疫热词<i class="icon-diqiu iconfont"></i></div>
    <div id="word">
    	<?php
	while($word = mysqli_fetch_array($result3)){
	?>
        <b style="color: <?php echo $aa[rand(0,4)]; ?>;"><?php echo $word['hotWord'];?></b>
        <?php } ?>
    </div>
</div>
</div>
</div>
<!-- 地图标签开始  -->
		<div class="map_father">
        <div class="map_name"><i class="icon-ditu1 iconfont"></i>&nbsp;国内疫情地图</div>
			<div id="map"></div>
		</div>
<!-- 地图标签结束 -->
 <!-- 内容标签开始 -->
            <!-- 速览标签开始 -->
    <div class="table_box">
        <div class="table_name"><i class="icon-liebiao1 iconfont"></i>&nbsp;国内各地区疫情</div>
        <div id="table" style="padding:0 0 7% 0;">
            <table>
                <tr>
                    <th id = "areatable">疫情地区</th>
                    <th id = "morecomtable">现存</th>
                    <th id = "allcomtable">累计</th>
                    <th id = "curetable">治愈</th>
                    <th id = "deadtable">死亡</th>
                </tr>
                <?php
                	while($daily = mysqli_fetch_array($result5)){
                ?>
                <tr>
                    <td class="province"><i class="icon-daohang1 iconfont"></i>&nbsp;<?php echo $daily['region'];?></td>
                    <td class="td"><?php echo $daily['existingConfirmed'];?></td>
                    <td class="td"><?php echo $daily['cumulativeConfirmed'];?></td>
                    <td class="td"><?php echo $daily['cumulativeRecovery'];?></td>
                    <td class="td_end"><?php echo $daily['cumulativeDeath'];?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        </div>
            <!-- 速览标签结束 -->
    <!-- 内容标签结束 -->
        <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="../image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
		<script type="text/javascript">
			var dataMap = [{ name: '北京' ,value:<?php echo $dob['beijing'] ?> }, { name: '天津' ,value:<?php echo $dob['tianjin'] ?> }, { name: '上海' ,value:<?php echo $dob['shanghai'] ?> },
        { name: '重庆' ,value:<?php echo $dob['chongqing'] ?> }, { name: '河北' ,value:<?php echo $dob['hebei'] ?> }, { name: '河南' ,value:<?php echo $dob['henan'] ?> }, { name: '云南' ,value:<?php echo $dob['yunnan'] ?> },
        { name: '辽宁' ,value:<?php echo $dob['liaoning'] ?> }, { name: '黑龙江' ,value:<?php echo $dob['heilongjiang'] ?> }, { name: '湖南' ,value:0 }, { name: '安徽' ,value:<?php echo $dob['anhui'] ?> },
        { name: '山东' ,value:<?php echo $dob['shandon'] ?> }, { name: '新疆' ,value:<?php echo $dob['xinjiang'] ?> }, { name: '江苏' ,value:<?php echo $dob['jiangsu'] ?> }, { name: '浙江' ,value:<?php echo $dob['zhejiang'] ?> },
        { name: '江西' ,value:<?php echo $dob['jiangxi'] ?> }, { name: '湖北' ,value:<?php echo $dob['hubei'] ?>}, { name: '广西' ,value:<?php echo $dob['guangxi'] ?> }, { name: '甘肃' ,value:<?php echo $dob['gansu'] ?> },
        { name: '山西' ,value:<?php echo $dob['shanxi'] ?> }, { name: '内蒙古' ,value:<?php echo $dob['neimenggu'] ?> }, { name: '陕西' ,value:<?php echo $dob['shaanxi'] ?> }, { name: '吉林' ,value:<?php echo $dob['jilin'] ?> },
        { name: '福建' ,value:<?php echo $dob['fujian'] ?> }, { name: '贵州' ,value:<?php echo $dob['guizhou'] ?> }, { name: '广东' ,value:<?php echo $dob['guangdon'] ?> }, { name: '青海' ,value:<?php echo $dob['qinghai'] ?> }, 
        { name: '西藏' ,value:<?php echo $dob['xizang'] ?> }, { name: '四川' ,value:<?php echo $dob['sichuan'] ?> }, { name: '宁夏' ,value:<?php echo $dob['ningxia'] ?> }, { name: '海南' ,value:<?php echo $dob['hainan'] ?> }, 
        { name: '台湾' ,value:<?php echo $dob['taiwan'] ?> }, { name: '香港' ,value:<?php echo $dob['HK'] ?> }, { name: '澳门' ,value:<?php echo $dob['macao'] ?> }]

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
            data: <?php 
            	echo "[";
            	while($array_line1 = mysqli_fetch_array($result_line1,MYSQLI_ASSOC))
            	{
            		
            		echo "'".$array_line1['date']."'".",";
            	}
            	echo "]";
            	?>
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                name: '境外输入数',
                type: 'line',
                stack: '总量',
                data: <?php 
            	echo "[";
            	while($array_line2 = mysqli_fetch_array($result_line2,MYSQLI_ASSOC))
            	{
            		echo "'".$array_line2['newlyIncreased']."'".",";
            	}
            	echo "]";
            	?>
            },
            {
                name: '新增确诊数',
                type: 'line',
    
                data: <?php 
            	echo "[";
            	while($array_line3 = mysqli_fetch_array($result_line3,MYSQLI_ASSOC))
            	{
            		echo "'".$array_line3['outsideInput']."'".",";
            	}
            	echo "]";
            	?>
            }
        ]
    };
    ;
    if (option1 && typeof option1 === "object") {
        myCharta1.setOption(option1, true);
    }
		</script>

	</body>
</html>
