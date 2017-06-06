<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="favicon.ico" >
<LINK rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Upadmin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Upadmin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Upadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="/Public/Upadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Upadmin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/page.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--_meta 作为公共模版分离出去-->
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">云狄网</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">企业百科</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="<?php echo U('index/logout');?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->
<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 网站管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd <?php if(CONTROLLER_NAME == 'Web')echo 'style="display:block"';?>>
				<ul>
					<li><a href="<?php echo U('Web/system');?>" title="导航设置" <?php if(ACTION_NAME == 'system')echo 'style="color: #148cf1;"'?>>系统设置</a></li>
					<li><a href="<?php echo U('Web/navigation_list');?>" title="导航设置" <?php if(ACTION_NAME == 'navigation_list')echo 'style="color: #148cf1;"'?>>导航设置</a></li>
					<li><a href="<?php echo U('Web/shuffling_list');?>" title="导航设置" <?php if(ACTION_NAME == 'shuffling_list')echo 'style="color: #148cf1;"'?>>轮播管理</a></li>
				</ul>
			</dd>
		</dl>
		
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd <?php if (CONTROLLER_NAME == 'Admin'){echo 'style="display:block"';}?>>
				<ul>
					<li><a href="<?php echo U('Admin/admin_list');?>" title="管理员列表" <?php if(ACTION_NAME == 'admin_list')echo 'style="color: #148cf1;"'?>>管理员列表</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd <?php if (CONTROLLER_NAME == 'User'){echo 'style="display:block"';}?>>
				<ul>
					<li><a href="<?php echo U('User/User_list');?>" title="会员列表" <?php if(ACTION_NAME == 'user_list')echo 'style="color: #148cf1;"'?>>会员列表</a></li>
					<li><a href="<?php echo U('User/audit_list');?>" title="会员列表" <?php if(ACTION_NAME == 'audit_list')echo 'style="color: #148cf1;"'?>>审核记录</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<form action="" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
				<div id="tab-system" class="HuiTab">
					<div class="tabBar cl"><span>基本设置</span></div>
					<div class="tabCon">
						<div class="row cl">
						<input type="hidden" name="id" value="<?php echo ($system["id"]); ?>">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="text" id="website-title" name="name" placeholder="控制在25个字、50个字节以内" value="<?php echo ($system["name"]); ?>" class="input-text">
							</div>
						</div>
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站标题：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="text" id="website-title" name="title" placeholder="控制在25个字、50个字节以内" value="<?php echo ($system["title"]); ?>" class="input-text">
							</div>
						</div>
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>关键词：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="text" id="website-Keywords" name="guanjianci" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?php echo ($system["guanjianci"]); ?>" class="input-text">
							</div>
						</div>
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>描述：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="text" id="website-description" name="miaoshu" placeholder="空制在80个汉字，160个字符以内" value="<?php echo ($system["miaoshu"]); ?>" class="input-text">
							</div>
						</div>
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>logo：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="file" id="website-static" name="logo" placeholder="默认为空，为相对路径" value="<?php echo ($system["logo"]); ?>" class="input-text">
							</div>
						</div>
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>版权信息：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="text" id="website-copyright" name="banquan" placeholder="&copy; 2014 H-ui.net" value="<?php echo ($system["banquan"]); ?>" class="input-text">
							</div>
						</div>
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2">备案号：</label>
							<div class="formControls col-xs-8 col-sm-9">
								<input type="text" id="website-icp" name="beianhao" placeholder="京ICP备00000000号" value="<?php echo ($system["beianhao"]); ?>" class="input-text">
							</div>
						</div>
					</div>
				
				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
						<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
					</div>
				</div>
			</form>
		</article>
	</div>
</section>


<script type="text/javascript" src="/Public/Upadmin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Upadmin/lib/layer/2.4/layer.js"></script>
 
<script type="text/javascript" src="/Public/Upadmin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Upadmin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/Upadmin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Public/Upadmin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/Upadmin/static/h-ui.admin/js/H-ui.admin.page.js"></script> 

<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>