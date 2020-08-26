-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 12:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yatfullstack112`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `tags` text NOT NULL,
  `cat` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `img`, `tags`, `cat`, `created_at`) VALUES
(1, 'How To learn Docker', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique sollicitudin nibh sit amet commodo nulla. Mauris a diam maecenas sed enim. Blandit cursus risus at ultrices mi. Dignissim sodales ut eu sem integer. Erat imperdiet sed euismod nisi. Dictumst quisque sagittis purus sit. Ac tortor dignissim convallis aenean. Felis bibendum ut tristique et egestas quis ipsum. Magna etiam tempor orci eu lobortis elementum nibh tellus. Interdum consectetur libero id faucibus nisl tincidunt eget nullam non. Neque gravida in fermentum et sollicitudin. Pharetra magna ac placerat vestibulum lectus mauris ultrices.\r\n\r\nRhoncus dolor purus non enim praesent elementum facilisis leo. Rhoncus urna neque viverra justo nec ultrices dui sapien. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Risus commodo viverra maecenas accumsan. Senectus et netus et malesuada fames ac turpis egestas. Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. Orci a scelerisque purus semper. Facilisis volutpat est velit egestas dui. Egestas integer eget aliquet nibh. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Habitant morbi tristique senectus et netus et malesuada fames. Adipiscing bibendum est ultricies integer quis auctor. Mauris a diam maecenas sed enim ut. Lorem donec massa sapien faucibus et molestie ac.\r\n\r\nPharetra convallis posuere morbi leo urna. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Ut placerat orci nulla pellentesque dignissim enim. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Ut venenatis tellus in metus vulputate eu. Id semper risus in hendrerit. Proin sed libero enim sed faucibus turpis in eu. Magna fringilla urna porttitor rhoncus dolor purus non enim. Lectus quam id leo in vitae. Dictumst quisque sagittis purus sit amet volutpat consequat mauris. Turpis massa tincidunt dui ut. Diam volutpat commodo sed egestas egestas. Quis hendrerit dolor magna eget est lorem. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Massa id neque aliquam vestibulum. Enim facilisis gravida neque convallis a cras semper auctor. Auctor elit sed vulputate mi sit amet mauris commodo. Quam quisque id diam vel quam elementum pulvinar etiam.', 'Mohamed Hanafy', 'img/docker.png', 'devops,tech.technology,docker,google', 'devops', '2020-08-17 11:20:00'),
(2, 'How To Learn Hacking', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique sollicitudin nibh sit amet commodo nulla. Mauris a diam maecenas sed enim. Blandit cursus risus at ultrices mi. Dignissim sodales ut eu sem integer. Erat imperdiet sed euismod nisi. Dictumst quisque sagittis purus sit. Ac tortor dignissim convallis aenean. Felis bibendum ut tristique et egestas quis ipsum. Magna etiam tempor orci eu lobortis elementum nibh tellus. Interdum consectetur libero id faucibus nisl tincidunt eget nullam non. Neque gravida in fermentum et sollicitudin. Pharetra magna ac placerat vestibulum lectus mauris ultrices.\r\n\r\nRhoncus dolor purus non enim praesent elementum facilisis leo. Rhoncus urna neque viverra justo nec ultrices dui sapien. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Risus commodo viverra maecenas accumsan. Senectus et netus et malesuada fames ac turpis egestas. Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. Orci a scelerisque purus semper. Facilisis volutpat est velit egestas dui. Egestas integer eget aliquet nibh. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Habitant morbi tristique senectus et netus et malesuada fames. Adipiscing bibendum est ultricies integer quis auctor. Mauris a diam maecenas sed enim ut. Lorem donec massa sapien faucibus et molestie ac.\r\n\r\nPharetra convallis posuere morbi leo urna. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Ut placerat orci nulla pellentesque dignissim enim. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Ut venenatis tellus in metus vulputate eu. Id semper risus in hendrerit. Proin sed libero enim sed faucibus turpis in eu. Magna fringilla urna porttitor rhoncus dolor purus non enim. Lectus quam id leo in vitae. Dictumst quisque sagittis purus sit amet volutpat consequat mauris. Turpis massa tincidunt dui ut. Diam volutpat commodo sed egestas egestas. Quis hendrerit dolor magna eget est lorem. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Massa id neque aliquam vestibulum. Enim facilisis gravida neque convallis a cras semper auctor. Auctor elit sed vulputate mi sit amet mauris commodo. Quam quisque id diam vel quam elementum pulvinar etiam.', 'Mohamed Hanafy', 'img/hacker.webp', 'hacker,hack,tech,kali', 'hacking', '2020-08-17 06:07:00'),
(4, 'How To learn Css', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique sollicitudin nibh sit amet commodo nulla. Mauris a diam maecenas sed enim. Blandit cursus risus at ultrices mi. Dignissim sodales ut eu sem integer. Erat imperdiet sed euismod nisi. Dictumst quisque sagittis purus sit. Ac tortor dignissim convallis aenean. Felis bibendum ut tristique et egestas quis ipsum. Magna etiam tempor orci eu lobortis elementum nibh tellus. Interdum consectetur libero id faucibus nisl tincidunt eget nullam non. Neque gravida in fermentum et sollicitudin. Pharetra magna ac placerat vestibulum lectus mauris ultrices.\r\n\r\nRhoncus dolor purus non enim praesent elementum facilisis leo. Rhoncus urna neque viverra justo nec ultrices dui sapien. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Risus commodo viverra maecenas accumsan. Senectus et netus et malesuada fames ac turpis egestas. Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. Orci a scelerisque purus semper. Facilisis volutpat est velit egestas dui. Egestas integer eget aliquet nibh. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Habitant morbi tristique senectus et netus et malesuada fames. Adipiscing bibendum est ultricies integer quis auctor. Mauris a diam maecenas sed enim ut. Lorem donec massa sapien faucibus et molestie ac.\r\n\r\nPharetra convallis posuere morbi leo urna. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Ut placerat orci nulla pellentesque dignissim enim. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Ut venenatis tellus in metus vulputate eu. Id semper risus in hendrerit. Proin sed libero enim sed faucibus turpis in eu. Magna fringilla urna porttitor rhoncus dolor purus non enim. Lectus quam id leo in vitae. Dictumst quisque sagittis purus sit amet volutpat consequat mauris. Turpis massa tincidunt dui ut. Diam volutpat commodo sed egestas egestas. Quis hendrerit dolor magna eget est lorem. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Massa id neque aliquam vestibulum. Enim facilisis gravida neque convallis a cras semper auctor. Auctor elit sed vulputate mi sit amet mauris commodo. Quam quisque id diam vel quam elementum pulvinar etiam.', 'Mohamed Hanafy', 'img/css.webp', 'css,web,design', 'webs', '2020-08-10 04:09:00'),
(5, 'Create Cms from scratch', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Mohamed Hanafy', 'admin/img/task.png', 'cms,php,create,scratch', 'php', '2020-08-26 12:05:00'),
(7, 'this test for update', '                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                        ', 'Mohamed Hanafy', 'admin/img/screencapture-classroom-udacity-courses-', 'cms,php,create,scratch', 'test', '2020-08-26 12:10:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
