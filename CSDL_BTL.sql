CREATE TABLE `admin` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`fullname` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`createdate` DATETIME NOT NULL,
	`deleted_at` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:00',
	`is_block` TINYINT(4) NOT NULL DEFAULT '0',
	`permision` TINYINT(4) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `username` (`username`),
	UNIQUE INDEX `email` (`email`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM
ROW_FORMAT=DEFAULT

INSERT INTO admin(username, password, email, fullname, createdate)
VALUES('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'ADMIN', now());

CREATE TABLE `posts` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	`content` TEXT NULL COLLATE 'utf8_general_ci',
	`user_id` INT(11) NULL DEFAULT NULL,
	`is_public` TINYINT(4) NULL DEFAULT '0',
	`createdate` DATETIME NULL DEFAULT NULL,
	`updatedate` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:00',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM
ROW_FORMAT=DEFAULT
AUTO_INCREMENT=3



CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `deleted_at` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:00',
  `user_level` tinyint(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;