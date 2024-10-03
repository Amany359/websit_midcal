<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminOptionController;
use App\Http\Controllers\admin\AdminAchievementController;
use App\Http\Controllers\admin\AdminEducatedController;
use App\Http\Controllers\admin\AdminServiceController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');




Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin.home');

Route::resources([
    'Options' => AdminOptionController::class,
    'achievement' =>AdminAchievementController::class,
    'educated' => AdminEducatedController::class,
    'service' => AdminServiceController::class,

]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


