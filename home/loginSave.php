
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
//开启SESION会话
session_start();
if(isset($_SESSION['errCount']))
{
	$errCount = $_SESSION['errCount'];
}else
{
	$errCount = 0;
}

//判断表单是否合法提交
if(isset($_POST['token']) && $_POST['token']==$_SESSION['token'])
{
	//获取表单数据
	$id = $_POST['id'];
	$password = md5($_POST['password']);
	
	
	
	$sql = "SELECT * FROM user WHERE id=? AND password=?";
	$PDOStatement = $pdo->prepare($sql);
	$PDOStatement->bindValue(1,$id);
	$PDOStatement->bindValue(2,$password);
	$PDOStatement->execute();
	$records= $PDOStatement->rowCount();
	//判断是否有输入账号密码
	if($id == ""||$password == ""){
				//用户名or密码为空
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."账号或密码不能为空！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.php"."\""."</script>";
				exit;
		}
	if(!$records)
	{	
		if($errCount == 2)
		{
			unset($_SESSION['errCount']);
			echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."账号密码错误3次，请核对！"."\"".")".";"."</script>";
			echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../index.php"."\""."</script>";
		}else
		{
			$errCount++;
			$_SESSION['errCount'] = $errCount;
			echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."帐号或者密码错误！"."\"".")".";"."</script>";
			echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.php"."\""."</script>";
		}
		
		die();
		
	}
	//保存用户信息到SESSION
	$_SESSION['id'] = $id;
	$sql1 = "SELECT identity FROM user WHERE id=? AND password=?";
	$PDOStatement = $pdo->prepare($sql1);
	$PDOStatement->bindValue(1,$id);
	$PDOStatement->bindValue(2,$password);
	$PDOStatement->execute();
	$record1=$PDOStatement->fetch(PDO::FETCH_ASSOC);
	$identity = $record1['identity'];
	if($identity == "超级管理员")
	{
		//跳转管理员选择界面
	header("location:../admin/select.php");
	}else
	{
		//跳转首页
	header("location:../index.php");
	}
	
}else
{
	header("location:login.php");
}
mysqli_close($conn);
?>