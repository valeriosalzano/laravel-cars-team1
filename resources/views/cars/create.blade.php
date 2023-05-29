@extends('layouts.app')
@section('page-title', 'Create Car')
@section('content')

    <h2 class="fs-4 text-secondary my-4">Create new project</h2>

    <form method="POST" action="{{ route('cars.store') }}">

        @csrf
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand">

            @error('brand')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model">

            @error('model')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">

            @error('price')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cc" class="form-label">CC</label>
            <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc">

            @error('cc')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year_release" class="form-label">Year</label>
            <input type="text" class="form-control @error('year_release') is-invalid @enderror" id="year_release"
                name="year_release">

            @error('year_release')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <p>Optionals:</p>
            <ul class="list-group">
                @foreach ($optionals as $index => $optional)
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="optionals[]" @checked(in_array($optional->id, old('optionals', [])))
                            id="{{ 'optionals' }}_{{ $index }}" value="{{ $optional->id }}">
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

        <button type="submit" class="btn btn-primary">Crea</button>

    </form>
@endsection
