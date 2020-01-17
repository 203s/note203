-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 
-- サーバのバージョン： 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `sql_ddl`
--

CREATE TABLE `sql_ddl` (
  `id` int(3) NOT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `format` varchar(200) NOT NULL,
  `text` varchar(200) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `sql_ddl`
--

INSERT INTO `sql_ddl` (`id`, `tag`, `format`, `text`, `url`) VALUES
(1, '作成', 'CREATE DATABASE データベース名;', '「データベース名」というデータベースを作成', 'redume/SQL/1：データベースの定義(DDL)入門.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sql_ddl`
--
ALTER TABLE `sql_ddl`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
