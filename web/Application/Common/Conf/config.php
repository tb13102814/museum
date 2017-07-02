<?php
return array(
    'DB_TYPE'   => 'mysql',
    'DB_HOST'   => 'localhost',
    'DB_NAME'   => 'museum',
    'DB_USER'   => 'root',
    'DB_PWD'    => 'zancheng1',
    'DB_PREFIX' => 'm_',
    'DB_CHARSET'=> 'utf8',
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' =>true,
    'URL_HTML_SUFFIX' =>'',
    'MODULE_ALLOW_LIST' => array('Home','Admin'), // 允许访问的列表
    //开启路由
    'URL_ROUTER_ON'=>true,
    'URL_ROUTE_RULES'=>array(
         ':id\d'=>'Home/Appreciate/article',	
	 'display/:id\d'=>'Home/Display/show',
    ),
    //'TMPL_PARSE_STRING'=>array('__UPLOAD__'=>__ROOT__.'/Public/Uploads'),
    'UPLOAD_PICTURE'=>'/museum/Public/Uploads/',
);
