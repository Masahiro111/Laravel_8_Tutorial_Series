<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/posts', [PostController::class, 'index']);

    Route::post('/post', [PostController::class, 'store']);

    Route::get('/post/{id}', [PostController::class, 'show']);

    Route::put('/posts/{id}', [PostController::class, 'update']);

    Route::delete('/post/{id}', [PostController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


// Route::get('/users/{name?}', function ($name = null) {
//     return 'Hi ' . $name;
// });

// Route::get('/products/{id?}', function ($id = null) {
//     return 'product id is ' . $id;
// });

// Route::match(['get', 'post'], '/students', function (Request $req) {
//     return 'requested method is ' . $req->method();
// });

// Route::any('/posts', function (Request $req) {
//     return '[any] requested method is ' . $req->method();
// });
