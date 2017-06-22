<?php
namespace Home\Controller;

use Think\Controller;


class CommonController extends Controller {

    public function _initialize()
    {   
    	define('DOMAIN_NAME','http://www.yundi88.com');
        if (!cookie('uname') && session('user') && session('seller')){
            $uname = session('user')['nickname'] ? session('user')['nickname'] : session('seller')['seller_name'];
            cookie('uname',$uname);
        }
    }

}