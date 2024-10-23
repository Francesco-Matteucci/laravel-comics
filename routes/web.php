<?php

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

// route HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// route POKEDEX
Route::get('/pokedex', function () {
    $pokemons = config('pokedex.pokemons');

    return view('pokedex.index', ['pokemons' => $pokemons]);
})->name('pokedex');

Route::get('/pokemons/{index}', function (string $index) {
    $pokemons = config("pokedex.pokemons");

    if (isset($pokemons[$index])) {
        $pokemon = $pokemons[$index];
        return view('pokemon.show', compact("pokemon"));
    } else {
        abort(404);
    }
})->name("pokemons.show");