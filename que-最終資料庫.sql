-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-08-26 12:00:57
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db02`
--

-- --------------------------------------------------------

--
-- 資料表結構 `que`
--

CREATE TABLE `que` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `subject_id` int(5) UNSIGNED NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `que`
--

INSERT INTO `que` (`id`, `text`, `vote`, `subject_id`, `sh`) VALUES
(1, '問題一：你最常做什麼運動來促進健康體能呢?', 0, 0, 1),
(2, '1.健走或爬樓梯、慢跑等較不受時間、場地限制的運動。', 5, 1, 1),
(3, '2.仰臥起坐、抬腿及伏地挺身、伸展操、瑜珈等室內運動。', 4, 1, 1),
(4, '3.球類運動、游泳、跳舞、騎腳踏車等加強心肺功能的運動。', 7, 1, 1),
(5, '4.舉重鍛鍊、彈力帶、啞鈴等運用輔助器材鍛鍊肌耐力的運動。', 2, 1, 1),
(6, '問題二：二手菸沒有安全劑量，只要有暴露，就會有危險，請問它會造成身體上哪些危害?', 0, 0, 1),
(7, '1.增加罹患冠狀動脈心臟病及罹病死亡之風險。', 0, 6, 1),
(8, '2.對孩子的的健康會產生許多影響，例如容易咳嗽或打噴嚏、罹患氣喘或讓症狀更嚴重、會因刺激耳咽管，感染中耳炎、肺功能較差、容易罹患呼吸道疾病等。', 0, 6, 1),
(9, '3.孕婦吸入二手菸易造成流產、早產、胎盤早期剝離、子宮感染等疾病。', 0, 6, 1),
(10, '4.長期的暴露會造成更嚴重的胸腔問題和過敏症，還會增加心臟病和肺癌的罹患率。', 2, 6, 1),
(11, '5.以上皆是。', 0, 6, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `que`
--
ALTER TABLE `que`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
