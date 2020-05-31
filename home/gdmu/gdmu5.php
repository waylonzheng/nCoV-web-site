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
    <title>防控新型冠状病毒│广东医科大学：以艺战“疫” 声入仁心</title>
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
        <div class="news_title">防控新型冠状病毒│广东医科大学：以艺战“疫” 声入仁心</div>
        <div class="news_source">谢孝东</div>
        <div class="news_date">2020-03-20</div>
        <div class="news_content">
        <p>艺术塑造仁心。自新冠肺炎疫情暴发以来，在广东医科大学，有这样一个“声”入仁心的艺术阵地。多名师生员工和医护工作者从广东医人生动感人的战“疫”故事中汲取灵感，自发创作了六首脍炙人口的战“疫”之歌。这些温暖而坚定的歌曲，传递着广东医人出征时的坚决，艰难时刻的坚守，危险时刻的抗争，即将胜利的喜悦和宣示未来的勇敢。 </p>
        <p>广东医科大学附属医院ICU男护士林康兴作为首批援鄂医疗队队员紧急驰援湖北。背后的故事是，为了援鄂，推迟了婚期婚礼。说起请战支援湖北的初衷，林康兴表示：“自己较早参与收治新冠肺炎患者的工作，比较有经验，能帮助更多的人。”</p>
        <p>广东医科大学附属医院ICU男护士林康兴作为首批援鄂医疗队队员紧急驰援湖北。背后的故事是，为了援鄂，推迟了婚期婚礼。说起请战支援湖北的初衷，林康兴表示：“自己较早参与收治新冠肺炎患者的工作，比较有经验，能帮助更多的人。”</p>
        <p>以白衣战袍换婚纱礼服，林康兴在湖北荆州战“疫”，其女友在湛江守疫线。“林康兴和女友舍小家为大家的故事，是我们医护人员的一个缩影，把他们的感人故事用歌曲传唱下来，可以激励更多的人。”总策划、附属医院党委副书记林挺葵谈到。</p>
        <p>于是，战“疫”主题歌曲《天使恋人》的MV和微电影就这样诞生了。</p>
        <p>在湖北石首的林康兴一脱下厚厚的防护服，有时间就会看看这个MV。他说：“非常温馨，非常感动，虽然我们推迟了婚期和婚礼，但是我们的爱情会更有意义。” 前不久，林康兴在火线递交了入党申请书。</p>
        <p>3月7日，正好是林康兴和队友出征湖北“满月”的日子。在大家的共同努力下，石首市中医医院新冠肺炎病人已全部清零，病人们全部出院回家。</p>
        <div class="original">
            <a href="https://article.xuexi.cn/articles/index.html?art_id=16440710515692772388">原文链接</a>
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
