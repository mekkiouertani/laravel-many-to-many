@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>technologies Edit {{ $technology->name }} </h1>
        <form action="{{ route('admin.technologies.update', $technology->slug) }}" enctype="multipart/form-data"
            method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Title</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required value="{{ old('name', $technology->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- BUTTONS --}}
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
