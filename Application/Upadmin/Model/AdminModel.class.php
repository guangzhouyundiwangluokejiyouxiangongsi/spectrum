<?php
namespace Upadmin\Model;

use Think\Model;

class AdminModel extends Model
{	
	protected $_validate = array(
	array('admin', 'require', '账号不能为空！', 0, '', 3),
	array('admin', '', '账号名已存在！', 0, 'unique', 3),
	array('password2','password','确认密码不正确',0,'confirm'),
	);

	public function admin_add()
	{	
		$post = I('post.');
		$post['addtime'] = time();
		if (!$post['password']) return array('state'=>-1,'msg'=>'密码不能为空！');
		$post['password'] = md5pwd($post['password']);
		$post['password2'] = md5pwd($post['password2']);
		$post = $this->create($post);
		if (!$post){
			return array('state'=>-1,'msg'=>$this->getError());
		}
		if($this->add($post)){
			return array('state'=>1,'msg'=>'添加成功');
		}else{
			return array('state'=>-1,'msg'=>'添加失败');
		}
	}

	public function admin_list()
	{
		return $this->select();
	}

	public function login()
	{
		$post = I('post.');
		if(check_code($post['yzm']) === false){
			echo '<script>alert("验证码错误");history.go(-1);</script>';
			exit;
		}
		$post['password'] = md5pwd($post['password']);
		$res = $this->where(array('admin'=>$post['admin'],'password'=>$post['password']))->find();
		if ($res){
			session('admin',$res);
		}
		return $res;
	}


}
