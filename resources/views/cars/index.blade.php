@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Modello</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Cilindrata</th>
        <th scope="col">Anno</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
      <tr>
        <th scope="row">{{$car->id}}</th>
        <td>{{$car->brand}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->price}}</td>
        <td>{{$car->cc}}</td>
        <td>{{$car->year_release}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>


    


@endsection