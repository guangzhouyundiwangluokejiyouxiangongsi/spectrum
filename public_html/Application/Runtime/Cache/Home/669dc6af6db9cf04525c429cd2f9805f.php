<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/Public/img/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />  
	<title>云谱详情</title>
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/y_detail.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/landscape.css">
	<script type="text/javascript" src="/Public/mobile/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/mobile/js/public.js"></script>
</head>
<style>
	.bds_tools{margin-bottom: -0.0253rem  !important;text-align: center !important;}
	#bdshare .bds_more{background-image: none  !important;text-align: center !important;margin-bottom: -0.026rem; white-space:nowrap;}
	#bdshare .bds_more span{margin-top: 10px; }
	#bdshare img.bds_more{float: left;margin: -0.03rem 4px 0 0;padding-left: 0.6rem;}
	.share>#bdshare{float: none;display: inline-block;}
	.share>#bdshare>span{font-size: 0.2021rem;line-height: 0.2863rem;font-family: "黑体";padding: 0;padding-right: 0.6rem;}
	.share span{float: left;}
	.bds_tools span{float: left;}
	#bdshare_l{display: none  !important;}


</style>
<body>
	<!-- 头部 -->
	<div class="header">
		
			<a class="sort_back" href="javascript:history.go(-1)"><img src="/Public/mobile/img/sort_back.png"></a>
			<a class="header_title">
				<img src="<?php echo ($company["com_logo"]); ?>">
				<span><?php echo ($company["com_name"]); ?></span>
			</a>
			<a class="sort_search" href="search.html"><img src="/Public/mobile/img/sort_search.png"></a>
			<span style="display: none;" id="com_id"><?php echo ($company["com_id"]); ?></span>
	</div>
	
	<div class="y_content">
		<!-- banner -->
		<div class="y_banner">
			<img src="<?php echo ($img); ?>">
		</div>

		<div class="message_box">
			<!-- 公司介绍 -->
			<div class="y_message">
				<div class="y_title">
					<span>公司介绍</span>
				</div>
				<?php echo ($company["com_synopsis"]); ?>
			</div>
			
			<!-- 发展历程 -->
			<div class="y_message">
				<div class="y_title">
					<span>发展历程</span>
				</div>
				<?php echo ($company["com_history"]); ?>
			</div>
			<!-- 公司业务 -->
			<div class="y_message">
				<div class="y_title">
					<span>公司业务</span>
				</div>
				<?php echo ($company["com_service"]); ?>
			</div>
			<!-- 公司荣誉 -->
			<div class="y_message honor">
				<div class="y_title">
					<span>公司荣誉	</span>
				</div>
				<?php echo ($company["com_honor"]); ?>
				
			</div>
			<!-- 公司文化 -->
			<div class="y_message">
				<div class="y_title">
					<span>公司文化</span>
				</div>
				<?php echo ($company["com_culture"]); ?>
			</div>
			<!-- 官网直达 -->
			<div class="y_message through">
				<div class="y_title">
					<span>官网直达</span>
				</div>
				<?php if(is_array($company[com_url])): foreach($company[com_url] as $key=>$vv): ?><p><a href="http://<?php echo ($vv); ?>"><?php echo ($vv); ?></a></p><?php endforeach; endif; ?>
			</div>

			<!-- 媒体报道 -->
			<div class="y_message media">
				<div class="y_title">
					<span>媒体报道</span>
				</div>
				<?php if(is_array($media)): foreach($media as $key=>$vo): ?><p><a href="http://<?php echo ($vo["med_url"]); ?>"><?php echo ($vo["med_title"]); ?></a><?php echo ($vo["med_source"]); ?></p><?php endforeach; endif; ?>
			</div>

		</div>
		
		<div class="y_bottom">
			<p>云狄网络版权所有</p>
			<p>粤ICP备16076354号</p>
		</div>

	</div>
	<!-- 底部导航 -->
	<div class="footer ">
		<a class="num">
			<img src="/Public/mobile/img/y_detail_icon1.png">
			<span>浏览量 · <i><?php echo ($company["com_visit"]); ?></i></span>
		</a>
		<a class="goodnum" onclick="dianzan()">
			<img src="/Public/mobile/img/y_detail_icon2.png">
			<span>点赞 · <i class="dianzan"><?php echo ($company["com_praise"]); ?></i></span>
		</a>
		<a class="share">
				<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" >
				<img src="/Public/mobile/img/y_detail_icon3.png" class="bds_more">
				<span class="bds_more">分享</span>
				</div>
		</a>
	</div>

	<div class="backtop">
		<img src="/Public/mobile/img/backtop2.png">
	</div>
</body>
</html>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<script type="text/javascript">
function dianzan(){
	$.post('/Mobile/ajax_thumb',{'id':$('#com_id').html()},function(res){
		if (res.status == 1){
			$('.goodnum').find('img').attr("src","/Public/mobile/img/y_detail_icon21.png");
			$('.goodnum').removeAttr('onclick');
			$('.dianzan').html(parseInt($('.dianzan').html())+1);
		}else{
			alert(res.msg);
		}
	})
}
	$(function(){
		// 顶部公司名长度限制
		var company=$('.header_title span').html();
		if (company.length > 13) {  
		    var newText = company.substring(0,12)+"...";  
		    $('.header_title span').html(newText);  
		}  
	})
</script>