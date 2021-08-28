<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>

                    <h1 class="mt-8 text-2xl">
                        Korg API Documentation
                    </h1>

                    <p class="mt-6 text-gray-500">
                        Here is a list of all the current endpoints. We are constantly trying to add functionality,
                        update content, and fix bugs. Let us know if we can do anything to make this experience better.
                    </p>

                    <p class="mt-6 text-gray-500">
                        Base URL: https://korg-api.saylordevelopment.com/api
                    </p>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center mb-5">
                            <svg fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                                class="w-8 h-8 text-gray-400 overflow-visible">
                                <path
                                    d="M11 9.275c0 5.141-3.892 10.519-10 11.725l-.984-2.126c2.215-.835 4.163-3.742 4.38-5.746-2.491-.392-4.396-2.547-4.396-5.149 0-3.182 2.584-4.979 5.199-4.979 3.015 0 5.801 2.305 5.801 6.275zm13 0c0 5.141-3.892 10.519-10 11.725l-.984-2.126c2.215-.835 4.163-3.742 4.38-5.746-2.491-.392-4.396-2.547-4.396-5.149 0-3.182 2.584-4.979 5.199-4.979 3.015 0 5.801 2.305 5.801 6.275z" />
                            </svg>
                            <h2 class="ml-4 text-2xl text-gray-600 leading-7 font-semibold">Quotes</h2>
                            <div class="ml-2">
                                @livewire('sample-data', [
                                    'title' => 'Quote Sample Data', 
                                    'sampleAttributes' => [
                                        'food' => 'truck',
                                        'alpine' => 'forest'
                                    ]])
                            </div>
                        </div>



                        <div class="ml-12">
                            <div class="my-2">
                                <h3>
                                    All Quotes
                                </h3>
                                <p class="mt-1 text-md text-gray-500">
                                    quotes/
                                </p>
                            </div>

                            <div class="my-2">
                                <h3>
                                    Random Quote
                                </h3>
                                <p class="mt-2 text-md text-gray-500">
                                    quotes/random
                                </p>
                            </div>

                            <div class="my-2">
                                <h3>
                                    Quote By ID
                                </h3>
                                <p class="mt-2 text-md text-gray-500">
                                    quotes/{id}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center mb-5">
                            <svg fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                                class="w-8 h-8 text-gray-400 overflow-visible">
                                <path
                                    d="M20.822 18.096c-3.439-.794-6.641-1.49-5.09-4.418 4.719-8.912 1.251-13.678-3.732-13.678-5.081 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-2.979.688-3.178 2.143-3.178 4.663l.005 1.241h10.483l.704-3h1.615l.704 3h10.483l.005-1.241c.001-2.52-.198-3.975-3.177-4.663zm-8.231 1.904h-1.164l-.91-2h2.994l-.92 2z" />
                            </svg>
                            <h2 class="ml-4 text-2xl text-gray-600 leading-7 font-semibold">Characters</h2>
                            <div class="ml-2">
                                @livewire('sample-data', [
                                    'title' => 'Characters Sample Data', 
                                    'sampleAttributes' => [
                                        'character' => 'truck',
                                        'alpine' => 'forest'
                                    ]])
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="my-2">
                                <h3>
                                    All Characters
                                </h3>
                                <p class="mt-1 text-md text-gray-500">
                                    characters/
                                </p>
                            </div>

                            <div class="my-2">
                                <h3>
                                    Character By ID
                                </h3>
                                <p class="mt-2 text-md text-gray-500">
                                    characters/{id}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
