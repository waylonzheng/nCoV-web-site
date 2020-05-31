<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>登陆</title>
	<link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/iconfont.css">
    	<style>
        body, html {
             margin: 0;
            padding: 0;
}
        body{

            background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
            animation: moveBg 8s linear infinite;
            background-size: 400% 400%;
            }
        @keyframes moveBg{
            0%{background-position: 0% 50%;}
            50%{background-position: 100% 50%;}
            100%{background-position: 0% 50%;}
        }
    </style>
</head>
<body>
	 &nbsp;
</body>
</html>
<?php
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=zybst;charset=utf8";
$username = "root";
$pwd = "12345";
//创建PDO类的对象
$pdo = new PDO($dsn,$username,$pwd);
error_reporting(0);
//开启SESION会话
session_start();
//判断表单是否合法提交
if(isset($_POST['token']) && $_POST['token']==$_SESSION['token'])
{
	//获取表单数据
	$id = $_POST['id'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	//判断是否有输入账号密码
	if($id == ""||$password == ""){
				//用户名or密码为空
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名或密码不能为空！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.php"."\""."</script>";
				exit;
	}
	$sql_select = "SELECT id FROM user WHERE id = ?";
				//sql语句执行
				$PDOStatement = $pdo->prepare($sql_select);
				$PDOStatement->bindValue(1,$id);
				$PDOStatement->execute();
				//判断用户名是否已存在
				$num= $PDOStatement->rowCount();
				
				if($num){
					//用户名已存在
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名已存在！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.php"."\""."</script>";
					exit;
				}else{
					//用户名不存在
					$sql_insert = "INSERT INTO USER VALUE(?,?,?,?)";
					//插入数据
					$PDOStatement = $pdo->prepare($sql_insert);
					$PDOStatement->bindValue(1,$id);
					$PDOStatement->bindValue(2,$password);
					$PDOStatement->bindValue(3,$email);
					$PDOStatement->bindValue(4,'普通用户');
					$PDOStatement->execute();
					//跳转注册成功页面
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."注册成功，欢迎加入战疫百事通！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.php"."\""."</script>";
					
				}
				}

?>