<?php
require_once("conn.php");
$sql1 = "SELECT * FROM dailystiuation";

$result1 = mysqli_query($conn,$sql1);

$arrsData = mysqli_fetch_all($result1,MYSQLI_ASSOC);


$pagesizeData = 8;
$pageData = isset($_GET['pageData']) ? $_GET['pageData'] : 1;
$startrowData = ($pageData-1)*$pagesizeData;
$sql = "SELECT * FROM linedata ORDER BY date DESC";
$result = mysqli_query($conn,$sql);
$recordsData = Mysqli_num_rows($result);
$pagesData = ceil($recordsData/$pagesizeData);
$sql .=" LIMIT {$startrowData},{$pagesizeData}";
$result = mysqli_query($conn,$sql);
$arrsDatas = Mysqli_fetch_all($result,MYSQLI_ASSOC);

 ?>
