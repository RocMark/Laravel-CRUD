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

Route::get('test', 'ProductController@test')->name('test.test');

Route::prefix('blog')->group(function () {
    // home page & 包含 search 功能
    Route::get('/', 'BlogController@index')->name('blog.index');
    // 導向建立文章頁 page
    Route::get('/create', 'BlogController@create')->name('blog.create');
    // 導向編輯文章頁 page 與建立文章可用同一份 View
    Route::get('/edit/{id}', 'BlogController@edit')->name('blog.edit');
});
