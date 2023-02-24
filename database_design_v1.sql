-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 02:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `suffix` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `class_information_details`
--

CREATE TABLE `class_information_details` (
  `class_info_id` int(11) NOT NULL,
  `class_number` varchar(30) NOT NULL,
  `letter_order_number` varchar(15) NOT NULL,
  `general_order` varchar(30) NOT NULL,
  `cert_ctrl_no` varchar(30) NOT NULL,
  `student_reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(30) NOT NULL,
  `number_of_days` int(11) NOT NULL,
  `mtap_course` varchar(10) NOT NULL,
  `pre_requisite_course` int(11) NOT NULL,
  `implementation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `pool_instructor_details`
--

CREATE TABLE `pool_instructor_details` (
  `instructor_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `rank` varchar(15) NOT NULL,
  `qualification_degree` varchar(50) NOT NULL,
  `course_specialization` varchar(50) NOT NULL,
  `other_qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_course`
--

CREATE TABLE `registration_course` (
  `course_reg_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `opening_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `implementation_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_participants_class`
--

CREATE TABLE `registration_participants_class` (
  `student_reg_id` int(11) NOT NULL,
  `course_reg_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `rank` varchar(15) NOT NULL,
  `office_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `class_information_details`
--
ALTER TABLE `class_information_details`
  ADD PRIMARY KEY (`class_info_id`),
  ADD KEY `student_reg_id` (`student_reg_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `pool_instructor_details`
--
ALTER TABLE `pool_instructor_details`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `registration_course`
--
ALTER TABLE `registration_course`
  ADD PRIMARY KEY (`course_reg_id`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `registration_participants_class`
--
ALTER TABLE `registration_participants_class`
  ADD PRIMARY KEY (`student_reg_id`),
  ADD KEY `course_reg_id` (`course_reg_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100016;

--
-- AUTO_INCREMENT for table `class_information_details`
--
ALTER TABLE `class_information_details`
  MODIFY `class_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600011;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300008;

--
-- AUTO_INCREMENT for table `pool_instructor_details`
--
ALTER TABLE `pool_instructor_details`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700004;

--
-- AUTO_INCREMENT for table `registration_course`
--
ALTER TABLE `registration_course`
  MODIFY `course_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400008;

--
-- AUTO_INCREMENT for table `registration_participants_class`
--
ALTER TABLE `registration_participants_class`
  MODIFY `student_reg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_information_details`
--
ALTER TABLE `class_information_details`
  ADD CONSTRAINT `class_information_details_ibfk_1` FOREIGN KEY (`student_reg_id`) REFERENCES `registration_participants_class` (`student_reg_id`);

--
-- Constraints for table `pool_instructor_details`
--
ALTER TABLE `pool_instructor_details`
  ADD CONSTRAINT `pool_instructor_details_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_details` (`account_id`);

--
-- Constraints for table `registration_course`
--
ALTER TABLE `registration_course`
  ADD CONSTRAINT `registration_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `registration_course_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `pool_instructor_details` (`instructor_id`);

--
-- Constraints for table `registration_participants_class`
--
ALTER TABLE `registration_participants_class`
  ADD CONSTRAINT `registration_participants_class_ibfk_1` FOREIGN KEY (`course_reg_id`) REFERENCES `registration_course` (`course_reg_id`),
  ADD CONSTRAINT `registration_participants_class_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_details` (`account_id`);
/* 
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`pre_requisite_course`) REFERENCES `course` (`course_id`);
 */
--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`account_id`, `username`, `password`, `user_type`, `lastname`, `firstname`, `middlename`, `suffix`) VALUES
(100001, 'aron.ligsay@pup.com', 'aron.ligsay', 'student', 'Ligsay', 'Aron', 'Kurt', ''),
(100002, 'mariah.sydney@pup.com', 'mariah.sydney', 'student', 'Sydney', 'Mariah', '', ''),
(100003, 'harold.manuel@pup.com', 'harold.manuel', 'student', 'Harold', 'Manuel', '', ''),
(100004, 'ian.ilagan@pup.com', 'ian.ilagan', 'student', 'Ilagan', 'Ian', 'Geoffrey', ''),
(100005, 'nhory.banez@pup.com', 'nhory.banez', 'instructor', 'Banez', 'Nhory', 'James', ''),
(100006, 'valmaria.bestal@pup.com', 'valmaria.bestal', 'instructor', 'Bestal', 'Valmoria', 'Richard', ''),
(100007, 'jose.arambulo@pup.com', 'jose.arambulo', 'student', 'Arambulo', 'Jose', 'Nido', ''),
(100008, 'allan.bautista@pup.com', 'allan.bautista', 'student', 'Bautista', 'Allan', 'L', 'Jr.'),
(100009, 'mary.boceso@pup.com', 'mary.boceso', 'student', 'Boceso', 'Mary', 'Gueverra', ''),
(100010, 'adrian.cabahug@pup.com', 'adrian.cabahug', 'student', 'Cabahug', 'Adrian', 'Ortega', ''),
(100011, 'kenneth.cerrado@pup.com', 'kenneth.cerrado', 'student', 'Cerrado', 'Kenneth', 'Jolin', ''),
(100012, 'dan.coloma@pup.com', 'dan.coloma', 'instructor', 'Coloma', 'Dan', 'Agamon', ''),
(100013, 'christian.conanan@pup.com', 'christian.conanan', 'instructor', 'Conanan', 'Christian', 'Yves', ''),
(100014, 'lucibelle.dellomos@pup.com', 'lucibelle.dellomos', 'instructor', 'Dellomos', 'Lucibelle', 'Deslate', ''),
(100015, 'daniel.dulce@pup.com', 'daniel.dulce', 'admin', 'Dulce', 'Daniel', 'Siunam', '');
--
-- Dumping data for table `pool_instructor_details`
--

INSERT INTO `pool_instructor_details` (`instructor_id`, `account_id`, `rank`, `qualification_degree`, `course_specialization`, `other_qualification`) VALUES
(700000, 100005, 'PCO', '', 'Computer Science', ''),
(700001, 100006, 'PCO', '', 'Computer Science', ''),
(700002, 100012, 'PNCO', '', 'Math', ''),
(700003, 100013, 'NUP', '', 'Information Technology', '');
--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `account_id`, `rank`, `office_name`) VALUES
(200000, 100001, 'PCO', ''),
(200001, 100002, 'PCO', ''),
(200002,	100003, 'PCO', ''),
(200003,	100004, 'PCO', ''),
(200004,	100007, 'PNCO', ''),
(200005,	100008, 'PNCO', ''),
(200006,	100009, 'PNCO', ''),
(200007,	100010, 'NUP', ''),
(200008,	100011, 'NUP', '')
;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `number_of_days`, `mtap_course`, `pre_requisite_course`, `implementation`) VALUES
(300000, 'Programming 1', 0, '', 0, ''),
(300001, 'Programming 2', 0, '', 300001, ''),
(300002, 'Object Oriented Programing', 0, '', 0, ''),
(300003, 'Calculus', 0, '', 0, ''),
(300004, 'Calculus 2', 0, '', 300003, ''),
(300005, 'Information Management', 0, '', 0, ''),
(300006, 'Database Administration', 0, '', 300005, ''),
(300007, 'Web Development', 0, '', 0, '');


--
-- Dumping data for table `registration_course`
--

INSERT INTO `registration_course` (`course_reg_id`, `course_id`, `instructor_id`, `opening_date`, `closing_date`, `implementation_nr`) VALUES
(400000, 300000, 700000, '2022-11-01', '2023-02-28', 0),
(400001, 300003, 700002, '2022-11-01', '2023-02-28', 0),
(400002, 300002, 700001, '2022-11-01', '2023-02-28', 0),
(400003, 300005, 700001, '2022-11-01', '2023-02-28', 0),
(400004, 300001, 700000, '2023-01-01', '2023-04-30', 0),
(400005, 300004, 700002, '2023-01-01', '2023-04-30', 0),
(400006, 300007, 700003, '2023-01-01', '2023-04-30', 0),
(400007, 300006, 700001, '2023-01-01', '2023-04-30', 0);

INSERT INTO `registration_participants_class` (`student_reg_id`, `course_reg_id`, `student_id`) VALUES
(500000, 400000, 200000),
(500001, 400001, 200000),
(500002, 400002, 200000),
(500003, 400000, 200001),
(500004, 400001, 200001),
(500005, 400002, 200001),
(500006, 400002, 200002),
(500007, 400003, 200002),
(500008, 400004, 200002),
(500009, 400002, 200003),
(500010, 400003, 200003)
;

-- --------------------------------------------------------
--
-- Dumping data for table `class_information_details`
--

INSERT INTO `class_information_details` (`class_info_id`, `class_number`, `letter_order_number`, `general_order`, `cert_ctrl_no`, `student_reg_id`) VALUES
(600000, '400000', '', '', 'cert_600000', 500000),
(600001, '400001', '', '', 'cert_600001', 500001),
(600002, '400002', '', '', 'cert_600002', 500002),
(600003, '400000', '', '', 'cert_600003', 500003),
(600004, '400001', '', '', 'cert_600004', 500004),
(600005, '400002', '', '', 'cert_600005', 500005),
(600006, '400002', '', '', 'cert_600006', 500006),
(600007, '400003', '', '', 'cert_600007', 500007),
(600008, '400004', '', '', 'cert_600008', 500008),
(600009, '400002', '', '', 'cert_600009', 500009),
(600010, '400003', '', '', 'cert_600010', 500010);






COMMIT;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
