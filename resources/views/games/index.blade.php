@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8">
        <ul>

       @livewire('games-list')
        </ul>
    </div>
@endsection
