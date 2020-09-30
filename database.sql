-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 06:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `ccredit` varchar(20) NOT NULL,
  `credit` int(15) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `ccredit`, `credit`, `total`) VALUES
('uid1', 'soundarya', 'soundarya.17cs168@cambridge.edu.in', '732', 100, 832),
('uid10', 'sohan', 'sohan.17cs176@cambridge.edu.in', '721', 230, 951),
('uid11', 'shwetha', 'shwetha.17cs187@cambridge.edu.in', '712', 120, 832),
('uid12', 'bhumika', 'bhumika.17cs077@cambridge.edu.in', '809', 23, 832),
('uid13', 'akshay', 'akshay.17cs012@cambridge.edu.in', '6183', 120, 6303),
('uid14', 'navneet', 'navneet.17cs105@cambridge.edu.in', '532', 300, 832),
('uid15', 'nishant', 'nishant.17me064@cambridge.edu.in', '4100', 200, 4300),
('uid2', 'neha', 'neha.17cs071@cambridge.edu.in', '1900', 2356, 4256),
('uid3', 'sahana', 'sahana.17cs136@cambridge.edu.in', '332', 500, 832),
('uid4', 'ankitha', 'ankitha.17cs034@cambridge.edu.in', '1000', 0, 1000),
('uid5', 'abhishek', 'abhishek.17cs005@cambridge.edu.in', '1700', 200, 1900),
('uid6', 'sneha', 'sneha.17cs130@cambridge.edu.in', '5400', 250, 5650),
('uid7', 'manish', 'manish.17cs120@cambridge.edu.in', '3200', 0, 3200),
('uid8', 'rohan', 'rohan.17cs149@cambridge.edu.in', '3400', 200, 3600),
('uid9', 'shravanthi', 'shravanthi.17cs165@cambridge.edu.in', '832', 120, 952);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);
COMMIT;
