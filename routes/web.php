<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\MentoringController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserProgressController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
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


Route::get('/dashboard', [LearningController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::prefix('dashboard/admin')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard.admin');

    Route::resource('mission', MissionController::class);
    Route::resource('/course', CourseController::class)->parameters([
        'course' => 'courses'
    ]);
});


Route::post('/update-progress', [UserProgressController::class, 'update'])
    ->middleware('auth') 
    ->name('progress.update');

// Route::get('/test-achievement', [HomeController::class, 'testAchievement'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::post('/subscribe', [NewsletterController::class, 'subscribe']);

Route::get('/auth/passwords/confirm', function () {
    return view('auth/passwords/confirm');
});
Route::get('/quiz/hasil', function () {
    return view('hasilquiz');
})->name('hasil.quiz');

// Route::get('/create', function () {
//     return view('quiz.create');
// });
// Tampilan detail quiz + form jawaban
Route::get('mission/{id}/detail', [QuizController::class, 'showDetail'])->name('user.quiz.show');

// Submit jawaban quiz
Route::post('quiz/{id}/submit', [QuizController::class, 'submitQuiz'])->name('user.quiz.submit');
// Web.php
Route::post('/quiz/submit-all', [QuizController::class, 'submitAll'])->name('user.quiz.submit.all');


Route::resource('quiz', controller: QuizController::class);
Route::get( 'show/quiz', [QuizController::class, 'showAll'])->name('show.quiz');


Route::get('/index', function(){
    $courses = Courses::all();
    return view('index', compact('courses'));
});
Route::get('/latihaninteraktif', function () {
    return view('latihaninteraktif');
})->middleware('auth')->name('latihaninteraktif');
Route::get('/materi', function () {
    return view('materi');
})->middleware('auth')->name('materi');

Route::middleware(['auth'])->group(function () {
    Route::get('/mentoring', [MentoringController::class, 'index'])->name('mentoring.index');
    Route::get('/mentoring/{mentor}/schedule', [MentoringController::class, 'scheduleForm'])->name('mentoring.schedule');
    Route::post('/mentoring/{mentor}/schedule', [MentoringController::class, 'storeSchedule'])->name('mentoring.storeSchedule');

    Route::get('/chat/{mentor}', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');
});

Route::get('/admin/messages', [AdminController::class, 'showMessages'])->name('admin.messages');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::middleware(['auth'])->group(function () {
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
});

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
