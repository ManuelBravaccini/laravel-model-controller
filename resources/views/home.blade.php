<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Movies</h2>
                </div>
                @forelse ($movies as $movie)
                <div class="movie-cards col-4 p-4">
                    <h5>
                        {{ $movie->title }}
                    </h5>
                    <h6>
                        {{ $movie->original_title }}, {{ $movie->nationality }}, {{ $movie->date }}
                    </h6>
                    <h6>
                        Vote: {{ $movie->vote }}
                    </h6>
                </div>
                @empty
                    <p>There are no books to show</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
