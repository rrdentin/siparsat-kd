<?php
namespace App\Filament\Resources\KategoriSurats\Schemas;

use Filament\Schemas\Schema;
use App\Models\KategoriSurat;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class KategoriSuratForm
{
    public static function configure(Schema $schema): Schema
    {
        $predictedId = KategoriSurat::getNextId();

        return $schema
            ->components([
                Section::make('Detail Kategori Surat')
                    ->icon('heroicon-o-document-text')
                    ->description('Isi detail kategori surat di bawah ini.')
                    ->schema([
                        Grid::make()->schema([
                            TextInput::make('id')
                                ->label('ID (Auto Increment)')
                                ->disabled()
                                ->default($predictedId)
                                ->columnSpan(2)  // Full width
                                ->helperText('ID ini dihasilkan otomatis dan tidak akan disimpan.')
                                ->prefixIcon('heroicon-o-key')  // Icon for the ID field
                                ->placeholder('ID akan ditampilkan secara otomatis'),

                            TextInput::make('nama_kategori')
                                ->label('Nama Kategori')
                                ->required()
                                ->unique('kategori_surats', 'nama_kategori', ignoreRecord: true)
                                ->validationMessages([
                                    'unique' => 'Nama kategori sudah terdaftar.',
                                ])
                                ->columnSpan(2)  // Full width
                                ->prefixIcon('heroicon-o-tag')  // Icon for name field
                                ->placeholder('Masukkan nama kategori'),

                            Textarea::make('keterangan')
                                ->label('Keterangan')
                                ->rows(3)
                                ->columnSpan(2)  // Full width
                                ->helperText('Berikan penjelasan atau deskripsi tambahan.')
                                ->placeholder('Tuliskan keterangan tentang kategori surat ini'),
                        ]),
                    ]),
            ]);
    }
}

