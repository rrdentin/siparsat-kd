<?php
namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()->button()->label('lihat')->color('info'),
                EditAction::make()->button(),
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->label('Hapus')
                    ->color('danger')
                    ->button()
                    ->modalHeading('Hapus Pengguna')
                    ->modalDescription('Apakah Anda yakin ingin menghapus pengguna ini?')
                    ->modalSubmitActionLabel('Hapus')
                    ->modalCancelActionLabel('Batal')
                        ->visible(fn($record) => ! ($record->id === 1))
,
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
