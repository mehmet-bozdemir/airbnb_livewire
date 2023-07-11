<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @livewireStyles
</head>
<body class="antialiased">

<main class="flex flex-grow flex-col">
    <div>
        <a href="{{route('login')}}">inloggen</a>
    </div>
    @yield('content')
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>

    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>

        <span x-text="count"></span>
    </div>
</main>
<button onclick="Livewire.emit('openModal', 'modals.counter')">open counter modal</button>

    @livewire('livewire-ui-modal')
    @livewireScripts
</body>
</html>

