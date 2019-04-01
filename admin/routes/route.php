<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
return [
    '__pattern__' => [
        'name' => '\w+',
    ],

    // 定义资源路由
    '__rest__'=>[
        'admin/rules'		   =>'admin/rules',
        'admin/groups'		   =>'admin/groups',
        'admin/users'		   =>'admin/users',
        'admin/menus'		   =>'admin/menus',
        'admin/structures'	   =>'admin/structures',
        'admin/posts'          =>'admin/posts',
    ],


    'admin/base/login' => ['admin/base/login', ['method' => 'POST']], // 登录

    'admin/base/relogin'	=> ['admin/base/relogin', ['method' => 'POST']], // 记住登录

    'admin/base/setInfo' => ['admin/base/setInfo', ['method' => 'POST']],// 修改密码

    'admin/base/logout' => ['admin/base/logout', ['method' => 'POST']],// 退出登录

    'admin/base/getConfigs' => ['admin/base/getConfigs', ['method' => 'POST']],// 获取配置

    'admin/base/getVerify' => ['admin/base/getVerify', ['method' => 'GET']],// 获取验证码


    // MISS路由
    '__miss__'  => 'admin/base/miss',

];

Route::get('/',function(){
    return 'Hello,world!';
});
