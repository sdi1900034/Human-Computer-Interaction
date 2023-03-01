-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 01 Μαρ 2023 στις 09:31:04
-- Έκδοση διακομιστή: 10.4.27-MariaDB
-- Έκδοση PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eam`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `position_name` varchar(45) NOT NULL,
  `stage` varchar(45) NOT NULL,
  `student_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `file` varchar(45) NOT NULL,
  `paragraph` text NOT NULL,
  `why` text NOT NULL,
  `company_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `application`
--

INSERT INTO `application` (`application_id`, `position_name`, `stage`, `student_id`, `position_id`, `file`, `paragraph`, `why`, `company_name`) VALUES
(111, 'software engineer', 'Εγγεκριμένη', 0, 1900034, '2', 'sample.txt', 'new text', 'Oracle'),
(222, 'software engineer', 'Εγγεκριμένη', 1900034, 1900034, '2', 'sample.txt', 'new text', 'Γιώργος'),
(11004, 'Programer, Intercom', 'Εκκρεμής', 1900034, 2, '', '', '', 'Γιώργος');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `SURNAME` varchar(45) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `Phone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `company`
--

INSERT INTO `company` (`company_id`, `NAME`, `SURNAME`, `company_name`, `Phone`, `email`, `user_id`) VALUES
(2, 'Δήμητρα', 'Παπαδοπούλου', 'Intracom', 2147483647, 'info@intracom.com', 4),
(3, 'Γιώργος', 'Παπαδάκης', 'Οracle', 697734002, 'info@oracle.com', 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `university_name` varchar(45) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `department`
--

INSERT INTO `department` (`department_id`, `NAME`, `university_name`, `position_id`) VALUES
(1, 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 'Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `pos_title` varchar(45) NOT NULL,
  `duration` varchar(45) NOT NULL,
  `FullOrPart` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `startdate` date NOT NULL,
  `department_id` varchar(45) NOT NULL,
  `salary` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `posted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `position`
--

INSERT INTO `position` (`position_id`, `pos_title`, `duration`, `FullOrPart`, `location`, `startdate`, `department_id`, `salary`, `approved`, `application_id`, `company_id`, `student_id`, `posted`) VALUES
(1, 'software engineer', '3 μήνες', 'Μερικό', 'Μαρούσι', '2023-02-22', '1', 500, 0, NULL, 1, NULL, 1),
(2, 'web developer', '3 μήνες', 'Πλήρες', 'Χολαργός', '2023-02-17', '1', 600, 1, 0, 2, NULL, 0),
(3, 'software engineer', '3 μήνες', 'Πλήρες', 'Χαλάνδρι', '2023-02-22', '1', 500, 0, NULL, 2, NULL, 1),
(444, 'Full-stack developer', '3 μήνες', 'Μερική', 'Θεσσαλονίκη', '2023-02-22', 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 600, 0, 0, 1, 0, 0),
(508, 'Software Engineer ', '3 μήνες', 'Μερική', 'Ηράκλειο', '2023-03-25', 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 800, 0, 0, 1, 0, 0),
(777, 'Security', '3 μήνες', 'Μερική', 'Θεσσαλονίκη', '0000-00-00', 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 600, 0, 0, 1, 0, 0),
(900, 'Software Engineer ', '3 μήνες', 'Μερική', 'Ηράκλειο', '2023-03-25', 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 800, 0, 0, 1, 0, 0),
(901, '', '3 μήνες', 'Μερική', '', '0000-00-00', 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 0, 0, 0, 1, 0, 0),
(1003, 'Software Engineer ', '3 μήνες', 'Μερική', 'Χαλάνδρι', '2023-01-29', 'Τμήμα Πληροφορικής και Τηλεπικοινωνιών', 300, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `SURNAME` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `student`
--

INSERT INTO `student` (`student_id`, `NAME`, `SURNAME`, `EMAIL`, `phone`, `user_id`, `department_id`) VALUES
(1900034, 'Vasiliki', 'Georgaki-Anagnostou', 'sdi1900034@di.uoa.gr', 2147483647, 1, 1),
(1900086, 'Alexandra', 'Kopalidou', 'sdi1900086@di.uoa.gr', 2147483647, 1, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `usertype` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`UserID`, `username`, `password`, `usertype`) VALUES
(1, 'Vasiliki', '1234', 'student'),
(2, 'Αλεξάνδρα', '4321', 'student'),
(3, 'Γιώργος', '12345', 'company'),
(4, 'Δήμητρα', '1212', 'company');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Ευρετήρια για πίνακα `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Ευρετήρια για πίνακα `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Ευρετήρια για πίνακα `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Ευρετήρια για πίνακα `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
