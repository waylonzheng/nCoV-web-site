<?php
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
    <title>同心战“疫”、共盼春来——我校为国（境）外师生寄送爱心包裹</title>
   <link rel="stylesheet" href="../../css/page.css">
    <link rel="stylesheet" href="../../css/iconfont.css">
</head>
<style>
</style>
<body>
<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../../index.php"><img src="../../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="../situation.php" >最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../story.php">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../gdmu.php" id="this">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../us.php">关于我们</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../more.php">更多</a>
        </div>
        <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='../logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='../../admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='../logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='../login.php' target='_blank' class ='register'>注册</a>";
						echo"<a href='../login.php' target='_blank' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
    </div>
</div>
<!-- 顶部标签结束 -->
<!-- 内容标签开始 -->
<div class="news">
    <div class="news_left">
        <div class="news_title">同心战“疫”、共盼春来——我校为国（境）外师生寄送爱心包裹</div>
        <div class="news_source">宋雪洁</div>
        <div class="news_date">2020-03-31</div>
        <div class="news_content">
        <p>在国外新冠肺炎疫情日益严峻的情势下，学校党委高度重视在国（境）外师生的身心健康和生命安全，要求各相关部门要进一步提高认识，科学制定防控方案，周密布署防控工作，做到快速反应、精准施策。同时，一对一了解国（境）外师生的实际需求和困难，加强人文关怀及心理疏导。。</p>
        <p>近日，在加大与国（境）外师生的联络频次，及时分享防疫信息与知识，做好师生每日健康监测的同时，国际合作与交流处、人事处、学生处等部门联动，向我校在美国、英国、澳大利亚、新加坡、菲律宾等国家和地区访学、留学的23名师生以及7名港澳台籍学生邮寄了爱心包裹，送去了慰问信、口罩及其他物品。</p>
        <p>一份份爱心包裹传递的不仅仅是大家当前急需的防疫物资，而是学校对每一位身在国（境）外的广东医人始终如一的牵挂和关爱。“这场突如其来的疫情，扰乱了我们平静的生活。但面对这场前所未有的巨大挑战，请大家始终坚定信心、科学防控、众志成城、同心战“疫”，你们的健康和安全是学校最大的期盼！”。一封封“家书”为国（境）外师生带去了学校领导最为诚挚的鼓励和祝福。</p>
        <p>身在匈牙利的2018级药物分析专业王俏同学收到爱心包裹后，在感谢信中写道：“身在异国他乡，突然被通知收取快递。满怀疑惑地打开包裹，逐字逐句地读着这封沉甸甸的家书，深深感到身为广东医学子的骄傲与满足，那种深刻的民族自豪感和归属感瞬时涌上心头……”。学校国（境）外师生纷纷表示，感谢学校给予的关爱和温暖，将按照学校要求，切实做好个人防护，与学校保持密切联系，共渡难关。</p>
        <p>疫情面前，请身在国（境）外的师生们始终坚信，广东医永远是你们坚强的后盾。纵然相隔万水千山，学校与你们时刻心手相连。让我们携手而行，共度时艰、共盼春来！（文/宋雪洁 编/周圆 审/冯锦山）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1050/9983.htm">原文链接</a>
        </div>
</div>
    </div>
    <div class="news_right">
    <div class="wb"><a href="https://weibo.com/" target="_blank"><i class="icon-weibo iconfont"></i></a></div>
    <div class="qq"><a href="https://qzone.qq.com/" target="_blank"><i class="icon-qq iconfont"></i></a></div>
    <div class="wx"><a href="https://wx.qq.com/" target="_blank"><i class="icon-weixin iconfont"></i></a></div>
    <p>分享到:&nbsp;&nbsp;&nbsp;</p>
    </div>

</div>

    <div class="window">
        <img src="../../image/fc.png" alt="../image/fc.png">
    </div>
<!-- 内容标签结束 -->
        <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="../../image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
</html>
