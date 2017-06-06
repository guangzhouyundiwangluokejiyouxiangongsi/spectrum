<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyInfoController extends CommonController {

    //添加公司信息
    public function add_info()
    {      
        // $store_class = M('store_class','','DB_CONFIG2')->getField('sc_id,sc_name');
        // 判断是否有数据 
        //实例化
        $company = D('company_info'); 
        if(IS_GET){
                //查询
                 $company = $company->company_list();
                 // 如有就分配
                if($company){
                    if($company['company']['com_status'] === '0') redirect('/admin/index/rightset'); 
                    $this->assign($company);
                }
        }

        //表单提交时添加
        if(IS_POST){
            //调用model方法
            $data = $company->add_company();
            // 判断
            if($data['status']){
                // redirect(U('/Admin/CompanyInfo/add_info'));
                echo '<script>confirm("操作成功");window.location.href="/Admin/CompanyInfo/add_info";</script>';
            }else{
                $this->error($data['msg']);
            }

        }
        $this->display();
    }

    public function ajax_yulan()
    {
        $company = D('company_info'); 
        if (IS_POST){
            if (!I('com_name')) $this->ajaxReturn();
            $data = $company->add_company();
            // 判断
            if($data['status']){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn();
            }
        }
    }
    public function ajax_img(){
        $image = M('image')->where(array('img_storeid'=>STORE_ID))->select();
        foreach($image as $key=>$val){
            $val['img_path'] = editorimg($val['img_path'],185,125);
          $res[] = '<div class="ypphoto"><div class="shanchuss" onclick="shanchuss(this,'.$val['img_id'].');" id="del'.$val['img_id'].'" onmouseover="xmouseover(this)" onmouseout="xmouseout(this)">×</div><img src="'.$val['img_path'].'" id="imgsrc'.$val['img_id'].'" onmouseover="imgmouseover(this,'.'\''.'del'.$val['img_id'].'\''.')" onmouseout="imgmouseout(this,'.'\''.'del'.$val['img_id'].'\''.')"><div class="ypphoinput"><input name="title[]" type="text" size="50" value="'.$val['img_title'].'" maxlength="30" onblur="input_blur(this,'.$val['img_id'].')" onfocus="input_focus(this)" onkeyup="input_keyup(this)" id="img'.$val['img_id'].'"><span class="red title_length" ></span></div></div>';
        }
        $res[] .= '<div class="cl"></div><div style="position:relative"><span class="danjishangchuans" style="cursor:pointer;" onclick="img_uploads()">点击上传</span></td></div>';
        $this->ajaxReturn($res);
   }

   	public function save(){
   		$img_id = I('img_id');
   		$img_title = I('img_title');
   		if (!$img_id) $this->ajaxReturn();
	    $image = M('image')->where(array('img_id'=>$img_id))->save(array('img_title'=>$img_title));
	    $this->ajaxReturn($image);
    }


    public function img_del(){
        $id = I('id');
        if (!$id) $this->ajaxReturn();
        $res = M('image')->where(array('img_id'=>$id))->delete();
        $this->ajaxReturn($res);
    }

    public function img_add(){
        $img_title = I('img_title');
        $img_path = I('img_path');
        foreach ($img_title as $key => $val) {
        	M('image')->add(array('img_storeid'=>STORE_ID,'img_addtime'=>time(),'img_path'=>$img_path[$key],'img_title'=>$val));
        }
        $this->ajaxReturn(true);
    }
}
