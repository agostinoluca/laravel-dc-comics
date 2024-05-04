@extends('layouts.app')

<title>@yield('pagetitle', 'Comics')</title>


@section('content')
    <div class="container">
        <div class="row">
            <div class="col h-100 ">
                <div class="card bg-info h-100 p-3" style="width:18rem">
                    <img src="{{ $comic->thumb }}" class="card-img-top rounded-circle" alt="cover image of selected comic"
                        style="width: 100%;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->subtitle }}</h6>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
