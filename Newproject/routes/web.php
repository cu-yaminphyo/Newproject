<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\SearchController;
use App\posts;
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
Route::get('/main','AllController@index');
Route::get('/action','AllController@action');
Route::get('/ghost','AllController@ghost');
Route::get('/funny','AllController@funny');
Route::get('/search','AllController@search');
Route::get('/drama','AllController@drama');
Route::get('aa/{id}','AllController@nextshow');
Route::get('/all','AllController@showall');
Route::get('/aaa','PaginationController@index');
Route::get('/table','AllController@table');
Route::get('/editform','AllController@editform');
Route::get('/about','AllController@about');
Route::get('/edit','AllController@category');
Route::get('/loginuser','AllController@login');
// Route::get('/posts/{posts}',function (posts $posts){
//        App\posts::findOrFail($id);
// });


// Route::get('/edit','AllController@editshow');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/backend','Research');


// Route::resource('edit/{id}','ContentController');
