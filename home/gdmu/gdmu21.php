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
    <title>第三届“别具疫阁”宿舍文化大赛</title>
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
        <div class="news_title">第三届“别具疫阁”宿舍文化大赛</div>
        <div class="news_source">一临小微</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>2020初始，新冠病毒嗷嗷地闯入我们的生活，给我们的生活来了当头一棒。

而黑夜过后，是破晓的微光；春暖之时，是花开的芬芳。</p>
        <div class="news_img">
         <img src="../../image/bjyg.jpg" alt="">
        </div>
        <p>相聚一个宿舍便是一种缘分，五湖四海前来相见，精彩的宿舍生活丰厚了你们的友谊，宿舍集体活动增强了你们的凝聚力！所以为何不趁着宿舍文化大赛来彰显你们的默契以及对战胜病毒的强大信心呢？赶紧和你的宿舍小伙伴们一起想想如何应对返校后的宿舍环境改善吧！</p>
        <p> 本届宿舍文化大赛将防疫科普与宿舍生活联系起来，使同学们更加了解疫情，从而做到在返校之后也能从容规范应对。通过手抄报以及视频等方式展示同学们的科普防疫知识，发挥空间巨大，不用愁创意不够施展！</p>
        <p>成功入选的科普防疫知识作品还会进行展示，被更多人看见(＾Ｕ＾)ノ~ＹＯ！</p>
        <p>活动形式：以宿舍为单位，制作宿舍防疫手抄报、视频，倡导把增强防疫意识转化为“绝知此事要躬行”的实践行动，决胜战“疫”！</p>
        <p>活动对象：广东医科大学全体在校学生（大家踊跃报名呀~）</p>
        <p>作品内容：大学生们返校后如何在宿舍或校园内做好防疫工作</p>
        <p>作品范围（可选其一）：</p>
        <p>1.宿舍生活防疫科普 2.宿舍以及宿舍以外的校园的生活防疫科普</p>
        <p>大赛赛程：分为初赛和决赛</p>
        <p>初赛：制作科普手抄报，以电子版形式上交后将进行一系列评审以及网络投票，选出10组优胜组进入决赛</p>
        <p>决赛：准备校园防疫科普视频</p>
        <p>分两个方案进行：</p>
        <p>方案一：已返校及条件允许 参赛选手进行录制的视频展示，现场作品展示时间为五分钟左右。展示内容需与作品创意与设计方案、作品特色等有关。</p>
        <p>方案二：未返校或情况不允许 参赛选手将作品以邮件形式发送一院学生会。</p>
        <p>参赛要求：</p>
        <p>1.手抄报统一用四开美术纸，必须包含报头、插图和文字等三部分，版面布局合理，知识性、科普性、实用性和观赏性有机统一，另外手抄报还需包括宿舍简介（50字左右）和宿舍每一位成员用一句话表白奋战在一线的医护人员，校区、宿舍楼号以及门牌号、队伍名称和宿舍成员等注明在每份手抄报的背面。</p>
        <p>2.拍摄视频需紧扣主题，画面清晰，可配字幕、旁白和音乐等，另外视频需由宿舍的每一位成员共同完成，在视频最后需注明成员分工。时长不超过五分钟。</p>
        <p>报名截止时间4月10日</p>
        <p>作品截止为4月16日
作品请发送到邮箱：2308244185@qq.com</p>
        <p>初赛时间为4月18日</p>
        <p>决赛时间为5月10日</p>
        <div class="news_img">
         <img src="../../image/bjyg1.jpg" alt="">
        </div>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/39rIuILWz3Mlk0sXdRR6NA">原文链接</a>
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
