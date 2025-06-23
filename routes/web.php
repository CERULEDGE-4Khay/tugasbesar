<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LearningController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::get('quiz', function () {
    return view('layouts.quiz');
})->name('quiz');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/index', function(){
    return view('layouts.index');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LearningController::class, 'dashboard'])->name('dashboard');
    Route::get('/courses', [LearningController::class, 'courses'])->name('courses.index');
    Route::get('/courses/{id}', [LearningController::class, 'courseDetail'])->name('courses.detail');
    Route::get('/videos/{id}', [LearningController::class, 'watchVideo'])->name('videos.watch');
    Route::post('/progress/save', [LearningController::class, 'saveProgress'])->name('progress.save');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
