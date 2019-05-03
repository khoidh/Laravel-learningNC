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

//Route::get('/', function () {
//    return view('welcome');
//});
//Hoặc
Route::view('/', 'welcome');

/*
 * Vidu dau tien
 * url run: http://localhost/laravel-learning/dang-nhap
 */
Route::get('/dang-nhap', function(){
    echo 'Day trang dang nhap';
});

/*
 * VD view
 */
Route::get('chao/{user}', function($user){
    return view('helloController-user', ['user' => $user]);
});
/*
 * VD: goi view trong controller
 */

//Route::get('helloController/{user}', 'helloController@index');
Route::get('helloController', 'helloController@index');

//======================== Call controller ======================
Route::get('/demo','DemoController@index');

Route::get('/home','HomeController@index');

/*
 * http://localhost/laravel-learning/hello-user/khoidh
 */
Route::get('/hello-user/{user}','helloController@index');

/*
|--------------------------------------------------------------------------
| 4) User Controller
|--------------------------------------------------------------------------
*/
//Route::get('');


//Chi test Pullrequess trong phpstorm
/*
 * Tạo pull request cho code
 */