<?php
namespace Admin\Controller;
use Think\Controller;
class ImageController extends CommonController {



    public function index()
    {
       $this->display();
    }

    /**
     * 添加公司相册
     * jinjun
     */
    public function add_image()
    {   
        $file_infor = var_export($_FILES,true);
        file_put_contents("/Index.php/Admin/Image/img.php".$file_infor);
      
            //实例化
            $company = D('image');
            //调用model方法
            $data = $company->add_image_upload();
    
            $this->ajaxReturn($file_infor);

    
    }

}
