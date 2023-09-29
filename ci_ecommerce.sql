-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 05:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `status`, `quantity`) VALUES
(1, 'T-SHIRT', '20230702/1688290108_c177f78ff50cdb04cd1d.jpg', 'in stock', '20'),
(2, 'SALWAR KAMEEZ', '20230702/1688292120_b5d822e1a2a7a3e84559.jpg', 'in stock', '20'),
(3, 'PANJABI', '20230702/1688292292_a0bf2787dd37b4f9bd78.jpg', 'in stock', '23'),
(4, 'JEWELLERY', '20230702/1688294656_4983debdb447588f699e.jpg', 'in stock', '23'),
(5, 'SHARI', '20230702/1688294828_abd59e394a5b6be4238c.jpg', 'in stock', '24'),
(6, 'COSMETICS', '20230702/1688294956_1d980679c83436c6257d.jpg', 'in stock', '24'),
(7, 'KIDS', '20230702/1688295225_4d0a9455e8ca6aacccfb.jpeg', 'in stock', ''),
(8, 'MEN', '20230702/1688295568_5c16139a9942806717cd.jpg', 'in stock', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NULL DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jamdani`
--

CREATE TABLE `jamdani` (
  `id` int(5) UNSIGNED NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `d_price` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jamdani`
--

INSERT INTO `jamdani` (`id`, `category`, `title`, `price`, `d_price`, `description`, `image`, `sku`, `quantity`) VALUES
(1, 'shari', 'Printed Baluchari Georgette Saree  ', '18000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441368_b61e2ccd9dba7fb1bd34.jpg', '258', '23'),
(2, 'shari', 'Embroidered Bollywood Net, Art Silk Saree', '18000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441642_620ffc62584b98478ece.jpg', '258', '23'),
(3, 'shari', 'Printed, Floral Print Daily Wear Georgette Saree', '18000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441723_e92672637325393c2151.jpg', '258', '23'),
(4, 'shari', 'Woven, Paisley, Self Design, Polka Print, Floral Print,...', '20000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441784_dc796e239ea71fe74ab1.jpg', '108', '23'),
(5, 'shari', 'Woven, Paisley, Self Design, Polka Print, Floral Print,...', '12000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441837_fb3c9a075207fc60a0d0.jpeg', '108', '23'),
(6, 'shari', 'Embroidered, Solid/Plain, Woven Bollywood Dupion Silk, ...', '15000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441878_080b7a6bc3b528622021.jpg', '108', '23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-27-203704', 'App\\Database\\Migrations\\Users', 'default', 'App', 1687898299, 1),
(2, '2023-06-27-203945', 'App\\Database\\Migrations\\Newproduct', 'default', 'App', 1687898441, 2),
(3, '2023-06-27-204232', 'App\\Database\\Migrations\\PCategory', 'default', 'App', 1687898599, 3),
(4, '2023-06-27-204406', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1687898787, 4),
(5, '2023-06-27-204655', 'App\\Database\\Migrations\\Order', 'default', 'App', 1687899452, 5),
(6, '2023-06-27-205817', 'App\\Database\\Migrations\\OrderItems', 'default', 'App', 1687899770, 6),
(7, '2023-07-02-090326', 'App\\Database\\Migrations\\UpdateCategory', 'default', 'App', 1688289550, 7),
(8, '2023-07-04-031101', 'App\\Database\\Migrations\\Jamdani', 'default', 'App', 1688440401, 8);

-- --------------------------------------------------------

--
-- Table structure for table `newproduct`
--

CREATE TABLE `newproduct` (
  `id` int(5) UNSIGNED NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `d_price` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `newproduct`
--

INSERT INTO `newproduct` (`id`, `category`, `title`, `price`, `d_price`, `description`, `image`, `sku`, `quantity`) VALUES
(1, 'Salwar Kameez', 'Basic Short Sleeve T-shirt For Women', '800', '500', 'MATERIAL 100% Cotton', '20230628/1687930247_c41f0832b30eb5b093b0.jpg', '258', '17'),
(2, 'Salwar Kameez', 'Indian Printed Embroidery Unstitched 3-Piece', '18000', '15000', '7000', '20230628/1687930414_cb4c6472936d6d72c596.jpg', '245', '28'),
(3, 'shirt', 'Men\'s Premium Casual Band Collar Shirt Pink', '590', '500', 'Men\'s Premium Casual Band Collar Shirt Pink\r\nGender: Men\r\nMaterial: Fine Cotton\r\nShape: Slim Fit/Casual Shape\r\nStyle: Slim Fitting\r\nQuality: 100% Export\r\nMade in: Bangladesh\r\nColor: Pink (As given picture)', '20230703/1688361104_de536d1f322b74f919b0.jpeg', '257', '24'),
(4, 'Kurti', 'Buy Ladies\' One Piece Tops Online at Best Price Buy Ladies\' One Piece Tops Online at Best Price Ladies\' One Piece Tops', '1080', '900', 'Ladies\' One Piece Tops\r\nBrand: Winner fashions\r\nItem code: 43968\r\nStyle code: LSKW-21-013\r\nFabrics: Linen\r\nSize: S, M, L, XL', '20230703/1688361239_88d9ea952a883b093522.jpeg', '257', '24'),
(5, 'Shari', 'Black colour embroidered & printed cotton Shari', '28000', '15000', 'Black colour embroidered & printed cotton Shari', '20230703/1688371216_4d67b0517ca1660ea7f7.jpg', '257', '23'),
(6, 'Shari', 'Saree Party Wear Indian Women Adults Washable Dry Clean India & Pakistan', '5000', '4000', 'Place of Origin:\r\nIndia\r\nBrand Name:\r\nEthnic garment\r\nModel Number:\r\n541\r\nAge Group:\r\nAdults\r\nClothing Type:\r\nSaree / Sari / Shari\r\nEthnic Region:\r\nIndia & Pakistan\r\nSupply Type:\r\nIn-Stock Items\r\nAvailable Quantity:\r\n500\r\nMaterial:\r\nCotton, Silk, Geo', '20230703/1688372857_a4b114d66288582f4d39.jpg', '257', '24'),
(10, 'jamdani', 'Printed Baluchari Georgette Saree ', '18000', '1000', 'Style Code\r\n1955S350Q\r\nPattern\r\nPrinted\r\nPack of\r\n1\r\nOccasion\r\nParty & Festive\r\nDecorative Material\r\nFloral Design\r\nConstruction Type\r\nBlue Color Saree Have Floral Print, Printed Work With Printed Border.\r\nFabric Care\r\nDry Clean Only\r\nFabric\r\nGeorget', '20230704/1688441069_9cb73eb7e85daf4adaef.jpg', '257', '24');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `grand_total` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `token` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `token`, `created_at`) VALUES
(1, 'ruma', 'abc@gmail.com', '$2y$10$ohy9jZbG3PEDBBdL7O4Yte7u5GGmd0tGRLbhaighg4.4VdjRtFxgq', 2, NULL, '2023-06-28 05:28:02'),
(2, 'Lenovo', 'suma@gmail.com', '$2y$10$HFMbmfvS9z.fSacJ770.QuQf4EuoXAATGqmxHtrbXEeFk9y2tTWfO', 1, NULL, '2023-06-28 05:59:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamdani`
--
ALTER TABLE `jamdani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newproduct`
--
ALTER TABLE `newproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jamdani`
--
ALTER TABLE `jamdani`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newproduct`
--
ALTER TABLE `newproduct`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `newproduct` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
