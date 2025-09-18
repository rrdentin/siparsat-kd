<?php
namespace App\Filament\Resources\ArsipSurats\Pages;

use App\Filament\Resources\ArsipSurats\ArsipSuratResource;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\HtmlString;

class EditArsipSurat extends EditRecord
{
    protected static string $resource = ArsipSuratResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data berhasil diperbarui')
            ->body('Arsip Surat telah berhasil diperbarui.');
    }
    public function getSubheading(): ?HtmlString
    {
        return new HtmlString(<<<'HTML'
            Edit arsip surat yang telah terbit pada form ini.
            <br>
            <strong>Catatan:</strong>
            <ul style="list-style: disc !important; margin:0.25rem 0 0 1.25rem !important; padding-left: 1rem !important;">
                <li>Gunakan file berformat <strong>PDF</strong></li>
                <li>Maksimum ukuran: <strong>2 MB</strong>.</li>
            </ul>
            HTML
        );
    }
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->label('Hapus')
                ->color('danger')
                ->button()
                ->modalHeading('Hapus Arsip Surat')
                ->modalDescription('Apakah Anda yakin ingin menghapus arsip surat ini?')
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
