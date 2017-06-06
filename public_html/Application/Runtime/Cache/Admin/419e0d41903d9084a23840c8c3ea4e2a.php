<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
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
    <title>云狄百科</title>
</head>
<style>
.save{display: inline-block;
    text-decoration: none;
    border-radius: 2px;
    margin-top: 60px;
    text-align: center;
    width: 100px;
    margin-left: 30px;
    height: 30px;
    line-height: 30px;}
.fileimg{float: left !important}
.zhuying{float: left;
    border: 1px solid #ccc;
    padding-right: 30px;
    padding-left: 10px;
    height: 30px;
    margin-bottom: 8px;
    margin-top: 8px;
    margin-left: 10px;
    line-height: 30px;
    width: 127px;}
.yulan{
    margin: 0 auto;
    text-align: center;
    width: 100px;
    height: 30px;
    line-height: 30px;
    border-radius: 4px;
    outline: none;
    border: none;
}
.edui-default .edui-editor{width: 100% !important;}
.edui-default .edui-editor-iframeholder{width: 100% !important;}
.ypmain2{border-top: 1px solid #ccc;}
.ypright .ypmain .ypmain2 .ypsubmit{padding: 34px 0px;}
.ypright .ypmain .ypmain1 .ypselect select{margin-left: 0;}

#edui1119_bottombar .edui-default td{border: none !important;}
#edui840_bottombar .edui-default td{border: none !important;}
#edui561_bottombar .edui-default td{border: none !important;}
#edui282_bottombar .edui-default td{border: none !important;}
#edui1_bottombar  .edui-default td{border: none !important;}
/* Let's get this party started     9 9 s o u b a o . com*/
::-webkit-scrollbar {width: 10px;}
/* Track */
::-webkit-scrollbar-track {
 -webkit-box-shadow: inset 0 0 6px #666666;
 -webkit-border-radius: 10px;
 border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
 -webkit-border-radius: 10px;
 border-radius: 10px;
 background:#dedede;
 -webkit-box-shadow: inset 0 0 6px #666666;
}
::-webkit-scrollbar-thumb:window-inactive {background:#666666;}
/*滚动条-end*/
.ma_t_cm{margin-top:15%;}.ver_cm{vertical-align:top}
.callout.callout-inro {background-color: #FCF8E3;color: #C09853;border: 1px solid #FBEED5;}
</style>
<body style="min-height:1000px;background:#ecf0f5;">
    <div class="ypright" style="position:relative;">

        <div class="ypheader">
            <h4><i class="glyphicon glyphicon-book"></i>公司云谱</h4>
        </div>

        <div class="ypmain">
            <div class="ypmain1">
            <form action="<?php echo U('/Admin/CompanyInfo/add_info');?>" method="post" enctype="multipart/form-data" id="formall">
             <input type="hidden" name="com_id" value="<?php echo ($company['com_id']); ?>">
                <table width="100%">
                    <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">公司名称</td>
                        <td style="width:60%;padding-left: 20PX;"><input onfocus="jujiao(this)" onblur="gongsi(this)" type="name" placeholder="请输入公司名称" name="com_name" value="<?php echo ($company['com_name']); ?>" id="com_name"></td>
                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;">输入公司全称  （例如：广州XX设备有限公司）</td>
                    </tr>
                    <tr style="height:120px;">
                        <td style="width:10%;padding-left: 20PX;border-left: none;">公司网址</td>
                        <td style="width: 60%;padding-left: 20PX;line-height: 20px;border-right: none;min-height:120px;border-left: none;" class="wangzhib"><div class="aaaaaa"></div>
                        <?php if(empty($company['com_url'])): ?><input  class="wangzhi" type="name" value=""  name="com_url[]" onfocus="jujiaos(this)" onblur="gongsis(this)"><?php endif; ?>
                            <?php if(is_array($company['com_url'])): foreach($company['com_url'] as $key=>$urllist): ?><div class="wangzhia">
                            
                            <input  class="wangzhi" type="name" value="<?php echo ($urllist); ?>"  name="com_url[]" onfocus="jujiaos(this)" onblur="gongsis(this)">
                 <img src="/Public/ydadmin/images/x.png" onclick="remove(this)"></div><?php endforeach; endif; ?>
                            <a herf="javascript:" class="danjitianjia" onclick ="add()">点击添加</a></td>
                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;">保证每个网址的正确性，每个框填写一个网址，注意：不要带http://</td>
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
                        <td style="width:60%;padding-left: 20PX;" class="filelogo"><img src="<?php echo ((isset($company['com_logo']) && ($company['com_logo'] !== ""))?($company['com_logo']):'/Public/Uploads/logo/logo.jpg'); ?>" id="logo"><div id="up_logo"><span class="danjishangchuang" style="cursor:pointer;">上传LOGO</span></div><input type="hidden" name="com_logo" value="<?php echo ($company['com_logo']); ?>" id="input_logo"></td>
                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;line-height: 20px;">每个企业拥有独特性标志。建议使用200KB大小文件，宽度180*最大高度400的GIF或PNG格式图片，审核通过后将在云狄百科首页/详情页生效（审核通过生效）</td>
                    </tr>
                    <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">主营产品</td>
                        <td style="width:60%;padding-left: 20PX;">
                        <span class="input_class">
                        <?php if(empty($company['com_scname'])): ?><div class="wangzhia"><input  class="zhuying" type="name"  name="com_scname[]" maxlength="6" value="" onfocus="jujiaos(this)" onblur="gongsis(this)" style="border: 1px solid #ccc;width: 127px;"><img src="/Public/ydadmin/images/x.png" onclick="remove(this)"></div><?php endif; ?>
                        <?php if(is_array($company['com_scname'])): foreach($company['com_scname'] as $key=>$vv): ?><div class="wangzhia"><input  class="zhuying" type="name"  name="com_scname[]" maxlength="6" value="<?php echo ($vv); ?>" onfocus="jujiaos(this)" onblur="gongsis(this)" style="border: 1px solid #ccc;width: 127px;"><img src="/Public/ydadmin/images/x.png" onclick="remove(this)"></div><?php endforeach; endif; ?>
                        </span>
                        <a herf="javascript:" class="danjitianjia" onclick ="add_input()">点击添加</a></td></td>

                        <td style="width:30%;padding-left: 20PX;color:red;border-right: none;line-height: 20px;">每个框填写一个关键词，限于6个字内，利于搜索引擎优化推广以及让您的客户更加容易找到产品。</td>
                    </tr>
                    <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;">公司地址 </td>
                        <td colspan="2" style="width:90%;padding-left: 20PX;border-right: none;" class="ypselect">
                            <div data-toggle="distpicker">
                                        <div class="form-group col-lg-2">
                                              <label class="sr-only" for="province2">Province</label>
                                              <select name="com_province" class="form-control" id="province2" data-province="<?php echo ($company['com_province']); ?>">
                                              </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                              <label class="sr-only" for="city2">City</label>
                                              <select name="com_city" class="form-control" id="city2" data-city="<?php echo ($company['com_city']); ?>"></select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                              <label class="sr-only" for="district2">District</label>
                                              <select name="com_district" class="form-control" id="district2"  data-district="<?php echo ($company['com_district']); ?>"></select>
                                        </div>
                                </div>
                            <input type="text" placeholder="详细地址" maxlength="50" onfocus="jujiaos(this)" onblur="gongsis(this)" name="com_detailed" class="ypcity" value="<?php echo ($company['com_detailed']); ?>">
                        </td>
                    </tr>
                     <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-right: none;">媒体报道</td>
                        <td colspan="2" style="width:90%;padding-left: 20PX;border-right: none;">
                            <ul class="ypnewsmain" id="media-ul">   
                               
                            </ul>
                            <div class="cl"></div>
                            <a href="javascript:" class="danjitianjias" onclick="addnews()">点击添加</a></td>                       
                    </tr>
                   <tr>
                        <td style="width:10%;padding-left: 20PX;border-left: none;border-bottom: none;border-right: none;">公司荣誉相册</td>
                        <td colspan="2" style="width:90%;padding-left: 20PX;border-bottom: none;border-right: none;" id="img_image">
                            <span id="
                            "></span>
                            <div class="cl"></div>
                            <div style="position:relative">
                            <span class="danjishangchuans" style="cursor:pointer;" onclick="img_uploads()">点击上传</span></td></div>                   
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

                <div class="ypmain2">
                    <div class="ypmaina">           
                        <div class="ypmainam">
                            <h4>公司简介</h4>
                            <div class='ypfutext'>
                            
                                         <div class="col-lg-12" style="z-index: 10">
                                            <textarea name="com_synopsis" id="myEditor1"><?php echo ($company['com_synopsis']); ?></textarea>  
                                            <script type="text/javascript"> 
                                            var editor1 = new UE.ui.Editor({initialFrameHeight:355,initialFrameWidth:1450});
                                                editor1.render("myEditor1");
                            
                                            </script>  
                                        </div>
                            </div>
                        </div>
                    </div>

                    <div class="ypmaina">           
                        <div class="ypmainam">
                            <h4>发展历程</h4>
                            <div class='ypfutext'>
                                 <!-- 发展历程 -->
                                    <div class="col-lg-12" style="z-index: 10">
                                            <textarea name="com_history" id="myEditor2"><?php echo ($company['com_history']); ?></textarea>  
                                            <script type="text/javascript"> 
                                            var editor2 = new UE.ui.Editor({initialFrameHeight:355,initialFrameWidth:1450});
                                                editor2.render("myEditor2");
                            
                                            </script>  
                                        </div>
            
                                    <!-- 发展历程结束 -->
                            </div>
                        </div>
                    </div>

                    <div class="ypmaina">           
                        <div class="ypmainam">
                            <h4>公司业务</h4>
                            <div class='ypfutext'>
                                 <!-- 公司业务 -->
                                                <div class="col-lg-12" style="z-index: 10">
                                                        <textarea name="com_service" id="myEditor3"><?php echo ($company['com_service']); ?></textarea>  
                                                        <script type="text/javascript"> 
                                                        var editor3 = new UE.ui.Editor({initialFrameHeight:355,initialFrameWidth:1450});
                                                            editor3.render("myEditor3");
                                        
                                                        </script>  
                                                    </div>
                                                <!-- 公司业务结束 -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="ypmaina">           
                        <div class="ypmainam">
                            <h4>公司荣誉</h4>
                            <div class='ypfutext'>
                                <div class="col-lg-12" style="z-index: 10">
                                                      <textarea name="com_honor" id="myEditor4" ><?php echo ($company['com_honor']); ?></textarea>  
                                                        <script type="text/javascript"> 
                                                          var editor4 = new UE.ui.Editor({initialFrameHeight:355,initialFrameWidth:1450});
                                                            editor4.render("myEditor4");
                                             
                                                        </script>  
                                             </div>
                            </div>
                        </div>
                    </div>

                    <div class="ypmainb">           
                        <div class="ypmainam">
                            <h4>公司文化</h4>
                            <div class='ypfutext'>
                                <div class="col-lg-12" style="z-index: 10">
                                                      <textarea name="com_culture" id="myEditor5" ><?php echo ($company['com_culture']); ?></textarea>  
                                                        <script type="text/javascript"> 
                                                          var editor5 = new UE.ui.Editor({initialFrameHeight:355,initialFrameWidth:1450});
                                                            editor5.render("myEditor5");
                                             
                                                        </script>  
                                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="ypsubmit">
                        <button type="submit" onclick="return tijiao()" class="tijiao">提交审核</button>
                        <button class="yulan" onclick="return yulan()">预览</button>
                    </div>
                        
                </div>
            </form>
            </div>
        </div>

    
    </div>

    <div class="ypnews">
        <div class="yptianjia">
            <div class="yptjheader">
                <span>媒体报道</span>
                <a href="javascript:" class="guanbi">×</a>
            </div>
            <div class="yptjmain">
                <form active="" method="post" class="yptjform"> 
                    标题：<input type="text" placeholder="请输入媒体报道标题" vlaute="" id="add_title"  name="med_title"><br><br>
                    来源：<input type="text" placeholder="请输入媒体报道来源" vlaute="" id="add_source"  name="med_source"><br><br>
                    网址：<input type="text" placeholder="网址：注意:不带http://" vlaute="" id="add_url" name="med_url"><br><br>
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
                    标题：<input type="text" placeholder="请输入媒体报道标题" vlaute="" id="save_title"  name="med_title"><br><br>
                    来源：<input type="text" placeholder="请输入媒体报道来源" vlaute="" id="save_source"  name="med_source"><br><br>
                    网址：<input type="text" placeholder="网址：注意:不带http://" vlaute="" id="save_url" name="med_url"><br><br>
                    <input type="reset" style="display: none;" class="yptjqk" name="">
                </form>
                <a href="javascript:" class="nesbaocui save_med" onclick="xiugaissaa(this)">保存</a>
                <a href="javascript:" class="nesquxiao guanbi" >取消</a>
            </div>
        </div>
    </div>
    
    <div class="ypaddphoto" style="visibility:hidden;">
        <div class="yptianjia">
            <div class="yptjheader">
                <span>上传图片</span>
                <a href="javascript:" class="guanbi">×</a>
            </div>
            <div class="yptjmain">
                <div  class="filePicker"><img src="/Public/img/addfile.png" ></div>
                <!-- </div> -->
            </div>
        </div>
    </div>

        <!-- 照片上传成功-->
    
    <div class="ypaddphotook" style="visibility:hidden;">
    <form action="/admin/CompanyInfo/img_add" method="post" id="formall2">
        <div class="yptianjia">
            <div class="yptjheader">
                <span>上传图片</span>
                <a href="javascript:" class="guanbi">×</a>
            </div>
            <div class="ypaddphotookmain">
                <ul>
                <span id="fileList2"></span>
                    <div class="filePicker fileimg"><li class="filesb"><img src="/Public/img/alignaddphoto.png"></li></div>
                    <div class="cl"></div>
                </ul>
            
                <!-- <input type="submit" value="保存" class="phobaocui save"> -->
                <a href="javascript:" class="phobaocui save" onClick="img_save()">保存</a>
                <a href="javascript:" class="phoquxiao guanbi" >取消</a>
            </div>
        </div>
    </form>
    </div>
    <script type="text/javascript">
    ajax_img();
        function img_save(){
            $.post('/admin/CompanyInfo/img_add',$('#formall2').serialize(),function(res){
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
            $.post('/admin/CompanyInfo/ajax_img',function(res){
                $('#img_image').html(res);
            })
        }

           var $list=$("#fileList2");   //这几个初始化全局的百度文档上没说明，好蛋疼
           var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
           var thumbnailHeight = 100;  
           var uploader = WebUploader.create({
                // 选完文件后，是否自动上传。
               auto: true,
                // swf文件路径
               swf: '../Uploader.swf', //加载swf文件，路径一定要对
                // 文件接收服务端。
                server: '<?php echo U("/admin/index/webup");?>',
                // 选择文件的按钮。可选。
                // 内部根据当前运行是创建，可能是input元素，也可能是flash.
                pick: '.filePicker',
                // 只允许选择图片文件。
                accept: {
                    title: 'Images',
                    extensions: 'gif,jpg,jpeg,bmp,png',
                    mimeTypes: 'image/'
                }
            });
      //上传完成事件监听
        uploader.on( 'uploadSuccess', function(file,response) {
            $('.ypaddphotook').css('visibility','visible');

            // console.log(response.name);
            var $li = $('<li id="'+ file.id +'"><img src="'+ response.url +'"><span><i class="glyphicon glyphicon-trash" onclick="removepho(this)"></i></span><input type="text" name="img_title[]" value="'+ response.name +'" placeholder="请输入描述" ><input type="hidden" name="img_path[]" value="'+ response.url +'"/></li>'
                    );
            $list.append( $li );
            // $('.ypaddphoto').css('display','none');

        });

        //单文件上传
        var uploader2 = WebUploader.create({
            // 选完文件后，是否自动上传。
           auto: true,
            // swf文件路径
           swf: '../Uploader.swf', //加载swf文件，路径一定要对
            // 文件接收服务端。
            server: '<?php echo U("/admin/index/webup");?>',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick:{id: '#up_logo',
            //只能选择一个文件上传
            multiple: false},
            // 单文件上传
            // fileNumLimit: 1,
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        uploader2.on( 'uploadSuccess', function(file,response) {
            $('#logo').attr('src',response.url);
            $('#input_logo').attr('value',response.url);
        });
        // 删除照片
        function removepho(that){
            $(that).parent('span').parent('li').remove();

        }
    </script>

        <script type="text/javascript">
       // 添加
            function yulan(){
                if (!$('#com_name').val()){
                    alert('公司名称必须填写');
                    return false;
                }
                $.post('ajax_yulan',$('#formall').serialize(),function(res){
                    if (!res){
                        alert('填写信息有误');
                        return false;
                    }
                    
                })
                window.open('/CompanyInfo/details?id=<?php echo ($company["com_id"]); ?>');
                return false;
            }
            
            function tijiao(){
                if (!$('#com_name').val()){
                    alert('公司名称必须填写');
                    return false;
                }
                $.post('ajax_yulan',$('#formall').serialize(),function(res){
                    if (!res){
                        alert('填写信息有误');
                    }else{
                        window.location.href="/admin/index/rightset";
                    }
                    
                })
                return false;
            }
            function addnews(){
                    $('.ypnews').show();
            }
            $('.guanbi').bind('click',function(){
                $('.ypaddphoto').css('visibility','hidden');
                $('.ypaddphotook').css('visibility','hidden');
                $('.ypnews').hide();
                $('.xiugaissa').hide();
                $('.yptjqk').click();     
                $('#fileList2').html('');             
            })
            $(function(){
                $(".nesbaocui").click(function(){
                    var newObj = $('<li></li>');
                    // $(".ypnewsmain").append(newObj);
                    var result1 = $("#yptjtitle").val();
                    var result2 = $("#yptjlaiyuan").val();
                    newObj.html((newObj.index()+1)+' . '+'<span class="yptjtitl">'+result1+'</span>'+' . '+'<span class="laiyuan">'+result2+'</span>'+'<i class="glyphicon glyphicon-pencil xiugai" onclick="xiugai(this)"></i><i class="glyphicon glyphicon-trash shanchu" onclick="shanchu(this)"></i>').attr("from","new");                  
                    $('.ypnews').hide();
                    $('.yptjqk').click();
                });
            });
                // 删除
                function shanchu(that){
                    //获取属性也就是id值
                    var id = $(that).attr('medid');
                    //url
                    var url = '/Admin/Media/media_isshow';
                    //ajax
                    $.post(url,{'id':id},function(data){
                            if(data){
                                alert('删除成功');
                                $(that).parent('li').remove();
                            }else{
                                alert('删除失败');
                            }
                    });
                    


                }
                // 修改
                function xiugai(that){
                    $('.xiugaissa').show();
                    //获取id
                    var medid = $(that).attr('medid');
                    $('#hidden_id').val(medid);
                    $("#save_title").val($(that).siblings('.yptjtitl').children().html());
                    $("#save_source").val($(that).siblings('.laiyuan').html());
                   $('#save_url').val($(that).siblings('.yptjtitl').children().attr('id'));
                
                    // $(that).siblings('.laiyuan').html($("#yptjlaiyuanssa").val();
                    // $('.xiugaissa').hide();
                    // $('.yptjqk').click();
                }

                function xiugaissaa(that){
                    //id
                     var id = $('#hidden_id').val();
                     //标题
                     var save_title = $('#save_title').val(); 
                     //来源
                     var save_source = $('#save_source').val(); 
                     //更改的地址
                     var save_url = $('#save_url').val();

                    //url
                    var url = '/Admin/Media/media_save';
                    //ajax修改
                    $.post(url,{'id':id,'med_title':save_title,'med_source':save_source,'med_url':save_url},function(data){
                            if(data.status){
                                $('#media-ul').append().html(data.info);
                            }else{
                                alert('修改失败');
                            }
                    });
                    $(that).siblings('.yptjtitl').html($("#save_title").val());
                    $(that).siblings('.laiyuan').html($("#save_source").val());
                    $('.xiugaissa').hide();

                }

                $('.yptjform input').bind('focus',function(){
                        $(this).css('border','1px solid #2196f3');
                });
                $('.yptjform input').bind('blur',function(){
                    $(this).css('border','1px solid #ccc');
                });

        </script>
        
</body>
<script>
    // 媒体标题
          //ajax 提交
          var media_url = '/Admin/Media/media_list';
          $.post(media_url,function(data){
                  if(data){
                      $('#media-ul').append().html(data);
                  }
                  
            
          });

          $('.add_media').click(function(){
             // 媒体标题
              var med_title = $('#add_title').val();
              //来源
              var med_source = $('#add_source').val();
              //网址
              var med_url = $('#add_url').val();
              //ajax 提交
              var media_url = '/Admin/Media/add_media';
              $.post(media_url,{'med_title':med_title,'med_source':med_source,'med_url':med_url},function(data){
                      if(data.status){
                          $('#media-ul').append().html(data.info);
                      }else{
                            alert('添加失败');
                      }
                      
                
              });
          });



        

</script>


</html>