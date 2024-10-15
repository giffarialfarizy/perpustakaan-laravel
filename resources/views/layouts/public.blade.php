<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Perpustakaan</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
  </head>
  <body class="flex min-h-screen flex-col justify-between">
    @include("partials.header")
    <div class="flex-1 bg-green-400">
      <main class="mx-auto w-full max-w-screen-xl bg-red-400 p-4">
        @yield("content")
      </main>
    </div>
    @include("partials.footer")
  </body>
</html>
