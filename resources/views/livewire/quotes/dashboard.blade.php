<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-4">
            <input wire:model="search" placeholder="Search Quotes"
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 flex-1 block w-1/4 rounded-md sm:text-sm border-gray-300" />
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-5" wire:loading.class.delay="opacity-50">
            <x-table>
                <x-slot name="head">
                    <x-table.heading wire:click="sortBy('characters.name')" sortable :direction="$sortField === 'characters.name' ? $sortDirection : ''">Character</x-table.heading>
                    <x-table.heading wire:click="sortBy('content')" sortable :direction="$sortField === 'content' ? $sortDirection : ''">Quote</x-table.heading>
                    <x-table.heading wire:click="sortBy('movies.title')" sortable :direction="$sortField === 'movies.title' ? $sortDirection : ''">Movie</x-table.heading>
                    <x-table.heading class="relative px-6 py-3"><span class="sr-only">Edit</span></x-table.heading>
                </x-slot>

                <x-slot name="body">
                    @forelse ($quotes as $quote)
                        <x-table.row>
                            <x-table.cell>
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $quote->character->name }}
                                </div>
                            </x-table.cell>
                            <x-table.cell class="max-w-md">
                                <div class="text-sm text-gray-900 truncate">{{ $quote->content }}</div>
                            </x-table.cell>
                            <x-table.cell class="max-w-md">
                                {{ $quote->movie->title }}
                            </x-table.cell>
                            <x-table.cell class="text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan="4">
                                <div class="flex justify-center items-center text-lg py-8">No Results Found</div>
                            </x-table.cell>
                        </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>
        </div>
        {{ $quotes->links() }}
    </div>
</div>
