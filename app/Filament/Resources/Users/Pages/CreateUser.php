<?php

namespace App\Filament\Resources\Users\Pages;

use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Users\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    protected static ?string $navigationLabel = 'Tambah';
    public static ?string $label              = 'Tambah';
    public static ?string $pluralLabel        = 'Tambah';
    protected static ?string $slug            = 'tambah';
    protected static ?string $breadcrumb      = 'Tambah';
    protected static ?int $navigationSort     = 3;
 public function getTitle(): string
    {
        return 'Tambah Pengguna';
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data berhasil disimpan')
            ->body('Pengguna telah berhasil ditambahkan.');
    }
    
    public function getRedirectUrl(): string{
        return $this->getResource()::getUrl('index');
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
