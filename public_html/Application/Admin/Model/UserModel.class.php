<?php
namespace Admin\Model;

use Think\Model;

class UserModel extends Model
{	
	public function index()
	{
		$search = I('get.search');
		$content = I('get.content');
		switch($search)
		{
			case'clt_id':
				$map['clt_id'] = ['eq',$content];
			break;

			case'clt_user':
				$map['clt_user'] = ['eq',$content];
			break;

			case'clt_phone':
				$map['clt_phone'] = ['eq',$content];
			break;

            case'clt_realname':
                $map['clt_realname'] = ['like','%'.$content.'%'];
            break;
		}
		$page = new \Think\Page($this->count(),5);
		$show = $page->show();
		// $map['clt_status'] = ['eq',2];
		$list = $this->where($map)->order('clt_addtime desc')->field('clt_id,clt_user,clt_phone,clt_sex,clt_realname,clt_addtime,clt_status')->limit($page->firstRow.','.$page->listRows)->select();
		$type = [1=>'Disabled',2=>'Open'];
		foreach($list as &$val){
			$val['clt_status'] = $type[$val['clt_status']];
			$val['clt_addtime'] = date('Y-m-d'.' / '. 'H:i');
		}
		return ['list'=>$list,'show'=>$show];
	}

	public function status_change()
	{
		$id = I('post._id');
		$map['clt_status'] = I('post._status');
		if(is_numeric($id) && is_numeric($map['clt_status'])) {
            $res = $this->where(array('clt_id' => $id), 'eq')->save($map);
            if ($res) {
                if ($map['clt_status'] == 1) {
                    return 2;
                } else {
                    return $res;
                }
            }
        }
	}
}
