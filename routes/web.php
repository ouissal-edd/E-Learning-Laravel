<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\TrainerController;


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


// admin

Route::get('/admin/logout',[AuthController::class, 'logout'])->name('admin.auth.logout');

 Route::get('/dashboard',[HomeController::class, 'index'])->name('admin.home');

Route::get('/admin/login',[AuthController::class, 'login'])->name('admin.auth.login');

Route::post('/admin/auth/login',[AuthController::class, 'loginPost'])->name('admin.auth.loginPost');

// category

Route::get('/admin/cat',[CatController::class, 'index'])->name('admin.cat');

Route::get('/admin/cat/create',[CatController::class, 'create'])->name('admin.cat.create');

Route::post('/admin/cat/store',[CatController::class, 'store'])->name('admin.cat.store');

Route::get('/admin/cat/edit/{id}',[CatController::class, 'edit'])->name('admin.cat.edit');

Route::post('/admin/cat/update/{id}',[CatController::class, 'update'])->name('admin.cat.update');

Route::get('/admin/cat/delete/{id}',[CatController::class, 'delete'])->name('admin.cat.delete');

// trainer
Route::get('/admin/trainer',[TrainerController::class, 'index'])->name('admin.trainer');

Route::get('/admin/trainer/create',[TrainerController::class, 'create'])->name('admin.trainer.create');

Route::post('/admin/trainer/store',[TrainerController::class, 'store'])->name('admin.trainer.store');

Route::get('/admin/trainer/edit/{id}',[TrainerController::class, 'edit'])->name('admin.trainer.edit');

Route::post('/admin/trainer/update/{id}',[TrainerController::class, 'update'])->name('admin.trainer.update');

Route::get('/admin/trainer/delete/{id}',[TrainerController::class, 'delete'])->name('admin.trainer.delete');







