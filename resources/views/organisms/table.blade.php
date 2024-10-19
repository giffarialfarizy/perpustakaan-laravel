<table id="{{ $id }}">
  <thead>
    <tr>
      <th scope="col"><span class="flex items-center">#</span></th>

      @foreach ($headers as $header)
        <th>
          <span class="flex items-center">
            {{ $header["label"] }}
            @if ($header["sortable"])
              @include("atoms.icons.sort", ["class" => "ms-1 h-4 w-4"])
            @endif
          </span>
        </th>
      @endforeach

      @if ($action["show"] === true)
        @include("molecules.table.action-header")
      @endif
    </tr>
  </thead>

  <tbody>
    @forelse ($datas as $data)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>

        @foreach ($headers as $header)
          <td class="whitespace-nowrap font-medium text-gray-900">
            {{ $data->{$header["field"]} ?? "-" }}
          </td>
        @endforeach

        @if ($action["show"] === true)
          @include(
            "molecules.table.action-body",
            [
              "hrefView" => $action["hrefView"] . $data->id,
              "hrefEdit" => $action["hrefEdit"] . $data->id,
              "hrefRemove" => $action["hrefRemove"] . $data->id,
              "actionRemove" => $action["actionRemove"],
            ]
          )
        @endif
      </tr>
    @empty
      <tr>
        <td class="text-gray-300">Tidak ada data</td>
      </tr>
    @endforelse
  </tbody>
</table>
