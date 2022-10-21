<?php

use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
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



Route::prefix('videos')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('videos.index');

    Route::get('/create', [VideoController::class, 'create'])->name('videos.create');
    Route::post('/store', [VideoController::class, 'store'])->name('videos.store');
    Route::get('/show/{video}',[VideoController::class,'show'])->name('videos.show');
    Route::get('/edit/{video}',[VideoController::class,'edit'])->name('videos.edit');
    Route::put('/update/{video}',[VideoController::class,'update'])->name('videos.update');

    Route::get('/categories/{category}/videos',[CategoryVideoController::class,'index'])->name('categories.videos.index');
});
