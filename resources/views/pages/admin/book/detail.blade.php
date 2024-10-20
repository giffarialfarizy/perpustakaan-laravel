@extends("templates.admin")

@section("title")
  Detail Buku
@endsection

@section("content")
  @include("atoms.buttons.anchor-white", ["href" => "/admin/book", "text" => "Kembali"])

  <div class="mt-8 rounded border border-dashed border-indigo-900">
    <div class="w-full overflow-hidden p-4 md:w-64">
      <img src="{{ asset("img/" . $book->image) }}" alt="Gambar buku {{ $book->title }}" />
    </div>

    <div class="grid grid-cols-2 gap-x-4 gap-y-2 p-4">
      <div class="font-semibold">ID Buku</div>
      <div>{{ $book->id }}</div>

      <div class="font-semibold">Judul Buku</div>
      <div>{{ $book->title }}</div>

      <div class="font-semibold">Ringkasan</div>
      <div>{{ $book->summary }}</div>

      <div class="font-semibold">Tahun Terbit</div>
      <div>{{ $book->publication_year }}</div>

      <div class="font-semibold">Halaman</div>
      <div>{{ $book->pages }}</div>

      <div class="font-semibold">Gambar</div>
      <div>{{ $book->image }}</div>

      <div class="font-semibold">Jumlah Stok</div>
      <div>{{ $book->stock }}</div>

      <div class="font-semibold">Kategori</div>
      <div>{{ $book->category_id }}</div>

      <div class="font-semibold">Created At</div>
      <div>{{ $book->created_at ? $book->created_at : "-" }}</div>

      <div class="font-semibold">Last Updated At</div>
      <div>{{ $book->updated_at ? $book->updated_at : "-" }}</div>
    </div>
  </div>
@endsection
