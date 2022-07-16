<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Jobs\PrintName;
use App\Product;

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

// Route::get('/', function () {
//     return view('site');
// });

Route::get('/', 'SiteController@index')->name('index');
Route::get('show/{id}', 'SiteController@show')->name('site.show');

Auth::routes(['register' => false, 'reset' => false]);

// Auth::routes();
Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::get('/', 'PostController@index');
    Route::get('scrape', 'ScrapeController@scrape')->name('scrape');
    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('show/{id}', 'PostController@show')->name('show');
    Route::post('update/{id}', 'PostController@update')->name('update');
    Route::post('update', 'PostController@updateAll')->name('update.all');
    Route::post('delete/{id}', 'PostController@delete')->name('delete');
    Route::post('delete', 'PostController@deleteAll')->name('delete.all');
    // Route::get('regiter', 'RegisterController@showRegistrationForm')->name('regiter');
});

