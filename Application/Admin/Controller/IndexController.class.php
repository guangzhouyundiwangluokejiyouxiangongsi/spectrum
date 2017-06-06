<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {


    public function index()
    {     
        header('location:http://www.yundi88.com/seller');
      	 // $this->display();
    }

   public function uploads()
   {	
   		$this->display();
   }


   public function webup(){
       $config = array(
   				'mimes'         =>  array(), //允许上传的文件MiMe类型
   				'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
   				'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
   				'autoSub'       =>  true, //自动子目录保存文件
   				'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
   				'rootPath'      =>  './Public/Uploads/mod/', //保存根路径
   				'savePath'      =>  '',//保存路径
   		);
   		$upload = new \Think\Upload($config);// 实例化上传类
   		$info   =   $upload->upload();
   		if(!$info) {
        $info = $upload->getErrorMsg();
   			// $this->error($upload->getError());// 上传错误提示错误信息
        $this->ajaxReturn($info,'JSON'); 
   		}else{
        $return['url'] = '/Public/Uploads/mod/'.$info['file']['savepath'].$info['file']['savename'];
        $return['name'] = $info['file']['savename'];
   			$return['status'] = 1;
        $this->ajaxReturn($return);
   		}
    }

    public function img_add(){
        $img_title = I('img_title');
        $img_path = I('img_path');
        foreach ($img_title as $key => $val) {
          M('image')->add(array('img_storeid'=>STORE_ID,'img_addtime'=>time(),'img_path'=>$img_path[$key],'img_title'=>$val));
        }
        $this->ajaxReturn(true);
    }

    public function tindex()
    {
        $company_info = M('company_info')->where(array('com_storeid'=>STORE_ID))->find();
        if ($company_info['status'] == 2){
            $msg = M('audit')->where(array('com_id'=>$company_info['com_id']))->getField('beizhu');
            $this->assign('msg',$msg);
        }
        $beizhu = M('audit')->where(array('com_id'=>$company_info['com_id'],'status'=>2))->order('addtime desc')->find();
        $this->assign('beizhu',$beizhu);
        $this->assign('company',$company_info);
        $this->display();
    }
}
