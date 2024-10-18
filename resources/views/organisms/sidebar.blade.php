@php
  $isDashboardActive = Request::is("admin/");
  $isBookActive = Request::is("admin/book/*") || Request::is("admin/book");
  $isBorrowingActive = Request::is("admin/borrowing/*") || Request::is("admin/borrowing");
  $isCategoryActive = Request::is("admin/category/*") || Request::is("admin/category");
  $isProfileActive = Request::is("admin/profile/*") || Request::is("admin/profile");
@endphp

@include("molecules.sidebar-toggle-btn")

<aside
  id="separator-sidebar"
  class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
  aria-label="Sidebar"
>
  <div class="h-full overflow-y-auto bg-white px-3 py-4">
    <ul class="space-y-2 font-medium">
      @include("molecules.sidebar-item", ["isActive" => $isDashboardActive, "icon" => "dashboard", "text" => "Dashboard"])
      @include("molecules.sidebar-item", ["isActive" => $isBorrowingActive, "icon" => "borrowing", "text" => "Peminjaman"])
      @include("molecules.sidebar-item", ["isActive" => $isCategoryActive, "icon" => "category", "text" => "Kategori"])
      @include("molecules.sidebar-item", ["isActive" => $isBookActive, "icon" => "book", "text" => "Buku"])
    </ul>
    <ul class="mt-4 space-y-2 border-t border-gray-200 pt-4 font-medium">
      @include("molecules.sidebar-item", ["isActive" => $isProfileActive, "icon" => "setting", "text" => "Pengaturan"])
    </ul>
  </div>
</aside>
