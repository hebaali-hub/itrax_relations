<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/phone', [UserController::class, 'getphonefromuser']);
Route::get('/name', [UserController::class, 'getuserfromphone']);
Route::get('/comments',[PostController::class, 'getcommenstbypost']);

Route::get('/post',[PostController::class, 'getpostbycomment']);
Route::get('/role',[UserController::class, 'getrolesfromuser']);
