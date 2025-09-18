<?php

namespace App\Filament\Resources\ArsipSurats;

use BackedEnum;
use App\Models\ArsipSurat;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Traits\HasActiveIcon;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\ArsipSurats\Pages\EditArsipSurat;
use App\Filament\Resources\ArsipSurats\Pages\ViewArsipSurat;
use App\Filament\Resources\ArsipSurats\Pages\ListArsipSurats;
use App\Filament\Resources\ArsipSurats\Pages\CreateArsipSurat;
use App\Filament\Resources\ArsipSurats\Schemas\ArsipSuratForm;
use App\Filament\Resources\ArsipSurats\Tables\ArsipSuratsTable;

class ArsipSuratResource extends Resource
{
use HasActiveIcon;
protected static bool $isGloballySearchable = false;



    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-clipboard-document-list';
    }
    protected static ?string $model = ArsipSurat::class;

    protected static ?string $navigationLabel = 'Arsip Surat';
    public static ?string $label = 'Arsip Surat';
    public static ?string $pluralLabel = 'Arsip Surat';
    protected static ?string $slug = 'arsip-surat';

    public static function form(Schema $schema): Schema
    {
        return ArsipSuratForm::configure($schema);
    }

     public static function getNavigationBadge(): ?string
    {
        return static::getEloquentQuery()->count();
    }

    public static function getNavigationBadgeColor(): string | array | null
    {
        return 'info';
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Total Arsip Surat';
    }

    public static function table(Table $table): Table
    {
        return ArsipSuratsTable::configure($table);
    }

    

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListArsipSurats::route('/'),
            'create' => CreateArsipSurat::route('/unggah'),
            'edit' => EditArsipSurat::route('/{record}/edit'),
            'view' => ViewArsipSurat::route('/{record}/lihat')
        ];
    }
}
