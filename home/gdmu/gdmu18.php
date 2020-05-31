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
    <title>广东医科大学推文制作大赛 | 下一个人气小编就是你！</title>
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
        <div class="news_title">广东医科大学推文制作大赛 | 下一个人气小编就是你！</div>
        <div class="news_source"> 广东医Pharmacy</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
         <img src="../../image/tw1.jpg" alt="">
         <img src="../../image/tw2.jpg" alt="">
         <img src="../../image/tw3.jpg" alt="">
         <img src="../../image/tw4.jpg" alt="">
         <img src="../../image/tw5.jpg" alt="">
         <img src="../../image/tw6.jpg" alt="">
         <img src="../../image/tw7.jpg" alt="">
         <img src="../../image/tw8.jpg" alt="">
         <img src="../../image/tw9.jpg" alt="">
        </div>
        <p>广东医科大学推文制作大赛来了！</p>
<p>NO.1 活动主题 同心齐抗疫，青年勇担当</p>
<p>NO.2 活动对象 广东医科大学全体在校学生</p>
<p>2、活动时间</p>
        <p>初赛投稿时间：
4月1日-4月13日17：00点</p>
<p>NO.3 活动时间 初赛：3.30-4.20 决赛：5.9</p>
<p>NO.4 活动地点 线上</p>
<p>NO.5 活动总览 初赛：
围绕“疫情”选取主题制作推文</p>
<p>决赛：
围绕主题制作推文，线上答辩比拼</p>
<p>初赛具体活动形式及注意事项</p>
<p以线上的形式来展开，参赛者（个人参赛或二人组队）自由发挥制作推文，主题围绕“疫情”，内容在【生活】【科学】【时事】【公益】四个方面中任选一项，要求积极向上。文字与图片内容需原创（或取得授权后标明引用来源）。</p>
<p>选手可以使用如秀米、h5、MAKA、135、360编辑器等软件制作推文，然后已制作好的推文与报名表在4月20日22：00前一起发送到邮箱Pharmacyxwb@163.com，作品整理完毕后评委进行评分，本着“公平、公正、公开”的原则，筛选后按总分高低选出前十份作品进入决赛。</p>
<p>决赛具体活动形式及注意事项
进入决赛的十支队伍将抽签决定决赛制作的推文主题，分为“防疫科普”和“抗疫精神”，并通过腾讯会议的形式进行线上答辩，答辩过程要求着装得体，网络条件良好。最后通过评分评选出各个奖项排名。</p>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/0fvxOV4MODOZpHazz9PYlA">原文链接</a>
        </div>
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
