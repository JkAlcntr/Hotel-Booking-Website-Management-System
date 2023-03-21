-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 03:26 AM
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
-- Database: `hbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id_no`, `name`) VALUES
(1, 'Wifi'),
(2, 'Air-con'),
(3, 'Geyser'),
(4, 'TV'),
(5, 'xzxz');

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `id_no` int(11) NOT NULL,
  `admin_user` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`id_no`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id_no`, `image`) VALUES
(11, 'IMG_38815.jpg'),
(12, 'IMG_59944.jpg'),
(13, 'IMG_78827.jpg'),
(14, 'IMG_69453.jpg'),
(16, 'IMG_26810.jpg'),
(17, 'IMG_55827.jpg'),
(18, 'IMG_98561.jpg'),
(19, 'IMG_73816.png'),
(20, 'IMG_28263.jpg'),
(21, 'IMG_27787.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` bigint(20) NOT NULL,
  `pn2` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `twt` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `ig`, `twt`, `iframe`) VALUES
(1, 'Sa bahay ko po', 'https://goo.gl/maps/Za2obHw3ejdZTuQT6', 9959316154, 9912345655, 'juandelacruz@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246061.5834461383!2d120.98102500000002!3d15.499903000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33972921652f4ccb:0x3ddca086bad37111!2sCabanatuan City, Nueva Ecija!5e0!3m2!1sen!2sph!4v1679106759826!5m2!1sen!2sph');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id_no` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id_no`, `picture`, `name`, `description`) VALUES
(5, 'IMG_37122.jpg', 'The Spa', 'The Spa is a haven of wellness and pampering where the steady and skilled hands of massage therapists employing traditional Filipino spa'),
(6, 'IMG_47490.jpg', 'Fitness Centre', 'The Spa is a haven of wellness and pampering where the steady and skilled hands of massage therapists employing traditional Filipino spa'),
(8, 'IMG_19673.jpg', 'The Pool', 'The Spa is a haven of wellness and pampering where the steady and skilled hands of massage therapists employing traditional Filipino spa'),
(9, 'IMG_61283.jpg', 'Dining Area', 'The Spa is a haven of wellness and pampering where the steady and skilled hands of massage therapists employing traditional Filipino spa'),
(10, 'IMG_93427.JPG', 'The Bar', 'The Spa is a haven of wellness and pampering where the steady and skilled hands of massage therapists employing traditional Filipino spa'),
(12, 'IMG_34576.jpg', 'In-room Dining', 'The Peninsula Manila prides itself in offering more than just bedrooms to its guests, but also providing maximum comfort and all the necessities.'),
(14, 'IMG_95028.jpg', 'The Club Lounge', 'A relaxing space that provides live musical entertainment and refreshments and nibbles, including a breakfast, The Peninsula Afternoon Tea.'),
(16, 'IMG_62793.jpg', 'Botique', 'The Peninsula Boutique has, over the years, established a reputation for purveying Manila&#039;s finest baked and delicatessen goods.');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id_no`, `name`) VALUES
(8, 'Bedroom'),
(9, 'in-room safe'),
(10, 'Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id_no` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `area` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_addons`
--

CREATE TABLE `room_addons` (
  `id_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `addons_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_feature`
--

CREATE TABLE `room_feature` (
  `id_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'HOTEL MARGARETTE', 'sdjfhjshfklhfkshfshfsadklfhklhfkdsahfls', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `id_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`id_no`, `name`, `picture`) VALUES
(13, 'admin', 'IMG_91060.jpg'),
(16, 'person 1', 'IMG_38229.jpg'),
(17, 'person 2', 'IMG_76343.jpg'),
(18, 'person 3', 'IMG_47438.jpg'),
(19, 'person 4', 'IMG_49732.jpg'),
(20, 'person 5', 'IMG_23242.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `id_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`id_no`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(7, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(8, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(9, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(10, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(11, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(12, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(13, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(14, 'Jhong Hilarious', 'jhonghilarious@gmail.com', 'room service', 'katagal room service tumae butiki', '2023-03-20', 0),
(16, 'Asyong', 'juandelacruz@gmail.com', 'room', 'Jopay, kamusta ka na? palagi kitang pinapanood, nakikita Jopay, pasensiya ka na wala rin kasi akong makausap at kasama wag ka nang mawala wag ka nang mawala', '2023-03-20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `room_addons`
--
ALTER TABLE `room_addons`
  ADD PRIMARY KEY (`id_no`),
  ADD KEY `addons id` (`addons_id`),
  ADD KEY `room id` (`room_id`);

--
-- Indexes for table `room_feature`
--
ALTER TABLE `room_feature`
  ADD PRIMARY KEY (`id_no`),
  ADD KEY `feature id` (`feature_id`),
  ADD KEY `rm id` (`room_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_addons`
--
ALTER TABLE `room_addons`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_feature`
--
ALTER TABLE `room_feature`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_addons`
--
ALTER TABLE `room_addons`
  ADD CONSTRAINT `addons id` FOREIGN KEY (`addons_id`) REFERENCES `addons` (`id_no`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `room id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id_no`) ON UPDATE NO ACTION;

--
-- Constraints for table `room_feature`
--
ALTER TABLE `room_feature`
  ADD CONSTRAINT `feature id` FOREIGN KEY (`feature_id`) REFERENCES `feature` (`id_no`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `rm id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id_no`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
