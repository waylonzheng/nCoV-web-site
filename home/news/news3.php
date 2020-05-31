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
    <title>战“疫”时期的爱情：相见却无法相拥</title>
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
        <div class="news_title">战“疫”时期的爱情：相见却无法相拥</div>
        <div class="news_source">王健慧</div>
        <div class="news_date">2020-02-13 16:07:56</div>
        <div class="news_content">
        <p>2020年的情人节可能是最为特别的一个。相比“疫情时期的爱情”，我们更愿意称之为“战‘疫’时期的爱情”。每一个人都在为抗击疫情作出努力，正如专家所言，宅在家里也是“战士”。因此，2020年的情人节就有了一点革命浪漫主义。</p>
        <p>“死亡让我感到的唯一痛苦，便是不能为爱而死。”</p>
        <p>“人不是从娘胎里出来就一成不变的，相反，生活会逼迫他一次又一次地脱胎换骨。”</p>
        <p>“诚实的生活方式其实是按照自己身体的意愿行事，饿的时候才吃饭，爱的时候不必撒谎。”</p>
        <p> ——《霍乱时期的爱情》</p>
        <div class="news_img">
         <img src="../../image/aq.png" alt="">
        </div>
        <p>她是95后小护士，</p>
        <p>他是她男朋友，</p>
        <p>因为一场疫情，</p>
        <p>一个在医院里，</p>
        <p>一个在医院外，</p>
        <p>相见却无法相拥。</p>
        <p>戴着口罩，</p>
        <p>隔着玻璃凝视，</p>
        <p>对话都需要开通手机。</p>
        <p>想要抱抱，</p>
        <p>却又只能碰到玻璃。</p>
        <p>离别时，最后的亲吻，</p>
        <p>依然碰到的是那扇冰冷的门，</p>
        <p>顺着脸颊流下的却是最滚烫的泪水。</p>
        <div class="original">
            <a href="http://www.kankanews.com/a/2020-02-13/0039150329.shtml?appid=620799">原文链接</a>
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
