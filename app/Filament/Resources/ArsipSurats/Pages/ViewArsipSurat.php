<?php
namespace App\Filament\Resources\ArsipSurats\Pages;

use App\Filament\Resources\ArsipSurats\ArsipSuratResource;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewArsipSurat extends ViewRecord implements HasActions
{
    use InteractsWithActions;

    protected static string $resource         = ArsipSuratResource::class;
    protected static ?string $navigationLabel = 'Lihat';
    public static ?string $label              = 'Lihat';
    public static ?string $pluralLabel        = 'Lihat';
    protected static ?string $slug            = 'lihat';
    protected static ?string $breadcrumb      = 'Lihat';
    protected static ?int $navigationSort     = 2;
    public function getTitle(): string
    {
        return 'Lihat Arsip Surat';
    }
    // Use custom view instead of infolist
    protected string $view = 'filament.pages.view-arsip-surat';

    protected function getFormActions(): array
    {
        return [
            Action::make('kembali')
                ->label('<< Kembali')
                ->url($this->getResource()::getUrl('index'))
                ->color('gray'),

            Action::make('unduh')
                ->label('Unduh')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(function () {
                    $record = $this->record;
                    if (! $record || ! $record->file_surat) {
                        $this->notify('danger', 'File tidak ditemukan.');
                        return;
                    }
                    return redirect()->route('private-file.downloadSurat', ['filename' => $record->file_surat]);
                })
                ->openUrlInNewTab()
                ->color('primary'),

            EditAction::make()
                ->label('Edit / Ganti File')
                ->color('warning')
                ->icon('heroicon-o-pencil-square'),
        ];
    }

    protected function getViewData(): array
    {
        return array_merge(parent::getViewData(), [
            'record' => $this->record,
        ]);
    }

    public function kembali()
    {
        return redirect($this->getResource()::getUrl('index'));
    }

    public function unduh()
    {
        $record = $this->record;
        if (! $record || ! $record->file_surat) {
            $this->notify('danger', 'File tidak ditemukan.');
            return;
        }
        return redirect()->route('private-file.downloadSurat', ['filename' => $record->file_surat]);
    }

    public function edit()
    {
        return redirect($this->getResource()::getUrl('edit', ['record' => $this->record]));
    }
}
