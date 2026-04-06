<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\EmailController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/directory', [DirectoryController::class, 'index'])->name('directory');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/admissions', [AdmissionsController::class, 'index'])->name('admissions');

Route::get('/social', [SocialController::class, 'index'])->name('social');


Route::get('/email-hod',  [EmailController::class, 'create'])->name('email.create');
Route::post('/email-hod', [EmailController::class, 'send'])->name('email.send');
