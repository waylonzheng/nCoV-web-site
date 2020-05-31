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
    <title>战“疫”在线 打造“老师不下课的课堂” ——卢景辉书记、校长检查指导公共卫生学院开学工作</title>
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
        <div class="news_title">战“疫”在线 打造“老师不下课的课堂” ——卢景辉书记、校长检查指导公共卫生学院开学工作</div>
        <div class="news_source">卫杰</div>
        <div class="news_date">2020-03-03</div>
        <div class="news_content">
        <p>3月2日上午，学校卢景辉书记校长、党办赖炎烽主任、教务处谢培豪处长以及宣传部、教务处有关同志一行到公共卫生学院了解和指导学院新学期开学工作。学院倪进东院长、王辉群书记等党政领导班子全体成员参加了座谈，会议由倪进东院长主持。</p>
        <div class="news_img">
         <img src="../../image/one.jpg" alt="">
        </div>
        <p>倪进东院长首先对卢书记校长一行百忙之中亲临学院检查指导表示欢迎和感谢，接着主要就学院线上课程准备工作进行汇报。在确保疫情防控工作安全的前提下，学院确定了“分阶段、明确目标、逐级推进”的线上课程建设总体原则，在具体实施中开展了3个“三”举措：一是结合全校工作安排和进度，学院分别在2月13日、23日和29日通过网络召开三次培训、动员及部署会议；二是明确线上课程建设三个阶段性目标：第一阶段重点解决（线上教学资源）“有没有”问题，第二阶段重点从老师和学生角度测试线上课堂使用“行不行”问题，第三阶段关注开展的“好不好”；三是实行三级负责制，即课程负责人、系主任和包干学院领导，压实责任，确保线上教学顺利开展。倪进东院长还对学院线上教学特色进行汇报，如牵头完成了学校新冠肺炎健康教育课程；通过多名教师的加班加点，学院制作完成了三个突发公共卫生事件应急处理的虚拟仿真实验项目即将挂网；“停课不停学”，通过线上交流学院的卓越公卫班、启点工作室及循证健康教育小组等在指导老师带领下一直关注着疫情，引导着学生从实践中学习。另外对学院开展的国自然申报、新年伊始两名研究生发表高水平论文情况进行了汇报。</p>
        <p>王辉群书记简要汇报了学院师生疫情防控和开学工作总体情况。一是统筹做好疫情防控工作和学院正常工作。学院1月28日召开党委会议以来，召开了多次会议，采取了多项举措，确保疫情防控和学院正常工作两不误两促进。二是做好学院当前教师教和学生学两个阶段性重点工作，结合专业特点，强化课程思政，建立了线上教学简报和在线上课困难学生个体化解决预案等。三是认真落实好学校教学工作“十个一”和课程建设“八个一”要求，学生工作开展好九个“一”系列活动等。</p>
        <p>卢景辉书记、校长首先对学院近期开展的各项工作表示了充分肯定，认为学院能根据当前疫情形势和教学要求，对各项工作有统筹安排，工作推进阶段性目标明确，推进层次清晰。卢景辉书记、校长进一步指出，新冠肺炎疫情给我们带来严峻挑战，但也让全社会充分认识到了公共卫生、预防医学的重要性，国家和全社会都一致提出加强公共卫生体系建设、加大公共卫生人才培养力度，挑战与机遇并存，希望学院充分梳理新冠肺炎疫情防控中暴露的公共卫生问题，早做谋划，乘势而为，首先在教学方面，要认识到当前开展的利用线上教学工作中潜在的教学手段、教学方式改革的机会，积极引导学院老师探索先进的教育手段，全力提升教学水平和人才培养质量。其次要充分利用学院现有良好基础，抓住学院事业发展契机，大力促进学科专业发展。最后全体教师要坚持一切为了学生的初心，努力打造好“老师不下课”的线上课堂，在教学上做到精益求精；针对当前长时间居家学习可能带来的心理压力，要重视对在家学生心理的及时疏导，千方百计克服困难，解决问题。（图文/卫杰 编/周圆 审/谭秋浩）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1406/9772.htm">原文链接</a>
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
