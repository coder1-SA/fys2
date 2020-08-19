-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 12:04 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fys1`
--
CREATE DATABASE IF NOT EXISTS `fys1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fys1`;




--
-- Dumping data for table `2019_2020_pn`
--
-- --------------------------------------------------------

--
-- Table structure for table `dept_master`
--

CREATE TABLE `dept_master` (
  `slno` int(11) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `dept_abr` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept_master`
--

INSERT INTO `dept_master` (`slno`, `dept`, `dept_abr`) VALUES
(1, 'Bio-Technology', 'BTE'),
(2, 'Chemical Engineering', 'CHE'),
(3, 'Civil Engineering', 'CIV'),
(4, 'Computer Science & Engineering', 'CSE'),
(5, 'Electrical & Electronics Engineering', 'EEE'),
(6, 'Electronics & Communications Engineering', 'ECE'),
(7, 'Industrial Engineering & Mgmt', 'IEM'),
(8, 'Information Science & Engineering', 'ISE'),
(9, 'Electronics and Instrumentation Engineering', 'EIE'),
(10, 'Mechanical Engineering', 'MCE'),
(11, 'Medical Electronics ', 'MLE'),
(12, 'Telecommunication Engineering', 'TCE'),
(13, 'Aerospace Engineering', 'ASE');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `grp_name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `smob` varchar(10) NOT NULL,
  `pmob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_master`
--

CREATE TABLE `stu_master` (
  `slno` int(11) NOT NULL,
  `year` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `section` varchar(5) DEFAULT NULL,
  `usn` varchar(10) DEFAULT NULL,
  `smob` varchar(15) DEFAULT NULL,
  `pmob` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dept` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stu_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `slno` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_code` varchar(12) NOT NULL,
  `abr` varchar(3) NOT NULL,
  `credits` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`slno`, `sub_name`, `sub_code`, `abr`, `credits`) VALUES
(1, 'Engineering Mathematics 1', '', 'MA1', 4),
(2, 'Applied Physics', '', 'PHY', 5),
(3, 'Elements of Electronics Engineering', '', 'EEE', 3),
(4, 'Elements of Mechanical Engineering', '', 'EME', 4),
(5, 'C Programming', '', 'CCP', 4),
(6, 'Engineering Mathematics 2', '', 'MA2', 4),
(7, 'Elements of Engineering Drawing', '', 'EED', 3),
(8, 'Engineering Mechanics', '', 'ENM', 4),
(9, 'Elements of Electrical Engineering', '', 'BEE', 4),
(10, 'Engineering Chemistry', '', 'CHY', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`username`, `password`, `role`) VALUES
('admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2017_18_ca`
--
ALTER TABLE `2017_18_ca`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cb`
--
ALTER TABLE `2017_18_cb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cc`
--
ALTER TABLE `2017_18_cc`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cd`
--
ALTER TABLE `2017_18_cd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_ce`
--
ALTER TABLE `2017_18_ce`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cf`
--
ALTER TABLE `2017_18_cf`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cg`
--
ALTER TABLE `2017_18_cg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_ch`
--
ALTER TABLE `2017_18_ch`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cj`
--
ALTER TABLE `2017_18_cj`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_ck`
--
ALTER TABLE `2017_18_ck`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_cl`
--
ALTER TABLE `2017_18_cl`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pa`
--
ALTER TABLE `2017_18_pa`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pb`
--
ALTER TABLE `2017_18_pb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pc`
--
ALTER TABLE `2017_18_pc`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pd`
--
ALTER TABLE `2017_18_pd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pe`
--
ALTER TABLE `2017_18_pe`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pf`
--
ALTER TABLE `2017_18_pf`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pg`
--
ALTER TABLE `2017_18_pg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_ph`
--
ALTER TABLE `2017_18_ph`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pj`
--
ALTER TABLE `2017_18_pj`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pk`
--
ALTER TABLE `2017_18_pk`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2017_18_pl`
--
ALTER TABLE `2017_18_pl`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_10_cd2`
--
ALTER TABLE `2018_10_cd2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ca`
--
ALTER TABLE `2018_19_ca`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ca2`
--
ALTER TABLE `2018_19_ca2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cb`
--
ALTER TABLE `2018_19_cb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cb2`
--
ALTER TABLE `2018_19_cb2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cc`
--
ALTER TABLE `2018_19_cc`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cc2`
--
ALTER TABLE `2018_19_cc2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cd`
--
ALTER TABLE `2018_19_cd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cd2`
--
ALTER TABLE `2018_19_cd2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ce`
--
ALTER TABLE `2018_19_ce`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ce2`
--
ALTER TABLE `2018_19_ce2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cf`
--
ALTER TABLE `2018_19_cf`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cf2`
--
ALTER TABLE `2018_19_cf2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cg`
--
ALTER TABLE `2018_19_cg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cg2`
--
ALTER TABLE `2018_19_cg2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ch`
--
ALTER TABLE `2018_19_ch`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ch2`
--
ALTER TABLE `2018_19_ch2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ch_2`
--
ALTER TABLE `2018_19_ch_2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cj`
--
ALTER TABLE `2018_19_cj`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cj2`
--
ALTER TABLE `2018_19_cj2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ck`
--
ALTER TABLE `2018_19_ck`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ck2`
--
ALTER TABLE `2018_19_ck2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cl`
--
ALTER TABLE `2018_19_cl`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cl2`
--
ALTER TABLE `2018_19_cl2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cm`
--
ALTER TABLE `2018_19_cm`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cm2`
--
ALTER TABLE `2018_19_cm2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_cn`
--
ALTER TABLE `2018_19_cn`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pa`
--
ALTER TABLE `2018_19_pa`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pa2`
--
ALTER TABLE `2018_19_pa2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pa2sem`
--
ALTER TABLE `2018_19_pa2sem`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pa99`
--
ALTER TABLE `2018_19_pa99`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pb`
--
ALTER TABLE `2018_19_pb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pb2`
--
ALTER TABLE `2018_19_pb2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pb2sem`
--
ALTER TABLE `2018_19_pb2sem`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pc`
--
ALTER TABLE `2018_19_pc`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pc2`
--
ALTER TABLE `2018_19_pc2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pc2sem`
--
ALTER TABLE `2018_19_pc2sem`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pd`
--
ALTER TABLE `2018_19_pd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pd2`
--
ALTER TABLE `2018_19_pd2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pe`
--
ALTER TABLE `2018_19_pe`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pe2`
--
ALTER TABLE `2018_19_pe2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pf`
--
ALTER TABLE `2018_19_pf`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pf2`
--
ALTER TABLE `2018_19_pf2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pg`
--
ALTER TABLE `2018_19_pg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pg2`
--
ALTER TABLE `2018_19_pg2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ph`
--
ALTER TABLE `2018_19_ph`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_ph2`
--
ALTER TABLE `2018_19_ph2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pj`
--
ALTER TABLE `2018_19_pj`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pj2`
--
ALTER TABLE `2018_19_pj2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pk`
--
ALTER TABLE `2018_19_pk`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pk2`
--
ALTER TABLE `2018_19_pk2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pl`
--
ALTER TABLE `2018_19_pl`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pl2`
--
ALTER TABLE `2018_19_pl2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pm`
--
ALTER TABLE `2018_19_pm`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pm2`
--
ALTER TABLE `2018_19_pm2`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2018_19_pn`
--
ALTER TABLE `2018_19_pn`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_ca`
--
ALTER TABLE `2019_2020_ca`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cb`
--
ALTER TABLE `2019_2020_cb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cc`
--
ALTER TABLE `2019_2020_cc`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cd`
--
ALTER TABLE `2019_2020_cd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_ce`
--
ALTER TABLE `2019_2020_ce`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cf`
--
ALTER TABLE `2019_2020_cf`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cg`
--
ALTER TABLE `2019_2020_cg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_ch`
--
ALTER TABLE `2019_2020_ch`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cj`
--
ALTER TABLE `2019_2020_cj`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_ck`
--
ALTER TABLE `2019_2020_ck`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cl`
--
ALTER TABLE `2019_2020_cl`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cm`
--
ALTER TABLE `2019_2020_cm`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_cn`
--
ALTER TABLE `2019_2020_cn`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pa`
--
ALTER TABLE `2019_2020_pa`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pb`
--
ALTER TABLE `2019_2020_pb`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pc`
--
ALTER TABLE `2019_2020_pc`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pd`
--
ALTER TABLE `2019_2020_pd`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pe`
--
ALTER TABLE `2019_2020_pe`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pf`
--
ALTER TABLE `2019_2020_pf`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pg`
--
ALTER TABLE `2019_2020_pg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_ph`
--
ALTER TABLE `2019_2020_ph`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pj`
--
ALTER TABLE `2019_2020_pj`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pk`
--
ALTER TABLE `2019_2020_pk`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pl`
--
ALTER TABLE `2019_2020_pl`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pm`
--
ALTER TABLE `2019_2020_pm`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `2019_2020_pn`
--
ALTER TABLE `2019_2020_pn`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `dept_master`
--
ALTER TABLE `dept_master`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `stu_master`
--
ALTER TABLE `stu_master`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2017_18_ca`
--
ALTER TABLE `2017_18_ca`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=864;

