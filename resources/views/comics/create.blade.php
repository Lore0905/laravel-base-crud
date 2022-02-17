@extends('layout.app')



@section('main-content')
    <section class="container">

        <h1>Crea il tuo comics</h1>

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

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            {{-- img --}}
            <div class="mb-3">
                <label for="thumb">Path img</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            {{-- description --}}
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            {{-- price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            {{-- serie --}}
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            {{-- type --}}
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            {{-- sale date --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </section>
@endsection




