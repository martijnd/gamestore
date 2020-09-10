<div class="p-2 w-1/3 inline-block">
    <a href="/games/{{$game->id}}">
        <div
            class="p-8 shadow-lg hover:shadow-xl transition-shadow duration-100 rounded h-full border-l-8 border-blue-200">

            <h2 class="font-bold text-2xl">
                {{$game->name}}
            </h2>
            <div>
                <small>{{Carbon\Carbon::parse($game->released_at)->diffForHumans()}}</small>
            </div>
        </div>
    </a>
</div>
