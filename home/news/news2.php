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
    <title>亲爱的，这次换我来当“后勤部长”</title>
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
        <div class="news_title">亲爱的，这次换我来当“后勤部长”</div>
        <div class="news_source">叶钧 应冠文 唐晓蒙 孔权</div>
        <div class="news_date">2020-02-23 20:30:13</div>
        <div class="news_content">
        <p>从上海一批批奔赴武汉的医护人员中，护士占据了半壁江山，他们和医生们一样，也承受着巨大的压力和风险。今天我们要来认识其中的一位，她是华东医院重症监护室的护士长陈贞，现在她已经在武汉 金银潭医院的ICU里工作了整整一个月，而他的儿子今年即将高考，以往经常外派去紧急救治的外科大夫丈夫涂彦渊，这次转变身份，当起了家里的后勤部长。</p>
        <p>一周前，一场大雪为武汉裹上一层银白。在金银潭医院北三ICU病区，早班医护人员又开始了一天的忙碌。</p>
        <p>华东医院重症监护室护士长援鄂护士陈贞说，现在的自己属于一个年中无休状态，每天大概7点20分左右到医院里面，随后就是巡床，准备物资，清洁打扫。</p>
        <div class="news_img">
         <img src="../../image/hqbz.png" alt="">
        </div>
        <p>快人快语的陈贞是上海华东医院的护士长，也是大年夜赴汉的第一批上海援鄂医疗队成员。第一天踏进金银潭医院ICU病房的情景，陈贞印象深刻。她跑出ICU交代的第一句话就是：“一个人管四个病人，基本就是极限了。”</p>
        <p>病区收治的都是最危重的患者，医护人员和医疗物资又非常匮乏，情况比想象得更严峻。陈贞却主动请缨，承担了最危险的呼吸机插管任务。</p>
        <p>长年在ICU工作，陈贞知道离病人越近，就越有暴露的可能。但既然做了，就索性一担到底，“那些高风险的操作都我来，我也不想让大家暴露在这个当中。”</p>
        <p>人手紧张、病人情况复杂，几乎每位护士的工作时长都一延再延，陈贞深感歉疚又无能为力，只能自己尽可能多顶一会儿。她有些吐槽得抱怨自己，有一次排班排了8个小时，也很崩溃，就是想这些事情尽量能够做到大家都满意。</p>
        <p>前方医疗队的工作压力可想而知，但每每与家人视频通话时，陈贞却总是举重若轻。</p>
        <p>“你看到我的鼻子了吗？”“看到了呀，回来变成塌鼻子了。”“你好吗在上海，听说学会很多菜了。”“还行，回来帮你汇报演出。”“好啊，我回来你不要偷懒哦！”</p>
        <p>视频这头是陈贞的丈夫，涂彦渊。他是华东医院的外科大夫，在爱人支援前线的这段时间里，拿惯了手术刀、不太做家务的涂医生不得不拿着菜刀学起了烧菜。儿子今年读高三，这段时间一直在家复习，妈妈不在家，一日三餐全靠这位新手煮夫 跟着网络菜谱现学。他得意的告诉记者，这段时间来已经学会了40多个菜。</p>
        <p>冲水，改刀，爆炒，半个多小时，三道菜就上了桌，涂医生还不忘拍个视频传给老婆审阅。涂医生说，武汉一线天天都是突发状况，队员之间也可能身体不舒服，还有精神压力。陈贞过去除了日常工作，还要负责部分管理和心理疏导，那么最能帮上爱人的，就是尽可能给陈贞正面的信息，让她放松。</p>
        <p>12年前，涂医生参与过汶川地震后的救治工作，后来还曾赴云南半年进行医疗支援，对于前线的压力特别能感同身受。然而这次情况特殊，他说他能做的就是做好后勤工作，让老婆没有后顾之忧。</p>
        <p>“外科医生比较尴尬，道理上是我应该冲出去，但从专业角度来说，我们外科医生在这方面不是最专业。”</p>
        <p>每天吃晚饭的时候，涂医生父子俩都会守着电视机看新闻，不管是陈贞的还是医疗队的镜头，即便一晃而过，也会让他们激动好半天。</p>
        <p>看着忙前忙后的妈妈，儿子阳阳也很揪心，“视频的时候她样子比较憔悴，感觉她天天这么长时间工作好辛苦，比较心疼她。”</p>
        <p>好在后续物资和人手已逐步到位，不少患者也开始好转，前方医疗队的工作正越来越顺畅。</p>
        <p>除了救治工作，护士门还特别有耐心，经常去跟病人聊一聊，或者写一些加油的话给患者，鼓励他们积极治疗。前方战役仍在继续，涂医生说会好好照顾即将高考的儿子，等待爱人凯旋。</p>
        <p>两夫妻连团圆后，想实现的第一个愿望都如出一辙。涂彦渊说，“我等她回来了以后，可以给她做个饭看看，最终的大裁判来评判下，到底怎么样，我想及格肯定没问题。”</p>
        <p>而陈贞说，“回到上海，我最想做的事情，先拥抱一下我的我的的先生儿子吧，然后我想我也需要进厨房为他们做一顿菜！”</p>
        <p>在一线奋战的医护人员团队中，护士团队是非常重要的一支力量，他们需要贴身照护确诊病人，从医疗需求到生活料理，还需要安抚病人的情绪，他们也是这次抗击疫情的战场上最可爱的人，期待你们早日回家，与家人们一起吃上那顿盼望已久的团圆饭。</p>
        <div class="original">
            <a href="http://www.kankanews.com/a/2020-02-23/0039161815.shtml">原文链接</a>
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
