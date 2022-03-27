<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Lesson', 'prefix' => 'lessons'], function (){
        Route::get('/', 'IndexController');
        Route::get('/create', 'CreateController')->name('admin.lessons.create');
        Route::post('/', 'StoreController')->name('admin.lessons.store');
        Route::get('/{lesson}', 'ShowController')->name('admin.lessons.show');
        Route::get('/{lesson}/edit', 'EditController')->name('admin.lessons.edit');
        Route::patch('/{lesson}', 'UpdateController')->name('admin.lessons.update');
        Route::delete('/{lesson}', 'DeleteController')->name('admin.lessons.delete');
    });
    Route::group(['namespace' => 'Klass', 'prefix' => 'klasses'], function (){
        Route::get('/', 'IndexController')->name('admin.klasses.index');
        Route::get('/create', 'CreateController')->name('admin.klasses.create');
        Route::post('/', 'StoreController')->name('admin.klasses.store');
        Route::get('/{klass}', 'ShowController')->name('admin.klasses.show');
        Route::get('/{klass}/edit', 'EditController')->name('admin.klasses.edit');
        Route::patch('/{klass}', 'UpdateController')->name('admin.klasses.update');
        Route::delete('/{klass}', 'DeleteController')->name('admin.klasses.delete');
    });

    Route::group(['namespace' => 'Teacher', 'prefix' => 'teachers'], function (){
        Route::get('/', 'IndexController')->name('admin.teachers.index');
        Route::get('/create', 'CreateController')->name('admin.teachers.create');
        Route::post('/', 'StoreController')->name('admin.teachers.store');
        Route::get('/{teacher}', 'ShowController')->name('admin.teachers.show');
        Route::get('/{teacher}/edit', 'EditController')->name('admin.teachers.edit');
        Route::patch('/{teacher}/update', 'UpdateController')->name('admin.teachers.update');
        Route::delete('/{teacher}', 'DeleteController')->name('admin.teachers.delete');
    });
});
