<?php
namespace App\Filament\Resources\KategoriSurats\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KategoriSuratsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->label('No.')->sortable()->rowIndex(),
                TextColumn::make('id')->label('ID Kategori')->sortable(),
                TextColumn::make('nama_kategori')->searchable()->color(function ($record): string {
                    $colors = ['primary', 'success', 'warning', 'danger', 'info', 'gray'];
                    $index  = ($record->id ?? 0) % count($colors);
                    return $colors[$index];
                })->badge()->icon('heroicon-o-trash')
                ,
                TextColumn::make('keterangan')->label('Keterangan')->limit(60)->wrap()
                ->tooltip(function ($record): ?string {
    $keterangan = $record->keterangan;
    return $keterangan ? "Keterangan: {$keterangan}" : null;
}),
            ])
            ->filters([
                //
            ])
            ->searchable(false)
            ->recordActionsColumnLabel('Aksi')

            ->recordActionsAlignment('end')
            ->recordActions([
                EditAction::make()->button('info')->icon('heroicon-o-pencil-square'),
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->label('Hapus')
                    ->color('danger')
                    ->button()

                    ->modalHeading('Hapus Kategori Surat')
                    ->modalDescription('Apakah Anda yakin ingin menghapus kategori surat ini?')
                    ->modalSubmitActionLabel('Hapus')
                    ->modalCancelActionLabel('Batal'),
            ])
            ->headerActions([])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),

            ])

        ;
    }
}
