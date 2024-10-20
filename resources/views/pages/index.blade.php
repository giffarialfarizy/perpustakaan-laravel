@extends("templates.public")

@section("content")
  <h1 class="text-2xl font-bold text-blue-600">Home</h1>

  <div class="rounded-lg bg-white p-6 shadow-md">
    @if (session("status"))
      <div
        class="mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
        role="alert"
      >
        {{ session("status") }}
      </div>
    @endif

    <p>{{ __("You are logged in!") }}</p>
  </div>
@endsection
