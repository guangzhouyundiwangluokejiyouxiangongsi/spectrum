<?php
// ini_set('session.cookie_domain', ".yundi88.com");
return array(
	//'配置项'=>'配置值'
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','upadmin'),     // 允许访问的模块
    'DEFAULT_MODULE'       =>    'Home',        // 默认访问的模块()
    'URL_MODEL'             =>  2,      // URL访问模式,2 (REWRITE 模式)
    'URL_ROUTER_ON' => TRUE,
    'URL_ROUTE_RULES' => array(
        '/^c-(\d+)$/' => 'Index/content?id=:1'
    ),

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysqli',    // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'baike',   // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',      // 端口
    'DB_PREFIX'             =>  'yd_',     // 数据库表前缀

    /*调试设置*/
    'SHOW_PAGE_TRACE' =>false,  //开启页面Trace

    'DB_CONFIG2' => array(
        'DB_TYPE' => 'mysql', //数据库类型
        'DB_HOST' => '119.23.36.25', //数据库主机
        'DB_NAME' => 'yundi88_com', //数据库名称
        'DB_USER' => 'root', //数据库用户名
        'DB_PWD' => 'd$js*pwjq&qpj@', //数据库密码
        'DB_PORT' => '3306', //数据库端口
        'DB_PREFIX' => 'yd_', //数据库前缀
        'DB_CHARSET' => 'utf8', // 字符集
        'DB_DEBUG' => '', // 数据库调试模式 开启后可以记录SQL日志
    ),

    /**
     * [上传图片的配置，项目完成后，可以把注释去掉]
     * @author xuzan<m13265000805@163.com>
     * @param  [上传路径，类型,大小]    描述参数作用
     * @return [type] [description]
     */
);
