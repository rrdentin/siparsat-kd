<x-filament-widgets::widget>
    <div class="flex flex-row items-center gap-3 w-full" style="display: flex !important; align-items: center;">
        <!-- Label Section -->
        <div class="shrink-0" style="padding-right: 3% !important; width: auto !important;">
            <span class="text-sm font-xl text-gray-950 dark:text-white" style="font-size: 1rem !important;">
                {{ $label }} <!-- Display the dynamic label here -->
            </span>
        </div>

        <!-- Search Input Section -->
        <div class="flex-grow max-w-md relative" style="width: 60% !important;">
            <x-filament::input.wrapper prefix-icon="heroicon-m-magnifying-glass">
                <x-filament::input 
                    wire:model="search" 
                    wire:keydown.enter="performSearch" 
                    placeholder="search"
                    id="search-input"
                    style="padding-right: 2rem !important;"
                />
                
                <!-- Clear button (X) as suffix -->
                @if ($search)
                    <x-slot name="suffix">
                        <button 
                            type="button" 
                            wire:click="clearSearch"
                            class="text-gray-500 hover:text-gray-700 focus:outline-none"
                            style="font-size: 1.25rem !important; border: none; background: none; cursor: pointer; padding: 0; line-height: 1;"
                        >
                            &times;
                        </button>
                    </x-slot>
                @endif
            </x-filament::input.wrapper>
        </div>

        <!-- Search Button Section -->
        <div class="shrink-0" style="padding-left: 2% !important; width: 10% !important;">
            <x-filament::button 
                wire:click="performSearch" 
                size="md" 
                color="primary" 
                badgeColor="warning" 
                style="border-radius: 10% !important; color: white !important;">
                Cari!
            </x-filament::button>
        </div>
    </div>
</x-filament-widgets::widget>