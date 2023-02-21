<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('auth')->middleware('api')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/me', [AuthController::class, 'me']);
});


Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'list']);
    Route::get('/{id}', [CategoryController::class, 'getCateCourse']);
});

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'getList']);
    Route::get('/{id}', [CourseController::class, 'getDetail']);
    Route::post('/view', [CourseController::class, 'viewCourse']);
    Route::post('/subcribe', [CourseController::class, 'subcribeCourse']);
    Route::post('/favo', [CourseController::class, 'favoCourse']);
    Route::get('/list-view/{id}', [CourseController::class, 'listView']);
    Route::get('/list-subcribe/{id}', [CourseController::class, 'listSubcribe']);
    Route::get('/list-favo/{id}', [CourseController::class, 'listFavo']);
});

Route::prefix('user')->group(function () {
    // Route::get('/', [UserController::class, 'list']);
    Route::get('/{id}', [UserController::class, 'getInfo']);
});

