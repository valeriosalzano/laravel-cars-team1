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
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->cc }}</td>
                    <td>{{ $car->year_release }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{-- modals --}}
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma l'eliminazione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Confermi di voler eliminare l'elemento selezionato?
                    <h6>L'azione sarà irreversibile</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annulla</button>
                    <button type="button" class="btn btn-danger">Conferma</button>
                </div>
            </div>
        </div>
    </div>
@endsection
