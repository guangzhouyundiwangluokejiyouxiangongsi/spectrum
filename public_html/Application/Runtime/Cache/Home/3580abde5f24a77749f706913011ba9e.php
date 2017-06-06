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
	<!-- <link rel="stylesheet" type="text/css" href="/Public/ydhome/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="/Public/ydhome/css/MxSlider.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/page.css">

	<script type="text/javascript" src="/Public/ydhome/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/ydhome/js/benner.js"></script>
	
	<!-- <script type="text/javascript" src="/Public/ydhome/js/scroll_image.js"></script> -->

	<!-- <script type="text/javascript" src="/Public/ydhome/js/MxSlider.js"></script> -->
	
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
	<div class="listhangye"><a href="/index/index" class="listhangye1" target="_blank">首页</a>&gt;
						 <a href="/index/index" class="listhangye1" target="_blank">行业分类</a>&gt;
	 					<a href="" class="listhangye2" target="_blank"><?php echo ($store_cate['sc_name']); ?></a></div>
	<main class="main">

	<!-- benner -->
	
		<div class="banner" id="banner" style="border-bottom: 2px solid #21acd4;height:390px;">
	        <?php if(is_array($store_info)): foreach($store_info as $key=>$com): ?><div class="d1">
					<div class="bannermain">
						<div class="bennerimg"><a target="_blank" href="<?php echo U('/CompanyInfo/details',[id=>$com['com_id']]);?>"><img src="<?php echo templogo($com['com_storeid'],330,330);?>"></a></div>
						<div class="bennertext">
							<h3><?php echo ($com['com_name']); ?></h3>
							<p class="tongleimiaoshua"><?php echo ($com['com_synopsis']); ?></p>
							<h3>主营产品</h3>
							<p><?php echo ($com['com_scname']); ?></p>
							<p>公司地址：<?php echo ($com['com_province']); echo ($com['com_city']); echo ($com['com_district']); echo ($com['com_detailed']); ?></p>
							<?php if(is_array($com['com_url'])): foreach($com['com_url'] as $key=>$vo): ?><a href="http://<?php echo ($vo); ?>" target="_blank"><?php echo ($vo); ?></a>
							<?php break; endforeach; endif; ?>
						</div>
					</div>
				</div><?php endforeach; endif; ?>
			
		    
			<div class="d2" id="banner_id">
				<ul style="left:48%;">
				<?php if(is_array($store_info)): foreach($store_info as $key=>$com): ?><li></li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="cl"></div>
		</div>
		<script type="text/javascript">banner()</script>
		<div class="cl"></div>		
		
	<!--同类商家-->
	<div class="listtonglei">
		<h3>同类商家</h3>
		<ul>
		     <?php if(is_array($store_all)): foreach($store_all as $key=>$listall): ?><li>
			     	<a target="_blank" href="<?php echo U('/CompanyInfo/details',[id=>$listall['com_id']]);?>" style="text-decoration:none">
						<div class="tongleiimp">
							<img src="<?php echo templogo($listall['com_storeid'],165,165);?>">
						</div>
						<div class="tongleimain">
							<h3> <?php echo ($listall['com_name']); ?></h3>
							<p class="tongleimiaoshu"><?php echo ($listall['com_synopsis']); ?></p>
							<h3>主营产品</h3>
							<p class="tongleizhuying"><?php echo ($listall['com_scname']); ?></p>
							<?php if(is_array($listall['com_url'])): foreach($listall['com_url'] as $key=>$voo): ?><a href="http://<?php echo ($voo); ?>" target="_blank"><?php echo ($voo); ?></a>
							<?php break; endforeach; endif; ?>
						</div>
					</a>
			</li><?php endforeach; endif; ?>
			
		<div class="cl"></div>
		</ul>
		<td colspan="3" bgcolor="#FFFFFF"><div class="pages" style="text-align: center;">
		      <?php echo ($page); ?>
		</div></td>
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