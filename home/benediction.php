<?php
require_once("conn.php");
$sql = "SELECT benediction FROM benediction";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_all($result);
$testJson = json_encode($array);
mysqli_close($conn);
session_start();
$id;
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
	$dsn = "mysql:host=127.0.0.1;port=3306;dbname=zybst;charset=utf8";
	$username = "root";
	$pwd = "12345";
	//创建PDO类的对象
	$pdo = new PDO($dsn,$username,$pwd);
	$sql_select = "SELECT identity FROM user WHERE id = ?";
	//sql语句执行
	$PDOStatement = $pdo->prepare($sql_select);
	$PDOStatement->bindValue(1,$id);
	$PDOStatement->execute();
	$record=$PDOStatement->fetch(PDO::FETCH_ASSOC);
	$identity = $record['identity'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>祝福助威</title>
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/iconfont.css">
    <style>
    body{
      background: linear-gradient(#020001,#1A0701);
      animation: bodybg 1s;
    }
    #header{
    width: 100%;
    height: 60px;
    border-bottom: 1px solid #3d3807;
    box-shadow:3px  5px 10px #292502;
    background-color: #89852d;
    opacity: 0.9;
    overflow: hidden;
    position: fixed;
    top: 0;
    z-index: 999;
    animation: go 1s ;
}
.header_left img{
    padding: 3px 0px;
    height: 54px;
    opacity: 0.3;
    animation: image 1s ;
}
.header_left img:hover{
    opacity: 0.5;
}
.header_center a{
    color:#2b2902;
    font-weight:bold;
    margin-left: 10px;
    animation: text 0.5s ;
}
.header_center a:hover{
    color:#f6f2a4;
}
#this{
    color:#f6f2a4;
    font-size: 16px;
    animation: text1 0.5s ;
}
.header_right a{
    color: #2b2902;
    animation: text 0.5s ;
}
.header_right a:hover{
    color: #f6f2a4;
}
.header_right{
    width: 550px;
    height: 60px;
    float: right;
    line-height: 60px;
    color: #2b2902;
    animation: text 0.5s ;
}
.login{
	color: #2b2902;
    animation: text 0.5s ;
    float: right;
}
.register{
	color: #2b2902;
    animation: text 0.5s ;
	margin-left: 10px;
	margin-right: 30px;
    float: right;
}
.userid{
    float: right;
}
.logout{
	margin-left: 10px;
	height: 20px;
	width: 40px;
	text-align: center;
	margin-top: 20px;
	margin-right: 30px;
	line-height: 18px;
	border-radius: 4px;
	border: 1px solid #383307;
	background-color: #3F3D11;
	animation: logout2 0.5s;
	float: right;
}
.logout:hover{
	background-color: #868231;
}
.logout a{
	font-size: 14px;
	color:#DDDA94;
	animation: logout1 0.5s;
	
}
.to_admin{
	margin-left: 10px;
	height: 20px;
	width: 80px;
	text-align: center;
	margin-top: 20px;
	line-height: 18px;
	border-radius: 4px;
	border: 1px solid #383307;
	background-color: #3F3D11;
	animation: logout2 0.5s;
	float: right;
}
.to_admin:hover{
	background-color: #868231;
}
.to_admin a{
	font-size: 14px;
	color:#DDDA94;
	animation: logout1 0.5s;
	
}
#bottom{
	margin-top: 130px;
}
.bottom_top img{
  opacity: 0.9;
}
  </style>
  <script src="../js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" >
