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
    <title>墨宝聚力量 同心战疫情</title>
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
        <div class="news_title">墨宝聚力量 同心战疫情</div>
        <div class="news_source">GDMU墨趣</div>
        <div class="news_date">2020-04-01</div>
        <div class="news_content">
        <div class="news_img">
         <img src="../../image/sj.jpg" alt="">
        </div>
        <p>现如今，疫情逐渐得到了控制，为积极响应我校第十六届大学生校园文体艺术节暨第七届生命文化节活动，墨趣书法协会联合二院团委学生会举办此次青春战“疫” 生命传承书法大赛。</p>
        <p>本次活动旨在：
让同学们对于此次疫情了解地更加深刻
执起手中笔书写下内心的情感</p>
        <p>主办：
广东医科大学党委宣传部、学生工作部
教务处、团委生命文化研究院
校学生会、学生社团联合会</p>
        <p>承办：
广东医科大学墨趣书法协会
第二临床医学院团委学生会</p>
        <p>在这特殊时期
让我们以墨为范，以书战“疫”
先共同欣赏一下书法家们的作品吧 </p>
        <div class="news_img">
         <img src="../../image/sf.jpg" alt="">
        </div>
        <p>活动对象：
广东医科大学全体学生</p>
        <p>活动时间：</p>
        <p>4月7-16日  线上报名</p>
        <p>4月16-18日  进行筛选</p>
        <p>4月19-21日中午12点  进行投票</p>
        <p>4月22日     公布结果</p>
        <p>活动形式：</p>
        <p>（一）投稿：本次活动通过居家创作，线上投稿的方式进行，可提交软笔，硬笔等相关书法作品，文体不限，数量不限，字数不限，主题与此次抗疫相关即可。作品初步筛选后将在公众号以及相关媒体上推送。请于2020年4月16日前扫描以下二维码进行报名</p>
        <div class="news_img">
         <img src="../../image/sf1.jpg" alt="">
        </div>
        <p>作品要求：软笔作品尺寸不超过四尺宣纸（69cm×138cm），JPG格式，大小不低于3M；硬笔作品尺寸不超过A4纸大小，笔色为黑色，报送要求：JPG格式，大小不低于3M。</p>
        <p>（二）奖项：为公平起见，本着人气与实力并重的原则，根据投票数决定最佳人气奖，专家评委及墨趣字体组组长评定一二三等奖。</p>
        <div class="news_img">
         <img src="../../image/sf2.jpg" alt="">
        </div>
        <div class="original">
            <a href="https://mp.weixin.qq.com/s/aQbQ020mECyLmjwW7Q8rrg">原文链接</a>
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
