<?php

use App\Livewire\AboutUs;
use App\Livewire\ContactUs;
use App\Livewire\Courses;
use App\Livewire\Home;
use App\Livewire\Students;
use App\Livewire\Teachers;
use App\Livewire\VerifyCertificate;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [BaseController::class, 'home'])->name('home');
// Route::get('/contact-us', [BaseController::class, 'contact_us'])->name('contact_us');
// Route::get('/about-us', [BaseController::class, 'about_us'])->name('about_us');
// Route::get('/teachers', [BaseController::class, 'teachers'])->name('teachers');
// Route::get('/course', [BaseController::class, 'course'])->name('course');
// Route::get('/courses', [BaseController::class, 'courses'])->name('courses');
// Route::get('/verify-certificate', [BaseController::class, 'verify_certificate'])->name('verify_certificate');


Route::get('/', Home::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about_us');
Route::get('/contact-us', ContactUs::class)->name('contact_us');
Route::get('/teachers', Teachers::class)->name('teachers');
Route::get('/students', Students::class)->name('students');
Route::get('/courses', Courses::class)->name('courses');
Route::get('/verify-certificate', VerifyCertificate::class)->name('verify_certificate');
