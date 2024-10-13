<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Sequel:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0beb0e2199.js" crossorigin="anonymous"></script>
    <script type="module" src="{{ Vite::asset('resources/js/theme-toggle.js') }}"></script>

    @vite('resources/css/app.css')
</head>
<body class="bg-stone-950 text-gray-300 font-sequel">
    {{ $slot }}
    <x-footer></x-footer>
</body>
</html>