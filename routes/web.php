<?php

//IMPORTO IL FILE PAGECONTROLLER PER POTERLO LEGGERE QUA
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     $dati = config("data");
//     return view('home', $dati);
// })->name("home");

Route::get('/', [PageController::class, "getdati"])->name("home");

//CREO LA ROTTA MOVIES PER POTER LEGGERE I DATI CHE MI ARRIVANO DAL CONTROLLER
Route::get('/movies', [PageController::class, "getMovie"])->name("movies");
