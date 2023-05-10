<div class="sm:flex">
  <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
    <span class="h-16 w-16">
        {{ $media }}
    </span>
  </div>
  <div>
    <h4 class="text-lg font-bold">{{ $heading }}</h4>
    <p class="mt-1">
        {{ $slot }}
    </p>
  </div>
</div>
