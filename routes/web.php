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

Route::get('cacheclear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    session()->flush();
});


Route::get('/', 'SiteController@home');
Route::get('hakkimda', 'SiteController@about');
Route::get('blog', 'SiteController@blog');
Route::get('blog/{slug}', 'SiteController@blogdetay');
Route::get('iletisim', 'SiteController@iletisim');
Route::get('sitemap', 'SiteController@sitemap');
Route::post('iletisimsend', 'SiteController@iletisimsend');
