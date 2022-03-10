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

                    {{-- rotta che rimanda a edit.blade.php --}}
                    <td>
                        <a href="{{ route ('comics.edit', $comic->id)}}" class="btn btn-info my-2">Edit Comic</a>
                    </td>
                    {{-- rotta che rimanda a edit.blade.php --}}

                    {{-- rotta che rimanda a comics.destroy --}}
                    <!-- Modal Bootstrap -->
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#modal{{$comic->id}}">
                            Delete Comic
                        </button>
                        {{-- /Button trigger modal --}}

                        <form action="{{ route('comics.destroy', $comic->id)}}" method="post">
                            @csrf

                            @method('delete')

                            <div class="modal fade" id="modal{{$comic->id}}" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">Warning</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Warning, do you really want to destroy this comic?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- /Modal Bootstrap --}}
                        </form>
                    </td>
                    {{-- /rotta che rimanda a comics.destroy --}}

                </tr>
            @endforeach
            {{-- foreach --}}
        </tbody>
    </table>

    <div class="container d-flex justify-content-center">
        
        {{-- rotta che rimanda a create.blade.php --}}
        <a href="{{ route ('comics.create', $comic->id)}}" class="btn btn-info">Create Comic</a>
        {{-- /rotta che rimanda a create.blade.php --}}

    </div>

    
@endsection


{{-- http://127.0.0.1:8000/comics --}}


