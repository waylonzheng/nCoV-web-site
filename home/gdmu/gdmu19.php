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
    <title>家乡文化秀活动</title>
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
        <div class="news_title">家乡文化秀活动</div>
        <div class="news_source"> 基础团委</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>活动背景：
  我国自古以来便在各色的文化中激荡着、融合着，所谓“十里不同风，百里不同俗”，家乡文化积淀着中华各个民族、各个地区人民最朴实深厚的精神追求，呈现着各族人民最深刻的精神印记，代表着地域独特的精神标识。为积极弘扬传统文化，传播青春正能量，展现同学们良好的精神风貌，家乡文化秀为同学们提供了一个平台，让大家秀出家乡，感受传统文化的美和博大精深。</p>
<p>活动目的：
  此线上活动旨在让同学们介绍和展示家乡的风土民情，展现祖国的地大物博和秀丽江川，增进我校学生对多彩的民族文化的认识与了解，扩大学生视野，增强大家的爱国热情和民族自豪感。同时也可以展示同学们的风采、丰富线下生活，达到弘扬优秀传统文化和促进我们校园文化发展的目的。</p>
  <div class="news_img">
         <img src="../../image/jx.jpg" alt="">
         <img src="../../image/jx1.jpg" alt="">
        </div>
<p>1、活动主题：
美丽中国，精彩家乡</p>
<p>2、活动时间</p>
        <p>初赛投稿时间：
4月1日-4月13日17：00点</p>
<p>初赛结果公布时间：
4月16日</p>
<p>决赛投稿时间：
4月16日-4月28日20：00点前</p>
<p>决赛结果公布时间：
5月1日</p>
<p>3.作品发送至邮箱：
1453248568@qq.com</p>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/hPP8d_GPVGcgwLDL_yqxUA">原文链接</a>
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
