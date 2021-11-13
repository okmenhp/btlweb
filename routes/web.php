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
    return view('frontend/homepage');
});

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', 'Backend\DashboardController@index');

        // articles
        Route::prefix('/articles')->group(function(){
            Route::get('/', 'Backend\ArticleController@index')->name('admin.articles.index');
            Route::get('/create', 'Backend\ArticleController@create')->name('admin.articles.create');
            Route::get('/edit', 'Backend\ArticleController@edit')->name('admin.articles.edit');
            Route::post('/store', 'Backend\ArticleController@store')->name('admin.articles.store');
            Route::post('/upload-image', 'Backend\CKeditorController@fileUpload')->name('admin.articles.upload');
        });

        Route::prefix('/game')->group(function(){
            Route::get('/', 'Backend\GameController@index')->name('admin.game.index');

        });
    });
});

require __DIR__.'/auth.php';
