<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>请选择您要进入的界面</title>
    <link rel="stylesheet" href="../css/admin.css">
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
	<div class="select">
		<div class="select_title_box"></div>
		<div class="select_title">
			<img src="../image/logo5.png" alt="" />
			<p>网站管理员，请选择您要进入的界面</p>
			</div>
		<a href="../admin.php">
		<div class="select_admin">
			<div class="select_admin_title">后台管理界面</div>
			<div class="select_admin_centent"></div>
		</div>
		</a>
		<a href="../index.php">
		<div class="select_index">
			<div class="select_index_title">前端浏览界面</div>
			<div class="select_index_centent"></div>
		</div>
		</a>
	</div>
</body>
<script src="../js/jscript.js"></script>
</html>
