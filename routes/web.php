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

Route::get('/', 'Frontend\DashboardController@index');

Route::get('/', function () {
    return view('frontend/news');
});

Route::get('/videos', function () {
    return view('frontend/videos');
});


Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', 'Backend\DashboardController@index');

        // articles
        Route::prefix('/articles')->group(function(){
            Route::get('/', 'Backend\ArticleController@index')->name('admin.articles.index');
            Route::get('/create', 'Backend\ArticleController@create')->name('admin.articles.create');
            Route::post('/store', 'Backend\ArticleController@store')->name('admin.articles.store');
            Route::get('/edit', 'Backend\ArticleController@edit')->name('admin.articles.edit');
            Route::post('/update', 'Backend\ArticleController@update')->name('admin.articles.update');
            Route::get('/delete', 'Backend\ArticleController@delete')->name('admin.articles.delete');
            Route::post('/upload-image', 'Backend\CKeditorController@fileUpload')->name('admin.articles.upload');
        });

        Route::prefix('/game')->group(function(){
            Route::get('/', 'Backend\GameController@index')->name('admin.game.index');
            Route::get('/create', 'Backend\GameController@create')->name('admin.game.create');
            Route::post('/store', 'Backend\GameController@store')->name('admin.game.store');
            Route::post('/update', 'Backend\GameController@update')->name('admin.game.update');
            Route::get('/delete', 'Backend\GameController@delete')->name('admin.game.delete');
            Route::get('/type', 'Backend\GameController@type')->name('admin.game.type');
            Route::post('/type/store', 'Backend\GameController@typeStore')->name('admin.game.type.store');
            Route::get('/type/delete', 'Backend\GameController@typeDelete')->name('admin.game.type.delete');
        });

        Route::prefix('/videos')->group(function(){
            Route::get('/', 'Backend\VideoController@index')->name('admin.video.index');
            Route::get('/create', 'Backend\VideoController@create')->name('admin.video.create');
            Route::post('/store', 'Backend\VideoController@store')->name('admin.video.store');
            Route::get('/edit', 'Backend\VideoController@edit')->name('admin.video.edit');
            Route::post('/update', 'Backend\VideoController@update')->name('admin.video.update');
            Route::get('/delete', 'Backend\VideoController@delete')->name('admin.video.delete');
        });
    });
});

require __DIR__.'/auth.php';
