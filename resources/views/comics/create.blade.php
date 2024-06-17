@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Aggiungi un comics!</h1>

        <form action="" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label fw-semibold">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label fw-semibold">Immagine (Opzionale)</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label fw-semibold">Serie</label>
                <input type="text" class="form-control" id="cooking_time" name="cooking_time">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label fw-semibold">Data di pubblicazione</label>
                <input type="text" class="form-control" id="weight" name="weight">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label fw-semibold">Tipo</label>
                <input type="text" class="form-control" id="cooking_time" name="cooking_time">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label fw-semibold">Prezzo</label>
                <input type="text" class="form-control" id="cooking_time" name="cooking_time">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="6"></textarea>
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
