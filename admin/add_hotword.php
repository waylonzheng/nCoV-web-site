<!-- 因为想要多做点样式，php代码写在了下面 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加线图数据</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/iconfont.css">
</head>
<body>
 <!--顶部标签-->
    <div id="header">
        <div class="header">
            <div class="header_left">
                <a href="../../index.php"><span>战疫</span>百事通后台管理系统</a>
            </div>
            
        </div>
    </div>
    <!--顶部标签结束-->
    <div class="add_linedata">
        <h2>添加热词数据</h2>
        <a href="../admin.php">返回</a>
        <form method="post" action="">
        <table>
        <tr>
            <td class="td_header">热词</td>
            <td><input class="td_input" type="text" name="hotWord" autocomplete="off"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="提交">
                <input type="hidden" name="token" value="add">
                <input type="reset" value="重置">
            </td>
        </tr>
        </table>
        </form>
    </div>
</body>
</html>
<?php
require_once("conn.php");
// 判断表单是否合法
if(isset($_POST['token'])&&$_POST['token']=='add')
{
    //获取数据
    $hotWord = $_POST['hotWord'];
    $sql = "INSERT INTO hotword VALUE('$hotWord',null)";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."添加记录成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#word"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."添加记录失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#word"."\""."</script>";
        die();
    }
}
mysqli_close($conn);
 ?>
