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
    <title>关于我们</title>
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/iconfont.css">
</head>
<body>
<!-- 顶部标签开始 -->
<div id="header">
    <div class="header">
        <div class="header_left">
        <a href="../index.php"><img src="../image/logo3.png" alt=""></a>
        </div>
        <div class="header_center">
            <a href="situation.php" >最新疫情</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="story.php">抗疫事迹</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="literature.php">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="gdmu.php">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="us.php"  id="this">关于我们</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="more.php">更多</a>
        </div>
        <div class="header_right">
				<?php 
					if(isset($id))
					{	
						if($identity == "超级管理员")
						{
							echo "<div class='logout'><a href='logout.php'>退出</a></div>";
							echo "<div class='to_admin'><a href='../admin.php'>进入后台</a></div>";
							echo "<div class='userid'>您好，{$id}(超级管理员)</div>";
						}else
						{
						echo "<div class='logout'><a href='logout.php'>退出</a></div>";
						echo "<div class='userid'>您好，{$id}</div>";
						}
					}else
					{
						echo "<a href='login.php' target='_blank' class ='register'>注册</a>";
						echo"<a href='login.php' target='_blank' class = 'login'><i class='icon-ren iconfont'></i>登录</a>";
						
					}?>
                
            </div>
    </div>
</div>
<!-- 顶部标签结束 -->
<!-- 内容标签开始 -->
<!-- 侧边栏标签开始 -->
<aside class="sidebar">
    <div class="avatar">
        <img src="../image/td.png"/>
    </div>
    <nav class="nav">
        <a href="#team">简介</a>
        <a href="#web">网站</a>
        <a href="#log">经历</a>
    </nav>
</aside>
<!-- 侧边栏标签结束 -->
<!-- 团队简介标签开始 -->
<section id="team">
<div class="team">
    <div class="team_top"><i class="icon-xuexiao_banji iconfont"></i>&nbsp;团队简介</div>
    <div class="team_intro">沙漠骆驼小组来自广东医科大学的信息资源管理专业，他们分别来自2017级与2018级。由于信资专业并没有开设任何前端课程，所以在接触这个比赛之前，他们根本没有接触过任何前端方面的知识，这个网页的任何内容都是他们现学现做的，所以他们被称为“不专业团队”</div>
    </div>
</section>
<!-- 团队简介标签结束 -->
<!-- 网页简介标签开始 -->
 <section id="web">
    <div class="web">
    <div class="web_top"><i class="icon-liebiao iconfont"></i>&nbsp;网站简介</div>
    <div class="web_intro">
        <div class="web_que"><i class="icon-icon-test iconfont"></i>为什么叫战疫百事通？</div>
        <div class="web_ans">因为这是一个关于疫情的集成网站，我们希望用户通过这个网站，能够满足疫情期间的所有需求，所以叫战疫百事通。</div>
        <div class="web_que"><i class="icon-icon-test iconfont"></i>战疫百事通面向的用户群是哪些？</div>
        <div class="web_ans">战疫百事通的用户群从狭义上讲是广医的全体师生，因为它的口号正是“广医人的疫情百事通”。但是百事通上面还有很多疫情消息，所以从广义上讲他的用户群也可以是社会上的任何人。</div>
        <div class="web_que"><i class="icon-icon-test iconfont"></i>制作战疫百事通的目的是什么？</div>
        <div class="web_ans">我们制作战疫百事通的直接目的当然是参加比赛，但是这并不是我们的唯一目的，我们希望打造一款能够真正搬上服务器，迈向网络，供更多人使用的疫情网站。与此同时，我们也希望能够在制作的过程当中学习更多的东西。</div>
    </div>
    </div>
</section>
<!-- 网页简介标签结束 -->
<!-- 项目历程标签开始 -->
<section id="log">
        <div class="log">
            <div class="web_top"><i class="icon-xinwen iconfont"></i>&nbsp;项目经历</div>
            <div class="row">
                <div class="col-m-8">
                    <ul class="timeline">
                        <li><span>Day 1/2020 03 23</span>：小组成立，起名为沙漠骆驼，
