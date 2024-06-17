@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Aggiungi un comics!</h1>

        <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf
            {{-- Dichiarazione per usare metodo PUT --}}
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label fw-semibold">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label fw-semibold">Immagine (Opzionale)</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label fw-semibold">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label fw-semibold">Data di pubblicazione</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label fw-semibold">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label fw-semibold">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="6">{{$comic->description}}"</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <button class="btn btn-success" type="submit">Salva</button>
                <a href="{{route('comics.index')}}" class="text-decoration-none text-white bg-danger p-2 rounded-2">Torna alla pagina Iniziale</a>
            </div>
        </form>
    </div>
@endsection
