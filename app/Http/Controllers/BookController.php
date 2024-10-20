<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class BookController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $books = Book::get();
    return view("pages.admin.book.index", ["books" => $books]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::get();
    return view("pages.admin.book.create", ["categories" => $categories]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate(
      [
        'title' => 'required|min:2',
        'summary' => 'required',
        'publication_year' => 'required',
        'pages' => 'required',
        'image' => 'required|image|mimes:jpg,png,jpeg',
        'stock' => 'min:0',
        'category_id' => 'required',
      ],
      [
        'title.required' => 'Judul buku harus diisi',
        'title.min' => 'Judul buku minimal :min karakter',
        'summary.required' => 'Ringkasan harus diisi',
        'publication_year.required' => 'Tahun terbit harus diisi',
        'pages.required' => 'Jumlah halaman harus diisi',
        'image.required' => 'Harap upload gambar buku',
        'stock.min' => 'Stock minimal berjumlah :min buku',
        'category_id.required' => 'Pilihlah satu kategori',
      ]
    );

    $filename = time() . "." . $request->image->extension();

    $request->image->move(public_path('img'), $filename);

    $book = new Book();

    $book->title = $request->title;
    $book->summary = $request->summary;
    $book->publication_year = $request->publication_year;
    $book->pages = $request->pages;
    $book->image = $filename;
    $book->stock = $request->stock;
    $book->category_id = $request->category_id;

    $book->save();

    return redirect('/admin/book');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $book = Book::find($id);

    return view('pages.admin.book.detail', ["book" => $book]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $book = Book::find($id);
    $categories = Category::get();

    return view(
      'pages.admin.book.edit',
      [
        "book" => $book,
        "categories" => $categories
      ]
    );
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate(
      [
        'title' => 'required|min:2',
        'summary' => 'required',
        'publication_year' => 'required',
        'pages' => 'required',
        'image' => 'required|image|mimes:jpg,png,jpeg',
        'stock' => 'min:0',
        'category_id' => 'required',
      ],
      [
        'title.required' => 'Judul buku harus diisi',
        'title.min' => 'Judul buku minimal :min karakter',
        'summary.required' => 'Ringkasan harus diisi',
        'publication_year.required' => 'Tahun terbit harus diisi',
        'pages.required' => 'Jumlah halaman harus diisi',
        'image.required' => 'Harap upload gambar buku',
        'stock.min' => 'Stock minimal berjumlah :min buku',
        'category_id.required' => 'Pilihlah satu kategori',
      ]
    );

    $book = Book::find($id);

    if ($request->has('image')) {
      $path = 'img/';
      File::delete($path . $book->image);

      $filename = time() . "." . $request->image->extension();
      $request->image->move(public_path('img'), $filename);
      $book->image = $filename;
      $book->save();
    }

    $book->title = $request->title;
    $book->summary = $request->summary;
    $book->publication_year = $request->publication_year;
    $book->pages = $request->pages;
    $book->stock = $request->stock;
    $book->category_id = $request->category_id;

    $book->save();

    return redirect('/admin/book');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $book = Book::find($id);
    $path = 'img/';

    File::delete($path . $book->image);
    $book->delete();

    return redirect('/admin/book');
  }
}
