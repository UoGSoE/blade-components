# Blade Components
This is a set of default [Laravel Blade components](https://laravel.com/docs/10.x/blade#components) we use in our web apps.  They use [TailwindCSS](https://tailwindcss.com/) for the CSS styling.

## Usage
Once you have copied them into your app, the assumption is you will write blade views that use the base layout.blade.php file as follows :
```html
<x-layout>
  <div>
    Hello
    <x-button.plain>Click Me</x-button.plain>
  </div>
</x-layout>
```
If you are using full-page Livewire components then there is a default `resources/views/layouts/app.blade.php` which just contains a simple `<x-layout>`.

### Some more examples

```html
<!-- info message using alpine to add a dismiss/close button at the right -->
<x-message.info class="mb-4" x-data="{ show: true }" x-show="show" x-transition.opacity="">
    <p>Info</p>
    <span class="sr-only">Close</span>
    <button class="hover:text-gray-200" x-on:click="show = false">
        <span aria-hidden="true">
            <x-icon.close />
        </span>
    </button>
</x-message.info>
```

```html
<!-- Basic 'media card' -->
<x-layout.media-card>
    <x-slot:media>
        <svg class="h-16 w-16 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
          <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
        </svg>
    </x-slot:media>
    <x-slot:heading>
        My Heading
    </x-slot:heading>
    Main body of the media card, blah de blah
</x-layout.media-card>
```

```html
<!-- simple level with some items grouped at the left and the right -->
<x-layout.level>
    <x-layout.level-section> <!-- left side of the level -->
        <h1 class="justify-self-start text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>

        <x-form.text wire:model.defer="search" with-button="true">
            <x-slot:button class="blah-de-blah" wire:click="search">
                Search
            </x-slot>
        </x-form.text>
    </x-layout.level-section>

    <x-layout.level-section> <!-- right side of the level -->
        <x-button.plain>Log Out</x-button.plain>
    </x-layout.level-section>
</x-layout.level>
```

```html
<x-input.textarea id="textarea" name="my_textarea" label="Enter some text" help="Not too much though">{{ $originalValue }}</x-input.textarea>

<x-input.select id="select" name="my_select" label="Pick something" help="From the select">
    <option value="1">This</option>
    <option value="2">That</option>
</x-input.select>

<x-input.radio id="radio1" name="radio_button" value="1" label="First" />
<x-input.radio id="radio2" name="radio_button" value="2" label="Second" />
<x-input.radio id="radio3" name="radio_button" value="3" label="Third" />

<div class="flex flex-wrap gap-4 mt-2">
    <x-input.radio id="radio4" name="radio_group_button" value="1" label="First" />
    <x-input.radio id="radio5" name="radio_group_button" value="2" label="Second" />
    <x-input.radio id="radio6" name="radio_group_button" value="3" label="Third" />
</div>
```

```html
<!-- a vertical timeline -->
<x-layout.timeline class="w-1/2">
    <x-layout.timeline-item timestamp="13:15" icon-bg="bg-sky-500">
        <x-slot:icon>
            <span class="text-white">
                <x-icon.circle-tick />
            </span>
        </x-slot:icon>
        With an icon
    </x-layout.timeline-item>
    <x-layout.timeline-item timestamp="Monday, 14:20">
        Without an icon, just have a plain circle placeholder instead
    </x-layout.timeline-item>
    <x-layout.timeline-item timestamp="Tuesday, 09:35" last="true">
        Last item, so pass "last" in.  Stops a trailing 'timeline' line dangling.
    </x-layout.timeline-item>
</x-layout.timeline>
```

```html
<!-- standard table -->
<x-table>
    <x-table.header>
        <tr>
            <x-table.th>Name</x-table.th>
            <x-table.th>Email</x-table.th>
            <x-table.th>Status</x-table.th>
        <tr>
    </x-table.header>
    <x-table.body>
        @foreach ($users as $user)
            <tr @class([
                'bg-gray-50' => $loop->even,
                'transition duration-300 ease-in-out hover:bg-neutral-100',
            ])>
                <x-table.td>{{ $user->name }}</x-table.td>
                <x-table.td>{{ $user->email }}</x-table.td>
                <x-table.td>{{ $user->status }}</x-table.td>
            </tr>
        @endforeach
    </x-table.body>
</x-table>
```
