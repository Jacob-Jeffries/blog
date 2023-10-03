-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2023 at 01:16 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES
(1, 'My First Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', '<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n    incididunt ut labore et dolore magna aliqua. At tempor commodo ullamcorper a\r\n    lacus. Tincidunt id aliquet risus feugiat in ante metus dictum at. Nibh\r\n    venenatis cras sed felis eget velit aliquet. Faucibus purus in massa tempor nec\r\n    feugiat nisl pretium fusce. Malesuada fames ac turpis egestas maecenas pharetra\r\n    convallis. Blandit volutpat maecenas volutpat blandit aliquam etiam erat. Neque\r\n    gravida in fermentum et sollicitudin ac orci phasellus. Massa placerat duis\r\n    ultricies lacus sed turpis tincidunt id aliquet. Ultrices tincidunt arcu non\r\n    sodales neque sodales ut etiam. Gravida quis blandit turpis cursus. Donec\r\n    ultrices tincidunt arcu non. Sit amet mattis vulputate enim nulla aliquet\r\n    porttitor. Egestas maecenas pharetra convallis posuere morbi leo urna molestie\r\n    at. Facilisis gravida neque convallis a cras. Faucibus et molestie ac feugiat\r\n    sed lectus vestibulum mattis. Volutpat est velit egestas dui. Feugiat nibh sed\r\n    pulvinar proin gravida hendrerit lectus a. Egestas erat imperdiet sed euismod\r\n    nisi porta. Sed turpis tincidunt id aliquet risus feugiat.\r\n</p>', NULL, NULL, NULL),
(2, 'Title of my Second Post', 'Hendrerit gravida rutrum quisque non tellus. Viverra vitae congue eu consequat', '<p>\r\n  Hendrerit gravida rutrum quisque non tellus. Viverra vitae congue eu consequat\r\n  ac. Elementum curabitur vitae nunc sed. Dolor sed viverra ipsum nunc aliquet\r\n  bibendum enim facilisis gravida. Suscipit adipiscing bibendum est ultricies\r\n  integer quis auctor elit sed. Sed enim ut sem viverra aliquet. Amet nulla\r\n  facilisi morbi tempus iaculis urna id volutpat lacus. Felis bibendum ut\r\n  tristique et egestas quis ipsum. At augue eget arcu dictum varius. Diam\r\n  vulputate ut pharetra sit amet aliquam. Vestibulum rhoncus est pellentesque elit\r\n  ullamcorper dignissim cras. Et sollicitudin ac orci phasellus. Quis ipsum\r\n  suspendisse ultrices gravida dictum fusce. Nec sagittis aliquam malesuada\r\n  bibendum arcu vitae elementum curabitur vitae. Orci nulla pellentesque dignissim\r\n  enim sit amet venenatis.\r\n</p>', NULL, NULL, NULL),
(3, 'Title of my Third Post', 'Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula. Urna et pharetra', '<p>\r\n  Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula. Urna et pharetra\r\n  pharetra massa massa ultricies. Pellentesque dignissim enim sit amet venenatis\r\n  urna cursus eget. A diam maecenas sed enim ut sem. Id nibh tortor id aliquet\r\n  lectus proin. Ac turpis egestas maecenas pharetra. Lorem ipsum dolor sit amet\r\n  consectetur adipiscing elit. Integer feugiat scelerisque varius morbi enim. Eget\r\n  egestas purus viverra accumsan in nisl. Maecenas ultricies mi eget mauris\r\n  pharetra et ultrices. Tellus in hac habitasse platea. At consectetur lorem donec\r\n  massa sapien. In fermentum posuere urna nec. Eu scelerisque felis imperdiet\r\n  proin fermentum. Consequat id porta nibh venenatis cras. Proin libero nunc\r\n  consequat interdum varius. Nunc lobortis mattis aliquam faucibus purus in. Sed\r\n  risus ultricies tristique nulla. Amet volutpat consequat mauris nunc congue nisi\r\n  vitae suscipit.\r\n</p>', NULL, NULL, NULL),
(4, 'My Fourth Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. At tempor commodo ullamcorper a\r\n	lacus. Tincidunt id aliquet risus feugiat in ante metus dictum at. Nibh\r\n	venenatis cras sed felis eget velit aliquet. Faucibus purus in massa tempor\r\n	nec feugiat nisl pretium fusce. Malesuada fames ac turpis egestas maecenas\r\n	pharetra convallis. Blandit volutpat maecenas volutpat blandit aliquam etiam erat.\r\n	Neque gravida in fermentum et sollicitudin ac orci phasellus. Massa placerat duis\r\n	ultricies lacus sed turpis tincidunt id aliquet. Ultrices tincidunt arcu non\r\n	sodales neque sodales ut etiam. Gravida quis blandit turpis cursus. Donec\r\n	ultrices tincidunt arcu non. Sit amet mattis vulputate enim nulla aliquet\r\n	porttitor. Egestas maecenas pharetra convallis posuere morbi leo urna\r\n	molestie at. Facilisis gravida neque convallis a cras. Faucibus et molestie ac\r\n	feugiat sed lectus vestibulum mattis. Volutpat est velit egestas dui. Feugiat nibh\r\n	sed pulvinar proin gravida hendrerit lectus a. Egestas erat imperdiet sed\r\n	euismod nisi porta. Sed turpis tincidunt id aliquet risus feugiat.\r\n</p>', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
