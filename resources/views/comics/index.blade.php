@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>

    @foreach ($listaComics as $comic)
        <p>{{$comic['title']}}</p>
    @endforeach
@endsection