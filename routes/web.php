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

Route::get('/',[
    'uses'=>'FrontEndController@index',
    'as'=>'index'
])->middleware('auth');
Route::post('booking/add',[
    'uses'=>'BookingController@addBooking',
    'as'=>'book.add'
]);
Route::get('/booking',[
    'uses'=>'BookingController@book',
    'as'=>'booking'
]);
Route::get('/QRcode',[
    'uses'=>'QRcodeController@QRcode',
    'as'=>'QRcode'
]);
Route::get('/booking/{id}',[
    'uses'=>'FrontEndController@singleBook',
    'as'=>'booking.single'
]);
Route::get('booking/rapid/add/{id}',[
    'uses'=>'BookingController@rapid_add',
    'as'=>'booking.rapid.add'
]);
Route::get('/booking/delete/{id}',[
    'uses'=>'BookingController@delete',
    'as'=>'booking.delete'
]);
Route::get('/source_destinations',[
    'uses'=>'SourceDestinationController@index',
    'as'=>'source_destination'
]);
Route::get('/source_destinations/create',[
    'uses'=>'SourceDestinationController@create',
    'as'=>'source_destination.create'
]);
Route::post('/source_destinations/store',[
    'uses'=>'SourceDestinationController@store',
    'as'=>'source_destination.store'
]);
Route::get('/checkout/page',[
    'uses'=>'BookingController@checkout',
    'as'=>'checkout.page'
]);
Route::post('/booking/pay',[
    'uses'=>'CheckoutController@pay',
    'as'=>'booking.pay'
]);
Route::post('/source_destinations/update/{id}',[
    'uses'=>'SourceDestinationController@update',
    'as'=>'source_destination.update'
]);
Route::get('/source_destinations/edit/{id}',[
    'uses'=>'SourceDestinationController@edit',
    'as'=>'source_destination.edit'
]);
Route::get('/source_destinations/destroy/{id}',[
    'uses'=>'SourceDestinationController@destroy',
    'as'=>'source_destination.destroy'
]);
Route::get('/booking/increment/{id}/{qty}',[
    'uses'=>'BookingController@increment',
    'as'=>'booking.increment'
]);
Route::get('booking/decrement/{id}/{qty}',[
    'uses'=>'BookingController@decrement',
    'as'=>'booking.decrement'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
