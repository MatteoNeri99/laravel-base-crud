@extends('layouts.app')


@section('main-content')


    <div class="col-12 container p-5">
        <div class="card col-12">
            <div class="card-body">
            <h5 class="card-title">Nome: {{$animal->nome_comune}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Id: {{$animal->id}}</h6>
            <p class="card-text">
                Specie: {{$animal->specie}} <br>
                Nome Scientifico: {{$animal->nome_scientifico}} <br>
                sesso: {{$animal->sesso}} <br>
                Habitat: {{$animal->habitat}} <br>
                Colore: {{$animal->colore}} <br>
                Microchip id: {{$animal->microchip_id}} <br>
            </p>
            <a href="{{ route('animal.index') }}" class="btn btn-primary card-link">show all animals</a>
            </div>
        </div>
    </div>


@endsection
