



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

Route::group(['middleware' => ['web']], function() {

  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login');
  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
  Route::get('register', function() {
    return redirect ('/login');
  });

  Route::resource('sadmin/item', 'ItemController');
  Route::get('sadmin/item/cari', 'ItemController@cari');
  Route::get('sadmin/order/cari', 'NotifController@cari');
  Route::resource('sadmin/order', 'NotifController');
  Route::get('/sadmin/order/downloadFile', 'NotifController@downloadFile');
  Route::resource('sadmin/akun', 'AkunController');
  Route::get('/index' ,'ItemController@index1' );


});

Route::get('/', function() {
  return redirect ('/home');
});
Route::get('home', 'PagesController@homepage');
Route::resource('order', 'OrderController');
Route::get('order/ajax/{id}', 'OrderController@withAjax');
Route::get('sadmin', 'PagesController@adminhome');
