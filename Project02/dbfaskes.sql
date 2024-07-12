-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2024 pada 09.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaskes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE `faskes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_pengelola` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kabkota_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `jenis_faskes_id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `nama_pengelola`, `alamat`, `website`, `email`, `kabkota_id`, `rating`, `latitude`, `longitude`, `jenis_faskes_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(16, 'RSUD Kota Depok', 'Pemerintah Kota Depok', 'Jl. Raya Sawangan No.2, Pancoran MAS, Kota Depok, Jawa Barat 16436', 'http://rsud.depok.go.id', 'info@rsud.depok.go.id', 2, 5, -6.398716, 106.818626, 1, 1, NULL, NULL),
(17, 'RS Hermina Depok', 'RS Hermina Group', 'Jl. Siliwangi No.50, Depok, Pancoran MAS, Kota Depok, Jawa Barat 16436', 'http://herminahospitals.com', 'info@herminahospitals.com', 2, 4, -6.379782, 106.834567, 1, 1, NULL, NULL),
(18, 'RSU Bunda Margonda', 'PT Bunda Medik', 'Jl. Margonda Raya No.28, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424', 'http://bundamedik.com', 'info@bundamedik.com', 2, 5, -6.369028, 106.831991, 1, 1, NULL, NULL),
(19, 'Puskesmas Beji', 'Dinas Kesehatan Kota Depok', 'Jl. Jawa Raya No.8, Beji Timur, Beji, Kota Depok, Jawa Barat 16422', 'http://puskesmasbeji.depok.go.id', 'info@puskesmasbeji.depok.go.id', 2, 3, -6.375248, 106.839287, 3, 3, NULL, NULL),
(20, 'Klinik Pratama Harapan Kita', 'Yayasan Harapan Kita', 'Jl. Margonda Raya No.348, Kemiri Muka, Beji, Kota Depok, Jawa Barat 16424', 'http://klinikharapankita.com', 'info@klinikharapankita.com', 2, 4, -6.385911, 106.826226, 2, 4, NULL, NULL),
(21, 'RSUD Kota Bogor', 'Pemerintah Kota Bogor', 'Jl. Dr. Semeru No.120, Menteng, Kota Bogor, Jawa Barat 16111', 'http://rsud.kotabogor.go.id', 'info@rsud.kotabogor.go.id', 3, 5, -6.595038, 106.79982, 1, 1, NULL, NULL),
(22, 'RS PMI Bogor', 'Palang Merah Indonesia', 'Jl. Pajajaran Indah V No.97, Baranangsiang, Bogor Timur, Kota Bogor, Jawa Barat 16143', 'http://rspmibogor.or.id', 'info@rspmibogor.or.id', 3, 4, -6.591732, 106.808616, 1, 1, NULL, NULL),
(23, 'RS Azra', 'RS Azra Group', 'Jl. Raya Pajajaran No.219, Bantarjati, Bogor Utara, Kota Bogor, Jawa Barat 16153', 'http://rsazra.com', 'info@rsazra.com', 3, 4, -6.581468, 106.806908, 1, 1, NULL, NULL),
(24, 'Puskesmas Bogor Tengah', 'Dinas Kesehatan Kota Bogor', 'Jl. Kapten Muslihat No.22, Pabaton, Bogor Tengah, Kota Bogor, Jawa Barat 16121', 'http://puskesmasbogortengah.go.id', 'info@puskesmasbogortengah.go.id', 3, 3, -6.595928, 106.791679, 3, 3, NULL, NULL),
(25, 'Klinik Kimia Farma Pajajaran', 'PT Kimia Farma', 'Jl. Raya Pajajaran No.80, Baranangsiang, Bogor Timur, Kota Bogor, Jawa Barat 16143', 'http://klinik.kimiafarma.co.id', 'info@kimiafarma.co.id', 3, 4, -6.590338, 106.809734, 2, 4, NULL, NULL),
(26, 'RS Cipto Mangunkusumo', 'Kementerian Kesehatan RI', 'Jl. Diponegoro No.71, Kenari, Senen, Kota Jakarta Pusat, DKI Jakarta 10430', 'http://rscm.co.id', 'info@rscm.co.id', 4, 5, -6.193631, 106.847418, 1, 1, NULL, NULL),
(27, 'RSUP Fatmawati', 'Kementerian Kesehatan RI', 'Jl. RS Fatmawati Raya No.4, Cilandak, Kota Jakarta Selatan, DKI Jakarta 12430', 'http://rsupfatmawati.id', 'info@rsupfatmawati.id', 4, 5, -6.289505, 106.798678, 1, 1, NULL, NULL),
(28, 'RS MMC Jakarta', 'PT Medikaloka', 'Jl. HR Rasuna Said Kav C-20, Karet Kuningan, Setiabudi, Kota Jakarta Selatan, DKI Jakarta 12940', 'http://mmc-hospital.com', 'info@mmc-hospital.com', 4, 4, -6.222456, 106.83305, 1, 1, NULL, NULL),
(29, 'Puskesmas Gambir', 'Dinas Kesehatan DKI Jakarta', 'Jl. Tanah Abang I No.1, Petojo Selatan, Gambir, Kota Jakarta Pusat, DKI Jakarta 10160', 'http://puskesmasgambir.jakarta.go.id', 'info@puskesmasgambir.jakarta.go.id', 4, 3, -6.181232, 106.819183, 3, 3, NULL, NULL),
(30, 'Klinik Mitra Keluarga Kemayoran', 'PT Mitra Keluarga', 'Jl. HBR Motik Blok B-8 No.4, Kemayoran, Kota Jakarta Pusat, DKI Jakarta 10610', 'http://mitrakeluarga.com', 'info@mitrakeluarga.com', 4, 4, -6.157276, 106.845303, 2, 4, NULL, NULL),
(31, 'Rumah Sakit Hasan Sadikin', 'Dr. Andi Setiawan', 'Jl. Pasteur No. 38, Pasteur, Sukajadi, Bandung, 40161', 'http://www.rshsbandung.co.id', 'info@rshsbandung.co.id', 1, 5, -6.897084, 107.608045, 1, 1, '2024-07-11 05:43:34', '2024-07-11 05:47:59'),
(32, 'Klinik Pratama Bandung', 'Dr. Budi Santoso', 'Jl. Sukajadi No. 27, Sukajadi, Bandung, 40162', 'http://www.klinikpratama.co.id', 'kontak@klinikpratama.co.id', 1, 4, -6.891944, 107.603333, 2, 2, '2024-07-11 05:43:34', '2024-07-11 05:47:59'),
(33, 'Laboratorium Klinik Prodia', 'Dr. Citra Permata', 'Jl. Asia Afrika No. 152, Braga, Sumur Bandung, Bandung, 40111', 'http://www.prodia.co.id', 'lab@prodia.co.id', 1, 5, -6.921941, 107.607778, 3, 3, '2024-07-11 05:43:34', '2024-07-11 05:47:59'),
(34, 'Puskesmas Sukajadi', 'Dr. Dian Kartika', 'Jl. Sukajadi No. 88, Sukajadi, Bandung, 40162', 'http://www.puskesmassukajadi.co.id', 'contact@puskesmassukajadi.co.id', 1, 4, -6.888888, 107.602222, 4, 2, '2024-07-11 05:43:34', '2024-07-11 05:47:59'),
(35, 'Klinik Sehat Bersama', 'Dr. Erwin Setiadi', 'Jl. Setiabudi No. 22, Hegarmanah, Cidadap, Bandung, 40141', 'http://www.kliniksehatbersama.co.id', 'info@kliniksehatbersama.co.id', 1, 4, -6.894722, 107.611111, 2, 2, '2024-07-11 05:43:34', '2024-07-11 05:47:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', 'Fasilitas kesehatan dengan layanan medis lengkap, termasuk rawat inap dan operasi.', NULL, '2024-07-10 20:28:03'),
(2, 'Klinik', 'Fasilitas kesehatan dengan layanan medis dasar dan rawat jalan.', NULL, NULL),
(3, 'Puskesmas', 'Pusat Kesehatan Masyarakat yang memberikan pelayanan kesehatan primer.', NULL, NULL),
(4, 'Apotek', 'Tempat penjualan obat-obatan dan alat kesehatan.', NULL, NULL),
(5, 'Laboratorium', 'Fasilitas untuk melakukan pemeriksaan dan tes laboratorium medis.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabkotas`
--

CREATE TABLE `kabkotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kabkotas`
--

INSERT INTO `kabkotas` (`id`, `nama`, `latitude`, `longitude`, `provinsi_id`, `created_at`, `updated_at`) VALUES
(1, 'Bandung', -6.914744, 107.60981, 1, '2024-07-10 13:11:51', '2024-07-10 20:29:16'),
(2, 'Depok', -6.402484, 106.794243, 1, '2024-07-10 13:11:51', '2024-07-10 13:11:51'),
(3, 'Bogor', -6.595038, 106.816635, 1, '2024-07-10 13:11:51', '2024-07-10 13:11:51'),
(4, 'Jakarta', -6.208763, 106.845599, 4, '2024-07-10 13:11:51', '2024-07-10 13:11:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit Umum', NULL, NULL),
(2, 'Rumah Sakit Khusus', NULL, NULL),
(3, 'Puskesmas', NULL, NULL),
(4, 'Klinik', NULL, NULL),
(5, 'Apotek', NULL, NULL),
(6, 'Laboratorium Kesehatan', NULL, NULL),
(7, 'Praktek Dokter', NULL, NULL),
(8, 'Praktek Bidan', NULL, NULL),
(9, 'Praktek Perawat', NULL, NULL),
(10, 'Puskesmas Pembantu', NULL, NULL),
(11, 'Praktek Bedah', '2024-07-10 20:28:56', '2024-07-10 20:28:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_07_04_145705_create_jenis_faskes_table', 1),
(2, '2024_07_04_153112_create_kategoris_table', 2),
(3, '2024_07_06_092749_create_provinsis_table', 3),
(4, '2024_07_10_045704_create_kabkotas_table', 4),
(5, '2024_06_30_121459_create_faskes_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ibukota` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsis`
--

INSERT INTO `provinsis` (`id`, `nama`, `ibukota`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', 'Bandung', -6.914744, 107.60981, NULL, NULL),
(2, 'Jawa Tengah', 'Semarang', -6.966667, 110.416664, NULL, NULL),
(3, 'Jawa Timur', 'Surabaya', -7.257472, 112.75209, NULL, NULL),
(4, 'DKI Jakarta', 'Jakarta', -6.208763, 106.845599, NULL, NULL),
(5, 'Banten', 'Serang', -6.12, 106.150276, NULL, NULL),
(6, 'Yogyakarta', 'Yogyakarta', -7.79558, 110.369492, NULL, NULL),
(7, 'Bali', 'Denpasar', -8.670458, 115.212629, NULL, NULL),
(8, 'Sumatera Utara', 'Medan', 3.595196, 98.672223, NULL, NULL),
(9, 'Sumatera Selatan', 'Palembang', -2.990934, 104.756555, NULL, NULL),
(10, 'Kalimantan Timur', 'Samarinda', -0.502106, 117.153709, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('26PTJOR5ukYaXVzwmUebzRUOvOKiNlCmjZ5RVl2y', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMExsbnJpaVE2Zk11UVZIZFJyZ2lzZjQxNnZwQzNUaEJjcno1V1d6WiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rYWJrb3RhIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1720682551);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Fajar Muhamad', 'fajarcool234@gmail.com', NULL, '$2y$12$NNqX.n2guDxibnjBljj6qeyp/R0dZsYtXqloLanj/6Wsw8aM9uT9y', NULL, NULL, NULL, 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faskes_jenis_faskes_id_foreign` (`jenis_faskes_id`),
  ADD KEY `faskes_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabkotas`
--
ALTER TABLE `kabkotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabkotas_provinsi_id_foreign` (`provinsi_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kabkotas`
--
ALTER TABLE `kabkotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `faskes_jenis_faskes_id_foreign` FOREIGN KEY (`jenis_faskes_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `faskes_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kabkotas`
--
ALTER TABLE `kabkotas`
  ADD CONSTRAINT `kabkotas_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
