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
    <button class="hover:text-gray-200" x-on:click="show = false">
        <x-icon.close />
    </button>
</x-message.info>
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
