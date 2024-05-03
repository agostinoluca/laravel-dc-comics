@extends('layouts.app')

<title>@yield('pagetitle', 'Comics')</title>


@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="my new comic is..." />
                <small id="titleHelper" class="form-text text-muted">type here the new title</small>
            </div>
            {{-- /input title --}}

            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" aria-describedby="subtitleHelper"
                    placeholder="more of this comic" />
                <small id="subtitleHelper" class="form-text text-muted">type here the subtitle</small>
            </div>
            {{-- /input subtitle --}}

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="cover image" />
                <small id="thumbHelper" class="form-text text-muted">paste here the thumb of cover image</small>
            </div>
            {{-- /input thumb --}}


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            {{-- /text-area description --}}

            <button type="submit" class="btn btn-primary">
                Save
            </button>
            {{-- /form submit --}}



        </form>
    </div>
@endsection
