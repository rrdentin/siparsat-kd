<?php
namespace App\Filament\Resources\KategoriSurats;

use App\Filament\Resources\KategoriSurats\Pages\CreateKategoriSurat;
use App\Filament\Resources\KategoriSurats\Pages\EditKategoriSurat;
use App\Filament\Resources\KategoriSurats\Pages\ListKategoriSurats;
use App\Filament\Resources\KategoriSurats\Schemas\KategoriSuratForm;
use App\Filament\Resources\KategoriSurats\Tables\KategoriSuratsTable;
use App\Models\KategoriSurat;
use App\Traits\HasActiveIcon;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class KategoriSuratResource extends Resource
{
    use HasActiveIcon;
    protected static bool $isGloballySearchable = false;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-tag';
    }
    protected static ?string $model = KategoriSurat::class;

    protected static ?string $navigationLabel = 'Kategori Surat';
    public static ?string $label              = 'Kategori Surat';
    public static ?string $pluralLabel        = 'Kategori Surat';
    protected static ?string $slug            = 'kategori-surat';
    protected static ?int $navigationSort     = 2;

    public static function form(Schema $schema): Schema
    {
        return KategoriSuratForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategoriSuratsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
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
        return 'Total Kategori Surat';
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListKategoriSurats::route('/'),
            'create' => CreateKategoriSurat::route('/tambah'),
            'edit'   => EditKategoriSurat::route('/{record}/edit'),
        ];
    }
}
