<div class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <form wire:submit.prevent="save" class="flex flex-wrap -m-2">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="character" class="leading-7 text-sm text-gray-600">Character</label>
                        <select wire:model='selectedCharacterId'
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                            @foreach ($characters as $character)
                                <option value="{{ $character->id }}">{{ $character->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="movie" class="leading-7 text-sm text-gray-600">Movie</label>
                        <select wire:model='selectedMovieId'
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="timestamp" class="leading-7 text-sm text-gray-600">Movie Timestamp</label>
                        <input wire:model.debounce.300ms="movieTimestamp" name="timestamp"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Quote</label>
                        <textarea wire:model.debounce.300ms="quote"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button type="submit"
                        class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
