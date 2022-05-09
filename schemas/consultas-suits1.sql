CREATE DATABASE `suits1`;

USE DATABASE `suits1`;

CREATE TABLE `suits1`.`t_graficas` (
  `id` INT NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `vram` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

INSERT INTO `suits1`.`t_graficas` (`marca`, `modelo`, `vram`) VALUES ('Zotac', 'RTX', '12');