<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
</head>
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
<style type="text/css">
	.yp_list{width: 1200px;margin: 0 auto;}
	.yp_list .list_message{margin: 30px 0;}
	.yp_list .list_message li{list-style: none;overflow: hidden;font-family: "微软雅黑";margin-bottom: 16px;}
	.yp_list .list_message .list_img{width: 220px ;height:150px;float: left;}
	.yp_list .list_message .list_img img{width: 100%;}
	.yp_list .list_message .list_txt a{display: block;text-decoration: none;}
	.yp_list .list_message .list_txt{float: left;padding: 12px 24px 12px 16px;border: 1px solid #eeeeee;border-left: none;width: 898px;height: 124px;}
	.yp_list .list_message .list_txt .com_name{font-size: 16px;color: #333333;line-height: 28px;}
	.yp_list .list_message .list_txt .com_name:hover{color: #008cba;}
	.yp_list .list_message .list_txt .com_abstract{font-size: 12px;color: #666666;line-height: 18px;height: 36px;overflow: hidden;}
	.yp_list .list_message .list_txt .main_pro{font-size: 14px;color: #333333;line-height: 26px;}
	.yp_list .list_message .list_txt .pro_abstract{font-size: 12px;color: #666666;line-height: 18px;height: 18px;overflow: hidden;}
	.yp_list .list_message .list_txt .com_add{font-size: 12px;color: #0066cc;}
	.yp_list .list_message .list_txt .com_add:hover{color: #f22e00;text-decoration: underline;}
</style>
<body>
	<div class="yp_list">
		<ul class="list_message">
		<!-- <p>搜索结果</p><br> -->
			<?php if(empty($company_info)): ?><p style="text-align: center;font-size: 20px;color: red;margin: 150px 0 150px 0;">没有找到相关内容</p><?php endif; ?>
			<?php if(is_array($company_info)): foreach($company_info as $key=>$com): ?><li>
				<div class="list_img">
					<img src="<?php echo templogo($com['com_storeid'],220,150);?>">
				</div>
				<div class="list_txt">
					<a href="<?php echo U('/CompanyInfo/details',[id=>$com['com_id']]);?>" class="com_name"><?php echo ($com['com_name']); ?></a>
					<a href="<?php echo U('/CompanyInfo/details',[id=>$com['com_id']]);?>" class="com_abstract "><?php echo ($com['com_synopsis']); ?></a>
					<a href="<?php echo U('/CompanyInfo/details',[id=>$com['com_id']]);?>" class="main_pro">主营产品</a>
					<a href="<?php echo U('/CompanyInfo/details',[id=>$com['com_id']]);?>" class="pro_abstract"><?php echo ($com['com_scname']); ?></a>
					<a href="http://<?php echo ($com['com_url'][0]); ?>" class="com_add"><?php echo ($com['com_url'][0]); ?></a>
				</div>
			</li><?php endforeach; endif; ?>
		</ul>
		<div><?php echo ($page); ?></div>
	</div>
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