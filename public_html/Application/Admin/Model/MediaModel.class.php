<?php
namespace Admin\Model;

use Think\Model;

class MediaModel extends Model
{	
	

    
    protected $_validate = [
            // 自动验证
            //标题
            ['med_title','0,50','标题不能大于50字符',2,'length'],
            // 来源
             ['med_source','require','来源不能为空'],
             ['med_source','0,50','来源不能大于50字符',2,'length'],
            //网址
             // ['med_url', '/^((ht|f)tps?):\/\/[\w\-]+(\.[\w\-]+)+([\w\-\.,@?^=%&:\/~\+#]*[\w\-\@?^=%&\/~\+#])?$/','网址格式错误',2,'regex']

        ];


    /**
     * 添加media
     */
    public function add_media_info()
    {
        // 接受参数
        $post = I('post.');
        $post['med_url'] = trim( $post['med_url']);
        // $post['add_storeid'] = session('user.store_id');
        $post['med_storeid'] = STORE_ID;
        $post['med_addtime'] = time();
        //公司信息
        // 数据创建
        $post = $this->create($post);
        //判断
        $data = [];
        if ($post) {
            $media_id = $this->add($post); 
            $data['status'] = true;
        }else{
            $data['status'] = false;
            $data['msg'] = $this->getError();
        }

        $map['med_storeid'] = ['eq' , STORE_ID];
        $media = M('media')->where($map)->order('med_id desc')->limit(6)->select();
        $data['info'] = $this->ajax_media($media);

        return $data;

    }

    //查询
    public function media_info_list(){

        $map['med_storeid'] = ['eq' , STORE_ID];
        $media = $this->where($map)->order('med_id desc')->limit(6)->select();
        $data = [];
        if($media){
            $data['status'] = true;
            $data['info'] = $this->ajax_media($media);
        }else{
            $data['status'] = false;
        }

        return $data;
    }

    //删除
    public function media_delete()
    {   
        // 接收参数
        $media_id = I('post.id');
        //更改状态
        $map['med_id'] = ['eq' , $media_id];
        $data = $this->where($map)->delete();
        //返回值
        return $data;
    }

    //修改
    public function media_dosave()
    {
        // 接收参数
        $post = I('post.');
        $media_id = $post['id'];
        $post['med_addtime'] = time();
        $post['med_url'] = trim( $post['med_url']);
        $data = [];
        //修改
        $post = $this->create($post);
        if($post){
             $map['med_id'] = ['eq' , $media_id];
            $data_save = $this->where($map)->save($post);
            if($data_save){
                //调用查询
                $data['status'] = true;
                $data = $this->media_info_list();   
            }
        }else{
                $data['status'] = false;
                $data['msg'] = $this->getError();
        }
      
        
        return $data;
    }

    //ajax遍历
    public function ajax_media($media){
       
        $strli ='';
        foreach($media as $key => $value){
            $strli .= '<li><span class="yptjtitl"><a target="_blank" href=" http://' .$value['med_url'] .'" id="' .$value['med_url'] .'">'.$value['med_title'].'</a></span><span class="laiyuan">'.$value['med_source'].'</span><i class="glyphicon glyphicon-pencil xiugai" onclick="xiugai(this)" medid="'.$value['med_id'].'"></i> <i class="glyphicon glyphicon-trash shanchu" onclick="shanchu(this)"  medid="'.$value['med_id'].'"></i></li>';
        }
        return $strli;
    }

 






}
