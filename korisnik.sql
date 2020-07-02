-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2020 at 10:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korisnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `create_ticket` tinyint(1) NOT NULL DEFAULT 0,
  `find_usr_mng_under_reports` tinyint(1) NOT NULL DEFAULT 0,
  `find_service` tinyint(1) NOT NULL DEFAULT 0,
  `send_req_manager_oft` tinyint(1) NOT NULL DEFAULT 0,
  `send_req_app_owner` tinyint(1) NOT NULL DEFAULT 0,
  `req_approved` tinyint(1) NOT NULL DEFAULT 0,
  `attach_approvals_to_ticket` tinyint(1) NOT NULL DEFAULT 0,
  `send_email_to_orka` tinyint(1) NOT NULL DEFAULT 0,
  `send_req_SAP` tinyint(1) NOT NULL DEFAULT 0,
  `assign_user_rights` tinyint(1) NOT NULL DEFAULT 0,
  `configure_zebra` tinyint(1) NOT NULL DEFAULT 0,
  `add_user_to_group` tinyint(1) NOT NULL DEFAULT 0,
  `close_ticket` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `create_ticket`, `find_usr_mng_under_reports`, `find_service`, `send_req_manager_oft`, `send_req_app_owner`, `req_approved`, `attach_approvals_to_ticket`, `send_email_to_orka`, `send_req_SAP`, `assign_user_rights`, `configure_zebra`, `add_user_to_group`, `close_ticket`) VALUES
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
