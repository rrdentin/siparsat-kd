<?php
namespace App\Filament\Resources\ArsipSurats\Pages;

use App\Filament\Resources\ArsipSurats\ArsipSuratResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\HtmlString;

class CreateArsipSurat extends CreateRecord
{
    protected static string $resource = ArsipSuratResource::class;

    protected static ?string $navigationLabel = 'Unggah';
    public static ?string $label              = 'Unggah';
    public static ?string $pluralLabel        = 'Unggah';
    protected static ?string $slug            = 'unggah';
    protected static ?string $breadcrumb      = 'Unggah';
    public function getTitle(): string
    {
        return 'Unggah Arsip Surat';
    }

    public function getSubheading(): ?HtmlString
    {
        return new HtmlString(<<<'HTML'
            Unggah surat yang telah terbit pada form ini untuk diarsipkan.
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

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data berhasil disimpan')
            ->body('Surat telah berhasil diarsipkan.');
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
