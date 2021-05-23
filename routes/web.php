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

Route::get('/','WebController@index')->name('index');
Route::get('/about-us','WebController@aboutus')->name('about-us');
Route::get('/gallery','WebController@gallery')->name('gallery');
Route::get('/contact-form','ContactFormController@index')->name('contact-form');

Auth::routes();

Route::group(['middleware' => ['auth']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/book-now','WebController@book_now')->name('book-now');
    Route::match(['get','post'],'/submit-booking','WebController@submitBooking')->name('submitBooking');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','AdminController@logout');
Route::group(['middleware'=> ['admin']],function(){
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin');

    Route::get('/schedule','AdminController@availability')->name('availability');
    Route::get('/create-schedule','AdminController@createAvailabilty')->name('createAvailabilty');

    Route::get('/unapproved-appointments-list','BookingController@unapproved_appointments')->name('unapproved_appointments');
    Route::get('/verify-appointment-info/{id}', 'BookingController@verify_appointment_info')->name('verify_appointment_info');
    Route::post('/verify-appointment-status/{id}', 'BookingController@verify_appointment_status')->name('verify_appointment_status');
    Route::get('/approved-appointments-list', 'BookingController@approved_appointments')->name('approved_appointments');
    Route::get('/declined-appointments-list', 'BookingController@declined_appointments')->name('declined_appointments');

    Route::get('/galleries', 'GalleryController@index')->name('galleries');
    Route::match(['get','post'],'/submit-image', 'GalleryController@store')->name('submitImage');
    Route::match(['get','post'],'/edit-gallery-image/{id}','GalleryController@edit')->name('editImage');
    Route::match(['get','post'],'/update-gallery-image/{id}','GalleryController@update')->name('updateImage');
    Route::get('image-delete/{id}' , 'GalleryController@destroy')->name('deleteImage');

});
