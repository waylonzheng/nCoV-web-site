<?php
require_once("conn.php");
// 判断表单是否合法
if(isset($_POST['token'])&&$_POST['token']=='add')
{
    //获取数据
    $title = $_POST['title'];
    $author = $_POST['author'];
    $datetime = $_POST['datetime'];
    $link = $_POST['link'];
    $article = $_POST['article'];
    $category = $_POST['category'];
    $sql = "INSERT INTO gdmu VALUE('$title','$article','$author','$link','$datetime','$category',null)";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."添加记录成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#gdmu"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."添加记录失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#gdmu"."\""."</script>";
        die();
    }
    mysqli_close($conn);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加文章-抗疫在广医</title>
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
        <h2>添加文章-抗疫在广医</h2>
        <a href="../admin.php">返回</a>
        <form method="post" action="">
        <table class="table_box">
        <table class="table_top">
        <tr>
            <td class="table_top_header">标题</td>
            <td><input class="table_top_input" type="text" name="title" autocomplete="off"></td>
            <td class="table_top_header">作者</td>
            <td><input class="table_top_input" type="text" name="author" autocomplete="off"></td>
            <td class="table_top_header">类别</td>
            <td><select name="category" class="identity_select">
					<option value="普通用户" selected="selected">广医战疫</option>
					<option value="超级管理员">精彩活动</option>
					<option value="普通用户">停课不停学</option>
				</select></td>
        </tr>
        <tr>
            <td class="table_top_header">日期</td>
            <td><input class="table_top_input" type="date" name="datetime" autocomplete="off"></td>
            <td class="table_top_header">链接</td>
            <td><input class="table_top_input" type="text" name="link" autocomplete="off"></td>
        </tr>
        </table>
        <table class="table_centre">
        <tr>
        	<td class="td_header">内容</td>
        </tr>
        <tr>
        	<td><textarea rows="3" cols="120" placeholder="请使用H5标签编辑文章…" name="article"></textarea></td>
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

