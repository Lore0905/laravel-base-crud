@include('layout.app')

@section('title-page')
    update
@endsection

@section('main-content')
    <h1>funziona</h1>
@endsection
<section class="container">

    <h1>crea il tuo comics</h1>

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

        {{-- serie --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</section>


