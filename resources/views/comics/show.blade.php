@extends('layout.app')

@section('title-page')
    details
@endsection

@section('main-content')
    <div class="wrapping-details">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 16 Febbraio 2022</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection