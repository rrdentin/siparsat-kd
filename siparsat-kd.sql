-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for siparsat_kd
CREATE DATABASE IF NOT EXISTS `siparsat_kd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `siparsat_kd`;

-- Dumping structure for table siparsat_kd.arsip_surats
CREATE TABLE IF NOT EXISTS `arsip_surats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_surat_id` bigint unsigned DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `arsip_surats_kategori_surat_id_foreign` (`kategori_surat_id`),
  CONSTRAINT `arsip_surats_kategori_surat_id_foreign` FOREIGN KEY (`kategori_surat_id`) REFERENCES `kategori_surats` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.arsip_surats: ~13 rows (approximately)
INSERT INTO `arsip_surats` (`id`, `nomor_surat`, `kategori_surat_id`, `judul`, `file_surat`, `created_at`, `updated_at`) VALUES
	(1, '2022/PD3/TU/001', 1, 'Nota Dinas WFH', NULL, '2025-06-21 10:23:00', '2025-09-18 06:07:41'),
	(2, '2022/PD2/TU/022', 2, 'Undangan Halal Bi Halal', NULL, '2025-04-21 11:23:00', '2025-09-18 06:07:41'),
	(3, '2025/PD3/TU/003', 1, 'Pengumuman Libur Nasional', NULL, '2025-01-15 03:00:00', '2025-09-18 06:07:41'),
	(4, '2025/PD4/TU/004', 2, 'Undangan Rapat Koordinasi', NULL, '2025-02-05 07:00:00', '2025-09-18 06:07:41'),
	(5, '2025/PD3/TU/005', 1, 'Pengumuman Penerimaan Karyawan Baru', NULL, '2025-03-25 01:30:00', '2025-09-18 06:07:41'),
	(6, '2025/PD5/TU/010', 3, 'Pemberitahuan Liburan Akhir Tahun', NULL, '2025-12-15 02:10:00', '2025-09-18 06:07:41'),
	(7, '2025/PD3/TU/006', 2, 'Undangan Seminar Internasional', NULL, '2025-07-03 04:30:00', '2025-09-18 06:07:41'),
	(8, '2025/PD4/TU/007', 1, 'Pengumuman Pembukaan Pendaftaran', NULL, '2025-08-01 03:15:00', '2025-09-18 06:07:41'),
	(9, '2025/PD2/TU/009', 2, 'Undangan Workshop Teknologi', NULL, '2025-09-10 09:00:00', '2025-09-18 06:07:41'),
	(10, '2025/PD1/TU/010', 3, 'Pemberitahuan Perubahan Jam Kerja', NULL, '2025-10-17 06:45:00', '2025-09-18 06:07:41'),
	(11, '2025/PD2/TU/011', 2, 'Undangan Rapat Kerja', NULL, '2025-11-22 08:30:00', '2025-09-18 06:07:41'),
	(12, '2025/PD3/TU/012', 1, 'Pengumuman Pemilihan Umum', NULL, '2025-12-01 03:00:00', '2025-09-18 06:07:41'),
	(13, '2025/PD6/TU/013', 3, 'Pemberitahuan Perubahan Alamat Kantor', NULL, '2025-05-15 07:45:00', '2025-09-18 06:07:41');

-- Dumping structure for table siparsat_kd.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.cache: ~4 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('siparsat-kd-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1758230238),
	('siparsat-kd-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1758230238;', 1758230238),
	('siparsat-kd-cache-livewire-rate-limiter:7f98824f949c9d7384bf2a0786f8f8fbef0532f5', 'i:1;', 1758223239),
	('siparsat-kd-cache-livewire-rate-limiter:7f98824f949c9d7384bf2a0786f8f8fbef0532f5:timer', 'i:1758223239;', 1758223239);

-- Dumping structure for table siparsat_kd.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.cache_locks: ~0 rows (approximately)

-- Dumping structure for table siparsat_kd.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table siparsat_kd.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.jobs: ~0 rows (approximately)

-- Dumping structure for table siparsat_kd.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.job_batches: ~0 rows (approximately)

-- Dumping structure for table siparsat_kd.kategori_surats
CREATE TABLE IF NOT EXISTS `kategori_surats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_surats_nama_kategori_unique` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.kategori_surats: ~6 rows (approximately)
INSERT INTO `kategori_surats` (`id`, `nama_kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Pengumuman', 'Surat-surat yang terkait dengan pengumuman', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(2, 'Undangan', 'Undangan rapat, koordinasi, dlsb', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(3, 'Pemberitahuan', 'Kategori ini digunakan untuk surat yang sifatnya berupa pengumuman atau menginformasikan suatu perihal', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(4, 'Nota Dinas', 'Surat yang digunakan untuk keperluan internal instansi atau organisasi yang berisi perintah atau instruksi tertentu.', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(5, 'Perintah', 'Perintah resmi', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(6, 'Laporan', 'Laporan kegiatan atau hasil', '2025-09-18 06:07:41', '2025-09-18 06:07:41');

