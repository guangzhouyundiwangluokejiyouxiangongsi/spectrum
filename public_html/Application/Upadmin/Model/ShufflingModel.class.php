<?php
namespace Upadmin\Model;

use Think\Model;

class ShufflingModel extends Model
{	
	public function Shuffling_add()
	{	
		$post = I('post.');
		$post['addtime'] = time();
		$id = I('id');
		unset($post['id']);
		$upload = new \Think\Upload();// 实例化上传类    
		$upload->maxSize   =     3145728 ;// 设置附件上传大小    
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
		$upload->rootPath  =  	 './Public/Uploads/img/'; //保存根路径'rootPath'      =>  './Public/Uploads/mod/', //保存根路径 
		$upload->savePath  =     ''; // 设置附件上传目录    // 上传单个文件     
		$info   =   $upload->uploadOne($_FILES['img']);   
		if(!$info) {// 上传错误提示错误信息        
			// $post['img'] = '';    //$upload->getError()
		}else{// 上传成功 获取上传文件信息         
			$post['img'] = '/Public/Uploads/img/'.$info['savepath'].$info['savename'];    
		}
		if ($id){
			$this->where(array('id'=>$id))->save($post);
			$res = ['status'=>1,'msg'=>'修改成功'];
		}else{
			$this->add($post);
			$res = ['status'=>1,'msg'=>'添加成功'];
		}
		return $res;
		
	}

	public function shuffling_list()
	{	
		$count = M('shuffling')->count();
		$p = getpage($count,15);
		$shuffling = M('shuffling')->order('orderid')->limit($p->firstRow,$p->listRows)->select();
		$array = array('不显示','显示');
		$array2 = array('新窗口','原窗口');
		foreach($shuffling as &$vv){
			$vv['is_new_open'] = $array2[ $vv['is_new_open'] ];
			$vv['is_show'] = $array[ $vv['is_show'] ];
			$vv['pid'] ? $vv['pid'] = M('shuffling')->where(array('id'=>$vv['pid']))->getField('img_cat') : $vv['pid'] = '顶级栏目';
		}
		return array('shuffling'=>$shuffling,'page'=>$p->show());
	}
}
