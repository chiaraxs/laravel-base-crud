{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Comic')
{{-- /head title in layouts->default --}}

@section('content')

<h3>Comics</h3>

    <ul>
        <li>
            <h2>Title: {{$comic->title}}</h2>
        </li>
        <li>
            <h2>Price: {{$comic->price}}</h2>
        </li>
        <li>
            <h2>Price: {{$comic->thumb}}</h2>
        </li>
        <li>
            <h2>Description: {{$comic->description}}</h2>
        </li>
        <li>
           <h2>Sale Date: {{$comic->sale_date}}</h2>
        </li>
        <li>
            <h2>Series: {{$comic->series}}</h2>
        </li>

    </ul>

@endsection


{{-- http://127.0.0.1:8000/comics/2 --}}
