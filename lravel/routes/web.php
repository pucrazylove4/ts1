<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLTE3viewController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DBUsers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;


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

Route::get('/abc',[abc::class,'index']);
// route::get('welcome', function(){

// Route::get('/hello',[HelloController::class,'hello']);
Route::get('/trang-chu',[HomepageController::class,'trangchu']);
// DBuser insert
Route::get('/users',[DBUsers::class,'index']);
Route::post('users',[DBUsers::class,'getDB'])->name('abc');
// AdminLTE3view
Route::get('/DashboardV3',[AdminLTE3viewController::class,'DashboardV3']);
Route::get('/DashboardV2',[AdminLTE3viewController::class,'DashboardV2']);
Route::get('/Dashboard',[AdminLTE3viewController::class,'Dashboard']);   
 
//AdminLTEAuth
Route::post('/customer-create',[CustomerController::class,'getDB'])->name('custom-create');
Route::post('/login',[CustomerController::class,'logincheck'])->name('login-check');
Route::get('/logout',[CustomerController::class,'LogoutUsers'])->name('users-logout');
// AdminLTE middleware
Route::get('/customer-create',[CustomerController::class,'customer'])->name('customer-create-view');
Route::get('/login',[CustomerController::class,'login'])->name('login-view');
Route::middleware(['CustomerAuthCheck'])->group(function () {
    
    
    Route::get('/welcome',[CustomerController::class,'welcomeDashBoard'])->name('login-welcome-view');
});