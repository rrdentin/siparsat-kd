<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected static ?string $navigationLabel = 'Edit';
    public static ?string $label              = 'Edit';
    public static ?string $pluralLabel        = 'Edit';
    protected static ?string $slug            = 'edit';
    protected static ?string $breadcrumb      = 'Edit';
    protected static ?int $navigationSort     = 4;
    public function getTitle(): string
    {
        return 'Edit Pengguna';
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data berhasil diperbarui')
            ->body('Pengguna telah berhasil diperbarui.');
    }

    public function getRedirectUrl(): string
    {
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
            $this->getSaveFormAction()
                ->label('Simpan')
                ->icon('heroicon-o-check'), // Icon for "Save" (check mark)
        ];
    }
}
