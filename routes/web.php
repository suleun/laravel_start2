<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/post/index', [PostController::class, "index"])->middleware('auth')->name('post.index');


Route::post('/post/store', [PostController::class,"store"])->middleware('auth')->name('post.store');
Route::get('/post', [PostController::class,"create"])->middleware('auth')->name('post.create');


Route::get('/post/show/{id}', [PostController::class, "show"])->middleware('auth')->name('post.show');

Route::get('/post/edit/{id}', [PostController::class,"edit"])->middleware('auth')->name('post.edit');

Route::patch('/post/update/{id}', [PostController::class,"update"])->middleware('auth')->name('post.update');


Route::delete('/post/destroy/{id}', [PostController::class,"destroy"])->middleware('auth')->name('post.destroy');

require __DIR__.'/auth.php';
