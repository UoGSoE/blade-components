@props(['timestamp' => now()->format('M d, Y'), 'iconBg' => 'bg-gray-400', 'last' => false])
<li>
  <div class="relative pb-8">
    @if (!$last)
        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
    @endif
    <div class="relative flex space-x-3">
      <div>
        <span class="h-8 w-8 rounded-full {{ $iconBg }} flex items-center justify-center ring-8 ring-white">
            @isset($icon)
                    {{ $icon }}
            @endisset
        </span>
      </div>
      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
        <div>
          <p class="text-sm text-gray-500">
            {{ $slot }}
        </p>
        </div>
        <div class="whitespace-nowrap text-right text-sm text-gray-500">
          <span>{{ $timestamp }}</span>
        </div>
      </div>
    </div>
  </div>
</li>
