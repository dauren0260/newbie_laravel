<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\UserController;
Route::get('/', function () {
    return view('welcome');
});

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/modify/user', [UserController::class,"modifyUser"])->name('modify.user');
Route::post('/modify/user', [UserController::class,"modifyUserData"])->name('modify.user.data');
Route::get('/modify/user/pwd', [UserController::class,"modifyUserPwd"])->name('modify.user.pwd');
Route::post('/modify/user/pwd', [UserController::class,"modifyUserPwdData"])->name('modify.user.pwd.data');
Route::get('/delete/user', [UserController::class,"deleteUser"])->name('delete.user');
Route::post('/delete/user', [UserController::class,"deleteUserData"])->name('delete.user.data');