@extends('layouts.app')

@section('content')
    <h1 class="text-center">Benvenuto nella sezione film Cult</h1>

    <h3>Elenco dei titoli:</h3>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
    {{-- <h1>Dati da "config/data.php": {{ $home }}</h1>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button> --}}
@endsection
