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
    <link rel="stylesheet" type="text/css" href="/Public/ydadmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/ydadmin/css/yunpu.css">
    <script type="text/javascript" src="/Public/ydadmin/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/Public/ydadmin/js/index.js"></script>
    <script type="text/javascript" src="/Public/jQueryDistpicker/js/distpicker.data.js"></script>
     <script type="text/javascript" src="/Public/ydadmin/js/global.js"></script>
    <script type="text/javascript" src="/Public/jQueryDistpicker/js/distpicker.js"></script>
    <script type="text/javascript" src="/Public/jQueryDistpicker/js/main.js"></script>
    <script type="text/javascript" src="/Public/ueditor/utf8-php/ueditor.config.js"></script>
     <script type="text/javascript" src="/Public/ueditor/utf8-php/ueditor.all.min.js"></script>
     <script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.min.js"></script>    <!-- 引用插件js -->
    <link rel="stylesheet" type="text/css" href="/Public/webuploader/0.1.5/webuploader.css" />
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
<style>
.input{    
    width: 60px;
    height: 21px;
    font-size: 16px;
    border:1px solid #ddd;
}
.Hui-article-box2 {
    position: absolute;
    top: 44px;
    right: 0;
    left: 199px;
    z-index: 1;
    background-color: #fff;
}
.tijiao{
    margin: 0 auto;
    text-align: center;
    width: 100px;
    height: 30px;
    line-height: 30px;
    border-radius: 4px;
    outline: none;
    border: none;
}
</style>
<section class="Hui-article-box2" style="height:100%">
    <body style="min-height:1000px;background:#ecf0f5;">
    <div class="ypright" style="position:relative;">

        <div class="ypheader">
            <h4><i class="glyphicon glyphicon-book"></i>公司云谱</h4>
        </div>

        <div class="ypmain">
            <div class="ypmain1">
            <form action="<?php echo U('/Admin/CompanyInfo/add_info');?>" method="post" enctype="multipart/form-data">
             <input type="hidden" name="com_id" value="<?php echo ($company['com_id']); ?>">
                <table width="100%">
                    <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">公司名称</td>
                        <td style="width:60%;padding-left: 20PX;"><input onfocus="jujiao(this)" onblur="gongsi(this)" type="name" placeholder="请输入公司名称" name="com_name" value="<?php echo ($company['com_name']); ?>" readonly="readonly"></td>
                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;">输入公司全称  （例如：广州XX设备有限公司）</td>
                    </tr>
                    <tr style="height:120px;">
                        <td style="width:10%;padding-left: 20PX;border-left: none;">公司网址</td>
                        <td style="width: 60%;padding-left: 20PX;line-height: 20px;border-right: none;min-height:120px;border-left: none;" class="wangzhib"><div class="aaaaaa"></div>
                        <?php if(empty($company['com_url'])): ?><input  class="wangzhi" type="name" value=""  name="com_url[]" onfocus="jujiaos(this)" onblur="gongsis(this)"><?php endif; ?>
                            <?php if(is_array($company['com_url'])): foreach($company['com_url'] as $key=>$urllist): ?><div class="wangzhia">
                            
                            <input  class="wangzhi" type="name" readonly="readonly" value="<?php echo ($urllist); ?>"  name="com_url[]" onfocus="jujiaos(this)" onblur="gongsis(this)">
                 <img src="/Public/ydadmin/images/x.png" ></div><?php endforeach; endif; ?>
                            <!-- <a herf="javascript:" class="danjitianjia" onclick ="add()">点击添加</a></td> -->
                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;">保证每个网址的正确性，每个框填写一个网址</td>
                   </tr> 
                      <script type="text/javascript">
                            function jujiao(that){
                                    $(that).parent().css('border', '1px solid #2196f3');
                            }
                            function gongsi(that){
                                $(that).parent().css('border', '1px solid #ccc');
            
                            }
                            function jujiaos(that){
                                    $(that).css('border', '1px solid #2196f3');
                            }
                            function gongsis(that){
                                $(that).css('border', '1px solid #ccc');                                
                            }
                            var i = 0;
                            function add(){
                                
                                var newObj = $('<div class="wangzhia"><input  class="wangzhi" type="name"  name="com_url[]" maxlength="88" onfocus="jujiaos(this)" onblur="gongsis(this)" ><img src="/Public/ydadmin/images/x.png" onclick="remove(this)"></div>');
                                 $(".aaaaaa").append(newObj);
                            }

                            function remove(that){
                                $(that).parent('div').remove();
                                
                            }

                            function add_input(){
                                var input = $('<div class="wangzhia"><input  class="zhuying" type="name"  name="com_scname[]" maxlength="6" onfocus="jujiaos(this)" onblur="gongsis(this)" style="border: 1px solid #ccc;width: 127px;"><img src="/Public/ydadmin/images/x.png" onclick="remove(this)"></div>')
                                $('.input_class').append(input);
                            }
                    </script>
                   <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">公司LOGO</td>
                        <td style="width:60%;padding-left: 20PX;" class="filelogo"><img src="<?php echo ($company['com_logo']); ?>" id="logo"><div id="up_logo"></div><input type="hidden" name="com_logo" value="<?php echo ($company['com_logo']); ?>" id="input_logo"></td>
                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;line-height: 20px;">每个企业拥有独特性标志。建议使用200KB大小文件，宽度180*最大高度400的GIF或PNG格式图片，审核通过后将在云狄百科首页/详情页生效（审核通过生效）</td>
                    </tr>
                    <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">主营产品</td>
                        <td style="width:60%;padding-left: 20PX;">
                        <span class="input_class">
                        <?php if(is_array($company['com_scname'])): foreach($company['com_scname'] as $key=>$vv): ?><div class="wangzhia"><input  class="zhuying" type="name"  name="com_scname[]" maxlength="6" value="<?php echo ($vv); ?>" onfocus="jujiaos(this)" onblur="gongsis(this)" style="border: 1px solid #ccc;width: 127px;"><img src="/Public/ydadmin/images/x.png" onclick="remove(this)"></div><?php endforeach; endif; ?>
                        </span>

                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;line-height: 20px;">每个框填写一个关键词，限于6个字内，利于搜索引擎优化推广以及让您的客户更加容易找到产品。</td>
                    </tr>
                    <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;">公司地址 </td>
                        <td colspan="2" style="width:90%;padding-left: 20PX;border-right: none;" class="ypselect">
                            <div data-toggle="distpicker">
                                        <div class="form-group col-lg-2">
                                              <label class="sr-only" for="province2">Province</label>
                                              <select name="com_province" class="form-control" disabled="disabled" id="province2" data-province="<?php echo ($company['com_province']); ?>">
                                              </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                              <label class="sr-only" for="city2">City</label>
                                              <select name="com_city" class="form-control" id="city2" disabled="disabled" data-city="<?php echo ($company['com_city']); ?>"></select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                              <label class="sr-only" for="district2">District</label>
                                              <select name="com_district" class="form-control" disabled="disabled" id="district2"  data-district="<?php echo ($company['com_district']); ?>"></select>
                                        </div>
                                </div>
                            <input type="text" disabled="disabled" placeholder="详细地址" maxlength="50" onfocus="jujiaos(this)" onblur="gongsis(this)" name="com_detailed" class="ypcity" value="<?php echo ($company['com_detailed']); ?>">
                        </td>
                    </tr>
                    
                     <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">媒体报道</td>
                        <td colspan="2" style="width:90%;padding-left: 20PX;border-right: none;">
                            <ul class="ypnewsmain" id="media-ul">   
                               
                            </ul>
                            <div class="cl"></div>
                        </td>
                    </tr>
                   <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-bottom: none;border-right: none;">公司荣誉相册</td>
                        <td colspan="2" style="width:90%;padding-left: 20PX;border-bottom: none;border-right: none;" id="img_image">
                            <span id="
                            "></span>
                            
                            <div class="cl"></div>
                            <div style="position:relative">
                        </div>></td>
                    </tr>
                </table>
            

             
            <script type="text/javascript">
            function img_uploads(){
                $('.ypaddphoto').css('visibility','visible');
            }

            function imgmouseover(obj,bid){
                $('#'+obj.id).siblings('#'+bid).show();
                $('#'+bid).show();
            }

            function imgmouseout(obj,bid){
                $('#'+obj.id).siblings('#'+bid).hide();
                $('#'+bid).hide();
            }

            function xmouseover(obj){
                 $('#'+obj.id).show();
            }
            function xmouseout(obj){
                $('#'+obj.id).hide();
            }
            
            function shanchuss(that,del){
                $.post('/admin/CompanyInfo/img_del',{'id':del},function(res){
                    if (!res){
                        alert('删除失败');
                    }else{
                        $(that).parent('div').remove();
                    }
                })
            }

            function input_focus(obj){
                $('#'+obj.id).parent().css('background','#fff');
                $('#'+obj.id).parent().css('border','1px solid #2196f3');
                $('#'+obj.id).siblings('span').show();
                $('#'+obj.id).css('background','#fff');
                $('#'+obj.id).keyup();
            }

            function input_blur(obj,uid){
                $('#'+obj.id).parent().css('background','#2196f3');
                $('#'+obj.id).css('background','#2196f3');
                $('#'+obj.id).siblings('span').hide();
                $.post('/admin/CompanyInfo/save',{'img_id':uid,'img_title':obj.value},function(res){
                    if(!res){
                        // alert('修改失败');
                    }
                })
            }

            function input_keyup(obj){
                var rem =obj.value.length;
                $('#'+obj.id).siblings('span').html(rem+'/30');
            }

            </script>
                <br><br>
                <h4 style="text-align: center;">公司简介</h4>
                <table style="border: 1px solid;">
                <td ><?php echo ($company['com_synopsis']); ?></td>
                </table>
                
                <br><br>
                <h4 style="text-align: center;">发展历程</h4>
                <table style="border: 1px solid;">
                <td ><?php echo ($company['com_history']); ?></td>
                </table>

                <br><br>
                <h4 style="text-align: center;">公司业务</h4>
                <table style="border: 1px solid;">
                <td ><?php echo ($company['com_service']); ?></td>
                </table>

                <br><br>
                <h4 style="text-align: center;">公司荣誉</h4>
                <table style="border: 1px solid;">
                <td ><?php echo ($company['com_honor']); ?></td>
                </table>

                <br><br>
                <h4 style="text-align: center;">公司文化</h4>
                <table style="border: 1px solid;">
                <td ><?php echo ($company['com_culture']); ?></td>
                </table>

                  <br>

                  <div style="text-align: center;"><textarea name="" id="beizhu" cols="30" rows="10" style="width: 550px;height: 125px;" placeholder="备注"></textarea></div>
                  <br>
                    <div class="ypsubmit" style="text-align: center;">
                        <button class="tijiao" onclick="return shenhe(1)">通过</button>
                        <button class="tijiao" onclick="return shenhe(2)">未通过</button>
                        <button class="tijiao" onclick="return shenhe(0)">未审核</button>
                        <button class="tijiao" onclick="return fanhui()">返回</button>
                    </div>
                    <br>

                </div>
            </form>
            </div>
        </div>
