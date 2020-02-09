-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 04:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharedposts`
--

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 2, 'Share One', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.', 'https://hr.wikipedia.org/wiki/Franz_Kafka', '2020-02-08 16:09:00'),
(2, 1, 'Test Share Two', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'https://hr.wikipedia.org/wiki/Patnje_mladog_Werthera', '2020-02-08 16:09:36'),
(3, 2, 'About old dogs', 'But old fools is the biggest fools there is. Can&#39;t learn an old dog new tricks, as the saying is. But my goodness, he never plays them alike, two days, and how is a body to know what&#39;s coming? He &#39;pears to know just how long he can torment me before I get my dander up, and he knows if he can make out to put me off for a minute or make me laugh, it&#39;s all down again and I can&#39;t hit him a lick.', 'https://en.wikipedia.org/wiki/The_Adventures_of_Tom_Sawyer', '2020-02-09 03:01:14'),
(5, 2, 'Test post 22', 'This is my test post!', 'https://www.google.com', '2020-02-09 16:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(2555) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'Jakov Kristović', 'jakov@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-02-09 03:37:31'),
(2, 'anonymous_user22', 'jakov2@gmail.hr', 'e10adc3949ba59abbe56e057f20f883e', '2020-02-09 15:05:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
