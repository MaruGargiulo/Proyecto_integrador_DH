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

//USUARIOS (2)
//FIGURITAS (3) Foreign Key User
//CATEGORIAS (1)
//CARRITO (5)
//TRANSACCIÓN (6)

/*
Route::get('/', function () {
    return view('template.master');
});
*/

    Auth::routes();

    Route::view('/', 'layouts.home');

    Route::get('/home', 'HomeController@index')->name('home');


     //STICKERS

     Route::prefix('stickers')->name('stickers.')->group(function (){
        Route::get('/create', 'StickerController@create')->name('create');
        Route::post('/create', 'StickerController@store')->name('store');
        Route::get('/{sticker}/edit', 'StickerController@edit')->name('edit');
        Route::patch('/{sticker}/edit', 'StickerController@update')->name('update');
        Route::delete('/{sticker_id}', 'StickerController@destroy')->name('delete');
        Route::get('/', 'StickerController@index')->name('index');
        Route::get('/{album_name}', 'StickerController@show')->name('show');
    });

    //USUARIOS
    Route::prefix('users')->name('users.')->group(function (){
        Route::get('/home', 'UserController@home')->name('home');
        Route::get('/{id}/edit', 'UserController@edit')->name('edit');
        Route::patch('{id}/edit', 'UserController@saveChanges')->name('update');
    });

    //BACKCOFFICE

    Route::prefix('backoffice')->name('backoffice.')->group(function(){
        Route::get('/users', 'BackofficeController@index')->name('show');
    });
    
       //USUARIO PARA REGISTRAR
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');





