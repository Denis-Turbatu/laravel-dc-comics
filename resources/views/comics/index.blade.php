@extends('layouts.app')

@section('content')
@php
    $defaultImage = 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg';
@endphp
    
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1>Lista Comics</h1>
            <a href="{{route("comics.create")}}" class="px-4 py-2 bg-success text-decoration-none text-white rounded-2">Crea</a>
        </div>
        <div class="row">
            @foreach ($listaComics as $comic)
                <div class="card border border-0 m-4" style="width: 17rem;">
                    <img src="{{ isset($comic['thumb']) ? asset($comic['thumb']) : $defaultImage }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Titolo:
                            <span class="fw-semibold">
                                {{ $comic['title'] }}
                            </span>
                        </p>
                        <p class="card-text mb-0">
                            Serie:
                            <span class="fw-semibold">
                                {{ $comic['series'] }}
                            </span>
                        </p>
                        <p class="card-text">
                            Data di uscita:
                            <span class="fw-semibold">
                                {{ $comic['sale_date'] }}
                            </span>
                        </p>
                        <p class="card-text">
                            Prezzo:
                            <span class="fw-semibold">
                                {{ $comic['price'] }}
                            </span>
                        </p>
                        <div class="d-flex gap-2">
                            <a 
                                href="{{ route('comics.edit', ['comic' => $comic->id]) }}" 
                                class="text-decoration-none text-white bg-primary p-2 rounded-2"
                            >Modifica</a>

                            <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-danger text-white border-0 p-2 rounded-2">Cancella</button>
                            </form>
                            {{-- <a href="" class="
                            text-decoration-none text-white bg-danger p-2 rounded-2">
                            Elimina</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
