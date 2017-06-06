<?php
namespace Admin\Controller;
use Think\Controller;
class MediaController extends CommonController {



    public function index()
    {   
       $this->display();
    }

    /**
     * 添加公司媒体
     * jinjun
     */
    public function add_media()
    {   
        //表单提交时添加
            //实例化
            $media = D('media');
            //调用model方法
            $data = $media->add_media_info();
             $this->ajaxReturn($data);
           

        
    }

    /**
     * 查询公司媒体
     * jinjun
     */
    public function media_list()
    {   
        //表单提交时添加
            //实例化
            $media = D('media');
            //调用model方法
            $data = $media->media_info_list();

            if($data['status']){

                 $this->ajaxReturn($data['info']);
            }
           

        
    }

    /**
     * 修改公司媒体
     */
     public function media_save()
    {   
        //表单提交时添加
            //实例化
            $media = D('media');
            //调用model方法
            $data = $media->media_dosave();

             if($data['status']){

                 $this->ajaxReturn($data);
            }

    }

    /**
     * 删除公司媒体
     */
     public function media_isshow()
    {   
        //表单提交时添加
            //实例化
            $media = D('media');
            //调用model方法
            $data = $media->media_delete();

            if($data){

                 $this->ajaxReturn($data);
            }

    }

}
