@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>
    <div class="container">
        <div class="row">
            @foreach ($listaComics as $comic)
                <div class="card border border-0 m-4" style="width: 17rem;">
                    <img src="{{ asset($comic['thumb']) }}" class="card-img-top" alt="...">
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
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
