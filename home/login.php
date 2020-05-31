<?php 
session_start();
$_SESSION['token'] = uniqid();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎来到战疫百事通</title>
    <link rel="stylesheet" href="../css/page.css">
    <script src="../js/jquery-1.11.1.min.js"></script>
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
<div class="login-page">
    <div class="login_name">
       <a href="../index.php"> <img src="../image/logo3.png" alt=""></a>
    </div>
    <form id="login-form" class="form" method="post" action="loginSave.php">
        <input  type="text" name="id" placeholder="用户名"  autocomplete="off">
        <input type="password" name="password" placeholder="密码"  autocomplete="off">
        <button type="submit" id="login">登　录</button>
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']?>">
        <div class="msg"><span>还没有账户？</span>
            <button>创建账户</button>
        </div>
    </form>
    <form id="register-form" class="form" method="post" action="registerSave.php">
        <input type="text" name="id" placeholder="用户名"  autocomplete="off">
        <input type="password" name="password" placeholder="密码"  autocomplete="off">
        <input type="text" name="email" placeholder="电子邮箱"  autocomplete="off">
        <button type="submit" id="register">创　建</button>
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']?>">
        <div class="msg"><span>已有账户？</span>
            <button>去登录</button>
        </div>
    </form>
</div>
<script src="../js/jscript.js"></script>
</body>
</html>
