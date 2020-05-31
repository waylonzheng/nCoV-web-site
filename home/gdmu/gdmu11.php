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
    <title>对标争先│共战疫情，图书馆党支部一直在行动</title>
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
        <div class="news_title">对标争先│共战疫情，图书馆党支部一直在行动</div>
        <div class="news_source">管进</div>
        <div class="news_date">2020-03-26</div>
        <div class="news_content">
        <p>疫情就是命令，防控就是责任。新型冠状病毒肺炎疫情发生以来，图书馆党支部坚决贯彻党中央的决策部署，按照上级和学校党委全面加强疫情防控的各项工作通知要求，以党支部凝聚党员，以党员带动群众，充分发挥党支部的战斗堡垒作用和党员先锋模范作用，统筹兼顾疫情防控和读者服务工作，做到“两不误、两促进”。</p>
        <p>提高政治站位，强化疫情防控责任担当</p>
        <p>图书馆党支部充分认识疫情防控的极端重要性和紧迫性，把疫情防控作为当前重大政治任务和最重要的工作来抓。在政治上思想上行动上坚决同党中央保持高度一致，组织全体党员认真学习领会、坚决贯彻落实习近平总书记的重要讲话和重要指示精神，以及中央、省市和学校关于做好新型冠状病毒肺炎疫情防控工作有关精神，提高政治站位，强化责任担当，动员全馆力量，切实采取有效措施，以积极投身疫情防控工作的实际行动践行增强“四个意识”、坚定“四个自信”、做到“两个维护”。</p>
        <p>加强组织领导，有效落实学校疫情防控部署</p>
        <p>图书馆严格按照上级和学校有关疫情防控工作的具体要求和工作部署，成立图书馆疫情防控领导小组及防控排查、宣传工作、信息服务与教学工作、安全保障、工作督导5个工作小组，制定了《广东医科大学图书馆疫情防控工作方案》，深化《图书馆疫情防控环境卫生与消毒方案》、《图书馆疫情防控入馆流量控制与检测方案》、《疫情时期图书馆网络教学工作方案》等一系列具体的行动方案及操作流程，切实做到守土有责、守土担责、守土尽责。支部同时加强疫情防控工作监督和责任追究。监督各工作组及负责人的防控工作，保障图书馆各项防控措施落实到位，工作有担当、推进快、见实效。</p>
        <p>筑牢战斗堡垒，全面做实做细疫情防控工作</p>
        <p>图书馆党支部深入做好全体党员的发动动员工作，把党的政治优势、组织优势、密切联系群众优势转化为疫情防控的强大工作优势，确保防控措施落到实处。图书馆自1月24日起全面闭馆，是高校图书馆最早响应疫情防控要求的一员。闭馆后，图书馆主动作为，全体馆员保持在岗在线状态，安排居住在两校区内的人员坚持在馆值班，随时备勤接受任务安排、处置疫情防控相关工作。学校正式上班后，对应文献资源建设、信息服务等各项业务工作，安排人员在两校区同时轮值到岗坐班，同时全馆正常开展线上各项服务工作。</p>
        <p>图书馆党支部加强舆情管理，传播正能量。成立图书馆疫情防控工作群，利用微信等新媒体发布并组织全馆人员学习贯彻上级和学校有关文件、防控知识技能、法律知识等，适时发布《广东医科大学图书馆给读者的一封信》，保持开展线上读者服务不断线，携手读者共同抗击疫情。</p>
        <p>图书馆构建并坚持信息报送机制，保障疫情防控信息工作落实落细，坚决执行学校“日报告”和“零报告”制度。为了将疫情防控的重要性宣传到位，确保个人信息填报的完整性和准确性，党员同志主动做群众的思想工作，通过多种方式对接联系做好帮扶，确保全覆盖。图书馆全体人员从1月23日起坚持每天晚八点、第二天早八点两次报告有关疫情防控的个人信息，有效保证图书馆职工防疫信息的及时上报。</p>
        <p>发挥模范作用，凝聚力量全面做好服务</p>
        <p>疫情是大考，是试金石，检验着党员同志的政治品质和能力担当。图书馆党支部号召全体党员以实际行动战斗在防控疫情的文献资源保障和信息服务最前线，充分发挥先锋模范的带头作用。</p>
        <p>滞留湖北乡镇的李梅老师克服种种困难，在重大公共卫生事件的疫情重灾区现身说教，给我校卫生检验与检疫专业学生上一堂非常有意义的《文献检索》课；以党员为主体的查新队伍，在疫情防控期间又是查新高峰期间，查新员经常会忙到深夜，甚至是通宵达旦，只为尽快将查新报告发送到医务工作者手中；为确保图书馆疫情防控信息不遗漏，负责疫情信息填报的同志以高度负责的政治责任感和严谨细致的工作作风，及时掌握每一位馆员的行程动态、健康状况，准确填报各项疫情防控信息数据，并一直坚持由馆长审核、提交。此外，支部党员还踊跃参加学校的疫情防控志愿者活动，参与湛江市的疫情防控宣传活动……这些既要有落实具体工作的耐心细心，也要有主动请战、冲锋在前的勇气，党员同志发挥出各自的专业技能和敬业精神，用实实在在的工作实绩彰显先锋模范作用，彰显党组织战斗堡垒的红色力量！</p>
        <p>图书馆党支部将始终带领全馆党员、职工，在战“疫”中践行初心使命，在战“疫”中服务师生，对标新思想、新要求、新标准，知行合一齐争先。（文/图书馆 编/周圆 审/冯锦山）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1406/9962.htm">原文链接</a>
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
