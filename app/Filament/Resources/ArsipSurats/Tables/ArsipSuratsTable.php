<?php
namespace App\Filament\Resources\ArsipSurats\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ArsipSuratsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->label('No.')->sortable()->rowIndex(),
                TextColumn::make('nomor_surat'),
                TextColumn::make('kategoriSurat.nama_kategori')->icon('heroicon-o-tag')->badge()->color(function ($record): string {
                    $colors = ['primary', 'success', 'warning', 'danger', 'info', 'gray'];
                    $index  = ($record->kategoriSurat?->id ?? 0) % count($colors);
                    return $colors[$index];
                })
                    ->tooltip(function ($record): ?string {
                        $keterangan = $record->kategoriSurat?->keterangan;
                        return $keterangan ? "Keterangan: {$keterangan}" : null;
                    })
                ,
                TextColumn::make('judul')->searchable(),
                TextColumn::make('created_at')->label('Waktu Pengarsipan')
                    ->dateTime('Y-m-d H:i')
,
            ])
            ->filters([
                //
            ])
            ->searchable(false)
            ->recordActionsColumnLabel('Aksi')
            ->recordActionsAlignment('end')
            ->recordActions([
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
                Action::make('unduh')
                    ->label('Unduh')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('primary')
                    ->button()
                    ->action(function ($record) {
                        try {
                            // Validate record and file
                            if (! $record || ! $record->file_surat) {
                                \Filament\Notifications\Notification::make()
                                    ->title('Error')
                                    ->body('File tidak ditemukan.')
                                    ->danger()
                                    ->send();
                                return;
                            }

                            // Check if file exists
                            $filePath = storage_path('app/private/' . $record->file_surat);
                            if (! file_exists($filePath)) {
                                \Filament\Notifications\Notification::make()
                                    ->title('Error')
                                    ->body('File tidak ditemukan di server.')
                                    ->danger()
                                    ->send();
                                return;
                            }

                            // Success notification
                            \Filament\Notifications\Notification::make()
                                ->title('Download dimulai')
                                ->body('File sedang diunduh...')
                                ->success()
                                ->send();

                            // Return file download
                            return response()->download($filePath);

                        } catch (\Exception $e) {
                            \Filament\Notifications\Notification::make()
                                ->title('Error')
                                ->body('Terjadi kesalahan saat mengunduh file: ' . $e->getMessage())
                                ->danger()
                                ->send();
                        }
                    })
                    ->visible(fn($record) => ! empty($record->file_surat)),

                ViewAction::make()->label('Lihat')->button('success')->color('info')->icon('heroicon-o-eye'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
