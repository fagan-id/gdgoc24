<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('/books',BookController::class);

// Get all books
Route::get('/books', [BookController::class, 'index']); // List all books

// Get a specific book by its ID
Route::get('/books/{book}', [BookController::class, 'show']); // Show a single book

// Create a new book
Route::post('/books', [BookController::class, 'store']); // Store a new book

// Update a book by its ID
Route::put('/books/{book}', [BookController::class, 'update']); // Update book details

// Delete a book by its ID
Route::delete('/books/{book}', [BookController::class, 'destroy']); // Delete a book
