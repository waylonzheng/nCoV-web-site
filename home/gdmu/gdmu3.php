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
    <title>疫情中的温情 广东医科大学600多万专项资金“硬核”助学</title>
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
        <div class="news_title">疫情中的温情 广东医科大学600多万专项资金“硬核”助学</div>
        <div class="news_source">新快报</div>
        <div class="news_date">2020-03-30 10:42:55 </div>
        <div class="news_content">
        <p>新快报讯 记者王娟 通讯员冯香婷 王丽君 吴志华报道    记者从广东医科大学获悉，为关心和保障家庭经济困难学生的学习、生活和就业，该校及时启动紧急救助机制，启用600万专项资金，多措并举，真正做到使困难学生防控“不困难”，有效提高了资助精准度，确保国家相关政策的落实落细。</p>
        <p>“不能落下一个学生！”学校党委高度重视，第一时间组织专题会议研究落实疫情防控期间学生资助方案，科学谋划，保障政策到位、资金到位、人员到位。学校资助管理中心和全校辅导员通过线上家访、微信等形式开展拉网式排查，对疫情严重地区、贫困地区、农村地区、边远地区，尤其对建档立卡、低保、特困救助供养、残疾等特殊困难学生实施“一对一”的关怀、帮扶和激励方案。</p>
        <p> 据统计，为了有效避免因延期开学导致各类补助发放滞后，学生资助中心第一时间与财务处对接，提前发放了春季国家助学金和新疆籍家庭经济困难学生助学金，确保3648名本科生及时收到590多万元助学金。“因为疫情的影响，家里没有经济来源。多亏了学校发放的临时补助，减缓了家里的压力，让我可以安心继续上学”，来自护理学院的肖同学感激地说。</p>
        <p>为了减轻不同群体困难学生的经济压力，经学校党委研究决定，学校为留校的12名贫困生、为滞留重点疫区的19名贫困生以及其他633名困难学生发放各类专项补助；为缓解2020届家庭经济困难学生的就业压力，学校还对47名家庭经济困难毕业生提供就业帮扶，发放就业补贴，各个学院也展开了学院的助学资助。</p>
        <p>此外，学校还开展了多项特色助学活动，如积极联系移动、联通两大运营商，向全体学生推出流量优惠套餐活动，确保线上教学有序开展，不让任何一个学生掉队。尤其是为减轻困难学生因在线学习产生的移动数据流量费用负担，学校对无宽带网络的1293名家庭经济困难学生发放每月20G流量补助，并针对疫情变化情况，计划持续给予流量补助。来自生物医学工程学院的刘同学说：“收到这份流量补助之后，我可以更加放心地利用网络课程学习，提升自己的学习能力，我会加倍努力，用优异的成绩回报学校的帮助。”</p>
        <p>据悉，除了发放各类补贴、专项资助外，学校同时向受助学生发出暖心问候，及时发布温馨提示和收集学生的需求意见，一有问题第一时间联系和解决。此外，学校人文与管理学院的心理学专业教师的“心理防疫”团队，构建心理干预和疏导机制，多方式、多渠道提供心理健康服务，确保每个学生的身心健康。</p>
        <p>“疫情无情，广东医有爱。学校紧紧围绕立德树人根本任务，推进了学生资助工作治理体系的现代化、资助育人的精准化。”学校党委书记、校长卢景辉表示。战“疫”当前，及时为有需要的困难学生提供经济帮扶和精神激励的“硬核”操作，广东医实现了持续资助有力度、人文关怀有温度。</p>
        <div class="original">
            <a href="https://www.xkb.com.cn/article_610163">原文链接</a>
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
