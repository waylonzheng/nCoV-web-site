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
    <title>叮！你收到一个关于新冠肺炎的科普大赛的讯息哦！</title>
   <link rel="stylesheet" href="../../css/page.css">
    <link rel="stylesheet" href="../../css/iconfont.css">
</head>
<style>
</style>
<body>
<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../../index.php"><img src="../../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="../situation.php" >最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../story.php">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../gdmu.php" id="this">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../us.php">关于我们</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../more.php">更多</a>
        </div>
        <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='../logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='../../admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='../logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='../login.php' target='_blank' class ='register'>注册</a>";
						echo"<a href='../login.php' target='_blank' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
    </div>
</div>
<!-- 顶部标签结束 -->
<!-- 内容标签开始 -->
<div class="news">
    <div class="news_left">
        <div class="news_title">叮！你收到一个关于新冠肺炎的科普大赛的讯息哦！</div>
        <div class="news_source">广东医公卫团委学生会</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>为了能给大家更好地,普及健康知识,抗击新冠疫情,第六届健康科普知识大赛,它来啦！！</p>
        <div class="news_img">
         <img src="../../image/kp.png" alt="">
        </div>
        <p>活动对象:广东医科大学全体在校师生</p>
        <p>活动时间</p>
        <p>初   赛：2020年4月11日</p>
        <p>预决赛：2020年4月25日</p>
        <p>决   赛：2020年5月16日</p>
        <p>活动总览</p>
        <p>初赛:新冠肺炎知识科普剧本/视频制作方案</p>
        <p>预决赛:新冠肺炎知识科普广播剧/视频小样或选段</p>
        <p>决赛:新冠肺炎知识科普视频</p>
        <p>初赛活动形式及比赛内容</p>
        <p>新冠肺炎知识科普剧本/视频制作方案</p>
        <p>参赛队伍在作品收集时间内提交电子报名表以及参赛的新冠肺炎知识科普视频剧本或视频制作方案。参赛队伍作品应围绕“普及健康知识、抗击新冠疫情”这一主题，内容必须为原创，并基于新冠肺炎的相关知识宣传及疫情下健康生活方式倡导等与新冠肺炎疫情相关的科普内容，科学性、引导性、通俗性和趣味性较强（例如如何正确佩戴口罩、相关医疗器械的正确使用方法、疫情期间的心理健康问题等）。剧本将会由学院团委评分，共选取16支队伍进入预决赛。</p>
        <p>说明：（1）参赛队伍初赛需按照报名表中的作品类型提交对应类型的参赛作品。即情景类作品需提交相应的情景剧剧本；科普类作品需提交相应的科普视频制作方案。其中，科普类视频所提交的视频制作方案应包含视频制作背景、视频主题、视频主要内容叙述、内容展示方式（如动画、纪录片等）。</p>
        <p>（2）进入预决赛的队伍需要在规定时间上交预决赛作品，并加入预决赛微信群。</p>
        <p>（3）参赛队伍所提交的参赛作品需保证剧本及方案的原创性、科学性。其中所涉及到的科普知识应保证无争议、无虚假信息，参赛队伍要对参赛作品的科学性予以负责。</p>
        <p>（4）关于作品类型与作品提交相关内容请参赛队伍仔细浏览报名表下方的信息</p>
        <p> 组队要求及报名方式</p>
        <p>组队要求:可以跨学院跨年级跨专业组队
（队伍所属学院由队长所属学院决定）
每队参赛人数在1-6人
（超过3人需要男女搭配）
可根据剧情需要请同学友情演出，
但不算参赛名额</p>
        <p>报名方式
参赛者可扫描二维码获取报名表，在作品收集期间将报名表和初赛作品(剧本或视频制作方案）打包发送至
1141125264@qq.com
（报名截止日期为4月9日晚上9点）</p>
        <div class="news_img">
         <img src="../../image/kp1.jpg" alt="">
        </div>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/c8JtSq9McVf7xkv8NNzyfw">原文链接</a>
        </div>
</div>
    <div class="news_right">
    <div class="wb"><a href="https://weibo.com/" target="_blank"><i class="icon-weibo iconfont"></i></a></div>
    <div class="qq"><a href="https://qzone.qq.com/" target="_blank"><i class="icon-qq iconfont"></i></a></div>
    <div class="wx"><a href="https://wx.qq.com/" target="_blank"><i class="icon-weixin iconfont"></i></a></div>
    <p>分享到:&nbsp;&nbsp;&nbsp;</p>
    </div>
</div>

    <div class="window">
        <img src="../../image/fc.png" alt="../image/fc.png">
    </div>
<!-- 内容标签结束 -->
        <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="../../image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
</html>
