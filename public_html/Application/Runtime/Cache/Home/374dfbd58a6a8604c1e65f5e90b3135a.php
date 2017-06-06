<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<link rel="shortcut icon" href="/Public/img/favicon.ico" type="image/x-icon" />
	<title>企业百科</title>
	<link rel="stylesheet" type="text/css" href="/Public/ydhome/css/baike.css">

	<link rel="stylesheet" type="text/css" href="/Public/ydhome/css/MxSlider.css">

	<script type="text/javascript" src="/Public/ydhome/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/ydhome/js/benner.js"></script>
	
	<script type="text/javascript" src="/Public/ydhome/js/scroll_image.js"></script>

	<script type="text/javascript" src="/Public/ydhome/js/MxSlider.js"></script>
	
</head>
<body class="bodyHei">
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
	<div style="border-bottom: 4px solid #00b163;">
		<main class="main" style="display: block;">
		<!-- benner -->
			<div class="banner bannersss" id="banner" >
				<div class="bannerl">
					<div class="bannerl1"><img src="<?php echo templogo($company['com_storeid'],250,250);?>"></div>
					<div class="bannerl2">
						<h3>公司简介</h3>
						<p class="bannerl2p"><?php echo ($company['com_synopsiss']); ?></p>
						<h3>主营产品</h3>
						<p class="bannerl2p"><?php echo $company['com_scname'];?></p>
						<h3>公司地址</h3>
						<p><?php echo ($company['com_province']); echo ($company['com_city']); echo ($company['com_district']); echo ($company['com_detailed']); ?></p>
						<h3>公司网址</h3>
						<p>
							<?php if(is_array($company['com_url'])): foreach($company['com_url'] as $key=>$vo): ?><a href="http://<?php echo ($vo); ?>" target="_blank"><?php echo ($vo); ?></a>
							<?php break; endforeach; endif; ?>
						</p>
					</div>
				</div>
				<div class="bannerr">
						<a href="#" class="d1" style="background:url(/Public/img/xiangxi1.png)no-repeat  center  center ;background-size:100% auto;" target="_blank"></a>
						<a href="#" class="d1" style="background:url(/Public/img/xiangxi2.png)no-repeat  center center ;background-size:100% auto;" target="_blank"></a>
						<div class="d2" id="banner_id">
							<ul>
								<li></li>
								<li></li>
							</ul>
						</div>
						<script type="text/javascript">bannerr()</script>
				</div>

				<!-- <a href="#" class="d1" style="background:url(images/bennerss.png) center no-repeat;" target="_blank"></a>
				<a href="#" class="d1" style="background:url(images/bennerss.png) center no-repeat;" target="_blank"></a> -->
				<div class="cl"></div>
			</div>
			</main>
		</div>
		<main class="main">
		<div style="display: none;" id="com_id"><?php echo ($company['com_id']); ?> </div>
		<div class="cl"></div>	
			<!--顶部  -->
		<div class="detailstop">
			<span class="detailiuluan">浏览次数：<font style="color:#999"><?php echo ($company['com_visit']); ?></font></span> |
			<span class="detailgood" id="com_good" comid="<?php echo ($company['com_id']); ?>">
					<img src="/Public/ydhome/images/dianzuan1.png" class="detailgood1">
					<img src="/Public/ydhome/images/dianzuan2.png" class="detailgood2" style="display: none"><span id="com_praise"><?php echo ($company['com_praise']); ?></span></span> |
			<span class="detaifengxiang">
			<script type="text/javascript">
					$(function(){
						$('.detailgood1').bind('click',function(){
							$.post('/CompanyInfo/ajax_thumb',{'id':$('#com_id').html()},function(res){
								if (res.status == 1){
									$('#com_praise').html(parseInt($('#com_praise').html())+1);
									$('.detailgood1').hide();
									$('.detailgood2').show();
								}else{
									alert(res.msg);
								}
							})
						});


					})
			
			</script>
		<div class="jiathis_style">
			<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" style="margin-right:0px;margin-left: 4px;">分享</a>
			<a class="jiathis_button_tsina" ></a>
			<a class="jiathis_button_qzone" ></a>
		</div>
		<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" ></script>
		
			</span>
		</div>

		<div class="baikemain">
			<div class="baikemainl">
				<div id="baikemainlone">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">公司介绍</h3>
					<p><?php echo ($company['com_synopsis']); ?></p>
				</div>
				<div id="baikemainltwo">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">发展历程</h3>
					<p><?php echo ($company['com_history']); ?></p>
				</div>
				<div id="baikemainlthree">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">公司业务</h3>
					<p><?php echo ($company['com_service']); ?></p>
				</div>
				<div id="baikemainlfour">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">公司荣誉</h3>
					<div class="baikemainlfour1">
						<?php echo ($company['com_honor']); ?>
					</div>
					<div class="baikemainlfour2">
						<!-- <a href="#"><img src="/Public/ydhome/images/baikemainlfour222.png"></a> -->
					</div>		
					<div class="cl"></div>	
				</div>
				<div id="baikemainlfive">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">公司文化</h3>
						<?php echo ($company['com_culture']); ?>
				</div>
				<div id="baikemainlsex">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">官网直达</h3>
						<p>
							<?php if(is_array($company['com_url'])): foreach($company['com_url'] as $key=>$urllist): ?><a href="http://<?php echo ($urllist); ?>" target="_blank"><?php echo ($urllist); ?></a>&nbsp;<?php endforeach; endif; ?>
						</p>	
				</div>
				<div id="baikemainlsenve">
					<h3><img src="/Public/ydhome/images/shuxian.png" style="float:left;margin-right: 10px;margin-top: 5px;">媒体报道</h3>
						<?php if(is_array($media)): foreach($media as $key=>$medlist): ?><p><a href="http://<?php echo ($medlist['med_url']); ?>" target="_blank"><?php echo ($medlist['med_title']); ?></a> .  <?php echo ($medlist['med_source']); ?></p><?php endforeach; endif; ?>

				</div>

			</div>



			<div class="baikemainr">
				<div class="baikemainrm" id="boxss" style="display:none">
					<a href="javascript:" class="baikemainlone">公司介绍</a>
					<a href="javascript:" class="baikemainltwo">发展历程</a>
					<a href="javascript:" class="baikemainlthree">公司业务</a>
					<a href="javascript:" class="baikemainlfour">公司荣誉</a>
					<a href="javascript:" class="baikemainlfive">公司文化</a>
					<a href="javascript:" class="baikemainlsex">官网直达</a>
					<a href="javascript:" class="baikemainlsenve">媒体报道</a>
				</div>
				<script type="text/javascript">
						$(function(){

							$('.baikemainlone').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainlone").offset().top},500);
							});
							$('.baikemainltwo').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainltwo").offset().top},500);
							});
							$('.baikemainlthree').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainlthree").offset().top},500);
							});
							$('.baikemainlfour').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainlfour").offset().top},500);
							});
							$('.baikemainlfive').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainlfive").offset().top},500);
							});
							$('.baikemainlsex').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainlsex").offset().top},500);
							});
							$('.baikemainlsenve').bind('click',function(){
									// jquery操作滚动条滚动到指定位置
									$("html,body").animate({scrollTop:$("#baikemainlsenve").offset().top},500);
							});


		// @ 给窗口加滚动条事件
		$(window).scroll(function(){
			// 获得窗口滚动上去的距离
			var ling = $(document).scrollTop();

			
			var bodyHei=$('.bodyHei').height();
			var windowHei=$(window).height(); 
			var footerHei=$('footer.footer').height();
			var footer_padT= parseInt($('footer.footer').css('paddingTop') );
			var maxFooterHei=bodyHei-windowHei-footerHei-footer_padT;
			
			// 在标题栏显示滚动的距离
			// document.title = ling;
			// 如果滚动距离大于400的时候让滚动框出来
			if(ling>400){
				$('#boxss').show();
				console.log(ling)
			}
			if(455<ling && ling<900){
				// 让第一层的数字隐藏，文字显示，让其他兄弟元素的li数字显示，文字隐藏
				$('#boxss').removeClass('baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm4 baikemainrm5 baikemainrm6').addClass('baikemainrm');

			}else if(900<ling && ling<1395){
				$('#boxss').removeClass('baikemainrm baikemainrm2 baikemainrm3 baikemainrm4 baikemainrm5 baikemainrm6').addClass('baikemainrm1');
			}else if(1395<ling && ling<2313){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm3 baikemainrm4 baikemainrm5 baikemainrm6').addClass('baikemainrm2');
			}else if(2313<ling && ling<2413){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm4 baikemainrm5 baikemainrm6').addClass('baikemainrm3');
			}else if(2413<ling && ling<2453){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm5 baikemainrm6').addClass('baikemainrm4');
			}else if(2413<ling && ling<2523){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm4 baikemainrm6').addClass('baikemainrm5');
			}else if(2665<ling && ling<2765){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm4 baikemainrm5').addClass('baikemainrm6');
			}else if(2547==ling){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm4 baikemainrm5 baikemainrm6').addClass('baikemainrm3');				
			}else if(2781==ling){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm5 baikemainrm6').addClass('baikemainrm4');				
			}else if(2785==ling){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm5 baikemainrm6').addClass('baikemainrm4');				
			}else if(2955==ling){
				$('#boxss').removeClass('baikemainrm baikemainrm1 baikemainrm2 baikemainrm3 baikemainrm4 baikemainrm6').addClass('baikemainrm5');				
			}
			if(ling>maxFooterHei || ling<420){
				// $('#box').css('display','none');  // @ 这一句和下一句效果一样。
				$('#boxss').hide();
			}
			
		})
			
						
	})

				</script>
			</div>
			<div class="cl"></div>
		</div>	
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