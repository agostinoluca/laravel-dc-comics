@extends('layouts.app')
<title>@yield('pagetitle', 'Edit comic')</title>


@section('content')
    @include('partials.admin_nav')
    <div class="container mt-3">
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Edit Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">type here the new title</small>
            </div>
            {{-- /input title --}}

            <div class="mb-3">
                <label for="subtitle" class="form-label">Edit Subtitle</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" aria-describedby="subtitleHelper"
                    value="{{ $comic->subtitle }}" />
                <small id="subtitleHelper" class="form-text text-muted">type here the subtitle</small>
            </div>
            {{-- /input subtitle --}}

            <div class="mb-3">
                <label for="thumb" class="form-label">Edit Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    value="{{ $comic->thumb }}" />
                <small id="thumbHelper" class="form-text text-muted">paste here the thumb of cover image</small>
            </div>
            {{-- /input thumb --}}


            <div class="mb-3">
                <label for="description" class="form-label">Edit Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            {{-- /text-area description --}}

            <div class="d-flex justify-content-center gap-4">
                <button type="submit" class="btn btn-primary">
                    Edit Comic
                </button>
                {{-- /form submit --}}

                <button class="btn btn-danger">
                    <a class="text-light text-decoration-none" href="{{ route('comics.index') }}">Retry</a>
                </button>
                {{-- /form submit --}}
            </div>
        </form>
    </div>
@endsection
