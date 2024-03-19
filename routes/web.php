<?php

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

use App\Http\Controllers\Software\SoftwareController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Wave\Facades\Wave;

// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Wave routes
Wave::routes();

Route::get('/disorder/types',[SoftwareController::class, 'disorderTypes'])->name('disorder.types');
// Route::get('/disorder/depression',[SoftwareController::class, 'disorderDepression'])->name('disorder.depression');
Route::get('/disorder/{test}',[SoftwareController::class, 'disorderTest'])->name('disorder.test');
Route::get('/chat',[SoftwareController::class, 'chatbot'])->name('chatbot');
Route::get('/privacy-policy',[SoftwareController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-and-conditions',[SoftwareController::class, 'termsnConditions'])->name('termsnConditions');


