-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 12:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `gender` int(1) NOT NULL,
  `Image` text NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Name`, `Email`, `Password`, `gender`, `Image`, `id`, `created_at`) VALUES
('mhamed', 'mhamed@gmail.com', '123123', 2, '2023-04-0715-09-19c1a1be7dcbfcb23917502cf827158fff.png', 8, '2023-04-07 16:09:19'),
('mhamed', 'mhamed@gmail.com', '123123', 1, '2023-04-0715-09-43c1a1be7dcbfcb23917502cf827158fff.png', 9, '2023-04-07 16:09:43'),
('faisal', 'ahmed@gmail.com', '123123', 1, '2023-04-1417-37-089761b19a920027f5d22bc515f91d3bae.png', 10, '2023-04-14 18:37:08'),
('faisal', 'ahmed@gmail.com', '123123a', 1, '2023-04-1417-38-240ad95968ed86a17ffa7f955c07c8eb1b.png', 11, '2023-04-14 18:38:24'),
('aa', 'a@gbg.com', '1236547889', 1, '2023-04-1417-57-440ad95968ed86a17ffa7f955c07c8eb1b.png', 12, '2023-04-14 18:57:44'),
('f@gmail.com', 'f@gmail.com', '12312315454', 1, '2023-04-1900-26-00c1a1be7dcbfcb23917502cf827158fff.png', 13, '2023-04-19 01:26:00'),
('f@gmail.com', 'f@gmail.com', '12312315454', 1, '2023-04-1900-26-260ad95968ed86a17ffa7f955c07c8eb1b.png', 14, '2023-04-19 01:26:26'),
('f@gmail.com', 'f@gmail.com', '12312315454', 1, '2023-04-1900-26-34e94cb34b8a13e0ca337a69ba60051f85.png', 15, '2023-04-19 01:26:34'),
('f@gmail.com', 'f@gmail.com', '12312315454', 1, '2023-04-1900-27-24e94cb34b8a13e0ca337a69ba60051f85.png', 16, '2023-04-19 01:27:24'),
('f@gmail.com', 'f@gmail.com', '12312315454', 1, '2023-04-1900-27-33c69f253e6e5e5d6f4ae0b0f7ba994cd8.jpg', 17, '2023-04-19 01:27:33'),
('f22@gmail.com', 'f@gmail.com', '12312315454', 1, '2023-04-1900-27-59c69f253e6e5e5d6f4ae0b0f7ba994cd8.jpg', 18, '2023-04-19 01:27:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
