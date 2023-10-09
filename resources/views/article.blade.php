<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @livewireStyles
</head>

<body class="antialiased px-4">
    <div class="max-w-6xl mx-auto">
        @livewire('article-list')
    </div>

    @livewireScripts
</body>

</html>
