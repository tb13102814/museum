<?php
return array(
	//'配置项'=>'配置值'
    //样式路径
    'TMPL_PARSE_STRING'=>array(
        '__PUBLIC__'=>__ROOT__.'/Public/Index',
        '__UPLOAD__'=>__ROOT__.'/Public/Uploads'
        ),
    'DEFAULT_MODULE' => 'Home', // 配置默认分组
    //去掉前台项目URL里面的index.php
    'URL_MODEL'=>2,
    // linux下不区分大小写
    'URL_CASE_INSENSITIVE' =>true,
    //错误页面定制
    'TMPL_EXCEPTION_FILE' =>'./Application/Home/View/Index/404.html',
);
