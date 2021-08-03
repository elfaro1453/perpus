<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // belajar request dan response
    public function showRequest(Request $request)
    {
        return response()->json($request, 404);
    }

    // menambahkan buku
    public function createBook(Request $request)
    {
        // jadikan bentuk $request menjadi array
        $data = $request->all();

        // masukkan data ke dalam database
        // gunakan try catch agar jika terjadi error bisa diketahui dengan mudah
        try {
            // buat instace model Book
            $book = new Book();
            // masukkan data ke dalam book
            $book->nisbn = $data['nisbn'];
            $book->title = $data['title'];
            $book->description = $data['description'];
            $book->image = $data['image'];
            $book->rating = $data['rating'];
            $book->available = $data['available'];
            $book->penerbit_id = $data['penerbit_id'];
            $book->pengarang_id = $data['pengarang_id'];
            // simpan buku
            $book->save();

            $status = 'success';
            return response()->json(compact('status', 'book'), 200);
        } catch (\Throwable $th) {
            //throw $th;
            $status = 'error';
            return response()->json(compact('status', 'th'), 400);
        }
    }

    // mendapatkan data buku
    public function readBook($id)
    {
        // gunakan findOrFail untuk mencari data buku berdasarkan id
        // dan jika tidak ditemukan maka munculkan error not found 404
        return Book::findOrFail($id);
    }

    // mengupdate data buku
    public function updateBook($id, Request $request)
    {
        // jadikan bentuk $request menjadi array
        $data = $request->all();

        // masukkan data ke dalam database
        // gunakan try catch agar jika terjadi error bisa diketahui dengan mudah
        try {
            // buat instace model Book
            $book = Book::findOrFail($id);
            // masukkan data ke dalam book
            $book->nisbn = $data['nisbn'];
            $book->title = $data['title'];
            $book->description = $data['description'];
            $book->image = $data['image'];
            $book->rating = $data['rating'];
            $book->available = $data['available'];
            $book->penerbit_id = $data['penerbit_id'];
            $book->pengarang_id = $data['pengarang_id'];
            // simpan buku
            $book->save();

            $status = 'success';
            return response()->json(compact('status', 'book'), 200);
        } catch (\Throwable $th) {
            //throw $th;
            $status = 'error';
            return response()->json(compact('status', 'th'), 400);
        }
    }

    // menghapus data buku
    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        $status = 'success';
        return response()->json(compact('status'), 200);
    }
}
