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

use Illuminate\Support\Facades\Route;

// todo-try
Route::get('test', 'ProductController@test')->name('test.test');

// TODO-ask api.web 撰寫
Route::get('products', 'ProductController@store');

// Gmail 寄信用
Route::get('/email', 'WarningController@send')->name('email.send');

Route::prefix('blog')->group(function () {
    // home page & 包含 search 功能
    Route::get('/', 'BlogController@index')->name('blog.index');
    // 建立文章頁 page
    Route::get('/create', 'BlogController@create')->name('blog.create');
    // 新增文章 Form action
    Route::post('/', 'BlogController@store')->name('blog.store');
    // 導向編輯文章頁 page 與建立文章可用同一份 View
    Route::get('/edit/{id}', 'BlogController@edit')->name('blog.edit');
    // 更新資料 Form action
    Route::put('/{id}', 'BlogController@update')->name('blog.update');
    // 軟刪除資料
    Route::delete('/{id}', 'BlogController@destroy')->name('blog.destroy');
    // 測試用: Route::delete('blog/{id}',function($id){ echo $id; });
});
