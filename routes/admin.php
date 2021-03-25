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


##################### START ADMIN ROUTES #################


Route::group(['namespace' => 'dashboard' , 'middleware' => 'auth:admin' , 'prefix' => 'admin'] , function(){

    Route::get('test',function(){
        return 'welcome in admin login';
    });

});

Route::group(['namespace' => 'dashboard' , 'prefix' => 'admin'] , function(){

    Route::get('login',function(){
        return 'Plase Relogon';
    })->name('admin.login');

});



##################### END ADMIN ROUTES ###################



