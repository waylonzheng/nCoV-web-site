<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除文章</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

</body>
</html>
<?php
require_once("conn.php");

    //获取数据
    $literatureid = $_GET['literatureid'];
    $sql = "DELETE FROM literature WHERE literatureid=$literatureid";
    if(mysqli_query($conn,$sql))
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除文章成功，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#literature"."\""."</script>";
        die();
    }else
    {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."删除文章失败，确认返回！"."\"".")".";"."</script>";
		echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#literature"."\""."</script>";
        header("refresh:1;url=../admin.php");
        die();
    }
    mysqli_close($conn);
 ?>

