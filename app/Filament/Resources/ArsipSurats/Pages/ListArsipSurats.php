<?php
namespace App\Filament\Resources\ArsipSurats\Pages;

use App\Filament\Resources\ArsipSurats\ArsipSuratResource;
use App\Livewire\CreateButtonWidget;
use App\Livewire\SearchBar;
use Filament\Resources\Pages\ListRecords;
use Livewire\Attributes\On;

class ListArsipSurats extends ListRecords
{
    protected static string $resource = ArsipSuratResource::class;

    protected static ?int $navigationSort = 2;

    protected function getHeaderWidgets(): array
    {
        return [
            SearchBar::class,
        ];
    }

    public function getTitle(): string
    {
        return 'Arsip Surat';
    }

    public function getSubheading(): ?string
    {
        return 'Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk menampilkan surat.';
    }

    protected string $createButtonLabel = 'Arsipkan Surat..';
    protected string $createButtonUrl   = '/arsip-surat'; // Set this to your custom URL

    protected function getFooterWidgets(): array
    {
        return [
            CreateButtonWidget::make([
                'label'    => $this->createButtonLabel,  // Pass dynamic label
                'resource' => ArsipSuratResource::class, // Pass the resource class

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
