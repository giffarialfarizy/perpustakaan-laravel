@extends("templates.public")

@section("content")
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full max-w-md">
        <div class="rounded-lg bg-white shadow-md">
          <div class="rounded-t-lg bg-indigo-900 p-4 text-lg font-bold text-white">
            {{ __("Login") }}
          </div>

          <div class="p-6">
            <form method="POST" action="{{ route("login") }}">
              @csrf

              <!-- Email Field -->
              <div class="mb-4">
                <label for="email" class="mb-2 block text-sm font-bold text-indigo-950">
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

              <!-- Password Field -->
              <div class="mb-4">
                <label for="password" class="mb-2 block text-sm font-bold text-indigo-950">
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

              <!-- Remember Me Checkbox -->
              <div class="mb-4">
                <div class="flex items-center">
                  <input
                    id="remember"
                    type="checkbox"
                    class="rounded border-gray-300 text-indigo-900 focus:ring-indigo-900"
                    name="remember"
                    {{ old("remember") ? "checked" : "" }}
                  />
                  <label for="remember" class="ml-2 block text-sm text-indigo-950">
                    {{ __("Remember Me") }}
                  </label>
                </div>
              </div>

              <!-- Submit Button and Forgot Password Link -->
              <div class="flex items-center justify-between">
                <button
                  type="submit"
                  class="rounded-lg bg-indigo-900 px-4 py-2 font-bold text-white transition hover:bg-indigo-700"
                >
                  {{ __("Login") }}
                </button>

                @if (Route::has("password.request"))
                  <a
                    class="text-sm text-indigo-700 hover:underline"
                    href="{{ route("password.request") }}"
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
