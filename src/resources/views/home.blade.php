<x-layout>
    <div class="p-8">
        <h1 class="font-bold text-2xl">Latest games</h1>
        <hr>
        <div class="flex flex-wrap">
            @foreach($latestGames as $game)
                <x-game-card :game="$game"/>
            @endforeach
        </div>
    </div>
</x-layout>
