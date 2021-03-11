CREATE TABLE `user`(
	`id` int(11) AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`position` varchar(255) NOT NULL,
	`updated` timestamp ON UPDATE CURRENT_TIMESTAMP(),
	primary key (`id`)
);

CREATE TABLE `client` (
	`id` int(11) AUTO_INCREMENT,
	`dob` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`phoneNumber` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`type` varchar(255) NOT NULL,
	`idManagement` int(11) NOT NULL,
	`updated` timestamp ON UPDATE CURRENT_TIMESTAMP(),
	primary key (`id`)
);
CREATE TABLE `bill` (
	`id` int(11) AUTO_INCREMENT,
	`time` date ,
	`totalAmount` int(11),
	`idClient` int(11),
	`idStaff` int(11),
	`updated` timestamp ON UPDATE CURRENT_TIMESTAMP(),
	primary key (`id`)
);

CREATE TABLE `revenue`(
	`id` int(12) AUTO_INCREMENT,
	`year` int(12),
	`domestic` int(12),
	`foreigner` int(12),
	`totalcustomer` int(12),
	primary key (`id`)
);
INSERT INTO `user` (`id`, `name`, `username`, `password`, `position`, `updated`) VALUES (NULL, 'Hà Đức Hướng', 'hdhuong', MD5('123456'), 'Admin', current_timestamp()), (NULL, 'Bùi Xuân Huấn', 'huanrose', MD5('123456'), 'Người dùng', current_timestamp());

INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Hà Đức Hướng','1999-11-03','Ninh Bình', '0989312321', 'hdhuong@gmail.com', 'KH đặc biệt', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Nguyễn Văn A','2000-12-05', 'Hải Phòng', '0989312456', 'vana@gmail.com', 'KH tiềm năng', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Đào Thị Cê', '1970-03-06',  'Quảng Ninh', '0989312789', 'thice@gmail.com', 'KH thường xuyên', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL,  'Trần Văn Dần','1968-09-10',  'Sài Gòn', '0989312910', 'trandan@gmail.com', 'KH thường xuyên', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Bùi Xuân Huấn','1992-01-13', 'Lào Cai', '0989311123', 'huanrose@gmail.com', 'KH tiềm năng', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Ngô Bá Khá','1976-05-24','Bắc Ninh', '0989312123', 'khabanh@gmail.com', 'KH tiềm năng', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Tôn Văn Dương','1996-02-28','Hà Nội', '0989312456', 'duongcute@gmail.com', 'KH tiềm năng', '1', current_timestamp());
INSERT INTO `client` (`id`, `name`,`dob`, `address`, `phoneNumber`, `email`, `type`, `idManagement`, `updated`) VALUES (NULL, 'Nguyễn Động Lực','1999-12-31','Đà Nẵng', '0989312167', 'dongluc@gmail.com', 'KH tiềm năng', '1', current_timestamp());

INSERT INTO `bill` (`id`, `time`, `totalAmount`, `idClient`, `idStaff`, `updated`) VALUES (NULL, '2020-07-10', '1200000', '1', '2', current_timestamp());
INSERT INTO `bill` (`id`, `time`, `totalAmount`, `idClient`, `idStaff`, `updated`) VALUES (NULL, '2020-06-15', '2250000', '6', '2', current_timestamp());
INSERT INTO `bill` (`id`, `time`, `totalAmount`, `idClient`, `idStaff`, `updated`) VALUES (NULL, '2020-05-12', '3350000', '6', '4', current_timestamp());

INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2010', '1000', '50', '1050');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2011', '2000', '2500', '4500');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2012', '4600', '4000', '9600');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2013', '7000', '5500', '12500');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2014', '10300', '6700', '17000');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2015', '10700', '7800', '18500');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2016', '11500', '8700', '20200');
INSERT INTO `revenue` (`id`, `year`, `domestic`, `foreigner`, `totalcustomer`) VALUES (NULL, '2017', '12500', '9000', '21500');