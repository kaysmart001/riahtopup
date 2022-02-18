-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 08:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `adminEmail`, `adminPass`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `airtime`
--

CREATE TABLE `airtime` (
  `id` int(11) NOT NULL,
  `airtime_name` varchar(255) NOT NULL,
  `airtime_date` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airtime`
--

INSERT INTO `airtime` (`id`, `airtime_name`, `airtime_date`) VALUES
(1, 'MTN', '2020-11-12 16:27:10.00000'),
(2, 'GLO', '2020-11-12 16:27:10.00000'),
(3, '9MOBILE', '2020-11-12 16:27:10.00000'),
(4, 'AIRTEL', '2020-11-12 16:27:10.00000');

-- --------------------------------------------------------

--
-- Table structure for table `airtimeprice`
--

CREATE TABLE `airtimeprice` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `airtime_type` varchar(255) NOT NULL,
  `airtime_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airtimeprice`
--

INSERT INTO `airtimeprice` (`id`, `ref_id`, `airtime_type`, `airtime_price`) VALUES
(1, 1, 'MTN', '99');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `data_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `plan_name`, `data_date`) VALUES
(1, 'MTN', '2020-11-05 16:39:43'),
(2, 'GLO', '2020-11-05 16:39:43'),
(3, '9MOBILE', '2020-11-05 16:39:52'),
(4, 'AIRTEL', '2020-11-05 16:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `cable`
--

CREATE TABLE `cable` (
  `id` int(11) NOT NULL,
  `cable_name` varchar(255) NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cable`
--

INSERT INTO `cable` (`id`, `cable_name`, `dates`) VALUES
(1, 'DSTV', '2020-11-10 13:27:42'),
(2, 'GOTV', '2020-11-10 13:27:42'),
(3, 'STARTIMES', '2020-11-10 13:27:42'),
(4, 'PHCN', '2020-11-10 13:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `cableprice`
--

CREATE TABLE `cableprice` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `cable_type` varchar(255) NOT NULL,
  `cable_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cableprice`
--

INSERT INTO `cableprice` (`id`, `ref_id`, `cable_type`, `cable_price`) VALUES
(1, 1, 'DSTV PADI', '1850'),
(2, 4, 'PHCN CONFAM', '1565'),
(3, 2, 'GOTV MAX', '1636');

-- --------------------------------------------------------

--
-- Table structure for table `dataprice`
--

CREATE TABLE `dataprice` (
  `id` int(11) NOT NULL,
  `ref_id` varchar(225) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `data_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataprice`
--

INSERT INTO `dataprice` (`id`, `ref_id`, `price`, `date`, `data_type`) VALUES
(1, '1', '620', '2020-11-11 20:32:00.218978', '2GB'),
(2, '2', '536', '2020-11-12 13:57:08.052190', '1GB'),
(3, '2', '4500', '2020-11-12 13:57:41.727660', '10GB'),
(4, '1', '789', '2020-11-12 13:58:19.014474', '5GB'),
(5, '1', '450', '2020-11-12 14:11:54.193747', '3GB MTN'),
(6, '4', '737', '2020-11-12 14:12:42.061571', '15GB');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ref_num` varchar(255) NOT NULL,
  `transact_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `email`, `ref_num`, `transact_date`) VALUES
(1, '500', 'shokens@gmail.com', 'g91hictddm', '2020-11-05T22:05:15.000Z'),
(2, '1000', 'shokens@gmail.com', 'g91hictddm', '2020-11-05T22:05:15.000Z'),
(3, '1200', 'shokens@gmail.com', '9529jr5ez4', '2020-11-05T22:06:27.000Z'),
(4, '300', 'shokens@gmail.com', '3k1p0l9xv1', '2020-11-05T22:08:30.000Z'),
(5, '4000', 'josh@josh.com', '6l5siibiy0', '2020-11-05T22:32:49.000Z'),
(6, '280', 'josh@josh.com', 'vzw6qtw31q', '2020-11-05T22:33:42.000Z'),
(7, '6000', 'eli@gmail.com', '1j18nxnin1', '2020-11-06T10:25:29.000Z'),
(8, '250', 'eli@gmail.com', 'pcs46o990l', '2020-11-06T13:14:33.000Z'),
(9, '500', 'josh@josh.com', 'vq79p20wd1', '2020-11-07T17:45:07.000Z'),
(10, '500', 'admin@gmail.com', 'm8clr7msho', '2020-11-08T21:58:30.000Z'),
(11, '1000', 'admin@gmail.com', 'ioj9s03jxp', '2020-11-10T17:32:04.000Z');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPhone` bigint(255) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `referral` varchar(255) NOT NULL,
  `unique_code` varchar(255) NOT NULL,
  `reg_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `userEmail`, `userPhone`, `userPass`, `referral`, `unique_code`, `reg_date`) VALUES
(4, 'shokens', 'shokens@gmail.com', 234977838573, 'b59c67bf196a4758191e42f76670ceba', '', 'id5fa492a32515a4.83558550', '2020-11-06 00:02:43.152013'),
(5, 'hope', 'hope@gmail.com', 68675676554, '81dc9bdb52d04dc20036dbd8313ed055', '', 'id5fa49411087697.38319029', '2020-11-06 00:08:49.034745'),
(6, 'eli', 'eli@gmail.com', 6474783883737, '8977ecbb8cb82d77fb091c7a7f186163', '', 'id5fa5247f46bcd6.50878183', '2020-11-06 10:25:03.289841'),
(7, 'josh', 'josh@josh.com', 78969999, '81dc9bdb52d04dc20036dbd8313ed055', '', 'id5fa581bfead2b4.55983578', '2020-11-06 17:02:55.961940'),
(8, 'admin', 'admin@gmail.com', 2348024293102, '21232f297a57a5a743894a0e4a801fc3', '', 'id5fa6f17adf6668.35437454', '2020-11-07 19:11:54.915118'),
(9, 'ade', 'ade@gmail.com', 234977838573, '81dc9bdb52d04dc20036dbd8313ed055', '+234977838573', 'id5fa87abdd91df7.96037883', '2020-11-08 23:09:49.889398');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(20) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `ref_bal` varchar(255) NOT NULL,
  `lastUpdated` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `userEmail`, `balance`, `ref_bal`, `lastUpdated`) VALUES
(1, 'shokens@gmail.com', '1500', '0.00', '2020-11-05 22:08:42.212371'),
(2, 'josh@josh.com', '4780', '0.00', '2020-11-07 17:45:24.170016'),
(3, 'josh@josh.com', '4780', '0.00', '2020-11-07 17:45:24.170016'),
(4, 'shokens@gmail.com', '0.00', '0.00', '2020-11-06 00:02:43.192959'),
(5, 'hope@gmail.com', '0.00', '0.00', '2020-11-06 00:08:49.210553'),
(6, 'eli@gmail.com', '6250', '0.00', '2020-11-06 13:15:00.362897'),
(7, 'josh@josh.com', '4780', '0.00', '2020-11-07 17:45:24.170016'),
(8, 'admin@gmail.com', '1500', '0.00', '2020-11-10 17:32:32.931704'),
(9, 'ade@gmail.com', '0.00', '0.00', '2020-11-08 23:09:49.934783');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airtime`
--
ALTER TABLE `airtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airtimeprice`
--
ALTER TABLE `airtimeprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cable`
--
ALTER TABLE `cable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cableprice`
--
ALTER TABLE `cableprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataprice`
--
ALTER TABLE `dataprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `airtime`
--
ALTER TABLE `airtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `airtimeprice`
--
ALTER TABLE `airtimeprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cable`
--
ALTER TABLE `cable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cableprice`
--
ALTER TABLE `cableprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dataprice`
--
ALTER TABLE `dataprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
