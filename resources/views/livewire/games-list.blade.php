<div>
    <table class="table-auto">
        <thead>

        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Genre</th>
            <th class="px-4 py-2">Company</th>
            <th class="px-4 py-2">Publisher</th>
            <th class="px-4 py-2">Release data</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>

    @foreach($games as $game)
        <tr @if($loop->even) class="bg-gray-100" @endif }}>
            <td class="border px-4 py-2">{{ $game->name }}</td>
            <td class="border px-4 py-2">{{ $game->company->name }}</td>
            <td class="border px-4 py-2">{{ $game->genre->name }}</td>
            <td class="border px-4 py-2">{{ $game->publisher->name }}</td>
            <td class="border px-4 py-2">{{ $game->released_at }}</td>
            <td class="border px-4 py-2">
                <button wire:click="delete({{ $game->id }})" class="text-red-400 font-bold">Delete</button>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>
