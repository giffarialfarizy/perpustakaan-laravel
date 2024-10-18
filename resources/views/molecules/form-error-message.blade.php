<div class="mb-4 rounded bg-rose-500 p-2 text-sm">
  <ul>
    @foreach ($errors->all() as $error)
      <li class="text-white">{{ $error }}</li>
    @endforeach
  </ul>
</div>
