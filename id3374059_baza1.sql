-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2019 at 08:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3374059_baza1`
--

-- --------------------------------------------------------

--
-- Table structure for table `nagrada`
--

CREATE TABLE `nagrada` (
  `id` int(11) NOT NULL,
  `naziv` varchar(1000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `anketa` varchar(1000) NOT NULL,
  `vreme` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nagrada`
--

INSERT INTO `nagrada` (`id`, `naziv`, `username`, `anketa`, `vreme`) VALUES
(1, 'osvojili ste besplatno jednodnednevno parkiranje u gradu', 'q', 'Pametni transport', '2019-07-11'),
(2, 'osvojili ste besplatan jedodnedni ulaz u zoološki vrt.', 'Amel', 'Zaštita životne sredine', '2019-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `padajucimeni`
--

CREATE TABLE `padajucimeni` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `vrednost` varchar(1000) DEFAULT NULL,
  `vreme` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `padajucimeni`
--

INSERT INTO `padajucimeni` (`id`, `username`, `vrednost`, `vreme`) VALUES
(1, 'q', 'U potpunosti verujem', '2011-07-19'),
(2, 'Amel', 'Veoma bezbedno', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `radioodgovor`
--

CREATE TABLE `radioodgovor` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `vreme` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioodgovor`
--

INSERT INTO `radioodgovor` (`id`, `username`, `naziv`, `vreme`) VALUES
(3, 'Amel', 'Da', '2019-07-18'),
(4, 'q', 'Da', '2019-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `tabela1`
--

CREATE TABLE `tabela1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cekiraniodgovor` varchar(50) NOT NULL,
  `vreme` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabela1`
--

INSERT INTO `tabela1` (`id`, `username`, `cekiraniodgovor`, `vreme`) VALUES
(6, 'Amel', 'Stanovnistvo,', '2018-07-19'),
(7, 'q', 'Postace automatizovan,', '2004-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tekst`
--

CREATE TABLE `tekst` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `vreme` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tekst`
--

INSERT INTO `tekst` (`id`, `username`, `name`, `vreme`) VALUES
(1, 'q', 'a', '2011-07-19'),
(2, 'Amel', 'Obnivljivi izvori energije', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `textareaodgovor`
--

CREATE TABLE `textareaodgovor` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `sadrzaj` tinytext DEFAULT NULL,
  `vreme` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textareaodgovor`
--

INSERT INTO `textareaodgovor` (`id`, `username`, `sadrzaj`, `vreme`) VALUES
(1, 'q', 's', '2011-07-19'),
(2, 'Amel', 'Ljepota', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `indeks` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `prva` varchar(50) NOT NULL DEFAULT '0',
  `druga` varchar(50) NOT NULL DEFAULT '0',
  `treca` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `ime`, `prezime`, `indeks`, `email`, `user_type`, `password`, `prva`, `druga`, `treca`) VALUES
(1, 'administrator', '', '', '', 'a@s.com', 'admin', 'administrator', '0', '0', '0'),
(34, 'q', 'q', 'q', 'q', 'ertan-n@hotmail.com', 'user', 'q', '1', '1', '1'),
(35, 'bole9', 'bole9', 'Jevtovic', '0101010', 'bojan.jeeev@gmail.com', 'user', 'ihateguns', '1', '0', '0'),
(36, 'bojan123', 'bojan123', 'Jevtovic', '017001', 'bojan.jeeev@gmail.com', 'user', 'bojan123', '1', '0', '1'),
(37, 'Munira', 'Munira', 'Zupljanin', '017016', 'zupljaninmunira@gamil.com', 'user', 'munira123', '1', '1', '1'),
(38, 'Amel', 'Amel', 'Alic', '017-017', 'amelnpalicnp@gmail.com', 'user', 'amel', '0', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nagrada`
--
ALTER TABLE `nagrada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `padajucimeni`
--
ALTER TABLE `padajucimeni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radioodgovor`
--
ALTER TABLE `radioodgovor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela1`
--
ALTER TABLE `tabela1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tekst`
--
ALTER TABLE `tekst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textareaodgovor`
--
ALTER TABLE `textareaodgovor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nagrada`
--
ALTER TABLE `nagrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `padajucimeni`
--
ALTER TABLE `padajucimeni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `radioodgovor`
--
ALTER TABLE `radioodgovor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabela1`
--
ALTER TABLE `tabela1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tekst`
--
ALTER TABLE `tekst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `textareaodgovor`
--
ALTER TABLE `textareaodgovor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
