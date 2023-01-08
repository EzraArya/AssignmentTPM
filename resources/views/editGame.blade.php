@extends('template')

@section('title', 'edit game')

@section('body')

    <div class="m-5">
        <h1 class="text-center">Edit Game</h1>
        <form action="/update-book/{{ $game->id }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Game Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="GameTitle" value="{{ $game->GameTitle }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Developer</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Developer"
                    value="{{ $game->Developer }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publisher</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Publisher"
                    value="{{ $game->Publisher }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate"
                    value="{{ $game->PublishDate }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stock"
                    value="{{ $game->Stock }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