由于小组成员大部分人没有接触过前端课程，于成立当天就开始分配工作、展开学习</li>
                        <li><span>Day 3/2020 03 25</span>：小组决定制作一个集成网站，希望通过这个网站实现关于疫情的所有功能；
所以我们将这个网站暂时命名为“战疫专题网站”；
而我们的slogan是：广医人的疫情百事通</li>
                        <li><span>Day 6/2020 03 28</span>：完成网站素材的收集</li>

                        <li><span>Day 7/2020 03 29</span>：完成网站首页的制作以及各个页面的基本布局</li>
                        <li><span>Day 8/2020 03 30</span>：完成“最新疫情”页面的制作，但是疫情地图使用的是GitHub上面的代码</li>
                        <li><span>Day 9/2020 03 31</span>：完成“祝福助威”以及“更多”页面的制作</li>
                        <li><span>Day 10/2020 04 01</span>：完成“新冠百科”界面的制作并开始着重加强网页的深度，
“祝福助威”界面风格与其他不符的问题待解决</li>
                        <li><span>Day 11/2020 04 02</span>：技术受限，网页制作进程暂停，
开始学习echarts在疫情地图方面的应用</li>
                        <li><span>Day 12/2020 04 03</span>：删除原先照搬的疫情地图，改用自制的疫情地图；
解决了先前别人的代码需要连网卡顿的问题，
但是还不能获取实时数据，数据需要手工录入</li>
                        <li><span>Day13/2020 04 04</span>：加强抗疫事迹页面的深度；完成了抗疫在广医页面的制作；补充了登录、注册界面；优化了祝福助威界面
为了呼应slogan，网站正式命名为“战疫百事通”</li>
                        <li><span>Day14/2020 04 05</span>：补充了抗疫在广医页面的内容;添加了24篇广医相关文章、17篇新冠文献以及7篇抗疫新闻</li>
                        <li><span>Day15/2020 04 06</span>：对各个页面的交互性进行了优化</li>
                        <li><span>Day16/2020 04 07</span>：开始钟南山院士专栏的制作</li>
                        <li><span>Day17/2020 04 08</span>：技术受限，网页制作进程暂停;学习如何实现3D翻页效果</li>
                        <li><span>Day18/2020 04 09</span>：完成了钟南山院士专栏的制作;至此，战疫百事通所有版块都完成制作</li>
                        <li><span>Day19/2020 04 10</span>：优化了最新疫情界面;网站前端工作全部完成，历时19天</li>
                        <li><span>Day20/2020 04 11</span>：开始网站后台的学习;计划启用PHP+apache+MySql来搭建网站后台</li>
                        <li><span>Day30/2020 04 21</span>：完成数据库搭建以及最新数据的录入</li>
                        <li><span>Day41/2020 05 02</span>：将整个项目投放至服务器中</li>
                        <li><span>Day44/2020 05 05</span>：开始网站的后台设计</li>
                        <li><span>Day49/2020 05 10</span>：完成网站后台的基本搭建（疫情地图、各地区疫情数据除外）；开始对前面的前端界面进行模板化修改。</li>
                        <li><span>Day53/2020 05 14</span>：实现了用户登录的功能</li>
                        <li><span>Day54/2020 05 15</span>：实现了注册用户的功能，并且加入了”超级管理员”这个概念；开始对网站的安全性进行加强，对密码采取md5加密</li>
                        <li><span>Day55/2020 05 16</span>：对登录/注册窗口的SQL语句使用了PDO数据预处理技术，以防止SQL注入式攻击</li>
                        <li><span>Day59/2020 05 20</span>：添加了登陆验证，密码错误三次则跳出登录界面，以防止暴力登陆</li>
                        <li><span>Day68/2020 05 29</span>：全网竣工</li>
                    </ul>
                </div>
         </div>
    </div>
</section>
<!-- 项目历程标签结束 -->
<!-- 内容标签结束 -->
        <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="../image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
</html>
