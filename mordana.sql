-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 03:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mordana`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `paragrap` text NOT NULL,
  `category` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `title1`, `title2`, `title3`, `title4`, `icon`, `paragrap`, `category`, `image`, `status`) VALUES
(1, '\nVoluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ', 'bi bi-check', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ', 'irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', 'blog-recent-5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Nazmul Islam', 'nazmulns8989@gmail.com', 'Phone Number Change', 'Hello', 1),
(2, 'Nazmul Islam', 'nazmul@gmail.com', 'Phone Number Change', 'Hi, There', 1),
(3, 'Nazmul Islam', 'nazmul.islam.spi33@gmail.com', 'Phone Number Change', 'Hello, Everyone', 1),
(4, 'Nazmul Islam Talukder', 'hafizur@gmail.com', 'Phone Number Change', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `icon`, `title2`, `description`, `image`, `status`) VALUES
(1, ' Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'bi bi-check', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'features-1.svg', 1),
(4, 'Corporis temporibus maiores provident', 'bi bi-check', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim ', 'features-2.svg', 1),
(6, 'Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas', 'bi bi-check', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.', 'features-3.svg', 1),
(7, 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in', 'bi bi-check', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim ', 'features-4.svg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `image`, `status`) VALUES
(1, 'Design', 'portfolio-6.jpg', 1),
(2, 'Web', 'portfolio-7.jpg', 1),
(3, 'Development', 'portfolio-1.jpg', 1),
(4, 'Marketing', 'portfolio-2.jpg', 1),
(5, 'APP', 'portfolio-4.jpg', 1),
(8, 'Foods', 'portfolio-9.jpg', 1),
(9, 'Drink', 'portfolio-5.jpg', 1),
(10, 'Sweets', 'portfolio-4.jpg', 1),
(11, 'Beauty', 'portfolio-7.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `doller` varchar(255) NOT NULL,
  `validati` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `p5` varchar(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `title`, `doller`, `validati`, `p1`, `p2`, `p3`, `p4`, `p5`, `icon`, `url`, `status`) VALUES
(1, 'Free', '$0', 'per month', ' Quam adipiscing vitae proin', 'Nec feugiat nisl pretium', 'Nulla at volutpat diam uteera', 'Pharetra massa massa ultricies', ' Massa ultricies mi quis hendrerit', 'bx bx-check', 'https://www.facebook.com/', 1),
(2, 'Business', '$29', 'per month', ' Quam adipiscing vitae proin', 'Nec feugiat nisl pretium', 'Nulla at volutpat diam uteera', 'Pharetra massa massa ultricies', ' Massa ultricies mi quis hendrerit', 'bx bx-check', 'https://www.youtube.com/watch?v=ItaJ3GY319I', 1),
(3, 'Developer', '$50', 'per month', ' Quam adipiscing vitae proin', 'Nec feugiat nisl pretium', 'Nulla at volutpat diam uteera', 'Pharetra massa massa ultricies', ' Massa ultricies mi quis hendrerit', 'bx bx-check', 'https://www.youtube.com/watch?v=ItaJ3GY319I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(1, 'Web Development', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx bx-file', 1),
(2, 'Digital Marketing', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx bxl-dribbble', 1),
(4, 'WordPress Website', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx bx-world', 1),
(6, 'Unlimited Supported', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx bx-tachometer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicesplan`
--

