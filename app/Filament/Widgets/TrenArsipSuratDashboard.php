<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\ArsipSurat;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class TrenArsipSuratDashboard extends ChartWidget
{
    protected ?string $heading = 'Tren Arsip Surat';

    // Default filter
    public ?string $filter = 'year';

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Hari Ini',
            'week'  => 'Last week',
            'month' => 'Last month',
            'year'  => 'Tahun Ini',
        ];
    }

    // Get chart data based on created_at field (grouped by month or day)
    protected function getData(): array
{
    $now = Carbon::now();
    switch ($this->filter) {
        case 'today':
            $start = $now->copy()->startOfDay();
            $end   = $now->copy()->endOfDay();
            $granularity = 'perDay';
            break;

        case 'week':
            $start = $now->copy()->subDays(6)->startOfDay();
            $end   = $now->copy()->endOfDay();
            $granularity = 'perDay';
            break;

        case 'month':
            $start = $now->copy()->subDays(29)->startOfDay();
            $end   = $now->copy()->endOfDay();
            $granularity = 'perDay';
            break;

        case 'year':
        default:
            $start = $now->copy()->startOfYear();
            $end   = $now->copy()->endOfYear();
            $granularity = 'perMonth';
            break;
    }

    $trend = Trend::model(ArsipSurat::class)
        ->between(start: $start, end: $end);

    if ($granularity === 'perMonth') {
        $trend = $trend->perMonth();
    } else {
        $trend = $trend->perDay();
    }

    $data = $trend->count();

    // values tetap sama
    $values = $data->map(fn(TrendValue $value) => $value->aggregate)->toArray();

    // labels menyesuaikan
    if ($this->filter === 'year') {
        // format ke nama bulan (contoh: Januari, Februari, dst)
        $labels = $data->map(fn(TrendValue $value) => Carbon::parse($value->date)->translatedFormat('F'))->toArray();
    } else {
        // default pakai tanggal mentah
        $labels = $data->map(fn(TrendValue $value) => $value->date)->toArray();
    }

    return [
        'datasets' => [
            [
                'data' => $values,
                'label' => 'Arsip Surat Count',
                'borderColor' => '#3490dc',
                'backgroundColor' => 'rgba(52, 144, 220, 0.1)',
                'fill' => true,
                'tension' => 0.3,
            ],
        ],
        'labels' => $labels,
    ];
}

    // Get chart type (Line Chart)
    protected function getType(): string
    {
        return 'line';
    }
}