<div class="{{ $class }}">
  <label for="{{ $id }}" class="mb-4 block text-sm font-bold text-indigo-950">{{ $label }}</label>
  <select
    id="{{ $id }}"
    name="{{ $name }}"
    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-indigo-900 focus:ring-indigo-900 md:w-1/3"
    @if(!isset($required) || $required) required @endif
  >
    @forelse ($options as $option)
      @if ($option->id === $selectedOption)
        <option value="{{ $option->id }}" selected>{{ $option->name }}</option>
      @else
        <option value="{{ $option->id }}">{{ $option->name }}</option>
      @endif
    @empty
      <option value="">{{ $name }} tidak tersedia</option>
    @endforelse
  </select>
</div>
