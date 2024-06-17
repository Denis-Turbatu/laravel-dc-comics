@extends('layouts.app')

@section('content')
@php
    $defaultImage = 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg';
@endphp
    
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
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
                        <div>
                            <a href="">Modifica</a>
                            <a href="">Elimina</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
