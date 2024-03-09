<?php
use core\Route;
/**
 * Define all routes here
 *
 * Route::get('url', 'action')
 *
 * Route::post('url', 'action')
*/
Route::get('/', 'HomePageController@index');
Route::get('about', 'HomePageController@about');
Route::get('contact', function (){
    echo "Contact page";
});
Route::get('abod', function (){
    echo "welcome abod";
});