<?php
namespace Upadmin\Controller;
use Think\Controller;
class AdminController extends CommonController {
    
    public function admin_add()
    {	
    	if (IS_POST){
    		$admin = D('admin');
    		$data = $admin->admin_add();
    		if ($data['state'] == 1){
    			echo '<script>alert("'.$data['msg'].'");top.window.location.href="admin_list"</script>';
    		}else{
    			echo '<script>alert("'.$data['msg'].'");history.go(-1);</script>';
    		}
    	}
    	$this->display();
    }

    public function admin_list()
    {	
    	$admin_list=D('admin')->admin_list();
    	$this->assign('admin_list',$admin_list);
    	$this->display();
    }

    public function admin_edit(){
        if (IS_POST){
            $data = I('post.');
            if (!$data['id']){
                 $this->error('修改失败');exit;
            }
            if (!$data['password']){
                $this->error('密码不能为空');exit;
            } 
            if ($data['password'] != $data['password2']){
                $this->error('两次密码不一致');exit;
            }
            $res = M('admin')->where(array('id'=>$data['id'],'password'=>md5pwd($data['oldpwd'])))->find();
            if (!$res){
                $this->error('原密码错误');exit;
            } 
            $res = M('admin')->where(array('id'=>$data['id']))->save(array('password'=>md5pwd($data['password'])));
            if ($res){
                echo '<script>alert("修改成功");top.window.location.href="admin_list"</script>';
            }else{
                $this->error('修改失败');
            }
        }else{
            $id = I('id');
            $this->assign('id',$id);
            $this->display();
        }
    }

}
