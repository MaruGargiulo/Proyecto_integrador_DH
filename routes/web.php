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

Route::get('/', function () {
    return view('template.master');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//USUARIOS REGISTRADOS

    //USUARIOS
    Route::prefix('user')->name('user.')->group(function (){
        Route::get('/{name}', 'UserController@showProfile')->name('profile');
        Route::get('/{name}/edit', 'UserController@edit')->name('edit');
        Route::put('{name}', 'UserController@saveChanges')->name('update');
    });
    
    //STICKERS

    Route::prefix('stickers')->name('stickers.')->group(function (){
        Route::get('/create', 'StickerController@create')->name('create');
        Route::post('/create', 'StickerController@store')->name('store');
        Route::get('/{sticker}/edit', 'StickerController@edit')->name('edit');
        Route::patch('/{sticker}/edit', 'StickerController@update')->name('update');
        Route::delete('/{sticker_id}', 'StickerController@destroy')->name('delete');
    });


//INVITADO

    //HOME
Route::get('/', 'HomeController@index')->name('home');

    //USUARIO PARA REGISTRAR
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

    //FIGURITAS
Route::prefix('stickers')->name('stickers.')->group(function (){
    Route::get('/', 'StickerController@index')->name('index');
    Route::get('/{album_name}', 'StickerController@show')->name('show');
});






