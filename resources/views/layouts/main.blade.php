<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Informa Story</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @livewireStyles
    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="antialiased bg-background">
    @include('partials.navbar')

    <div class="mx-auto  max-w-screen-2xl px-2 sm:px-6 lg:px-8">
        @yield('container')
        @yield('container-row')
        @yield('container-row1')
    </div>


    @yield('homecontent')

    @livewireScripts
</body>

<script>
    // js
    const carousel = document.getElementById('carousel');
    let isMouseDown = false;
    let startX;
    let scrollLeft;

    carousel.addEventListener('mousedown', (e) => {
        isMouseDown = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
        console.log(e, 'Mouse Scroll down')
    });

    carousel.addEventListener('mouseleave', () => {
        isMouseDown = false;
    });

    carousel.addEventListener('mouseup', () => {
        isMouseDown = false;
    });

    carousel.addEventListener('mousemove', (e) => {
        if (!isMouseDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 3; // Adjust this value to control scroll speed
        carousel.scrollLeft = scrollLeft - walk;
    });

    // Prevent context menu on right-click to improve user experience
    carousel.addEventListener('contextmenu', (e) => {
        e.preventDefault();
    });
</script>

</html>
