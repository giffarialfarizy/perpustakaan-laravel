@php
  $headers = [
    [
      "label" => "Judul Buku",
      "field" => "title",
      "sortable" => true,
    ],

    [
      "label" => "Tahun Terbit",
      "field" => "publication_year",
      "sortable" => true,
    ],
    [
      "label" => "Kategori",
      "field" => "category_id",
      "sortable" => true,
    ],
    [
      "label" => "Stok",
      "field" => "stock",
      "sortable" => true,
    ],
  ];
@endphp

@extends("templates.admin")

@push("scripts")
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
  @vite(["resources/js/bookTable.js"])
@endpush

@section("title")
  Buku
@endsection

@section("content")
  <div class="relative overflow-x-auto pt-4">
    <div class="flex justify-between">
      <div>
        <h2 class="font-semibold text-indigo-950">Daftar Kategori</h2>
      </div>
      <div>
        @include("atoms.buttons.anchor-green", ["text" => "Tambah Buku", "href" => "/admin/book/create"])
      </div>
    </div>

    @include(
      "organisms.table",
      [
        "id" => "book-table",
        "headers" => $headers,
        "datas" => $books,
        "action" => [
          "show" => true,
          "hrefView" => "/admin/book/",
          "hrefEdit" => "/admin/book/",
          "hrefRemove" => "/admin/book/",
          "actionRemove" => "/admin/book/",
        ],
      ]
    )
  </div>
@endsection
