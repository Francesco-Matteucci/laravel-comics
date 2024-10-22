@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="welcome-pkmn container">
    <h1>Benvenuto in Pokoolean</h1>
    <p>Questa applicazione ti permette di esplorare il mondo dei Pokémon attraverso il nostro Pokedex interattivo.</p>
    <a href="{{ route('pokedex') }}" class="btn btn-pokedex">Vai al Pokedex</a>
</div>
<div class="ball-bg">
<img src="img/ball-bg.png" alt="pokeball">
</div>
@endsection
