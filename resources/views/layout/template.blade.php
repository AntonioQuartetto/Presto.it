<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])  
    @livewireStyles
</head>
<body class="dark-theme" id="dark-theme"> 
    <x-navbar />
    @if (Route::currentRouteName() == 'page.homepage')
    <x-header />
    @endif 
    <main class="controller main_custom_dark" id="main-custom">
        @if (Route::currentRouteName() != 'announcement.create' &&
        Route::currentRouteName() != 'login' &&
        Route::currentRouteName() != 'register' &&
        Route::currentRouteName() != 'revisor.create' &&
        Route::currentRouteName() != 'revisor.index' &&
        Route::currentRouteName() != 'profile.index')
        <x-filters />
        @endif
        {{ $slot }}
    </main>  
    <x-footer />
    @livewireScripts
</body>
</html>
