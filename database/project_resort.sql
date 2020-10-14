-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-20 03:45:23
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project_resort`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `sid` int(11) NOT NULL,
  `activityname` varchar(255) NOT NULL,
  `activityphoto_id` varchar(255) NOT NULL COMMENT '讀取照片的id',
  `activitycategory_sid` int(11) NOT NULL COMMENT '活動分類功能(最後有時間再做) EX: 海上、森林、室內的分類清單',
  `price` int(11) NOT NULL,
  `introduction` text NOT NULL COMMENT '活動說明文字'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `approval` varchar(11) CHARACTER SET utf8 NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `email`, `message`, `approval`, `create_date`) VALUES
(1, 'Marcy', 'ming@gg.com', 'ㄋdfgdfg', '', '2020-08-05 15:11:47'),
(2, 'Test20200805', 'test@gmail.com', 'test123', '', '2020-08-05 15:25:55'),
(3, '123', '123@gmail.com', '123', '', '2020-08-05 15:29:54');

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '登入時判斷的帳號',
  `password` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '密碼',
  `hash` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '亂數產生的密碼',
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '姓氏',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '名子',
  `birth` date NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_date` datetime NOT NULL COMMENT '建構此筆會員資料的時間',
  `singin_status` int(11) NOT NULL COMMENT '判斷會員登出入的狀態',
  `memberphoto` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`member_id`, `email`, `password`, `hash`, `lastname`, `name`, `birth`, `country`, `create_date`, `singin_status`, `memberphoto`) VALUES
(1, 'abc@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '鍾', '世佑', '2020-08-03', 'Taiwan', '2020-08-03 19:47:46', 0, '7'),
(2, 'zxc@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '12345678', '林', '映辰', '2020-05-02', 'Chile', '2020-08-03 19:47:46', 0, ''),
(3, 'efg@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '55ab8373d98f00beb0412d9f1f78961f', '林', '小明', '0000-00-00', '', '2020-08-04 20:13:11', 0, ''),
(4, '123@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '44aaa7cf962a61ee3f4bbfbeef39ff3c', 'chang', 'huilin', '0000-00-00', '', '2020-08-04 20:15:30', 0, ''),
(5, '456@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '5eb9c6c72e082e76581a6b352de50681', 'Test', 'Test', '0000-00-00', '', '2020-08-04 20:30:46', 0, ''),
(6, 'chris@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '93cc9ad92965d90baf25c019645dee00', '李', '涵', '0000-00-00', '', '2020-08-05 12:08:33', 0, ''),
(7, 'abc123456@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '0835d2bf56b260009ff1d643705d7faa', '李', 'Test', '0000-00-00', '', '2020-08-07 11:18:53', 0, ''),
(9, 'emma@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '4eae45e67378abb874fd336d66a8dad6', '洪', 'EMMA', '2020-08-12', 'Taiwan123', '2020-08-11 18:42:31', 0, ''),
(10, '0812@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '866aceb28276d26fdb22bf2c4e641591', '鍾123', '世佑123', '0000-00-00', '', '2020-08-12 16:24:38', 0, ''),
(11, '0818@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '59dae299392807750fee4f52077814a9', '大E', '大E', '0000-00-00', '', '2020-08-18 19:51:22', 0, '');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL COMMENT '各別會員選購的明細',
  `order_sid` int(11) NOT NULL COMMENT '該筆會員的訂單編號',
  `member_sid` int(11) NOT NULL COMMENT '該會員的編號',
  `order_sum` int(11) NOT NULL COMMENT '顯示總金額',
  `order_date` datetime NOT NULL COMMENT '該筆訂單的選購日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE `order_detail` (
  `sid` int(11) NOT NULL,
  `order_sid` varchar(255) NOT NULL COMMENT '該筆訂單的編號',
  `checkin` int(11) NOT NULL COMMENT '讀取頁面產生的入住日期',
  `checkout` int(11) NOT NULL COMMENT '讀取頁面產生的退房日期',
  `staynights` int(11) NOT NULL COMMENT '退房日-入房日(入住天數) 幾晚，需克服月初-月底的計算問題',
  `people` int(11) NOT NULL COMMENT '入住人數(抓預約人數的欄位)',
  `roomname` varchar(255) NOT NULL COMMENT '讀取rooms資料庫的roomname',
  `roomphoto_id` varchar(255) NOT NULL COMMENT '讀取房間照片的id',
  `room_price` int(11) NOT NULL COMMENT '用php讀取rooms的price * order_detail 的 room_quantity',
  `room_quantity` int(11) NOT NULL COMMENT '用php讀取下拉選單的房間數量',
  `activityname` varchar(255) NOT NULL COMMENT '讀取activity的activityname',
  `activityphoto_id` varchar(255) NOT NULL COMMENT '讀取活動照片的id',
  `activity_price` int(11) NOT NULL COMMENT '用php讀取activity的price * order_detail 的 activity_quantity',
  `activity_quantity` int(11) NOT NULL COMMENT '讀取activity的下拉選單的次數'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `payment_detail`
--

CREATE TABLE `payment_detail` (
  `sid` int(11) NOT NULL COMMENT '付款頁面的payment_detail',
  `order_sid` varchar(255) NOT NULL COMMENT '該筆訂單的編號',
  `checkin` int(11) NOT NULL COMMENT '讀取order_detail的checkin',
  `checkout` int(11) NOT NULL COMMENT '讀取order_detail的checkout',
  `staynights` int(11) NOT NULL COMMENT '讀取order_detail的people',
  `people` int(11) NOT NULL COMMENT '讀取order_detail的people',
  `roomname` varchar(255) NOT NULL COMMENT '讀取rooms的roomphoto_id',
  `roomphoto_id` varchar(255) NOT NULL COMMENT '讀取rooms的roomphoto_id',
  `room_price` int(11) NOT NULL COMMENT '讀取order_detail 的 room_price',
  `room_quantity` int(11) NOT NULL COMMENT '讀取order_detail 的 room_quantity',
  `activityname` varchar(255) NOT NULL COMMENT '讀取activity的activityname',
  `activityphoto_id` varchar(255) NOT NULL COMMENT '讀取activity的activityphoto_id',
  `activity_price` int(11) NOT NULL COMMENT '讀取order_detail 的 讀取order_detail 的 activity_price',
  `activity_quantity` int(11) NOT NULL COMMENT '讀取order_detail 的 activity_quantity',
  `order_sum` int(11) NOT NULL COMMENT '總金額'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `rooms`
--

CREATE TABLE `rooms` (
  `sid` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `roomphoto_id` varchar(255) NOT NULL COMMENT '讀取照片的id',
  `roomcategory_sid` int(11) NOT NULL COMMENT '房間分類功能(有時間再做)',
  `roomtype` varchar(255) NOT NULL COMMENT '房間分類功能(雙人、四人、六人房)',
  `price` int(11) NOT NULL COMMENT '帶出右邊價格/晚的金額',
  `introduction` text NOT NULL COMMENT '房型說明文字'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`,`email`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`,`member_sid`);

--
-- 資料表索引 `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `activity`
--
ALTER TABLE `activity`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '各別會員選購的明細';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '付款頁面的payment_detail';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rooms`
--
ALTER TABLE `rooms`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
