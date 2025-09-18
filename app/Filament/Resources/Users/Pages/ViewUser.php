<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;
    protected static ?string $navigationLabel = 'Lihat';
    public static ?string $label              = 'Lihat';
    public static ?string $pluralLabel        = 'Lihat';
    protected static ?string $slug            = 'lihat';
    protected static ?string $breadcrumb      = 'Lihat';

    public function getTitle(): string
    {
        return 'Lihat Pengguna';
    }
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->icon('heroicon-o-pencil-square')->button(),
        ];
    }
}
