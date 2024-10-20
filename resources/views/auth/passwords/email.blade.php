@extends("templates.public")

@section("content")
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full max-w-md">
        <div class="rounded-lg bg-white shadow-md">
          <div class="rounded-t-lg bg-indigo-900 p-4 text-lg font-bold text-white">
            {{ __("Reset Password") }}
          </div>

          <div class="p-6">
            @if (session("status"))
              <div class="mb-4 text-sm text-green-600">
                {{ session("status") }}
              </div>
            @endif

            <form method="POST" action="{{ route("password.email") }}">
              @csrf

              <!-- Email Address Field -->
              <div class="mb-4">
                <label for="email" class="mb-4 block text-sm font-bold text-indigo-950">
                  {{ __("Email Address") }}
                </label>

                <input
                  id="email"
                  type="email"
                  name="email"
                  class="@error("email") @enderror block w-full rounded-lg border border-gray-300 border-red-500 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900"
                  value="{{ old("email") }}"
                  required
                  autocomplete="email"
                  autofocus
                />

                @error("email")
                  <div class="mt-2 text-sm text-red-500">
                    <strong>{{ $message }}</strong>
                  </div>
                @enderror
              </div>

              <!-- Submit Button -->
              <div class="flex justify-end">
                <button
                  type="submit"
                  class="rounded-lg bg-indigo-900 px-4 py-2 font-bold text-white transition hover:bg-indigo-700"
                >
                  {{ __("Send Password Reset Link") }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
