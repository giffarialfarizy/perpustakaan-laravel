@php
  // classes
  $linkActiveClass = "bg-indigo-900 text-white";
  $linkInactiveClass = "text-indigo-950 hover:bg-indigo-50";
  $linkClass = "group flex items-center rounded-lg p-4";

  $iconActiveClass = "h-5 w-5 bg-indigo-900 text-white transition duration-75";
  $iconInactiveClass = "h-5 w-5 text-gray-400 transition duration-75 group-hover:text-indigo-900";
@endphp

<li>
  <a href="#" class="{{ $isActive ? $linkActiveClass : $linkInactiveClass }} {{ $linkClass }}">
    @include(
      "atoms.icons." . $icon,
      [
        "class" => $isActive ? $iconActiveClass : $iconInactiveClass,
      ]
    )
    <span class="ms-3">{{ $text }}</span>
  </a>
</li>
