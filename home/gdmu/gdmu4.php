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
    <title>云端实习，以“技”抗疫——第二临床医学院开设《口腔临床实习辅导》网络课程</title>
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
        <div class="news_title">云端实习，以“技”抗疫——第二临床医学院开设《口腔临床实习辅导》网络课程</div>
        <div class="news_source">广东医科大学</div>
        <div class="news_date">2020-03-23</div>
        <div class="news_content">
        <p>根据教育部和广东省教育厅的文件精神，按照疫情期间学生“不返校，不停课，不停教，不停学”的要求，为疫情防控结束后学生能尽快进入口腔临床工作，第二临床医学院为2015级口腔专业实习生开设《口腔临床实习辅导》网络课程。目前，师生“云”端“教”、“学”正如火如荼地进行。</p>
        <p>为降低疫情对本科毕业年级学生实习的影响和保障毕业工作的顺利进行，口腔医学教研室结合同学们的反馈，开会讨论、提前规划，组织安排《口腔临床实习辅导》的线上教学。</p>
        <p>《口腔临床实习辅导》是一门以加强口腔医学生临床技能操作能力为主线，以口腔基本临床技能操作为主要教学内容的实践型课程。它将口腔临床医学主干专业课程的口腔内科学、口腔外科学、口腔修复学、口腔正畸学等口腔临床基本操作项目进行整合与优化，而开设的一门综合性临床技能培训课程。通过密切联系临床的线上教学，为毕业生恢复临床实习做好准备。</p>
        <p>学院口腔教研室利用数字化教学资源、病例讨论、线上实操直播，线上考核等，将课程学习、辅导、考核的全过程融会贯通于学习通、微信等网络平台。从而，使学生能够居家利用“碎片化时间”。</p>
        <p>开课二周多，同学们在超星学习通平台自主学习口腔临床技能操作视频、图片，通过老师在线辅导、答疑，病例讨论巩固相关临床理论专业知识。口腔临床技能实践操作包括为家人做一次口腔宣教如牙刷、牙线的正确使用方法；一次口腔检查，对相关口腔健康问题制定初步治疗方案；进行病例的讨论和病历的书写等。通过该课程学习既能够让学生利用现有条件巩固理论知识，练习操作技能，训练临床思维，而且也能够增进与家人的感情，提高他们的口腔保健意识，培养口腔卫生良好习惯。</p>
        <p>口腔教研室老师的用心，因时因地制宜，为同学们能够“停课不停学”而不断创新教学方式，这更是一种积极抗疫的行动！同学们积极利用教学资源，居家“云实习”，以“技”抗疫。</p>
        <p>来日可期，何惧车遥马慢。相信我们终将度过疫情的寒冬，迎来春暖花开！（文/黄泠钰 图/二院2015级口腔专业学生 编/周圆 审/冯锦山）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1406/9949.htm">原文链接</a>
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
