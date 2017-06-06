<?php
namespace Admin\Model;

use Think\Model;

class ImageModel extends Model
{	

    /**
     * 添加照片
     */
    public function add_image_upload()
    {
        // 接受参数
        $post = I('post.');
        //可能有相册标题,相册描述
        //相册添加时间
        $post['img_addtime'] = time();
        //空数组
        $data = [];
            //图片上传
            // 数据
            $config = [
                'maxSize' => 3145728,
                'savePath' => './Image/',
                'saveName' => ['uniqid',''],
                'exts' => ['jpg', 'gif', 'png', 'jpeg'],
                'autoSub' => true,
                'subName' => ['date','Ym'],
                'rootPath' =>  './Public/Uploads/'
            ];
            // 实例化
            $upload = new \Think\Upload($config);
            // 文件上传
            $info  =  $upload->upload($_FILES);

            if($info){
                // 遍历提取数据
                foreach ($info as $k => $val){
                    $filepost = [];
                    //相片相册id
                    $filepost['img_addtime'] =  time();
                    //相片添加时间
                    $filepost['img_storeid'] =  STORE_ID;
                    //文件路径加名称
                    $filepost['img_path'] = $val['savepath'].$val['savename'];
                    //添加
                    $img_id = $this->add($filepost);

                }
            }else{
                 $data['status'] = false;
            }

        return $data;

    }

 






}
