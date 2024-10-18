<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield("title") | Admin</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
  </head>
  <body class="bg-indigo-50">
    @include("organisms.sidebar")

    <div class="p-4 sm:ml-64">
      <h1 class="text-xl font-bold text-indigo-950">@yield("title")</h1>

      {{-- Card --}}
      <div class="mt-4 block rounded-lg border border-gray-200 bg-white p-6 shadow">
        @yield("content")
      </div>
    </div>
  </body>
</html>
