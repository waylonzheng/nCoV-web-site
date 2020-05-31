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
    <title>战“疫”︱昔日“非典”尖兵，今朝驰援荆州，他说：“我只是做一个医生该做的事而已。”</title>
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
        <div class="news_title">战“疫”︱昔日“非典”尖兵，今朝驰援荆州，他说：“我只是做一个医生该做的事而已。”</div>
        <div class="news_source">广东医科大学</div>
        <div class="news_date">2020-02-24</div>
        <div class="news_content">
        <p>石首，死守！2月15日，湖北荆门石首市中医医院，一位新型冠状病毒肺炎患者休克呼吸衰竭，情况危急！广东医科大学附属医院重症医学科主任医师、危重医学党支部党员、援石首广东医疗队队长孙小聪在石首死守生命底线，全力以赴与死神搏斗，紧急帮病人做了气管插管，行有创机械通气。</p>
        <div class="news_img">
         <img src="../../image/fdjb.png" alt="">
        </div>
        <p>经过几天的奋斗，2月21日，这位当地第一例成功行气管插管机械通气的新冠危重症、呼吸衰竭患者顺利脱机拔管，孙小聪拉起开窗帘，让温暖的阳光照进病房，患者缓缓地吐出一句：“阳光很好。”孙小聪在自己的朋友圈里写道:这可能就是生存、要活下去的希望。</p>
        <p>2月12日的出征仪式上，孙小聪曾向在场的所有人保证：“一定会将医疗队17人完完整整、一个不落地带回湛江吃海鲜！”一同出征的同科室护师符景松在那一刻泪水盈眶，他说当时深受感动 ：“你就是我们的大哥，我们就是你的弟弟。我们兄弟共同战斗在疫情一线，共同战斗在祖国最需要我们的地方，无怨无悔！”</p>
        <p>到达石首的头几天，因为病房是临时改建，条件、环境与标准有差距，为保证医护人员和病人的安全需要完善，身为队长的孙小聪一直不断在医院酒店之间奔波开会协调，晚里需要靠安眠药入睡，以保证第二天有充沛的体力和精力。血红的眼睛、憔悴的面容，其他队员看在眼里十分心疼。</p>
        <p>担当负责，是孙小聪给人的印象。他也曾经是个“愣头青”，他认为老主任姚华国对他影响深远。入职不久，他就遇到“非典”。当时情况之危急严重给这个新人带来极大震撼，他深切感受到人生命的脆弱，“如果重症病人能得到及时有效的救治，不单纯是挽救一个生命，挽救的还是一个家庭。”令他感动的是，姚华国主任跟他说，危险的操作姚自己来做。姚华国说：“我是科室的头，家里孩子也大了，我不上谁上？”姚后来被评为广东省抗非典二等功，他身先士卒的勇气，给附院重症医学科乃至他的学生孙小聪等，都留下了深刻的烙印。似乎无形中成了重症医学科、危重医学党支部的传统。</p>
        <p>姚华国的学生和后辈同事们也一样，在需要他们的时候敢担当、冲在最前线——伍海斌放下家庭重担，不辞劳苦援疆一年半时间；这次疫情，现任危重医学党支部书记张媛莉第一个穿上防护装备将患者送检CT；ICU病房主任、危重医学科党支部党员邓烈华取消休假，义无反顾地投入到抗疫斗争第一线中……</p>
        <p>在这种氛围的熏陶下，“小孙”慢慢成长成为同事口中的“大哥”。他的微信名是“勇敢的心”。就像他选择的职业一样，怀揣一颗勇敢的心追随前辈的足迹，勇敢地前行。

2016年至2017年孙小聪主动报名参加广东省“第二批组团式”医疗队，在工作环境和生活条件艰苦的西藏自治区林芝市人民医院工作一年。挂职担任该院重症医学科主任。援藏成绩突出，获得“优秀援藏干部”等多项荣誉称号。

在西藏，他修好当地医院唯一一台呼吸机，实现了林芝市人民医院使用呼吸机成功救治患者的零突破，还曾抢救糖尿病酮症酸中毒昏迷病人。甚至在当地交流的列车上，他还和其他广东省第二批“组团式”援藏医疗队队员一起“顺手”救了位突发高原反应的军嫂。军嫂在连续抢救近50分钟后，被转移上了救护车。120救护人员在交接中说，“这种情况很危急，如果不及时抢救会有生命危险，你们做得太专业、太好了！”援藏，磨炼了他的意志，他对自己的职业也有了更坚定的自信:我能够帮助更多需要帮助的人。</p>
        <p>2019年，四十岁的孙小聪取得主任医师资格。2020年春节疫情爆发，他主动请缨，哪里需要到哪里去。一肩担起重任，带领第二批湛江医疗队出征，又被省卫健委安排担任援石首广东医疗队的队长。石首市中医医院被临时改建成为新冠肺炎重症监护室，收治多例危重症病人。第一批湛江医疗队入驻方舱医院的队员因此特别担心自己的同事，“石首的病房环境比较简陋，比较担心他们操作过程中防护服漏缝滑脱，希望他们工作时一定要沉住气，不要着急”。但是像文中开头所说，病人情况严重，生命体征不稳定，当地医生都不敢插管。尽管有感染的风险，孙小聪还是毅然给病人进行了气管插管。“看着病人的病情，没考虑那么多，职业与专业促使我要对病人负责。”

没有人生而英勇，但既然选择，便勇敢前行。为什么一次次选择冲在前？孙小聪没有华丽的辞藻，“我只是做一个医生该做的事而已。”</p>
            <p>出征前，他给自己的老主任姚华国发了条短信：“师傅，我出发了。”姚华国回复：“你小子，好样的。”（文/周圆 吴征宇 编/周圆 审/谭秋浩）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1405/9650.htm">原文链接</a>
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
