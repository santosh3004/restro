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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('user','App\Http\Controllers\UserController');
Route::resource('blogcategory','App\Http\Controllers\BlogCategoryController');
Route::resource('menu','App\Http\Controllers\MenuController');
Route::resource('siteconfig','App\Http\Controllers\SiteConfigController');
Route::resource('filemanager','App\Http\Controllers\FileManagerController');
Route::resource('slider','App\Http\Controllers\SliderController');
Route::resource('blog','App\Http\Controllers\BlogController');
Route::resource('contact','App\Http\Controllers\ContactController');
Route::resource('comment','App\Http\Controllers\CommentController');
Route::resource('subscription','App\Http\Controllers\SubscriptionController');
Route::resource('menucategory','App\Http\Controllers\MenuCategoryController');
Route::resource('menuitem','App\Http\Controllers\MenuItemController');
Route::resource('page','App\Http\Controllers\PageController');
Route::resource('reservation','App\Http\Controllers\ReservationController');
Route::resource('review','App\Http\Controllers\ReviewController');
Route::resource('team','App\Http\Controllers\TeamController');


