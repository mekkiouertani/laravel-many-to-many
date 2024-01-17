@extends('layouts.app')
@section('content')
    <section class="container mt-5">
        <h2>technologies</h2>

        @if (!empty(session('message')))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col" class="w-25">Visualizza i progetti</th>
                    <th scope="col">Name</th>
                    {{--  <th scope="col">Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th scope="row">
                            <a href="{{ route('admin.technologies.show', $technology->slug) }}">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                        </th>
                        <td> {{ $technology->name }}</td>
                        <td> <a href="{{ route('admin.technologies.edit', $technology->slug) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger cancel-button">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary mt-3">
            <a class="text-white text-decoration-none" href="{{ route('admin.technologies.create') }}">Create</a>
        </button>
    </section>
    @include('partials.modal_delete')
@endsection
