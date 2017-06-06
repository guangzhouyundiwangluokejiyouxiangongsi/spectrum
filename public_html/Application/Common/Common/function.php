<?php
	//密码加密的方法
	function md5pwd($password)
	{
		if (!$password){
			return '';
		}
		$res = md5(substr(md5($password),0,8).substr(md5($password),0,-8).substr(md5($password),8,8).substr(md5($password),16,8));
		return $res;
	}

	// 验证验证码
	function check_code($code, $id = ""){  
	    $verify = new \Think\Verify();  
	    return $verify->check($code, $id);  
	} 

	// 截取公司简介
	function getSubstr($string, $start, $length) {
	    if(mb_strlen($string,'utf-8')>$length){
	        $str = mb_substr($string, $start, $length,'utf-8');
	        return $str.'...';
	    }else{
	        return $string;
	    }
	}

	// 获取用户名进cookie
	function getuname()
	{
		return cookie('uname');
	}

	// 分页
	function getpage($count, $pagesize = 10) {
	    $p = new Think\Page($count, $pagesize);
	    // $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $p->setConfig('prev', '上一页');
	    $p->setConfig('next', '下一页');
	    $p->setConfig('last', '末页');
	    $p->setConfig('first', '首页');
	    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');//%HEADER%加个为共多少记录
	    $p->lastSuffix = false;//最后一页不显示为总页数
	    return $p;
	}

	// 判断设备
	function is_mobile() {
	 	static $is_mobile = null;
	  
	 	if ( isset( $is_mobile ) ) {
	  		return $is_mobile;
	 	}
	  
	 	if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
	  		$is_mobile = false;
	 		} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false 
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
	   		$is_mobile = true;
		} else {
		  	$is_mobile = false;
		}
	  
	 	return $is_mobile;
	}