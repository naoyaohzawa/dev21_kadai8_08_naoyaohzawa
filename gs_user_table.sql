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
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `lid` varchar(128) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `lpw` varchar(256) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `kanri_flag` int(1) NOT NULL,
  `life_flag` int(1) NOT NULL,
  `register_date` datetime NOT NULL,
  `unsub_date` datetime DEFAULT NULL,
  `plan_flag` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `email`, `lpw`, `kanri_flag`, `life_flag`, `register_date`, `unsub_date`, `plan_flag`) VALUES
(11, '豊臣秀吉', 'hide', 'hide@gmail', '$2y$10$nTRI5Q1lG7XVZlsTcY5jee68Gbzxq/jRaKZFJhF4O9bNjRqzTaUGS', 0, 0, '2021-10-10 12:49:29', NULL, 1),
(14, 'naoya', 'naoya', 'naoya@gmail', '$2y$10$5nZLoGWjemZJrrJv/wmrDOGt5fOmydFVa8QPQWEAuTXvKs3XlHVUW', 1, 0, '2021-10-10 19:31:07', NULL, 0),
(15, '中条あやみ', 'nakajo', 'nakajo@gmail', '$2y$10$AjMpzQyM0iHlReAVrV/on.Z7qzNN.ASbmFLmujogtU48diQoxqbjO', 0, 0, '2021-10-10 19:32:07', NULL, 1),
(16, '北川景子', 'keiko', 'keiko@gmail', '$2y$10$rF5c/pRTM3glUtB2k523V.sxFO.hGRU1Q4J3CFYfTNBN1WNKqC3se', 1, 0, '2021-10-10 19:32:39', NULL, 2),
(17, '小松菜奈', 'komatsu', 'komatsu@gmail', '$2y$10$K.7i/ewCnQ.adG5H.Ymo4O2oCUpel7cq5MEwY8nALiARWiX6fipN2', 0, 0, '2021-10-10 19:33:03', NULL, 3),
(18, '麻生太郎', 'aso', 'aso@gmail', '$2y$10$4uXPv3T2YFH2IJbkTjL2E.1xXcjLkZGJl0JpMMpDn8lLZhXHnT/ja', 0, 0, '2021-10-14 18:06:07', NULL, 2);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
