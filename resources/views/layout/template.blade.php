<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BugCreator</title>
        @livewireStyles
        @vite(['resources\css\app.css', 'resources\js\app.js'])
    
    <body>

        <x-navbar />

        <main class="controller min-vh-100">

            {{$slot}}

        </main>
        
        <x-footer />
        @livewireScripts
    </body>
</html>
