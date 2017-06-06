<?php

	function templogo($store_id,$width,$height)
	{	
	    if(empty($store_id)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/logo/thumb/$store_id/";
	    $logo_thumb_name ="logo_thumb_{$store_id}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = M('company_info')->where(array('com_storeid'=>$store_id))->getField('com_logo');
	    if(empty($original_img)) return '';
	    
	    $original_img = '.'.$original_img; // 相对路径
	    if(!file_exists($original_img)) return '';
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2,'255,255,255')->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}

	function templogo2($store_id,$width,$height)
	{	
	    if(empty($store_id)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/logo/thumb/$store_id/";
	    $logo_thumb_name ="logo_thumb_{$store_id}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = M('company_info')->where(array('com_storeid'=>$store_id))->getField('com_logo');
	    if(empty($original_img)) return '';
	    
	    $original_img = '.'.$original_img; // 相对路径
	    if(!file_exists($original_img)) return '';
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2,'255,255,255')->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}

	//相册
	function tempimg($img_id,$width,$height)
	{	
	    if(empty($img_id)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/image/thumb/$img_id/";
	    $logo_thumb_name ="image_thumb_{$img_id}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = M('image')->where(array('img_id'=>$img_id))->getField('img_path');
	    if(empty($original_img)) return '';
	    
	    $original_img = '.'.$original_img; // 相对路径
	    if(!file_exists($original_img)) return '';
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2,'247,247,247')->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}

	function tempimg2($img_id,$width,$height)
	{	
	    if(empty($img_id)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/image/thumb/$img_id/";
	    $logo_thumb_name ="image_thumb_{$img_id}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = M('image')->where(array('img_id'=>$img_id))->getField('img_path');
	    if(empty($original_img)) return '';
	    
	    $original_img = '.'.$original_img; // 相对路径
	    if(!file_exists($original_img)) return '';
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2,'255,255,255')->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}

	function editorimg($img,$width,$height)
	{	
		$tmp = $img;
		$img2 = explode('/', $img);
		$num = count($img2);
		$img3 = explode('.',$img2[$num-1]);
		$img = $img3[0];
	    if(empty($img)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/image/editor/$img/";
	    $logo_thumb_name ="image_editor_{$img}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = $tmp;
	    if(empty($original_img)) return '';
	    
	    $original_img = '.'.$original_img; // 相对路径
	    if(!file_exists($original_img)) return '';
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2,'255,255,255')->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}