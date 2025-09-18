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
        // Determine date range and granularity depending on the selected filter
        $now = Carbon::now();
        switch ($this->filter) {
            case 'today':
                $start = $now->copy()->startOfDay();
                $end   = $now->copy()->endOfDay();
                $granularity = 'perDay';
                break;

            case 'week':
                // Last 7 days including today
                $start = $now->copy()->subDays(6)->startOfDay();
                $end   = $now->copy()->endOfDay();
                $granularity = 'perDay';
                break;

            case 'month':
                // Last 30 days (you can change to startOfMonth if you prefer calendar month)
                $start = $now->copy()->subDays(29)->startOfDay();
                $end   = $now->copy()->endOfDay();
                $granularity = 'perDay';
                break;

            case 'year':
            default:
                // This year (calendar year)
                $start = $now->copy()->startOfYear();
                $end   = $now->copy()->endOfYear();
                $granularity = 'perMonth';
                break;
        }

        // Build Trend query and apply chosen granularity dynamically
        $trend = Trend::model(ArsipSurat::class)
            ->between(start: $start, end: $end);

        // Call the appropriate granularity method
        if ($granularity === 'perMonth') {
            $trend = $trend->perMonth();
        } else { // perDay
            $trend = $trend->perDay();
        }

        $data = $trend->count();

        // Ensure we return plain arrays for labels & data
        $values = $data->map(fn(TrendValue $value) => $value->aggregate)->toArray();
        $labels = $data->map(fn(TrendValue $value) => $value->date)->toArray();

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