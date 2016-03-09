<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ProBay</title>
<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style/css.css" />
</head>
<body background="images/back.jpg">
<div class="width=100% height=100% align-left"></div><div class="width=100% height=100% align-left"></div><div class="align-left"></div>
<div  style="display:none;"><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#115;&#101;&#120;&#109;&#97;&#109;&#98;&#97;.&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;.&#114;&#117;">&#1089;&#1077;&#1082;&#1089;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#97;&#109;&#117;&#114;&#112;&#108;&#97;&#110;&#101;&#116;.&#114;&#117;">&#1089;&#1072;&#1081;&#1090; &#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;</a></div><div class="padding valign-image-left"></div><div class="padding  valign-image-right"></div><div class="padding valign-image-center"></div>
	<div id="header">																																																		<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="http://www.greatdirectories.org">best web directories</a></h1><h1><a href="http://www.bestfreetemplates.org">best free templates</a></h1></div>
		<ul id="menu">
<li><img src="images/li.gif" alt="" width="19" height="29" /></li>
			<li><a href="index.php"><img src="images/but1_a.gif" alt="" width="90" height="29" /></a></li>
			<li><a href="index.php?view=all"><img src="images/but2.jpg" alt="" width="129" height="29" /></a></li>
			<li><a href="index.php?view=news"><img src="images/but3.jpg" alt="" width="127" height="29" /></a></li>
			<li><a href="index.php?view=about"><img src="images/but4.jpg" alt="" width="113" height="29" /></a></li>
			<li><a href="index.php?view=info"><img src="images/but5.jpg" alt="" width="160" height="29" /></a></li>
<li><a href="index.php?view=shipping"><img src="images/but6.jpg" alt="" width="105" height="29" /></a></li>
<li><a href="index2.html"><img src="images/but_layout.jpg" alt="" width="82" height="29" /></a></li>
<li><a href="index2.html"><img src="images/but_layout.jpg" alt="" width="112" height="29" /></a></li>
</ul>
</div>
<div id="container">
<div id="center" class="column">
<img src="images/logo.jpg" alt="" width="570" height="110" /></a><br />
<div id="content">
<div class="stuff">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/RAZR/views/pages/'.$view.'.php');
?>
			</div>
		</div>
	  </div>
	  <div id="left" class="column">
	  	<div class="block">
		<img src="images/title1.gif" alt="" width="178" height="42" /><br/>
			<ul id="navigation">
<?php
$categories = get_cat();
foreach($categories as $item):?>
				<li><p><a href="index.php?view=cat&id=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a></p><img src="images/raz.jpg" width="156"></li>
            <?php endforeach ?>
			</ul>
		</div>
		<!--<img src="images/banner1.jpg" alt="" width="168" height="130" />-->
	  </div>
	  <div id="right" class="column">
	  
		<div class="rightblock">
			
			<div class="blocks">
			<a href="index.php?view=cart"><img src="images/korz.gif"></a>
				<img src="images/top_bg.gif" alt="" width="218" height="12" />
				<div id="news">
				<img src="images/title5.gif" alt="" width="201" height="28" />
<?php
$news = get_last_news();
foreach($news as $item):?>
                	<span class="date"><?php echo $item['date'] ?></span>
					<p><?php echo $item['news'] ?></p>
					<?php endforeach ?>
					<a href="index.php?view=news" class="more">read more</a>
				</div>
				<img src="images/bot_bg.gif" alt="" width="218" height="10" /><br />
			</div>
		</div>
	  </div>
	</div>
	
	
<div style="position:absolute;left:-3072px;top:0"><div class="width=100% height=100% align-left"></div><div class="align-left" height="100"></div> <div class="align-left"></div> <div class="align-right"></div><div class="align-left"></div> <div class="align-left"></div> <div class="align-left"></div><div class="align-right"></div> <div class="align-left"></div><div class="align-right" alt="" height="100" width="1"></div> <div class="align-left" alt=""></div> <div class="align-center" height="76" width="100"></div><div class="align-left" alt="" height="67" width="1"></div> <div class="align-left" height="100" height="100" width="1"></div><div class="left"></div><div class="left"></div><!-- div --><!-- div end --><a href="http://unishablon.com/"><b>html</b></a><div alt="" class="align-right"></div><div class="align-left"></div><div class="left"></div><div class="align-left" alt="" height="67" width="1"></div><div class="align-left"></div><div class="left"></div><div class="left"></div><!-- div end --><div class="left" alt="" height="67"></div></div></body></html>
