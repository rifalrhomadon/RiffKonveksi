-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 01:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rikonveksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int NOT NULL DEFAULT '30',
  `harga_jual` int NOT NULL DEFAULT '30',
  `stok` int NOT NULL DEFAULT '10',
  `kategori` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`, `kategori`, `created_at`, `updated_at`) VALUES
(2, 'Baju Lengan Pendek', 50000, 100000, 20, 'Desain Harimau', '2024-05-25 05:06:49', '2024-05-25 06:25:40'),
(3, 'Baju Aespa', 100000, 200000, 20, 'Kain Katun', '2024-05-25 05:42:28', '2024-05-25 05:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `biayas`
--

CREATE TABLE `biayas` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori_biaya` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_biaya` int NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukubesars`
--

CREATE TABLE `bukubesars` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_akun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_awal` int NOT NULL DEFAULT '50',
  `debet` int NOT NULL DEFAULT '50',
  `kredit` int NOT NULL DEFAULT '50',
  `saldo_akhir` int NOT NULL DEFAULT '50',
  `id_pengeluaran` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_customer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_customer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_customer` int NOT NULL DEFAULT '12',
  `email_customer` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailtransaksipembelians`
--

CREATE TABLE `detailtransaksipembelians` (
  `id` bigint UNSIGNED NOT NULL,
  `id_barang` bigint UNSIGNED NOT NULL,
  `jumlah_barang` int NOT NULL DEFAULT '50',
  `harga_jual` int NOT NULL DEFAULT '50',
  `diskon` int NOT NULL DEFAULT '50',
  `total` int NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailtransaksipenjualans`
--

