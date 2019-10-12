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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $user = \TCG\Voyager\Models\User::find(1);
    dd($user);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