<script>
    function shenhe(val)
    {   
        var beizhu = $('#beizhu').val();
        var com_id = '<?php echo ($company['com_id']); ?>';
        $.post('/Upadmin/User/audit',{'beizhu':beizhu,'com_id':com_id,'status':val},function(res){
            if (res){
                alert('操作成功');
                // window.opener=null;window.close();
                window.location.href="/Upadmin/User/User_list";
            }else{
                alert('操作失败');
            }
        })
        return false;
    }

    function fanhui(){
        window.location.href="/Upadmin/User/User_list";
        return false;
    }
</script>
    
    </div>

    <div class="ypnews">
        <div class="yptianjia">
            <div class="yptjheader">
                <span>媒体报道</span>
                <a href="javascript:" class="guanbi">×</a>
            </div>
            <div class="yptjmain">
                <form active="" method="post" class="yptjform"> 
                    标题：<input type="text" disabled="disabled" placeholder="请输入媒体报道标题" vlaute="" id="add_title"  name="med_title"><br><br>
                    来源：<input type="text" disabled="disabled" placeholder="请输入媒体报道来源" vlaute="" id="add_source"  name="med_source"><br><br>
                    网址：<input type="text" disabled="disabled" placeholder="请输入媒体报道网址(注意:不带http://)" vlaute="" id="add_url" name="med_url"><br><br>
                    <input type="reset" style="display: none;" class="yptjqk" name="">
                </form>
                <a href="javascript:" class="nesbaocui add_media">保存</a>
                <a href="javascript:" class="nesquxiao guanbi" >取消</a>
            </div>
        </div>
    </div>
    
        <div class="xiugaissa">
        <div class="yptianjia">
            <div class="yptjheader">
                <span>媒体报道</span>
                <a href="javascript:" class="guanbi">×</a>
            </div>
            <div class="yptjmain">
                <form active="" method="post" class="yptjform"> 
                    <input type="hidden" name="med_id" value="" id="hidden_id">
                    标题：<input type="text" disabled="disabled" placeholder="请输入媒体报道标题" vlaute="" id="save_title"  name="med_title"><br><br>
                    来源：<input type="text" disabled="disabled" placeholder="请输入媒体报道来源" vlaute="" id="save_source"  name="med_source"><br><br>
                    网址：<input type="text" disabled="disabled" placeholder="请输入媒体报道网址" vlaute="" id="save_url" name="med_url"><br><br>
                    <input type="reset" style="display: none;" class="yptjqk" name="">
                </form>
                <a href="javascript:" class="nesbaocui save_med" onclick="xiugaissaa(this)">保存</a>
                <a href="javascript:" class="nesquxiao guanbi" >取消</a>
            </div>
        </div>
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
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
          //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
          {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
        ]
    });
    $('.table-sort tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
});
</script>
<script type="text/javascript">
    ajax_img();
        function img_save(){
            $.post('/admin/CompanyInfo/img_add',$('#formall').serialize(),function(res){
                if(res){
                    $('#fileList2').html(''); 
                    $('.ypaddphoto').css('visibility','hidden');
                    $('.ypaddphotook').css('visibility','hidden');
                    ajax_img();
                }else{
                    alert('保存失败');
                }
            })
        }

        function ajax_img(){
            var store_id = '<?php echo ($company[com_storeid]); ?>';
            $.post('/Upadmin/User/ajax_img',{'store_id':store_id},function(res){
                $('#img_image').html(res);
            })
        }

           
    </script>

        
        
</body>


<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>