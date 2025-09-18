<?php

namespace App\Filament\Resources\ArsipSurats\Schemas;

use Asmit\FilamentUpload\Enums\PdfViewFit;
use Asmit\FilamentUpload\Forms\Components\AdvancedFileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArsipSuratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Buat Section menempati seluruh lebar
                Section::make('Detail Arsip Surat')
                    ->icon('heroicon-o-document-text')
                    ->description('Isi informasi arsip surat berikut dengan lengkap.')
                    ->columnSpanFull()             // <-- bikin Section full width
                    ->schema([
                        // Grid internal: 3 kolom agar kita bisa buat rasio 2:1
                        Grid::make()->columns(2)->schema([
                            // KIRI: kolom kiri mengambil 2 span (2/3)
                            Grid::make()->schema([
                                TextInput::make('nomor_surat')
                                    ->label('Nomor Surat')
                                    ->required()
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->placeholder('Masukkan nomor surat, mis: 001/ABC/2025')
                                    ->prefixIcon('heroicon-o-hashtag')
                                    ->helperText('Contoh format: 001/XYZ/2025'),

                                Select::make('kategori_surat_id')
                                    ->relationship('kategoriSurat', 'nama_kategori')
                                    ->label('Kategori Surat')
                                    ->required()
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->placeholder('Pilih kategori surat')
                                    ->helperText('Pilih kategori yang paling relevan'),

                                TextInput::make('judul')
                                    ->label('Judul')
                                    ->required()
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->placeholder('Masukkan judul surat')
                                    ->helperText('Judul singkat yang menjelaskan isi surat')
                                    ->prefixIcon('heroicon-o-identification'),
                            ])->columnSpan(1), // <-- kiri: 2 dari 3

                            // KANAN: file upload mengambil 1 span (1/3) dan full height dalam kolom itu
                            Grid::make()->schema([
                                AdvancedFileUpload::make('file_surat')
                                    ->label('File Surat (PDF)')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->required()
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->helperText('Unggah file PDF arsip surat. Preview tersedia di samping.')
                                    ->pdfPreviewHeight(400)
                                    ->pdfDisplayPage(1)
                                    ->pdfToolbar(true)
                                    ->pdfZoomLevel(100)
                                    ->pdfFitType(PdfViewFit::FIT)
                                    ->pdfNavPanes(true)
                                    ,
                            ])->columnSpan(1), // <-- kanan: 1 dari 3
                        ]),
                    ]),
            ]);
    }
}