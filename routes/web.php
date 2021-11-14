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

Route::get('/listgame', function () {
    return view('frontend/listgame');
});

Route::get('/videos', function () {
    return view('frontend/videos');
});
Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', 'Backend\DashboardController@index');
        Route::post('/articles/insert', 'Backend\CKeditorController@fileUpload')->name('admin.articles.upload');
    });
});

require __DIR__.'/auth.php';
