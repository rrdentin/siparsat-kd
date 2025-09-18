<?php
namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\ArsipSurat;
use App\Models\KategoriSurat;
use Filament\Forms;
use Illuminate\Support\Facades\DB;

class BarsipSuratDashboard extends ChartWidget
{
    protected ?string $heading = 'Arsip Surat';

    // Remove the selected year property as we no longer need it
    // Define a method to get the category data
    protected function getCategoryData(): array
    {
        // Get the count of Arsip Surat based on the categories
        $categoryData = ArsipSurat::with('kategoriSurat') // Eager load kategoriSurat relationship
            ->select('kategori_surat_id', DB::raw('COUNT(*) as count'))
            ->groupBy('kategori_surat_id') // Group by kategori_surat_id
            ->get()
            ->mapWithKeys(function ($item) {
                // Get category name from the related model
                return [$item->kategoriSurat->nama_kategori => $item->count];
            })
            ->toArray();

        return $categoryData;
    }

    // Get chart data
    protected function getData(): array
    {
        $categoryData = $this->getCategoryData(); // Get the category data

        return [
            'datasets' => [
                [
                    'data' => array_values($categoryData),
                    'backgroundColor' => ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#F5D300'], // Colors for each category
                ],
            ],
            'labels' => array_keys($categoryData), // Labels are the category names
        ];
    }

    // Get chart type (Pie Chart)
    protected function getType(): string
    {
        return 'pie'; // Pie chart for category counts
    }
}
