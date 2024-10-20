@extends("templates.public")

@section("content")
  <div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-full max-w-md">
        <div class="rounded-lg bg-white shadow-md">
          <div class="rounded-t-lg bg-indigo-900 p-4 text-lg font-bold text-white">
            {{ __("Verify Your Email Address") }}
          </div>

          <div class="p-6">
            @if (session("resent"))
              <div
                class="mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
              >
                {{ __("A fresh verification link has been sent to your email address.") }}
              </div>
            @endif

            <p class="mb-4">
              {{ __("Before proceeding, please check your email for a verification link.") }}
            </p>

            <p class="mb-4">{{ __("If you did not receive the email") }},</p>

            <form method="POST" action="{{ route("verification.resend") }}" class="inline-block">
              @csrf
              <button type="submit" class="text-indigo-700 hover:underline">
                {{ __("click here to request another") }}
              </button>
              .
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
