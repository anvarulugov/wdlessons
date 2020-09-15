<?php
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::setDefaultNamespace('\App\Controllers');

Route::get('/', 'SiteController@index')->name('index');

Route::group(['prefix' => 'task'], function() {
    Route::get('/', 'TaskController@index')->name('taskIndex');
});

Route::start();