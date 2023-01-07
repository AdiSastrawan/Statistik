<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController;

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

Route::resource('score', ScoreController::class);
Route::post('importFile', [ScoreController::class, 'importExcel'])->name('importFile');
Route::get('/scoreFreq', [ScoreController::class, 'scoreFreq'])->name('scoreFreq');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::redirect('/', '/score', 301);
