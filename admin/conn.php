<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbname = 'zybst';
$charset = "UTF-8";
$dbpass = '12345';          // mysql用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )

{

    die('Could not connect: ' . mysqli_error());

}
$selectdb = mysqli_select_db($conn, $dbname);
if(!$selectdb)
{
    echo"<h2>选择数据库{$dbname}失败！</h2>";
    die();
}
mysqli_query($conn,"set names utf8");
mysqli_set_charset($conn,$charset);
 ?>
