<?php
namespace Upadmin\Model;

use Think\Model;

class NavigationModel extends Model
{	
	public function navigation_add()
	{
		$post = I('post.');
		$post['addtime'] = time();
		$id = $post['id'];
		unset($post['id']);
		if ($id){
			$this->where(array('id'=>$id))->save($post);
			$res = array('status'=>1,'msg'=>'修改成功');
		}else{
			$this->add($post);
			$res = array('status'=>1,'msg'=>'添加成功');
		}
		return $res;
	}

	public function navigation_save()
	{

	}
	
	public function navigation_pid()
	{
		return $this->where(array('pid'=>0))->getField('id,navigation');
	}

	public function navigation_list()
	{	
		$array = array('不显示','显示');
		$array2 = array('原窗口','新窗口');
		$count = $this->count();
		$p = getpage($count,10);
		$navigation = $this->order('orderid')->limit($p->firstRow, $p->listRows)->select();
		foreach($navigation as &$vv){
			$vv['is_show'] = $array[$vv['is_show']];
			$vv['is_new_open'] = $array2[$vv['is_new_open']];
			$vv['pid'] ? $vv['pid'] = $this->where(array('pid'=>$vv['pid']))->getField('navigation') : $vv['pid'] = '顶级导航';
		}
		return array('navigation'=>$navigation,'page'=>$p->show());
	}

}
