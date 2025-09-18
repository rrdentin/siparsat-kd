<div>
    <x-filament::button 
        wire:click="createNew"
        class="w-full"
        icon="heroicon-m-plus"
    >
        {{ $label }} <!-- Dynamically render the label -->
    </x-filament::button>
</div>
