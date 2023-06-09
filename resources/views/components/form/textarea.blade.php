@props(['label' => '', 'id' => '', 'name' => '', 'help' => ''])

<div class="col-span-full">
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    @endif
    <div @class(["mt-2" => $label])>
        <textarea id="{{ $id }}" name="{{ $name }}" rows="3" {{ $attributes->merge(['class' => "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"]) }}>{{ $slot }}</textarea>
    </div>
    @if ($help)
        <p class="mt-3 text-sm leading-6 text-gray-600">{{ $help }}</p>
    @endif
</div>
