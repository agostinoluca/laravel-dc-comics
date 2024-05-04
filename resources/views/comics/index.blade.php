@extends('layouts.app')

<title>@yield('pagetitle', 'Comics')</title>


@section('content')
    @include('partials.admin_nav')
    <div class="table-responsive container mt-3">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">subtitle</th>
                    <th scope="col">thumb</th>
                    <th scope="col">description</th>
                    <th scope="col">created at</th>
                    <th scope="col">view</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($comics as $comic)
                    <tr class="">
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->subtitle }}</td>
                        <td>{{ $comic->thumb }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->created_at }}</td>
                        <th class="text-center">
                            <a href="{{ route('comics.show', $comic) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </th>
                    </tr>
                @empty
                    <tr class="">
                        <td scope="row">No comics yet</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
