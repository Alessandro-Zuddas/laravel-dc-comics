<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>

        <div class="container-fluid">

            <h1 class="text-center">{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="Comic Image">
            <div>{{ $comic->description }}</div>
            <div>{{ $comic->price }}</div>
            <div>{{ $comic->series }}</div>
            <div>{{ $comic->sale_date }}</div>
            <div>{{ $comic->type }}</div>
            <a href="{{ route("comics.index") }}">Torna alla lista</a>

        </div>

    </main>

</body>

</html>