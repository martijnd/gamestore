<div>
    <div class="flex justify-between">
        <input
            class="form-input w-1/2"
            wire:model="search"
            type="text"
            placeholder="search"
        >
        <a class="bg-purple-500 text-white font-bold rounded shadow py-2 px-4"
           href="{{ route('games.create') }}">Create game</a>
    </div>
    <div class="flex mt-4">
        {{ $games->total() }} results
    </div>

    <table class="table-auto mb-4">
        <thead>
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Genre</th>
            <th class="px-4 py-2">Company</th>
            <th class="px-4 py-2">Publisher</th>
            <th class="px-4 py-2">Release date</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($games as $game)
            <tr @if($loop->even) class="bg-gray-100" @endif }}>
                <td class="border px-4 py-2">{{ $game->name }}</td>
                <td class="border px-4 py-2">{{ $game->genre->name }}</td>
                <td class="border px-4 py-2">{{ $game->company->name }}</td>
                <td class="border px-4 py-2">{{ $game->publisher->name }}</td>
                <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($game->released_at)->diffForHumans() }}</td>
                <td class="border px-4 py-2">
                    <button wire:click="delete({{ $game->id }})" class="text-red-400 font-bold">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="p-4">
        {{ $games->links() }}
    </div>
</div>
