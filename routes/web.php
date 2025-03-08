<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => '\App\Http\Controllers\Main'], function() {
    Route::get('/', 'IndexController');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'AdminController')->name('admin.index');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        Route::get('/{category}', 'ShowController')->name('category.show');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('tag.index');
        Route::get('/create', 'CreateController')->name('tag.create');
        Route::post('/', 'StoreController')->name('tag.store');
        Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('post.index');
        Route::get('/create', 'CreateController')->name('post.create');
        Route::post('/', 'StoreController')->name('post.store');
        Route::get('/{post}', 'ShowController')->name('post.show');
        Route::get('/{post}/edit', 'EditController')->name('post.edit');
        Route::patch('/{post}', 'UpdateController')->name('post.update');
        Route::delete('/{post}', 'DeleteController')->name('post.delete');
    });
});
