<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
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

Route::get('/login', [LoginController::class, 'index'])
    ->middleware('checkuser')
    ->name('login.index');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])
    ->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])
    ->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])
    ->name('session.delete');
