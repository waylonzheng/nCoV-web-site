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
    <title>对标争先│马克思主义学院党总支第二党支部积极组织党员讲好中国抗疫故事</title>
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
        <div class="news_title">对标争先│马克思主义学院党总支第二党支部积极组织党员讲好中国抗疫故事</div>
        <div class="news_source">广东医科大学</div>
        <div class="news_date">2020-04-02</div>
        <div class="news_content">
        <p>在全国众志成城抗击新冠肺炎疫情工作的关键时期，马克思主义学院党总支第二党支部组织全体党员认真学习贯彻习总书记相关指示精神，积极落实学校党委和学院党总支关于开展“三对标三争先”活动精神，在配合学校疫情防控中作表率，认真执行联防联控措施，主动落实学校网络教学工作方案，讲好中国抗疫故事，引导学生坚定“四个自信”。</p>
        <p>战“疫”时期，为了丰富线上教学资源，第二支部全体党员夜以继日的完善网络课程，录制速课，上传教案、ppt和视频，并充分挖掘疫情防控中的感人事迹和我校校友的感人故事，努力营造思政课战“疫”氛围，实现思政“小课堂”与抗击疫情的人民战争“大课堂”之间的同频共振。老师们还通过腾讯极速课堂、同步课堂等平台，认真开展线上教学，加强与学生的线上互动，及时做好学生线上自主学习、答疑、作业、测验等各环节的工作，努力发挥好思政课对学生的思想引领作用。</p>
        <p>为了讲好特殊时期的思政课，3月26日下午，该支部全体党员开展了以“生物安全”为主题的集体备课。教师们纷纷表示，这次疫情暴露了我国生物安全治理能力的不足，认为生物安全立法和管理亟待推进，要把生物安全纳入国家安全体系，系统规划国家生物安全风险防控和治理体系建设，全面提高国家生物安全治理能力。同时，老师们还针对如何组织线上教学、提高教学效果等问题进行了交流，增进了共识。（文/马克思主义学院供稿 编/周圆 审/冯锦山）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1406/9996.htm">原文链接</a>
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
