<x-layout>
    <div class="p-8">
        <h1 class="font-bold text-2xl">Latest games</h1>
        <hr>
        <ul class="mt-4">
            @foreach($latestGames as $game)
                <li><a href="{{route('games.show', $game)}}">{{$game->name}}, {{\Carbon\Carbon::parse($game->released_at)->diffForHumans()}}</a></li>
            @endforeach
        </ul>
    </div>
</x-layout>
