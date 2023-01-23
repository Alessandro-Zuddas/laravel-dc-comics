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
                @method("PUT")

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo: *</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" maxlength="50" value="{{ old("title", $comic->title) }}" required>
                    
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione: *</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description here" id="description" name="description">{{ old("description", $comic->description) }}</textarea>
                    
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo: *</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old("price", $comic->price) }}" required>

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie: *</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" maxlength="50" value="{{ old("series", $comic->series) }}" required>
                    
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Anno di uscita: *</label>
                    <input type="date" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old("sale_date", $comic->sale_date) }}" required>

                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo: *</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" maxlength="25" value="{{ old("type", $comic->type) }}" required>

                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <button class="btn btn-success" type="submit">Modifica</button>
                <a class="btn btn-secondary" href="{{ route("comics.index") }}">Indietro</a>

            </form>


        </div>

    </main>

</body>

</html>