<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<link rel="shortcut icon" href="/Public/img/favicon.ico" type="image/x-icon" />
	<title><?php echo ($system["title"]); ?></title>
	<meta http-equiv="keywords" content="<?php echo ($system["guanjianci"]); ?>" />
	<meta name="description" content="<?php echo ($system["miaoshu"]); ?>" />
	<link rel="stylesheet" type="text/css" href="/Public/ydhome/css/baike.css">

	<link rel="stylesheet" type="text/css" href="/Public/ydhome/css/MxSlider.css">

	<script type="text/javascript" src="/Public/ydhome/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/ydhome/js/benner.js"></script>
	
	<script type="text/javascript" src="/Public/ydhome/js/scroll_image.js"></script>

	<!-- <script type="text/javascript" src="/Public/ydhome/js/MxSlider.js"></script> -->

	   <link rel="stylesheet" type="text/css" href="/Public/ydhome/css/jcarousel.connected-carousels.css">

        <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
        <script type="text/javascript" src="/Public/ydhome/js/jquery.jcarousel.min.js"></script>

        <script type="text/javascript" src="/Public/ydhome/js/jcarousel.connected-carousels.js"></script>

       <style type="text/css">

			@media screen and (min-width:1000px) and (max-width:1400px){
				body{overflow:hidden;}
			  .connected-carousels .stage{margin-top: 30px;}
				.connected-carousels .prev-stage{top:30px;}
				.connected-carousels .prev-navigation{top:65px;}
				.connected-carousels .carousel-navigation{margin-top:98px;}
				.connected-carousels .next-stage{top:505px;}
				}
        </style>	
</head>
<body>

<!-- 头部开始 -->
	<header class="imgheader">
			<a target="_blank" href="/index/index"><img src="/Public/ydhome/images/logo2.png"></a>
			<a target="_blank" href="/index/index">首页</a>
			<a href="javascript:" style="cursor:default;">&gt;</a>
			<a target="_blank" href="/CompanyInfo/details?id=<?php echo ($com_id); ?>">公司荣誉</a>
			<a href="javascript:" style="cursor:default;">&gt;</a>
			<a href="">图片</a>
	</header>
	<!-- 头部结束 -->
<div class="cl"></div>
	<!-- 主题内容开始 -->
	<main class="main">

			<div class="wrapper">
            <div class="connected-carousels">
                <div class="stage">
                    <div class="carousel carousel-stage">
                        <ul>
                        <?php if(is_array($company_img)): foreach($company_img as $key=>$vo): ?><li><img src="<?php echo editorimg($vo['img'],600,350);?>" alt=""></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <a href="#" class="prev prev-stage"><span>上一张</span></a>
                    <a href="#" class="next next-stage"><span>下一张</span></a>
                </div>

                <div class="navigation">
                    <a href="#" class="prev prev-navigation"><span>&lsaquo;</span></a>
                    <a href="#" class="next next-navigation"><span>&rsaquo;</span></a>
                    <div class="carousel carousel-navigation">
                        <ul>
                        	<?php if(is_array($company_img)): foreach($company_img as $kk=>$vv): ?><li><img src="<?php echo editorimg($vv['img'],92,62);?>" alt="<?php echo ($kk+1); ?>/<?php echo ($num); ?> <?php echo ($vv['img_cat']); ?>"></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            <div id="titless" style="width:1000px;text-align:center;height:100px;font-size:14px;margin:0 auto;margin-left: 20px;">1/<?php echo ($num); ?> <?php echo ($company_img[0]['img_cat']); ?></div>
        </div>	

	<script type="text/javascript">

		$(function(){

			$('.next').bind('click',function(){
				$('#titless').html($('.active img').attr('alt'));
			});

			$('.prev').bind('click',function(){
				$('#titless').html($('.active img').attr('alt'));
			})
			$('.carousel-navigation>ul li').bind('click',function(){
				$('#titless').html($('.active img').attr('alt'));
			});
		})
		
	</script>

<script type="text/javascript">  
      function mousewheelHandler(e){
		var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
		// console.log(delta > 0 ? "向上滚动" : "向下滚动");
			if(delta < 0){
				$('.next').click()
				$('#titless').html($('.active img').attr('alt'));
			}
			else{
				$('.prev').click()
				$('#titless').html($('.active img').attr('alt'));
			}

			// console.log($('.active img').attr('alt'));	

		}
 
//for Firefox
document.addEventListener("DOMMouseScroll", mousewheelHandler, false);
 
//for Chrome Safari
document.addEventListener("mousewheel", mousewheelHandler, false);
    </script>	
	
	</main>
</body>
</html>