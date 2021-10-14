-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 10 月 14 日 14:18
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db7`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ship_list`
--

CREATE TABLE `ship_list` (
  `id` int(11) NOT NULL,
  `shipName` varchar(128) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `built` date NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ship_list`
--

INSERT INTO `ship_list` (`id`, `shipName`, `built`, `type`) VALUES
(1, 'KASHING', '2011-10-03', '1'),
(4, 'CLARA INSIGNIA', '2002-10-03', '3'),
(5, 'LESEDI QUEEN', '2003-10-03', '2'),
(7, 'GLOBAL AGLAIA', '2018-10-03', '2'),
(11, '光曄丸', '2000-10-03', '4');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ship_list`
--
ALTER TABLE `ship_list`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ship_list`
--
ALTER TABLE `ship_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
