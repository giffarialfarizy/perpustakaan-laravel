@extends("templates.public")

@section("content")
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full max-w-md">
        <div class="rounded-lg bg-white shadow-md">
          <div class="rounded-t-lg bg-indigo-900 p-4 text-lg font-bold text-white">
            {{ __("Confirm Password") }}
          </div>

          <div class="p-6">
            <p class="mb-6 text-gray-700">
              {{ __("Please confirm your password before continuing.") }}
            </p>

            <form method="POST" action="{{ route("password.confirm") }}">
              @csrf

              <!-- Password Field -->
              <div class="mb-4">
                <label for="password" class="mb-4 block text-sm font-bold text-indigo-950">
                  {{ __("Password") }}
                </label>

                <input
                  id="password"
                  type="password"
                  name="password"
                  class="@error("password") @enderror block w-full rounded-lg border border-gray-300 border-red-500 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900"
                  required
                  autocomplete="current-password"
                />

                @error("password")
                  <div class="mt-2 text-sm text-red-500">
                    <strong>{{ $message }}</strong>
                  </div>
                @enderror
              </div>

              <!-- Submit Button & Forgot Password Link -->
              <div class="flex items-center justify-between">
                <button
                  type="submit"
                  class="rounded-lg bg-indigo-900 px-4 py-2 font-bold text-white transition hover:bg-indigo-700"
                >
                  {{ __("Confirm Password") }}
                </button>

                @if (Route::has("password.request"))
                  <a
                    href="{{ route("password.request") }}"
                    class="text-sm text-indigo-900 transition hover:text-indigo-700"
                  >
                    {{ __("Forgot Your Password?") }}
                  </a>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
