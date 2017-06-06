-- 轮播图
CREATE TABLE `yd_carousel` (
  `car_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `car_storeid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `car_imgname` varchar(255) NOT NULL COMMENT '图片名',
  `car_imgpath` varchar(255) NOT NULL COMMENT '图片路径',
  `car_title` varchar(255) NOT NULL COMMENT '标题',
  `car_status` tinyint NOT NULL COMMENT '状态0：禁用，1：启用',
  PRIMARY KEY (`car_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8


-- 公司详情
CREATE TABLE `yd_company_info` (
  `com_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `com_storeid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `com_synopsis` text NOT NULL COMMENT '公司简介',
  `com_content` text NOT NULL COMMENT '公司介绍',
  `com_history` text NOT NULL COMMENT '公司历程',
  `com_service` text NOT NULL COMMENT '公司业务',
  `com_honor` text NOT NULL COMMENT '公司荣誉',
  `com_culture` text NOT NULL COMMENT '公司文化',
  `com_url` varchar(255) NOT NULL COMMENT '官网地址',
  `com_visit` int NOT NULL COMMENT '访问量',
  `com_praise` int NOT NULL COMMENT '点赞量',
  PRIMARY KEY (`com_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8


-- 公司地址
CREATE TABLE `yd_address` (
  `add_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `add_storeid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `add_province` varchar(30) NOT NULL COMMENT '省份',
  `add_city` varchar(30) NOT NULL COMMENT '市区',
  `add_district` varchar(30) NOT NULL COMMENT '县',
  `add_detailed` varchar(255) NOT NULL COMMENT '详细地址',
  PRIMARY KEY (`add_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8

-- 媒体
CREATE TABLE `yd_media` (
  `med_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `med_storeid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `med_title` varchar(255) NOT NULL COMMENT '新闻标题',
  `med_content` text NOT NULL COMMENT '新闻内容',
  `med_author` varchar(30) NOT NULL COMMENT '作者',
  `med_source` varchar(255) NOT NULL COMMENT '来源',
  `med_isshow` tinyint NOT NULL COMMENT '0:不显示，1：显示',
  `med_img` varchar(255) NOT NULL COMMENT '图片路径加名',
  `med_visit` int NOT NULL COMMENT '访问量',
  `med_praise` int NOT NULL COMMENT '点赞量',
  `med_addtime` int NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`med_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8

-- 相册
CREATE TABLE `yd_album` (
  `alb_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `alb_storeid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `alb_title` varchar(255) NOT NULL COMMENT '相册标题',
  `alb_description`  varchar(255) NOT NULL COMMENT '相册描述',
  `alb_addtime` int NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`alb_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8

-- 照片
CREATE TABLE `yd_iamge` (
  `img_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `img_albid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `img_title` varchar(255) NOT NULL COMMENT '图片标题',
  `img_description`  varchar(255) NOT NULL COMMENT '图片描述',
  `img_addtime` int NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`img_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8


-- 广告
CREATE TABLE `yd_advertisement` (
  `adv_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `adv_storeid` int unsigned NOT NULL COMMENT '店铺（公司）id',
  `adv_title` varchar(255) NOT NULL COMMENT '广告标题',
  `adv_url`  varchar(255) NOT NULL COMMENT '广告链接',
  `adv_status` tinyint NOT NULL COMMENT '广告状态',
  `adv_addtime` int NOT NULL COMMENT '添加时间',
  `adv_endtime` int NOT NULL COMMENT '结束时间',
  PRIMARY KEY (`adv_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8



