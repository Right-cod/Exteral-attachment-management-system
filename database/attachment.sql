-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 07:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attachment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(15, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_supervisor`
--

CREATE TABLE `industrial_supervisor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industrial_supervisor`
--

INSERT INTO `industrial_supervisor` (`id`, `firstname`, `lastname`, `email`, `company_name`, `company_address`, `department`, `phone`, `password`) VALUES
(1, 'Denis', 'Maina k', 'denohkim12@gmail.com', 'Mathari', '12000 Nyeri', 'IT', '0707224878', 'a3b8eb6faaf230bd0944847c527d30bf'),
(2, 'Hamfry', 'Maina', 'ham23@gmail.com', 'Kimathi', '2345', 'ICT', '0795673637', '70748803ff25bbcf3b3003e6cf4615be'),
(3, 'Hamfry', 'jugua', 'admyuin@gmail.com', 'Kimathi', '2345', 'ICT', '0987654321', '70748803ff25bbcf3b3003e6cf4615be');

-- --------------------------------------------------------

--
-- Table structure for table `ind_assessment`
--

CREATE TABLE `ind_assessment` (
  `id` int(100) NOT NULL,
  `ssid` int(100) NOT NULL,
  `s_id` int(100) NOT NULL,
  `1` int(100) NOT NULL,
  `r1` varchar(200) NOT NULL,
  `2` int(100) NOT NULL,
  `r2` varchar(200) NOT NULL,
  `3a` int(100) NOT NULL,
  `r3a` varchar(200) NOT NULL,
  `3b` int(100) NOT NULL,
  `r3b` varchar(200) NOT NULL,
  `3c` int(100) NOT NULL,
  `r3c` varchar(200) NOT NULL,
  `3d` int(100) NOT NULL,
  `r3d` varchar(200) NOT NULL,
  `4` int(100) NOT NULL,
  `r4` varchar(200) NOT NULL,
  `5` int(100) NOT NULL,
  `r5` varchar(200) NOT NULL,
  `6` int(100) NOT NULL,
  `r6` varchar(200) NOT NULL,
  `7` int(100) NOT NULL,
  `r7` varchar(200) NOT NULL,
  `8` int(100) NOT NULL,
  `r8` varchar(200) NOT NULL,
  `9` int(100) NOT NULL,
  `r9` varchar(200) NOT NULL,
  `10` int(100) NOT NULL,
  `r10` varchar(1000) NOT NULL,
  `11` int(100) NOT NULL,
  `r11` varchar(200) NOT NULL,
  `12` int(100) NOT NULL,
  `r12` varchar(200) NOT NULL,
  `13` int(100) NOT NULL,
  `r13` varchar(200) NOT NULL,
  `14` int(100) NOT NULL,
  `r14` varchar(200) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind_assessment`
--

INSERT INTO `ind_assessment` (`id`, `ssid`, `s_id`, `1`, `r1`, `2`, `r2`, `3a`, `r3a`, `3b`, `r3b`, `3c`, `r3c`, `3d`, `r3d`, `4`, `r4`, `5`, `r5`, `6`, `r6`, `7`, `r7`, `8`, `r8`, `9`, `r9`, `10`, `r10`, `11`, `r11`, `12`, `r12`, `13`, `r13`, `14`, `r14`, `total`) VALUES
(1, 1, 1, 2, 'Good', 2, 'Good', 3, 'Good', 1, 'Good', 3, 'Good', 4, 'Good', 2, 'Good', 1, 'Good', 2, 'Good', 2, 'Good', 2, 'Good', 2, 'Good', 1, 'Good', 1, 'Good', 2, 'Good', 2, 'Good', 2, 'Good', 32);

-- --------------------------------------------------------

--
-- Table structure for table `ins_assessment`
--

CREATE TABLE `ins_assessment` (
  `id` int(100) NOT NULL,
  `ssid` int(100) NOT NULL,
  `s_id` int(100) NOT NULL,
  `one` int(100) NOT NULL,
  `rone` varchar(1000) NOT NULL,
  `two` int(100) NOT NULL,
  `rtwo` varchar(1000) NOT NULL,
  `three` int(100) NOT NULL,
  `rthree` varchar(1000) NOT NULL,
  `four` int(100) NOT NULL,
  `rfour` varchar(1000) NOT NULL,
  `five` int(100) NOT NULL,
  `rfive` varchar(1000) NOT NULL,
  `six` int(100) NOT NULL,
  `rsix` varchar(1000) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ins_assessment`
--

INSERT INTO `ins_assessment` (`id`, `ssid`, `s_id`, `one`, `rone`, `two`, `rtwo`, `three`, `rthree`, `four`, `rfour`, `five`, `rfive`, `six`, `rsix`, `total`) VALUES
(1, 2, 1, 5, 'EXCELLENT', 5, 'EXCELLENT', 4, 'Fair', 5, 'EXCELLENT', 4, 'EXCELLENT', 5, 'EXCELLENT', 28);

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(11) NOT NULL,
  `sid` int(100) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `r_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `reason` varchar(3000) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `status` int(100) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `sid`, `date`, `r_date`, `reason`, `comment`, `status`, `photo`) VALUES
(6, 1, '2022-05-12', '2022-05-10 08:17:27.000000', 'I have finished attachment', 'Thank you', 0, '560-5604391_transparent-heart-love-png-clipart.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adm` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `supervisor_name` varchar(200) NOT NULL,
  `duration_from` date NOT NULL,
  `duration_to` date NOT NULL,
  `town` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `log` mediumtext NOT NULL,
  `complete` varchar(1000) NOT NULL,
  `upload` varchar(1000) NOT NULL,
  `ind_s` int(100) NOT NULL,
  `ins_status` int(100) NOT NULL,
  `ind_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `adm`, `course`, `company_name`, `company_address`, `department`, `supervisor_name`, `duration_from`, `duration_to`, `town`, `street`, `building`, `password`, `log`, `complete`, `upload`, `ind_s`, `ins_status`, `ind_status`) VALUES
(1, 'Joseph', 'Maina', 'jngotho@gmail.com', 'C027-01-1121/2018', 'BBIT', 'Mathari', '12000 Nyeri', 'IT', '1', '2022-05-08', '2023-01-17', 'NYERI', 'MATHARI', 'MATHARI', 'd87126b6b13bac369fb33140d4122eb5', '', 'upload', 'Website Outline.docx', 1, 1, 1),
(2, 'Frida', 'Kamene', 'asjaw453@usako.net', 'C027-01-1122/2018', 'BBIT', 'Mathari', '12000 Nyeri', 'IT', '1', '2022-05-10', '2022-07-20', 'NYERI', 'MATHARI', 'MATHARI', '6c8a4d2ce1a89679495aacfcc3005cc4', '', '', '', 1, 0, 0),
(3, 'Maria', 'k', 'denohkim34@gmail.com', 'C027-01-6788/2022', 'IT', 'Mathari', '12000 Nyeri', 'IT', 'not assigned', '2022-05-03', '2022-08-24', 'Nyeri', 'Kip', 'Jab', '2eb5a6863bc1a789d550f450f0370278', '', '', '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students_logbook`
--

CREATE TABLE `students_logbook` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `file` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `marks` varchar(15) NOT NULL,
  `marked` int(1) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `supervisor_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_logbook`
--

INSERT INTO `students_logbook` (`id`, `email`, `file`, `date`, `marks`, `marked`, `feedback`, `comment`, `supervisor_email`) VALUES
(18, 'Sammunesh2000@gmail.com', '84656452.pdf', '2021-01-30', '', 0, '', '', ''),
(19, 'Sammunesh2000@gmail.com', 'EXAMCARD-DCSNRB699919.pdf', '2021-01-29', '60', 1, 'can do better', 'improved', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(11) NOT NULL,
  `supervisor_fname` varchar(200) NOT NULL,
  `supervisor_lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `instituition_name` varchar(200) NOT NULL,
  `instituition_address` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `supervisor_fname`, `supervisor_lname`, `email`, `instituition_name`, `instituition_address`, `department`, `phone`, `password`) VALUES
(1, 'Denis', 'Njogu', 'kimangadenis015@gmail.com', 'Kimathi', '10010', 'IT', '8855858545', 'a3b8eb6faaf230bd0944847c527d30bf'),
(2, 'Denis', 'Maina', 'denohkim12@gmail.com', 'Kimathi', '10010', 'CS', '0923873763', 'a3b8eb6faaf230bd0944847c527d30bf'),
(3, 'Hamfry', 'jugua', 'ham23@gmail.com', 'Kimathi', '228884', 'CS', '0795678950', '70748803ff25bbcf3b3003e6cf4615be');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `industrial_supervisor`
--
ALTER TABLE `industrial_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind_assessment`
--
ALTER TABLE `ind_assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ins_assessment`
--
ALTER TABLE `ins_assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_logbook`
--
ALTER TABLE `students_logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `industrial_supervisor`
--
ALTER TABLE `industrial_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind_assessment`
--
ALTER TABLE `ind_assessment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ins_assessment`
--
ALTER TABLE `ins_assessment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students_logbook`
--
ALTER TABLE `students_logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
