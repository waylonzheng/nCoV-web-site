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
    <title>新冠百科</title>
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
            <a href="literature.php" id="this">新冠百科</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="benediction.php">祝福助威</a>
             <i class="icon-anjianfengexian iconfont"></i>
            <a href="gdmu.php">抗疫在广医</a>
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
        <img src="../image/bk.jpg" alt="">
    </div>
<!-- 宣传页标签结束 -->
<!-- 简介标签开始 -->
<div class="intro">
<div>简介</div><p>“新冠百科”的文献来源于中国知网、万方医学网等各大平台，集成了国内外权威机构已发布或发表的新型冠状病毒相关指南、共识及期刊文献题录，读者通过点击文献标题可跳转来源网站获取详细内容。该文库旨在为医务人员、科研人员及相关工作者的学习及工作提供全面广泛的参考。</p>
</div>
<!-- 简介标签结束 -->
<!-- 文献标签开始 -->
<div class="literature">
<div class="liter_top">
<span>┃</span>
国家卫健委
<i class="icon-jiantou iconfont" id="this_icon"></i>
</div>
<a href="http://www.nhc.gov.cn/xcs/zhengcwj/202003/46c9294a7dfe4cef80dc7f5912eb1989/files/ce3e6945832a438eaae415350a8ce964.pdf" target="_blank"><div class="liter_content1">1. 新型冠状病毒肺炎诊疗方案（试行第七版）国家卫健委2020/03/04</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/yzygj/s7652m/202003/a31191442e29474b98bfed5579d5af95.shtml" target="_blank">2. 《新型冠状病毒肺炎诊疗方案（试行第七版）》解读国家卫健委2020/03/04</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/xcs/zhengcwj/202003/61d608a7e8bf49fca418a6074c2bf5a2/files/a5e00234915344c6867a3e6bcfac11b7.pdf" target="_blank">3. 新冠肺炎康复者恢复期血浆临床治疗方案（试行第二版）国家卫健委2020/03/04</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/yzygj/s3590/202003/ce59f4f132f644bf898ece0b0eece50b.shtml" target="_blank">4. 《新冠肺炎康复者恢复期血浆临床治疗方案（试行第二版）》解读国家卫健委2020/03/04</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/yzygj/s7652m/202002/54e1ad5c2aac45c19eb541799bf637e9.shtml" target="_blank">5. 《新型冠状病毒肺炎诊疗方案（试行第六版）》解读国家卫健委2020/02/19</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/xcs/zhengcwj/202002/8334a8326dd94d329df351d7da8aefc2/files/b218cfeb1bc54639af227f922bf6b817.pdf">6. 新型冠状病毒肺炎诊疗方案（试行第六版）国家卫健委2020/02/19</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/yzygj/s7652m/202002/41c3142b38b84ec4a748e60773cf9d4f.shtml" target="_blank">7. 新型冠状病毒肺炎诊疗方案（试行第五版 修正版）解读国家卫健委2020/02/08</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/xcs/zhengcwj/202002/d4b895337e19445f8d728fcaf1e3e13a/files/ab6bec7f93e64e7f998d802991203cd6.pdf" target="_blank">8. 新型冠状病毒肺炎诊疗方案（试行第五版 修正版）国家卫健委2020/02/08</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/yzygj/s7652m/202002/e84bd30142ab4d8982326326e4db22ea.shtml" target="_blank">9. 新型冠状病毒感染的肺炎诊疗方案（试行第五版）解读国家卫健委2020/02/05</a></div>
<div class="liter_content"><a href="http://www.nhc.gov.cn/xcs/zhengcwj/202002/3b09b894ac9b4204a79db5b8912d4440/files/7260301a393845fc87fcf6dd52965ecb.pdf" target="_blank">10. 新型冠状病毒感染的肺炎诊疗方案（试行第五版）国家卫健委2020/02/05</a></div>
<div class="liter_content2"><a href="literature/literature.php">更多</a></div>
</div>
<div class="literature2">
<div class="liter_top">
<span>┃</span>
WTO
<i class="icon-jiantou iconfont" id="this_icon"></i>
</div>
<a href="http://www.chinacdc.cn/jkzt/crb/zl/szkb_11803/jszl/202002/P020200218281530253710.pdf"><div class="liter_content1">1. 世界卫生组织2019新型冠状病毒少数最初病例调查方案（第二版 中文翻译稿）中国CDC2020/02/18</a></div>
<div class="liter_content"><a href="http://www.chinacdc.cn/jkzt/crb/zl/szkb_11803/jszl/202002/P020200212488103333895.pdf" target="_blank">2. 世界卫生组织医疗机构中医务人员2019新型冠状病毒感染的潜在危险因素评估方案（中文翻译稿）中国CDC2020/02/12</a></div>
<div class="liter_content"><a href="http://www.chinacdc.cn/jkzt/crb/zl/szkb_11803/jszl/202002/P020200210350339120212.pdf" target="_blank">3. 世界卫生组织2019新型冠状病毒少数最初病例调查方案（中文翻译稿）中国CDC2020/02/10</a></div>
<div class="liter_content"><a href="http://www.chinacdc.cn/jkzt/crb/zl/szkb_11803/jszl/202002/P020200210349660246204.pdf" target="_blank">4. 世界卫生组织2019新型冠状病毒家庭传播调查方案（中文翻译稿）中国CDC2020/02/10</a></div>
<div class="liter_content"><a href="http://www.chinacdc.cn/jkzt/crb/zl/szkb_11803/jszl/202002/t20200204_212240.html" target="_blank">5. 新型冠状病毒之世卫组织答疑解惑中国CDC2020/02/04</a></div>
<div class="liter_content"><a href="http://medline.org.cn/news/newsPreview.do?newsId=16332" target="_blank">6. WHO最新指南：2019-nCoV相关重症感染临床指南（中文首译版）中华医学网2020/02/02</a></div>
<div class="liter_content"><a href="https://www.who.int/zh/news-room/q-a-detail/q-a-coronaviruses" target="_blank">7. 世卫组织：有关新型冠状病毒的常见问题WHO2020/01/18</a></div>
<div class="liter_content2"><a href="literature/literature.php">更多</a></div>
</div>
<!-- 文献标签结束 -->
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
