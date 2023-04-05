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
