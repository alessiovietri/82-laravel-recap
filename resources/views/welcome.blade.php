<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    @foreach ($houses as $house)
                    <div class="col-6 text-center">

                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">
                                    {{ $house->address }}
                                </h1>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
