<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <header class="bg-gray-200 shadow w-full flex items-center shadow-xl py-4 justify-end px-4">
    {{ auth()->user()->name }}
</header>

    {{ $slot }}


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>