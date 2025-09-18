<?php

namespace App\Filament\Resources\KategoriSurats\Pages;

use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Filament\Infolists\Contracts\HasInfolists;
use App\Filament\Resources\KategoriSurats\KategoriSuratResource;

class EditKategoriSurat extends EditRecord implements HasInfolists
{
    protected static string $resource = KategoriSuratResource::class;

    public function getRedirectUrl(): string{
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data berhasil diperbarui')
            ->body('Kategori Surat telah berhasil diperbarui.');
    }
    
protected function getHeaderActions(): array
{
    return [
        DeleteAction::make()
            ->icon('heroicon-o-trash')
            ->requiresConfirmation()
            ->label('Hapus')
                        ->button()

            ->color('danger')
            ->modalHeading('Hapus Kategori Surat')
            ->modalDescription('Apakah Anda yakin ingin menghapus kategori surat ini?')
            ->modalSubmitActionLabel('Hapus')
            ->modalCancelActionLabel('Batal'),
    ];
}
    protected function getFormActions(): array
{
    return [
        // Cancel action with an icon
        $this->getCancelFormAction()
            ->label('Kembali')
            ->icon('heroicon-o-arrow-left'), // Icon for "Back" (left arrow)

        // Save action with an icon
        $this->getSaveFormAction()
            ->label('Simpan')
            ->icon('heroicon-o-check'), // Icon for "Save" (check mark)
    ];
}

}
