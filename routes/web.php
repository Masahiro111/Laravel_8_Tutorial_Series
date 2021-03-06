<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Action;
use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\Product;
use App\Http\Livewire\User;
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

// Route::get('/home/{name?}', [HomeController::class, 'index'])
//     ->name('home.index');

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

Route::delete('/selected-students', [StudentController::class, 'deleteCheckedStudents'])->name('student.deleteSelected');

Route::get('/register', [AuthController::class, 'index']);

Route::post('/register', [AuthController::class, 'registerSubmit'])
    ->name('auth.registersubmit');

Route::get('/posts', [PostController::class, 'index']);

Route::get('/chart', [ChartController::class, 'index']);

Route::get('/form', [FormController::class, 'index']);

Route::post('/form', [FormController::class, 'formSubmit'])
    ->name('form.submit');


Route::get('/add-student', [StudentController::class, 'addStudent']);

Route::get('/students', [StudentController::class, 'getStudents']);

Route::get('/post', Post::class);

Route::get('/user', User::class);

Route::get('/home/{name?}', Home::class);


Route::get('/form', Form::class);

Route::get('/action', Action::class);

Route::get('/product', Product::class);
