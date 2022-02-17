@extends('layout.app')

@section('title-page')
    Edit Comics
@endsection

@section('main-content')
    
    <div class="wrapping-edit-comic">
        <div class="container">

            {{-- title section --}}
            <h2>Edit your Comic</h2>

            {{-- ERRORS --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- form --}}
            <form action="{{ route('comics.update', [$comic->id]) }}" method="post">
                @csrf
                @method('PUT')

                {{-- title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $comic->title }}">
                </div>                

                {{-- img --}}
                <div class="mb-3">
                    <label for="thumb">Path img</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : $comic->thumb}}">
                </div>

                {{-- description --}}
                <div class="mb-3">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" >{{old('description') ? old('description') : $comic->description}}</textarea>
                </div>

                {{-- price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{old('price') ? old('price') : $comic->price}}">
                </div>

                {{-- serie --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ? old('series') : $comic->series}}">
                </div>

                {{-- type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{old('type') ? old('type') : $comic->type}}">
                </div>

                {{-- serie --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>


        </div>
    </div>

@endsection