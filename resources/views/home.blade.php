@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Benvenuto in Pokoolean</h1>
    <p>Questa applicazione ti permette di esplorare il mondo dei Pokémon attraverso il nostro Pokedex interattivo.</p>
    <a href="{{ route('pokedex') }}" class="btn btn-primary">Vai al Pokedex</a>
</div>
@endsection
