<?php
namespace Upadmin\Controller;
use Think\Controller;
class WebController extends CommonController {
    
   public function index()
   {
        $this->display();
   }

   public function navigation_list()
   {    
        $navigation = D('navigation')->navigation_list();
        $this->assign('navigation',$navigation['navigation']);
        $this->assign('page',$navigation['page']);
        $this->display();
   }

   public function navigation_add()
   {    
        if (IS_POST){
           $navigation = D('navigation');
           $data = $navigation->navigation_add();
           if ($data['status']){
                echo '<script>alert("'.$data['msg'].'");top.window.location.href="navigation_list"</script>';
           }else{
                echo '<script>alert("'.$data['msg'].'");history.go(-1);</script>';
           }
        }
        $id = I('uid');
        if ($id){
            $navigation2 = M('navigation')->where(array('id'=>$id))->find();
            $this->assign('navigation2',$navigation2);
        }
        $navigation = D('navigation')->navigation_pid();
        $this->assign('navigation',$navigation);
        $this->display();
   }

   public function shuffling_list()
   {  
        $shuffling = D('shuffling')->shuffling_list();
        $this->assign('page',$shuffling['page']);
        $this->assign('shuffling',$shuffling['shuffling']);
        $this->display();
   }

   public function shuffling_add()
   {    
        if (IS_POST){
            $data = D('shuffling')->shuffling_add();
            if ($data['status'] == 1){
                echo '<script>alert("'.$data['msg'].'");top.window.location.href="shuffling_list"</script>';
            }else{
                echo '<script>alert("'.$data['msg'].'");history.go(-1);</script>';
            }
        }
        $id = I('uid');
        if ($id){
            $shuffling = M('shuffling')->where(array('id'=>$id))->find();
            $this->assign('shuffling',$shuffling);
        }
        $shuffling_cat = M('shuffling')->where(array('pid'=>0))->getField('id,img_cat');
        $this->assign('shuffling_cat',$shuffling_cat);
        $this->display();
   }

   public function shuffling_del()
   {
        $id = I('id');
        if (!$id) $this->ajaxReturn();
        $res = M('shuffling')->where(array('id'=>$id))->delete();
        $this->ajaxReturn($res);
   }

   public function navigation_del()
   {
        $id = I('id');
        if (!$id) $this->ajaxReturn();
        $res = M('navigation')->where(array('id'=>$id))->delete();
        $this->ajaxReturn($res);
   }

   public function system()
   {
        if (IS_POST){
            $post = I('post.');
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
            $upload->rootPath  =     './Public/Uploads/img/'; //保存根路径'rootPath'      =>  './Public/Uploads/mod/', //保存根路径 
            $upload->savePath  =     ''; // 设置附件上传目录    // 上传单个文件     
            $info   =   $upload->uploadOne($_FILES['logo']);   
            if(!$info) {// 上传错误提示错误信息        
                // $post['img'] = '';    //$upload->getError()
            }else{// 上传成功 获取上传文件信息         
                $post['logo'] = '/Public/Uploads/img/'.$info['savepath'].$info['savename'];    
            }
            $id = $post['id'];
            unset($post['id']);
            $res = M('system')->where(array('id'=>$id))->save($post);
            if ($res) {
                echo '<script>alert("修改成功")</script>';
            }else{
              echo '<script>alert("修改失败");history.go(-1);</script>';

            }
        }
        $system = M('system')->find();
        $this->assign('system',$system);
        $this->display();
   }

}
