@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="wrapping">

            @foreach ($comics as $comic)

                {{-- card --}}
                <div class="card">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">"{{$comic->title}}"</h5>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection