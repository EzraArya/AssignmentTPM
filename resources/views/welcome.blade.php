@extends('template')

@section('title', 'welcome')

@section('body')
    <div class="d-flex m-5">
        @foreach ($games as $game)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->GameTitle }}</h5>
                    <p class="card-text">{{ $game->Genre }}</p>
                    <p class="card-text">{{ $game->Publisher }}</p>
                    <p class="card-text">{{ $game->PublishDate }}</p>
                    <p class="card-text">{{ $game->Stock }}</p>
                    <a href="{{ route('show', $game->id) }}" class="btn btn-primary">Show Game</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
