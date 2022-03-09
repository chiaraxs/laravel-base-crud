{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Comic')
{{-- /head title in layouts->default --}}

@section('content')

<h3>Comics</h3>

    <h1>{{$comic->title}}</h1>
    <h2>Price: {{$comic->price}}</h2>
    <p>Description: {{$comic->description}}</p>
    <h2>Sale Date: {{$comic->sale_date}}</h2>
    <h2>Series: {{$comic->series}}</h2>
    <img src="{{$comic->thumb}}" alt="">


@endsection


{{-- http://127.0.0.1:8000/comics/12 --}}