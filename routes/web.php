<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('about','SiteController@index')->name('about');
Route::get('typebooks','TypeBooksController@index')->name('typebooks');
Route::get('typebooks/destroy/{id}','TypebooksController@destroy');
Route::resource('books','BooksController')->name('index','books');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
