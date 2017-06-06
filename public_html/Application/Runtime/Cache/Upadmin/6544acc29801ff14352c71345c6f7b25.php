<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
<style>
.select-box {width: 70%;}
.input-text{width: 70%;}
</style>
</head>
<body>
<article class="cl pd-20">
	<form action="<?php echo U('Web/shuffling_add');?>" method="post" class="form form-horizontal" id="form-member-add" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo ($shuffling['id']); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>栏目名字：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($shuffling['img_cat']); ?>" placeholder="" id="username" name="img_cat">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="pid">
					<option value="">请选择</option>
					<option value="0" <?php if(!$shuffling['pid']): ?>selected="true"<?php endif; ?>>顶级栏目</option>
					<?php if(is_array($shuffling_cat)): foreach($shuffling_cat as $kk=>$vv): ?><option value="<?php echo ($kk); ?>" <?php if($kk == $shuffling['pid']): ?>selected="true"<?php endif; ?> ><?php echo ($vv); ?></option><?php endforeach; endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>外部链接：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($shuffling['url']); ?>" placeholder="如:http://www.yundi88.com" name="url">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>排序：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($shuffling['orderid']); ?>" placeholder="从小到大排序" name="orderid">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>图片地址</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="file" class="input-text" value="<?php echo ($shuffling['img']); ?>" placeholder="50" name="img">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否显示：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input type="radio" id="sex-2" name="is_show" value="1"<?php if($shuffling['is_show'])echo 'checked="true"';?>>
					<label for="sex-2">显示</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" name="is_show" value="0" <?php if(!$shuffling['is_show'])echo 'checked="true"';?>>
					<label for="sex-3">不显示</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否新窗口打开：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input type="radio" id="sex-2" name="is_new_open" value="1" <?php if($shuffling['is_new_open'])echo 'checked="true"';?> >
					<label for="sex-2">新窗口</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" name="is_new_open" value="0" <?php if(!$shuffling['is_new_open'])echo 'checked="true"';?>>
					<label for="sex-3">原窗口</label>
				</div>
			</div>
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>


<script type="text/javascript" src="/Public/Upadmin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Upadmin/lib/layer/2.4/layer.js"></script>
 
<script type="text/javascript" src="/Public/Upadmin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Upadmin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/Upadmin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Public/Upadmin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/Upadmin/static/h-ui.admin/js/H-ui.admin.page.js"></script> 


<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>