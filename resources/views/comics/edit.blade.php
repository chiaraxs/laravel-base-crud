{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Modifica Comic')
{{-- /head title in layouts->default --}}

@section('content')


    <div class="container d-flex justify-content-center mt-5">

        <form action="{{ route('comics.update',  $comic->id) }}" method="post">
        @csrf

            {{-- aggiungo il metodo per l'edit --}}
            @method('put')
            {{-- /aggiungo il metodo per l'edit --}}

            <div class="mb-3">
                <label for="title" class="form-label me-2">Title</label>
                <input type="text" name="title" id="title" placeholder="Insert Title" value="{{$comic->title}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label me-2">Thumb</label>
                <input type="text" name="thumb" id="thumb" placeholder="Insert Thumb" value="{{$comic->thumb}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label me-2">Price</label>
                <input type="text" name="price" id="price" placeholder="Insert Price" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label me-2">Series</label>
                <input type="text" name="series" id="series" placeholder="Insert Series" value="{{$comic->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label me-2">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="Insert Sale Date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label me-2">Type</label>
                <input type="text" name="type" id="type" placeholder="Insert Type" value="{{$comic->type}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label me-2">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Insert Description" rows="3">{{$comic->description}}</textarea>

            </div>

            <input type="submit" class="btn btn-info" value="Create comic"></button>

        </form>
    <div>

@endsection
