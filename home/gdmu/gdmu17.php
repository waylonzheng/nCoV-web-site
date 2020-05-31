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
    <title>Photoshop启动！第四届PS挑战大赛！</title>
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
        <div class="news_title">Photoshop启动！第四届PS挑战大赛！</div>
        <div class="news_source"> 广东医网协</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>本届PS大赛主题为：“青春‘艺’起战疫·PS共绘奇迹”。</p>
<p>参赛者必须围绕抗疫行动、抗疫生活等主题，可包含赞颂医护人员、抗击疫情、趣事等内容，使用Photoshop进行图片创作，在规定时间段内提交作品至指定邮箱即视为成功参赛。</p>
<p>大赛共分初赛，复赛与决赛三个环节，不但能使你的才能充分展现，还有机会赢得丰厚奖金。</p>
<p>（参赛对象：广东医科大学全体学生）</p>
<div class="news_img">
         <img src="../../image/ps.png" alt="">
        </div>
        <p>本届PS大赛主题为：“青春‘艺’起战疫·PS共绘奇迹”。</p>
<p>参赛者必须围绕抗疫行动、抗疫生活等主题，可包含赞颂医护人员、抗击疫情、趣事等内容，使用Photoshop进行图片创作，在规定时间段内提交作品至指定邮箱即视为成功参赛。</p>
<p>大赛共分初赛，复赛与决赛三个环节，不但能使你的才能充分展现，还有机会赢得丰厚奖金。</p>
<p>（参赛对象：广东医科大学全体学生）</p>
<p>报名参赛（4月2日-4月22日21:00）</p>
    <p>由于疫情，活动采取线上模式。</p>
    <p>选手在网协公众号（广东医网协）回复“PS大赛”获取报名表，将报名表和作品压缩包</p><p>发送至指定邮箱进行报名，并进入答疑群进行答疑及了解自身参赛情况。</p>
    <p>初赛得分最高的前5名直接进入决赛。</p>
<p>（若群人数已满，添加工作人员的微信后邀请进群）</p>
<p>➡ 邮箱：gdmuwangxie@163.com</p>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/Q6OFQmBayV6-yJe9SsCXPQ">原文链接</a>
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
