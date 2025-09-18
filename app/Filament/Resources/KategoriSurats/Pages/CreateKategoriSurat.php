<?php

namespace App\Filament\Resources\KategoriSurats\Pages;

use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\KategoriSurats\KategoriSuratResource;

class CreateKategoriSurat extends CreateRecord
{
        protected static ?string $navigationLabel = 'Tambah';
    public static ?string $label              = 'Tambah';
    public static ?string $pluralLabel        = 'Tambah';
    protected static ?string $slug            = 'tambah';
    protected static ?string $breadcrumb      = 'Tambah';
    protected static ?int $navigationSort     = 3;

    protected static string $resource = KategoriSuratResource::class;

    public function getRedirectUrl(): string{
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data berhasil disimpan')
            ->body('Kategori Surat telah berhasil ditambahkan.');
    }
    
    public function getTitle(): string
    {
        return 'Tambah Kategori Surat';
    }

    public function getSubheading(): ?string
    {
        return 'Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat. Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.';
    }
    protected function getFormActions(): array
{
    return [
        // Cancel action with an icon
        $this->getCancelFormAction()
            ->label('Kembali')
            ->icon('heroicon-o-arrow-left'), // Icon for "Back" (left arrow)

        // Save action with an icon
        $this->getSubmitFormAction()
            ->label('Simpan')
            ->icon('heroicon-o-check'), // Icon for "Save" (check mark)
    ];
}
}
