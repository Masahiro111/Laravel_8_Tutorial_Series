<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');

Route::get('add-post', [ClientController::class, 'addPost']);

Route::get('/update-post', [ClientController::class, 'updatePost'])
    ->name('posts.update');

Route::get('/delete-post', [ClientController::class, 'deletePost'])
    ->name('posts.delete');

Route::get('/fluent-string', [FluentController::class, 'index'])
    ->name('fluent.index');


Route::get('/add-student', [StudentController::class, 'addStudent']);

Route::post('/add-student', [StudentController::class, 'storeStudent'])->name('student.store');

Route::get('/all-student', [StudentController::class, 'students']);

Route::get('/students', [StudentController::class, 'index']);

Route::post('/add-student', [StudentController::class, 'addStudent'])
    ->name('student.add');

Route::get('/students/{id}', [StudentController::class, 'getStudentById']);

Route::put('/student', [StudentController::class, 'updateStudent'])
    ->name('student.update');


Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);
