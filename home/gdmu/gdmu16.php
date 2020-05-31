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
    <title>广东医科大学第十六届大学生校园文体艺术节暨第七届生命文化节云端开幕</title>
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
        <div class="news_title">广东医科大学第十六届大学生校园文体艺术节暨第七届生命文化节云端开幕</div>
        <div class="news_source">团委</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <p>“云端文体艺术节暨生命文化节，它真的来了！”一条推文在微信朋友圈疯传，一个晚上单篇阅读量达到3.7万次。突如其来的疫情，让我们无法回到熟悉的校园，宅家学习，也是为抗疫贡献一份力量。线上学习之余，我们一样也有丰富多彩的线上活动，校园文体艺术节暨生命文化节从不缺席，同学们期待已久的“双节”如约而至。3月31日晚8点，学校党委常委、副校长曾志嵘在线上宣布：广东医科大学第十六届大学生校园文体艺术节暨第七届生命文化节现在开幕！</p>
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>“实在是太激动了，没想到宅在家里还能参与学校的活动，在开幕视频里看到那么多熟悉的面孔，突然很想学校，很想老师和同学了……”线上开幕后，第一临床医学院2018级陈嘉欣同学说道。</p>
        <p>本届双节以“生命的旋律，青春的战役”为主题”，首次采取“云”方式，让同学们宅家也能参加丰富多彩的“云”活动，以一种全新的方式感受不一样的精彩。共有22个项目在本届双节活动中成功立项，其中既包括广医好声音，英语配音大赛等受广大师生喜欢的品牌项目，又有人体解剖学绘图大赛，药膳大赛，线上音乐分享会，“搜索之星”大赛等与专业知识生动结合的项目，还有首次举办的“镜”在掌控-“疫”起记录视频大赛、原创诗歌朗诵比赛极具参与力的大赛，今年“双节”将掀起一场关于生命和战“疫”的活动热潮！</p>
        <p>学校卢景辉书记校长在开幕式上与团团君连线对话，寄语同学们：立德树人是学校办学的根本任务，培养德智体美劳全面发展、综合素养高的医学人才是我们一直的努力方向。在防控疫情的情况下，学校通过“不返校、先上课，教师不停教、学生不停学”开展线上教育教学。与此同时，为了拉近同学们间的网上距离，学校积极组织线上艺术作品征集、线上主题团日活动，将第一课堂与第二课堂移上网络，开展丰富多彩轻松快乐的体育、艺术、美术、音乐、娱乐活动，让校园文化和文体艺术活动在云端绽放。现在，每年春季学期热闹的校园文体艺术节、生命文化节如期而至、正式上线。希望同学们在宅家专业学习的同时，通过“云”方式，积极参与到不一样的文体艺术和生命文化“双节”中来，体验在家参加“双节”活动的乐趣和收获！</p>
        <p>第一临床医学院2019级蒙小梅同学表示，“双节线上举行增加了宅家的乐趣，配音、舞蹈、推文、书法……范围广泛，看来大家都能pick一份自己感兴趣的活动啦！特殊时期，以特殊形式出现的双节活动，仿佛使我回到了春日的广东医校园！”</p>
        <p>“双节”都来了，那个相聚的“春天”还会远吗？待到南海天色新、松湖水暖时，我们在水秀花香的映月湖、春花烂漫的紫荆道感受春天的美好！</p>
        <p>据悉，本届“双节”由学校党委宣传部、学生工作部、教务处、团委、生命文化研究院联合主办，所有项目将在线上开展，历时三个月。（文/张素琼 张语恒 图/校团宣 编/周圆 审/冯锦山）</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1050/9313.html">原文链接</a>
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
