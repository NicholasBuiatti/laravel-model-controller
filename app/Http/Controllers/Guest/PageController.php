<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function getMovie()
    {
        //SALVO IN UNA VARIABILE TUTTI I DATI CHE MI ARRIVANO DALLA TABELLA MOVIE O MOVIES DEL MIO DB
        $movies = Movie::all();
        //SALVO I DATI APPENA PRESI IN UN ARRAY CON INDICE MOVIES
        $data = [
            "movies" => $movies
        ];
        //MANDO TUTTO ALLA PAGINA DI VISUALIZZAZIONE MOVIES
        return view('movies', $data);
    }

    public function getdati()
    {
        //SALVO IN UNA VARIABILE TUTTI I DATI CHE MI ARRIVANO DALLA TABELLA MOVIE O MOVIES DEL MIO DB
        $movies = Movie::all();
        //SALVO I DATI APPENA PRESI IN UN ARRAY CON INDICE MOVIES
        $data = [
            "movies" => $movies
        ];
        //MANDO TUTTO ALLA PAGINA DI VISUALIZZAZIONE MOVIES
        return view('home', $data);
    }
}
