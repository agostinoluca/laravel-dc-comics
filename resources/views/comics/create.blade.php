@extends('layouts.app')
<title>@yield('pagetitle', 'Create new comic')</title>


@section('content')
    @include('partials.admin_nav')
    <div class="container mt-3">

        @include('partials.validation_errors')

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" value="{{ old('title') }}" placeholder="...my new comic title is..." />
                <small id="titleHelper" class="form-text text-muted">type here the new title</small>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- /input title --}}

            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle"
                    id="subtitle" aria-describedby="subtitleHelper" value="{{ old('subtitle') }}"
                    placeholder="...more of this comic..." />
                <small id="subtitleHelper" class="form-text text-muted">type here the subtitle</small>
            </div>
            {{-- /input subtitle --}}

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" value="{{ old('thumb') }}"
                    placeholder="...https://..." />
                <small id="thumbHelper" class="form-text text-muted">paste here the thumb of cover image</small>
            </div>
            {{-- /input thumb --}}


            <div class="mb-3">
                <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"
                    placeholder="...write here a description...">{{ old('description') }}</textarea>
            </div>
            {{-- /text-area description --}}

            <button type="submit" class="btn btn-primary">
                Add new Comic
            </button>
            {{-- /form submit --}}
        </form>
    </div>
@endsection
