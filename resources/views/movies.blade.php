@extends('layouts.app')

@section('content')
    <h1>Questa è la lista dei film</h1>

    @foreach ($movies as $movie)
        <h3>Titolo: {{ $movie->title }}</h3>
    @endforeach
@endsection
