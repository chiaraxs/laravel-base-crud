{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Comic')
{{-- /head title in layouts->default --}}

@section('content')

    <form action="{{ route ('comics.store') }}" method="post">
    @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Insert Title">
        </div>

        <div>
            <label for="title">Thumb</label>
            <input type="text" name="thumb" placeholder="Insert Thumb">
        </div>


        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Insert Price">
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" placeholder="Insert Series">
        </div>

        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" placeholder="Insert Sale Date">
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" placeholder="Insert Type">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea cols="40" rows="10" name="description" placeholder="Insert Description"></textarea>
        </div>

        <input type="submit" value="Create comic"></button>

    </form>

@endsection


{{-- http://127.0.0.1:8000/comics/create --}}
