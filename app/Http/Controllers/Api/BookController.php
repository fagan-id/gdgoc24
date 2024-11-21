<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();

        if ($books->count()>0) {
            return new BookResource($books);
        }
        return response()->json(["message" => "Book not found"],200);
    }


    public function show($id)
    {
        $book = Book::findOrfail($id);

        if (!$book) {
            return response()->json(["message" => "Book not found"], 404);
        }
        return response()->json([$book],200);
    }


    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'nullable|date'
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_at' => $request->published_at
        ]);

        // Mengembalikan respons sukses
        return response()->json([
            'message' => 'Book created successfully',
            'data' => $book
        ],201);
    }


    public function update(Request $request, Book $book)
    {
        // Perform validation
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'nullable|date'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Book updated successfully',
                'data' => $book,
            ], 200); // Use 422 for validation errors
        }

        // Update the book with validated data
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'published_at' => $request->published_at
        ]);

        // // Return success response
        return response()->json([
            'message' => 'Book updated successfully',
            'data' => $book,
        ], 200);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
            "message" => "Book deleted succesfully"
        ],200);
    }
}
