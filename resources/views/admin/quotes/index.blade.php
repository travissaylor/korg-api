<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable>Name</x-table.heading>
                        <x-table.heading>Title</x-table.heading>
                        <x-table.heading>Status</x-table.heading>
                        <x-table.heading>Role</x-table.heading>
                        <x-table.heading class="relative px-6 py-3"><span class="sr-only">Edit</span></x-table.heading>
                    </x-slot>

                    <x-slot name="body">
                        <x-table.row>
                            <x-table.cell>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            jane.cooper@example.com
                                        </div>
                                    </div>
                                </div>
                            </x-table.cell>
                            <x-table.cell>
                                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                <div class="text-sm text-gray-500">Optimization</div>
                            </x-table.cell>
                            <x-table.cell>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </x-table.cell>
                            <x-table.cell class="text-sm text-gray-500">
                                Admin
                            </x-table.cell>
                            <x-table.cell class="text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </x-table.cell>
                        </x-table.row>
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
