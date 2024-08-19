CREATE TABLE `users` (
	`id_users` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`login_users` VARCHAR(50) NOT NULL UNIQUE,
	`password_users` VARCHAR(150) NOT NULL,
	`numberstreet_users` VARCHAR(100) DEFAULT NULL,
	`city_users` VARCHAR(255) DEFAULT NULL,
	`postal_users` VARCHAR(6) DEFAULT NULL,
	`country_users` VARCHAR(6) DEFAULT 'France',
	`rememberMe_users` VARCHAR(255),
	`name_users` VARCHAR(45),
	`firstname_users` VARCHAR(45),
	PRIMARY KEY(`id_users`)
);


CREATE TABLE `plats` (
	`id_plats` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`alt_plats` VARCHAR(255) NOT NULL,
	`img_plats` VARCHAR(255) NOT NULL,
	`name_plats` VARCHAR(255) NOT NULL,
	`time_plats` VARCHAR(2) NOT NULL,
	`type_plats` VARCHAR(255) NOT NULL,
	`week_plats` VARCHAR(255),
	PRIMARY KEY(`id_plats`)
);