--
-- AUTO_INCREMENT for table `2017_18_cb`
--
ALTER TABLE `2017_18_cb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=976;

--
-- AUTO_INCREMENT for table `2017_18_cc`
--
ALTER TABLE `2017_18_cc`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=960;

--
-- AUTO_INCREMENT for table `2017_18_cd`
--
ALTER TABLE `2017_18_cd`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2449;

--
-- AUTO_INCREMENT for table `2017_18_ce`
--
ALTER TABLE `2017_18_ce`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=975;

--
-- AUTO_INCREMENT for table `2017_18_cf`
--
ALTER TABLE `2017_18_cf`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `2017_18_cg`
--
ALTER TABLE `2017_18_cg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=960;

--
-- AUTO_INCREMENT for table `2017_18_ch`
--
ALTER TABLE `2017_18_ch`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;

--
-- AUTO_INCREMENT for table `2017_18_cj`
--
ALTER TABLE `2017_18_cj`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;

--
-- AUTO_INCREMENT for table `2017_18_ck`
--
ALTER TABLE `2017_18_ck`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=928;

--
-- AUTO_INCREMENT for table `2017_18_cl`
--
ALTER TABLE `2017_18_cl`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=849;

--
-- AUTO_INCREMENT for table `2017_18_pa`
--
ALTER TABLE `2017_18_pa`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1040;

