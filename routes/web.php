<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\PaymentGateway\Payment;

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

// Route::get('/locale/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/home/{name}', [HomeController::class, 'index'])
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

Route::get('/posts', [PostController::class, 'getAllPost'])
    ->name('post.getallpost');

Route::get('/add-post', [PostController::class, 'addPost'])
    ->name('post.add');


Route::post('/add-post', [PostController::class, 'addPostSubmit'])
    ->name('post.addsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])
    ->name('post.getbyid');

Route::get('delete-post/{id}', [PostController::class, 'deletePost'])
    ->name('post.delete');


Route::get('/edit-post/{id}', [PostController::class, 'editPost'])
    ->name('post.edit');


Route::post('/update-post', [PostController::class, 'updatePost'])
    ->name('post.update');

Route::get('/inner-join', [PostController::class, 'innerJoinCaluse'])
    ->name('post.innerjoin');

Route::get('/left-join', [PostController::class, 'leftJoinClause'])
    ->name('post.leftjoin');


Route::get('/right-join', [PostController::class, 'rightJoinClause'])
    ->name('post/rightjoin');


Route::get('/all-posts', [PostController::class, 'getAllPostUsingModel'])
    ->name('post.getallpostusingmodel');

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/users', [PaginationController::class, 'allUsers'])
    ->name('users');


Route::get('/upload', [UploadController::class, 'uploadForm']);

Route::post('/upload', [UploadController::class, 'uploadFile'])
    ->name('upload.uploadfile');

Route::get('/payment', function () {
    return Payment::Process();
});


Route::get('/students', [StudentController::class, 'fetchStudents']);

Route::get('/add-article', [ArticleController::class, 'addArticle']);

Route::post('/create-article', [ArticleController::class, 'createArticle'])
    ->name('article.create');

Route::get('/articles', [ArticleController::class, 'getArticle']);

Route::get('/articles/{id}', [ArticleController::class, 'getArticleById']);

Route::get('/delete-article/{id}', [ArticleController::class, 'deleteArticle']);

Route::get('/edit-article/{id}', [ArticleController::class, 'editArticle']);

Route::post('/update-article', [ArticleController::class, 'updateArticle'])
    ->name('article.update');

Route::get('/add-user', [UserController::class, 'insertRecord']);

Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

Route::get('/add-post', [PostController::class, 'addPost']);

Route::get('/add-comment/{id}', [PostController::class, 'addComment']);

Route::get('/get-comments', [PostController::class, 'getCommentsByPost']);

Route::get('/add-roles', [RoleController::class, 'addRole']);

Route::get('/add-users', [RoleController::class, 'addUser']);

Route::get('/rolesbyuser/{id}', [RoleController::class, 'getAllRolesByUser']);

Route::get('/usersbyrole/{id}', [RoleController::class, 'getAllUsersByRole']);

Route::get('/add-employee', [EmployeeController::class, 'addEmployee']);

Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);

Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV']);

route::get('/get-all-employee', [EmpController::class, 'getAllEmployees']);

Route::get('/download-pdf', [EmpController::class, 'downloadPDF']);

Route::get('/import-form', [EmployeeController::class, 'importForm']);

Route::post('/import', [EmployeeController::class, 'import'])
    ->name('employee.import');

Route::get('/resize-image', [ImageController::class, 'resizeImage']);

Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])
    ->name('image.resize');
