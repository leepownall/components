<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Components</title>

    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 py-5 sm:p-6">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
