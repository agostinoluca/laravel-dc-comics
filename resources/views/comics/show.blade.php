@extends('layouts.app')
<title>@yield('pagetitle', 'Comic card')</title>


@section('content')
    <div class="bg-secondary bg-opacity-25 p-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="col-12 col-lg-4 col-xxl-2">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="cover image of comic" style="max-height: 40%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->subtitle }}</h6>
                            <p class="card-text">{{ $comic->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
