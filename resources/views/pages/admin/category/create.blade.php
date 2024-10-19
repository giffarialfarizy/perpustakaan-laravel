@extends("templates.admin")

@section("title")
  Tambah Kategori
@endsection

@section("content")
  @component("organisms.form", ["action" => "/admin/category", "method" => "post"])
    @slot("fields")
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
    @endslot

    @slot("buttons")
      @include("atoms.buttons.anchor-white", ["href" => "/admin/category", "text" => "Kembali"])
      @include("atoms.buttons.indigo", ["type" => "submit", "text" => "Tambah"])
    @endslot
  @endcomponent
@endsection
