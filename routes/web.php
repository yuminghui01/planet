<?php

$lists = ['prefix' => env('APP_NAME') == 'planet' ? '/' : 'planet', 'as' => 'planet.'];

Route::group($lists, function() {
        Route::get('/','HomeController@index')->name('index');
});