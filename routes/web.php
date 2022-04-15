<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('backend.dashboard');
});

Route::get('login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class,'login'])->name('login');


Route::get('login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::post('/register', function () {
    return view('registration');
});
Route::get('candidates',[CandidateController::class, 'index']);



Route::prefix('posts')->group(function (){
    Route::get('/',[PostController::class,'index'])->name('posts.index');
    Route::get('create',[PostController::class,'create'])->name('posts.create');
    Route::post('create',[PostController::class,'store'])->name('posts.store');
    Route::get('edit/{id}',[PostController::class,'edit'])->name('posts.edit');
    Route::post('update/{id}',[PostController::class,'update'])->name('posts.update');
});



Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard/post-list', [PostController::class, 'indexOfAdmin'])->name('backend.post.index');
