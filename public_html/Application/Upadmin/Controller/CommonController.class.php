<?php
namespace Upadmin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize()
    {
    	if (!session('admin')){
    		header('location:/upadmin/login/login');
    	}
    }

}
