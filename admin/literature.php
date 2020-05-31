<?php
require_once("conn.php");
$pagesizeLiterature = 4;
$pageLiterature = isset($_GET['pageLiterature']) ? $_GET['pageLiterature'] : 1;
$startrowLiterature = ($pageLiterature-1)*$pagesizeLiterature;
$sql = "SELECT * FROM literature ORDER BY date DESC";
$result = mysqli_query($conn,$sql);
$recordsLiterature = mysqli_num_rows($result);
$pagesLiterature = ceil($recordsLiterature/$pagesizeLiterature);
$sql .=" LIMIT {$startrowLiterature},{$pagesizeLiterature}";
$result = mysqli_query($conn,$sql);
$arrsLiteratures = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>