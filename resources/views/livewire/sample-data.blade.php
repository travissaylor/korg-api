<div>
    <x-jet-secondary-button wire:click="$toggle('isOpen')">View Sample Data</x-jet-secondary-button>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            {{ $title }}
        </x-slot>
        <x-slot name="content">
            <div class="bg-gray-200 p-4">
                <div>
                    &#123;
                </div>
                @foreach ($sampleAttributes as $key => $value)
                    <div class="ml-3">
                        <div>
                            &#123;
                        </div>
                        <div class="ml-3">{{ $key }}: {{ !is_array($value) ? $value : "" }}</div>
                        @if (is_array($value))
                            {{-- @todo implement multilevel attributes --}}
                        @endif

                        <div>
                            &#125;
                            @if (!$loop->last)
                                ,
                            @endif
                        </div>
                    </div>
                @endforeach
                <div>
                    &#125;
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('isOpen')">
                Close
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
