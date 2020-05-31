<?php
session_start();
$id;
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}
// 新闻
require_once("admin/news.php");
// 文献
require_once("admin/literature.php");
// 广东医
require_once("admin/gdmu.php");
// 资讯
require_once("admin/information.php");
// 数据
require_once("admin/data.php");
// 用户
require_once("admin/user.php");
// 建议
require_once("admin/suggest.php");
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>战疫百事通后台管理系统</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/iconfont.css">
</head>
<body>
 <!--顶部标签-->
    <div id="header">
        <div class="header">
            <div class="header_left">
                <a href="index.php"><span>战疫</span>百事通后台管理系统</a>
            </div>
            <div class="header_right">
				<?php 
					if(isset($id))
					{	
						echo "<div class='logout'><a href='home/logout.php'>退出</a></div>";
						echo "<div class='to_index'><a href='index.php'>前端界面</a></div>";
						echo "<div class='userid'>你好，{$id}(超级管理员)</div>";
					}?>
            </div>
        </div>
    </div>
    <!--顶部标签结束-->
    <!-- 侧边栏标签开始 -->
<aside class="sidebar">
    <nav class="nav">
        <a href="#news">疫情新闻</a>
        <a href="#literature">新冠文献</a>
        <a href="#gdmu">抗疫在广医</a>
        <a href="#bene">祝福墙</a>
        <a href="#word">热词云</a>
        <a href="#data">每日疫情</a>
        <a href="#line">疫情趋势</a>
        <a href="#user">用户</a>
        <a href="#suggest">建议</a>
    </nav>
