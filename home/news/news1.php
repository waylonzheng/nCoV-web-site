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
    <title>战疫玫瑰｜在前线流下的泪水 不敢让家人看到</title>
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
        <div class="news_title">战疫玫瑰｜在前线流下的泪水 不敢让家人看到</div>
        <div class="news_source">叶钧 王抒灵 唐晓蒙 李响</div>
        <div class="news_date">2020-03-08 10:00:50</div>
        <div class="news_content">
        <p>在陈言灏的记忆里，这已经不是妈妈第一次因为工作而离家这么长时间。</p>
        <p>陈言灏的第一反应就是“不要去那边，那么危险，万一感染上怎么办”。但是妈妈说必须要去，如果所有人都不去的话，疫情就会蔓延开来，后果会很严重。</p>
        <p>那天以后，李静怡护士长的岗位从上海的中山医院，移动到了武汉大学人民医院。</p>
        <div class="news_img">
         <img src="../../image/zcmg.png" alt="">
        </div>
        <p>第一天进入隔离病房，李静怡在手术衣外还穿了一套工作服。两套布的衣服，到脱下防护服的时候，已经全部被汗水湿透。</p>
        <p>这是李静怡工作的常态，但是陈言灏知道这些细节，却并不是通过每天的视频电话。</p>
        <p>怕他们担心，李静怡把前方医院的情况说得轻描淡写。于是，信息的来源变成了电视和报纸，各种新闻报道。</p>
        <p>2月13日，李静怡的丈夫陈勇在《解放日报》上看到一张照片。他一眼认出，照片最右边那个被严严实实包裹在蓝色工作服里的瘦瘦的身影就是李静怡。</p>
        <p>心底的牵挂，都被陈勇藏在一个个接连不断寄往武汉的包裹里。</p>
        <p>这些包裹里，有李静怡喜欢吃的巧克力。陈勇说，妻子瘦，容易低血糖，现在穿上防护服往往一工作就是七八个小时，中间没有办法吃东西，也不能喝水，每次穿防护服前吃这些高糖高热量的，能扛得住。包裹里还有安神香，睡前点上有安神助眠的作用。</p>
        <p>往往是想起什么，陈勇就赶紧寄过去；如果可以，他怕是要把家里有用的东西都给李静怡搬过去。</p>
        <p>在陈勇和陈言灏父子的印象里，李静怡是处变不惊的资深护士长，冷静、干练。细腻的情感被李静怡折叠好藏进了白大褂里。</p>
        <p>但是在武汉的李静怡面对镜头时，还是忍不住哭了。不是因为辛苦，也不是因为劳累，她的眼泪为病人而流。“有的人和家里人就在救护车面前见了一面，你到这家医院我到另外一家医院，没有想到就是永别了，就再也见不到了。所以就更加觉得，我一定要把事情做好，我们一定要把这个疫情早点结束掉。”</p>
        <p>妈妈哭了，陈言灏有些不敢相信。毕竟在他心里，妈妈一直都是那么坚强，那么勇敢。</p>
        <p>即便是陈勇，也很吃惊。沉默之后陈勇说：“看起来她的工作比她跟我们说的要辛苦得多。</p>
        <p>同样，思念的话、担心的话，上海的家里人也从未在电话里说起过。在这个特殊的时期，为了给彼此一份安心，需要割舍的情绪实在是太多。</p>
        <div class="original">
            <a href="http://www.kankanews.com/a/2020-03-07/0039177429.shtml">原文链接</a>
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

