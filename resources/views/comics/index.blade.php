@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="wrapping">

            @foreach ($comics as $comic)
                {{-- card --}}
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection