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
    <title>坚定扛起疫情防控“先锋队”和“尖刀连”责任——学校成立防控办临时党支部</title>
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
        <div class="news_title">坚定扛起疫情防控“先锋队”和“尖刀连”责任——学校成立防控办临时党支部</div>
        <div class="news_source">广东医科大学</div>
        <div class="news_date">2020-02-04</div>
        <div class="news_content">
        <p>2月4日下午，学校通过网络视频方式在两校区第一会议室、在校党员办公室及部分住家党员家中召开新型冠状病毒感染的肺炎疫情防控领导小组办公室临时党支部成立大会。党支部成立旨在发挥党员先锋模范作用，让党员同志冲在防疫一线，以此带动其他人员积极参与到防控工作中来。</p>
        <div class="news_img">
         <img src="../../image/gdmu1.png" alt="">
        </div>
        <p>学校党委副书记罗辉宣读临时党支部成立批复。防控办临时党支部由30名党员组成，赖焱烽同志任临时党支部书记，杨丹、傅骏蕃同志任副书记。会议由临时党支部副书记、校长办公室主任杨丹主持。学校党委书记、校长卢景辉为临时党支部授旗。</p>
        <p>临时党支部书记、党委办公室主任赖焱烽表态，党支部将以最高站位，坚定不移贯彻落实习近平总书记关于疫情防控工作的重要讲话和指示批示精神；以最强力量，坚定扛起疫情防控“先锋队”和“尖刀连”责任；以最实作风，快速有效落实落细各项防控工作任务。</p>
        <p>学校党委书记、校长卢景辉对党支部的成立表示祝贺，对党支部30名党员将在防控工作中高标准履行党员职责、起到先锋模范作用表示感谢，并提出三点希望：一是希望党支部党员要进一步加强理论学习和业务学习，深入学习贯彻习近平新时代中国特色社会主义思想，贯彻落实习近平总书记关于疫情防控工作的重要讲话和指示批示精神，熟悉中央、省委关于疫情防控的政策要求，努力提升每一位党员的素质和能力，在防控疫情斗争中充分发挥党支部的战斗堡垒作用和共产党员的先锋模范作用；二是作为一个挺立在后方的战“疫”堡垒，希望党支部的成立起到树立一面旗帜的示范作用，带动防疫工作井然有序进行，带头打好疫情防控攻坚战；三是希望防控办的同志全力投入到疫情防控工作中，充分发挥坚强有力中枢作用，通过这次战“疫”在抓党建、抓管理、抓突发事件等各项工作中积累良好的经验。（文、编/周圆 图/王丽君 冯锦山 审/谭秋浩）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1050/9313.htm">原文链接</a>
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
