@extends('template')

@section('title', 'create genre')

@section('body')

    <div class="m-5">
        <h1 class="text-center">Create Genre</h1>
        <form action="/store-genre" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="GenreName" value="{{ old('GenreName') }}">
                @error('GenreName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
