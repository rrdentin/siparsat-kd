# SIPARSAT-KD

<p align="center"><a href="https://siparsat-kd.daintyc.xyz" target="_blank"><img src="public/assets/bg.png" width="400" palt="SIPARSAT KD Logo"></a></p>

<div align="center">
    
  ![image](https://cdn.discordapp.com/attachments/597637032780627971/1411733140430389281/image.png?ex=68cd7571&is=68cc23f1&hm=a9bc3a9dcce7101a8e9351ab5b6a2c4fe322e5410d2864cb0c907e915c3d4e21)

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
- **Kategori Surat**: Kelola kategori surat untuk pengelompokan.
- **Pencarian Surat**: Cari surat berdasarkan kata kunci.
- **Upload File**: Simpan file surat dalam format PDF.

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
5. Jalankan migrasi database:
   ```bash
   php artisan migrate --seed
   ```
6. Jalankan aplikasi dengan perintah:
   ```bash
    php artisan serve
    ```
   
## Screenshot
1. Halaman Arsip Surat
   ![Halaman Arsip Surat](screenshots/ArsipPage.png)
2. Halaman Kategori Surat
   ![Halaman Kategori Surat](screenshots/KategoriPage.png)
3. Halaman About
   ![Halaman About](screenshots/AboutPage.png)
4. Halaman Dashboard (Additional)
   ![Halaman Dashboard]()
5. Halaman Manajemen Pengguna
   ![Halaman Manajemen Pengguna]()


# Author
<p align=”center”>

<a href="https://www.daintycube.my.id/" target="_blank">
  <img src="https://github.com/rrdentin/rrdentin/blob/main/assets/github.comrrdentin.png?raw=true" alt="My Banner" style="max-width: 100%; height: auto;" />
</a>
</p>
