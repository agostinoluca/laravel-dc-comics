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
                    <th scope="col">delete</th>
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
                                <i class="fa-solid fa-pen-to-square text-secondary"></i>
                            </a>
                        </th>
                        <th class="text-center">

                            <!-- Modal trigger button -->
                            <button type="button" class="btn p-0 text-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-{{ $comic->id }}"><i class="fa-solid fa-trash"></i></button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $comic->id }}"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="modalTitle-{{ $comic->id }}">
                                                Delete SuperHero
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">You want to delete all data for this superhero? <br>
                                            The action is irreversible!</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Retry
                                            </button>
                                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
