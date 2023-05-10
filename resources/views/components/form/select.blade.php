@props(['label' => '', 'id' => '', 'name' => '', 'help' => '', 'autocomplete' => 'on'])

<div class="sm:col-span-3">
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    @endif
    <div @class(["mt-2" => $label])>
        <select id="{{ $id }}" name="{{ $name }}" autocomplete="{{ $autocomplete }}"
            {{ $attributes->merge(['class' => "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"]) }}>
            {{ $slot }}
        </select>
    </div>
    @if ($help)
        <p class="mt-3 text-sm leading-6 text-gray-600">{{ $help }}</p>
    @endif
</div>
