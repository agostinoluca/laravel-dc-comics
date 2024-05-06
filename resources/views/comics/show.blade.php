@extends('layouts.app')
<title>@yield('pagetitle', 'Comic card')</title>


@section('content')
    <div class="d-flex align-items-center dc_jumbo" style="min-height: 100vh;">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="col-12">
                    <div class="card rounded-5 flex-row bg-black bg-opacity-75 text-white">
                        <div class="card-body text-center d-flex flex-column justify-content-around">
                            <div>
                                <h1 class="card-title pb-4">{{ $comic->title }}</h1>
                                <h4 class="card-subtitle">{{ $comic->subtitle }}</h4>
                            </div>
                            <div class="bg-danger rounded-5 py-5 bg-opacity-50 ">
                                <p class="card-text w-75 m-auto fs-5">{{ $comic->description }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="{{ $comic->thumb }}" class="card-img-top rounded-5" alt="cover image of comic"
                                style="aspect-ratio: 1;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
