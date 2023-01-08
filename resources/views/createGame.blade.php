@extends('template')

@section('title', 'Create Game')

@section('body')
    <div class="m-5">
        <h1 class="text-center">Create Game</h1>
        <form action="/store-game" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Game Title</label>
                <input type="text" class="form-control @error('GameTitle') is-invalid @enderror" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="GameTitle" value="{{ old('GameTitle') }}">
                @error('GameTitle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Developer</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Developer"
                    value="{{ old('Developer') }}">
                @error('Developer')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publisher</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Publisher"
                    value="{{ old('Publisher') }}">
                @error('Publisher')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate"
                    value="{{ old('PublishDate') }}">
                @error('PublishDate')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stock"
                    value="{{ old('Stock') }}">
                @error('Stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="image"
                    value="{{ old('image') }}">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Genre</label>
                <select class="form-select" id="floatingSelect" aria-label="Default select example" name="genre">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->GenreName }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
