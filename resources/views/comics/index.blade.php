{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Comic')
{{-- /head title in layouts->default --}}

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Description</th>
                <th scope="col">Sale Date</th>
            </tr>
        </thead>
        <tbody>

            {{-- foreach --}}
            @foreach($data as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>

                    <td>{{$comic->title}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->sale_date}}</td>
                </tr>
            @endforeach
            {{-- foreach --}}
        </tbody>
    </table>
    
@endsection


{{-- http://127.0.0.1:8000/comics --}}


