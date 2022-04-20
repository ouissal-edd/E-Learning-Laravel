<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;
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





// Front

Route::get('/',[HomepageController::class, 'index'])->name('front.homepage');

Route::get('/cat/{id}',[CourseController::class, 'cat'])->name('front.courseCat');

Route::get('/course/{cId}',[CourseController::class, 'show'])->name('front.show');

Route::get('/contact',[ContactController::class, 'index'])->name('front.contact');

Route::post('/newsletter',[MessageController::class, 'newsletter'])->name('front.newsletter');

Route::post('/message',[MessageController::class, 'message'])->name('front.message');

Route::post('/subscribe',[CourseController::class, 'subscribe'])->name('front.subscribe');

// Admin

Route::get('/dashboard',[HomeController::class, 'index'])->name('admin.home');

Route::get('/admin/login',[AuthController::class, 'login'])->name('admin.auth.login');
Route::post('/admin/auth/login',[AuthController::class, 'loginPost'])->name('admin.auth.loginPost');
