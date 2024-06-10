-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 10, 2024 at 11:22 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f_paw`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `favorites`
--

CREATE TABLE `favorites` (
  `idUser` int(11) NOT NULL,
  `idProperty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`idUser`, `idProperty`) VALUES
(58, 73),
(59, 73),
(65, 73);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `properties`
--

CREATE TABLE `properties` (
  `idProperty` int(11) NOT NULL,
  `ownerId` int(11) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `datePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastModifiedBy` int(11) DEFAULT NULL,
  `lastModifiedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`idProperty`, `ownerId`, `address`, `description`, `price`, `type`, `datePosted`, `lastModifiedBy`, `lastModifiedDate`) VALUES
(73, 58, 'Painting', 'Niczym niezmartwiona dziewczyna w białej sukni', 100.00, NULL, '2024-06-09 13:25:25', 58, '2024-06-10 08:03:57'),
(74, 58, 'Painting', 'Kotek', 111.00, 'Sprzedaż', '2024-06-09 14:26:52', 58, '2024-06-09 14:39:55'),
(75, 1, 'Painting', 'Taniec ptaków', 100.00, NULL, '2024-06-09 16:11:32', NULL, NULL),
(76, 64, 'Fashion', 'Własnoręcznie wyszydełkowana zabawka', 150.00, NULL, '2024-06-10 10:46:37', NULL, NULL),
(77, 65, 'Painting', 'Beautiful obrazek', 1000.00, NULL, '2024-06-10 12:19:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `property_images`
--

CREATE TABLE `property_images` (
  `idImage` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `imagePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`idImage`, `property_id`, `imagePath`) VALUES
(126, 73, 'uploads/property_6665ad45bfda29.07144165.jpg'),
(127, 74, 'uploads/property_6665bbac48cfe4.58104080.jpg'),
(128, 75, 'uploads/property_6665d43491e196.46514962.jpg'),
(129, 76, 'uploads/property_6666d98d2dad50.63955179.jpg'),
(130, 77, 'uploads/property_6666ef43040213.94350357.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `isActive` varchar(100) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `roleName`, `isActive`, `dateCreated`) VALUES
(1, 'user', 'yes', '2024-05-27 17:29:22'),
(2, 'moderator', 'yes', '2024-05-27 17:29:48');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userrole`
--

CREATE TABLE `userrole` (
  `idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `assignedDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`idUser`, `idRole`, `assignedDate`) VALUES
(1, 1, '2024-06-03 18:20:00'),
(1, 2, '2024-05-30 18:36:43'),
(58, 1, '2024-06-02 23:03:04'),
(59, 2, '2024-06-02 23:03:37'),
(60, 1, '2024-06-03 17:53:12'),
(61, 1, '2024-06-07 17:44:45'),
(62, 1, '2024-06-08 08:25:21'),
(63, 1, '2024-06-08 08:25:47'),
(64, 2, '2024-06-09 15:09:00'),
(65, 1, '2024-06-10 12:18:25');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastLogin` timestamp NULL DEFAULT NULL,
  `lastModifiedBy` int(11) DEFAULT NULL,
  `lastModifiedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `login`, `password`, `email`, `firstName`, `lastName`, `dateCreated`, `lastLogin`, `lastModifiedBy`, `lastModifiedDate`) VALUES
(1, '2741be847eacddcb3f8c835f0379fed574cb010185aee672e2aa99ecbb5c7715', '$2y$10$ZuEujzLt5Iv4Vzvzxq30a.EzYYDEoh8sox3ujzFEOp2qjNkeKnSka', 'fab@gmail.com', 'Blazej', 'Faber', '2024-05-30 18:36:43', '2024-06-10 10:34:50', 1, '2024-06-09 16:09:50'),
(58, '04f8996da763b7a969b1028ee3007569eaf3a635486ddab211d512c85b9df8fb', '$2y$10$uqkAz2nDWyFD.sXFQdVqiee/T1FOtKC6t5vl56eoo5bYWS9EuaoMa', 'user@gmail.com', 'User', 'user', '2024-06-02 23:03:03', '2024-06-10 20:46:41', 58, '2024-06-09 15:28:25'),
(59, 'cfde2ca5188afb7bdd0691c7bef887baba78b709aadde8e8c535329d5751e6fe', '$2y$10$ZfVynv7LCD/qsh9L9GzyMuoPkVveoA5zpugraObgm9OdETyrjk0N6', 'moderator@moderator.pl', 'Moderator', 'moderator', '2024-06-02 23:03:37', '2024-06-09 15:03:52', NULL, NULL),
(60, '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '$2y$10$BrtuYOJpJySgppsNXIvjv.BfEYTEyyfid9duO2Ja1tBspMlX1Zd/u', 'test@test.eu', '12345', '54321', '2024-06-03 17:53:12', '2024-06-03 18:17:08', 60, '2024-06-03 18:00:23'),
(61, '931766275f4964996e86a5db22408c8b7e7d3ecede26705a2a8270a60cdb38c2', '$2y$10$FMdfRxKarOLlnYqKt0okXOuys6.0DxIBJK7dAQJ063oI31VFMP7G2', 'no@wp.pl', 'nonono', 'nononono', '2024-06-07 17:44:45', NULL, NULL, NULL),
(62, 'e6d5e47d930591f026ca645226934cb5f4bf45d961da19b828c0f7f1ca34da8d', '$2y$10$PaKnmMo3Nj1VLe6Kvjt0FuLSGhxOh54qvEWNp8elbb3WuboTlH4xC', 'wo@wp.pl', 'name', 'namee', '2024-06-08 08:25:21', NULL, NULL, NULL),
(63, '9367417d63903350aeb7e092bca792263d4fd82d4912252e014e073a8931b4c1', '$2y$10$i1a/3Lwbw.SsJJti4L/HRuna9.4v64SXrH1yyomDk2MJ2CTiYdkpq', 'name1@wp.pl', 'nameee', 'nameeee', '2024-06-08 08:25:47', '2024-06-08 08:25:52', NULL, NULL),
(64, 'b06cdc6d7877b0748a4482c84fdd8a9ca4a4adfec3d73b6390f0f86797d2e181', '$2y$10$Fl88h.Y7FJDDAiXXQt5Bf.VYW3RV/hsU/ySwb5RPlZaJktnfvgPy2', 'wrona@wp.pl', 'wrona', 'wrona', '2024-06-09 15:09:00', '2024-06-10 16:45:07', NULL, NULL),
(65, '668075572bd2bf09bbfc3f0bf3e54a824fc5adf7e024f29cd73021faaf383aab', '$2y$10$uQ8LvTDA9jfOrBWNUO/57ukwOyBfCr6Oct9Fri0tOyIgJO79UdMKK', 'papier@wp.pl', 'Monika', 'Art', '2024-06-10 12:18:25', '2024-06-10 12:18:31', NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`idUser`,`idProperty`);

--
-- Indeksy dla tabeli `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`idProperty`),
  ADD KEY `Properties_Users_FK` (`ownerId`),
  ADD KEY `Properties_Users_FKv1` (`lastModifiedBy`);

--
-- Indeksy dla tabeli `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `property_id` (`property_id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indeksy dla tabeli `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`idUser`,`idRole`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `Users_Users_FK` (`lastModifiedBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `idProperty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `Properties_Users_FK` FOREIGN KEY (`ownerId`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Properties_Users_FKv1` FOREIGN KEY (`lastModifiedBy`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`idProperty`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Users_FK` FOREIGN KEY (`lastModifiedBy`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
