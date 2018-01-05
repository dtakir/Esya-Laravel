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

Route::get('/upload','UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');
Route::get('/', 'SayfaController@anasayfa');
Route::get('/', 'SayfaController@ProductAll');
Route::post('ilcegetir','SayfaController@ilcelerigetirAction');
Route::post('ilce','SayfaController@ilcelerigetir1Action');

Route::post('esyabul','SayfaController@esyabulAction');
Route::get('esyaara','SayfaController@esyaara');
Route::get('ilanver','SayfaController@ilanver');

Route::get('signin','KullaniciController@signinAction');
Route::post('loginprocess','KullaniciController@loginprocess');
Route::get('uye/cikis','KullaniciController@logoutprocess');
Route::get('kayit','KullaniciController@kayitAction');
Route::post('kayitol','KullaniciController@signupprocess');
Route::get('profil','KullaniciController@profilAction');
Route::get('/{id}','SayfaController@EsyaGoster');

Route::group(['prefix' => 'api/v1'],function ()
{
    Route::get('il/{id}/ilce','ilceApiController@index');
    Route::post('il','ilApiController@store');
    Route::put('il/{id}','ilApiController@update');
    Route::delete('il/{id}','ilApiController@destroy');

    Route::get('product/{id}/{user_id}','ProductApiController@index');
    Route::post('product','ProductApiController@store');
    Route::put('product/{id}','ProductController@update');
    Route::delete('product/{id}','ProductApiController@destroy');

    Route::resource('user','UserApiController');
    Route::resource('il','ilApiController');
    Route::resource('ilce','ilceApiController');
    Route::resource('product','ProductApiController');



});
Auth::routes();

Route::get('/home', 'HomeController@index');
