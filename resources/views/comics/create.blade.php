@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Aggiungi un comics!</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label fw-semibold">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label fw-semibold">Immagine (Opzionale)</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label fw-semibold">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label fw-semibold">Data di pubblicazione</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label fw-semibold">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label fw-semibold">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Descrizione</label>
                <textarea class="form-control" name="description" rows="6"></textarea>
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
