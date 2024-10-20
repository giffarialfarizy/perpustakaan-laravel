@extends("templates.admin")

@section("title")
  Tambah Kategori
@endsection

@section("content")
  <form action="/admin/category" method="POST">
    @csrf

    @if ($errors->any())
      @include("molecules.form-error-message", ["errors" => $errors])
    @endif

    {{-- Fields --}}
    @include(
      "atoms.inputs.text-input",
      [
        "label" => "Nama Kategori",
        "id" => "name",
        "name" => "name",
        "class" => "mb-4",
        "placeholder" => "Novel",
      ]
    )

    {{-- Buttons --}}
    @include("atoms.buttons.anchor-white", ["href" => "/admin/category", "text" => "Kembali"])
    @include("atoms.buttons.indigo", ["type" => "submit", "text" => "Tambah"])
  </form>
@endsection
