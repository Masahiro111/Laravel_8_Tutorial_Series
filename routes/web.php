<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZipController;
use App\Models\Student;
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

Route::get('edit-student/{id}', [StudentController::class, 'editStudent']);

Route::post('/update-student', [StudentController::class, 'updateStudent'])->name('student.update');

Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('student.delete');

Route::get('/contact-us', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send ');

Route::get('/get-name', [TestController::class, 'getFistLastName']);

Route::get('/add-product', [ProductController::class, 'addProducts']);

Route::get('/search', [ProductController::class, 'search']);

Route::get('/autocomplete', [ProductController::class, 'autocomplete'])
    ->name('autocomplete');

Route::get('/zip', [ZipController::class, 'zipFile']);

Route::get('/employee', [EmployeeController::class, 'index']);
