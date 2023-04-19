@props(['href' => '#', 'active' => false])
<a href="{{ $href }}" {{ $attributes->merge([
    'class' => "hidden sm:ml-6 sm:block rounded-md px-3 py-2 text-sm font-medium" . ($active ? ' bg-sky-400 text-white' : ' text-gray-200 hover:bg-sky-500 hover:text-white')
]) }} {{ $active ? 'aria-current="page"' : '' }}>
    {{ $slot }}
</a>
