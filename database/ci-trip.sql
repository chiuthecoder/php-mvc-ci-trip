CREATE SCHEMA `ci-trip` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

USE `ci-trip`;


CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`)
  );


CREATE TABLE IF NOT EXISTS `trips` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `users_id` INT NULL,
  `trip_id` INT NULL,
  `name` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  `date_start` DATETIME NULL,
  `date_end` DATETIME NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`));



INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('1', 'Chiu', 'chiu@gmail.com', '11111111', '2015-05-09 11:52:41', '2015-05-09 11:52:41');
INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('2', 'Tiger', 'tiger@gmail.com', '11111111', '2015-05-09 11:52:41', '2015-05-09 11:52:41');
INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('3', 'Cat', 'cat@gmail.com', '11111111', '2015-05-09 11:52:41', '2015-05-09 11:52:41');
INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('4', 'Fish', 'fish@gmail.com', '11111111', '2015-05-09 11:52:41', '2015-05-09 11:52:41');


INSERT INTO `trips` (`id`, `users_id`, `trip_id`, `name`, `description`, `date_start`, `date_end`) VALUES ('1', '1', '1', 'London', 'Visiting', '2015-08-01 00:00:00', '2015-08-01 00:00:00');
INSERT INTO `trips` (`id`, `users_id`, `trip_id`, `name`, `description`, `date_start`, `date_end`) VALUES ('2', '1', '2', 'Paris', 'Workshop', '2015-08-01 00:00:00', '2015-08-01 00:00:00');
INSERT INTO `trips` (`id`, `users_id`, `trip_id`, `name`, `description`, `date_start`, `date_end`) VALUES ('3', '2', '3', 'Taipei', 'Visiting', '2015-08-01 00:00:00', '2015-08-01 00:00:00');
INSERT INTO `trips` (`id`, `users_id`, `trip_id`, `name`, `description`, `date_start`, `date_end`) VALUES ('4', '3', '4', 'Korea', 'Conference', '2015-08-01 00:00:00', '2015-08-01 00:00:00');
INSERT INTO `trips` (`id`, `users_id`, `trip_id`, `name`, `description`, `date_start`, `date_end`) VALUES ('5', '4', '5', 'Mosco', 'Visiting', '2015-08-01 00:00:00', '2015-08-01 00:00:00');
INSERT INTO `trips` (`id`, `users_id`, `trip_id`, `name`, `description`, `date_start`, `date_end`) VALUES ('6', '4', '6', 'Japan', 'Workshop', '2015-08-01 00:00:00', '2015-08-01 00:00:00');
