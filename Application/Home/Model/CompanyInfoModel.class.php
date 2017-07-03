<?php
namespace Home\Model;

use Think\Model;
use Think\Page;

class CompanyInfoModel extends Model
{	
	
 

    //添加云狄百科
    public function company_list()
    {
        //查询最新的公司
         $store_info = $this->where(array('com_is_rec'=>1,'com_status'=>1))->limit(8)->select();
         //遍历更新数据
         foreach ($store_info as $key => &$value) {
                $value['com_synopsis'] = mb_substr(strip_tags($value['com_synopsis']),0,60);
                // if(mb_strlen($value['com_synopsis'],'utf-8')>39) $value['com_synopsis'] .= '...';
                $value['img_id'] = M('image')->where(array('img_storeid'=>$value['com_storeid']))->getField('img_id');
         }
         //查询类型
         $store_cate = M('store_class','','DB_CONFIG2')->select();

        return ['company'=>$store_info,'store_cate'=>$store_cate];

    }

    public function company_list2()
    {
        //查询最新的公司
         $store_info = $this->where(array('com_is_rec'=>1,'com_status'=>1))->page($_GET['p'].', 8')->select();
         //遍历更新数据
         foreach ($store_info as $key => &$value) {
                // $value['com_synopsis'] = mb_substr(strip_tags($value['com_synopsis']),0,60);
                preg_match_all("/[\x{4e00}-\x{9fa5}]+/u", $value['com_synopsis'], $chinese);

                $value['com_synopsis'] = mb_substr(implode('',$chinese[0]),0,60);

                // if(mb_strlen($value['com_synopsis'],'utf-8')>39) $value['com_synopsis'] .= '...';
                $value['img_id'] = M('image')->where(array('img_storeid'=>$value['com_storeid']))->getField('img_id');
         }
         //查询类型

        return $store_info;

    }
    //行业
    public function company_con(){
        //接收参数
        $sc_id = I('get.scid');
        //查询选项卡5个
        $map['com_scid'] = $sc_id;
        $map['com_status'] = 1;
        $store_info = $this->where($map)->order('com_id desc')->limit(5)->select();
        //遍历更改数据
        foreach ($store_info as $key => &$val) {
            //字符截取
            $val['com_synopsis'] = mb_substr(strip_tags($val['com_synopsis']),0,330);
            if(mb_strlen($val['com_synopsis'],'utf-8')>329) $val['com_synopsis'] .= '...';
            //转变数据
            // 主营商品跨库查询
            $map['store_id'] = $val['com_storeid'];
            $val['com_url'] = unserialize($val['com_url']);
            $val['com_scname'] = unserialize($val['com_scname']);
            $val['com_scname'] = implode('、', $val['com_scname']);
            $aaa[] = templogo($val['com_storeid'],100,100);
        }
        // 整个百科查询
        $map['com_scid'] = $sc_id;
        $map['com_status'] = 1;
        $count = $this->where($map)->count();
        $p = getpage($count,10);
        $store_all = $this->where($map)->order('com_id desc')->limit($p->firstRow , $p->listRows)->select();
         //遍历更改数据
        foreach ($store_all as $key => &$val) {
            $val['com_synopsis'] = mb_substr(strip_tags($val['com_synopsis']),0,100);
            if(mb_strlen($val['com_synopsis'],'utf-8')>99) $val['com_synopsis'] .= '...';
            $val['com_url'] = unserialize($val['com_url']);
            // 主营商品
            $mapall['store_id'] = $val['com_storeid'];
            // $store_allcate = M('store','','DB_CONFIG2')->where( $mapall['store_id'])->getField('store_zy');
            $val['com_scname'] = unserialize($val['com_scname']);
            $val['com_scname'] = implode('、', $val['com_scname']);
        }
        //查询类型
         $store_cate = M('store_class','','DB_CONFIG2')->where(array('sc_id'=>$sc_id))->find();
        return ['store_info'=>$store_info,'store_cate'=>$store_cate,'page'=>$p->show(),'store_all'=>$store_all];
    }

