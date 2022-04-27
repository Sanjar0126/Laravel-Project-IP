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
    return view('aboutUs');
})->name('about');
Route::get('contacts','ContactsController@index')->name('contact');
Route::post('contacts.create','ContactsController@newContact')->name('newContact');



  
Route::group(['prefix' => 'reservation'
], function () {    
    Route::get('/', 'BookingsController@index')->name('reservation');
    Route::post('/create', 'BookingsController@newBooking')->name('newBooking');
    Route::post('/edit', 'BookingsController@postEdit')->name('postEdit');
    Route::get('/edit/{id}', 'BookingsController@getEdit')->name('getEdit');
    Route::get('/delete/{id}', 'BookingsController@deleteBooking')->name('deleteBooking');  
});

Auth::routes(); //['verify' => true]

//Backend Routes
Route::group(['prefix' => 'admin',
        'middleware'=> ['auth','admin']
], function () {
    Route::get('/', 'AdminHomeController@allUsers')->name('adminIndex');
    Route::get('user/delete/{id}', 'AdminHomeController@deleteUser')->name('deleteUser');
    Route::get('/bookings', 'AdminHomeController@allBookings')->name('allBookings');
    Route::get('/bookings/delete/{id}', 'AdminHomeController@deleteBookingAdmin')->name('deleteBookingAdmin');
    Route::get('/bookings/edit/{id}', 'AdminHomeController@editBookingAdmin')->name('editBookingAdmin');
    Route::get('/contacts', 'AdminHomeController@allContacts')->name('allContacts');
    Route::get('/contacts/delete/{id}', 'AdminHomeController@deleteContactAdmin')->name('deleteContactAdmin');   
    

    Route::get('/food', 'FoodsController@index')->name('foodIndex');
    Route::get('/food/create', 'FoodsController@create')->name('createNewFood');
    Route::post('/food/store', 'FoodsController@store')->name('storeFood');
    Route::get('/food/edit/{id}', 'FoodsController@edit')->name('editFood');
    Route::put('/update/{id}', 'FoodsController@update')->name('updateFood');
    Route::get('/delete/{id}', 'FoodsController@destroy')->name('deleteFood');
});