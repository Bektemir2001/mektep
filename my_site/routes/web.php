<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::group(['namespace'=>'Date', 'middleware'=>'admin'], function(){
    Route::get('/dates', 'IndexController')->name('dates');
    Route::get('/dates/create', 'CreateController')->name('create');
    Route::post('/posts', 'StoreController')->name('dates.store');
    Route::get('/dates/update', 'ShowController')->name('update.page');
    Route::get('/dates/update/{id}', 'UpdateDatesController')->name('update.dates');
    Route::patch('dates/update/{id}', 'UpdateController')->name('update');
    Route::get('dates/delete', 'DeleterController')->name('delete_page');
    Route::get('dates/delete/{id}', 'DeleteController')->name('delete');
    Route::get('dates/deleted_dates', 'DeletedDatesController')->name('deleted_dates');
    Route::get('dates/restor/{name}', 'RestorController')->name('restor');
});

Route::group(['namespace'=>'Admin', 'middleware'=>'admin'], function(){
    Route::group(['namespace'=>'Post'], function(){
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.post.home');
        Route::get('/post', 'IndexController')->name('admin.post.index');        
    });
});


Route::get('/', 'MyPageController@index');
// Route::get('/insert', 'MyPageController@insert');
// Route::get('/Symbat', 'SymbatController@index')->name('symbat');

// Route::get('/posts', 'PostController@index')->name('post');
// Route::get('/Hobbies/creat', 'HobbiesController@create');
// Route::get('/Hobbies', 'HobbiesController@index');

// Route::get('/Hobbies/update', 'HobbiesController@update');
// Route::get('/Base', 'BaseController@index')->name('base');
Route::get('/About', 'AboutController@index')->name('about');
// Route::get('/News', 'NewsController@index')->name('news');



Auth::routes();