--
-- AUTO_INCREMENT for table `2017_18_pb`
--
ALTER TABLE `2017_18_pb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1248;

--
-- AUTO_INCREMENT for table `2017_18_pc`
--
ALTER TABLE `2017_18_pc`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1152;

--
-- AUTO_INCREMENT for table `2017_18_pd`
--
ALTER TABLE `2017_18_pd`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;

--
-- AUTO_INCREMENT for table `2017_18_pe`
--
ALTER TABLE `2017_18_pe`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;

--
-- AUTO_INCREMENT for table `2017_18_pf`
--
ALTER TABLE `2017_18_pf`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1041;

--
-- AUTO_INCREMENT for table `2017_18_pg`
--
ALTER TABLE `2017_18_pg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `2017_18_ph`
--
ALTER TABLE `2017_18_ph`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;

--
-- AUTO_INCREMENT for table `2017_18_pj`
--
ALTER TABLE `2017_18_pj`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `2017_18_pk`
--
ALTER TABLE `2017_18_pk`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1104;

--
-- AUTO_INCREMENT for table `2017_18_pl`
--
ALTER TABLE `2017_18_pl`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1441;

--
-- AUTO_INCREMENT for table `2018_10_cd2`
--
ALTER TABLE `2018_10_cd2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `2018_19_ca`
--
ALTER TABLE `2018_19_ca`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=741;

--
-- AUTO_INCREMENT for table `2018_19_ca2`
--
ALTER TABLE `2018_19_ca2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2018_19_cb`
--
ALTER TABLE `2018_19_cb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_cb2`
--
ALTER TABLE `2018_19_cb2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;

