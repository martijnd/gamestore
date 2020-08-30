@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8">
        <ul>

        @foreach($games as $game)
            <li class="list-disc list-inside"><a href="{{ route('games.show', $game) }}">{{ $game->name }}</a></li>
        @endforeach
        </ul>
    </div>
@endsection