(function ($) {

  var container;

  // 可选颜色
  var colors = ['#FFEB3B', '#FFC107', '#FF9800', '#FF5722', '#795548'];

  //创建许愿页
  var createItem = function(text){
    var color = colors[parseInt(Math.random() * 5, 15)];//生成一个1-10内随机的整数
    $('<div class="item"><p>'+ text +'</p><a href="#">关闭</a></div>').css({ 'background': color }).appendTo(container).drag(); //appendTo  把内容添加到containter中
  };

  // 定义拖拽函数
    $.fn.drag = function () {

        var $this = $(this);
        var parent = $this.parent();

        var pw = parent.width();
        var ph = parent.height();
        var thisWidth = $this.width() + parseInt($this.css('padding-left'), 10) + parseInt($this.css('padding-right'), 10);
        var thisHeight = $this.height() + parseInt($this.css('padding-top'), 10) + parseInt($this.css('padding-bottom'), 10);

        var x, y, positionX, positionY;
        var isDown = false;

        var randY = parseInt(Math.random() * (ph - thisHeight), 10);
        var randX = parseInt(Math.random() * (pw - thisWidth), 10);


        parent.css({
            "position": "relative",
            "overflow": "hidden"
        });

        $this.css({
            "cursor": "move",
            "position": "absolute"
        }).css({
            top: randY,
            left: randX
        }).mousedown(function (e) {
            parent.children().css({
                "zIndex": "0"
            });
            $this.css({
                "zIndex": "1"
            });
            isDown = true;
            x = e.pageX;
            y = e.pageY;
            positionX = $this.position().left;
            positionY = $this.position().top;
            return false;
        });


        $(document).mouseup(function (e) {
            isDown = false;
        }).mousemove(function (e) {
            var xPage = e.pageX;
            var moveX = positionX + xPage - x;

            var yPage = e.pageY;
            var moveY = positionY + yPage - y;

            if (isDown == true) {
                $this.css({
                    "left": moveX,
                    "top": moveY
                });
            } else {
                return;
            }
            if (moveX < 0) {
                $this.css({
                    "left": "0"
                });
            }
            if (moveX > (pw - thisWidth)) {
                $this.css({
                    "left": pw - thisWidth
                });
            }
            if (moveY < 0) {
                $this.css({
                    "top": "0"
                });
            }
            if (moveY > (ph - thisHeight)) {
                $this.css({
                    "top": ph - thisHeight
                });
            }
        });
    };

  // 初始化
  var init = function () {

    container = $('#container');
// 绑定关闭事件
    container.on('click','a',function () {
      $(this).parent().remove();
    }).height(($(window).height() -200) < 0? 500 : ($(window).height() -200))
                  .width(($(window).width() -200) < 0? '100%' : $(window).width());
    var tests = <?php echo $testJson;?>;
    $.each(tests, function (i,v) {
      createItem(v);
    });

    // 绑定输入框
    $('#binput').keydown(function (e) {
      var $this = $(this);
      if(e.keyCode == '13') {
        var value = $this.val();
        if(value) {
          createItem(value);
          $this.val('');
        }
      }
    });

  };
  $(function() {
    init();
  });
})(jQuery);
  </script>
</head>
<body>

<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../index.php"><img src="../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="situation.php" >最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="story.php">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="benediction.php" id="this">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="gdmu.php">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="us.php">关于我们</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="more.php">更多</a>
        </div>
        <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='../admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='login.php' target='_blank' class ='register'>注册</a>";
						echo"<a href='login.php' target='_blank' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
    </div>
</div>
<!-- 顶部标签结束 -->
<!-- 内容标签开始 -->
<!-- 宣传页标签开始 -->
    <div class="view1">
    <div class="view_text">
      <p>疫&nbsp;&nbsp;&nbsp;国<br>
      魔&nbsp;&nbsp;&nbsp;泰<br>
      退&nbsp;&nbsp;&nbsp;民<br>
      散&nbsp;&nbsp;&nbsp;安<br></p>
    </div>
    </div>
<!-- 宣传页标签结束 -->
<div class="all">
 <div id="container">
  </div>
  <!-- 输入愿望文本框 -->
  <input id="binput" type="text" name="benediction" placeholder="输入文字，按空格发送祝福..." />
</div>
  <!-- 内容标签开始 -->
        <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="../image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
</html>