--
-- AUTO_INCREMENT for table `2018_19_cc`
--
ALTER TABLE `2018_19_cc`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_cc2`
--
ALTER TABLE `2018_19_cc2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_cd`
--
ALTER TABLE `2018_19_cd`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2018_19_cd2`
--
ALTER TABLE `2018_19_cd2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `2018_19_ce`
--
ALTER TABLE `2018_19_ce`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `2018_19_ce2`
--
ALTER TABLE `2018_19_ce2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=621;

--
-- AUTO_INCREMENT for table `2018_19_cf`
--
ALTER TABLE `2018_19_cf`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2018_19_cf2`
--
ALTER TABLE `2018_19_cf2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=691;

--
-- AUTO_INCREMENT for table `2018_19_cg`
--
ALTER TABLE `2018_19_cg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;

--
-- AUTO_INCREMENT for table `2018_19_cg2`
--
ALTER TABLE `2018_19_cg2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_ch`
--
ALTER TABLE `2018_19_ch`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT for table `2018_19_ch2`
--
ALTER TABLE `2018_19_ch2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2018_19_ch_2`
--
ALTER TABLE `2018_19_ch_2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_cj`
--
ALTER TABLE `2018_19_cj`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=771;

--
-- AUTO_INCREMENT for table `2018_19_cj2`
--
ALTER TABLE `2018_19_cj2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_ck`
--
ALTER TABLE `2018_19_ck`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_ck2`
--
ALTER TABLE `2018_19_ck2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=701;

--
-- AUTO_INCREMENT for table `2018_19_cl`
--
ALTER TABLE `2018_19_cl`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2018_19_cl2`
--
ALTER TABLE `2018_19_cl2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=691;

--
-- AUTO_INCREMENT for table `2018_19_cm`
--
ALTER TABLE `2018_19_cm`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=791;

--
-- AUTO_INCREMENT for table `2018_19_cm2`
--
ALTER TABLE `2018_19_cm2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT for table `2018_19_cn`
--
ALTER TABLE `2018_19_cn`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=761;

--
-- AUTO_INCREMENT for table `2018_19_pa`
--
ALTER TABLE `2018_19_pa`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=660;

--
-- AUTO_INCREMENT for table `2018_19_pa2`
--
ALTER TABLE `2018_19_pa2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_pa2sem`
--
ALTER TABLE `2018_19_pa2sem`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2018_19_pa99`
--
ALTER TABLE `2018_19_pa99`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_pb`
--
ALTER TABLE `2018_19_pb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=611;

--
-- AUTO_INCREMENT for table `2018_19_pb2`
--
ALTER TABLE `2018_19_pb2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_pb2sem`
--
ALTER TABLE `2018_19_pb2sem`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2018_19_pc`
--
ALTER TABLE `2018_19_pc`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `2018_19_pc2`
--
ALTER TABLE `2018_19_pc2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `2018_19_pc2sem`
--
ALTER TABLE `2018_19_pc2sem`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2018_19_pd`
--
ALTER TABLE `2018_19_pd`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=791;

--
-- AUTO_INCREMENT for table `2018_19_pd2`
--
ALTER TABLE `2018_19_pd2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=791;

--
-- AUTO_INCREMENT for table `2018_19_pe`
--
ALTER TABLE `2018_19_pe`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=650;

--
-- AUTO_INCREMENT for table `2018_19_pe2`
--
ALTER TABLE `2018_19_pe2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_pf`
--
ALTER TABLE `2018_19_pf`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=629;

--
-- AUTO_INCREMENT for table `2018_19_pf2`
--
ALTER TABLE `2018_19_pf2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `2018_19_pg`
--
ALTER TABLE `2018_19_pg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;

--
-- AUTO_INCREMENT for table `2018_19_pg2`
--
ALTER TABLE `2018_19_pg2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `2018_19_ph`
--
ALTER TABLE `2018_19_ph`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=691;

