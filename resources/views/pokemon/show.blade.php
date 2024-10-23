@extends('layouts.app')

@section('title', $pokemon['name'])

@section('content')
    <div class="container py-4">
        <h1 class="text-center">{{ $pokemon['name'] }}</h1>
        <div class="row justify-content-around">
            <div class="col-10 card m-3">
                <ul class="text-center list-group p-3">
                    <li class="list-group-item list-group-item-action list-group-item-warning">Nome: <strong>{{ $pokemon['name'] }}</strong></li>
                    <li class="list-group-item list-group-item-action list-group-item-light">Tipo: {{ $pokemon['type'] }}</li>
                    <li class="list-group-item list-group-item-action list-group-item-light">HP: {{ $pokemon['hp'] }}</li>
                    <li class="list-group-item list-group-item-action"><img src="{{ asset('img/' . $pokemon['sprite']) }}" alt="{{ $pokemon['name'] }}"></li>
                </ul>
            </div>
        </div>
        <div class="text-end">
        <a href="{{ route('pokedex') }}" class="btn btn-pokedex mt-4">Torna al Pokedex</a>
        </div>
    </div>
@endsection
