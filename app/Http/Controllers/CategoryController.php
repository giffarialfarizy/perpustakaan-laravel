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

  // ========== READ ==========
  public function index()
  {
    $categories = DB::table('categories')->get();
    return view('pages.admin.category.index', ['categories' => $categories]);
  }

  public function show($id)
  {
    $category = DB::table('categories')->find($id);
    return view('pages.admin.category.detail', ['category' => $category]);
  }

  // ========== UPDATE ==========
  public function edit($id)
  {
    $category = DB::table('categories')->find($id);

    return view('pages.admin.category.edit', ['category' => $category]);
  }

  public function update(Request $request, $id)
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

    DB::table('categories')
      ->where('id', $id)
      ->update(
        [
          'name' => $request->input('name'),
        ]
      );

    return redirect('/admin/category');
  }

  // ========== DELETE ==========
  public function destroy($id)
  {
    DB::table('categories')->where('id', '=', $id)->delete();

    return redirect('/admin/category');
  }
}
