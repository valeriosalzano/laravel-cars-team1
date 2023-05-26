@extends('layouts.app')

@section('content')

<hr class="border border-danger border-2 opacity-75">
    <div class="d-flex justify-content-center mt-5">
        <hr class="border border-primary border-3 opacity-75">
        <div class="card text-center text-bg-info" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title pb-2">Modello: {{$car->model}}</h2>
                <h4 class="card-subtitle mb-2 text-body-secondary">Marca {{$car->brand}}</h4>
                <p class="card-text">CC: {{$car->cc}}</p>
                <p class="card-text">Anno di rilascio: {{$car->year_release}}</p>
                <p class="card-text">Prezzo:€ {{$car->price}}</p>
            </div>
        </div>
        <hr class="border border-primary border-3 opacity-75">
    </div>
    <hr class="border mt-5 border-danger border-2 opacity-75">
    <div class="text-center">
        <a class="btn btn-warning " href="{{route('cars.index')}}">Torna alla lista</a>
    </div>
@endsection