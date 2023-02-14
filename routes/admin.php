<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::name('admin.')->group(function () {
    Route::get('', [CourseController::class, 'index'])->name('index');
    Route::prefix('courses')->name('courses.')->group(function () {
        Route::get('', [CourseController::class, 'index'])->name('index');
        Route::get('/create', [CourseController::class, 'create'])->name('create');
        Route::post('/create', [CourseController::class, 'store'])->name('store');
        Route::delete('/delete',[CourseController::class,'delete'])->name('delete');
    });
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('', [UserController::class, 'index'])->name('index');
    });
});


// Route::prefix('pages')->middleware('role:Mod')->name('pages.')->group(function(){
//     Route::get('', [CourseController::class, 'index'])->name('index');
//     Route::get('/create', [CourseController::class, 'create'])->name('create');
//     Route::post('/create', [CourseController::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('edit');
//     Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
//     Route::delete('/delete',[CourseController::class,'delete'])->name('delete');
// });