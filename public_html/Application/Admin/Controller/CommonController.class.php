<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{		

	public function _initialize()
    {	
    	if(session('seller_id') > 0 && session('user') != '' && session('store_id') > 0 && session('seller') !=''){
            define('STORE_ID',session('store_id')); //将当前的session_id保存为常量，供其它方法调用
    	}else{
    		echo '<script>confirm("登陆信息已过期");top.location.href="http://www.yundi88.com/User/login.html";</script>';
            exit;
    	}
    	if (!cookie('uname')){
    		$uname = session('user')['nickname'] ? session('user')['nickname'] : session('seller')['seller_name'];
    		cookie('uname',$uname);
    	}
    }

}