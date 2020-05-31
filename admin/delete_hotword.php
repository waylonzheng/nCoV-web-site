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
    $num = $_GET['num'];
    $sql = "DELETE FROM hotword WHERE num=$num";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除记录成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#word"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除记录失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#word"."\""."</script>";
        header("refresh:1;url=../admin.php");
        die();
    }
    mysqli_close($conn);
 ?>

