<?php
require_once("conn.php");
$pagesizeUser = 5;
$pageUser = isset($_GET['pageUser']) ? $_GET['pageUser'] : 1;
$startrowUser = ($pageUser-1)*$pagesizeUser;
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
$recordsUser = mysqli_num_rows($result);
$pagesUser = ceil($recordsUser/$pagesizeUser);
$sql .=" LIMIT {$startrowUser},{$pagesizeUser}";
$result = mysqli_query($conn,$sql);
$arrs = Mysqli_fetch_all($result,MYSQLI_ASSOC);
 ?>
