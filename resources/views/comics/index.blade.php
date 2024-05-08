@extends('layouts.app')

<title>@yield('pagetitle', 'Comics')</title>


@section('content')
    @include('partials.admin_nav')
    <div class="table-responsive container-fluid px-5 mt-3">
        <table class="table table-primary">
            <thead>
                <tr class="text-nowrap">
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">subtitle</th>
                    <th scope="col">thumb</th>
                    <th scope="col">description</th>
                    <th scope="col">created at</th>
                    <th scope="col">view</th>
                    <th scope="col">edit</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->subtitle }}</td>
                        <td><img width="80px" src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->created_at }}</td>
                        <th class="text-center">
                            <a href="{{ route('comics.show', $comic) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            <a href="{{ route('comics.edit', $comic) }}">
                                <i class="fa-solid fa-pen-to-square text-danger"></i>
                            </a>
                        </th>
                    </tr>
                @empty
                    <tr>
                        <td>No comics yet</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
