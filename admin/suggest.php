<?php
require_once("conn.php");
// 判断表单是否合法
$pagesizeSuggest = 4;
$pageSuggest = isset($_GET['pageSuggest']) ? $_GET['pageSuggest'] : 1;
$startrowSuggest = ($pageSuggest-1)*$pagesizeSuggest;
$sql = "SELECT * FROM Suggest ORDER BY datetime DESC";
$result = mysqli_query($conn,$sql);
$recordsSuggest = mysqli_num_rows($result);
$pagesSuggest = ceil($recordsSuggest/$pagesizeSuggest);
$sql .=" LIMIT {$startrowSuggest},{$pagesizeSuggest}";
$result = mysqli_query($conn,$sql);
$arrsSuggests = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>