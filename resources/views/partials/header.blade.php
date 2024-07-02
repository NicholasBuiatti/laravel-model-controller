<header>
    <header class="row justify-content-between align-items-center mb-5">
        <div class='col-5'>
            <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
            <span id="logo-text">Laravel Movies</span>
        </div>

        <nav class="col-4 text-end">
            {{-- METTO LA CLASSE TESTO ROSSO SOLO QUANDO SONO SULLA PAGINA CHE HA IL NOME ROTTA UGUALE AL NOME ROTTA ATTUALE --}}
            <a href="{{ route('home') }}"
                class="{{ Route::currentRouteName() == 'home' ? 'text-danger' : '' }} me-3">HOME</a>
            <a href="{{ route('movies') }}"
                class="{{ Route::currentRouteName() == 'movies' ? 'text-danger' : '' }} me-3">MOVIES</a>
        </nav>
    </header>
</header>
