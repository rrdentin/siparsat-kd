<?php
namespace App\Livewire;

use Filament\Widgets\Widget;

class SearchBar extends Widget
{
    protected string $view = 'livewire.search-bar';
    protected int | string | array $columnSpan = 'full';

    public $search = '';
    public $label = 'Cari kategori:'; // Default label text

    public function updatedSearch()
    {
        // Auto-search as user types (with debounce)
        $this->dispatch('updateTableSearch', $this->search);
    }

    public function performSearch()
    {
        // Manual search when button is clicked
        $this->dispatch('updateTableSearch', $this->search);
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->dispatch('updateTableSearch', '');
    }

    // You can add more logic here to dynamically change the label
}
