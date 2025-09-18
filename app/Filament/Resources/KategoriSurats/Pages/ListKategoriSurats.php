<?php

namespace App\Filament\Resources\KategoriSurats\Pages;

use App\Livewire\SearchBar;
use Livewire\Attributes\On;
use Filament\Actions\CreateAction;
use App\Livewire\CreateButtonWidget;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\KategoriSurats\KategoriSuratResource;


class ListKategoriSurats extends ListRecords
{
    protected static string $resource = KategoriSuratResource::class;


    protected static ?int $navigationSort = 3;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            SearchBar::class,
        ];
    }

    public function getTitle(): string
    {
        return 'Kategori Surat';
    }

    public function getSubheading(): ?string
    {
        return 'Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat. Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.';
    }

    protected string $createButtonLabel = 'Tambah Kategori Baru';

    protected function getFooterWidgets(): array
    {
        return [
            CreateButtonWidget::make([
                'label' => $this->createButtonLabel, // Pass dynamic label
                'resource' => KategoriSuratResource::class, // Pass the resource class

            ]),
        ];
    }
    // Listen for search updates from the widget
    #[On('updateTableSearch')]
    public function updateSearch($search)
    {
        // Update Filament's native table search
        $this->tableSearch = $search;
        $this->resetTable();
    }

    // Hide the default Filament search bar
    public function isTableSearchable(): bool
    {
        return false; // This hides the default search input
    }
}
