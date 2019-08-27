<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//

use Illuminate\Support\Facades\Route;

// api 放只做資料請求，不做 重新導向 & 回傳頁面
// Route::middleware('auth:api')->post('/blog/', 'BlogController@store')->name('blog.store');


Route::post('/blog/', 'BlogController@store')->name('blog.store');
Route::put('/blog/{id}', 'BlogController@update')->name('blog.update');
Route::delete('/blog/{id}', 'BlogController@destroy')->name('blog.destroy');
Route::get('/email', 'WarningController@send')->name('email.send');
