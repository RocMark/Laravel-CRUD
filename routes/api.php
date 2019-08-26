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


// todo-note 實際的網址是 api/user  (只做傳送資料請求，不做重新導向)
Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});
