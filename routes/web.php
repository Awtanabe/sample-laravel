<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; // 追加
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PersonController;
use App\Http\Middleware\HelloMiddleware;
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
    return view('welcome');
});

// $html = <<<EFO
// <html>
//   <body>
//     <h1>hello</h1>
//     <p>yahoo</p>
//   </body>
// </html>
// EFO;

// Route::get('/hello/{$msg}', []);

// Route::get('hellos', 'App\Http\Controllers\HelloController@index');

// Route::get('/hellos', [HelloController::class, 'index'])->middleware(HelloMiddleware::class);
Route::get('/hellos', [HelloController::class, 'index'])->name('hellos.index');
Route::get('/hellos/add', [HelloController::class, 'add']);
Route::post('/hellos/add', [HelloController::class, 'create']);
Route::get('/hellos/edit', [HelloController::class, 'edit']);
Route::post('/hellos/edit', [HelloController::class, 'update']);
Route::get('/hellos/del', [HelloController::class, 'del']);
Route::post('/hellos/remove', [HelloController::class, 'remove']);

// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('person', [PersonController::class, 'index']);

Route::get('person/find', [PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);