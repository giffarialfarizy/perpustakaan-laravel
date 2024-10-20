<div class="{{ $class }}">
  <label for="{{ $id }}" class="mb-2 block text-sm font-bold text-indigo-950">{{ $label }}</label>
  <input
    type="file"
    id="{{ $id }}"
    name="{{ $name }}"
    class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900 md:w-1/3"
    aria-describedby="{{ $id }}_help"
    @if(!isset($required) || $required) required @endif
  />
  @if (isset($notes))
    <div class="mt-1 text-sm text-gray-500" id="{{ $id }}_help">{{ $notes }}</div>
  @endif
</div>
