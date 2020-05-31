<?php
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>抗疫事迹</title>
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/iconfont.css">
</head>
<style>
</style>
<body>
<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../index.php"><img src="../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="situation.php" >最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="story.php" id="this">抗疫事迹</a>
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
        <img src="../image/story.jpg" alt="">
    </div>
<!-- 宣传页标签结束 -->
<!-- 内容标签开始 -->
<!-- 首部标签开始 -->
<div id="prelude">
<a href="news/news0.php" target="_blank">
    <div class="prelude_left">
        <img src="../image/xjp.jpeg" alt="">
        <div class="img_show2"><div class="img_show21"><p>第一观察｜习近平指挥战“疫”进行时</p></div></div>
    <div class="prelude_left_text">

            <span>第一观察｜习近平指挥战“疫”进行时</span>
            <div>3月10日上午，习近平总书记飞抵武汉，考察新冠肺炎疫情防控工作。新冠肺炎疫情发生以来，习近平总书记始终亲自指挥、亲自部署这场人民战争、总体战、阻击战。我们通过“一张日程表”“一本指令集”“一番暖心话”来回顾截至目前习近平总书记指挥战“疫”的过程。</div>

        </a>
    </div>
    </div>
    <div class="prelude_right">
    <a href="news/zhongnanshan.php">
        <div class="prelude_right_top">
            <img src="../image/zns.png" alt="">
        </div>
        <div class="prelude_right_bottom">
            钟南山院士专栏
        </div>
    </div>
    </a>
</div>
<!-- 首部标签结束 -->
<!-- 列表标签开始 -->
    <div class="list">
        <div class="list_left">
        <a href="news/news1.php"  target="_blank"><div class="list_box">
                <img src="../image/zcmg.png" alt="">
                <div class="box_title">战场玫瑰｜在前线留下得眼泪不敢让家人看到</div>
                <div class="box_text">在陈言灏的记忆里，这已经不是妈妈第一次因为工作而离家这么长时间。他记得那是2月6日晚上11点半，他躺在床上，妈妈进来告诉他，自己要去武汉了。陈言灏的第一反应就是“不</div>
            </div></a>

            <a href="news/news2.php"  target="_blank"><div class="list_box">
                <img src="../image/hqbz.png" alt="">
                <div class="box_title">亲爱的，这次换我来当"后勤部长"</div>
                <div class="box_text">从上海一批批奔赴武汉的医护人员中，护士占据了半壁江山，他们和医生们一样，也承受着巨大的压力和风险。今天我们要来认识其中的一位，她是华东医医院重症监护室的护士长</div>
            </div></a>
            <a href="news/news3.php"  target="_blank"><div class="list_box">
                <img src="../image/aq.png" alt="">
                <div class="box_title">战"疫"时期得爱情:相见却无法相拥</div>
                <div class="box_text">2020年的情人节可能是最为特别的一个。相比“疫情时期的爱情”，我们更愿意称之为“战‘疫’时期的爱情”。每一个人都在为抗击疫情作出努力，正如专家所言，宅在家里也是“战士”。</div>
            </div></a>
            <a href="news/news4.php"  target="_blank"><div class="list_box">
                <img src="../image/kd.png" alt="">
                <div class="box_title">你宅在家战"疫"，他走街串巷守护我们</div>
                <div class="box_text">当人们开启居家模式防控疫情时，外卖小哥还在上海的大街小巷奔波。在这段特别的日子里，无论是一支药膏、一根温度剂，还是一斤蔬菜、一份半成品，当人们开启居家模式防控</div>
            </div></a>
            <a href="news/news5.php"  target="_blank"><div class="list_box">
                <img src="../image/ssdz.png" alt="">
                <div class="box_title">武汉声音日记｜缺氧是常态与“死神”对决</div>
                <div class="box_text">在华中科技大学同济医学院附属同济医院光谷院区，看看新闻Knews记者见到了复旦大学附属华山医院支援武汉医疗队的队员们。护士长倪洁，和她所带领的9位临床能力比较强，重</div>
            </div></a>
            <a href="news/news6.php"  target="_blank"><div class="list_box">
                <img src="../image/ty.png" alt="">
                <div class="box_title">武汉声音日记｜盼疫情过去拥抱最美的太阳</div>
                <div class="box_text">2月4日，上海的两支国家紧急医学救援队启程赴武汉开展救治工作，其中东方医院55人、华山医院46人。抵达武汉之后，救援队马上投入工作，常常忙碌至深夜。部分队员在睡前</div>
            </div></a>
            <div class="more"><a href="news/news.php">查看更多</a></div>
        </div>
        <div class="lest_right">
            <div class="right_top">近期热议</div>
            <div class="topic1">
                <div class="num1">1</div>“雷神山“两大病区关闭 这支上海医疗队即将返沪
            </div>
            <div class="topic2">
                <div class="num1">2</div>武汉日记㊼：种下友谊之树 签下战友的名字
            </div>
            <div class="topic1">
                <div class="num1">3</div>2万亿美元刺激计划过关 特朗普为何还是乐不起来
            </div>
            <div class="topic2">
                <div class="num">4</div>疫情蔓延全球 这场“虚拟“峰会谈的问题很实在！
            </div>
            <div class="topic1">
                <div class="num">5</div>特朗普急了！2万亿美元经济刺激计划能否过关？
            </div>
            <div class="topic2">
                <div class="num">6</div>单日确诊超万人 美国会成为新冠疫情新震中吗
            </div>
            <div class="topic1">
                <div class="num">7</div>定了!东京奥运会延至明年举行 日本将损失3万亿?
            </div>
            <div class="topic2">
                <div class="num">8</div>疫情会否波及“中国制造“？马元：有影响无冲击
            </div>
            <div class="topic1">
                <div class="num">9</div>抗疫不力甩锅中国 美国这口“锅“甩得出去吗？
            </div>
            <div class="topic2">
                <div class="num">10</div>45+1 这一例为何格外值得警惕？
            </div>
            <div class="topic1">
                <div class="num">11</div>国家卫健委：29日新增新冠肺炎病例31例
            </div>
            <div class="topic2">
                <div class="num">12</div>100多名滞留湖北台胞29日晚从上海返回台湾
            </div>
            <div class="topic1">
                <div class="num">13</div>国家卫健委：本土疫情传播已基本阻断
            </div>
            <div class="topic2">
                <div class="num">14</div>对暴力伤医“零容忍“ 北京首次立法保障医院安全
            </div>
            <div class="topic1">
                <div class="num">15</div>国家卫健委:25日新增确诊病例67例 均为境外输入
            </div>
            <div class="topic2">
                <div class="num">16</div>国家卫健委:24日新增确诊病例47例 均为境外输入
            </div>
            <div class="topic1">
                <div class="num">17</div>北京市对北京入境人员全部隔离观察全部核酸检测
            </div>
            <div class="topic2">
                <div class="num">18</div>北京新增境外输入病例31例 境外输入关联病例1例
            </div>
            <div class="topic1">
                <div class="num">19</div>国家卫健委：昨日新增新冠肺炎确诊病例78例
            </div>
            <div class="topic2" id="this_topic2"></div>
        </div>
    </div>
<!-- 列表标签结束 -->
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
</body>
</html>
