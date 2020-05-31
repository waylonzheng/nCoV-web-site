<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除建议</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
</body>
</html>
<?php
require_once("conn.php");

    //获取数据
    $suggestid = $_GET['suggestid'];
    $sql = "DELETE FROM suggest WHERE suggestid=$suggestid";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除建议成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#suggest"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除建议失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#suggest"."\""."</script>";
        header("refresh:1;url=../admin.php");
        die();
    }
    mysqli_close($conn);
 ?>

