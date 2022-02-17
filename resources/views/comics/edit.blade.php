@extends('layout.app')

@section('title-page')
    Edit Comics
@endsection

@section('main-content')
    
    <div class="wrapping-edit-comic">
        <div class="container">

            {{-- title section --}}
            <h2>Edit your Comic</h2>

            {{-- {{dd($comic)}} --}}

            {{-- form --}}
            <form action="{{ route('comics.update', [$comic->id]) }}" method="post">
                @csrf
                @method('PUT')

                {{-- title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>                

                {{-- img --}}
                <div class="mb-3">
                    <label for="thumb">Path img</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                </div>

                {{-- description --}}
                <div class="mb-3">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" >{{$comic->description}}</textarea>
                </div>

                {{-- price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>

                {{-- serie --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                </div>

                {{-- type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                </div>

                {{-- serie --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>


        </div>
    </div>

@endsection