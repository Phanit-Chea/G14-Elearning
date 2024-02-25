-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 02:08 PM
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
-- Database: `g14_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `assessment_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `user_id`) VALUES
(1, 'rady', 'hello', 3);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_student_buy`
--

CREATE TABLE `history_student_buy` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date_puchase` date NOT NULL,
  `purchase_buy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `lesson_type` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `notification_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_receivers`
--

CREATE TABLE `notification_receivers` (
  `notification_receiver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_type`) VALUES
(1, 'teacher'),
(2, 'student'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_assessment_course`
--

CREATE TABLE `student_assessment_course` (
  `student_assessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role_id`, `image`) VALUES
(15, 'kiji', 'kiji@gamil.com', '$2y$10$0EfKGgNoeuSpsoWM/chS7eDDswcnkdwAZI0tc7EgxWqd5zRPBpKu6', '2', ''),
(16, 'yiyi', 'yiyi@gmail.come', '$2y$10$WQRgyeGoqb44trSoSR1m9.COEyKF.PAl6GrfyWa6wr3PPSldeRYqi', '2', ''),
(17, 'jing', 'jing@gm.com', '$2y$10$FVscBUDfIpFA.MfMR4Y61.kE7c9PKw3z44ff0t3ixa4KeAdUrC2Wa', '2', ''),
(19, 'chanvany', 'chanvany@ss.com', '$2y$10$DK0taKmDE3Nnb1luPFcFtOzFxrDsQfGy3BMrqTC0XYIokHlQE2a6i', '2', ''),
(21, 'kerk', 'ker@gmail.pnc', '$2y$10$lYoZ0jNL0H90DNK0iNIChu7SeVnk3lcwXbcxl3hzhGfFbO9sUHmUW', '2', ''),
(22, '', '', '$2y$10$.lghG79ZDcu2364SqW/NA.VqMCeob7xeZija/TrB8To7cPb07USIm', '2', 'ttt.pnhg'),
(23, 'JING123', 'jing123@gmail.com', '$2y$10$3WKFql.1HRNt9GnOmW9p6e7dLtyUjbK/TM/W3p0rPMnv.nkgHfkNi', '2', 'hello'),
(24, 'jing', 'jing123@gmails.com', '$2y$10$K3mRiZpE3yaihKItQHE0D.V3CkSrq5lq7sMsGD2QegICzYpNkoAka', '2', 'hi'),
(25, 'JING123', 'rady@pnc.comjj', '$2y$10$4S5f9NWccDT0RuzffHO9BO0/hvUNmLZh03O7e5HcNOi1FSLVCKCEa', '2', 'hi'),
(26, 'rady', 'rady@pnc.coms', '$2y$10$PEAvVj7k3Ij255zp1hI7f.563QxgSbzvXt3CSt/osgHF.GbuQBHni', '2', 'hi'),
(27, 'jing', 'rady@pnc.comjja', '$2y$10$DmkkST5jeWaGFqeycS8rZObjqP5kpnQt7Loq7QdYB0TpbbnA3yw8W', '2', 'hi'),
(28, 'yaya', 'yayo@gmail.com', '$2y$10$vhxAy80UYBTaBesJQ56xR.SIaMaZmkLmnD5hjbWuayZEnLsWAwUV2', '2', 'hi'),
(29, 'Rath', 'Rath@gmail.com', '$2y$10$Dihnmw3F1V.MDbpKTimRpeNTYxGNxjTHHEwvRDo7L9iUk5n8VRjBa', '2', '65d4935476dfe'),
(30, 'Phanit', 'Phanit@gmail.com', '$2y$10$yQNK.SaJ/j2CRIcS8OJRsuvzwk5Ud5tyivXl6X401ywSCRKuda.TO', '2', '65d493e80ec7eArray'),
(31, 'jing', 'jame@gmail.com', '$2y$10$ZbC4AbUN0ewIzf2pvLoq/OV6hf2SsjUgHXooltYLRRsKMcVNB.AjC', '2', '65d494829218d'),
(32, 'jing', 'jame11@gmail.com', '$2y$10$dycNBdM2CfzyONrADr7c9uuIL8wyEuGPQWLblknbB0trHOzJwCia.', '2', '65d495fb3bb49.jpg'),
(34, 'Jame', 'jame123@gmail.com', '$2y$10$mGnnSpZlV5xaUOmRc5aTKeT6jQKcrOg.lQFjL.tcSiVP9guZ1wJEu', '2', '65d4a19001c87.jpg'),
(38, 'football', 'football@gmail.com', '$2y$10$bDTeT9xe9Y7lAgLE1AXOtu/UEpnGHnpO.x81SWrMfJAUA//JSUbE6', '2', '65d4ac89a1ae8.'),
(39, 'football', 'footballs@gmail.com', '$2y$10$g6LKYB6NYgLV3pn3DtNjMuktDqRMPw6L7WlBYfFLAo.YIOz4Q/yEG', '2', '65d4aca248b0f.jpg'),
(40, 'hi', 'hi@gmail.com', '$2y$10$LoZOGN3KjBPHI21tPecRVu1.rb6LUCPj8wxfQtwhJeK6hrSBOYYZ.', '2', '65d548febcdd3.jpg'),
(41, 'g', 'g@gmail.com', '$2y$10$RKp/At4WEM.9aekzPW1HOuQmUsCHFvQYLH/k0un4Gr.5.ztAnHcZW', '2', '65d549186c9af.jpg'),
(42, 'heng', 'heng@gmail.com', '$2y$10$rLq5e0yzWdzmHqrbSJKQH.sf3x4BPltTyYDbhPfabzFg.8WR42CX.', '2', '65d54d3a206e2.jpg'),
(43, 'cha', 'cha@gmail.com', '$2y$10$pvnhxrIBV1CSpDHTAycVQutJB38vtImn2hvzzX.awg3kdBHKFOgZG', '2', '65d56e8d2dedf.jpg'),
(44, 'ss', 'si@gmai.com', '$2y$10$mXFbmT7GPNcG7y17HemdhucVZKyc2cEn0q0qH52V3zv/idUATIKzS', '2', '65d5ec2c3668a.'),
(45, 'ss', 'ji@gmai.com', '$2y$10$w8kLkLjv5VHcFvbW7rKEjuTurPKvDy2QsauUZwd1ol8njE372lDmC', '2', '65d5ec376217f.jpg'),
(46, 'hello', 'hello@hi.com', '$2y$10$OXfTYCMnQri6Aol82Ecwf.SmFcOZLYv.jce1PYZc9lA2U2GSv6WMW', '3', '65d5f54144b18.jpg'),
(47, 'yi', 'yiyi@gmails.come', '$2y$10$IBv2qNLTiUQrNenOw5Tt1uXb1NsV47ncegG0wjWkmli1qZtQAiNWi', '2', '65d5f57746304.jpg'),
(48, 'jing', 'rady@pnc.comeqee', '$2y$10$np8qaX1r/zQUYg6S8OxSZ.GlpvSjchdkI8Gi8FvXBjcXlOedZfuVy', '2', '65d5f6a8c4180.jpg'),
(49, 'jing', 'rady@sspnc.com', '$2y$10$sQteZQI.2HJhQ0/JVZ3Uk.poaEKZBDzOR9w1RRI9Efr7AsJlzwP5W', '2', '65d5f6d558091.jpg'),
(50, 'hi', 'his@gmail.com', '$2y$10$yXaRt1la76HEqrmoPvoECuQuX8XRjCBPkOFFKW0A5/9N3FAdxOzIm', '2', '65d5f7751c1c8.jpg'),
(51, 'rith', 'rith@gamil.com', '$2y$10$FaBbcsA5dNOM12CFVJmBfuDbYj0GgnOricBUaZWPABUs9hq9yuhDC', '2', '65d5f873cc356.jpg'),
(52, 'rith', 'riths@gamil.com', '$2y$10$O2Ndjh40lqbyOLlUnhqTReA96R1mk27GP5VZNNWrpsK2Q.3ERyzv6', '2', '65d5f8ad2955f.jpg'),
(53, 'jing', '123jing@gmail.com', '$2y$10$RQGTSnoobMXMA/w7xkHWROWdpEp2T1q6DPKeP4hu//a1mXFTrXZii', '3', '65d618fd31af4.jpg'),
(54, 'heng', 'heng@gmailee.com', '$2y$10$gLdCX69SqcYLchxICE4uqeO.T4Ax4rbPwAV7ou2XZWjZDNktuf6S6', '3', '65d6add6a475d.'),
(55, 'Admin', 'Admin@gmail.com', '$2y$10$5Au4ouk4jdghYJ/1ktqFueHkJcuKU3/crN2tH3uKm2nLU2prJTWxC', '3', '65d6fb6e63b6d.'),
(56, 'jing', 'mrrsoching.chun@student.passerellesnumeriques.org', '$2y$10$bbfvVmumiB4cFAis48SlTOWQgX.qNNPmtvzG46nQ8mjf2zDIN6wCq', '3', '65d6fc10bb53e.jpg'),
(57, 'jing', 'rady@pnc.comeqeyy', '$2y$10$hqlMD8ves.OyDPT3y3dRjOrgiGfzCZDbeZteB7nk5LV6MTjsbGHey', '2', '65d6ff4c68f6c.jpg'),
(58, 'jing', 'rady@pnc.comeqeww', '$2y$10$WM2D6yYcyGwwBd.FqY42DO8ZiwlytI3bpRurvc7EuHl.Aw138YYme', '2', '65d6ff8498dbd.jpg'),
(59, 'jing', 'rady@pnc.comeqett', '$2y$10$ZEnYTybTxWwDyEHCwBguIODqe6ovrZVq2bt6jMbIiazUxduRJYEXa', '2', '65d7001121e41.jpg'),
(60, 'rady', 'rady@pnc.comeqe77', '$2y$10$cUewroTBMMWOfSHzcOAzUeEuxdy5.0Eymc.W768qQfI8Dck3OCI6W', '2', '65d70082a3308.jpg'),
(61, 'jing', 'soching.ttchun@student.passerellesnumeriques.org', '$2y$10$vN73KAF5tMjUIht/KmYzweXvsgPrTIwGZHiriawkB2VlshqH6ZXTO', '2', '65d700b898d06.jpg'),
(62, 'jing', 'soching.chun@student.passerellesnumeriques.orgsss', '$2y$10$j0Ab964rDV8ntA8JKzNN9u02RWyV4fQJ1KmpxTm/HJWXQl4cnBIca', '2', '65d704b9447a5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_backup`
--

CREATE TABLE `users_backup` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_backup`
--

INSERT INTO `users_backup` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Phanit', 'phanit.chea@student.passerellesnumeriques.org', '20051310', 2),
(2, 'Vanny', 'vanny.chan@student.passerellesnumeriques.org', '123', 2),
(3, 'admin', 'admin@gmail.com', '2005', 3),
(17, 'jing', 'rady@pnc.com', '$2y$10$MpVBxtkDTxWsMbVgNSPWUOEHC76oC4bI0ddbW5zpIRlbx.3fsAraO', 2),
(18, 'JING123', 'rady@pnc.co', '$2y$10$CBijQHVjWbIRFgE9n3SVa.a75PencWWeqSP5ffbyIS7g3NPYbOUOW', 2),
(20, 'rady', 'ching@student.pnc', '$2y$10$stTmO0vO5x77ps4sWUArK.bKIj4EQazxlfUM/lafpnFuN.t5Fm5TG', 2),
(21, '', '', '$2y$10$GJafIh2MlfTVsNJk5HdF0Os8HfHtxku2I2TbOg9uB2cPrjTiEw3gC', 2),
(34, 'jing', 'eqke@leee.xom', '0', 2),
(35, 'chhunkeo', 'chunkeo@teacher.lan', '80', 2),
(36, 'thow', 'dald@klad', '08', 2),
(37, 'phanit', 'phanit@student.com', '11', 2),
(38, 'Jame', 'jk@gmail.com', '112', 2),
(39, 'mrr roth', 'roth@gmail.com', '55', 2),
(40, 'keo', 'keo@gemail.com', '44', 2),
(41, 'ju jing', 'jujing@gmail.com', '00', 2),
(47, 'jing', 'rady@pngggdc.com', '09', 2),
(48, 'jing love', 'love@gmail.com', '59', 2),
(50, 'JING123', 'rady@pnc.comkk', 'q', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `history_student_buy`
--
ALTER TABLE `history_student_buy`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `notification_receivers`
--
ALTER TABLE `notification_receivers`
  ADD PRIMARY KEY (`notification_receiver_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `notification_id` (`notification_id`),
  ADD KEY `assessment_id` (`assessment_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `student_assessment_course`
--
ALTER TABLE `student_assessment_course`
  ADD PRIMARY KEY (`student_assessment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `assessment_id` (`assessment_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`(100));

--
-- Indexes for table `users_backup`
--
ALTER TABLE `users_backup`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `role_id` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_student_buy`
--
ALTER TABLE `history_student_buy`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_receivers`
--
ALTER TABLE `notification_receivers`
  MODIFY `notification_receiver_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_assessment_course`
--
ALTER TABLE `student_assessment_course`
  MODIFY `student_assessment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users_backup`
--
ALTER TABLE `users_backup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_backup` (`user_id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_backup` (`user_id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `history_student_buy`
--
ALTER TABLE `history_student_buy`
  ADD CONSTRAINT `history_student_buy_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_backup` (`user_id`),
  ADD CONSTRAINT `history_student_buy_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `notification_receivers`
--
ALTER TABLE `notification_receivers`
  ADD CONSTRAINT `notification_receivers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_backup` (`user_id`),
  ADD CONSTRAINT `notification_receivers_ibfk_2` FOREIGN KEY (`notification_id`) REFERENCES `notifications` (`notification_id`),
  ADD CONSTRAINT `notification_receivers_ibfk_3` FOREIGN KEY (`assessment_id`) REFERENCES `assessments` (`assessment_id`);

--
-- Constraints for table `student_assessment_course`
--
ALTER TABLE `student_assessment_course`
  ADD CONSTRAINT `student_assessment_course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_backup` (`user_id`),
  ADD CONSTRAINT `student_assessment_course_ibfk_2` FOREIGN KEY (`assessment_id`) REFERENCES `assessments` (`assessment_id`),
  ADD CONSTRAINT `student_assessment_course_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `users_backup`
--
ALTER TABLE `users_backup`
  ADD CONSTRAINT `users_backup_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
