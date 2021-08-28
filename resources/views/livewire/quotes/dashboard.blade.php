<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-4 flex justify-between space-x-5">
            <div class="flex-1">
                <input wire:model="search" placeholder="Search Quotes"
                    class="focus:ring-indigo-500 focus:border-indigo-500 p-2 lg:w-1/4  block rounded-md sm:text-sm border-gray-300" />
            </div>
            <a class="flex-3" href="{{ route('admin.quotes.new') }}">
                <svg class="h-10 w-10 text-indigo-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="4" y="4" width="16" height="16" rx="2" />
                    <line x1="9" y1="12" x2="15" y2="12" />
                    <line x1="12" y1="9" x2="12" y2="15" />
                </svg>
            </a>
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-5" wire:loading.class.delay="opacity-50">
            <x-table>
                <x-slot name="head">
                    <x-table.heading wire:click="sortBy('characters.name')" sortable
                        :direction="$sortField === 'characters.name' ? $sortDirection : ''">Character</x-table.heading>
                    <x-table.heading wire:click="sortBy('content')" sortable
                        :direction="$sortField === 'content' ? $sortDirection : ''">Quote</x-table.heading>
                    <x-table.heading wire:click="sortBy('movies.title')" sortable
                        :direction="$sortField === 'movies.title' ? $sortDirection : ''">Movie</x-table.heading>
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
                                <a href="{{ route('admin.quotes.edit', ['id' => $quote->id]) }}"
                                    class="text-indigo-600 hover:text-indigo-900"><svg class="h-8 w-8 text-indigo-500"
                                        width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg></a>
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
