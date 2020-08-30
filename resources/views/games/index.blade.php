@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8">
        <a class="bg-purple-500 text-white font-bold rounded shadow py-2 px-4"
           href="{{ route('games.create') }}">Create game</a>
        @livewire('games-list')

    </div>
@endsection
