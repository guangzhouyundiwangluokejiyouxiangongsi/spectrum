<?php
namespace Home\Controller;
use Think\Controller;
class CompanyInfoController extends CommonController {

    public function _initialize()
    {   
        if (is_mobile()) redirect('/Mobile/index');
        $this->navigation = M('navigation')->where(array('is_show'=>1,'pid'=>0))->select();
        $this->assign('navigation',$this->navigation);
        $this->system = M('system')->find();
        $this->assign('system',$this->system);
    }

   public function lists()
   {    
        //实例化
        $company = D('company_info');
        //调用方法
        $company_data = $company->company_con();
        //分配数据
        $this->assign($company_data);
        //显示模板
        $this->display();
    }

    /**
     * 个人百科
     */
    public function details()
    {   
        //实例化
        $company = D('company_info');
        $com_id = I('get.id','');
        if (!$com_id){
          $this->error('该公司不存在');
          exit;
        }
         //调用方法
        $company_data = $company->company_details();
        $this->assign($company_data);
        $this->display();
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

    public function setimg()
    {   
        $com_id = I('id');
        $company = D('company_info');
        $company_img = $company->company_img();
        $num = count($company_img);
        $this->assign('num',$num);
        $this->assign('company_img',$company_img);
        $this->assign('com_id',$com_id);
        $this->display();
    }

}
