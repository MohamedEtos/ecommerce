<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


#####################  ADMIN ROUTES #################

####### Start Auth Routes ########
Route::group(['namespace' => 'dashboard' ,'middleware' => 'auth:admin', 'prefix' => 'admin'] , function(){

    ###### Go To Dashboard ####### 🡫
    Route::get('/','DashboardController@dashborad')->name('admin.dashboard');

});
####### End Auth Routes ########



####### Start Global Routes ########
Route::group(['namespace' => 'dashboard','middleware' => 'guest:admin' , 'prefix' => 'admin'] , function(){
    ######## view Login #######
    Route::get('login','AdminController@adminlogin')->name('admin.login');

    ######## POST DATA FROM LOGIN PAGE TO CONTROLLER#####
    Route::post('postloginform','AdminController@postlogin')->name('post_form_login');

    ####### ADD ROOT ADMIN IN DATABASE IF VISIT THIS ROUTE ######
    Route::get('addadmin','AdminController@save');
});




