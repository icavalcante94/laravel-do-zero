<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('App\Http\Controllers\Site') -> group(function(){
    Route::get('/','HomeController')->name(name:'site.home');

    Route::get('produtos', 'CategoryController@index')->name(name:'site.products');
    Route::get('produtos/{slug}', 'CategoryController@show')->name(name:'site.products.category');
    
    Route::get('blog', 'BlogController')->name(name:'site.blog');
    //chamando diretamente um view por ser uma página estática
    Route::view('sobre', 'site.about.index')->name(name:'site.about');

    Route::get('contato', 'ContactController@index')->name(name:'site.contact');
    Route::post('contato', 'ContactController@form')->name(name:'site.contact.form');

});

