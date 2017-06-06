<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/Public/img/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />  
	<title>云谱搜索</title>
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/search.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/landscape.css">
	<script type="text/javascript" src="/Public/mobile/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/mobile/js/public.js"></script>
	<script type="text/javascript" src="/Public/mobile/js/search.js"></script>
</head>
<style>
::-moz-placeholder { color: #80b6df; }
::-webkit-input-placeholder { color:#80b6df; }
:-ms-input-placeholder { color:#80b6df; }
</style>
<body>
	<!-- 头部 -->
	<div class="header">
		<form>
			<a class="sort_back" href="javascript:history.go(-1)"><img src="/Public/mobile/img/sort_back.png"></a>
			<div class="search_box">
				<img src="/Public/mobile/img/search_icon.png">
				<input class="search" type="text"  value="" placeholder="请输入企业云谱名称">
			</div>
			<a class="sort_search" href="javascript:;" onclick="ssearch()">搜索</a>
		</form>
	</div>
	
	<div class="y_content">
		<!-- 分类 -->
		<ul class="sort_list">
		</ul>


		<div class="y_bottom">
			<p>云狄网络版权所有</p>
			<p>粤ICP备16076354号</p>
		</div>
	</div>
	<!-- 底部导航 -->
	<div class="y_footer">
		<a href="http://www.yundi88.com">
			<img src="/Public/mobile/img/y_footer_icon1.png">
			<span>云狄网</span>
		</a>
		<a href="index.html" class="foot_on">
			<img src="/Public/mobile/img/y_footer_icon21.png">
			<span>企业云谱</span>
		</a>
		<a href="#">
			<img src="/Public/mobile/img/y_footer_icon3.png">
			<span>服务咨询</span>
		</a>
		<a href="http://association.yundi88.com/Mobile/index">
			<img src="/Public/mobile/img/y_footer_icon5.png">
			<span>云商会</span>
		</a>
	</div>
	<div class="backtop">
		<img src="/Public/mobile/img/backtop2.png">
	</div>
</body>
<script>
	function ssearch(){
		var name = $('.search').val();
		if (name){
			window.location.href="/mobile/search_com?name="+name;
		}
	}
</script>
</html>