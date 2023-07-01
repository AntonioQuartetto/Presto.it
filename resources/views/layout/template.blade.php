<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Presto.it</title>
        @livewireStyles
        @vite(['resources\css\app.css', 'resources\js\app.js'])
    
    <body class="body-custom">

        <x-navbar />

        
        <main class="controller section_custom">
             <x-header />
            {{$slot}}

        </main>
        
        <x-footer />
        @livewireScripts
    </body>
</html>
