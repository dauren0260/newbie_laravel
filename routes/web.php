<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// 控制器路由
// Route::get('/message', [MessageController::class,"index"]);

// // 基本路由
// Route::get("message",function(){
//     return "基本路由";
// });

// view路由
// Route::view("/message","message/index");

Route::get("index",[MessageController::class,"index"]);

Route::get("dbtest",[MessageController::class,"dbtest"]);

Route::get("list",[MessageController::class,"list"]);