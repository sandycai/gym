-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8806
-- Generation Time: 2017-04-24 13:12:21
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE `class` (
  `class_id` varchar(6) NOT NULL,
  `classname` varchar(10) NOT NULL,
  `type` varchar(11) NOT NULL,
  `size` int(6) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`class_id`, `classname`, `type`, `size`, `description`) VALUES
('001', 'S01', 'sport', 3, 'This is large sports class'),
('002', 'C02', 'swim', 1, 'This is small swim class'),
('004', 'S04', 'sports', 3, 'This is a sports class'),
('006', 'S06', 'swim', 3, 'This is a swim class'),
('009', 'C09', 'swim', 2, 'This is small swim class'),
('010', 'S10', 'spinning', 3, 'This is middle spinning class'),
('013', 'D13', 'spinning', 2, 'This is middle spinning class');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(6) NOT NULL,
  `name` varchar(15) NOT NULL,
  `type` varchar(5) NOT NULL DEFAULT 'adult',
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date_entered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `type`, `email`, `phone`, `date_entered`) VALUES
('C13', 'sandy', 'adult', '234243242@aa.com', '123548322', '2017-03-07'),
('C19', 'shirly', 'adult', 'shirly2345@gmail.com', '871239544', '2016-07-11'),
('C22', 'hope', 'child', '234243242@gmail.com', '872531324', '2017-04-09'),
('C30', 'Josh', 'adult', 'josh2017@163.com', '872531324', '2017-03-21'),
('C55', 'marry', 'adult', '333444@qq.com', '852146933', '2017-03-12'),
('C66', 'stale', 'child', '545stale@gmail.com', '879536624', '2017-03-07'),
('c77', 'Mary Lyng', 'Adult', 'mlyng@wit.ie', '0879956789', '2017-04-11');

-- --------------------------------------------------------

--
-- 表的结构 `dateofclass`
--

CREATE TABLE `dateofclass` (
  `ref_c_id` varchar(6) NOT NULL,
  `classdate` varchar(9) NOT NULL,
  `classtime` varchar(9) NOT NULL,
  `customer_id` varchar(6) NOT NULL,
  `class_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `dateofclass`
--

INSERT INTO `dateofclass` (`ref_c_id`, `classdate`, `classtime`, `customer_id`, `class_id`) VALUES
('1', 'Monday', 'Morning', 'C30', '009'),
('v11', 'Afternoon', 'Monday', 'C55', '001'),
('v2', 'Morning', 'Sunday', 'C55', '001'),
('V22', 'Evening', 'Friday', 'C13', '001'),
('v33', 'Afternoon', 'Monday', 'C22', '001'),
('V6', 'Morning', 'Tuesday', 'C66', '013');

-- --------------------------------------------------------

--
-- 表的结构 `instructor`
--

CREATE TABLE `instructor` (
  `staff_id` varchar(6) NOT NULL,
  `certification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
  `staff_id` varchar(6) NOT NULL,
  `title` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `membership`
--

CREATE TABLE `membership` (
  `membership_id` varchar(6) NOT NULL,
  `leavel` varchar(15) NOT NULL,
  `length` varchar(15) NOT NULL,
  `expire_date` date NOT NULL,
  `create_date` date NOT NULL,
  `customer_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `spinningclass`
--

CREATE TABLE `spinningclass` (
  `bike_id` varchar(6) NOT NULL,
  `bike_number` int(6) NOT NULL,
  `class_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `sportsclass`
--

CREATE TABLE `sportsclass` (
  `clothe_requirement` varchar(10) NOT NULL,
  `equipment_type` varchar(10) NOT NULL,
  `class_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(6) NOT NULL,
  `name` varchar(15) NOT NULL,
  `dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `store`
--

CREATE TABLE `store` (
  `lock_id` varchar(6) NOT NULL,
  `lock_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `swimclass`
--

CREATE TABLE `swimclass` (
  `pool_id` varchar(6) NOT NULL,
  `lifeserver_no` decimal(10,0) NOT NULL,
  `size` int(6) NOT NULL,
  `level` varchar(6) NOT NULL,
  `class_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `username` char(5) NOT NULL DEFAULT 'admin',
  `pass` char(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`username`, `pass`) VALUES
('admin', 'a42cbbec078e2169997dbf3c60474c7dfa20ff09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dateofclass`
--
ALTER TABLE `dateofclass`
  ADD PRIMARY KEY (`ref_c_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `spinningclass`
--
ALTER TABLE `spinningclass`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `sportsclass`
--
ALTER TABLE `sportsclass`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`lock_id`);

--
-- Indexes for table `swimclass`
--
ALTER TABLE `swimclass`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- 限制导出的表
--

--
-- 限制表 `dateofclass`
--
ALTER TABLE `dateofclass`
  ADD CONSTRAINT `class_fk` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `staff_fk2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `staff_fk1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `customer_fk2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `spinningclass`
--
ALTER TABLE `spinningclass`
  ADD CONSTRAINT `class_fk1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `sportsclass`
--
ALTER TABLE `sportsclass`
  ADD CONSTRAINT `class_fk2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- 限制表 `swimclass`
--
ALTER TABLE `swimclass`
  ADD CONSTRAINT `class_fk3` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
