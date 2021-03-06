<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/','HomeController@index')->name('homeIndex');
Route::get('menu','HomeController@menu' )->name('menu');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contacts','ContactsController@index')->name('contact');
Route::post('contacts.create','ContactsController@newContact')->name('newContact');

  
Route::group(['prefix' => 'order'
], function () {    
    Route::get('/', 'OrderController@index')->name('order');
    Route::post('/create', 'OrderController@newOrder')->name('newOrder');
    Route::post('/edit', 'OrderController@postEdit')->name('postEdit');
    Route::get('/edit/{id}', 'OrderController@getEdit')->name('getEdit');
    Route::get('/delete/{id}', 'OrderController@deleteOrder')->name('deleteOrder');  
});

Auth::routes(); //['verify' => true]

//Backend Routes
Route::group(['prefix' => 'admin',
        'middleware'=> ['auth','admin']
], function () {
    Route::get('/', 'AdminHomeController@allUsers')->name('adminIndex');
    Route::get('user/delete/{id}', 'AdminHomeController@deleteUser')->name('deleteUser');
    Route::get('/orders', 'AdminHomeController@allOrders')->name('allOrders');
    Route::get('/orders/delete/{id}', 'AdminHomeController@deleteOrderAdmin')->name('deleteOrderAdmin');
    Route::get('/orders/edit/{id}', 'AdminHomeController@editOrderAdmin')->name('editOrderAdmin');

    Route::get('/categories', 'CategoryController@index')->name('catIndex');
    Route::get('/categories/create', 'CategoryController@create')->name('createNewCat');
    Route::post('/categories/store', 'CategoryController@store')->name('storeCat');
    Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('editCat');
    Route::put('/categories/update/{category}', 'CategoryController@update')->name('updateCat');
    Route::get('/categories/delete/{category}', 'CategoryController@destroy')->name('deleteCat');

    Route::get('/contacts', 'AdminHomeController@allContacts')->name('allContacts');
    Route::get('/contacts/delete/{id}', 'AdminHomeController@deleteContactAdmin')->name('deleteContactAdmin');   
    

    Route::get('/food', 'FoodsController@index')->name('foodIndex');
    Route::get('/food/create', 'FoodsController@create')->name('createNewFood');
    Route::post('/food/store', 'FoodsController@store')->name('storeFood');
    Route::get('/food/edit/{id}', 'FoodsController@edit')->name('editFood');
    Route::put('/update/{id}', 'FoodsController@update')->name('updateFood');
    Route::get('/delete/{id}', 'FoodsController@destroy')->name('deleteFood');
});