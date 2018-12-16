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

        Route::get('users/mytrades', 'TradeController@show')->name('users.mytrades');
        Route::post('/users/trade', 'TradeController@tradeRequest')->name('trade');    

    
    

    Route::view('/', 'layouts.home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/stickers', 'StickerController@index')->name('stickers.index');

    Auth::routes();

     //STICKERS

    Route::group(['as' => 'stickers.', 'prefix' => 'stickers', 'middleware' => ['auth']], function() {
        Route::get('/create', 'StickerController@create')->name('create');
        Route::post('/create', 'StickerController@store')->name('store');
        Route::get('/{sticker}/edit', 'StickerController@edit')->name('edit');
        Route::patch('/{sticker}/edit', 'StickerController@update')->name('update');
        Route::delete('/{sticker_id}', 'StickerController@destroy')->name('delete');
    });
   
    Route::get('/stickers/{album_name}', 'StickerController@show')->name('stickers.show');

    //BACKCOFFICE

    Route::group(['as' => 'backoffice', 'prefix' => 'backoffice', 'middleware' => ['auth', 'checkrole']], function() {
        Route::get('/home', 'BackofficeController@dashboard')->name('dashboard');
        Route::get('/users', 'BackofficeController@index')->name('users');
    });
    
    //USUARIOS

    Route::group(['as' => 'users.', 'prefix' => 'users', 'middleware' => ['auth']], function(){
        Route::get('/home', 'UserController@home')->name('home');
        Route::get('/{id}/edit', 'UserController@edit')->name('edit');
        Route::patch('{id}/edit', 'UserController@saveChanges')->name('update');
        
    });

    






