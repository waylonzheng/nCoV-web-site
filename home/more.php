<?php
require_once("conn.php");
// 判断表单是否合法
if(isset($_POST['token'])&&$_POST['token']=='add')
{
    //获取数据
    $suggest = $_POST['suggest'];
	$datetime = date("Y-m-d H:i:s",time());
    $sql = "INSERT INTO suggest VALUE('$suggest','$datetime',null)";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."建议提交成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."more.php"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."建议提交失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."more.php"."\""."</script>";
        die();
    }
    mysqli_close($conn);
}
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
    <title>更多</title>
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/iconfont.css">
</head>
<style>
    #bottom{
        margin-top: -5px;
        width: 100%;
        height: 50px;
}
</style>
<body>
<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../index.php"><img src="../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="situation.php" >最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="story.php">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="gdmu.php">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="us.php">关于我们</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="more.php" id="this">更多</a>
        </div>
        <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='../admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='login.php' target='_blank' class ='register'>注册</a>";
						echo"<a href='login.php' target='_blank' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
    </div>
</div>
<!-- 顶部标签结束 -->
<!-- 宣传页标签开始 -->
    <div class="view">
        <img src="../image/2.jpg.png" alt="">
    </div>
<!-- 宣传页标签结束 -->
<!-- 内容页开始 -->
    <div class="us">
    	<div class="us_left">
    		<b><i class="icon-ren iconfont" style="font-size: 25px;"></i>联系我们</b>
    		<p></p><span>沙漠骆驼，真诚为您服务！</span>
    		<p><i class="icon-dizhi iconfont"></i>地址：广东医科大学</p>
    		<p><i class="icon-weibiaoti- iconfont"></i>电话：18946920776</p>
    		<p><i class="icon-qq2 iconfont"></i>qq:836509499</p>
    		<p><i class="icon-tubiao209 iconfont"></i>邮箱：836509499@qq.com</p>
    	</div>
    	<div class="us_right">
    		<b><i class="icon-xiaoxi iconfont" style="font-size: 25px;"></i>建议栏</b>
    		<form method="post" action="">
    			<table>
    				<tr>
    					<textarea rows="3" cols="80" placeholder="沙漠骆驼虚心接受任何建议！" name="suggest"></textarea>
    				</tr>
    				<tr>
    					<td style="width: 600px;">
    					    <input type="submit" value="提交" style="float: right;">
    					    <input type="hidden" name="token" value="add" style="float: right;">
    					    <input type="reset" value="重置" style="float: right;">
    					</td>
    				</tr>
    			</table>
    		</form>
    	</div>
    </div>
<!-- 内容页结束 -->
        <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="../image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
<script type="text/javascript" src="../js/jscript.js"></script>
</html>
