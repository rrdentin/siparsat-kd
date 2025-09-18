<?php
namespace App\Filament\Widgets;

use App\Models\ArsipSurat;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ArsipSuratWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Arsip Surat', ArsipSurat::count())
                ->description('Arsip Surat yang terdapat pada sistem')
                ->descriptionIcon('heroicon-m-clipboard-document-list', IconPosition::Before)
                ->chart([30, 7, 15, 40, 20, 60])
                ->color('success')
                ->url(route('filament.admin.resources.arsip-surat.index')),
            Stat::make('Kategori Surat', ArsipSurat::count())
                ->description('Arsip Surat yang terdapat pada sistem')
                ->descriptionIcon('heroicon-m-tag', IconPosition::Before)
                ->chart([20, 7, 15, 10, 20, 60])
                ->color('primary')
                            ->url(route('filament.admin.resources.kategori-surat.index')),

            Stat::make('Pengguna', ArsipSurat::count())
                ->description('Pengguna yang terdapat pada sistem')
                ->descriptionIcon('heroicon-m-users', IconPosition::Before)
                ->chart([20, 45, 15, 90, 20, 60])
                ->color('info')
                            ->url(route('filament.admin.resources.manajemen-pengguna.index')),

        ];
    }
}