--
-- AUTO_INCREMENT for table `2018_19_ph2`
--
ALTER TABLE `2018_19_ph2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_pj`
--
ALTER TABLE `2018_19_pj`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_pj2`
--
ALTER TABLE `2018_19_pj2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `2018_19_pk`
--
ALTER TABLE `2018_19_pk`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `2018_19_pk2`
--
ALTER TABLE `2018_19_pk2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_pl`
--
ALTER TABLE `2018_19_pl`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `2018_19_pl2`
--
ALTER TABLE `2018_19_pl2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2018_19_pm`
--
ALTER TABLE `2018_19_pm`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1391;

--
-- AUTO_INCREMENT for table `2018_19_pm2`
--
ALTER TABLE `2018_19_pm2`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=871;

--
-- AUTO_INCREMENT for table `2018_19_pn`
--
ALTER TABLE `2018_19_pn`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- AUTO_INCREMENT for table `2019_2020_ca`
--
ALTER TABLE `2019_2020_ca`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2019_2020_cb`
--
ALTER TABLE `2019_2020_cb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT for table `2019_2020_cc`
--
ALTER TABLE `2019_2020_cc`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT for table `2019_2020_cd`
--
ALTER TABLE `2019_2020_cd`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=701;

--
-- AUTO_INCREMENT for table `2019_2020_ce`
--
ALTER TABLE `2019_2020_ce`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=701;

--
-- AUTO_INCREMENT for table `2019_2020_cf`
--
ALTER TABLE `2019_2020_cf`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=851;

--
-- AUTO_INCREMENT for table `2019_2020_cg`
--
ALTER TABLE `2019_2020_cg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2019_2020_ch`
--
ALTER TABLE `2019_2020_ch`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;

--
-- AUTO_INCREMENT for table `2019_2020_cj`
--
ALTER TABLE `2019_2020_cj`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `2019_2020_ck`
--
ALTER TABLE `2019_2020_ck`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=671;

--
-- AUTO_INCREMENT for table `2019_2020_cl`
--
ALTER TABLE `2019_2020_cl`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=671;

--
-- AUTO_INCREMENT for table `2019_2020_cm`
--
ALTER TABLE `2019_2020_cm`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `2019_2020_cn`
--
ALTER TABLE `2019_2020_cn`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=771;

--
-- AUTO_INCREMENT for table `2019_2020_pa`
--
ALTER TABLE `2019_2020_pa`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=611;

--
-- AUTO_INCREMENT for table `2019_2020_pb`
--
ALTER TABLE `2019_2020_pb`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `2019_2020_pc`
--
ALTER TABLE `2019_2020_pc`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `2019_2020_pd`
--
ALTER TABLE `2019_2020_pd`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=621;

--
-- AUTO_INCREMENT for table `2019_2020_pe`
--
ALTER TABLE `2019_2020_pe`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `2019_2020_pf`
--
ALTER TABLE `2019_2020_pf`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=551;

--
-- AUTO_INCREMENT for table `2019_2020_pg`
--
ALTER TABLE `2019_2020_pg`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=571;

--
-- AUTO_INCREMENT for table `2019_2020_ph`
--
ALTER TABLE `2019_2020_ph`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=611;

--
-- AUTO_INCREMENT for table `2019_2020_pj`
--
ALTER TABLE `2019_2020_pj`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=571;

--
-- AUTO_INCREMENT for table `2019_2020_pk`
--
ALTER TABLE `2019_2020_pk`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `2019_2020_pl`
--
ALTER TABLE `2019_2020_pl`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;

