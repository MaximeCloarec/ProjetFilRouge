CREATE DATABASE gourmetbox;
USE gourmetbox;
CREATE TABLE `users` (
	`id_users` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`login_users` VARCHAR(50) NOT NULL UNIQUE,
	`password_users` VARCHAR(150) NOT NULL,
	`numberstreet_users` VARCHAR(100) DEFAULT NULL,
	`city_users` VARCHAR(255) DEFAULT NULL,
	`postal_users` VARCHAR(6) DEFAULT NULL,
	`country_users` VARCHAR(6) DEFAULT 'France',
	`rememberMe_users` VARCHAR(255),
	`name_users` VARCHAR(255) DEFAULT NULL,
	`firstname_users` VARCHAR(255) DEFAULT NULL,
    `id_role` INT
    );
CREATE TABLE `role` (
	`id_role` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
    `role` VARCHAR(50)
    );
ALTER TABLE users ADD CONSTRAINT FOREIGN KEY (id_role) REFERENCES role(id_role)