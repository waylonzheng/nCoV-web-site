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
    <title>国士无双｜钟南山院士专栏</title>
    <script type="text/javascript" src="../../js/booklet/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="../../js/booklet/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../../js/booklet/jquery.booklet.1.1.0.min.js"></script>
    <link href="../../js/booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="../../css/page.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="../../js/book.js"></script>
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
            <a href="../story.php" id="this">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="../gdmu.php">抗疫在广医</a>
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
<!-- 宣传页标签开始 -->
    <div class="view">
        <img src="../../image/zns3.png" alt="">
    </div>
<!-- 宣传页标签结束 -->
<!-- 内容标签开始 -->
<div class="zns_title">
    <div class="zns_title_left"><span>┃</span>&nbsp;钟南山何许人？</div>
</div>
<div class="zns">
    <div class="zns_left">
        <img src="../../image/zns.jpg" alt="">
    </div>
    <div class="zns_right">
        <div class="zns_text">
            <h1>钟南山 <span>ZHONGNANSHAN</span></h1>
            <p>1936年10月，钟南山出生于南京，父亲钟世藩是中国著名的儿科专家，母亲廖月琴则是广东省肿瘤医院的创始人之一。</p>
            <p>1992年5月至2002年12月，钟南山担任广州医学院院长、党委书记。</p>
            <p>1996年5月，当选为中国工程院院士。</p>
            <b>2003年，“非典”爆发，以钟南山为代表的医护工作者经长期努力，抗击了非典。</b>
            <p>2004年，被评为“感动中国2003年度”十大人物之一。</p>
            <p>2005年4月13日，当选中华医学会第23届会长。</p>
            <p>2009年9月10日，被评为“100位新中国成立以来感动中国人物”。</p>
            <b>2020年2月18日，新冠肺炎在中国武汉爆发，钟南山夜驰武汉，赶赴前线。</b>
            <p>2020年3月3日至4日，钟南山与欧洲呼吸学会候任主席安妮塔·西蒙斯博士进行视频连线，向欧洲呼吸学会介绍了中国抗击新冠肺炎疫情的成果和经验。</p>
        </div>
    </div>
</div>
<div class="zns_title">
    <div class="zns_title_left"><span>┃</span>&nbsp;一本书带你了解钟南山</div>
