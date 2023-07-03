<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TestApp</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-white">
    <div class="relative sm:flex sm:justify-center min-h-screen bg-center bg-gray-50 dark:bg-gray-900">
        <main class="w-full">
            @yield('content')
        </main>
    </div>

</body>

</html>
