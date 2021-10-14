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
-- テーブルの構造 `ship_type`
--

CREATE TABLE `ship_type` (
  `id` int(11) NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ship_type`
--

INSERT INTO `ship_type` (`id`, `type`) VALUES
(1, '外航ばら積貨物運搬船'),
(2, '外航液体化学薬品ばら積船'),
(3, '内航液化ガスばら積'),
(4, '内航液体化学薬品ばら積船');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ship_type`
--
ALTER TABLE `ship_type`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ship_type`
--
ALTER TABLE `ship_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
