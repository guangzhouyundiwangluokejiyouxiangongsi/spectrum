<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/Public/img/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />  
	<title>云谱首页</title>
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/y_index.css">
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
		<!-- banner -->
		<div class="y_banner">
			<img src="/Public/mobile/img/y_index_banner.png">
		</div>
		<!-- 行业分类 -->
		<div class="y_message">
			<div class="y_title">
				<span>行业分类</span>
				<a href="/Mobile/sort.html">详情查看</a>
			</div>
			<ul class="company">
				
			</ul>
		</div>


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
	company();
	var p =1
	function company(){
		var name = '<?php echo ($name); ?>';
		$.get('/Mobile/ajax_search',{'p':p,'name':name},function(res){
			if (res){
				$('.company').append(res);
			}
		})
		p++;
	}
	$(window).scroll(function () {
    var maxScroll=$(document).height()-$(window).height();

    if ($(window).scrollTop() >= maxScroll) {
      company();
    }
  });

</script>
</html>