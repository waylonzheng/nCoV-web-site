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
    <title>抗疫在广医</title>
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
            <a href="gdmu.php" id="this">抗疫在广医</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="us.php">关于我们</a>
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
<!-- 宣传页标签开始 -->
    <div class="view">
        <img src="../image/gdy.png" alt="">
    </div>
<!-- 宣传页标签结束 -->
<div class="gdmu">
    <div class="gdmu_left">
    <a href="gdmu/gdmu1.php"  target="_blank">
        <img src="../image/gdmu1.png" alt="">
        <div class="img_show"><div class="img_show1"><p>坚定扛起疫情防控“先锋队”和“尖刀连”责任——学校成立防控办临时党支部</p></div></div>
                </a>
    </div>
    <div class="gdmu_right">
        <div class="gdmu_more"><a href="gdmu/gdmu.php" target="_blank">更多&nbsp;+</a></div>
        <div class="Rtop"><i class="icon-liebiao1 iconfont"></i>广医战疫</div>
        <a href="gdmu/gdmu1.php"  target="_blank"><div class="Rlist1">
            <h1>坚定扛起疫情防控“先锋队”和“尖刀连”责任——学校成立防控办临时党支部</h1>
            <p>2月4日下午，学校通过网络视频方式在两校区第一会议室、在校党员办公室及部分住家党员家中召开新型冠状病毒感染的肺炎疫情防控领导小组办公室临时党支部成立大会。党支部成立旨在发挥党员先锋模范作用，让党员同志冲在防疫一线，以此带动其他人员积极参与到防…</p>
        </div></a>
        <div class="Rlist2">
            <a href="gdmu/gdmu2.php"  target="_blank"><div class="Rlist_left">同心战“疫”、共盼春来——我校为国（境）外师生寄送爱心包裹</div></a>
            <div class="Rlist_right">[2020-03-31]</div>
        </div>
        <div class="Rlist">
            <a href="gdmu/gdmu3.php"  target="_blank"><div class="Rlist_left">疫情中的温情│广东医科大学600多万专项资金“硬核”助学</div></a>
            <div class="Rlist_right">[2020-03-30]</div>
        </div>
        <div class="Rlist">
            <a href="gdmu/gdmu4.php"  target="_blank"><div class="Rlist_left">云端实习，以“技”抗疫——第二临床医学院开设《口腔临床实习辅导》网络课程</div></a>
            <div class="Rlist_right">[2020-03-23]</div>
        </div>
            <div class="Rlist">
            <a href="gdmu/gdmu5.php"  target="_blank"><div class="Rlist_left">防控新型冠状病毒│广东医科大学：以艺战“疫” 声入仁心</div></a>
            <div class="Rlist_right">[2020-03-20]</div>
        </div>
        <div class="Rlist">
            <a href="gdmu/gdmu6.php"  target="_blank"><div class="Rlist_left">战“疫”︱昔日“非典”尖兵，今朝驰援荆州，他说：“我只是做一个医生该做的事而已。”</div></a>
            <div class="Rlist_right">[2020-02-24]</div>
        </div>
        <div class="Rlist">
            <a href="gdmu/gdmu7.php"  target="_blank"><div class="Rlist_left">战“疫”︱广东医战“疫”夫妻黎焯基、陈婷：一个上“前”线，一个守“疫”线</div></a>
            <div class="Rlist_right">[2020-02-12]</div>
        </div>
    </div>
</div>
<!-- 相册标签开始 -->
<div class="wrap_tital">
<div class="wtext"><i class="icon-xiangce1 iconfont"></i>&nbsp;相册</div>
<div class="wslogan">想念学校了吗？百事通带你云返校看风景</div>
</div>
<div id="wrap">
    <div class="banner">
      <img src="../image/lbt1.png" width="1080" height="430" alt="轮播图1">
    </div>

    <div class="banner">
      <img src="../image/lbt2.png" width="1080" height="430" alt="轮播图2">
    </div>

    <div class="banner">
      <img src="../image/lbt3.png" width="1080" height="430" alt="轮播图3">
    </div>

    <div class="banner">
      <img src="../image/lbt4.png" width="1080" height="430" alt="轮播图4">
    </div>

    <div class="banner">
      <img src="../image/lbt5.png" width="1080" height="430" alt="轮播图5">
    </div>
	<div class="gdmu_photo">
		<a href="gdmu/photo.php" target="_blank">查看更多+</a>
	</div>
    <div class="tab">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="prev"></div>
    <div class="next"></div>
  </div>
