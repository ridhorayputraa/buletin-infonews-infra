<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Informa Story</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @livewireStyles
    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="antialiased">
    <livewire:counter />
    @livewireScripts
    <h1 class="text-2xl text-red-500 font-bold">Ridhoo</h1>
</body>

</html>
