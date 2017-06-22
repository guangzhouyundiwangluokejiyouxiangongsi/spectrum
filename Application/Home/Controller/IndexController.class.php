<?php
namespace Home\Controller;

use Think\Controller;


class IndexController extends CommonController {

     public function _initialize()
    {   
        if (is_mobile()) redirect('/Mobile/index');
        $this->footer = M('article_cat','','DB_CONFIG2')->where(array('parent_id'=>0,'show_in_nav'=>1))->order('sort_order')->limit(5)->select();
        foreach($this->footer as $vv){
            $res[] = M('article','','DB_CONFIG2')->where(array('cat_id'=>$vv['cat_id'],'is_open'=>1))->select();
        }
        $this->footerlist = $res;
        $this->assign('footerlist',$this->footerlist);
        $this->link = M('friend_link','','DB_CONFIG2')->where(array('is_show'=>1))->order('orderby')->select();
        $this->assign('footer',$this->footer);
        $this->assign('link',$this->link);
        $this->navigation = M('navigation')->where(array('is_show'=>1,'pid'=>0))->select();
        $this->assign('navigation',$this->navigation);
        $this->system = M('system')->find();
        $this->assign('system',$this->system);
    }
    public function index(){
        //公司信息
        // $company = D('company_info');
        // $company_list = $company->company_list();
        $navigation = M('navigation')->where(array('is_show'=>1,'pid'=>0))->select();
        $shuffling = M('shuffling')->where(array('is_show'=>1,'pid'=>1))->select();
        $shuffling2 = M('shuffling')->where(array('is_show'=>1,'pid'=>6))->select();
        $store_cate = M('store_class','','DB_CONFIG2')->select();
        $this->assign('shuffling',$shuffling);
        $this->assign('shuffling2',$shuffling2);
        $this->assign('navigation',$navigation);
        $this->assign('store_cate',$store_cate);
        $this->display();
    }

    public function ajax_company()
    {   
        $company = D('company_info');
        $company_list = $company->company_list2();
        $this->assign('company',$company_list);
        $this->display();
    }
    public function logout(){
        cookie('uname',null);
        header('location:http://www.yundi88.com/user/logout.html');

    }

    public function search()
    {   
        $company_info = D('company_info')->search();
        $this->assign('company_info',$company_info['res']);
        $this->assign('page',$company_info['show']);
        $this->assign('count',$company_info['count']);
        $this->display();

    }


}
