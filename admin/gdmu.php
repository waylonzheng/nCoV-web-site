<?php
require_once("conn.php");
$pagesizeGdmu = 4;
$pageGdmu = isset($_GET['pageGdmu']) ? $_GET['pageGdmu'] : 1;
$startrowGdmu = ($pageGdmu-1)*$pagesizeGdmu;
$sql = "SELECT * FROM gdmu ORDER BY datetime DESC";
$result = mysqli_query($conn,$sql);
$recordsGdmu = mysqli_num_rows($result);
$pagesGdmu = ceil($recordsGdmu/$pagesizeGdmu);
$sql .=" LIMIT {$startrowGdmu},{$pagesizeGdmu}";
$result = mysqli_query($conn,$sql);
$arrsGdmus = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>