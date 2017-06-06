<?php
namespace Upadmin\Controller;
use Think\Controller;
class LoginController extends Controller {

    
    public function login()
    {    
        if (session('admin')) header('location:/upadmin/index/index');
        if (IS_POST){
            $data = D('admin')->login();
            if (!$data){
                echo '<script>alert("账号密码不匹配");history.go(-1);</script>';
            }else{
                header('location:/upadmin/index/index');
            }
        }
        $this->display();
    }
 
    public function yzm(){
        $Verify =     new \Think\Verify();// 设置验证码字符为纯数字
        $Verify->codeSet = '0123456789'; 
        $Verify->fontSize = 18;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }

}
