<form action="{{ $action }}" method="{{ $method }}">
  {{-- Error Messages --}}
  @if ($errors->any())
    @include("molecules.form-error-message", ["errors" => $errors])
  @endif

  {{-- Fields --}}
  @csrf
  {{ $fields }}

  {{-- Buttons --}}
  {{ $buttons }}
</form>
