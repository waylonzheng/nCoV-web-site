<?php
require_once("conn.php");
$sql1 = "SELECT * FROM benediction";
$result1 = mysqli_query($conn,$sql1);
$arrsBene = mysqli_fetch_all($result1,MYSQLI_ASSOC);

$pagesizeWord = 15;
$pageWord = isset($_GET['pageWord']) ? $_GET['pageWord'] : 1;
$startrowWord = ($pageWord-1)*$pagesizeWord;
$sql = "SELECT * FROM hotword ORDER BY num DESC";
$result = mysqli_query($conn,$sql);
$recordsWord = mysqli_num_rows($result);
$pagesWord = ceil($recordsWord/$pagesizeWord);
$sql .=" LIMIT {$startrowWord},{$pagesizeWord}";
$result = mysqli_query($conn,$sql);
$arrsWords = mysqli_fetch_all($result,MYSQLI_ASSOC);
 ?>
