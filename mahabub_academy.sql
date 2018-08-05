-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 08:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahabub_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `role` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `role`, `image`, `email`, `fname`, `lname`, `gender`, `date`, `password`) VALUES
(17, 2, 'MahabubAcademy_480_1527940436.jpg', 'md@gmail.com', 'Mohmmad', 'Ikbal', 'male', '2018-06-12', '8b1a9953c4611296a827abf8c47804d7 '),
(18, 2, 'MahabubAcademy_749_1531131293.jpg', 'nayon@gmail.com', 'Md', 'Nayon', 'male', '2017-10-11', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `student_upload`
--

CREATE TABLE `student_upload` (
  `id` int(255) NOT NULL,
  `video_title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `video_category` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sub_video_category` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `onwer_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `onwer_image` varchar(255) NOT NULL,
  `thumbnail_image` varchar(255) NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_upload`
--

INSERT INTO `student_upload` (`id`, `video_title`, `video_category`, `sub_video_category`, `video_description`, `video_url`, `onwer_name`, `onwer_image`, `thumbnail_image`, `time`) VALUES
(1, 'Religion ', 'Primary', 'Religion', 'Beginner', '7NL87ZZNI8', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', '', '13-07-18'),
(3, 'Art', 'Primary', 'Drawing', 'Beginner', 'x4zz2yH1bLE', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_thumbnail_image_59_1531547277.jpg', '14-07-18'),
(4, 'Art', 'Primary', 'Drawing', 'Beginner', 'x4zz2yH1bLE', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_thumbnail_image_335_1531547343.jpg', '14-07-18'),
(5, 'Art', 'Primary', 'Drawing', 'English', 'x4zz2yH1bLE', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_thumbnail_image_734_1531547425.jpg', '14-07-18'),
(6, 'Art', 'Primary', 'Drawing', 'Beginner', 'x4zz2yH1bLE', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_10_1531548018.jpg', '14-07-18'),
(7, 'Art', 'Primary', 'Drawing', 'Beginner', 'KmkB7OVO_M', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_112_1531548402.jpg', '14-07-18'),
(8, 'Art', 'Primary', 'Drawing', 'Beginner', 'KmkB7OVO_M', 'Nayon', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_449_1531548421.jpg', '14-07-18'),
(9, 'Bangla', 'Primary', 'Drawing', 'Beginner', 'https://www.youtube.com/watch?v=tKmkB7OVO_M', 'nayon@gmail.com', 'MahabubAcademy_749_1531131293.jpg', 'MahabubAcademy_thumbnail_image_589_1531559519.jpg', '14-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(255) NOT NULL,
  `sub_video_category` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_video_category`, `category_no`) VALUES
(34, 'Drawing', 18),
(35, 'Religion', 18),
(36, 'Child care', 18),
(37, 'Science for child', 18),
(38, 'Entertainment for child', 18),
(39, 'Physical education', 18),
(40, 'Vocabulary', 18),
(41, 'Physics', 19),
(42, 'Chemistry', 19),
(43, 'Biology', 19),
(44, 'General math', 19),
(45, 'Higher math', 19),
(46, 'Social science', 19),
(47, 'Accounting', 20),
(48, 'Marketing', 20),
(49, 'Management', 20),
(50, 'Banking and insurance', 20),
(51, 'Economy', 20),
(52, 'History', 21),
(53, 'Geography and Environment', 21),
(54, 'Domestic Science', 21),
(56, 'Social work', 21),
(57, 'Agricultural', 21),
(58, 'Bangla', 18),
(59, 'English', 18),
(60, 'Math', 18),
(61, 'Social education', 18),
(62, 'Science', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `image`, `fname`, `lname`, `gender`, `date`, `password`) VALUES
(10, 'Ikbal', 'mdikbal24@gmail.com', 1, 'MahabubAcademy_415_1531286490.jpg', 'Mohammad', 'Ikbal', 'male', '11-07-18', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `video_category`
--

CREATE TABLE `video_category` (
  `id` int(255) NOT NULL,
  `video_categoris` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_category`
--

INSERT INTO `video_category` (`id`, `video_categoris`) VALUES
(18, 'Primary'),
(19, 'Science'),
(20, 'Commerce'),
(21, 'Arts');

-- --------------------------------------------------------

--
-- Table structure for table `video_list`
--

CREATE TABLE `video_list` (
  `id` int(255) NOT NULL,
  `video_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video_category` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sub_video_category` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `onwer_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `onwer_image` varchar(255) NOT NULL,
  `thumbnail_image` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_list`
--

INSERT INTO `video_list` (`id`, `video_title`, `video_category`, `sub_video_category`, `video_description`, `video_url`, `onwer_name`, `onwer_image`, `thumbnail_image`, `time`) VALUES
(27, 'Art', 'Primary', 'Drawing', 'Beginner', 'https://www.youtube.com/watch?v=x4zz2yH1bLE', 'mdikbal24@gmail.com', 'MahabubAcademy_415_1531286490.jpg', 'MahabubAcademy_thumbnail_image_702_1531546474.jpg', '14-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_upload`
--
ALTER TABLE `student_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_category`
--
ALTER TABLE `video_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_list`
--
ALTER TABLE `video_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `student_upload`
--
ALTER TABLE `student_upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `video_category`
--
ALTER TABLE `video_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `video_list`
--
ALTER TABLE `video_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
