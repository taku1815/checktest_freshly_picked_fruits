<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\Product_SeasonController;

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
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'create']);
// Route::get('/products', [ProductController::class, 'add']);
Route::get('/products/{productId}', [ProductController::class, 'bind']);
Route::post('/products/{productId}/update', [ProductController::class, 'update']);


Route::get('/products/register', [ProductController::class, 'register']);
Route::get('/products/serach', [ProductController::class, 'find']);
Route::get('/products/{productId}/delete', [ProductController::class, 'delete']);
Route::post('/products/{productId}/delete', [ProductController::class, 'remove']);
Route::get('/find', [ProductController::class, 'find']);
Route::post('/find', [ProductController::class, 'search']);

Route::prefix('book')->group(function () {
         Route::get('/', [BookController::class, 'index']);
         Route::get('/add', [BookController::class, 'add']);
         Route::post('/add', [BookController::class, 'create']);
     });