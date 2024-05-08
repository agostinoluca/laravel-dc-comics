@extends('layouts.app')
<title>@yield('pagetitle', 'Edit comic')</title>


@section('content')
    @include('partials.admin_nav')
    <div class="position-relative">
        <div class="position-absolute px-5 top-0 start-0 opacity-25">
            <img class="rounded-circle" width="400" style="aspect-ratio: 1;" src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="container mt-3">
            <div class="mb-3">
                <a class="text-decoration-none text-dark" href="{{ route('comics.index') }}"><i
                        class="fa-solid fa-backward text-danger"></i> Go Back</a>
            </div>
            {{-- /Go Back (a href) --}}

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
                    <input type="text" class="form-control" name="subtitle" id="subtitle"
                        aria-describedby="subtitleHelper" value="{{ $comic->subtitle }}" />
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

                <button type="submit" class="btn btn-primary">
                    Edit Comic
                </button>
                {{-- /form submit --}}
            </form>
        </div>
    </div>
@endsection
