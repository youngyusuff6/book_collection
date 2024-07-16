<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') || Book Collection</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container mx-auto px-4">
        @yield('content')
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    @livewireScripts
</body>
</html>
