/* Database export results for db db_equipment */

/* Preserve session variables */
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS=0;

/* Export data */

/* Table structure for tbl_admin */
CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/* data for Table tbl_admin */
INSERT INTO `tbl_admin` VALUES (1,"admin","21232f297a57a5a743894a0e4a801fc3","Admin Equipment","2017-10-12 13:11:01","2017-10-12 13:11:01");

/* Table structure for tbl_data */
CREATE TABLE `tbl_data` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `no_register` varchar(255) DEFAULT NULL,
  `waktu_pengadaan` varchar(30) DEFAULT NULL,
  `penempatan_alat` varchar(75) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* data for Table tbl_data */

/* Restore session variables to original values */
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
