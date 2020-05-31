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
<html>
	<head>
		<meta charset="UTF-8" />
		<title>抗疫在广医-云返校</title>
		<link rel="stylesheet" type="text/css" href="../../css/page.css">
	</head>
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
		<!-- 宣传页标签开始 -->
		    <div class="view">
		        <img src="../../image/photo1.png" alt="">
		    </div>
		<!-- 宣传页标签结束 -->
		<!-- 相册标签开始 -->
		<div class="photo_album">
		<ul class="polaroids">
			<li><a href="#" title="GDMU"><img src="../../image/lbt1.png" alt="Roeland!"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt2.png" alt="Discussion"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt3.png" alt="A Hearty Laugh"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt4.png" alt="Evil Matt Coding"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt5.png" alt="Scribbles"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt6.png" alt="Amanda Glares..."></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt7.png" alt="The Dougernaut"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt8.png" alt="I See You!"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt9.png" alt="Rock Hard Balls"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt10.png" alt="Bocce Ball"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt11.png" alt="Boris "Tatooine""></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt12.png" alt="Sneakers & Stilettos"></a></li>
		</ul>
		<ul class="polaroids" style="width:280px;">
			<li><a href="#" title="GDMU"><img src="../../image/lbt13.png" alt="Roeland!"></a></li>
			<li><a href="#" title="GDMU"><img src="../../image/lbt14.png" alt="Discussion"></a></li>
			<li class="messy"><a href="#" title="GDMU"><img src="../../image/lbt15.png" alt="A Hearty Laugh"></a></li>
		</ul>
		</div>
		<!-- 相册标签结束 -->
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