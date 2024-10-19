<td class="flex gap-2">
  <a href="{{ $hrefView }}">
    @include("atoms.icons.view", ["class" => "text-emerald-500 hover:text-emerald-400"])
  </a>
  <a href="{{ $hrefEdit }}">
    @include("atoms.icons.edit", ["class" => "text-amber-500 hover:text-amber-400"])
  </a>

  <form action="{{ $actionRemove }}" method="post">
    @method("delete")
    @csrf
    <button type="submit">
      @include("atoms.icons.remove", ["class" => "text-rose-500 hover:text-rose-400"])
    </button>
  </form>
</td>
