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
use think\facade\Route;
use xiaodi\JWTAuth\Middleware\Jwt;

Route::post('v1/login/index', 'v1.Login/index');
Route::post('v1/login/signup', 'v1.Login/signup');

Route::group('v1/user', function () {
    Route::post('logout', 'v1.User/logout'); //登出
})->middleware(Jwt::class);

Route::miss(function () {
    return json(['code' => '404', 'msg' => '404 Not Found!', 'data' => '']);
});
