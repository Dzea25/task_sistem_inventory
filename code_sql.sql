-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_inventory
CREATE DATABASE IF NOT EXISTS `db_inventory` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_inventory`;

-- Dumping structure for table db_inventory.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spesifikasi` varchar(200) DEFAULT NULL,
  `stok` int(11) DEFAULT '0',
  `lokasi` varchar(200) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.barang: ~3 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `spesifikasi`, `stok`, `lokasi`, `kategori_id`) VALUES
	(1, 'AC Panasonic', 2, 'Lab LAN', 2),
	(2, 'Meja 60x40 cm', 36, 'Lab WAN', 3),
	(3, 'Kursi', 38, 'Lab WAN', 3);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table db_inventory.barangkeluar
CREATE TABLE IF NOT EXISTS `barangkeluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_keluar` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT '0',
  `barang_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `barang_id` (`barang_id`),
  CONSTRAINT `barangkeluar_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.barangkeluar: ~0 rows (approximately)
/*!40000 ALTER TABLE `barangkeluar` DISABLE KEYS */;
INSERT INTO `barangkeluar` (`id`, `tgl_keluar`, `jumlah`, `barang_id`) VALUES
	(1, '2022-12-13', 6, 2);
/*!40000 ALTER TABLE `barangkeluar` ENABLE KEYS */;

-- Dumping structure for table db_inventory.barangmasuk
CREATE TABLE IF NOT EXISTS `barangmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_masuk` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT '0',
  `barang_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `barang_id` (`barang_id`),
  CONSTRAINT `barangmasuk_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.barangmasuk: ~0 rows (approximately)
/*!40000 ALTER TABLE `barangmasuk` DISABLE KEYS */;
INSERT INTO `barangmasuk` (`id`, `tgl_masuk`, `jumlah`, `barang_id`) VALUES
	(1, '2022-12-13', 2, 3);
/*!40000 ALTER TABLE `barangmasuk` ENABLE KEYS */;

-- Dumping structure for table db_inventory.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(200) DEFAULT NULL,
  `keterangan` enum('M','A','BHP','BTHP') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inventory.kategori: ~3 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `kategori`, `keterangan`) VALUES
	(1, 'Alat Praktek IOT', 'A'),
	(2, 'Pendingin Ruangan', 'M'),
	(3, 'Sarana dan Prasarana', 'M');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for function db_inventory.ketKategori
DELIMITER //
CREATE FUNCTION `ketKategori`(kodeKat VARCHAR(4)) RETURNS varchar(40) CHARSET latin1
    DETERMINISTIC
BEGIN
	DECLARE tKategori VARCHAR(40);
	
	IF kodeKat = "M" THEN
		SET tKategori = "Modal";
	ELSEIF kodeKat = "A" THEN
		SET tKategori = "Alat";
	ELSEIF kodeKat = "BHP" THEN
		SET tKategori = "Barang Habis Pakai";
	ELSEIF kodeKat = "BTHP" THEN
		SET tKategori = "Barang Tidak Habis Pakai";
	END IF;

RETURN(tKategori);
	
END//
DELIMITER ;

-- Dumping structure for table db_inventory.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_username` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table db_inventory.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`) VALUES
	(1, 'Zxea_25', 'admin', '0192023a7bbd73250516f069df18b500'),
	(2, 'Abyan', 'abyan', '202cb962ac59075b964b07152d234b70'),
	(3, 'Arkaan', 'arkaan', '827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for trigger db_inventory.after_barangkeluar_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER after_barangkeluar_insert
AFTER INSERT ON barangkeluar FOR EACH ROW
BEGIN 
	UPDATE barang SET barang.stok=barang.stok-NEW.jumlah WHERE barang.id=NEW.barang_id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger db_inventory.after_barangmasuk_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER after_barangmasuk_insert
AFTER INSERT ON barangmasuk FOR EACH ROW
BEGIN 
	UPDATE barang SET barang.stok=barang.stok+NEW.jumlah WHERE barang.id=NEW.barang_id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
