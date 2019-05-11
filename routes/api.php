<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/post/create', 'cusCtrl@store');
Route::get('/post/edit/{id}', 'cusCtrl@edit');
Route::post('/post/update/{id}', 'cusCtrl@update');
Route::delete('/post/delete/{id}', 'cusCtrl@delete');
Route::get('/posts', 'cusCtrl@index');

Route::get('lastid', 'cusCtrl@lastid');