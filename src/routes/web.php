<?php
use Illuminate\Http\Request;
//use Illuminate\Routing\Route;

Route::group(['namespace'=>'Yottabit\Contact\Http\Controllers'],function(){
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact','ContactController@send');
});

