<?php
require_once("conn.php");
$newsid = $_GET['newsid'];
$sql = "SELECT * FROM news WHERE newsid = '$newsid'";
$result = mysqli_query($conn,$sql);
$arrsNews = mysqli_fetch_array($result);
// 判断表单是否合法
if(isset($_POST['token'])&&$_POST['token']=='add')
{
    //获取数据
    $title = $_POST['title'];
    $author = $_POST['author'];
    $datetime = $_POST['datetime'];
    $link = $_POST['link'];
    $article = $_POST['article'];
    $sql = "UPDATE news SET title='$title',article='$article',author='$author',link='$link',datetime='$datetime' WHERE newsid = '$newsid'";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."修改文章成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#news"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."修改文章失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#news"."\""."</script>";
        die();
    }
    mysqli_close($conn);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加文章-战疫事迹</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/iconfont.css">
</head>
<body>
 <!--顶部标签-->
    <div id="header">
        <div class="header">
            <div class="header_left">
                <a href="../index.php"><span>战疫</span>百事通后台管理系统</a>
            </div>
            
        </div>
    </div>
    <!--顶部标签结束-->
    <div class="add_news">
        <h2>添加文章-战疫事迹</h2>
        <a href="../admin.php">返回</a>
        <form method="post" action="">
        <table class="table_box">
        <table class="table_top">
        <tr>
            <td class="table_top_header">标题</td>
            <td><input class="table_top_input" type="text" name="title" autocomplete="off" value="<?php echo $arrsNews['title'];?>" ></td>
            <td class="table_top_header">作者</td>
            <td><input class="table_top_input" type="text" name="author" autocomplete="off" value="<?php echo $arrsNews['author'];?>" ></td>
        </tr>
        <tr>
            <td class="table_top_header">日期</td>
            <td><input class="table_top_input" type="text" name="datetime" autocomplete="off" value="<?php echo $arrsNews['datetime'];?>"></td>
            <td class="table_top_header">链接</td>
            <td><input class="table_top_input" type="text" name="link" autocomplete="off" value="<?php echo $arrsNews['link'];?>" ></td>
        </tr>
        </table>
        <table class="table_centre">
        <tr>
        	<td class="td_header">内容</td>
        </tr>
        <tr>
        	<td><textarea rows="3" cols="120" placeholder="请使用H5标签编辑文章…" name="article" value="<?php echo $arrsNews['article'];?>"></textarea></td>
        </tr>
        </table>
        <table class="table_bottom">
        	<tr>
            <td></td>
            <td>
                <input type="submit" value="提交">
                <input type="hidden" name="token" value="add">
                <input type="reset" value="重置">
            </td>
        </tr>
        </table>
        </table>
        </form>
    </div>
</body>
</html>

