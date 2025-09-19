# SIPARSAT-KD

<p align="center"><a href="https://siparsat-kd.daintyc.xyz" target="_blank"><img src="public/assets/bg.png" width="400" palt="SIPARSAT KD Logo"></a></p>

<div align="center">
    
  ![image](screenshots/ArsipSuratPage.png)

[![Website](https://img.shields.io/website?url=https%3A%2F%2Fsiparsat-kd.daintyc.xyz/%2F&up_message=Click%20Here%20%F0%9F%92%97&up_color=purple&style=social&logo=love&label=%E2%AD%90%20Check%20Out%20The%20Full%20Website)](https://siparsat-kd.daintyc.xyz/)

Aplikasi berbasis web yang dirancang khusus untuk membantu perangkat Desa Karangduren dalam mengelola, menyimpan, dan mengarsipkan surat-surat resmi secara digital dengan efisien dan terorganisir.

</div>

<div align="center">

![laravel](https://img.shields.io/badge/laravel-E34F26?style=for-the-badge&logo=laravel&logoColor=white)
![filament](https://img.shields.io/badge/filament-1572B6?style=for-the-badge&logo=filament&logoColor=white)
![mysql](https://img.shields.io/badge/mysql-F7DF1E?style=for-the-badge&logo=mysql&logoColor=black)</div>


## Tujuan

Aplikasi ini bertujuan untuk mengelola arsip surat secara digital, mempermudah pencarian, pengelompokan, dan penyimpanan
surat dengan aman.

## Fitur

- **Manajemen Arsip Surat**: Tambah, edit, hapus, dan lihat arsip surat.
- **Kategori Surat**: Tambah, edit, hapus kategori surat
- **Pencarian Surat**: Cari surat berdasarkan kata kunci.
-  **Pencarian Kategori Surat**: Cari kategori surat berdasarkan kata kunci.
- **Upload File**: Simpan file surat dalam format PDF.
- **Dashboard (Additional)**: Stats dan analitik.
- **Manajemen Pengguna (Additional)**: Tambah, edit, hapus, dan lihat pengguna.

## Cara Menjalankan

1. Clone repository ini:
   ```bash
   git clone "https://github.com/rrdentin/siparsat-kd.git"
   ```
2. Masuk ke direktori proyek:
   ```bash
   cd siparsat-kd
   ```
3. Install dependensi menggunakan Composer:
    ```bash
       composer install
       php artisan key:generate
    ```
4. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database.
5. Jalankan migrasi database atau gunakan file siparsat-kd.sql:
   ```bash
   php artisan migrate --seed
   ```
6. Jalankan aplikasi dengan perintah:
   ```bash
    php artisan serve
    ```
   
## Screenshot
1. Halaman Arsip Surat
   ![Halaman Arsip Surat](screenshots/ArsipSuratPage.png)
2. Halaman Kategori Surat
   ![Halaman Kategori Surat](screenshots/KategoriSuratPage.png)
3. Halaman About
   ![Halaman About](screenshots/AboutPage.png)
4. Halaman Dashboard (Additional)
   ![Halaman Dashboard](screenshots/DashboardPage.png)
5. Halaman Manajemen Pengguna
   ![Halaman Manajemen Pengguna](screenshots/ManajemenPenggunaPage.png)


# Author
<p align=”center”>

<a href="https://www.daintycube.my.id/" target="_blank">
  <img src="https://github.com/rrdentin/rrdentin/blob/main/assets/github.comrrdentin.png?raw=true" alt="My Banner" style="max-width: 100%; height: auto;" />
</a>
</p>
