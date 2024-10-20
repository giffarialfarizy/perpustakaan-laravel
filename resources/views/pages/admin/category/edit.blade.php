@extends("templates.admin")

@section("title")
  Edit Kategori
@endsection

@section("content")
  <form action="/admin/category/{{ $category->id }}" method="POST">
    @method("PUT")
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
        "value" => $category->name,
        "placeholder" => "Novel",
      ]
    )

    {{-- Buttons --}}
    @include("atoms.buttons.anchor-white", ["href" => "/admin/category", "text" => "Kembali"])
    @include("atoms.buttons.indigo", ["type" => "submit", "text" => "Ubah"])
  </form>
@endsection
