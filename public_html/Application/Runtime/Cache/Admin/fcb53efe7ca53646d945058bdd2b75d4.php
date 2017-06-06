<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Public/ydadmin/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<link rel="stylesheet" type="text/css" href="/Public/ydadmin/css/yunpu.css">

	<script type="text/javascript" src="/Public/ydadmin/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="/Public/ydadmin/js/index.js"></script>
	<title>企业云谱</title>
</head>
<body style="min-height:420px;background:#ecf0f5;position:relative;">
	<div class="yprightindex">
		<div class="ypheader">
			<ul>
				<li><a href="/admin/CompanyInfo/add_info"><img src="/Public/ydadmin/images/bianjiyp.png"></a></li>
				<li>
					<?php if($company['com_status'] === null){?>
					<div class="noset">
						<p>您的还未编辑企业云谱 请点击---编辑云谱进行编辑</p>
					</div>
					<?php }?>

					<?php if($company['com_status'] === '2'){?>
					<div class="noset">
						<p>抱歉,您的审核未通过,未通过的原因:<?php echo $beizhu['beizhu']; ?></p>
					</div>
					<?php }?>

					<?php if($company['com_status'] === '0'){?>
					<div class="noset">
						<p>您的企业云谱正在审核 请耐心等候</p>
					</div>
					<?php }?>
					<a target="_blank" href="/CompanyInfo/details?id=<?php echo ($company["com_id"]); ?>"><img src="/Public/ydadmin/images/yuluanyp.png"></a>					
				</li>
				<li><a target="_blank" href="javascript:;" onclick="alert('功能正在开发中,请耐心等候!')"><img src="/Public/ydadmin/images/bianjijc.png"></a></li>
			<div class="cl"></div>
			</ul>
		</div>
		<div class="ypmain">
			<img src="/Public/ydadmin/images/banner.jpg">
		</div>
		
	</div>
</body>
</html>