<?php

use App\Http\Controllers\BookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('tes', [BookController::class, 'showRequest']);
Route::post('books/create', [BookController::class, 'createBook']);
Route::get('books/id/{id}', [BookController::class, 'readBook']);
Route::post('books/id/{id}', [BookController::class, 'updateBook']);
Route::delete('books/id/{id}', [BookController::class, 'deleteBook']);
