<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('/welcome');
});
Route::get('/index',function(){
    session(['users' => 'zhangmengfei']);
    return view('/index/index');
});
Route::get('/index/index','IndexController@index');
Route::get('/users/index','UserController@index');
Route::get('/users/login','UserController@login');
Route::get('/users/register','UserController@register');
Route::get('/contact','ContactController@index');

Route::get('/students/index', 'Student\StudentController@index');
Route::get('/students/create', 'Student\StudentController@create');
Route::get('/students/login', 'Student\StudentController@login');

Route::get('/teachers/index', 'Teacher\TeacherController@index');
Route::get('/teachers/create', 'Teacher\TeacherController@create');
Route::get('/teachers/login', 'Teacher\TeacherController@login');

Route::get('/admin', 'AdminController@index');
/****************************************
 * 后台相关的路由
 * 1. 用户登录界面
 * 2. 用户登录
 * 3. 注销登录
 ****************************************/
Route::get('/admin/login' ,'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\Auth\LoginController@login');
Route::post('/admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
Route::middleware(['admin.auth', 'admin.permission'])->prefix('admin')->namespace('Admin')->group(function(){

    /****************************************
     * 1. 后台主页
     * 2. 主页显示的欢迎页面
     ****************************************/
    Route::get('/', 'HomeController@index');
    Route::get('/welcome', 'HomeController@welcome')->name('admin.welcome');

    /****************************************
     * 1. 改变商品的状态，上架 or 下架
     * 2. 商品图片的上传
     * 3. 商品详情的图片上传
     * 4. 根据图片的 id 删除图片
     ****************************************/
    Route::any('/products/change/alive/{product}', 'ProductsController@changeAlive');
    Route::post('/products/upload/images', 'ProductsController@upload');
    Route::post('/products/upload/detail', 'ProductsController@uploadDetailImage');
    Route::any('/products/delete/images', 'ProductsController@deleteImage');


    /****************************************
     * 1. 分类后台的管理路由
     * 2. 商品后台分类的管理路由
     * 3. 商品图片的后台管理路由
     ****************************************/
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/products', 'ProductsController');
    Route::resource('/productImages', 'ProductImagesController', ['only' => ['index', 'destroy']]);

    /****************************************
     * 1. 用户后台的管理路由
     * 2. 管理员后台的管理路由
     * 3. 角色的后台管理路由
     ****************************************/
    Route::resource('/users', 'UsersController', ['only' => ['index']]);
    Route::resource('/admins', 'AdminsController');
    Route::resource('/roles', 'RolesController');
    Route::resource('/student', 'StudentController');
});

