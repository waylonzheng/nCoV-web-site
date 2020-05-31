<?php
session_start();
unset($_SESSION['id']);
session_destroy();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."成功退出登录，确认即可返回！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../index.php"."\""."</script>";
?>