@extends('template')

@section('title', 'Show Game')

@section('body')

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $game->GameTitle }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $game->Developer }}</h6>
            <p class="card-text">{{ $game->Publisher }}</p>
            <p class="card-text">{{ $game->PublishDate }}</p>
            <p class="card-text">{{ $game->Stock }}</p>
            <p class="card-text">{{ $game->genre->GenreName }}</p>
            <a href="{{ route('index') }}" class="card-link">Return Home</a>
        </div>
    </div>

@endsection
