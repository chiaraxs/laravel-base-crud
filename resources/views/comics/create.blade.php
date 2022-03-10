{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Create Comic')
{{-- /head title in layouts->default --}}

{{-- al form passo la rotta di comics.store per salvare nl db i dati immessi tramite input text --}}
{{-- il method post mi permette la creazione del nuovo comic --}}
{{-- i methods put e patch, invece, aggiornano il form --}}
{{-- validation -> se la validazione fallisce -> rimanda al form con gli errori da sistemare --}}
@section('content')


    <div class="container d-flex justify-content-center mt-5">

        @if($errors->any())
            <div class='alert alert-danger me-2'>
                <ul>
                    @foreach ($errors->all() as $error )
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>   
        @endif

        <form action="{{ route ('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label me-2">Title</label>
                <input type="text" name="title" placeholder="Insert Title">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label me-2">Thumb</label>
                <input type="text" name="thumb" placeholder="Insert Thumb">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label me-2">Price</label>
                <input type="text" name="price" placeholder="Insert Price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label me-2">Series</label>
                <input type="text" name="series" placeholder="Insert Series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label me-2">Sale Date</label>
                <input type="text" name="sale_date" placeholder="Insert Sale Date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label me-2">Type</label>
                <input type="text" name="type" placeholder="Insert Type">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label me-2">Description</label>
                <textarea class="form-control" name="description" placeholder="Insert Description" rows="3"></textarea>
            </div>

            <input type="submit" class="btn btn-info" value="Create comic"></button>
        
        </form>

    </div>
    
@endsection


{{-- http://127.0.0.1:8000/comics/create --}}
