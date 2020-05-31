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
    <title>搜索之星|百度无限 等你称霸</title>
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
        <div class="news_title">搜索之星|百度无限 等你称霸</div>
        <div class="news_source">GDMU信工学生会</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>什么是“搜索之星”？</p>
        <p>“搜索之星”挑战赛是广东医科大学生物医学工程学院的一个品牌活动。此前已经成功连续举办了三届,我校选手同台竞技,充分展现了搜索能力的高低,也生动地展示了我校的发展动态和大学生们的精神风貌,更好地提升学院品牌影响力。</p>
        <p>目的:在疫情防控时期，学校延迟开学，为了向全校普及新型冠状病毒的知识和危害, 通过“搜索之星”挑战赛激发大学生学习检索知识的热情,使更多大学生掌握信息搜索技巧和更有方向的理解和预防新型冠状病毒,从而提高他们信息搜索与获取能力和防范新肺炎意识,与信息时代相结合，更有效地让我们广大学生了解新冠肺炎。</p>
        <p>活动主题：疫情科普无限，信息搜索不止</p>
        <p>比赛形式与内容</p>
        <p>校内初赛:采用网上答题形式，参赛者根据题目上网搜索，查阅文献，在网上答题区写出答案。分数排在前30名同学可进入复赛。</p>
        <p>校内复赛:以线上答题的形式参加复赛，题目总分为42分，每位选手限时 30 分钟。分数排在前24名的选手进入校决赛。</p>
        <p>校内决赛:决赛借助腾讯课堂、腾讯会议等支持线上连麦和可投屏的app完成。</p>
        <p>活动时间与对象
初    赛：2020年4月12日
复    赛：2020年4月19日
决    赛：暂定
活动对象：广东医科大学全体学生</p>
        <div class="news_img">
         <img src="../../image/sszx.jpg" alt="">
        </div>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/bFAUVYT0seKHGmnuvqcGaA">原文链接</a>
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
