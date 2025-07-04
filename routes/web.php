<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\IsLogin;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layouts.admin');
})->middleware(IsLogin::class)->name('admin');
Route::get('/', [HomeController::class, 'index']); 
Route::get('/aboutus', [HomeController::class, 'aboutus']); 
Route::get('/contact', [HomeController::class, 'contact']); 
Route::get('/fasilitas', [HomeController::class, 'facilities']); 
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware(IsLogin::class); 
Route::get('/auth', [AuthController::class, 'index']); 
Route::post('/login', [AuthController::class, 'login']); 
Route::get('/logout', [AuthController::class, 'logout'])->middleware(IsLogin::class); 


Route::resource('teachers', TeacherController::class)->middleware(IsLogin::class);
Route::resource('classes', ClassController::class)->middleware(IsLogin::class);
Route::resource('facilities', FacilityController::class)->middleware(IsLogin::class);
Route::resource('activities', ActivityController::class)->middleware(IsLogin::class);