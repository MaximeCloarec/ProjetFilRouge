CREATE TABLE `plats`(
`id_plats` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
`alt_plats` VARCHAR(150),
`img_plats` VARCHAR(150),
`name_plats` VARCHAR(150),
`time_plats` VARCHAR(150),
`id_semaine` INT,
`id_type` INT
);

CREATE TABLE `type`(
`id_type` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
`type_plats` VARCHAR(150) UNIQUE NOT NULL
);

CREATE TABLE `semaine`(
`id_semaine` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
`week_plats` VARCHAR(4) UNIQUE NOT NULL
);

ALTER TABLE plats ADD CONSTRAINT FOREIGN KEY (id_type) REFERENCES type(id_type);
ALTER TABLE plats ADD CONSTRAINT FOREIGN KEY (id_semaine) REFERENCES semaine(id_semaine)