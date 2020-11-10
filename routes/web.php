<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;

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
    return view('welcome');
});

Route::get('tweets',[TweetsController::class, 'show']);
Route::get('/tweets/create/',[TweetsController::class, 'index']);
Route::post('tweets/',[TweetsController::class, 'store']);