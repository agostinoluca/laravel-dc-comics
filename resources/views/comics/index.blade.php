@extends('layouts.app')

<title>@yield('pagetitle', 'Comics')</title>


@section('content')
    <div class="table-responsive container">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">subtitle</th>
                    <th scope="col">thumb</th>
                    <th scope="col">description</th>
                    <th scope="col">created at</th>
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
