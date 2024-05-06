@extends('layouts.app')

@section('content')
    <div class="dc_jumbo p-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                @forelse ($comics as $comic)
                    <div class="col-12 col-lg-4 col-xxl-2">
                        <div class="card h-100">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="cover image of comic"
                                style="aspect-ratio: 1;">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <h6 class="card-subtitle mb-3 text-muted ">{{ $comic->subtitle }}</h6>
                                <a class="text-muted text-decoration-none" href="{{ route('comics.show', $comic) }}">
                                    more info <i class="fa-solid fa-right-to-bracket"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>No comics yet</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
