@props(['label' => '', 'id' => '', 'name' => '', 'help' => '', 'value' => ""])

<div class="flex items-center gap-x-3">
    <input id="{{ $id }}" name="{{ $name }}" type="radio" {{ $attributes->merge(['class' => "h-4 w-4 border-gray-300 text-sky-600 focus:ring-sky-600"]) }}>
    @if ($label) <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label> @endif
</div>
