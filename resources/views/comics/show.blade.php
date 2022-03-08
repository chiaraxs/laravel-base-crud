{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Comic')
{{-- /head title in layouts->default --}}

@section('content')

<h3>Comics</h3>




    <h6>Title:{{$comic['title']}}</h6>
    <h6>Price: {{$comic->['price']}}</h6>
    <h6>Series: {{$comic->['series']}}</h6>
    <h6>Description: {{$comic->['description']}}</h6>
    <h6>Sale Date:{{$comic->['sale_date']}}</h6>




@endsection