-- Dumping structure for table siparsat_kd.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_09_16_152302_create_kategori_surats_table', 1),
	(5, '2025_09_16_194343_create_arsip_surats_table', 1);

-- Dumping structure for table siparsat_kd.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table siparsat_kd.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('0YSLMY9m1d51K7tx7v4qSjDrqCVFuvrERqPS3icP', 1, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1 Edg/140.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRDVRU216dVBCOHloam0waFRZWVdaQkRhT01CN0xnMjZIekZXRjFqdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiQzQXpqdEt6Q3VDcUdOaS5ON3hTYzIucnhJcW5uTWpWOWR1Sng5UDlIa085WUxaUjE4d3MxUyI7czo2OiJ0YWJsZXMiO2E6Mzp7czo0MDoiMTVlODU4NmNkZTNkNTgzN2M2MmYwNzY3NDkwNGIwYTFfY29sdW1ucyI7YTo1OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiaW5kZXgiO3M6NToibGFiZWwiO3M6MzoiTm8uIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToibm9tb3Jfc3VyYXQiO3M6NToibGFiZWwiO3M6MTE6Ik5vbW9yIHN1cmF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyNzoia2F0ZWdvcmlTdXJhdC5uYW1hX2thdGVnb3JpIjtzOjU6ImxhYmVsIjtzOjE0OiJLYXRlZ29yaSBzdXJhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToianVkdWwiO3M6NToibGFiZWwiO3M6NToiSnVkdWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjE3OiJXYWt0dSBQZW5nYXJzaXBhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiYzhmYmQyNThiOThhZTdiNTBiMWM2Yjc0MDZiMjEwODJfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiaW5kZXgiO3M6NToibGFiZWwiO3M6MzoiTm8uIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJpZCI7czo1OiJsYWJlbCI7czoxMToiSUQgS2F0ZWdvcmkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEzOiJuYW1hX2thdGVnb3JpIjtzOjU6ImxhYmVsIjtzOjEzOiJOYW1hIGthdGVnb3JpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoia2V0ZXJhbmdhbiI7czo1OiJsYWJlbCI7czoxMDoiS2V0ZXJhbmdhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZTY0NDgzM2Y0ZTRlMDg3MTIzMTVkYTcxYjMzZmFjZDJfY29sdW1ucyI7YTo1OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoibmFtZSI7czo1OiJsYWJlbCI7czo0OiJOYW1lIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJlbWFpbCI7czo1OiJsYWJlbCI7czoxMzoiRW1haWwgYWRkcmVzcyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTc6ImVtYWlsX3ZlcmlmaWVkX2F0IjtzOjU6ImxhYmVsIjtzOjE3OiJFbWFpbCB2ZXJpZmllZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IkNyZWF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO319fX0=', 1758233980);

-- Dumping structure for table siparsat_kd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table siparsat_kd.users: ~15 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin SIPARSAT-KD', 'admin@siparsatkd.com', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'VlJHjqtOs1gQ9PfvzDeSxsep4XoBal6N2kVGxcjKJKr8hdbMoeoeudX2ddgR', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(2, 'Nicolette Okuneva MD', 'wilderman.cletus@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'WaChBrr2dW', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(3, 'Bret Wilkinson', 'madisen.erdman@example.com', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'GeZOZkqiiC', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(4, 'Stone Lemke', 'smith.mohamed@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', '6y3YmXz3yI', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(5, 'Prof. Florencio Morar', 'oabshire@example.com', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'oUGt0GVI1J', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(6, 'Noemy Hodkiewicz Sr.', 'ohara.brad@example.org', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'Be1AJFKWFZ', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(7, 'Steve Bruen', 'kayleigh82@example.org', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'GJN4ki0ppq', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(8, 'Gwendolyn Littel', 'grogahn@example.com', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'm37KmCiY1V', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(9, 'Mr. Delaney Jacobi I', 'lswift@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'lpbRxv56gH', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(10, 'Camille Aufderhar', 'berneice.leuschke@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'bMbNtiR5KO', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(11, 'Rodrigo Feeney', 'koepp.dedric@example.org', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'ZUvCqxrJUa', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(12, 'Ashly Schmeler', 'jlowe@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'ksVLS0vr1U', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(13, 'Norberto Maggio', 'hand.amelie@example.org', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'ymO3ZE7Lv2', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(14, 'Neha Schuppe', 'herta54@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 'TaD8H9Risq', '2025-09-18 06:07:41', '2025-09-18 06:07:41'),
	(15, 'Mrs. Asha Gulgowski IV', 'turcotte.zachariah@example.net', '2025-09-18 06:07:41', '$2y$12$3AzjtKzCuCqGNi.N7xSc2.rxIqnnMjV9duJx9P9HkO9YLZR18ws1S', 't4b1XOHD9h', '2025-09-18 06:07:41', '2025-09-18 06:07:41');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
