<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Livewire\Admin\Teacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/



Route::get('/',  [AdminController::class, 'home'])->name('home');
Route::get('/settings',  [AdminController::class, 'settings'])->name('settings');

Route::resource('teacher', Teacher::class)->names('teacher');
Route::resource('course', CourseController::class)->names('course');
Route::resource('student', StudentController::class)->names('student');
