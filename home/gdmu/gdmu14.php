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
    <title>“疫期在线，一临行动”——2020年春季学期在线教学工作准备就绪</title>
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
        <div class="news_title">“疫期在线，一临行动”——2020年春季学期在线教学工作准备就绪</div>
        <div class="news_source">广东医科大学</div>
        <div class="news_date">2020-02-29</div>
        <div class="news_content">
        <p>抗疫面前，为了做好新学期2020年春季学期在线教学工作，第一临床医学院按照学校的部署扎实推进实施，在以下方面做了充分的准备工作：</p>
        <p>召开新学期工作会议，推进在线教学工作的实施。为有序推进本学期教学工作，2月15日上午，第一临床医学院以网络视频会议的形式召开新学期教学工作会议，学院领导班子黄然、张良清、吴斌、王志刚、姚卫民、陈晓光以及各教研室正副主任、教学秘书参加会议。</p>
        <div class="news_img">
         <img src="../../image/zbgz.png" alt="">
        </div>
        <p>黄然书记在新学期教学工作会议上讲话</p>
        <p>建立三级督导体系，把控线上教学质量。我院建立以领导班子为组长，骨干教师督导教学、辅导员督学学生，各教研室督导本教研室课程的三级督导体系，通过加入学习通班级及课程班级联系群，对教学全过程进行督导。目前，我院各门课程的在线课程资源进行逐一校验，对线上课程的内容和质量进行监控。并核查每一位学生加入学习通和课程班级联系群，在开学前确保每一位同学都可以通过学习通进行网络课堂学习。</p>
        <p>此外，第一临床医学院正在组织各教研室针对疫情过后学生正式返校后的课程衔接及尤其是临床见习的教学安排正在完善工作预案，以确保整个学期本科教学工作的质量和水平不受疫情的影响。</p>
        <p>组织平台培训，提升教师在线教学实施能力。为了帮助广大的教师尽快熟悉和掌握学习通平台的使用，在经过学校多次组织的培训会议后，2月24日第一临床医学院邀请超星公司组织专场的学习通平台使用培训，共计70余名教师同时参加了在线学习，就如何进行课程资源录制、PPT上传、课堂互动、随堂测试等课堂教学活动对授课教师进行了充分的培训，受到教师们的热烈欢迎。</p>
        <p>开设直播教学示范课，理论与实践结合。2月25-28日，连续3天，教学部副部长周仲佑通过开设“新型冠状病毒肺炎“直播教学示范课，在直播教学中指导教师如何开展在线教学及如何在线互动，同时通过实操使得学生转变学习观念，进一步熟悉学习通的使用功能。（文、图/第一临床医学院 编/周圆 审/谭秋浩）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1406/9737.htm">原文链接</a>
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