</div>
<div class="book_wrapper">
	<a id="next_page_button"></a>
	<a id="prev_page_button"></a>
	<div id="loading" class="loading">Loading pages...</div>
	<div id="mybook" style="display:none;">
		<div class="b-load">
			<div>
				<img src="../../image/zns11.jpg" alt=""/>
				<h1>中国有座“山”：钟南山</h1>
				<p>悬壶济世、无私奉献。二十一世纪以来，每当中国陷入疫情的危害，总有一位老者挺身而出，带领一众白衣战士，逆行前进，对抗疫魔。这一位老者正是接下来我们要介绍的钟南山。中国工程院院士，著名呼吸病学专家士，也是中国二十一世纪以来两次抗击疫情的领军人。</p>
			</div>
			<div>
				<img src="../../image/zns12.jpg" alt="" />
				<h1>钟南山与“非典”</h1>
				<p>2003年，“非典”爆发，钟南山敢于直言，向世界披露了“非典”的真实情况，他研究的治疗方法，使中国人摆脱了死亡阴影。难以相信，当时奔波在前线的这位年迈老者已经是67岁的高龄。因此，抗疫英雄，便是许多人对钟老的第一印象。</p>
			</div>
			<div>
				<img src="../../image/zns13.jpg" alt="" />
				<h1>医学生内科学第一页的男人</h1>
				<p>对于学医的人来说，但凡接触过《内科学》这本书的学子都会留意到封面上“钟南山”三个大字。显然，这本令医学生“脑阔疼”的大部头，正是出自这位老者之手。</p>
			</div>
			<div>
				<img src="../../image/zns14.png" alt="" />
				<h1>2020年1月18号，逆行武汉</h1>
				<p>2020年1月18日上午，时年84岁的钟南山正在召开一个紧急会议，讨论昨天在深圳看完的两例病人的情况。会议刚开到一半，接到通知，上级请钟南山院士去武汉看看，而且必须“今天就到”。由于春运，往武汉方向的火车票早已销售一空，最终钟老在餐车车厢内找到一个位置坐下，开始了他长达数月的战疫之旅。</p>
			</div>
			<div>
				<img src="../../image/zns15.jpg" alt="" />
				<h1>2020年1月20日：宣布病毒会人传人</h1>
				<p>2020年1月20日晚上九点接受中央广播电视总台《新闻1+1》的采访。匆匆回到酒店吃饭，稍微准备了下采访的事情，就马上跟主持人白岩松进行了连线，也是他最早在镜头前对疫情提出警告：肯定人传人。</p>
			</div>
			<div>
				<img src="../../image/zns4.jpg" alt="" />
				<h1>1月21日，建议大家不要去武汉</h1>
				<p>1月21日，在广州举行的发布会吸引了全国媒体的目光。钟南山告诉大家：新型冠状病毒感染的肺炎暂无特效药，要严格隔离患者、追踪密切接触者，如无必要不去武汉，要戴口罩自我保护，要阻止出现“超级传播者”…… </p>
			</div>
			<div>
				<img src="../../image/zns16.jpeg" alt="" />
				<h1>1月25日,给一线医务人员拜年</h1>
				<p>大年初一。早上九点，和几位院领导一起到广医附一医院给大家拜年，致以新春问候。奋战在抗疫一线的医务人员真的很辛苦。</p>
			</div>
			<div>
				<img src="../../image/zns17.png" alt="" />
				<h1>1月30日，钟南山院士在飞机上处理工作</h1>
				<p>明天还有很多重要事情需要处理，今晚必须赶回广州，所以下午六点，会议一结束就急匆匆向机场飞驰。在车上，北京卫视还对他进行了一个非常紧急的采访。抵达广州已经是晚上10点多了。</p>
			</div>
			<div>
				<img src="../../image/zns19.jpg" alt="" />
				<h1>2月1日，确认病毒主要通过飞沫传染</h1>
				<p>经过几日的研究，钟南山团队确定了病毒存在近距离飞沫传播，除此之外，钟南山团队发现病毒有通过其他途径传播的迹象。</p>
			</div>
			<div>
				<img src="../../image/zns20.jpeg" alt="" />
				<h1>2月2日，钟南山认为病毒还可能存在粪口传播</h1>
				<p>在央视记者的采访中，钟南山说到：“新型冠状病毒有可能通过粪口传播。现在这个问题应该非常重视，因为在粪便里发现病毒，粪便是否传染病毒值得高度警惕。在湖北、江西有些地方，确实有使用便桶习惯，还放在鱼塘里洗，确实要引起防控注意。”</p>
			</div>
			<div>
				<img src="../../image/zns18.jpg" alt="" />
				<h1>2月11日,与前线远程会诊</h1>
				<p>首次与湖北前线医务人员远程会诊，由于昨晚睡眠不好，面带倦容。上午接受了路透社的采访，他们一共问了26个问题，感觉回答得还不错，总体采访效果很好，采访顺利结束。</p>
			</div>
			<div>
				<img src="../../image/zns21.jpeg" alt="" />
				<h1></h1>
				<p></p>
			</div>
			<div>
				<h1>3月6日，题词一首“寄少年”</h1>
				<p>钟院士认真阅读了每封疫情期间小朋友的来信，并亲自回信，写下了对青少年的寄语：用知识缝制铠甲，不远的将来，各行各业都将由你们披甲上阵。希望你们不惧艰辛、勇敢前行！</p>
				<img src="../../image/zns9.jpg" alt="" id="img1" />
				</div>
			<div>
				<img src="../../image/zns22.jpg" alt=""/>
			</div>
			<div>
			<div class="book_end">
			以<br>上<br>&nbsp;<br>就<br>是<br>我<br>们<br>所<br>熟<br>知<br>的<br>钟<br>南<br>山<br>。
			</div>
			</div>
		</div>
	</div>
</div>
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