--
-- AUTO_INCREMENT for table `2019_2020_pm`
--
ALTER TABLE `2019_2020_pm`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT for table `2019_2020_pn`
--
ALTER TABLE `2019_2020_pn`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;

--
-- AUTO_INCREMENT for table `dept_master`
--
ALTER TABLE `dept_master`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stu_master`
--
ALTER TABLE `stu_master`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7611;

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  `id` int(11) NOT NULL,
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
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
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

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'ABCD', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"fys1\",\"phpmyadmin\",\"test\",\"trial\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

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
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"fys1\",\"table\":\"2018_19_cl\"},{\"db\":\"fys1\",\"table\":\"stu_master\"},{\"db\":\"fys1\",\"table\":\"2018_19_ce\"},{\"db\":\"fys1\",\"table\":\"2018_19_pm\"},{\"db\":\"fys1\",\"table\":\"2018_19_pk\"},{\"db\":\"fys1\",\"table\":\"2018_19_pd\"},{\"db\":\"fys1\",\"table\":\"2017_18_pd\"},{\"db\":\"fys1\",\"table\":\"2018_19_pb\"},{\"db\":\"fys1\",\"table\":\"2017_18_pb\"},{\"db\":\"fys1\",\"table\":\"2018_19_cg\"}]');

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
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
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
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-01-10 05:47:25', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
--
-- Database: `trial`
--
CREATE DATABASE IF NOT EXISTS `trial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trial`;

-- --------------------------------------------------------

--
-- Table structure for table `2017_18_pe`
--

CREATE TABLE `2017_18_pe` (
  `slno` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `usn` varchar(10) DEFAULT NULL,
  `smob` varchar(15) DEFAULT NULL,
  `pmob` varchar(15) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `sub_abr` varchar(3) DEFAULT NULL,
  `t1` varchar(5) DEFAULT NULL,
  `t1_out_of` int(2) DEFAULT NULL,
  `t1_check` int(1) DEFAULT '0',
  `t1_mcheck` int(1) DEFAULT '0',
  `q1` varchar(5) DEFAULT NULL,
  `q1_out_of` int(2) DEFAULT NULL,
  `q1_check` int(1) DEFAULT '0',
  `q1_mcheck` int(1) DEFAULT '0',
  `t2` varchar(5) DEFAULT NULL,
  `t2_out_of` int(2) DEFAULT NULL,
  `t2_check` int(1) DEFAULT '0',
  `t2_mcheck` int(1) DEFAULT '0',
  `q2` varchar(5) DEFAULT NULL,
  `q2_out_of` int(2) DEFAULT NULL,
  `q2_check` int(1) DEFAULT '0',
  `q2_mcheck` int(1) DEFAULT '0',
  `t3` varchar(5) DEFAULT NULL,
  `t3_out_of` int(2) DEFAULT NULL,
  `t3_check` int(1) DEFAULT '0',
  `t3_mcheck` int(1) DEFAULT '0',
  `lab` varchar(5) DEFAULT NULL,
  `lab_out_of` int(2) DEFAULT NULL,
  `lab_check` int(1) DEFAULT '0',
  `lab_mcheck` int(1) DEFAULT '0',
  `cie` varchar(5) DEFAULT NULL,
  `cie_out_of` int(2) DEFAULT NULL,
  `cie_check` int(1) DEFAULT '0',
  `cie_mcheck` int(1) DEFAULT '0',
  `att` varchar(5) DEFAULT NULL,
  `att_out_of` int(2) DEFAULT NULL,
  `att_check` int(1) DEFAULT '0',
  `att_mcheck` int(1) DEFAULT '0',
  `see` varchar(5) DEFAULT NULL,
  `see_out_of` int(2) DEFAULT NULL,
  `see_check` int(1) DEFAULT '0',
  `see_mcheck` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `2017_18_pe`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2017_18_pe`
--
ALTER TABLE `2017_18_pe`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2017_18_pe`
--
ALTER TABLE `2017_18_pe`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=993;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
