<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;

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

Route::get('/test-auth', function () {
    dd(Auth::check(), Auth::user());
});

Route::group(['namespace' => '\App\Http\Controllers\Main'], function() {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => '\App\Http\Controllers\Post', 'prefix' => 'posts'], function() {
    Route::get('/', 'IndexController')->name('main.post.home');
    Route::get('/{post}', 'ShowController')->name('main.post.show');

        // post/10/comments
    Route::group(['namespace' => 'Comment', 'prefix'=>'{post}/comments'], function() {
        Route::post('/', 'StoreController')->name('comment.store');
        });

    Route::group(['namespace' => 'Like', 'prefix'=>'{post}/likes'], function() {
        Route::post('/', 'StoreController')->name('like.store');
        });
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index']);

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {

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
        Route::delete('/{category}', 'StoreController')->name('category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('tag.index');
        Route::get('/create', 'CreateController')->name('tag.create');
        Route::post('/', 'StoreController')->name('tag.store');
        Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('tag.update');
        Route::delete('/{tag}', 'StoreController')->name('tag.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('post.index');
        Route::get('/create', 'CreateController')->name('post.create');
        Route::post('/', 'StoreController')->name('post.store');
        Route::get('/{post}', 'ShowController')->name('post.show');
        Route::get('/{post}/edit', 'EditController')->name('post.edit');
        Route::patch('/{post}', 'UpdateController')->name('post.update');
        Route::delete('/{post}', 'StoreController')->name('post.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('user.index');
        Route::get('/create', 'CreateController')->name('user.create');
        Route::post('/', 'StoreController')->name('user.store');
        Route::get('/{user}', 'ShowController')->name('user.show');
        Route::get('/{user}/edit', 'EditController')->name('user.edit');
        Route::patch('/{user}', 'UpdateController')->name('user.update');
        Route::delete('/{user}', 'StoreController')->name('user.delete');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {

    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });

    Route::group(['namespace' => 'Liked', 'prefix' => 'liked'], function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
    });

    Route::group(['namespace' => 'Comment', 'prefix' => 'comments'], function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
    });
});
