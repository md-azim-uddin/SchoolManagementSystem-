-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 06:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `profilePic` varchar(100) NOT NULL,
  `bloodGroop` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `designation`, `email`, `phone`, `address`, `gender`, `pass`, `dob`, `profilePic`, `bloodGroop`, `qualification`) VALUES
(5, 'Ironman', 'Admin', 'ironman@marvel.com', '11223344556', 'NewYork', 'Male', 'A11111', '1998-01-01', '../assets/ironman2.jpg', 'B+', 'phd.'),
(6, 'Abcde', 'admin', 'abcde@teacher.aiub.edu', '0145546622', 'Dhaka', 'Male', 'A11111', '1998-01-01', '../assets/superman.jpg', 'AB+', 'phd'),
(7, 'ab cd', 'ab', 'ab@gm', '11223344556', 'dh', 'Male', 'A11111', '1999-01-18', '../assets/batmane3-1.jpg', 'AB+', 'ab'),
(8, 'xy yz', 'xy', 'xy@gmail.com', '11223344556', 'Dhaka', 'Male', 'A11111', '1999-01-01', '../assets/doraemon.jpg', 'A+', 'abc.'),
(9, 'aa aa', 'aa', 'aa@gmail.com', '11223344556', 'dhaka', 'Male', 'A11111', '1999-01-01', '../assets/Batman2.jpg', 'A+', 'PHD'),
(10, 'Sharon ab', 'admin', 'sharon@aiub.edu', '11122233344', 'dhaka', 'Male', 'A11111', '1999-01-01', '../assets/sharon.jpg', 'B+', 'Bsc.');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sl_no` int(50) DEFAULT NULL,
  `attendance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `cid` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `classStartTime` varchar(30) NOT NULL,
  `classEndTime` varchar(30) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  `subjectName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`cid`, `class`, `classStartTime`, `classEndTime`, `t_id`, `subjectName`) VALUES
(1, '6', '09:00', '09:50', '5', 'Math'),
(2, '7', '09:00', '09:50', '6', 'Higher Math'),
(3, '8', '09:00', '10:30', '8', 'English'),
(4, '9', '09:00', '10:30', '7', 'Physics'),
(5, '10', '09:00', '10:30', '9', 'Chemistry'),
(6, '6', '09:50', '10:40', '3', 'Chemistry'),
(7, '7', '10:00', '10:50', '9', 'Science'),
(8, '6', '11:00', '11:50', '5', 'Chemistry'),
(9, '8', '10:00', '10:50', '4', 'Arabic'),
(10, '9', '10:00', '00:09', '5', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `class_assign`
--

CREATE TABLE `class_assign` (
  `teacher_id` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_assign`
--

