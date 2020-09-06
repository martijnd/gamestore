<x-layout>
    <h1 class="pb-4 text-blue-900 font-bold text-2xl">Create a new game</h1>
    <form class="flex mt-4 rounded" method="POST" action="{{ route('games.store') }}">
        @csrf
        <div class="w-1/3">
            <h2 class="text-purple-700 font-semibold text-2xl">General</h2>
        </div>

        <div class="w-2/3 p-8 bg-white rounded">
            <div class="flex mb-4">
                <label class="w-1/2" for="name">Name</label>
                <input id="name"
                       value="{{ old('name') }}"
                       class="w-1/2 form-input @error('name') border border-red-400 @enderror"
                       name="name"
                       type="text"
                       placeholder="Name"
                >
            </div>

            <div class="flex mb-4">
                <label class="w-1/2" for="genre">Genre</label>
                <select id="genre"
                        class="w-1/2 form-select"
                        name="genre_id"
                        type="text"
                >
                    <option value="false" @if(! old('genre_id')) selected @endif disabled>Select a genre...</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}"
                                @if(old('genre_id') == $genre->id) selected @endif>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex mb-4">
                <label class="w-1/2" for="company">Company</label>
                <select id="company"
                        class="w-1/2 form-select"
                        name="company_id"
                        type="text"
                >
                    <option value="false" selected disabled>Select a company...</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}"
                                @if(old('company_id') == $company->id) selected @endif>{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex mb-4">
                <label class="w-1/2" for="publisher">Publishers</label>
                <select id="publisher"
                        class="w-1/2 form-select"
                        name="publisher_id"
                        type="text"
                >
                    <option value="false" selected disabled>Select a publisher...</option>
                    @foreach($publishers as $publisher)
                        <option value="{{ $publisher->id }}"
                                @if(old('publisher_id') == $publisher->id) selected @endif>{{ $publisher->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex mb-4">
                <label class="w-1/2" for="rating">Rating</label>
                <input id="rating"
                       value="{{ old('rating') }}"
                       class="w-1/2 form-input @error('rating') border border-red-400 @enderror"
                       name="rating"
                       inputmode="numeric"
                       placeholder="Rating"
                >
            </div>

            @if ($errors->any())
                <div class="bg-red-200 rounded border border-red-500 p-4 text-red-500 font-bold mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flex justify-end">
                <button class="bg-purple-500 text-white font-bold rounded shadow py-2 px-8" type="submit" dusk="save-new-game-button">Save new game
                </button>
            </div>
        </div>
    </form>
</x-layout>
