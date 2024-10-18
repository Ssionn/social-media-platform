<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-jetbrains bg-[#232226]">
    <script>0</script>
    <div class="flex min-h-screen">
        @include('layouts.navigation')

        <main class="text-white p-6 w-full">
            {{ $slot }}
        </main>

        @include('layouts.search')
    </div>
</body>
</html>
