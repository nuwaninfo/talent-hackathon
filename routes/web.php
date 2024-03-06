<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Student
Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.index');
    Route::get('/add', [StudentController::class, 'add'])->name('student.add');
    Route::post('/store', [StudentController::class, 'store'])->name(
        'student.store'
    );
});
