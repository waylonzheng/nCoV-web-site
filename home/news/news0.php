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
    <title>第一观察｜习近平指挥战“疫”进行时</title>
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
            <a href="../story.php" id="this">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../gdmu.php">抗疫在广医</a>
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
        <div class="news_title">第一观察｜习近平指挥战“疫”进行时</div>
        <div class="news_source">新华社</div>
        <div class="news_date">2020-03-12 11:07:27</div>
        <div class="news_content">
        <p>3月10日上午，习近平总书记飞抵武汉，考察新冠肺炎疫情防控工作。</p>
        <p>新冠肺炎疫情发生以来，习近平总书记始终亲自指挥、亲自部署这场人民战争、总体战、阻击战。我们通过“一张日程表”“一本指令集”“一番暖心话”来回顾截至目前习近平总书记指挥战“疫”的过程。</p>
        <div class="news_img">
         <img src="../../image/news.jpeg" alt="">
        </div>
        <p>6次中央政治局常委会会议、1次中央政治局会议、3次实地调研、10余次外事活动、一系列重要指示……</p>
        <p>一段特殊的时期，一张密集的日程表，记录了总书记指挥战“疫”的身影，反映出对疫情防控的高度重视和始终坚持的“以人民为中心”的执政理念。</p>
        <p>战“疫”之初，习近平总书记及时提出“坚定信心、同舟共济、科学防治、精准施策”的总要求，为打赢这场人民战争提供了战略指引。</p>
        <div class="news_img">
            <img src="../../image/xjp.jpeg" alt="">
        </div>
        <p>在战“疫”的不同阶段，总书记有针对性地提出要求：</p>
        <p>疫情暴发之初——强调疫情就是命令，防控就是责任</p>
        <p>胶着对垒之时——强调采取更大的力度、更果断的措施，坚决把疫情扩散蔓延势头遏制住</p>
        <p>吃劲关键阶段——提醒高度警惕麻痹思想、厌战情绪、侥幸心理、松劲心态，警示各地要紧紧绷住疫情防控这根弦不放松</p>
        <p>积极向好的态势正在拓展时——全面部署统筹推进疫情防控和经济社会发展各项工作</p>
        <p>在疫情防控斗争进入关键阶段——要求不麻痹、不厌战、不松劲，毫不放松抓紧抓实抓细各项防控工作，坚决打赢湖北保卫战、武汉保卫战</p>
        <p>这些指令，统领着攻克疫情的各条战线，贯穿战“疫”始终</p>
        <div class="original">
            <a href="http://www.kankanews.com/a/2020-03-12/0039182215.shtml">原文链接</a>
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
