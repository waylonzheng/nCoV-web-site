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
                <a href="../index.html"><span>战疫</span>百事通后台管理系统</a>
            </div>
            
        </div>
    </div>
    <!--顶部标签结束-->
    <div class="add_linedata">
        <h2>添加线图数据</h2>
        <a href="../admin.php">返回</a>
        <form method="post" action="">
        <table>
        <tr>
            <td class="td_header">新增确诊数</td>
            <td><input class="td_input" type="text" name="newlyIncreased" autocomplete="off"></td>
        </tr>
        <tr>
            <td class="td_header">境外输入数</td>
            <td><input class="td_input" type="text" name="outsideInput" autocomplete="off"></td>
        </tr>
        <tr>
            <td class="td_header">日期</td>
            <td><input class="td_input" type="date" name="date" autocomplete="off"></td>
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
    $newlyIncreased = $_POST['newlyIncreased'];
    $outsideInput = $_POST['outsideInput'];
    $date = $_POST['date'];
    $sql = "INSERT INTO linedata VALUE('$newlyIncreased','$outsideInput','$date',null)";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."添加记录成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#line"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."添加记录失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#line"."\""."</script>";
        die();
    }
    mysqli_close($conn);
}

 ?>
