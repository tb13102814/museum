<?php
return array(
    'TMPL_PARSE_STRING'=>array('__PUBLIC__'=>__ROOT__.'/Public/Admin'),
 //   'DEFAULT_MODULE' => 'Admin', // 配置默认分组

    //auth认证
    'AUTH_CONFIG'=>array(

        'AUTH_ON' => true, //认证开关

        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。

        'AUTH_GROUP' => 'm_auth_group', //用户组数据表名

        'AUTH_GROUP_ACCESS' => 'm_auth_group_access', //用户组明细表

        'AUTH_RULE' => 'm_auth_rule', //权限规则表

        'AUTH_USER' => 'm_admin'//用户信息表

    ),
    'URL_MODEL'=>2,
    //超级管理员
    'ADMIN_AUTH_KEY'=>'admin',
    //自定义success页面模板
    'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump',
    //自定义error页面
    'TMPL_ACTION_ERROR'=>'Public:dispatch_jump',


);
