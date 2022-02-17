@include('layout.app')

@section('title-page')
    update
@endsection

<section class="container">

    <h1>crea il tuo comics</h1>

    <form action="{{ route('comics.store') }}" methods="post">
        @csrf
        @method('POST')

        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        {{-- img --}}
        <div class="mb-3">
            <label for="img_url">Path img</label>
            <input type="text" class="form-control" id="img_url" name="img_url">
        </div>

        {{-- description --}}
        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</section>


