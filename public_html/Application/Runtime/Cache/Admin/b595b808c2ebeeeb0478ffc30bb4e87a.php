<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/Public/ydadmin/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/Public/ydadmin/css/yunpu.css">

	<script type="text/javascript" src="/Public/ydadmin/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/Public/ydadmin/js/index.js"></script>
</head>
	<body style="color:#ecf0f5;overflow:hidden;">
	<header class="header">
		<div class="logo"><a href="javascript:" target="_blank"><img src="/Public/ydadmin/images/logo.png"></a></div>
		<div class="information">
			<ul>
				<li onclick="window.open('http://www.baidu.com');"><i class="glyphicon glyphicon-home"></i>
					<a href="javascript:" target='_blank'>预览云谱</a></li>
				<li id="tuichu"><i class="glyphicon glyphicon-user"></i>
					欢迎：<span class="peopre">shuju_22@163.com</span>
						<div class="tuichuss">
							<a href="javascript:" target='_blank'>修改密码</a>
							<a href="javascript:">安全退出</a>
						</div>
					</li>
				<li><i class="glyphicon glyphicon-share-alt back"></i>
					<a href="javascript:" target='_blank'>返回首页</a></li>
			<div class="cl"></div>
			</ul>
		</div>
	</header>
	<div style="height:50px;"></div>
	<div class="ypleft">
		<ul>
			<li><i class="glyphicon glyphicon-book"></i>公司云谱
				<span class="glyphicon glyphicon-menu-down"></span></li>

		</ul>
	</div>
		<iframe src="<?php echo U('./index.php/Admin/CompanyInfo/add_info');?>" style="border:none;width:86%;" id="righthtml"></iframe>

		<div class="right" style="width:86%;height:40px;background:red;float:right;border-top: 1px solid #d2d2d2;position:fixed;right:0;bottom:0px;">
				<div class="tpfooter">
					<p>Copyright  2016-2025 <font style="color:#3c8dbc;">云狄B2B</font> .保留一切权利</p>
				</div>
</body>
<script type="text/javascript">
	
		window.onload = function () {             
             //application/vnd.chromium.remoting-viewer 可能为360特有
             var is360 = _mime("type", "application/vnd.chromium.remoting-viewer");
             
             if (isChrome() && is360) { 
             	$('#righthtml').addClass("divClass1");
		        $('#righthtml').removeClass("divClass2");
                 // alert("检测到是360浏览器");
             }
         }
         //检测是否是谷歌内核(可排除360及谷歌以外的浏览器)
         function isChrome(){
             var ua = navigator.userAgent.toLowerCase();
             $('#righthtml').addClass("divClass2");
		     $('#righthtml').removeClass("divClass1");
 			// alert("检测到是谷歌");
             return ua.indexOf("chrome") > 1;
         }
         //测试mime
         function _mime(option, value) {
             var mimeTypes = navigator.mimeTypes;
             for (var mt in mimeTypes) {
                 if (mimeTypes[mt][option] == value) {
                     return true;
                 }
             }
             return false;
       }
	</script>
</html>