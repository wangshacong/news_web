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

// Route::get('/', function () {
//     return view('welcome');
// });


//后台页面
//登录页面
Route::get('cxjy_admin/login', 'Admin\AdminController@login');
//登录验证
Route::post('/cxjy_admin/dologin', 'Admin\AdminController@dologin');
//退出登录
Route::get('cxjy_admin/logout', 'Admin\AdminController@logout');
 Route::group(['middleware' => 'login'], function () {
     //首页
     Route::get('/cxjy_admin', 'Admin\AdminController@index');
     //用户列表
     Route::get('/cxjy_admin/user', 'Admin\AdminController@userindex');
     //用户添加页面
     Route::get('/cxjy_admin/user/create', 'Admin\AdminController@usercreate');
     //用户添加
     Route::post('cxjy_admin/user/shore', 'Admin\AdminController@usershore');
     //用户修改页面
     Route::get('cxjy_admin/user/{id}/update', 'Admin\AdminController@userupdate');
     //用户提交修改
     Route::post('cxjy_admin/user/{id}/edit', 'Admin\AdminController@useredit');
     //用户删除
     Route::get('cxjy_admin/user/{id}/destroy', 'Admin\AdminController@userdestroy');

     //第一个网站
     //分类列表
     Route::get('/cxjy_admin/sort1', 'Admin\Sort1Controller@sortindex');
     //分类添加页面
     Route::get('/cxjy_admin/sort1/create', 'Admin\Sort1Controller@sortcreate');
     //分类添加
     Route::get('/cxjy_admin/sort1/shore', 'Admin\Sort1Controller@sortshore');
     //分类修改页
     Route::get('/cxjy_admin/sort1/{id}/edit', 'Admin\Sort1Controller@sortedit');
     //分类修改
     Route::get('/cxjy_admin/sort1/{id}/update', 'Admin\Sort1Controller@sortupdate');
     //分类删除
     Route::get('/cxjy_admin/sort1/{id}/destroy', 'Admin\Sort1Controller@sortdestroy');
    
     //第一个网站
     //新闻列表
     Route::get('/cxjy_admin/news1', 'Admin\Sort1Controller@newsindex');
     //新闻添加页
     Route::get('/cxjy_admin/news1/create', 'Admin\Sort1Controller@newscreate');
     //新闻添加
     Route::post('/cxjy_admin/news1/shore', 'Admin\Sort1Controller@newsshore');
     //新闻修改页
     Route::get('/cxjy_admin/news1/{id}/edit', 'Admin\Sort1Controller@newsedit');
     //新闻修改
     Route::post('/cxjy_admin/news1/{id}/update', 'Admin\Sort1Controller@newsupdate');
     //新闻删除
     Route::get('/cxjy_admin/news1/{id}/destroy', 'Admin\Sort1Controller@destroy');

     //第二个网站
     //分类列表
     Route::get('/cxjy_admin/sort2', 'Admin\Sort2Controller@sortindex');
     //分类添加页面
     Route::get('/cxjy_admin/sort2/create', 'Admin\Sort2Controller@sortcreate');
     //分类添加
     Route::get('/cxjy_admin/sort2/shore', 'Admin\Sort2Controller@sortshore');
     //分类修改页
     Route::get('/cxjy_admin/sort2/{id}/edit', 'Admin\Sort2Controller@sortedit');
     //分类修改
     Route::get('/cxjy_admin/sort2/{id}/update', 'Admin\Sort2Controller@sortupdate');
     //分类删除
     Route::get('/cxjy_admin/sort2/{id}/destroy', 'Admin\Sort2Controller@sortdestroy');
    
     //第二个网站
     //新闻列表
     Route::get('/cxjy_admin/news2', 'Admin\Sort2Controller@newsindex');
     //新闻添加页
     Route::get('/cxjy_admin/news2/create', 'Admin\Sort2Controller@newscreate');
     //新闻添加
     Route::post('/cxjy_admin/news2/shore', 'Admin\Sort2Controller@newsshore');
     //新闻修改页
     Route::get('/cxjy_admin/news2/{id}/edit', 'Admin\Sort2Controller@newsedit');
     //新闻修改
     Route::post('/cxjy_admin/news2/{id}/update', 'Admin\Sort2Controller@newsupdate');
     //新闻删除
     Route::get('/cxjy_admin/news2/{id}/destroy', 'Admin\Sort2Controller@destroy');

     //第三个网站
     //分类列表
     Route::get('/cxjy_admin/sort3', 'Admin\Sort3Controller@sortindex');
     //分类添加页面
     Route::get('/cxjy_admin/sort3/create', 'Admin\Sort3Controller@sortcreate');
     //分类添加
     Route::get('/cxjy_admin/sort3/shore', 'Admin\Sort3Controller@sortshore');
     //分类修改页
     Route::get('/cxjy_admin/sort3/{id}/edit', 'Admin\Sort3Controller@sortedit');
     //分类修改
     Route::get('/cxjy_admin/sort3/{id}/update', 'Admin\Sort3Controller@sortupdate');
     //分类删除
     Route::get('/cxjy_admin/sort3/{id}/destroy', 'Admin\Sort3Controller@sortdestroy');
    
     //第三个网站
     //新闻列表
     Route::get('/cxjy_admin/news3', 'Admin\Sort3Controller@newsindex');
     //新闻添加页
     Route::get('/cxjy_admin/news3/create', 'Admin\Sort3Controller@newscreate');
     //新闻添加
     Route::post('/cxjy_admin/news3/shore', 'Admin\Sort3Controller@newsshore');
     //新闻修改页
     Route::get('/cxjy_admin/news3/{id}/edit', 'Admin\Sort3Controller@newsedit');
     //新闻修改
     Route::post('/cxjy_admin/news3/{id}/update', 'Admin\Sort3Controller@newsupdate');
     //新闻删除
     Route::get('/cxjy_admin/news3/{id}/destroy', 'Admin\Sort3Controller@destroy');

     //第4个网站
     //分类列表
     Route::get('/cxjy_admin/sort4', 'Admin\Sort4Controller@sortindex');
     //分类添加页面
     Route::get('/cxjy_admin/sort4/create', 'Admin\Sort4Controller@sortcreate');
     //分类添加
     Route::get('/cxjy_admin/sort4/shore', 'Admin\Sort4Controller@sortshore');
     //分类修改页
     Route::get('/cxjy_admin/sort4/{id}/edit', 'Admin\Sort4Controller@sortedit');
     //分类修改
     Route::get('/cxjy_admin/sort4/{id}/update', 'Admin\Sort4Controller@sortupdate');
     //分类删除
     Route::get('/cxjy_admin/sort4/{id}/destroy', 'Admin\Sort4Controller@sortdestroy');
    
     //第4个网站
     //新闻列表
     Route::get('/cxjy_admin/news4', 'Admin\Sort4Controller@newsindex');
     //新闻添加页
     Route::get('/cxjy_admin/news4/create', 'Admin\Sort4Controller@newscreate');
     //新闻添加
     Route::post('/cxjy_admin/news4/shore', 'Admin\Sort4Controller@newsshore');
     //新闻修改页
     Route::get('/cxjy_admin/news4/{id}/edit', 'Admin\Sort4Controller@newsedit');
     //新闻修改
     Route::post('/cxjy_admin/news4/{id}/update', 'Admin\Sort4Controller@newsupdate');
     //新闻删除
     Route::get('/cxjy_admin/news4/{id}/destroy', 'Admin\Sort4Controller@destroy');

     //第5个网站
    //分类列表
    Route::get('/cxjy_admin/sort5','Admin\Sort5Controller@sortindex');
    //分类添加页面
    Route::get('/cxjy_admin/sort5/create', 'Admin\Sort5Controller@sortcreate');
    //分类添加
    Route::get('/cxjy_admin/sort5/shore', 'Admin\Sort5Controller@sortshore');
    //分类修改页
    Route::get('/cxjy_admin/sort5/{id}/edit', 'Admin\Sort5Controller@sortedit');
    //分类修改
    Route::get('/cxjy_admin/sort5/{id}/update','Admin\Sort5Controller@sortupdate');
    //分类删除
    Route::get('/cxjy_admin/sort5/{id}/destroy','Admin\Sort5Controller@sortdestroy');
    
    //第5个网站
    //新闻列表
    Route::get('/cxjy_admin/news5', 'Admin\Sort5Controller@newsindex');
    //新闻添加页
    Route::get('/cxjy_admin/news5/create', 'Admin\Sort5Controller@newscreate');
    //新闻添加
    Route::post('/cxjy_admin/news5/shore', 'Admin\Sort5Controller@newsshore');
    //新闻修改页
    Route::get('/cxjy_admin/news5/{id}/edit','Admin\Sort5Controller@newsedit');
    //新闻修改
    Route::post('/cxjy_admin/news5/{id}/update', 'Admin\Sort5Controller@newsupdate');
    //新闻删除
    Route::get('/cxjy_admin/news5/{id}/destroy', 'Admin\Sort5Controller@destroy');

    //第6个网站
    //分类列表
    Route::get('/cxjy_admin/sort6','Admin\Sort6Controller@sortindex');
    //分类添加页面
    Route::get('/cxjy_admin/sort6/create', 'Admin\Sort6Controller@sortcreate');
    //分类添加
    Route::get('/cxjy_admin/sort6/shore', 'Admin\Sort6Controller@sortshore');
    //分类修改页
    Route::get('/cxjy_admin/sort6/{id}/edit', 'Admin\Sort6Controller@sortedit');
    //分类修改
    Route::get('/cxjy_admin/sort6/{id}/update','Admin\Sort6Controller@sortupdate');
    //分类删除
    Route::get('/cxjy_admin/sort6/{id}/destroy','Admin\Sort6Controller@sortdestroy');
    
    //第6个网站
    //新闻列表
    Route::get('/cxjy_admin/news6', 'Admin\Sort6Controller@newsindex');
    //新闻添加页
    Route::get('/cxjy_admin/news6/create', 'Admin\Sort6Controller@newscreate');
    //新闻添加
    Route::post('/cxjy_admin/news6/shore', 'Admin\Sort6Controller@newsshore');
    //新闻修改页
    Route::get('/cxjy_admin/news6/{id}/edit','Admin\Sort6Controller@newsedit');
    //新闻修改
    Route::post('/cxjy_admin/news6/{id}/update', 'Admin\Sort6Controller@newsupdate');
    //新闻删除
    Route::get('/cxjy_admin/news6/{id}/destroy', 'Admin\Sort6Controller@destroy');

    //第7个网站
    //分类列表
    Route::get('/cxjy_admin/sort7','Admin\Sort7Controller@sortindex');
    //分类添加页面
    Route::get('/cxjy_admin/sort7/create', 'Admin\Sort7Controller@sortcreate');
    //分类添加
    Route::get('/cxjy_admin/sort7/shore', 'Admin\Sort7Controller@sortshore');
    //分类修改页
    Route::get('/cxjy_admin/sort7/{id}/edit', 'Admin\Sort7Controller@sortedit');
    //分类修改
    Route::get('/cxjy_admin/sort7/{id}/update','Admin\Sort7Controller@sortupdate');
    //分类删除
    Route::get('/cxjy_admin/sort7/{id}/destroy','Admin\Sort7Controller@sortdestroy');
    
    //第7个网站
    //新闻列表
    Route::get('/cxjy_admin/news7', 'Admin\Sort7Controller@newsindex');
    //新闻添加页
    Route::get('/cxjy_admin/news7/create', 'Admin\Sort7Controller@newscreate');
    //新闻添加
    Route::post('/cxjy_admin/news7/shore', 'Admin\Sort7Controller@newsshore');
    //新闻修改页
    Route::get('/cxjy_admin/news7/{id}/edit','Admin\Sort7Controller@newsedit');
    //新闻修改
    Route::post('/cxjy_admin/news7/{id}/update', 'Admin\Sort7Controller@newsupdate');
    //新闻删除
    Route::get('/cxjy_admin/news7/{id}/destroy', 'Admin\Sort7Controller@destroy');

    //第8个网站
    //分类列表
    Route::get('/cxjy_admin/sort8','Admin\Sort8Controller@sortindex');
    //分类添加页面
    Route::get('/cxjy_admin/sort8/create', 'Admin\Sort8Controller@sortcreate');
    //分类添加
    Route::get('/cxjy_admin/sort8/shore', 'Admin\Sort8Controller@sortshore');
    //分类修改页
    Route::get('/cxjy_admin/sort8/{id}/edit', 'Admin\Sort8Controller@sortedit');
    //分类修改
    Route::get('/cxjy_admin/sort8/{id}/update','Admin\Sort8Controller@sortupdate');
    //分类删除
    Route::get('/cxjy_admin/sort8/{id}/destroy','Admin\Sort8Controller@sortdestroy');
    
    //第8个网站
    //新闻列表
    Route::get('/cxjy_admin/news8', 'Admin\Sort8Controller@newsindex');
    //新闻添加页
    Route::get('/cxjy_admin/news8/create', 'Admin\Sort8Controller@newscreate');
    //新闻添加
    Route::post('/cxjy_admin/news8/shore', 'Admin\Sort8Controller@newsshore');
    //新闻修改页
    Route::get('/cxjy_admin/news8/{id}/edit','Admin\Sort8Controller@newsedit');
    //新闻修改
    Route::post('/cxjy_admin/news8/{id}/update', 'Admin\Sort8Controller@newsupdate');
    //新闻删除
    Route::get('/cxjy_admin/news8/{id}/destroy', 'Admin\Sort8Controller@destroy');

    //第9个网站
    //分类列表
    Route::get('/cxjy_admin/sort9','Admin\Sort9Controller@sortindex');
    //分类添加页面
    Route::get('/cxjy_admin/sort9/create', 'Admin\Sort9Controller@sortcreate');
    //分类添加
    Route::get('/cxjy_admin/sort9/shore', 'Admin\Sort9Controller@sortshore');
    //分类修改页
    Route::get('/cxjy_admin/sort9/{id}/edit', 'Admin\Sort9Controller@sortedit');
    //分类修改
    Route::get('/cxjy_admin/sort9/{id}/update','Admin\Sort9Controller@sortupdate');
    //分类删除
    Route::get('/cxjy_admin/sort9/{id}/destroy','Admin\Sort9Controller@sortdestroy');
    
    //第9个网站
    //新闻列表
    Route::get('/cxjy_admin/news9', 'Admin\Sort9Controller@newsindex');
    //新闻添加页
    Route::get('/cxjy_admin/news9/create', 'Admin\Sort9Controller@newscreate');
    //新闻添加
    Route::post('/cxjy_admin/news9/shore', 'Admin\Sort9Controller@newsshore');
    //新闻修改页
    Route::get('/cxjy_admin/news9/{id}/edit','Admin\Sort9Controller@newsedit');
    //新闻修改
    Route::post('/cxjy_admin/news9/{id}/update', 'Admin\Sort9Controller@newsupdate');
    //新闻删除
    Route::get('/cxjy_admin/news9/{id}/destroy', 'Admin\Sort9Controller@destroy');

    //第10个网站
    //分类列表
    Route::get('/cxjy_admin/sort10','Admin\Sort10Controller@sortindex');
    //分类添加页面
    Route::get('/cxjy_admin/sort10/create', 'Admin\Sort10Controller@sortcreate');
    //分类添加
    Route::get('/cxjy_admin/sort10/shore', 'Admin\Sort10Controller@sortshore');
    //分类修改页
    Route::get('/cxjy_admin/sort10/{id}/edit', 'Admin\Sort10Controller@sortedit');
    //分类修改
    Route::get('/cxjy_admin/sort10/{id}/update','Admin\Sort10Controller@sortupdate');
    //分类删除
    Route::get('/cxjy_admin/sort10/{id}/destroy','Admin\Sort10Controller@sortdestroy');
    
    //第10个网站
    //新闻列表
    Route::get('/cxjy_admin/news10', 'Admin\Sort10Controller@newsindex');
    //新闻添加页
    Route::get('/cxjy_admin/news10/create', 'Admin\Sort10Controller@newscreate');
    //新闻添加
    Route::post('/cxjy_admin/news10/shore', 'Admin\Sort10Controller@newsshore');
    //新闻修改页
    Route::get('/cxjy_admin/news10/{id}/edit','Admin\Sort10Controller@newsedit');
    //新闻修改
    Route::post('/cxjy_admin/news10/{id}/update', 'Admin\Sort10Controller@newsupdate');
    //新闻删除
    Route::get('/cxjy_admin/news10/{id}/destroy', 'Admin\Sort10Controller@destroy');

     //全站新闻发布页
     Route::get('/cxjy_admin/article/create', 'Admin\AdminController@articlecreate');
     //全站新闻发布
     Route::post('/cxjy_admin/article/shore', 'Admin\AdminController@articleshore');
     //全站添加分类页
     Route::get('/cxjy_admin/allsort/create', 'Admin\AdminController@allsortcreate');
     //全站添加分类
     Route::get('/cxjy_admin/allsort/shore', 'Admin\AdminController@allsortshore');
 });


//前台页面
//首页
Route::get('/', 'HomeController@index');
//列表页
Route::get('fenlei/{id}', 'HomeController@fenlei');
//内容页
Route::get('article/{id}', 'HomeController@content');
