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
    <title>战“疫”︱广东医战“疫”夫妻黎焯基、陈婷：一个上“前”线，一个守“疫”线</title>
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
        <div class="news_title">战“疫”︱广东医战“疫”夫妻黎焯基、陈婷：一个上“前”线，一个守“疫”线</div>
        <div class="news_source">广东医科大学</div>
        <div class="news_date">2020-02-12</div>
        <div class="news_content">
        <p>自从抗疫战开始，自从年三十第一支医疗队伍出征开始，虽然你没说，但是我知道，你已经做好了出征的准备，我知道，只要有需要，你必定请战。报名前，你没和我说；报名后，你和我说。你说，作为一名党员，战斗在祖国最需要的一线，是自己的责任和义务，哪怕明知有风险；</p>
        <div class="news_img">
         <img src="../../image/fq.png" alt="">
        </div>
        <p>你说，作为一名医生，我要去做我应该做的，哪怕明知有风险；

<p>你说，作为最懂你的我，一定会支持你的，哪怕明知有风险；</p>

<p>是的……</p>
<p>我懂，医者使命，责任所在，担当所在，你的决定是对的，我会全力支持你；</p>

<p>我懂，但是作为最心疼你的人，我支持你，但我更想自私的提出，如果可以的话，我希望我能代替你上前线；</p>

<p>我想，所有的家属和我心情都是一样的，有不舍，有担心，有牵挂，但是仍然会坚定的选择支持你们的决定，会做好你们的坚强后盾。</p>

<p>我会对你们说，放心，家里有我！你在前方战斗，我在后方守护！</p>

<p>我会对家里老人说，你儿子是我们的骄傲，我们要好好的，让他安心工作！</p>

<p>我会对家里小屁孩说，爸爸是现实版的奥特曼，打怪兽去了，我们要为他加油！</p>

<p>而你！你只管照顾好自己！保护好自己！治病救人！平安归来！</p>

<p>出发是为了更好的团圆，坚守定能迎来春暖花开，我们一定能战胜这场疫情！</p>

<p>最后，我想说，我答应你的，我不掉眼泪，我努力做到！你答应我的，平安回来，请务必做到！</p>
        <p>这是一位妻子在丈夫驰援湖北的出征仪式上的发言，这也是千千万万医护人员家属的心声。我校防疫办陈婷、附属第二医院重症医学科黎焯基这对战“疫”夫妻，一个勇上“前”线，一个坚守“疫”线。 对于申请驰援湖北，这对夫妻其实心照不宣。她知道他肯定会报名，但是她从来不过问，直到他告诉她：“作为一名党员，战斗在祖国最需要的一线，是自己的责任和义务；作为一名医生，我要去做我应该做的。”黎焯基是重症医学科主持工作的副主任，他第一个报名，但是第一批去的人里没有他的名字，宣布当天，他很失落：“我是科里的带头人，有什么危险的事应该我先顶上，然后我的兄弟再去。而不是让我的兄弟先去冲锋。”</p>
        <p>陈婷深知先生性格，所以第二批入选后，她虽然万般不舍，却也默默理解和支持，因为她自己也是不折不扣的“工作狂”。“今天的数据，请查收。”即便是先生出征的当天，她也没有放下手头的工作，如常在群里上交整理的学校日报的数据和材料。疫情发生后学校成立防控办以来，陈婷每天要奋战到深夜才能完成繁琐的数据整理和上报工作。她有“强迫症”，每一个数据都要核对几次她才发出去。她是“完美主义”，哪怕标点符号她也不放过。工作群里，她随传随到。生活里，她是知心伙伴，比她大的亲切地称呼她“小陈”，比她小的信任地称呼她“姐”。已有四个月身孕，大家叮嘱她注意身体，她像“拼命三郎”一样日夜奋战，乐观地回复道：“放心，我身体很好。”</p>
        <p>这对夫妻其实是朋友同事眼里的“神仙伴侣”。作为广东医科大学00级临床医学专业的同班同学，他们在愚人节那天表白相恋，他们异地恋五年，他们在广东医校庆日5月23日那天结婚。当时，为了爱情，江门人黎焯基辞去家乡条件优渥的工作来到湛江。第二年，黎焯基的父母也退休来到湛江与儿子儿媳相聚。黎焯基的奶奶舍不得孙子，但开明的黎妈妈说：“毕竟要跟儿子过下半辈子的是他的妻子，既然他做了选择，我们就要支持他。”</p>
        <p>儿子这次出征前，尽管疫情严重不宜出门，黎妈妈还是多次外出商场和超市为儿子准备征战的生活物品，生怕漏掉了任何一个可能用得上的东西。孩子们劝她说不要出去太危险了，她嘴上答应，在大家不注意的时候又把出征需要的物品买了回来。黎焯基说：“妈妈知道我要去湖北，从头到尾没有说过一句要我怎么样的话，就是默默的帮我打理好一切行装。” 出征队伍里，黎焯基的光头尤为显眼。在大家的印象里，黎焯基就是一个阳光大男孩，对什么都充满信心。他爽朗地告诉记者：“我们一定会赢，每一个人都会平安归来。”从没有看过丈夫光头的陈婷告诉我们，头发是她昨晚半夜一点钟时帮忙剃的，这是她第一次给人剃头发。视觉上虽然有些不适应，但是想到在前线光头更安全，心里便无比踏实。 早上黎焯基出征，与还在睡梦中的儿子击掌说了声再见，就直接出门了。回来陈婷告诉孩子爸爸去打怪兽了，懂事的儿子儿子自编了一个“奥特曼爸爸大战新冠肺炎怪兽”故事让妈妈录给爸爸看，他说：“我相信，以爸爸的勇敢和智慧，一定会赢！”(文/宣传部 图/陈丽娜 吴志华 编/周圆 审/谭秋浩)</p>
        <div class="original">
            <a href="https://www.gdmu.edu.cn/info/1405/9333.htm">原文链接</a>
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
