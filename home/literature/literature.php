<?php
require_once("../conn.php");
$pagesizeLiterature = 15;
$pageLiterature = isset($_GET['pageLiterature']) ? $_GET['pageLiterature'] : 1;
$startrowLiterature = ($pageLiterature-1)*$pagesizeLiterature;
$sql = "SELECT * FROM literature ORDER BY date DESC";
$result = mysqli_query($conn,$sql);
$recordsLiterature = mysqli_num_rows($result);
$pagesLiterature = ceil($recordsLiterature/$pagesizeLiterature);
$sql .=" LIMIT {$startrowLiterature},{$pagesizeLiterature}";
$result = mysqli_query($conn,$sql);
$arrsLiteratures = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新冠百科</title>
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
                    <a href="../literature.php" id="this">新冠百科</a>
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
<!-- 宣传页标签开始 -->
    <div class="view">
        <img src="../../image/bk.jpg" alt="">
    </div>
<!-- 宣传页标签结束 -->
<!-- 内容标签开始 -->
<div class="literature_box">
	<div class="literature_name"><i class="icon-liebiao1 iconfont"></i>&nbsp;抗疫在广医</div>
	<table class="literature_list">
		<tr>
			<th width="35%">标题</th>
			<th width="10%">来源</th>
			<th width="43%">链接</th>
			<th width="12%">发布时间</th>
		</tr>
		<?php
		    foreach ($arrsLiteratures as $arrsLiterature) {
		     ?>
		    <tr>
		    <td><?php echo $arrsLiterature['title']; ?></td>
		    <td><?php echo $arrsLiterature['author']; ?></td>
		    <td><?php $literatureLink = $arrsLiterature['link']; echo "<a href='$literatureLink' target='_blank' >$literatureLink</a>"; ?></td>
		    <td><?php echo $arrsLiterature['date']; ?></td>
		    </tr>
		    <?php }?>
		    	<tr >
		    		<td class="literature_nav" colspan="5">
						<?php
							for($i=1;$i<=$pagesLiterature;$i++){
								if($pageLiterature==$i){
								echo"<span>$i</span>" ;
								}else
								{
								echo"<a href='?pageLiterature=$i#literature'>$i</a>" ;
								}
							}
							?>
					</td>
				</tr>
	</table>
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