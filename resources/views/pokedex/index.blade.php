@extends('layouts.app')

@section('title', 'Pokedex')

@section('content')
    <div class="pokedex-content container">
        <h1 class="text-center">Pokedex</h1>
        <div class="row justify-content-around">
            @foreach ($pokemons as $index => $pokemon)
                <div class="col-2 card m-2 p-3 ">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <a href="{{ route('pokemons.show', $index) }}">
                                Nome: {{ $pokemon['name'] }}
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">Tipo: {{ $pokemon['type'] }}</li>
                        <li class="list-group-item list-group-item-action">HP: {{ $pokemon['hp'] }}</li>
                        <li class="list-group-item list-group-item-action"><img src="{{ asset('img/' . $pokemon['sprite']) }}" alt="{{ $pokemon['name'] }}"></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
