<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除线图数据</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

</body>
</html>
<?php
require_once("conn.php");

    //获取数据
    $dateid = $_GET['dateid'];
    $sql = "DELETE FROM dailystiuation WHERE dateid=$dateid";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除记录成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#data"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除记录失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#data"."\""."</script>";
        die();
    }
    mysqli_close($conn);
 ?>

