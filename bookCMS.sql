-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.7.25 - MySQL Community Server (GPL)
-- 服务器OS:                        Win64
-- HeidiSQL 版本:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for yii2basic
CREATE DATABASE IF NOT EXISTS `yii2basic` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii2basic`;

-- Dumping structure for table yii2basic.book_infomation
CREATE TABLE IF NOT EXISTS `book_infomation` (
  `book_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `book_isbn` varchar(20) DEFAULT NULL,
  `book_name` varchar(20) DEFAULT '',
  `book_version` varchar(20) DEFAULT '',
  `book_type` varchar(20) DEFAULT '',
  `book_press` varchar(20) DEFAULT '',
  `book_author` varchar(20) DEFAULT '',
  `book_status` varchar(20) DEFAULT '',
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `book_id` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Dumping data for table yii2basic.book_infomation: ~23 rows (大约)
/*!40000 ALTER TABLE `book_infomation` DISABLE KEYS */;
INSERT INTO `book_infomation` (`book_id`, `book_isbn`, `book_name`, `book_version`, `book_type`, `book_press`, `book_author`, `book_status`) VALUES
	(1, '2-02-033598-0', '人性的优点', '1.1', '励志', '66.66', '卡耐基', '上线'),
	(2, '2-02-033598-0', '人性的弱点', '1.1', '励志', '66.66', '卡耐基', '上线'),
	(3, '2-02-033598-0', '人性', '1.1', '励志', '66.66', '卡耐基', '下线'),
	(4, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(5, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(6, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(7, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(8, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(9, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(10, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(11, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(12, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(13, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(14, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(15, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(16, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(17, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(18, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(19, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(20, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(21, '0011225', '人性', '1.0', '励志', '66.0', '卡耐基', '下线'),
	(22, '2-02-033598-0', '人性的优点', '1.1', '励志', '66.66', '卡耐基', '上线了'),
	(23, '2-02-033598-0', '人性的优点', '1.1', '励志', '66.66', '卡耐基', '上线了');
/*!40000 ALTER TABLE `book_infomation` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
