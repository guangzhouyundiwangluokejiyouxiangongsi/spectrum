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

	<script type="text/javascript" src="/Public/ydhome/js/MxSlider.js"></script>
	<style>
	.company_list .c_list_box{width:1200px;margin: 0 auto;}
	.company_list .c_list_box div{width: 278px;height: 320px;cursor: pointer;margin: 10px ;float: left;font-size: 12px;text-align: center;color:#666;background: #f7f7f7;}

	.company_list .c_list {transition: All 0.4s ease-in-out;-webkit-transition: All 0.4s ease-in-out;-moz-transition: All 0.4s ease-in-out;-o-transition: All 0.4s ease-in-out;}
	
	.company_list .title{text-align: center;margin-top: 50px;margin-bottom: 30px;font-size: 20px;color: #000;}
	.company_list .c_list:hover { transform: scale(1.2); -webkit-transform: scale(1.2);-moz-transform: scale(1.2);-o-transform: scale(1.2); -ms-transform: scale(1.2);-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 60px rgba(0, 0, 0, 0.06) inset;-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;}
	.company_list .c_list a{text-decoration: none;}
	.company_list .c_list a img{width: 100%;height: 190px;}
	.company_list .c_list a h4:hover{color: #029fd3;}
	.company_list .c_list a h4{ height: 44px;overflow: hidden;text-align: left;padding:0 20px;font-size: 16px;color: #454545;text-align: center;margin: 0;margin: 10px 0;    display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;}
	.company_list  .c_list a p{display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2; padding:0 20px; height: 40px; overflow: hidden;text-align: left;font-size: 14px; margin-bottom: 20px;color: #999;line-height: 20px;}
	.company_list  .more{width: 250px;background: #029fd3;color: #FFFFFF;display: block;text-align: center;font-size: 18px;height: 50px;line-height: 50px;margin: 20px auto;cursor: pointer;}
	</style>
</head>
<body>
<!-- 头部开始 -->
	<header>
	<nav class="bzhuce"><a target="_blank" href="http://www.yundi88.com/User/reg.html">注册</a><a target="_blank" href="http://www.yundi88.com/User/login.html">登陆</a>			
		</nav>
	<div class="cl"></div>
	<div class="bheader">
		<a target="_blank" href="index/index"><img src="<?php echo ($system["logo"]); ?>"></a>

		<div class="bsearch">
				<input type="text" placeholder="请输入企业名称" name="com_name">
				<a onClick="return bsearch()"><img src="/Public/ydhome/images/search.png" style="cursor:pointer;"></a>
				</div>
		<div class="cl"></div>
	</div>
		<div class="cl"></div>
	<div class="navss">
		<ul>
		<?php if(is_array($navigation)): foreach($navigation as $key=>$vv): ?><li><a href="<?php echo ($vv["url"]); ?>" <?php if($vv['is_new_open']) echo 'target="_blank"';?>><?php echo ($vv["navigation"]); ?></a></li><?php endforeach; endif; ?>
			<!-- <div class="cl"></div> -->
		</ul>
	</div>
</header>
<script>
	var uname = '<?php echo getuname();?>';
	if (uname) $('.bzhuce').html('<a target="_blank" href="http://www.yundi88.com/User/login.html">'+uname+'</a><a target="_blank" href="/index/logout">退出</a>');

	function bsearch()
	{	
		var com_name = $('.bsearch input').val();
		if (com_name){
			window.open('/index/search?com_name='+com_name);
		}else{
			alert('请输入企业名称');
		}
	}
</script>
	<!-- 头部结束 -->
<div class="cl"></div>
	<!-- 主题内容开始 -->
	<main class="main" style="display: block;">

	<!-- benner -->
		<div class="banner" id="banner" >
		<?php if(is_array($shuffling)): foreach($shuffling as $key=>$vv): if($vv[img]): ?><a href="<?php echo ($vv["url"]); ?>" class="d1" style="background:url(<?php echo ($vv["img"]); ?>) center no-repeat;"<?php if($vv['is_new_open'])echo 'target="_blank"';?>></a><?php endif; endforeach; endif; ?>
			<div class="d2" id="banner_id">
				<ul>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="cl"></div>
		</div>
		<script type="text/javascript">banner()</script>
		<div class="cl"></div>		
	<!--企业百科-->
		<!-- <div class="scene">
			<div class="c">
				<div class="title">企业云谱</div>
			</div>
			<div class="LeftHandle" id="scrollArrLeft2">&nbsp;</div>
			<div class="rollBox-scene" id="scrollCont2" style="margin-left: 70px;">
					<div class="scrollCont-2">
						<?php if(is_array($company)): foreach($company as $k=>$com): ?><div class="pic">
	                            <a href="/CompanyInfo/details?id=<?php echo ($com["com_id"]); ?>" target="_blank" class="baikea">
	                                <img src="<?php echo tempimg($com['img_id'],335,190);?>" alt="">
	                                <h4><?php echo getSubstr($com['com_name'],0,15);?></h4>
	                                <p><?php echo ($com['com_synopsis']); ?></p>
	                            </a>
	                        </div><?php endforeach; endif; ?>
					</div>
			</div>
			<div class="RightHandle" id="scrollArrRight2">&nbsp;</div>
		</div> -->
		<div class="company_list">
			<div class="title">企业云谱</div>
		    <div class="c_list_box">
		    	<!-- <?php if(is_array($company)): foreach($company as $k=>$com): ?><div class="c_list">
		            <a href="/CompanyInfo/details?id=<?php echo ($com["com_id"]); ?>">
		                <img src="<?php echo tempimg($com['img_id'],370,200);?>" >
		                <h4><?php echo ($com['com_name']); ?></h4>
		                <p><?php echo ($com['com_synopsis']); ?></p>
		            </a>
		        </div><?php endforeach; endif; ?> -->
		    </div>
		    <div style="clear: both;"></div>
		    <a class="more" onclick="jiazai()">查看更多</a>
		</div>
	<!-- 立即加入 -->
	
	<div class="nowjoin">
		<div class="nowjoins">
			<a href="http://www.yundi88.com/User/login.html" target="_blank">立即加入</a>
		</div>
	</div>
	<!-- 行业分类 -->
	<div class="Industry">
		<h3>行业分类</h3>
		<?php if(is_array($store_cate)): foreach($store_cate as $key=>$cate): ?><dl>
		              
		            <dd><a href="<?php echo U('/index.php/Home/CompanyInfo/lists',[scid=>$cate['sc_id']]);?>" target="_blank"><?php echo ($cate['sc_name']); ?></a></dd>

		             </dl><?php endforeach; endif; ?>

		<div class="cl"></div>
	</div>
	<!-- 云狄百科介绍 -->
	<div class="introduced">
		<div class="introducedl">
			<h3>企业云谱介绍</h3>
			<p>企业云谱是专业为企业/个体经营户公开化编辑的内容开放、自由、共享的网络企业信息系统,旨在创造一企业信息化领域平台,服务所有互联网企业的中文知识性企业云谱。在这里你可以参与词条编辑,分享贡献您的信息。</p>
			<!-- <a href="#" target="_blank">查看更多>>></a> -->
		</div>
		<div class="introducedr"> 
			<h3>加入伙伴</h3>
			<div class="introducedm">
				<!-- My box for the slider -->
				<div class="mx-bugs_bunny">
					<!-- Slider -->
					<div class="ZI-slider">
						<div>
							<?php if(is_array($shuffling2)): foreach($shuffling2 as $kk=>$vv): if ($kk < 3){ ?>
							<a <?php if($vv['is_new_open'])echo 'target="_blank"';?> href="<?php echo ($vv["url"]); ?>"><img src="<?php echo ($vv["img"]); ?>" alt="" /></a>
							<?php } endforeach; endif; ?>
						</div>
						<div>
							<?php if(is_array($shuffling2)): foreach($shuffling2 as $ko=>$vo): if ($ko < 6 && $ko >2){ ?>
							<a <?php if($vo['is_new_open'])echo 'target="_blank"';?> href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["img"]); ?>" alt="" /></a>
							<?php } endforeach; endif; ?>									
						</div>
						<div>
							<?php if(is_array($shuffling2)): foreach($shuffling2 as $ks=>$vs): if ($ks < 9 && $ks > 5){ ?>
							<a <?php if($vs['is_new_open'])echo 'target="_blank"';?> href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vs["img"]); ?>" alt="" /></a>
							<?php } endforeach; endif; ?>
						</div>
					</div>
					<!-- Slider -->
				</div>
				<!-- My box for the slider -->

			</div>

		</div>
		<div class="cl"></div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){		
		$( '.ZI-slider' ).MxSlider( {
			autoPlay: true,
			dots: true,
			timeSlide: 500
		} );
	})
	jiazai();
	var p = 1;
	function jiazai(){
		$.get('/Home/Index/ajax_company?p='+p,function(res){
			if (res){
				$('.c_list_box').append(res);
				if(res.match(/div/g).length < 16){
					$('.more').remove();
				}
			}else{
				$('.more').remove();
			}
			p++;
		})
	} 
	</script>
	
	<script type="text/javascript" src="/Public/ydhome/js/gujian.js"></script>
	</main>


<!-- 统一底部-->
<footer class="footer">
<style>
.pr a:hover{color: red}
</style>
    <div class="pr">
      <div class="prc">
        <dl> 
              <dt>新手指南</dt>
                                <dd><a target="_blank" href="http://www.yundi88.com/Article/detail/article_id/26.html">关于云狄</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/User/regstore.html">免费注册</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/Article/detail/article_id/28.html">买家入门</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/Index/certification">认证信息</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/User/forget_pwd.html">找回密码</a></dd>
                              </dl><dl> 
              <dt>采购商城服务</dt>
                                <dd><a target="_blank" href="http://www.yundi88.com/goods/goodsList2.html">采购平台</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/info/index">企业商铺</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/article/yun_shop">云商会</a></dd>
                              </dl><dl> 
              <dt>供应商服务</dt>
                                <dd><a target="_blank" href="http://www.yundi88.com/info/index">供应信息</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/User/login.html ">供应管理</a></dd>
                              </dl><dl> 
              <dt>企业服务</dt>
                                <dd><a target="_blank" href="http://www.yundi88.com/index/zixun">广告服务</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/index/certification2">商城入驻</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/seller/index/index.html?nav=article">发布信息</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/seller/index/index.html?nav=articleclass">信息管理</a></dd>
                              </dl><dl> 
              <dt>安全交易</dt>
                                <dd><a target="_blank" href="http://www.yundi88.com/Article/detail/article_id/41.html">如何下单</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/Article/detail/article_id/42.html">如何付款</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/User/order_list">订单管理</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/Article/detail/article_id/44.html">交易保障</a></dd>
                                    <dd><a target="_blank" href="http://www.yundi88.com/Article/detail/article_id/45.html">如何评价</a></dd>
                              </dl>        </div>
        
        <div class="Tphone">
        <h2></h2>
      <p>周一至周日 9:00-18:00</p>
      <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3404902361&amp;site=qq&amp;menu=yes">QQ24小时在线客服</a>
        </div>
    </div>
     <style>
    .btn_5{margin-left:10px;}
    .btn_6 a:hover{color: red;}
    </style>
     <h6 class="btn_6">友情链接：
     <a href="http://www.ydwzjs.cn"       target="_blank"       > 云狄建站</a><a href="http://www.ydwzjs.cn"       target="_blank"       > 云狄免费建站</a><a href="http://www.ydwzjs.cn"       target="_blank"       > 免费建站</a>     </h6>
     <footer>云狄网络版权所有 备案号:粤ICP备16076354号</footer>
</footer>

<div class="top-back" style="display: none;">
	<a class="top" href="javascript:;">︿</a>
	<a class="txt" href="javascript:;">回到顶部</a>
</div>
<script type="text/javascript">
	$(window).scroll(function () {
		if ($(window).scrollTop() > 600) {
			$('.top-back').show(300);
		}
		else
		{
			$('.top-back').hide(300);
		}
	});
	$(".top-back").click(function(){
	  $('body,html').animate({scrollTop:0},600);
	   return false;
	});
</script>
	
	
</body>
</html>