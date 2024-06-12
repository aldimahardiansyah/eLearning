<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route untuk menampilkan halaman student
    Route::get('admin/student', [StudentController::class, 'index']);

    // Route untuk menampilkan halaman form tambah student
    Route::get('admin/student/create', [StudentController::class, 'create']);

    // Route untuk mengirim data student baru
    Route::post('admin/student/store', [StudentController::class, 'store']);

    // Route untuk menampilkan halaman form edit student
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

    Route::resource('admin/courses', CourseController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
