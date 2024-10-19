@php
  $headers = [
    [
      "label" => "Nama Kategori",
      "field" => "name",
      "sortable" => true,
    ],
  ];
@endphp

@extends("templates.admin")

@push("scripts")
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
  @vite(["resources/js/categoryTable.js"])
@endpush

@section("title")
  Kategori
@endsection

@section("content")
  <div class="relative overflow-x-auto pt-4">
    <div class="flex justify-between">
      <div>
        <h2 class="font-semibold text-indigo-950">Daftar Kategori</h2>
      </div>
      <div>
        @include("atoms.buttons.anchor-green", ["text" => "Tambah Kategori", "href" => "/admin/category/create"])
      </div>
    </div>

    @include(
      "organisms.table",
      [
        "id" => "category-table",
        "headers" => $headers,
        "datas" => $categories,
        "action" => [
          "show" => true,
          "hrefView" => "/admin/category/",
          "hrefEdit" => "/admin/category/edit/",
          "hrefRemove" => "/admin/category/",
          "actionRemove" => "/admin/category/",
        ],
      ]
    )
  </div>
@endsection
