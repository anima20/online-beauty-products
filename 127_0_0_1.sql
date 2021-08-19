-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 07:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anima`
--
CREATE DATABASE IF NOT EXISTS `anima` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `anima`;
--
-- Database: `as`
--
CREATE DATABASE IF NOT EXISTS `as` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `as`;
--
-- Database: `beauty`
--
CREATE DATABASE IF NOT EXISTS `beauty` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `beauty`;

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `duration` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`duration`) VALUES
(12);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` varchar(200) NOT NULL,
  `p_cat` varchar(50) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_desc`, `p_cat`, `p_price`, `p_image`) VALUES
(1, 'Sandal soap', 'sandal essence', 'Body Care', 60, 'p1.jpg'),
(2, 'lakme eye linear', 'Eye Linear', 'Make Up', 100, 'p16.jpg'),
(3, 'body lotion', 'provides mostiurization', 'Moisturiser & Lotion', 150, 'lotion.jpg'),
(4, 'himalaya body lotion', 'body lotion', 'Moisturiser & Lotion', 200, 'p22.jpg'),
(5, 'nivea body lotion', 'body lotion provides mostiuratzation', 'Moisturiser & Lotion', 250, 'pr1.jpg'),
(6, 'fogg', 'fog deodrants', 'Deodrants', 100, 'p12.jpg'),
(7, 'engage', 'engage deodrants', 'Deodrants', 100, 'p15.jpg'),
(8, 'lakme mascara', 'mascara', 'Make Up', 250, 'pr35.png'),
(9, 'Mama Earth face wash', 'Mama Earth face wash', 'Face Care', 150, 'p7.jpg'),
(10, 'Neem face pack', 'Ayur Neem face pack', 'Face Care', 40, 'pr14.jpg'),
(11, 'shower gel', 'Nivea shower gel', 'Body Care', 100, 'p5.jpg'),
(13, 'lipstick', 'red lipstick', 'Make Up', 250, 'lipstick.gif'),
(14, 'wow aleo gel', 'Aleovera gel', 'Face Care', 100, 'p8.jpg'),
(15, 'Dove soap', 'creamy soap', 'Body Care', 40, 'pr4.jpg'),
(16, 'Honey soap', 'contains honey', 'Body Care', 20, 'p2.jpg'),
(17, 'Honey soap', 'lotus sunscreen', 'Body Care', 160, 'pr11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `u_name`, `email`, `number`, `password`) VALUES
(1, 'anima sinha', 'anima20sinha@gmail.com', '23456789', 'anima12345'),
(2, 'admin', '', '', 'admin'),
(3, 'suhani', 'suhna20@gmail.com', '1234567', 'suhani12345'),
(4, 'vishal', 'vish10@gmail.com', '123456', 'vish123'),
(5, 'suhani', 'suhani20sinha@gmail.com', '1234523445', 'anima1234'),
(6, 'ankit', 'ankit20kumar@gmail.com', '8271928988', 'ankit'),
(7, 'vishal kumar', 'vishal10@gmail.com', '8271928988', 'vish123'),
(8, 'rahul', 'rahul12@gmail.com', '1234567899', 'rahul123@'),
(9, 'anima sinha', 'sinha@gmail.com', '23456789', 'ani12345'),
(10, 'Deepa Sinha', 'deepa@gmail.com', '234567', 'ani12345'),
(11, 'anima sinha', 'animpa20sinha@gmail.com', '12', 'anima'),
(12, 'anima Kumari', 'ani@gmail.com', '23456789', 'anima');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `s_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`s_email`) VALUES
(''),
('anima0sinha@gmail.com'),
('anima20sinha@gmail.com'),
('animasinha@gmail.com'),
('dc'),
('tanvi'),
('wertg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Database: `demo`
--
CREATE DATABASE IF NOT EXISTS `demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `demo`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_desc`, `p_price`, `p_image`) VALUES
(1, 'ghjh', 'hgh', 1234, ''),
(2, 'dfg', 'gh', 2345, 'body_care.jpg'),
(3, 'sdfgh', 'srdfgh', 12, 'icon.jpg'),
(4, 'fgvh', 'thgjhj', 2, 'lipstick1.jpg'),
(5, 'hgvjbhkj', 'gvjhb', 234, 'icon.jpg'),
(6, 'gvjhbj', 'fgyhj', 5, 'nail1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `f_name`, `l_name`, `email`) VALUES
(1, 'Anima', 'Sinha', 'anima20sinha@gmail.com'),
(2, 'Anima', 'Sinha', 'anima2sinha@gmail.com'),
(3, 'tanvi', 'sinha', 'tanvi123@gmail.com'),
(6, 'anima', 'sinha', 'anima0sinha@gmail.com'),
(7, 'anima sinha', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `USN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `message_schedular`
--
CREATE DATABASE IF NOT EXISTS `message_schedular` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `message_schedular`;

-- --------------------------------------------------------

--
-- Table structure for table `tblactivitylog`
--

CREATE TABLE `tblactivitylog` (
  `s.no` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `activity_date` datetime NOT NULL,
  `activity_doer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontacts`
--

CREATE TABLE `tblcontacts` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `alternate_mobile_no` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `status_changed_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontacts`
--

INSERT INTO `tblcontacts` (`sno`, `name`, `mobile_no`, `date_of_birth`, `alternate_mobile_no`, `status`, `status_changed_date`) VALUES
(1, 'shivam', '7488788535', '1999-09-09', '9116247905', 0, '0000-00-00 00:00:00'),
(2, 'Sanyukta', '8789025567', '1966-12-31', '8897665544', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblgroup`
--

CREATE TABLE `tblgroup` (
  `group_id` int(20) NOT NULL,
  `group_name` varchar(40) NOT NULL,
  `group_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `group_created_by` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `status_changed_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgroup`
--

INSERT INTO `tblgroup` (`group_id`, `group_name`, `group_created_date`, `group_created_by`, `status`, `status_changed_date`) VALUES
(50, 'Innovation', '2020-08-03 23:08:46', 'Shivam', 1, '2020-08-03 23:08:46'),
(51, 'Sales', '2020-08-03 23:09:13', 'Shivam', 1, '2020-08-03 23:09:13'),
(53, 'huv', '2020-08-13 08:06:53', 'shivam', 1, '2020-08-13 08:06:53'),
(54, 'IIt bHU', '2020-08-15 19:01:56', 'shivam', 1, '2020-08-15 19:01:56'),
(55, 'Railway', '2020-08-20 20:27:49', 'Shivam', 1, '2020-08-20 20:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblgroupmember`
--

CREATE TABLE `tblgroupmember` (
  `member_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `alternate_mobile_no` varchar(10) DEFAULT 'Empty',
  `status` int(1) NOT NULL DEFAULT 1,
  `status_changed_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgroupmember`
--

INSERT INTO `tblgroupmember` (`member_id`, `name`, `mobile_no`, `date_of_birth`, `alternate_mobile_no`, `status`, `status_changed_date`) VALUES
(45, 'Rakesh', '89463546', '2020-07-02', '96759367', 1, '2020-07-23 15:01:25'),
(46, 'Kabir Singh kumar', '869999999', '2020-07-03', '806358375', 1, '2020-07-23 15:01:25'),
(47, 'Ram kumar', '8564980876', '2020-07-04', '8960542877', 1, '2020-07-23 15:01:25'),
(55, 'Shivam', '7898656469', '2020-07-08', '7664534999', 1, '2020-07-29 11:13:36'),
(63, 'ram', '9755447733', '2020-08-06', '6667771234', 1, '2020-08-12 21:45:27'),
(64, 'Shy', '6300124777', '2020-08-07', '8885554443', 1, '2020-08-13 07:54:41'),
(89, 'shivam kumar', '6877664874', '2020-08-06', '', 1, '2020-08-15 19:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblmembergroup`
--

CREATE TABLE `tblmembergroup` (
  `ID` bigint(10) NOT NULL,
  `MEMBER_ID` int(11) NOT NULL,
  `GROUP_ID` int(11) NOT NULL,
  `CREATE_DATE` date NOT NULL DEFAULT current_timestamp(),
  `STATUS` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmembergroup`
--

INSERT INTO `tblmembergroup` (`ID`, `MEMBER_ID`, `GROUP_ID`, `CREATE_DATE`, `STATUS`) VALUES
(41, 45, 50, '2020-08-03', 1),
(42, 46, 50, '2020-08-03', 1),
(43, 47, 50, '2020-08-03', 1),
(44, 55, 50, '2020-08-03', 1),
(51, 45, 51, '2020-08-03', 1),
(52, 46, 51, '2020-08-03', 1),
(53, 47, 51, '2020-08-03', 1),
(73, 45, 53, '2020-08-13', 1),
(76, 45, 54, '2020-08-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE `tblmessage` (
  `message_id` int(10) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `Schedule_time` time(6) NOT NULL,
  `schedule_date` date NOT NULL,
  `sender_mobile_no` varchar(10) NOT NULL,
  `message_send_status` int(1) NOT NULL DEFAULT 0,
  `status_changed_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmessage`
--

INSERT INTO `tblmessage` (`message_id`, `sender_name`, `message`, `Schedule_time`, `schedule_date`, `sender_mobile_no`, `message_send_status`, `status_changed_date`) VALUES
(55, 'admin', 'HII On 19th Aug I am sending this msg to group', '21:16:00.000000', '2020-08-19', '6300077745', 1, '2020-08-19 00:00:00'),
(56, 'admin', 'Hii', '21:30:00.000000', '2020-08-06', '6300077745', 0, '2020-08-20 20:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessagerecord`
--

CREATE TABLE `tblmessagerecord` (
  `S.No` int(10) NOT NULL,
  `MESSAGE_ID` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile_NO` varchar(10) NOT NULL,
  `Alt_Mobile_No` varchar(10) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmessagerecord`
--

INSERT INTO `tblmessagerecord` (`S.No`, `MESSAGE_ID`, `Name`, `Mobile_NO`, `Alt_Mobile_No`, `DOB`) VALUES
(43, 55, 'Raghav ', '789566576', '47547949', '2020-07-15'),
(44, 55, 'Soumya', '7957357678', '86759843', '2020-07-16'),
(45, 55, 'Rakesh', '89463546', '96759367', '2020-07-02'),
(46, 55, 'Kabir Singh kumar', '869999999', '806358375', '2020-07-03'),
(47, 55, 'Ram kumar', '8564980876', '8960542877', '2020-07-04'),
(48, 55, 'Shivam', '7898656469', '', '2020-07-08'),
(49, 56, 'Raghav ', '789566576', '47547949', '2020-07-15'),
(50, 56, 'Soumya', '7957357678', '86759843', '2020-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `sno` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date_of_addition` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'active =1 , deactive=0',
  `status_changed_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`sno`, `user_name`, `mobile_number`, `password`, `date_of_addition`, `status`, `status_changed_date`) VALUES
(1, 'Shivam', '7766534310', '9097705899', '2020-07-28 17:29:30', 0, '2020-07-28 17:29:30'),
(2, 'admin', '6300077745', 'admin', '2020-07-29 10:08:50', 1, '2020-07-29 10:08:50'),
(11, 'New User ', '7677331122', 'pass', '2020-08-18 19:28:42', 0, '2020-08-18 19:28:42'),
(12, 'Raghav', '7866334422', 'pass', '2020-08-20 10:27:48', 0, '2020-08-20 10:27:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivitylog`
--
ALTER TABLE `tblactivitylog`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `tblcontacts`
--
ALTER TABLE `tblcontacts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tblgroup`
--
ALTER TABLE `tblgroup`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_name` (`group_name`);

--
-- Indexes for table `tblgroupmember`
--
ALTER TABLE `tblgroupmember`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`,`alternate_mobile_no`),
  ADD UNIQUE KEY `alternate_mobile_no` (`alternate_mobile_no`);

--
-- Indexes for table `tblmembergroup`
--
ALTER TABLE `tblmembergroup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Member_foreign_key` (`MEMBER_ID`),
  ADD KEY `Group_Foreign_Key` (`GROUP_ID`);

--
-- Indexes for table `tblmessage`
--
ALTER TABLE `tblmessage`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tblmessagerecord`
--
ALTER TABLE `tblmessagerecord`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_name_2` (`user_name`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivitylog`
--
ALTER TABLE `tblactivitylog`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcontacts`
--
ALTER TABLE `tblcontacts`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblgroup`
--
ALTER TABLE `tblgroup`
  MODIFY `group_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tblgroupmember`
--
ALTER TABLE `tblgroupmember`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tblmembergroup`
--
ALTER TABLE `tblmembergroup`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tblmessage`
--
ALTER TABLE `tblmessage`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tblmessagerecord`
--
ALTER TABLE `tblmessagerecord`
  MODIFY `S.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblmembergroup`
--
ALTER TABLE `tblmembergroup`
  ADD CONSTRAINT `Group_Foreign_Key` FOREIGN KEY (`GROUP_ID`) REFERENCES `tblgroup` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Member_foreign_key` FOREIGN KEY (`MEMBER_ID`) REFERENCES `tblgroupmember` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';
-- Error reading data for table phpmyadmin.pma__tracking: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__tracking`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';
-- Error reading data for table phpmyadmin.pma__userconfig: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__userconfig`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
