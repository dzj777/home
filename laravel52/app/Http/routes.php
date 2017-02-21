<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','WelcomeController@welcome');//首页
Route::get('search','WelcomeController@search');//搜索

Route::get('city_info','WelcomeController@get_city');//城市
Route::get('course','WelcomeController@course');//精选课程    

Route::get('morer','WelcomeController@morer');//首页更多
Route::get('carousel','WelcomeController@carousel');//首页轮播图

Route::get('selected','WelcomeController@selected');//精选系列课程
Route::get('recommend','WelcomeController@recommend');//热门推荐


Route::get('center','CenterController@center');//个人中心
Route::get('myinfo','CenterController@myinfo');//个人资料
Route::any('insert_info','CenterController@updateInfo');//修改个人资料
Route::get('mycart','CenterController@cart_info');//我的购物车
Route::get('del_cart','CenterController@delCart');//删除购物车信息
Route::get('myorder','CenterController@order_list');//个人订单列表
Route::get('feedback','CenterController@user_Feed');//反馈界面
Route::post('sub_feed','CenterController@subFeed');//反馈提交

Route::get('market','MarketController@market');//全部课程分类
Route::get('curr','MarketController@curr');//全部课程分类
Route::get('cont','MarketController@cont');//课程详情
Route::get('bfang','MarketController@bfang');//课程详情

Route::post('shopcart','MarketController@shopcart');//加入购物车

Route::get('more','MoreController@more');//更多

Route::get('thisee','ThiseeController@thisee');//直播页
Route::get('mogbo','ThiseeController@mogbo');//直播页





Route::get('login','LoginController@login');//登录
Route::get('login_out','LoginController@login_out');//退出登录
Route::get('regist','LoginController@regist');//注册

//发短信
Route::get('short','LoginController@short');//注册发送短信
Route::get('contrast','LoginController@contrast');//对比验证码
Route::post('add','LoginController@add');//注册
Route::get('only','LoginController@only');//注册唯一性

//登录
Route::post('checklogin','LoginController@checklogin');//注册唯一性
Route::any('qqlogin','LoginController@qqlogin');//qq登录
Route::any('weibo','LoginController@weibo');//微博登录