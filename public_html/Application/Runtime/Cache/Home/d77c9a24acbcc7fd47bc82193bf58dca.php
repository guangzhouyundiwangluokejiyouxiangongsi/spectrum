<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/Public/img/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />  
	<title>云谱行业分类</title>
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/sort.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/landscape.css">
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/public.css">
	<script type="text/javascript" src="/Public/mobile/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/mobile/js/public.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="header">
			<a class="header_title">
				<img src="/Public/mobile/img/y_logo.png">
				<span>企业云谱</span>
			</a>
			<a class="sort_search" href="search.html"><img src="/Public/mobile/img/sort_search.png"></a>

	</div>
	
	
	<div class="y_content">
		<!-- 分类 -->
		<ul>
			<?php if(is_array($sort)): foreach($sort as $key=>$vv): ?><li>
				<a href="/Mobile/sort_cat?sc_id=<?php echo ($vv["sc_id"]); ?>">
					<div class="sort_name">
						<?php echo ($vv["sc_name"]); ?>
					</div>
					<div class="right_icon"><img src="/Public/mobile/img/sort_right.png"></div>
				</a>
			</li><?php endforeach; endif; ?>
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
</html>