@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-5">Questa è la lista dei film</h1>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Titolo: {{ $movie->title }}</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Titolo originale: {{ $movie->original_title }}</li>
                        <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Data di produzione: {{ $movie->date }}</li>
                        <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
