<?php
namespace Admin\Model;

use Think\Model;

class CompanyInfoModel extends Model
{	
	

            // 自动验证
            protected $_validate =[
                // 公司名
                ['com_name','0,50','公司名不能大于50字符',2,'length'],
                // 公司简介
                 // ['com_synopsis','require','公司简介不能为空',2],
                 //公司网址
                  // ['com_url','require','公司网址未填写或格式不对',2],
                //发展历程
                 // ['com_history','require','发展历程不能为空',2],
                //业务
                 // ['com_service','require','业务不能为空',2],
                //荣誉
                 // ['com_honor','require','荣誉不能为空',2],
                // 文化
                 // ['com_culture','require','文化不能为空',2]
            ];
        
        /**
         * 查询
         */
        public function company_list()
        {   
            //店铺id
            $store_id = STORE_ID;
            $map_com['com_storeid'] = ['eq' , $store_id];
            //查询公司信息
            $company = $this->where($map_com)->find();
            $company['com_url'] = unserialize($company['com_url']);
            $company['com_scname'] = unserialize($company['com_scname']);
            //查询公司相册
            $map_med['img_storeid'] = ['eq' , $store_id];
            $image = M('image')->where($map_med)->select();

        
            return ['company' => $company,'image'=>$image];

        }

        //添加云狄百科
        public function add_company()
        {
            // 接受参数
            $post = $_POST;
            foreach ($post['com_url'] as $key => $value) {
                if(!$value){
                    unset($post['com_url'][$key]);
                }
            }   
            foreach ($post['com_scname']as $k => $v) {
                if (!$v){
                    unset($post['com_scname'][$k]);
                }
            }
            $post['com_url'] = serialize($post['com_url']);
            //查询行业类型
            $cate = M('store','','DB_CONFIG2')->where(array('store_id'=>STORE_ID))->getField('sc_id');
            $post['com_scname'] = serialize($post['com_scname']);
            $post['com_scid'] = $cate;
            //获取商家id
            $post['com_storeid'] = STORE_ID;
            //设置添加更新时间
            $post['com_time'] = time();
            //公司信息
            // 数据创建
            $post = $this->create($post);
            
            //判断
            if ($post) {
                //如有id 那么已有数据是更新
                if($post['com_id']){
                    //更新
                    $post['com_status'] = 0;
                    $map['com_id'] = ['eq' , $post['com_id']];
                    $data['status'] = $this->where($map)->save($post); 
                }else{
                    // 添加
                    $data['status'] = $this->add($post); 
                }
                
            }else{
                //状态
                $data['status'] = false;
                $data['msg'] = $this->getError();
            }
            return $data;

        }





}
