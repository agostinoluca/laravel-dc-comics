@extends('layouts.app')

@section('content')
    <div class="bg-secondary">
        <div class="dc_jumbo">
            <div class="p-5 mb-4 bg-light bg-opacity-50 rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Benvenuto in Comics!</h1>
                    <p class="col-md-8 fs-4">
                        Esplora un mondo di avventure straordinarie.
                    </p>
                    <button class="btn btn-primary btn-lg" type="button">
                        <a href="{{ route('shop') }}" class="text-decoration-none text-light">Inizia a esplorare</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col-4 p-5">
                <div class="text-center">
                    <div class="bangers text-warning">Boom <i class="fa-solid fa-bomb"></i></div>
                    <img style="aspect-ratio: 1;"
                        src="https://static.posters.cz/image/750/stampa-su-tela-marvel-comics-here-come-the-heroes-i111437.jpg"
                        alt="...">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-4 p-5">
                <div class="text-center">
                    <div class="bangers text-danger">Kapow <i class="fa-solid fa-hand-fist"></i></div>
                    <img src="https://www.focus.it/site_stored/imgs/0002/020/marvel_universe_219830.1020x680.jpg"
                        class="pb-5" alt="...">

                    <img src="https://media-assets.wired.it/photos/62e2a7a861c1b80097b5d3ac/4:3/w_2011,h_1508,c_limit/book-novel-film-pattern-dc-textile-503799-pxhere.com.jpg"
                        alt="...">
                    <div class="bangers text-danger">Zing <i class="fa-solid fa-bolt"></i></div>
                </div>
            </div>
            <div class="col-4 p-5">
                <div class="text-center">
                    <div class="bangers text-warning">Zap <i class="fa-solid fa-burst"></i></div>
                    <img style="aspect-ratio: 1;"
                        src="https://i.pinimg.com/474x/4f/2d/f9/4f2df9764a8ad4cb4a050467b8b49921.jpg" alt="...">
                </div>
            </div>
        </div>
    </div>
@endsection
