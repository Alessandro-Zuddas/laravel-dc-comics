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

            <h1>Modifica: {{ $comic->title }}</h1>

            <form  action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method("PUT");

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo: *</label>
                    <input type="text" class="form-control" id="title" name="title" maxlength="50" value="{{ $comic->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione: *</label>
                    <textarea class="form-control" placeholder="Description here" id="description" name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo: *</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie: *</label>
                    <input type="text" class="form-control" id="series" name="series" maxlength="50" value="{{ $comic->series }}" required>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Anno di uscita: *</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo: *</label>
                    <input type="text" class="form-control" id="type" name="type" maxlength="25" value="{{ $comic->type }}" required>
                </div>

                <button class="btn btn-success" type="submit">Modifica</button>
                <a class="btn btn-secondary" href="{{ route("comics.index") }}">Indietro</a>

            </form>


        </div>

    </main>

</body>

</html>