    //公司百科信息
    public function company_details()
    {   
        $com_id = I('get.id','');
        //查询公司信息
        $map_com['com_id'] = ['eq' , $com_id];
        $company = $this->where($map_com)->find();
        $company['com_visit'] = $company['com_visit']+1;
        $this->where($map_com)->save(array('com_visit'=>$company['com_visit']));
        //url转变数组
        $company['com_url'] = unserialize($company['com_url']);
        $company['com_scname'] = implode(',',unserialize($company['com_scname']));
        $company['com_synopsis'] = $this->href_img($company['com_synopsis'],$com_id);
        $company['com_content'] = $this->href_img($company['com_content'],$com_id);
        $company['com_history'] = $this->href_img($company['com_history'],$com_id);
        $company['com_service'] = $this->href_img($company['com_service'],$com_id);
        $company['com_honor'] = $this->href_img($company['com_honor'],$com_id);
        $company['com_culture'] = $this->href_img($company['com_culture'],$com_id);
        // 过滤公司简介的图片
        preg_match_all("/[\x{4e00}-\x{9fa5}]+/u", $company['com_synopsis'], $chinese);
        $company['com_synopsiss'] =  mb_substr(strip_tags(implode('',$chinese[0])),0,200);
        if(mb_strlen($company['com_synopsiss'],'utf-8')>199) $company['com_synopsiss'] .= '...';
        /*$company['com_synopsiss'] =  preg_replace("/<img.*?>/si","",$company['com_synopsis']);*/
        //查询媒体
        $map_med['med_storeid'] = ['eq' , $company['com_storeid']];
        $media = M('media')->where($map_med)->select();

        return ['company'=>$company , 'media'=>$media];

    }

    public function href_img($str,$id)
    {

        preg_match_all("/<img.*?>/si",$str,$matches);
        foreach ($matches[0] as $val) {
            preg_match('/<img.*?src="(.*?)".*?>/is', $val,$img);
            $str = str_replace($val,'<a href="/CompanyInfo/setimg?id='.$id.'&img='.$img[1].'" target="_blank">'.$val.'</a>',$str);
        }
        return $str;

    }

    public function company_img()
    {
        $id = I('id');
        $img = I('img');
        $company = M('company_info')->where(array('com_id'=>$id))->find();
        if (!$company) return false;
        $company['com_url'] = unserialize($company['com_url']);
        $company['com_synopsis'] = $this->img_all($company['com_synopsis'],'公司简介');
        $company['com_content'] = $this->img_all($company['com_content'],'公司介绍');
        $company['com_history'] = $this->img_all($company['com_history'],'公司历程');
        $company['com_service'] = $this->img_all($company['com_service'],'公司业务');
        $company['com_honor'] = $this->img_all($company['com_honor'],'公司荣誉');
        $company['com_culture'] = $this->img_all($company['com_culture'],'公司文化');
        $array[] = ['img'=>$company['com_logo'],'img_cat'=>'公司logo'];
        foreach ($company['com_synopsis'] as $val) {
            $array[] = $val;
        }
        foreach ($company['com_content'] as $val2) {
            $array[] = $val2;
        }
        foreach ($company['com_history'] as $val3) {
            $array[] = $val3;
        }
        foreach ($company['com_service'] as $val4) {
            $array[] = $val4;
        }
        foreach ($company['com_honor'] as $val5) {
            $array[] = $val5;
        }
        foreach ($company['com_culture'] as $val6) {
            $array[] = $val6;
        }
        foreach ($array as $key=>$val){
            if ($val['img'] == $img){
                array_unshift($array,$array[$key]);
                unset($array[$key+1]);
            }
        }
        $photo = M('image')->field('img_title,img_path')->where(array('img_storeid'=>$company['com_storeid']))->select();
        foreach($photo as $vv){
            $array[] = ['img'=>$vv['img_path'],'img_cat'=>$vv['img_title'] ]; 
        }
        $array = array_values($array);
        return $array;
    }

    public function img_all($str,$name)
    {
        preg_match_all("/<img.*?>/si",$str,$matches);
        foreach ($matches[0] as $val) {
            preg_match('/<img.*?src="(.*?)".*?>/is', $val,$img);
            $arr[] = ['img'=>$img[1],'img_cat'=>$name];
        }
        return $arr;
    }

    public function search()
    {
        $com_name = I('com_name');
        $where['com_name'] = array('like','%'.$com_name.'%');
        $where['com_status'] = 1;
        $count =  $this->where($where)->count();
        $Page = new Page($count,20);
        $show = $Page->show();
        $res = M('company_info')->where($where)->select();
        foreach ($res as $key => &$val) {
            $val['com_synopsis'] = mb_substr(strip_tags($val['com_synopsis']),0,150);
            if(mb_strlen($val['com_synopsis'],'utf-8')>149) $val['com_synopsis'] .= '...';
            $val['com_url'] = unserialize($val['com_url']);
            $val['com_scname'] = unserialize($val['com_scname']);
            $val['com_scname'] = implode('、', $val['com_scname']);
        }
        return array('res'=>$res,'show'=>$show,'count'=>$count);
    }



}