<!-- 相册标签开始 -->
<!-- 精彩校园开始 -->
<div class="school">
    <div class="school_left">
            <div class="class_title"><i class="icon-xuexiao iconfont"></i>停课不停学</div>
            <div class="class_list">
            <a href="gdmu/gdmu8.php"  target="_blank">
                <div class="Clist1">
                    <div class="Clist1_img">
                        <img src="../image/one.jpg" alt="">
                    </div>
                    <div class="Clist1_text">
                        <h1>战“疫”在线 打造“老师不下课的课堂” ——卢景辉书记、校长检查指导公共卫生学院开学工作</h1>
                        <p>3月2日上午，学校卢景辉书记校长、党办赖炎烽主任、教务处谢培豪处长以及宣传部、教务处有关同志一行到公共卫生学院了解和指导学院新学期开学工作。学院倪进东院长、王辉群书记等党政领导班子全体成员参加了座谈，会议由倪进东院长主持。</p>
                    </div>
                    </div></a>
                    <div class="Clist2">
            <div class="Clist2_left" ><a href="gdmu/gdmu9.php" target="_blank">疫情期间的科研工作</a></div>
            <div class="Clist2_right">[2020-04-03]</div>
            </div>
            <div class="Clist">
            <div class="Clist_left"><a href="gdmu/gdmu10.php" target="_blank">对标争先│马克思主义学院党总支第二党支部积极组织党员讲好中国抗疫故事</a></div>
            <div class="Clist_right">[2020-04-02]</div>
            </div>
                <div class="Clist">
            <div class="Clist_left"><a href="gdmu/gdmu11.php" target="_blank">对标争先│共战疫情，图书馆党支部一直在行动</a></div>
            <div class="Clist_right">[2020-03-26]</div>
            </div>
             <div class="Clist">
            <div class="Clist_left"><a href="gdmu/gdmu12.php" target="_blank">云端实习，以“技”抗疫——第二临床医学院开设《口腔临床实习辅导》网络课程</a></div>
            <div class="Clist_right">[2020-03-23]</div>
            </div>
            <div class="Clist">
            <div class="Clist_left"><a href="gdmu/gdmu13.php" target="_blank">对标争先│马克思主义学院党总支第二党支部积极组织党员讲好中国抗疫故事</a></div>
            <div class="Clist_right">[2020-03-20]</div>
            </div>
            <div class="Clist">
            <div class="Clist_left"><a href="gdmu/gdmu14.php" target="_blank">居家不误求职季­——战“疫”时期科学指导研究生就业</a></div>
            <div class="Clist_right">[2020-03-01]</div>
            </div>
            <div class="Clist">
            <div class="Clist_left"><a href="gdmu/gdmu15.php" target="_blank">“疫期在线，一临行动”——2020年春季学期在线教学工作准备就绪</a></div>
            <div class="Clist_right">[2020-02-29]</div>
            </div>

            <div class="Clist">
            <div class="Clist_right"><a href="gdmu/gdmu.php" target="_blank">查看更多+</a></div>
            </div>
        </div>
    </div>
    <div class="school_center">
        <img src="../image/bg.png" alt="">
    </div>
    <div class="school_right">
        <div class="act_title"><i class="icon-xuexiao_banji iconfont"></i><span>&nbsp;</span>精彩线上活动</div>
        <div class="act_list">
            <a href="gdmu/gdmu16.php" target="_blank">
                <div class="Alist1">
                    <div class="Alist1_img">
                        <img src="../image/sj.jpg" alt="">
                    </div>
                    <div class="Alist1_text">
                        <h1>广东医科大学第十六届大学生校园文体艺术节暨第七届生命文化节云端开幕</h1>
                        <p>突如其来的疫情，让我们无法回到熟悉的校园，校园文体艺术节暨生命文化节从不缺席，同学们期待已久的“双节”如约而至。</p>
                    </div>
                </div></a>
                <div class="Alist2">
            <div class="Alist2_left"><a href="gdmu/gdmu17.php" target="_blank">Photoshop启动！第四届PS挑战大赛！ </a></div>
            <div class="Alist2_right">[2020-04-1]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu18.php" target="_blank">广东医科大学推文制作大赛 | 下一个人气小编就是你！</a></div>
            <div class="Alist_right">[2020-04-01]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu19.php" target="_blank">家乡文化秀活动</a></div>
            <div class="Alist_right">[2020-04-01]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu20.php" target="_blank">搜索之星|百度无限 等你称霸</a></div>
            <div class="Alist_right">[2020-04-01]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu21.php" target="_blank">第三届“别具疫阁”宿舍文化大赛</a></div>
            <div class="Alist_right">[2020-04-01]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu22.php" target="_blank">叮！你收到一个关于新冠肺炎的科普大赛的讯息哦！</a></div>
            <div class="Alist_right">[2020-04-01]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu23.php" target="_blank">墨宝聚力量 同心战疫情</a></div>
            <div class="Alist_right">[2020-04-01]</div>
            </div>
            <div class="Alist">
            <div class="Alist_left"><a href="gdmu/gdmu24.php" target="_blank">UP主大赛 | 点进来 当UP主！</a></div>
            <div class="Alist_right">[2020-3-31]</div>
            </div>
            <div class="Alist">
            <div class="Alist_right"><a href="gdmu/gdmu.php" target="_blank">查看更多+</a></div>
            </div>
        </div>
    </div>
    </div>
<!-- 精彩校园结束 -->
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
<script src="../js/picture.js"></script>
</html>
