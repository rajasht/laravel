<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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


Route::get('/allbooks',[BooksController::class,'showAllBooks']);
Route::get('/book/{bkid}',[BooksController::class,'showThisBook']);
Route::post('/addbook',[BooksController::class,'addBook']);
Route::put('/updatebook',[BooksController::class,'updateBook']);
Route::delete('/deletebook/{bk_id}',[BooksController::class,'deleteBook']);