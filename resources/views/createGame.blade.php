@extends('template')

@section('title', 'Create Game')

@section('body')
    <div class="m-5">
        <h1 class="text-center">Create Game</h1>
        <form action="/store-game" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Game Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="GameTitle">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Genre</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Genre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publisher</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Publisher">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stock">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection
