<?php
namespace Home\Controller;

use Think\Controller;


class MobileController extends Controller {

     public function _initialize()
    {   
        if (!is_mobile()) redirect('/index/index');
    }
     public function index()
     {  
        $this->display();
     }

     public function company()
     {
        $company_info = M('company_info')->where(array('com_is_rec'=>1,'com_status'=>1))->page($_GET['p'].',5')->select();
        foreach($company_info as &$v){
            $v['com_logo'] = templogo($v['com_storeid'],355,255);
            $v['com_synopsis'] = mb_substr(strip_tags($v['com_synopsis']),0,50);
            $res[] = '<li class="a"><a href="/mobile/detail?com_id='.$v['com_id'].'"><div class="img"><img src="'.$v['com_logo'].'" ></div><div class="txt"><h3>'.$v['com_name'].'</h3><p>'.$v['com_synopsis'].'</p><span>'.$v['com_visit'].' 次浏览</span></div></a></li>';
        }
        $this->ajaxReturn($res);
     }
    
    public function detail()
    {
        $com_id = I('com_id');
        $company = M('company_info')->where(array('com_id'=>$com_id))->find();
        $company['com_logo'] = templogo2($company['com_storeid'],41,41);
        $company['com_url'] = unserialize($company['com_url']);
        $img = M('image')->where(array('img_storeid'=>$company['com_storeid']))->getField('img_path');
        // $img = tempimg2($img['img_id'],1920,710);
        $media = M('media')->where(array('med_storeid'=>$company['com_storeid']))->select();
        M('company_info')->where(array('com_id'=>$com_id))->save(array('com_visit'=>$company['com_visit']+1));
        $this->assign('media',$media);
        $this->assign('img',$img);
        $this->assign('company',$company);
        $this->display();
    }

    public function sort()
    {   
        $sort = M('store_class','','DB_CONFIG2')->select();
        $this->assign('sort',$sort);
        $this->display();
    }

    public function sort_cat()
    {
        $sc_id = I('sc_id');
        $sc_name = M('store_class','','DB_CONFIG2')->where(array('sc_id'=>$sc_id))->getField('sc_name');
        $this->assign('sc_name',$sc_name);
        $this->assign('sc_id',$sc_id);
        $this->display();
    }

    public function company_cat()
    {   
        $sc_id = I('sc_id');
        $company_info = M('company_info')->where(array('com_scid'=>$sc_id,'com_status'=>1))->page($_GET['p'].',5')->select();
        foreach($company_info as &$v){
            $v['com_logo'] = templogo($v['com_storeid'],355,255);
            $v['com_synopsis'] = mb_substr(strip_tags($v['com_synopsis']),0,50);
            $res[] = '<li class="a"><a href="/mobile/detail?com_id='.$v['com_id'].'"><div class="img"><img src="'.$v['com_logo'].'" ></div><div class="txt"><h3>'.$v['com_name'].'</h3><p>'.$v['com_synopsis'].'</p><span>'.$v['com_visit'].' 次浏览</span></div></a></li>';
        }
        $this->ajaxReturn($res);
    }

    public function search_com()
    {   
        $name = I('name');
        $this->assign('name',$name);
        $this->display();
    }

    public function ajax_search()
    {
        $name = I('name');
        $where['com_name'] = array('like','%'.$name.'%');
        $where['com_status'] = 1;
        $company_info = M('company_info')->where($where)->page($_GET['p'].',5')->select();
        foreach($company_info as &$v){
            $v['com_logo'] = templogo($v['com_storeid'],355,255);
            $v['com_synopsis'] = mb_substr(strip_tags($v['com_synopsis']),0,50);
            $res[] = '<li class="a"><a href="/mobile/detail?com_id='.$v['com_id'].'"><div class="img"><img src="'.$v['com_logo'].'" ></div><div class="txt"><h3>'.$v['com_name'].'</h3><p>'.$v['com_synopsis'].'</p><span>'.$v['com_visit'].' 次浏览</span></div></a></li>';
        }
        $this->ajaxReturn($res);
    }

    public function ajax_thumb()
    {
        $com_id = I('id');
        $data['session_id'] = cookie('PHPSESSID');
        $data['add_time'] = time();
        $data['thumb_id'] = $com_id;
        $where['session_id'] = $data['session_id'];
        $where['end_time'] = array('gt',time());
        $where['thumb_id'] = $com_id;
        if (M('thumb')->where($where)->find()) $this->ajaxReturn(array('status'=>-1,'msg'=>'一天只能点赞一次'));
        if (!$com_id) $this->ajaxReturn(array('status'=>-1,'msg'=>'该公司不存在'));
        $company_info = M('company_info')->where(array('com_id'=>$com_id))->find();
        $company_info['com_praise'] = $company_info['com_praise']+1;
        $res = M('company_info')->where(array('com_id'=>$com_id))->save(array('com_praise'=>$company_info['com_praise']));
        $data['end_time'] = strtotime(date('Y-m-d',strtotime('+1 day')));
        M('thumb')->add($data);
        $this->ajaxReturn(array('status'=>1,'msg'=>'点赞成功'));
    }
}
