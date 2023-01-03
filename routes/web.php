<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; // 追加
use App\Http\Controllers\HelloController;
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

Route::get('/hellos', [HelloController::class, 'index'])->name('hellos.index');
Route::post('/hellos', [HelloController::class, 'post']);

// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
