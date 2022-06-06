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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/', 'App\Http\Controllers\front\FrontController@index')->name('front.index');

Route::get('/restromenu', 'App\Http\Controllers\front\FrontController@menu')->name('front.menu');
Route::get('restroreservation', 'App\Http\Controllers\front\FrontController@reservation')->name('front.reservation');

Route::post('restroreserve', 'App\Http\Controllers\front\FrontController@reserve')->name('front.reserve');

Route::get('/restroabout', 'App\Http\Controllers\front\FrontController@about')->name('front.about');

Route::get('/restroblog', 'App\Http\Controllers\front\FrontController@blog')->name('front.blog');

Route::get('/restroblog/{id}', 'App\Http\Controllers\front\FrontController@blog_detail')->name('front.blog_detail');

Route::resource('contact','App\Http\Controllers\ContactController');
Route::resource('comment','App\Http\Controllers\BlogCommentController');
Route::resource('subscription','App\Http\Controllers\SubscriptionController');




Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('user','App\Http\Controllers\UserController');
Route::get('userbin','App\Http\Controllers\UserController@binindex')->name('user.bin');
Route::get('user/{id}/restore','App\Http\Controllers\UserController@restore')->name('user.restore');

Route::resource('blogcategory','App\Http\Controllers\BlogCategoryController');
Route::get('blogcategorybin','App\Http\Controllers\BlogCategoryController@binindex')->name('blogcategory.bin');
Route::get('blogcategory/{id}/restore','App\Http\Controllers\BlogCategoryController@restore')->name('blogcategory.restore');

Route::resource('menu','App\Http\Controllers\MenuController');
Route::get('menubin','App\Http\Controllers\MenuController@binindex')->name('menu.bin');
Route::get('menu/{id}/restore','App\Http\Controllers\MenuController@restore')->name('menu.restore');

Route::resource('siteconfig','App\Http\Controllers\SiteConfigController');
Route::get('siteconfigbin','App\Http\Controllers\SiteConfigController@binindex')->name('siteconfig.bin');
Route::get('siteconfig/{id}/restore','App\Http\Controllers\SiteConfigController@restore')->name('siteconfig.restore');


Route::resource('filemanager','App\Http\Controllers\FileManagerController');
Route::get('filemanagerbin','App\Http\Controllers\FileManagerController@binindex')->name('filemanager.bin');
Route::get('filemanager/{id}/restore','App\Http\Controllers\FileManagerController@restore')->name('filemanager.restore');

Route::resource('slider','App\Http\Controllers\SliderController');
Route::get('sliderbin','App\Http\Controllers\SliderController@binindex')->name('slider.bin');
Route::get('slider/{id}/restore','App\Http\Controllers\SliderController@restore')->name('slider.restore');

Route::resource('blog','App\Http\Controllers\BlogController');
Route::get('blogbin','App\Http\Controllers\BlogController@binindex')->name('blog.bin');
Route::get('blog/{id}/restore','App\Http\Controllers\BlogController@restore')->name('blog.restore');



Route::resource('menucategory','App\Http\Controllers\MenuCategoryController');
Route::get('menucategorybin','App\Http\Controllers\MenuCategoryController@binindex')->name('menucategory.bin');
Route::get('menucategory/{id}/restore','App\Http\Controllers\MenuCategoryController@restore')->name('menucategory.restore');

Route::resource('menuitem','App\Http\Controllers\MenuItemController');
Route::get('menuitembin','App\Http\Controllers\MenuItemController@binindex')->name('menuitem.bin');
Route::get('menuitem/{id}/restore','App\Http\Controllers\MenuItemController@restore')->name('menuitem.restore');

Route::resource('page','App\Http\Controllers\PageController');
Route::get('pagebin','App\Http\Controllers\PageController@binindex')->name('page.bin');
Route::get('page/{id}/restore','App\Http\Controllers\PageController@restore')->name('page.restore');

Route::resource('reservation','App\Http\Controllers\ReservationController');
Route::get('reservationbin','App\Http\Controllers\ReservationController@binindex')->name('reservation.bin');
Route::get('reservation/{id}/restore','App\Http\Controllers\ReservationController@restore')->name('reservation.restore');

Route::resource('review','App\Http\Controllers\ReviewController');

Route::resource('team','App\Http\Controllers\TeamController');
Route::get('teambin','App\Http\Controllers\TeamController@binindex')->name('team.bin');
Route::get('team/{id}/restore','App\Http\Controllers\TeamController@restore')->name('team.restore');


