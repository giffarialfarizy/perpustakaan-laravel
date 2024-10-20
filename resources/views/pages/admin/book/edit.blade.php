@extends("templates.admin")

@section("title")
  Tambah Buku
@endsection

@section("content")
  <form action="/admin/book/{{ $book->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")

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
        "value" => $book->title,
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
        "value" => $book->summary,
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
        "value" => $book->publication_year,
      ]
    )

    @include(
      "atoms.inputs.number",
      [
        "label" => "Halaman",
        "id" => "pages",
        "name" => "pages",
        "class" => "mb-4",
        "placeholder" => 200,
        "min" => 1,
        "value" => $book->pages,
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
        "isEditting" => true,
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
        "value" => $book->stock,
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
        "selectedOption" => $book->category_id,
      ]
    )

    {{-- Buttons --}}
    @include("atoms.buttons.anchor-white", ["href" => "/admin/book", "text" => "Kembali"])
    @include("atoms.buttons.indigo", ["type" => "submit", "text" => "Tambah"])
  </form>
@endsection
