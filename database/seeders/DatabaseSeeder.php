<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ArsipSurat;
use App\Models\KategoriSurat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin SIPARSAT-KD',
            'email' => 'admin@siparsatkd.com',
        ]);
        User::factory(14)->create();
        $kategoriPengumuman = KategoriSurat::create([
            'nama_kategori' => 'Pengumuman',
            'keterangan' => 'Surat-surat yang terkait dengan pengumuman'
        ]);

        $kategoriUndangan = KategoriSurat::create([
            'nama_kategori' => 'Undangan',
            'keterangan' => 'Undangan rapat, koordinasi, dlsb'
        ]);

        $kategoriPemberitahuan = KategoriSurat::create([
            'nama_kategori' => 'Pemberitahuan',
            'keterangan' => 'Kategori ini digunakan untuk surat yang sifatnya berupa pengumuman atau menginformasikan suatu perihal'
        ]);

        // Menambahkan kategori surat lainnya
        KategoriSurat::create(['nama_kategori' => 'Nota Dinas', 'keterangan' => 'Surat yang digunakan untuk keperluan internal instansi atau organisasi yang berisi perintah atau instruksi tertentu.']);
        KategoriSurat::create(['nama_kategori' => 'Perintah', 'keterangan' => 'Perintah resmi']);
        KategoriSurat::create(['nama_kategori' => 'Laporan', 'keterangan' => 'Laporan kegiatan atau hasil']);
        // dan kategori lainnya sesuai kebutuhan

        // Membuat arsip surat dengan tanggal sepanjang tahun 2025
        ArsipSurat::create([
            'nomor_surat' => '2022/PD3/TU/001',
            'kategori_surat_id' => $kategoriPengumuman->id,
            'judul' => 'Nota Dinas WFH',
            'file_surat' => null, // File bisa disesuaikan
            'created_at' => '2025-06-21 17:23:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2022/PD2/TU/022',
            'kategori_surat_id' => $kategoriUndangan->id,
            'judul' => 'Undangan Halal Bi Halal',
            'file_surat' => null,
            'created_at' => '2025-04-21 18:23:00'
        ]);

        // Membuat arsip surat lainnya dengan kategori dan tanggal berbeda sepanjang tahun 2025
        ArsipSurat::create([
            'nomor_surat' => '2025/PD3/TU/003',
            'kategori_surat_id' => $kategoriPengumuman->id,
            'judul' => 'Pengumuman Libur Nasional',
            'file_surat' => null,
            'created_at' => '2025-01-15 10:00:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD4/TU/004',
            'kategori_surat_id' => $kategoriUndangan->id,
            'judul' => 'Undangan Rapat Koordinasi',
            'file_surat' => null,
            'created_at' => '2025-02-05 14:00:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD3/TU/005',
            'kategori_surat_id' => $kategoriPengumuman->id,
            'judul' => 'Pengumuman Penerimaan Karyawan Baru',
            'file_surat' => null,
            'created_at' => '2025-03-25 08:30:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD3/TU/006',
            'kategori_surat_id' => $kategoriPemberitahuan->id,
            'judul' => 'Pemberitahuan Rencana Libur',
            'file_surat' => null,
            'created_at' => '2025-05-12 09:00:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD4/TU/007',
            'kategori_surat_id' => $kategoriUndangan->id,
            'judul' => 'Undangan Seminar Internasional',
            'file_surat' => null,
            'created_at' => '2025-07-03 11:30:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD3/TU/008',
            'kategori_surat_id' => $kategoriPengumuman->id,
            'judul' => 'Pengumuman Pembukaan Pendaftaran',
            'file_surat' => null,
            'created_at' => '2025-08-01 10:15:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD2/TU/009',
            'kategori_surat_id' => $kategoriUndangan->id,
            'judul' => 'Undangan Workshop Teknologi',
            'file_surat' => null,
            'created_at' => '2025-09-10 16:00:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD1/TU/010',
            'kategori_surat_id' => $kategoriPemberitahuan->id,
            'judul' => 'Pemberitahuan Perubahan Jam Kerja',
            'file_surat' => null,
            'created_at' => '2025-10-17 13:45:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD2/TU/011',
            'kategori_surat_id' => $kategoriUndangan->id,
            'judul' => 'Undangan Rapat Kerja',
            'file_surat' => null,
            'created_at' => '2025-11-22 15:30:00'
        ]);

        ArsipSurat::create([
            'nomor_surat' => '2025/PD3/TU/012',
            'kategori_surat_id' => $kategoriPengumuman->id,
            'judul' => 'Pengumuman Pemilihan Umum',
            'file_surat' => null,
            'created_at' => '2025-12-01 10:00:00'
        ]);
    }
}
