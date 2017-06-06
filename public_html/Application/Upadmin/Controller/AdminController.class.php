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

}
