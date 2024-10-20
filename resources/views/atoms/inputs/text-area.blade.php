<div class="{{ $class }}">
  <label for="{{ $id }}" class="mb-4 block text-sm font-bold text-indigo-950">{{ $label }}</label>
  <textarea
    id="{{ $id }}"
    name="{{ $name }}"
    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900 md:w-1/3"
    cols="30"
    rows="10"
    @if(isset($value)) value="{{ $value }}" @endif
    @if(isset($placeholder)) placeholder="{{ $placeholder }}" @endif
    @if(!isset($required) || $required) required @endif
  ></textarea>
</div>
