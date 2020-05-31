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
    <title>战疫百事通</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iconfont.css">
</head>
<body>
    <!--顶部标签-->
    <div id="header">
        <div class="header">
            <div class="header_left">
                <span>战疫</span>百事通
            </div>
            <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='home/logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='home/logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='home/login.php' class ='register'>注册</a>";
						echo"<a href='home/login.php' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
        </div>
    </div>
    <!--顶部标签结束-->
    <!--logo标签开始-->
    <div id="logo">
        <div class="logo_left">
            <img src="image/logo3.png" alt="image/logo3.png">
        </div>
        <div class="logo_right">
            <img src="image/logo2.png" alt="image/logo2.png">
        </div>
    </div>
    <!--logo标签结束-->
    <!--nav标签结束-->
    <div id="nav">
        <div class="nav_left">
            <a href="home/situation.php">最新疫情</a>
        </div>
        <div class="nav_center">
            <a href="home/story.php">抗疫事迹</a>
            <i class="icon-anjianfengexian iconfont"></i>
            <a href="home/literature.php">新冠百科</a>
            <i class="icon-anjianfengexian iconfont"></i>
            <a href="home/benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="home/gdmu.php">抗疫在广医</a>
            <i class="icon-anjianfengexian iconfont"></i>
            <a href="home/us.php">关于我们</a>
            <i class="icon-anjianfengexian iconfont"></i>
            <a href="home/more.php">更多</a>
            <i class="icon-xinxiaoxinew iconfont"></i>
            <i class="icon-bingjun iconfont"></i>
        </div>
        <div class="nav_right"></div>
    </div>
    <!--nav标签结束-->
    <!--banner标签开始-->
    <div id="banner">
        <!--banner图-->
        <div class="banner">
            <img src="image/1.png" alt="image/1.png">
        </div>
    </div>
    <!--banner标签结束-->
    <!--内容标签开始-->

    <!--内容标签结束-->
    <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
</html>
