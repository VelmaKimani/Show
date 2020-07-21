<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/pro/test', 'ProfilesController@test');
Route::get('/profile/{user}', 'ProfilesController@index');

//Route::get('/test', function (){
// return json_encode("success");
//});
