-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 02:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Name`, `Email`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `Id` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT 1,
  `ClientId` int(11) NOT NULL,
  `IsDeleted` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`Id`, `ProductId`, `Quantity`, `ClientId`, `IsDeleted`) VALUES
(1, 3, 3, 8, '-1'),
(2, 2, 5, 1, '-1'),
(3, 1, 2, 3, '-1'),
(4, 3, 2, 1, '-1'),
(5, 3, 1, 1, '-1'),
(6, 2, 3, 2, '-1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `IsDeleted` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `IsDeleted`) VALUES
(1, 'Sofa', '1'),
(2, 'Tables', '1'),
(3, 'Chairs', '1'),
(4, 'Bench', '1'),
(5, 'Cabinets', '1'),
(6, 'Stool', '-1'),
(7, 'Desks', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `Id` int(11) NOT NULL,
  `CartId` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `ZipCode` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `StreetAddress` varchar(255) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`Id`, `CartId`, `FirstName`, `LastName`, `Email`, `Phone`, `ZipCode`, `City`, `StreetAddress`, `TotalPrice`) VALUES
(1, 2, 'Yash', 'Sen', 'yash@gmail.com', '9576423851', '360001', 'Jamnagar', 'Digjam Circle', 7500),
(2, 1, 'Vishwa', 'Vasoya', 'vishwa@gmail.com', '6572034985', '642103', 'Surat', '312, Mirambika Complex, Opp. Gandhi Baug, Nanpura, Surat, Gujarat 395001, India', 1500),
(3, 3, 'Isha', 'Nandasana', 'isha@gmail.com', '7541203568', '360001', 'Rajkot', '1st floor, Perfect Point, Yagnik Road., Rajkot, Gujarat 360001, India', 4000),
(4, 2, '', '', '', '', '', '', '', 1000),
(5, 2, '', '', '', '', '', '', '', 1500),
(6, 2, '', '', '', '', '', '', '', 1500),
(7, 4, '', '', '', '', '', '', '', 1500),
(8, 5, '', '', '', '', '', '', '', 500),
(9, 6, '', '', '', '', '', '', '', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Id`, `Name`, `Email`, `UserName`, `Password`) VALUES
(1, 'yash', 'yash@gmail.com', 'yash', 'yash'),
(2, 'chirag', 'chirag@gmail.com', 'chirag', 'chirag'),
(3, 'isha', 'isha@gmail.com', 'isha', 'isha'),
(4, 'harshil', 'harshil@gmail.com', 'harshil', 'harshil'),
(5, 'viswa', 'viswa@gmail.com', 'viswa', 'viswa'),
(6, 'demo', 'demo@gmail.com', 'demo', 'demo'),
(7, 'Isha', 'Isha@gmail.com', 'Isha', 'Isha'),
(8, 'Vishwa', 'Vishwa@gmail.com', 'Vishwa', 'Vishwa'),
(10, 'Chirag', 'Chirag@gmail.com', 'Chirag', 'Chirag');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `CartId` int(11) NOT NULL,
  `TotalQuantity` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `CartId`, `TotalQuantity`, `TotalPrice`, `Status`, `Date`) VALUES
(1, 2, 5, 7500, 'Pending', '2024-10-17 15:03:46'),
(2, 1, 3, 1500, 'Delevered', '2024-10-17 15:05:40'),
(3, 3, 2, 4000, 'Delevered', '2024-10-17 15:08:17'),
(4, 2, 5, 1000, 'Pending', '2024-10-18 10:34:33'),
(5, 2, 5, 1500, 'Pending', '2024-10-18 10:57:20'),
(6, 2, 5, 1500, 'Pending', '2024-10-18 11:11:04'),
(7, 4, 2, 1500, 'Pending', '2024-10-18 11:15:19'),
(8, 5, 1, 500, 'Pending', '2024-10-18 11:15:32'),
(9, 6, 3, 4500, 'Delevered', '2024-10-18 14:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Id`, `OrderId`) VALUES
(2, 2),
(1, 3),
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `ImageFileName` varchar(255) NOT NULL,
  `IsDeleted` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `CategoryId`, `Name`, `Description`, `Price`, `ImageFileName`, `IsDeleted`) VALUES
(1, 1, 'Modern Sofa', 'A modern sofa is a sleek and stylish piece of furniture that combines comfort with contemporary design. Typically characterized by clean lines, minimalist features, and a focus on functionality, modern sofas often incorporate materials like high-quality f', 2000, '1729156213-', '1'),
(2, 2, 'Wood Table', 'A wooden table is a timeless piece of furniture that adds warmth, durability, and natural beauty to any space. Crafted from solid wood such as oak, maple, walnut, or pine, these tables are known for their strength and versatility, making them a popular ch', 1500, '1729156377-', '1'),
(3, 3, 'Blue Comfy Chaie', 'A chair is a fundamental piece of furniture designed to provide seating and support, offering both comfort and functionality. Chairs come in a wide variety of styles, materials, and designs, ranging from classic wooden frames to contemporary metal and uph', 500, '1729156449-', '1'),
(4, 1, 'ArmChair', 'Upholstered in high-quality fabric or leather, the plush, supportive cushions provide a cozy seating experience, while the sturdy armrests offer relaxation and stability', 2000, '1729428462-', '1'),
(5, 2, 'Bench', ' This versatile and stylish bench offers both functionality and a touch of elegance to any space.', 4500, '1729428533-', '1'),
(6, 2, 'Steal ', 'This robust and sleek steel table combines durability with modern design, making it a perfect fit for both residential and commercial spaces.', 2000, '1729428584-', '1'),
(7, 3, 'Black Chair', 'Elegant and versatile, this black chair combines modern design with unmatched comfort.', 700, '1729428629-', '1'),
(8, 1, 'Brown Sofa', ' Warm and inviting, this brown sofa combines timeless elegance with plush comfort. Upholstered in rich, earthy tones of brown, it brings a sense of coziness and sophistication to any living space.', 2500, '1729428699-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `Id` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL,
  `IsDeleted` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`Id`, `ProductId`, `ClientId`, `IsDeleted`) VALUES
(2, 2, 1, '1'),
(3, 1, 3, '1'),
(4, 3, 2, '1'),
(5, 1, 2, '1'),
(6, 3, 8, '1'),
(7, 1, 1, '1'),
(8, 3, 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `ClientId` (`ClientId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CartId` (`CartId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CartId` (`CartId`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `OrderId` (`OrderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `ClientId` (`ClientId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`ClientId`) REFERENCES `clients` (`Id`);

--
-- Constraints for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_ibfk_1` FOREIGN KEY (`CartId`) REFERENCES `carts` (`Id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CartId`) REFERENCES `carts` (`Id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`Id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`ClientId`) REFERENCES `clients` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
