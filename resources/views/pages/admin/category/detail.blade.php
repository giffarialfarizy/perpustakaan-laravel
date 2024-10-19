@extends("templates.admin")

@section("title")
  Detail Kategori
@endsection

@section("content")
  @include("atoms.buttons.anchor-white", ["href" => "/admin/category", "text" => "Kembali"])

  <div class="mt-8 rounded border border-dashed border-indigo-900">
    <div class="grid grid-cols-2 gap-x-4 gap-y-2 p-4">
      <div class="font-semibold">ID Kategori</div>
      <div>{{ $category->id }}</div>

      <div class="font-semibold">Nama Kategori</div>
      <div>{{ $category->name }}</div>

      <div class="font-semibold">Created At</div>
      <div>{{ $category->created_at ? $category->created_at : "-" }}</div>

      <div class="font-semibold">Updated At</div>
      <div>{{ $category->updated_at ? $category->updated_at : "-" }}</div>
    </div>
  </div>
@endsection
