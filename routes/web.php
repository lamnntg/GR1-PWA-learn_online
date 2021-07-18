<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TabController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [TabController::class, 'home'])->name('home');
    Route::get('/chat', [UserController::class, 'chat'])->name('chat');
    Route::get('/course', [TabController::class, 'course'])->name('course');


    Route::prefix('/exam')->group(function () {
        Route::get('/{id}', [ExamController::class, 'examList'])->name('exam');
        Route::post('/create', [ExamController::class, 'create'])->name('exam.create');
        Route::get('/{examId}/take', [ExamController::class, 'examTake'])->name('exam.take');
        Route::post('/post', [ExamController::class, 'examPost'])->name('exam.post');
        Route::get('/{examId}/result', [ExamController::class, 'examResult'])->name('exam.result');

        Route::post('/config/create', [ExamController::class, 'examConfigCreate'])->name('exam.config.create');
    });

    Route::prefix('/course')->group(function () {
        Route::get('/{courseId}/detail', [CourseController::class, 'courseDetail'])->name('course.detail');
    });
    Route::prefix('/subject')->group(function () {
        Route::get('{subjectId}/lessons', [SubjectController::class, 'lessonList'])->name('subject.lesson.list');
    });

    Route::get('/profile', [UserController::class, 'index'])->name('profile.index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
});

require __DIR__.'/auth.php';
