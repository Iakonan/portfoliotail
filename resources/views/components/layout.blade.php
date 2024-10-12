<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Sequel:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900 font-sequel">
    {{ $slot }}
</body>
</html>