CREATE TABLE `detailtransaksipenjualans` (
  `id` bigint UNSIGNED NOT NULL,
  `id_barang` bigint UNSIGNED NOT NULL,
  `jumlah_barang` int NOT NULL DEFAULT '50',
  `harga_jual` int NOT NULL DEFAULT '50',
  `diskon` int NOT NULL DEFAULT '50',
  `total` int NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hutangs`
--

CREATE TABLE `hutangs` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_invoice` date NOT NULL,
  `id_pembelian` bigint UNSIGNED NOT NULL,
  `total_pembelian` int NOT NULL DEFAULT '50',
  `diskon` int NOT NULL DEFAULT '50',
  `pajak` int NOT NULL DEFAULT '50',
  `metode_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kasbanks`
--

CREATE TABLE `kasbanks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_akun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_awal` int NOT NULL DEFAULT '50',
  `debet` int NOT NULL DEFAULT '30',
  `kredit` int NOT NULL DEFAULT '30',
  `saldo_akhir` int NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_25_044905_create_barangs_table', 1),
(6, '2024_05_25_045109_create_suppliers_table', 2),
(7, '2024_05_25_045353_create_customers_table', 3),
(8, '2024_05_25_045512_create_biayas_table', 4),
(9, '2024_05_25_045626_create_outlets_table', 5),
(10, '2024_05_25_045745_create_pegawais_table', 6),
(11, '2024_05_25_045917_create_penggunas_table', 7),
(12, '2024_05_25_050313_create_pengeluarans_table', 8),
(13, '2024_05_25_050743_create_penggunaas_table', 9),
(14, '2024_05_25_051134_create_bukubesars_table', 10),
(15, '2024_05_25_051255_create_kasbanks_table', 11),
(16, '2024_05_25_051424_create_transaksipembelians_table', 11),
(17, '2024_05_25_051605_create_invoices_table', 12),
(18, '2024_05_25_051724_create_transaksipenjualans_table', 13),
(19, '2024_05_25_051851_create_detailtransaksipenjualans_table', 14),
(20, '2024_05_25_052029_create_detailtransaksipembelians_table', 15),
(21, '2024_05_25_122945_create_hutangs_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_outlet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_outlet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_outlet` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pegawai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pegawai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pegawai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_pegawai` int NOT NULL DEFAULT '12',
  `email_pegawai` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_pegawai` int NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama_pegawai`, `jabatan_pegawai`, `alamat_pegawai`, `telepon_pegawai`, `email_pegawai`, `gaji_pegawai`, `created_at`, `updated_at`) VALUES
(3, 'Rifal', 'sales', 'Malang', 89999, 'rifalrhomadon@gmail.com', 5000000, '2024-05-25 05:10:16', '2024-05-25 05:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `id_biaya` bigint UNSIGNED NOT NULL,
  `jumlah_pengeluaran` int NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunaas`
--

CREATE TABLE `penggunaas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pengguna` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_akun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_awal` int NOT NULL DEFAULT '100',
  `debet` int NOT NULL DEFAULT '100',
  `kredit` int NOT NULL DEFAULT '100',
  `saldo_akhir` int NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint UNSIGNED NOT NULL,
  `alamat_supplier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_supplier` int NOT NULL DEFAULT '30',
  `email_supplier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_supplier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `alamat_supplier`, `telepon_supplier`, `email_supplier`, `web_supplier`, `created_at`, `updated_at`) VALUES
(2, 'Malang', 700000, 'aku@gmail.com', 'www.aku.com', '2024-05-25 05:11:15', '2024-05-25 05:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `transaksipembelians`
--

CREATE TABLE `transaksipembelians` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int NOT NULL DEFAULT '50',
  `diskon` int NOT NULL DEFAULT '50',
  `pajak` int NOT NULL DEFAULT '50',
  `metode_pembelian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembelian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_supplier` bigint UNSIGNED NOT NULL,
  `id_pegawai` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksipembelians`
--

INSERT INTO `transaksipembelians` (`id`, `tanggal_pembelian`, `total_pembelian`, `diskon`, `pajak`, `metode_pembelian`, `status_pembelian`, `id_supplier`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(5, '2024-05-25', 800000, 50000, 2000, 'Kredit', 'Cicilan', 2, 3, '2024-05-25 05:57:36', '2024-05-25 05:57:36'),
(6, '2024-05-25', 1000000, 100000, 5000, 'Cash', 'Lunas', 2, 3, '2024-05-25 06:14:49', '2024-05-25 06:14:49'),
(7, '2024-05-25', 1500000, 100000, 5000, 'Cash', 'Lunas', 2, 3, '2024-05-25 06:21:28', '2024-05-25 06:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `transaksipenjualans`
--

CREATE TABLE `transaksipenjualans` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `metode_penjualan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_penjualan` int NOT NULL DEFAULT '50',
  `diskon` int NOT NULL DEFAULT '50',
  `pajak` int NOT NULL DEFAULT '50',
  `status_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet` bigint UNSIGNED NOT NULL,
  `id_customer` bigint UNSIGNED NOT NULL,
  `id_pegawai` bigint UNSIGNED NOT NULL,
  `id_invoice` bigint UNSIGNED NOT NULL,
  `id_pengguna` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biayas`
--
ALTER TABLE `biayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukubesars`
--
ALTER TABLE `bukubesars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukubesars_id_pengeluaran_foreign` (`id_pengeluaran`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailtransaksipembelians`
--
ALTER TABLE `detailtransaksipembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detailtransaksipembelians_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `detailtransaksipenjualans`
--
ALTER TABLE `detailtransaksipenjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detailtransaksipenjualans_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hutangs`
--
ALTER TABLE `hutangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_id_pembelian_foreign` (`id_pembelian`);

--
-- Indexes for table `kasbanks`
--
ALTER TABLE `kasbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengeluarans_id_biaya_foreign` (`id_biaya`);

--
-- Indexes for table `penggunaas`
--
ALTER TABLE `penggunaas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksipembelians`
--
ALTER TABLE `transaksipembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksipembelians_id_supplier_foreign` (`id_supplier`),
  ADD KEY `transaksipembelians_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `transaksipenjualans`
--
ALTER TABLE `transaksipenjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksipenjualans_id_outlet_foreign` (`id_outlet`),
  ADD KEY `transaksipenjualans_id_customer_foreign` (`id_customer`),
  ADD KEY `transaksipenjualans_id_pegawai_foreign` (`id_pegawai`),
  ADD KEY `transaksipenjualans_id_invoice_foreign` (`id_invoice`),
  ADD KEY `transaksipenjualans_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biayas`
--
ALTER TABLE `biayas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bukubesars`
--
ALTER TABLE `bukubesars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailtransaksipembelians`
--
ALTER TABLE `detailtransaksipembelians`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailtransaksipenjualans`
--
ALTER TABLE `detailtransaksipenjualans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hutangs`
--
ALTER TABLE `hutangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasbanks`
--
ALTER TABLE `kasbanks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggunaas`
--
ALTER TABLE `penggunaas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksipembelians`
--
ALTER TABLE `transaksipembelians`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksipenjualans`
--
ALTER TABLE `transaksipenjualans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukubesars`
--
ALTER TABLE `bukubesars`
  ADD CONSTRAINT `bukubesars_id_pengeluaran_foreign` FOREIGN KEY (`id_pengeluaran`) REFERENCES `pengeluarans` (`id`);

--
-- Constraints for table `detailtransaksipembelians`
--
ALTER TABLE `detailtransaksipembelians`
  ADD CONSTRAINT `detailtransaksipembelians_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);

--
-- Constraints for table `detailtransaksipenjualans`
--
ALTER TABLE `detailtransaksipenjualans`
  ADD CONSTRAINT `detailtransaksipenjualans_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_id_pembelian_foreign` FOREIGN KEY (`id_pembelian`) REFERENCES `transaksipembelians` (`id`);

--
-- Constraints for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD CONSTRAINT `pengeluarans_id_biaya_foreign` FOREIGN KEY (`id_biaya`) REFERENCES `biayas` (`id`);

--
-- Constraints for table `transaksipembelians`
--
ALTER TABLE `transaksipembelians`
  ADD CONSTRAINT `transaksipembelians_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`),
  ADD CONSTRAINT `transaksipembelians_id_supplier_foreign` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `transaksipenjualans`
--
ALTER TABLE `transaksipenjualans`
  ADD CONSTRAINT `transaksipenjualans_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `transaksipenjualans_id_invoice_foreign` FOREIGN KEY (`id_invoice`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `transaksipenjualans_id_outlet_foreign` FOREIGN KEY (`id_outlet`) REFERENCES `outlets` (`id`),
  ADD CONSTRAINT `transaksipenjualans_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`),
  ADD CONSTRAINT `transaksipenjualans_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `penggunas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
