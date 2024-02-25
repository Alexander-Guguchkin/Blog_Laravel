<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WorkController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/getPost', [PostController::class, 'getPost']);
Route::get('/createPost/{title}/{text}/{images}', [PostController::class, 'createPost']);
Route::get('/editPost/{id}/{title}/{text}/{images}', [PostController::class, 'editPost']);
Route::get('/deletePost/{id}', [PostController::class, 'deletePost']);
Route::get('/getCategory',[CategoryController::class, 'getCategory']);
Route::get('/addCategory/{categoryName}',[CategoryController::class, 'addCategory']);
Route::get('/deleteCategory/{id}',[CategoryController::class, 'deleteCategory']);
Route::get('/getWork', [WorkController::class, 'getWork']);
Route::get('/createWork/{title}/{text}/{images}', [WorkController::class, 'createWork']);
Route::get('/editWork/{id}/{title}/{text}/{images}', [WorkController::class, 'editWork']);
Route::get('/deleteWork/{id}', [WorkController::class, 'deleteWork']);
