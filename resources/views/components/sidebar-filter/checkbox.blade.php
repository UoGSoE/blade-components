<div class="flex items-center">
    <input
        id="endUser-{{ $filter }}"
        wire:model="{{ $model }}"
        value="{{ $filter }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
    <label for="endUser-{{ $this->id }}" class="ml-3 text-sm text-gray-600">{{ $filter }}</label>
</div>
