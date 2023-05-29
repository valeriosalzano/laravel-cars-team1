@extends('layouts.app')
@section('page-title', 'Edit Car')
@section('content')
    <form method="POST" action="{{ route('cars.update', ['car' => $car->id]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $car->price }}">
        </div>
        <div class="mb-3">
            <label for="cc" class="form-label">CC</label>
            <input type="text" class="form-control" id="cc" name="cc" value="{{ $car->cc }}">
        </div>
        <div class="mb-3">
            <label for="year_release" class="form-label">Year</label>
            <input type="text" class="form-control" id="year_release" name="year_release"
                value="{{ $car->year_release }}">
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
        <a class="btn btn-primary" href="{{ route('cars.index') }}">Back</a>

        <div class="mb-3">
            <p>Optionals</p>
            <ul class="list-group">
                @foreach ($optionals as $index => $optional)
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="optionals[]"
                            id="{{ 'optionals' }}_{{ $index }}" value="{{ $optional->id }}"
                            @if ($errors->any()) @checked(in_array($optional->id, old('optionals',[])))
                            @else
                                @checked($car->optionals->contains($optional->id)) @endif>
                        <label class="form-check-label"
                            for="{{ 'optionals' }}_{{ $index }}">{{ $optional->name }}</label>
                    </li>
                @endforeach
                @error('optionals')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </ul>
        </div>
    </form>
@endsection
