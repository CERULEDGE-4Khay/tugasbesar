<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\UserProgressController;
use App\Models\Courses;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('dashboard/admin')->group(function() {
    Route::get('/', function() {
        return view('admin.index');
    })->name('dashboard.admin');

    Route::resource('/course', CourseController::class)->parameters([
        'course' => 'courses'
    ]);
})->middleware(['auth']);


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
    $courses = Courses::all();
    return view('index', compact('courses'));
});
Route::get('/latihaninteraktif', function () {
    return view('latihaninteraktif');
})->middleware('auth')->name('latihaninteraktif');

Route::post('/progress/mark/{video}', [UserProgressController::class, 'markVideoAsCompleted'])
    ->middleware('auth')
    ->name('progress.mark');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LearningController::class, 'dashboard'])->name('dashboard');
    Route::get('/courses', [LearningController::class, 'courses'])->name('courses.index');
    Route::get('/courses/{courses}', [LearningController::class, 'courseDetail'])->name('courses.detail');
    Route::get('/videos/{id}', [LearningController::class, 'watchVideo'])->name('videos.watch');
    Route::post('/progress/save', [LearningController::class, 'saveProgress'])->name('progress.save');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
