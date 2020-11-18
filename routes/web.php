<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\HomeController;

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


Route::get('/',[HomeController::class, 'index']);
Route::get('tweets',[TweetsController::class, 'show']);
Route::get('/tweets/create/',[TweetsController::class, 'index']);
Route::post('tweets/',[TweetsController::class, 'store']);
Route::get('/tweets_edit/{id}',[TweetsController::class, 'edit']);
Route::post('/tweets_edit/{id}',[TweetsController::class, 'update'])->name('tweets_edit');
Route::get('/tweets_delete/{id}',[TweetsController::class, 'delete'])->name('delete');
