<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Perpustakaan</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
  </head>
  <body class="flex min-h-screen flex-col justify-between text-indigo-950">
    @include("organisms.header")
    <div class="flex-1">
      <main class="mx-auto w-full max-w-screen-xl p-4">
        @yield("content")
      </main>
    </div>
    @include("organisms.footer")
  </body>
</html>