CREATE TABLE `servicesplan` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `summery` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicesplan`
--

INSERT INTO `servicesplan` (`id`, `title`, `summery`, `image`, `status`) VALUES
(1, 'Our Mission', 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'service-details-1.jpg', 1),
(2, 'Our Plan', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 'service-details-2.jpg', 1),
(3, 'Our Vision', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet', 'service-details-4.jpg', 1),
(4, 'Our Care', 'Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut', 'service-details-3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon1` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`id`, `name`, `title`, `icon`, `icon1`, `icon2`, `url`, `url1`, `url2`, `description`, `image`, `status`) VALUES
(1, 'Nazmul Islam', 'Web Developer', 'bi bi-facebook', 'bi bi-linkedin', 'bi bi-twitter', 'https://www.facebook.com/', 'https://www.linkedin.com/in/nazmul-islam-10473b1a2/', '#', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, libero vel luctus finibus, sem eros porta augue, sit amet tristique sem erat a dolor. Proin ornare odio volutpat', 'team-5.jpg', 1),
(2, 'Nazmul Islam', 'Deb Designer', 'bi bi-facebook', 'bi bi-linkedin', 'bi bi-twitter', 'https://www.youtube.com/watch?v=ItaJ3GY319I', 'https://www.linkedin.com/in/nazmul-islam-10473b1a2/', '#', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ', 'IMG_20210831_174536.jpg', 1),
(3, 'Sarah Jhonson', 'Product Manager', 'bi bi-facebook', 'bi bi-linkedin', 'bi bi-twitter', 'https://www.youtube.com/watch?v=ItaJ3GY319I', 'https://www.linkedin.com/in/nazmul-islam-10473b1a2/', '#', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'team-6.jpg', 1),
(4, 'Amanda Jepson', 'Accountant', 'bi bi-facebook', 'bi bi-linkedin', 'bi bi-twitter', 'https://www.youtube.com/watch?v=ItaJ3GY319I', 'https://www.linkedin.com/in/nazmul-islam-10473b1a2/', '#', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ', 'team-3.jpg', 1),
(5, 'Demi Lewis', 'Financing', 'bi bi-facebook', 'bi bi-linkedin', 'bi bi-twitter', 'https://www.facebook.com/', 'https://www.linkedin.com', '#', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'team-2.jpg', 1),
(6, 'Nazmul Islam', 'Developer', 'bi bi-facebook', 'bi bi-linkedin', 'bi bi-twitter', 'https://www.facebook.com/', 'https://www.linkedin.com/in/nazmul-islam-10473b1a2/', '#', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, libero vel luctus finibus, sem eros porta augue, sit amet tristique sem erat a dolor. Proin ornare odio volutpat', 'IMG_20210831_174536.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tetstimonials`
--

CREATE TABLE `tetstimonials` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tetstimonials`
--

INSERT INTO `tetstimonials` (`id`, `name`, `title`, `description`, `image`, `status`) VALUES
(1, '', 'Deb Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, libero vel luctus finibus, sem eros porta augue, sit amet tristique sem erat a dolor. Proin ornare odio volutpat', 'IMG_0548.JPG', 1),
(2, '', 'CEO & Funder', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'testimonials-1.jpg', 1),
(3, '', 'Designer', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ', 'testimonials-2.jpg', 1),
(4, '', 'Enterpawer', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'testimonials-5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `status`) VALUES
(1, 'Nazmul Islam', 'nazmul.cse67@gmail.com', '01940475267', '$2y$10$BjvS/1vWUto9vQOYAC6CgedAlCt3BarwtrcFNZzbRA/w3vRYz4.IG', 1),
(2, 'Nazmul Talukder', 'nazmulns8989@gmail.com', '01889687828', '$2y$10$a8YCmWV6kX.BYV8LcRkSF.5EcJ1TeFMIylvflK2oyNNn1QnpB02JW', 1),
(3, 'Farabi Islam', 'nazmulsn@gmail.com', '01638096733', '$2y$10$TgakP8cP4uGLY34DLtHqLOtTc4vYElf4OZCQ87FxqoiJL8K9axFlS', 1),
(4, 'Farhan', 'nazmul.islam.spi33@gmail.com', '01795528329', '$2y$10$bB4CRt8V.HeLgA9giHIS4.rkEo3.o0QD3xxlCrvseMNrWqdi9xpV6', 1),
(5, 'Hafizur Rahman', 'nazmul@gmail.com', '01775653568', '$2y$10$sNjt/3.xN0xxSxqIiu6.b.qAIpMN5ej7.0gEwL2M2JjjVneInjMCW', 1),
(6, 'Alamin Sheak', 'alamin@gmail.com', '01920952727', '$2y$10$eDdvlBPit41FQeHplQD6E.AjinQEuNNrp.et.2U1TpTT6H.Z0RlJS', 1),
(7, 'Taher Jony', 'taherjs@gmail.com', '01776011973', '$2y$10$DSk7IbCjnlGEidPVaNV15OAGqzQPogTRNVIZf8HoNvNVYsuzt4Q5q', 1),
(8, 'Uzzal Ahmed', 'uzzal@gmail.com', '01795952800', '$2y$10$ZdnWs2V9E/isUQvGJNHCWutxSj.zHiGePK2eFtjnu9f2klqUnKdxm', 1),
(9, 'Labonno', 'laboni@gmail.com', '0123456789', '$2y$10$k010VkwWQGAk5ohpSJ6JAO46vfcwuxn7.chy9QnpVBiciuw1bKauy', 1),
(11, 'Nazmul Talukder', 'nazmulit@gmail.com', '01940475267', '$2y$10$3UcmL5VmpHqqUHkHeyRkV.m4GfCkB91hnfNwNz9xaZiBghXGvDX22', 1),
(12, 'Nazmul Talukder', 'nazmuls@gmail.com', '01940475267', '$2y$10$UHVJzlGoaM7CtpJpPtyzsul9sG.5Gvq4oOh2DSraUBuoPiChYDWQe', 1),
(13, 'Nazmul Talukder', 'nazmuls@gmail.com', '01940475267', '$2y$10$MvxNgd3bZxe7Y3QXF6RlNeApsnGQr1eJe5nWLpiq5moqntzHjsfX2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `image`, `url`, `status`) VALUES
(1, 'blog-recent-3.jpg', 'https://www.youtube.com/watch?v=ItaJ3GY319I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` tinyint(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `title`, `icon`, `category`, `status`) VALUES
(2, 'Nemo Enim', 'bx bx-gift', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 1),
(3, 'Nazmul Islam', 'bx bx-fingerprint', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesplan`
--
ALTER TABLE `servicesplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetstimonials`
--
ALTER TABLE `tetstimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicesplan`
--
ALTER TABLE `servicesplan`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tetstimonials`
--
ALTER TABLE `tetstimonials`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` tinyint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
