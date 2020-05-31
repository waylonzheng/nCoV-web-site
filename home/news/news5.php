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
    <title>武汉声音日记｜缺氧是常态与“死神”对决</title>
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
<!-- 内容标签开始 -->
<div class="news">
    <div class="news_left">
        <div class="news_title">武汉声音日记｜缺氧是常态与“死神”对决</div>
        <div class="news_source">陈瑞 黄伊罕 编辑 刘娅静 郝思舜</div>
        <div class="news_date">2020-02-20 14:20:45</div>
        <div class="news_content">
        <p>在华中科技大学同济医学院附属同济医院光谷院区，记者见到了复旦大学附属华山医院支援武汉医疗队的队员们。护士长倪洁，和她所带领的9位临床能力比较强，重症监护室的护士们，发回了他们的声音。</p>
        <div class="news_img">
         <img src="../../image/ssdz.png" alt="">
        </div>
        <p>进入重症污染区，对护理的障碍较大。厚厚的防护服，两层隔离衣，两层帽子、手套和口罩，在这样的繁重包裹下，护士缺氧是常态。而到了后半夜，凌晨00:00~4:00的班次、4:00~8:00的班次，很多护士会有低血糖的反应，缺氧加重，甚至呕吐。这些困难他们都一一克服了，唯一的心愿是能够抢救更多的病人。</p>
        <p>这里的病患大多病情危重且棘手复杂，有不少插着呼吸机，也有患者在死亡边缘挣扎，抢救有时是无力的，但仍有鲜活的生命被从“死神”手中夺回！</p>
        <p>这里没有家属的陪伴，护士们就尽量给予一些类似于家人的关心和照顾。</p>
        <p> “我们为了同一个目标来到这里，携手共进、并肩作战。”</p>
        <p>“为了武汉人民的健康，能尽快取得胜利，付出的一切都是值得的，不算什么，责无旁贷！”</p>
        <p>“克服各种难关，然后抢救更多的病人。”</p>
        <p>“希望武汉这片土地能够破土重生，能够挺过这段疫情，能够绽放出美丽的笑容！”</p>
        <p>这是他们的心声，也是战“疫”天使的使命。</p>
        <div class="original">
            <a href="http://www.kankanews.com/a/2020-02-20/0039158271.shtml">原文链接</a>
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