INSERT INTO `class_assign` (`teacher_id`, `class`, `start_time`, `end_time`, `subject`) VALUES
('T12', '6', '08:00', '08:40', 'Math'),
('T12', '8', '10:00', '11:40', 'English'),
('T12', '9', '3:30', '4:40', 'Chemistry'),
('T12', '7', '2:00', '3:30', 'Bangla'),
('T15', '8', '12:00', '2:00', 'English'),
('T13', '7', '11:00', '12:00', 'Biology'),
('T13', '9', '11:00', '12:00', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `e_id` int(11) NOT NULL,
  `ExamDate` varchar(50) NOT NULL,
  `ExamTime` varchar(50) NOT NULL,
  `ExamDescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`e_id`, `ExamDate`, `ExamTime`, `ExamDescription`) VALUES
(1, '2021-04-17', '09:30', 'Spring 2020-21 Final Term Exam'),
(2, '2021-04-17', '09:30', 'Spring 2020-21 Final Term Exam'),
(3, '2021-05-04', '09:30', 'Data Structure exam'),
(4, '2021-05-16', '09:30', 'Final exam'),
(5, '2021-04-20', '10:16', 'Project checkingjirgndgnpjnn'),
(6, '2021-04-20', '10:00', 'Project scheduling and showcasing and defencmwefn'),
(7, '2021-04-20', '10:00', 'Project scheduling and showcasing and defencmwefnw'),
(8, '2021-04-20', '10:00', 'Project scheduling and showcasing and defencmwefnw'),
(9, '2021-04-20', '10:00', 'efwerfwehfbiw wiefbiwuebrfwieu jwebfiuwbef uwhefiu'),
(10, '2021-04-20', '10:00', 'Web tech exam\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `offeredcourses`
--

CREATE TABLE `offeredcourses` (
  `name` varchar(50) NOT NULL,
  `section` varchar(20) NOT NULL,
  `capacity` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `starttime` varchar(50) NOT NULL,
  `endtime` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offeredcourses`
--

INSERT INTO `offeredcourses` (`name`, `section`, `capacity`, `class`, `starttime`, `endtime`, `day`, `room`) VALUES
('Bangla ', 'A0', '30', 'Six', '8.00', '10.00', 'Sat-Mon', '111'),
('English', 'A1', '30', 'Six', '10.00', '12.00', 'Sat-Mon', '112'),
('ICT', 'A2', '30', 'Six', '12.00', '2.00', 'Sat-Mon', '113'),
('Math', 'A3', '30', 'Six', '2.00', '4.00', 'Sat-Mon', '114'),
('Bangla ', 'B1', '30', 'Seven', '8.00', '10.00', 'Sun-Tue', '115'),
('English', 'B2', '30', 'Seven', '10.00', '12.00', 'Sun-Tue', '116'),
('Math', 'B3', '30', 'Seven', '12.00', '2.00', 'Sun-Tue', '117'),
('Islam', 'B5', '30', 'Seven', '2.00', '4.00', 'Sun-Tue', '118');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `p_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `profilePic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`p_id`, `name`, `email`, `phone`, `pass`, `dob`, `bloodGroup`, `gender`, `profilePic`) VALUES
(2, 'abc', 'abc@gmail.com', '11223344556', 'Pa1111', '1999-02-01', 'A+', 'Male', '../assets/batmane3-1.jpg'),
(3, 'xyz', 'xyz@gmail.com', '01456789875', 'Pa1122', '1994-10-10', 'B+', 'Male', '../assets/batmane3-1.jpg'),
(4, 'Pa rt', 'pa@gmail.v', '11223344556', 'A11111', '1999-01-01', 'A+', 'Male', '../assets/ironman2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `name`, `class`, `result`, `picture`) VALUES
('S1', 'Alax', 'math', 'A+', '../assets/students/user.png'),
('S2', 'Martin', 'math', 'B+', '../assets/students/user.png'),
('S4', 'Luther', 'math', 'C+', '../assets/students/user.png'),
('S5', 'Lucifer', 'math', 'A+', '../assets/students/user.png'),
('S3', 'Jacob', 'english', 'A+', '../assets/students/user.png'),
('S6', 'Banner', 'english', 'B+', '../assets/students/user.png'),
('S7', 'Steve', 'english', 'A+', '../assets/students/user.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `class`, `email`, `phone`, `picture`) VALUES
('S1', 'Alax', 'math', 'alax@gmail.com', '01234365655', '../assets/students/user.png'),
('S2', 'Martin', 'math', 'martin@gmail.com', '0173243535353', '../assets/students/user.png'),
('S3', 'Jacob', 'english', 'jac@gmail.com', '023732823432', '../assets/students/user.png'),
('S4', 'Luther', 'math', 'luther@gmail.com', '0182364830', '../assets/students/user.png'),
('S5', 'Lucifer', 'math', 'lucifer@gmail.com', '01797792423', '../assets/students/user.png'),
('S6', 'Banner', 'english', 'banner@gmail.com', '09246292442', '../assets/students/user.png'),
('S7', 'Steve', 'english', 'steve@gmail.com', '091032024', '../assets/students/user.png');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult`
--

CREATE TABLE `studentresult` (
  `id` varchar(20) NOT NULL,
  `midterm` varchar(50) NOT NULL,
  `finalterm` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentresult`
--

INSERT INTO `studentresult` (`id`, `midterm`, `finalterm`, `total`) VALUES
('S3772', '85', '75', '80'),
('S3773', '85', '85', '85'),
('S3774', '90', '80', '85'),
('S3775', '75', '90', '83'),
('S3777', '75', '80', '78'),
('S3778', '65', '80', '73'),
('S3779', '75', '70', '73');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `profilePic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `name`, `email`, `bloodGroup`, `phone`, `pass`, `gender`, `dob`, `Class`, `profilePic`) VALUES
(4, 'Abc', 'abc@gmail.com', 'A+', '11223344556', 'St11', 'Male', '2014-02-03', '6', '../assets/Batman2.jpg'),
(5, 'St ab', 'sefw@wrg', 'A+', '11223344556', 'A11111', 'Male', '2014-01-01', '7', '../assets/superman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studentslist`
--

CREATE TABLE `studentslist` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateOfBirth` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentslist`
--

INSERT INTO `studentslist` (`id`, `name`, `email`, `bloodGroup`, `phone`, `address`, `password`, `gender`, `dateOfBirth`, `picture`) VALUES
('S3772', 'zahid hasan', 'zahid@gmail.com', 'O+', '01554796581', 'dhaka', '123', 'male', '1999-08-27', ''),
('S3773', 'abir ahmed', 'abir@gmail.com', 'B+', '01875493654', 'Dhaka', '123', 'Male', '2006-06-14', '../assets/20201002_130751.jpg'),
('S3774', 'Halima Akter', 'halima@gmail.com', 'O+', '01547826498', 'Dhaka', '123', 'Female', '1995-04-12', '../assets/SRS_9581.jpg'),
('S3775', 'Fahmee Al', 'fahmee@gmail.com', 'AB+', '01758964123', 'Dhaka', '123', 'Male', '1999-07-21', '../assets/20201111_165113.jpg'),
('S3776', 'Kaminur Shah', 'shah@gmail.com', 'B+', '01875493657', 'Dhaka', '123', 'Male', '2011-07-21', '../assets/20201111_165113.jpg'),
('S3777', 'azim uddin', 'azim@gmail.com', 'O+', '01521232352', 'dhaka', '123', 'male', '1999-12-31', ''),
('S3778', 'Shahidullah Rakib', 'rakib@gmail.com', 'A+', '01547632189', 'Dhaka', '123', 'Male', '2001-06-19', '../assets/20201001_174120.jpg'),
('S3779', 'tanvir rahman', 'tanvir@gmail.com', 'AB+', '01758964123', 'Dhaka', '123', 'Male', '2006-10-19', '../assets/20201002_131935.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `bloodGroup` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateOfBirth` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `designation`, `email`, `bloodGroup`, `phone`, `address`, `password`, `gender`, `dateOfBirth`, `picture`, `qualification`) VALUES
('T12', 'Rifat Ishtiyak', 'Assistant Teacher', 'rifatishtiyak@gmail.', 'O+', '01786724845', '51s, Road 5F, Dhaka', 'rifat1234', 'Male', '1997-02-10', '../assets/img1.jpeg', 'BSc in CSE'),
('T13', 'Tony Stark', 'Assistant Teacher', 'rifatishtiyak@gmail.', 'O+', '01786724845', '51s, Road 5F, Dhaka', 'rifat1234', 'Male', '1994-06-29', '../assets/Untitled-5.jpg', 'BSC in EEE'),
('TT14', 'Steve Rogers', 'Teacher', 'rip74194@gmail.com', 'O+', '01786724845', '51s, Road 5F, Dhaka', 'rifat1234', 'Male', '1996-05-14', '../assets/far_cry_4_yeti-wallpaper-1920x1080.jpg', 'BSc EEE'),
('T15', 'Banner', 'Teacher', 'rifatishtiyak@gmail.', 'AB+', '01786724845', '51s, Road 5F, Dhaka', 'rifat1234', 'Male', '1996-05-20', '../assets/far_cry_4_yeti-wallpaper-1920x1080.jpg', 'BSc CSE'),
('T16', 'Ankur Saha', 'Assistant Teacher', 'robiul.ha.sansorkar@', 'O+', '01786724845', '51s, Road 5F, Dhaka', 'rifat1234', 'Male', '1998-01-05', '../assets/1501941920593-e0b6172d-370a-4307-882d-484c6501705c_-01.jpeg', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `profilePic` varchar(50) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `designation`, `email`, `phone`, `address`, `gender`, `pass`, `dob`, `profilePic`, `bloodGroup`, `qualification`) VALUES
(8, 'abc', 'ta', 'abc@gm', '11223344556', 'dhaka', 'Male', 'Ta1111', '1998-01-14', '../assets/superman.jpg', 'A+', 'MS'),
(9, 'def', 'ta', 'def@gmail.com', '01654987654', 'dhaka', 'Male', 'Ta1122', '1998-02-02', '../assets/batmane3-1.jpg', 'AB+', 'MA'),
(10, 'ghi ', 'ta', 'ghi@gm', '01456987321', 'noakhali', 'Female', 'Ta1122', '1985-02-05', '../assets/superman.jpg', 'AB+', 'MA'),
(11, 'jkl', 'Ta', 'Jkl@gm', '01324698745', 'Barishal', 'Male', 'Ta2233', '1998-02-13', '../assets/doraemon.jpg', 'B+', 'MA'),
(12, 'Ta ab', 'ta', 'ta@gm', '11223344556', 'dhaka', 'Male', 'A11111', '1999-02-01', '../assets/Batman.jpg', 'A+', 'phd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `offeredcourses`
--
ALTER TABLE `offeredcourses`
  ADD PRIMARY KEY (`section`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `studentslist`
--
ALTER TABLE `studentslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher` ADD FULLTEXT KEY `picture` (`picture`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
