<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
  // ========== CREATE ==========
  public function create()
  {
    return view('pages.admin.category.create');
  }

  public function store(Request $request)
  {
    $request->validate(
      [
        'name' => 'required|min:2',
      ],
      [
        'name.required' => 'Nama Kategori harus diisi',
        'name.min' => 'Nama Kategori minimal :min karakter',
      ]
    );

    DB::table('categories')->insert([
      'name' => $request->input('name'),
    ]);

    return redirect('/admin/category');
  }
}
