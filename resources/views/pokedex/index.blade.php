@extends('layouts.app')

@section('title', 'Pokedex')

@section('content')
    <div class="pokedex-content container">
        <h1>Pokedex</h1>
        <div class="row p-4">
            @foreach($pokemons as $pokemon)
                <div class="col-md-2 mb-2">
                    <div class="card h-100 pokemon-card">
                        <img src="{{ asset('img/' . $pokemon['sprite']) }}" class="card-img-top p-5" alt="{{ $pokemon['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pokemon['name'] }}</h5>
                            <p class="card-text">Tipo: {{ $pokemon['type'] }}</p>
                            <p class="card-text">HP: {{ $pokemon['hp'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
