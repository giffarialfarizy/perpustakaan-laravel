@extends("templates.admin")

@section("title")
  Tambah Buku
@endsection

@section("content")
  <form action="/admin/book" method="POST" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())
      @include("molecules.form-error-message", ["errors" => $errors])
    @endif

    {{-- Fields --}}
    @include(
      "atoms.inputs.text-input",
      [
        "label" => "Judul Buku",
        "id" => "title",
        "name" => "title",
        "class" => "mb-4",
        "placeholder" => "Contoh: Laskar Pelangi",
      ]
    )

    @include(
      "atoms.inputs.text-area",
      [
        "label" => "Ringkasan",
        "id" => "summary",
        "name" => "summary",
        "class" => "mb-4",
        "placeholder" => "Tulis ringkasan buku di sini",
      ]
    )

    @include(
      "atoms.inputs.number",
      [
        "label" => "Tahun Terbit",
        "id" => "publication_year",
        "name" => "publication_year",
        "class" => "mb-4",
        "placeholder" => 2020,
        "min" => 400,
        "max" => 2024,
      ]
    )

    @include(
      "atoms.inputs.number",
      [
        "label" => "Jumlah Halaman",
        "id" => "pages",
        "name" => "pages",
        "class" => "mb-4",
        "placeholder" => 200,
        "min" => 1,
      ]
    )

    @include(
      "atoms.inputs.file",
      [
        "label" => "Gambar",
        "id" => "image",
        "name" => "image",
        "class" => "mb-4",
        "notes" => "Masukkan file gambar",
      ]
    )

    @include(
      "atoms.inputs.number",
      [
        "label" => "Jumlah Stok",
        "id" => "stock",
        "name" => "stock",
        "class" => "mb-4",
        "placeholder" => 1,
        "min" => 0,
      ]
    )

    @include(
      "atoms.inputs.select",
      [
        "label" => "Kategori",
        "id" => "category_id",
        "name" => "category_id",
        "class" => "mb-8",
        "options" => $categories,
      ]
    )

    {{-- Buttons --}}
    @include("atoms.buttons.anchor-white", ["href" => "/admin/book", "text" => "Kembali"])
    @include("atoms.buttons.indigo", ["type" => "submit", "text" => "Tambah"])
  </form>
@endsection
