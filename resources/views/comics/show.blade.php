@extends('layouts.app')

@section('content')
<p>{{$comic->thumb}}</p>
<p>{{$comic->title}}</p>
<p>{{$comic->price}}</p>
<p>{{$comic->series}}</p>
<p>{{$comic->sale_date}}</p>
<p>{{$comic->type}}</p>
<p>{{$comic->description}}</p>
<a href="{{route('comics.index')}}">Torna alla pagina Iniziale</a>
@endsection