@extends("templates.public")

@section("content")
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full max-w-md">
        <div class="rounded-lg bg-white shadow-md">
          <div class="rounded-t-lg bg-indigo-900 p-4 text-lg font-bold text-white">
            {{ __("Register") }}
          </div>

          <div class="p-6">
            <form method="POST" action="{{ route("register") }}">
              @csrf

              <!-- Name Field -->
              <div class="mb-4">
                <label for="name" class="mb-4 block text-sm font-bold text-indigo-950">
                  {{ __("Name") }}
                </label>

                <input
                  id="name"
                  type="text"
                  name="name"
                  value="{{ old("name") }}"
                  class="@error("name") @enderror block w-full rounded-lg border border-gray-300 border-red-500 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900"
                  required
                  autocomplete="name"
                  autofocus
                />

                @error("name")
                  <div class="mt-2 text-sm text-red-500">
                    <strong>{{ $message }}</strong>
                  </div>
                @enderror
              </div>

              <!-- Email Field -->
              <div class="mb-4">
                <label for="email" class="mb-4 block text-sm font-bold text-indigo-950">
                  {{ __("Email Address") }}
                </label>

                <input
                  id="email"
                  type="email"
                  name="email"
                  value="{{ old("email") }}"
                  class="@error("email") @enderror block w-full rounded-lg border border-gray-300 border-red-500 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900"
                  required
                  autocomplete="email"
                />

                @error("email")
                  <div class="mt-2 text-sm text-red-500">
                    <strong>{{ $message }}</strong>
                  </div>
                @enderror
              </div>

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
                  autocomplete="new-password"
                />

                @error("password")
                  <div class="mt-2 text-sm text-red-500">
                    <strong>{{ $message }}</strong>
                  </div>
                @enderror
              </div>

              <!-- Confirm Password Field -->
              <div class="mb-4">
                <label for="password-confirm" class="mb-4 block text-sm font-bold text-indigo-950">
                  {{ __("Confirm Password") }}
                </label>

                <input
                  id="password-confirm"
                  type="password"
                  name="password_confirmation"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900"
                  required
                  autocomplete="new-password"
                />
              </div>

              <!-- Submit Button -->
              <div class="flex justify-end">
                <button
                  type="submit"
                  class="rounded-lg bg-indigo-900 px-4 py-2 font-bold text-white transition hover:bg-indigo-700"
                >
                  {{ __("Register") }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
