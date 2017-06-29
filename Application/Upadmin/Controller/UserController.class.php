<?php
namespace Upadmin\Controller;
use Think\Controller;
class UserController extends CommonController {

   public function user_list()
   {    
        $count = M('company_info')->count();
        $p = getpage($count,10);
        $company_list = M('company_info')->field('com_id,com_storeid,com_url,com_name,com_province,com_city,com_district,com_detailed,com_visit,com_praise,com_time,com_is_rec,com_status')->limit($p->firstRow, $p->listRows)->select();
        $array = array('未审核','审核通过','审核未通过');
        foreach($company_list as &$vv){
        	$vv['com_url'] = unserialize($vv['com_url']);
          $vv['com_status'] = $array[ $vv['com_status'] ];
        }
        $this->assign('page',$p->show());
        $this->assign('company_list',$company_list);
        $this->display();
   }

   public function ajax_list()
   {    
        $status = I('status');
        $count = M('company_info')->where(array('com_status'=>$status))->count();
        $p = getpage($count,10);
        $company_list = M('company_info')->where(array('com_status'=>$status))->field('com_id,com_storeid,com_url,com_name,com_province,com_city,com_district,com_detailed,com_visit,com_praise,com_time,com_is_rec,com_status')->limit($p->firstRow, $p->listRows)->select();
        $array = array('未审核','审核通过','审核未通过');
        foreach($company_list as &$vv){
          $vv['com_url'] = unserialize($vv['com_url']);
          $vv['com_status'] = $array[ $vv['com_status'] ];
        }
        $this->assign('page',$p->show());
        $this->assign('company_list',$company_list);
        $this->display();

   }

   public function ajax_save()
   {
   		$id = I('com_id');
   		if (!$id) $this->ajaxReturn();
   		$data['com_visit'] = I('com_visit');
   		$data['com_praise'] = I('com_praise');
   		if (!$data['com_visit']) unset($data['com_visit']);
   		if (!$data['com_praise']) unset($data['com_praise']);
   		$res = M('company_info')->where(array('com_id'=>$id))->save($data);
   		$this->ajaxReturn($res);
   }

   public function ajax_is_rec()
   {
        $id = I('com_id');
        $data['com_is_rec'] = I('com_is_rec',0);
        $res = M('company_info')->where(array('com_id'=>$id))->save($data);
        $this->ajaxReturn($res);
   }

   public function shenhe()
   {
        $com_id = I('com_id');
        $company = M('company_info')->where(array('com_id'=>$com_id))->find();
        $company['com_url'] = unserialize($company['com_url']);
        $this->assign('company',$company);
        $this->display();
   }

   public function media_list(){
        $store_id = I('store_id');
        $map['med_storeid'] = ['eq' , $store_id];
        $media = M('media')->where($map)->select();
        $data = [];
        if($media){
            $data['status'] = true;
            $data['info'] = $this->ajax_media($media);
        }else{
            $data['status'] = false;
        }
         $this->ajaxReturn($data['info']);
        // return $data;
    }

   public function ajax_media($media){
      $strli ='';
      foreach($media as $key => $value){
          $strli .= '<li><span class="yptjtitl"><a target="_blank" href=" http://' .$value['med_url'] .'" id="' .$value['med_url'] .'">'.$value['med_title'].'</a></span><span class="laiyuan">'.$value['med_source'].'</span></li>';
      }
      return $strli;
  }

  public function ajax_img(){
        $store_id = I('store_id');
        $image = M('image')->where(array('img_storeid'=>$store_id))->select();
        foreach($image as $key=>$val){
            $val['img_path'] = editorimg($val['img_path'],185,125);
          $res[] = '<div class="ypphoto"><div class="shanchuss" id="del'.$val['img_id'].'" onmouseover="xmouseover(this)" onmouseout="xmouseout(this)">×</div><img src="'.$val['img_path'].'" id="imgsrc'.$val['img_id'].'" onmouseover="imgmouseover(this,'.'\''.'del'.$val['img_id'].'\''.')" onmouseout="imgmouseout(this,'.'\''.'del'.$val['img_id'].'\''.')"><div class="ypphoinput"><input name="title[]" type="text" size="50" readonly="readonly" value="'.$val['img_title'].'" maxlength="30" onblur="input_blur(this,'.$val['img_id'].')" onfocus="input_focus(this)" onkeyup="input_keyup(this)" id="img'.$val['img_id'].'"><span class="red title_length" ></span></div></div>';
        }
        // $res[] .= '<div class="cl"></div><div style="position:relative"><span class="danjishangchuans" style="cursor:pointer;" onclick="img_uploads()">点击上传</span></td></div>';
        $this->ajaxReturn($res);
   }

   public function audit()
   {    
        $data2['com_status'] = I('status');
        $data['name'] = session('admin')['admin'];
        $data['beizhu'] = I('beizhu');
        $data['status'] = I('status');
        $data['com_id'] = I('com_id');
        $data['addtime'] = time();
        $audit = M('audit')->add($data);
        $res = M('company_info')->where(array('com_id'=>$data['com_id']))->save($data2);
        if ($audit) $this->ajaxReturn(true);
        $this->ajaxReturn();
   }

   public function audit_list()
   {     
        $count = M('audit')->count();
        $p = getpage($count,10);
        $audit = M('audit')->order('addtime desc')->limit($p->firstRow, $p->listRows)->select();
        $array = array('未审核','通过','未通过');
        foreach($audit as &$v){
            $v['status'] = $array[ $v['status'] ];
            $v['addtime'] = date('Y-m-d H:i:s',$v['addtime']);
        }
        $this->assign('audit',$audit);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
   }

   public function ajax_del()
   {    
        if (session('admin')['admin'] != 'admin'){
            $res = array('status'=>-1,'msg'=>'不是超级管理员不能删除用户');
            $this->ajaxReturn($res);
        }
        $com_id = I('com_id');
        if (!$com_id){
          $res = array('status'=>-1,'msg'=>'用户不存在');
          $this->ajaxReturn($res);
        }
        $ress = M('company_info')->where(array('com_id'=>$com_id))->delete();
        if ($ress){
            $res = array('status'=>1,'msg'=>'删除成功');
        }else{
            $res = array('status'=>-1,'msg'=>'删除失败');
        }
        $this->ajaxReturn($res);
   }

   public function ajax_del_audit()
   {    
        if (session('admin')['admin'] != 'admin'){
            $res = array('status'=>-1,'msg'=>'不是超级管理员不能删除审核记录');
            $this->ajaxReturn($res);
        }
        $id = I('id');
        if (!$id){
          $res = array('status'=>-1,'msg'=>'记录ID不存在');
          $this->ajaxReturn($res);
        }
        $ress = M('audit')->where(array('id'=>$id))->delete();
        if ($ress){
            $res = array('status'=>1,'msg'=>'删除成功');
        }else{
            $res = array('status'=>-1,'msg'=>'删除失败');
        }
        $this->ajaxReturn($res);
   }

}