</aside>
<!-- 侧边栏标签结束 -->
<!-- 资讯标签开始 -->
    <div class="news">
    <div class="news_top"><i class="icon-xinwen iconfont"></i>&nbsp;资讯
   <section id="news">
    <div class="article">
    	<div class="article_a"><a href="admin/add_news.php"><i class="icon-tianjia1 iconfont"></i>添加</a></div>
        <div class="article_title">疫情新闻</div>
        <div class="list">
    <table class="news_table">
    <tr>
    <th width="20%">文章标题</th>
    <th width="10%">文章作者</th>
    <th width="45%">原文链接</th>
    <th width="15%">发布时间</th>
    <th width="10%">操作选项</th>
    </tr>
    <?php
    foreach ($arrsNewss as $arrsNews) {
     ?>
    <tr>
    <td><?php echo $arrsNews['title']; ?></td>
    <td><?php echo $arrsNews['author']; ?></td>
    <td class="news_link"><?php $newsLink = $arrsNews['link']; echo "<a href='$newsLink' target='_blank' >$newsLink</a>"; ?></td>
    <td><?php echo $arrsNews['datetime']; ?></td>
    <td><a href="#" onClick="confirmDel5(<?php echo $arrsNews['newsid']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a>
    	/<a href="admin/change_news.php?newsid=<?php echo $arrsNews['newsid']; ?>"><i class="icon-tongzhi iconfont"></i>修改</a>
    </td>
    </tr>
    <?php }?>
    	<tr >
    		<td class="news_nav" colspan="5">
				<?php
					for($i=1;$i<=$pagesNews;$i++){
						if($pageNews==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageNews=$i#news'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
    </div>
</section>
<section id="literature">
    <div class="article">
    	<div class="article_a"><a href="admin/add_literature.php"><i class="icon-tianjia1 iconfont"></i>添加</a></div>
        <div class="article_title">新冠文献</div>
        <div class="list">
        <table class="news_table">
    <tr>
    <th width="20%">文章标题</th>
    <th width="10%">文章作者</th>
    <th width="48%">原文链接</th>
    <th width="12%">发布时间</th>
    <th width="10%">操作选项</th>
    </tr>
    <?php
    foreach ($arrsLiteratures as $arrsLiterature) {
     ?>
    <tr>
    <td><?php echo $arrsLiterature['title']; ?></td>
    <td><?php echo $arrsLiterature['author']; ?></td>
    <td class="news_link"><?php $literatureLink = $arrsLiterature['link']; echo "<a href='$literatureLink' target='_blank' >$literatureLink</a>"; ?></td>
    <td><?php echo $arrsLiterature['date']; ?></td>
    <td><a href="#" onClick="confirmDel3(<?php echo $arrsLiterature['literatureid']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a>
    	/<a href="#"><i class="icon-tongzhi iconfont"></i>修改</a>
    </td>
    </tr>
    <?php }?>
    	<tr >
    		<td class="news_nav" colspan="5">
				<?php
					for($i=1;$i<=$pagesLiterature;$i++){
						if($pageLiterature==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageLiterature=$i#literature'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
    </div>
</section>
<section id="gdmu">
    <div class="article">
    	<div class="article_a"><a href="admin/add_gdmu.php"><i class="icon-tianjia1 iconfont"></i>添加</a></div>
        <div class="article_title">广医新闻</div>
        <div class="list">
    <table class="gdmu_table">
    <tr>
    <th width="20%">文章标题</th>
    <th width="10%">文章作者</th>
    <th width="10%">文章类别</th>
    <th width="35%">原文链接</th>
    <th width="15%">发布时间</th>
    <th width="10%">操作选项</th>
    </tr>
    <?php
    foreach ($arrsGdmus as $arrsGdmu) {
     ?>
    <tr>
    <td><?php echo $arrsGdmu['title']; ?></td>
    <td><?php echo $arrsGdmu['author']; ?></td>
    <td><?php echo $arrsGdmu['category']; ?></td>
    <td class="news_link"><?php $gdmuLink = $arrsGdmu['link']; echo "<a href='$gdmuLink' target='_blank' >$gdmuLink</a>"; ?></td>
    <td><?php echo $arrsGdmu['datetime']; ?></td>
    <td><a href="#" onClick="confirmDel4(<?php echo $arrsGdmu['gdmuid']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a>
    	/<a href="admin/change_gdmu.php?gdmuid=<?php echo $arrsGdmu['gdmuid']; ?>"><i class="icon-tongzhi iconfont"></i>修改</a>
    </td>
    </tr>
    <?php }?>
    	<tr >
    		<td class="news_nav" colspan="6">
				<?php
					for($i=1;$i<=$pagesGdmu;$i++){
						if($pageGdmu==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageGdmu=$i#gdmu'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
</section>
<section id="bene">
    <div class="article">
        <div class="article_title">用户祝福</div>
        <div class="list">
    <!-- 祝福 -->
    <table class="bene_table">
    <tr>
    <th class="th_bene">祝福语</th>
    <th>操作选项</th>
    </tr>
    <?php
    foreach ($arrsBene as $arrsBene) {
     ?>
    <tr>
    <td><?php echo $arrsBene['benediction']; ?></td>
    <td><a href=""><i class="icon-shanchu1 iconfont"></i>删除</a></td>
    </tr>
    <?php }?>
    </table>
    </div>
    </div>
</section>
<section id="word">
    <div class="article">
    <div class="article_a"><a href="admin/add_hotword.php"><i class="icon-tianjia1 iconfont"></i>添加</a></div>
        <div class="article_title">抗疫热词</div>
        <div class="list">
    <!-- 祝福 -->
    <table class="word_table">
    <tr>
    <th>序号</th>
    <th>热词</th>
    <th>操作选项</th>
    </tr>
    <?php
    foreach ($arrsWords as $arrsWord) {
     ?>
    <tr>
    <td><?php echo $arrsWord['num']; ?></td>
    <td><?php echo $arrsWord['hotWord']; ?></td>
    <td><a href="#" onClick="confirmDel2(<?php echo $arrsWord['num']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a></td>
    </tr>
    <?php }?>
    	<tr>
    		<td class="word_nav" colspan="3">
				<?php
					for($i=1;$i<=$pagesWord;$i++){
						if($pageWord==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageWord=$i#word'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
    </div>
    </div>
    </div>
</section>
<div class="data">
<section id="data">
    <div class="data_top"><i class="icon-shujux iconfont"></i>&nbsp;数据</div>
    <div class="article_a"><a href="admin/add_dailystiuation.php"><i class="icon-tianjia1 iconfont"></i>添加</a></div>
    <div class="list">
    <div class="list_title">
    <!-- 每日数据 -->
    国内疫情数据<i class="icon-yiqingtianbao iconfont"></i>
    </div>
    <table class="data_table">
    <tr>
    <th>现存确诊</th>
    <th>累计确诊</th>
    <th>现存疑似</th>
    <th>境外输入</th>
    <th>累计死亡</th>
    <th>累计治疗</th>
    <th>日期</th>
    <th>操作选项</th>
    </tr>
    <?php
    foreach ($arrsData as $arrsData) {
     ?>
    <tr>
    <td><?php echo $arrsData['existingConfirmed']; ?></td>
    <td><?php echo $arrsData['cumulativeConfirmed']; ?></td>
    <td><?php echo $arrsData['existingSuspected']; ?></td>
    <td><?php echo $arrsData['outsideInput']; ?></td>
    <td><?php echo $arrsData['cumulativeDeath']; ?></td>
    <td><?php echo $arrsData['cumulativeRecovery']; ?></td>
    <td><?php echo $arrsData['date']; ?></td>
    <td><a href="#" onClick="confirmDel(<?php echo $arrsData['dateid']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a></td>
    </tr>
    <?php }?>
    </table>
    </div>
</section>
<section id="line">
    <div class="article_a"><a href="admin/add_linedata.php"><i class="icon-tianjia1 iconfont"></i>添加</a></div>
    <div class="list_title">
    <!-- 线图 -->
    
    国内疫情趋势<i class="icon-shuju3 iconfont"></i>
    </div>
    <table class="line_table">
    <tr>
    <th>新增确诊数</th>
    <th>境外输入数</th>
    <th>日期</th>
    <th>操作选项</th>
    </tr>
    <?php
    foreach ($arrsDatas as $arrsData1) {
     ?>
    <tr>
    <td><?php echo $arrsData1['newlyIncreased']; ?></td>
    <td><?php echo $arrsData1['outsideInput']; ?></td>
    <td><?php echo $arrsData1['date']; ?></td>
    <td><a href="#" onClick="confirmDel1(<?php echo $arrsData1['dataid']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a></td>
    </tr>
    <?php }?>
    	<tr >
    		<td class="line_nav" colspan="4">
				<?php
					for($i=1;$i<=$pagesData;$i++){
						if($pageData==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageData=$i#line'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
</section>
<section id="user">
    <div class="user">
    <div class="user_top"><i class="icon-ren iconfont"></i>&nbsp;用户</div>
    <div class="article_a"><a href=""><i class="icon-tianjia1 iconfont"></i>添加</a></div>
    <div class="list">
    <!-- 用户 -->
    <table class="user_table">
    <tr>
    <th>头像</th>
    <th>用户名</th>
    <th>邮箱</th>
    <th>身份</th>
    <th>操作选项</th>
    </tr>
    <?php
    foreach ($arrs as $arrs) {
     ?>
    <tr>
    <td><div class="user_photo">
                    <img src="image/photo.jpg" alt="">
                </div></td>
    <td><?php echo $arrs['id']; ?></td>
    <td><?php echo $arrs['email']; ?></td>
    <td><?php if($arrs['identity']=='超级管理员'){echo "<i class='icon-guanliyuan iconfont'></i>".$arrs['identity'];}else{echo $arrs['identity'];}  ?></td>
    <td><a href="admin/change_identity.php?id=<?php echo $arrs['id'];?>"><i class="icon-quanxian iconfont"></i>修改权限</a></td>
    </tr>
    <?php }?>
    	<tr >
    		<td class="line_nav" colspan="5">
				<?php
					for($i=1;$i<=$pagesUser;$i++){
						if($pageUser==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageUser=$i#user'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
    </div>
</section>
<!-- 用户标签结束 -->
<!-- 建议标签开始 -->
<section id="suggest">
    <div class="article">
        <div class="article_title"><i class="icon-xiaoxi iconfont"></i>用户建议</div>
        <div class="list">
    <!-- 祝福 -->
    <table class="suggest_table">
    <tr>
    <th style="width: 70%;">用户建议</th>
    <th style="width: 20%;">提出时间</th>
    <th style="width: 10%;">操作选项</th>
    </tr>
    <?php
    foreach ($arrsSuggests as $arrsSuggest) {
     ?>
    <tr>
    <td style=" text-align: left;padding:0 5px;"><?php echo $arrsSuggest['suggest']; ?></td>
    <td><?php echo $arrsSuggest['datetime']; ?></td>
    <td><a href="#" onClick="confirmDel6(<?php echo $arrsSuggest['suggestid']; ?>)"><i class="icon-shanchu1 iconfont"></i>删除</a></td>
    </tr>
    <?php }?>
    <tr >
    		<td class="suggest_nav" colspan="5" style="height: 40px;">
				<?php
					for($i=1;$i<=$pagesSuggest;$i++){
						if($pageSuggest==$i){
						echo"<span>$i</span>" ;
						}else
						{
						echo"<a href='?pageSuggest=$i#Suggest'>$i</a>" ;
						}
					}
					?>
			</td>
		</tr>
    </table>
    </div>
    </div>
</section>

    <!--底部标签开始-->
    <div id="bottom">
        <div class="bottom_top">
            <img src="image/logo3.png" alt="">
        </div>
        <div class="bottom_bottom">
        <p>"战疫百事通"是由沙漠骆驼小组共同制作的疫情相关网站，旨在收集、汇总最新疫情、抗疫事迹、疫情文献以及"抗疫在广医"等信息以便于用户了解情况。同时在这里祝祖国、全世界早日渡过难关，战胜病毒。</p></div>
    </div>
    <!--底部标签结束-->
</body>
<script type="text/javascript" src="js/delete_hotword.js"></script>
<script type="text/javascript" src="js/delete_gdmu.js"></script>
<script type="text/javascript" src="js/delete_line.js"></script>
<script type="text/javascript" src="js/delete_dailysituation.js"></script>
<script type="text/javascript" src="js/delete_news.js"></script>
<script type="text/javascript" src="js/delete_literature.js"></script>
<script type="text/javascript" src="js/delete_suggest.js"></script>
</html>
