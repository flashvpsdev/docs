<aside class="border-r border-base-200 bg-base-200 text-base-content w-72">
  <div>
    <ul class="menu p-4 pt-2 compact">
      @foreach ($menus as $key => $items)
        @if (is_string($key))
          <li class="mt-4 menu-title"><span> {{ $key }} </span></li>
        @endif
        @foreach ($items as $item)
          <li>
            <a href="{{ $item['link'] ?? '' }}" class="capitalize">
              @if ($item['icon'] ?? false)
                @svg($item['icon'], 'inline-block w-6 h-6 mr-2 stroke-current')
              @endif
              <span>{{ $item['text'] ?? '' }}</span>
            </a>
          </li>
        @endforeach
      @endforeach
    </ul>
  </div>
</aside>
