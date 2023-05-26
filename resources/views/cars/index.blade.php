@extends('layouts.app')
@section('content')

    <a class="btn btn-success" href="{{ route('cars.create')}}">Crea una nuova macchina</a>
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Modello</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Cilindrata</th>
                <th scope="col">Anno</th>

                <th scope="col">Azioni</th>

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

                    <td class="d-flex">
                        <a class="btn btn-primary m-2" href="{{ route('cars.show', [$car->id]) }}">Mostra Dettagli</a>
                        <a class="btn btn-warning m-2" href="{{ route('cars.edit', [$car->id]) }}">Modifica</a>
                        <form method="POST" action="{{ route('cars.destroy', [$car->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-2">Elimina</button>
                        </form>
                    </td>
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
