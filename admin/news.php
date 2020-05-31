<?php
require_once("conn.php");
$pagesizeNews = 4;
$pageNews = isset($_GET['pageNews']) ? $_GET['pageNews'] : 1;
$startrowNews = ($pageNews-1)*$pagesizeNews;
$sql = "SELECT * FROM news ORDER BY datetime DESC";
$result = mysqli_query($conn,$sql);
$recordsNews = mysqli_num_rows($result);
$pagesNews = ceil($recordsNews/$pagesizeNews);
$sql .=" LIMIT {$startrowNews},{$pagesizeNews}";
$result = mysqli_query($conn,$sql);
$arrsNewss = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>