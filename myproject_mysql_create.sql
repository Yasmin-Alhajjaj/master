CREATE TABLE `categories` (
	`id` INT(big) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`photo` VARCHAR(255) NOT NULL,
	`description` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `activities` (
	`id` INT(big) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`description` TEXT NOT NULL,
	`location` VARCHAR(255) NOT NULL,
	`price` INT NOT NULL,
	`photo` VARCHAR(255) NOT NULL,
	`phone` INT NOT NULL,
	`time` TIME NOT NULL,
	`category-id` INT(big) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT(big) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL UNIQUE,
	`email_verified_at` TIMESTAMP,
	`password` VARCHAR(255) NOT NULL,
	`phone` INT,
	`user_image` VARCHAR(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `comments` (
	`id` INT(big) NOT NULL AUTO_INCREMENT,
	`Activity_id` INT(big) NOT NULL,
	`user_id` INT(big) NOT NULL,
	`description` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `activities` ADD CONSTRAINT `activities_fk0` FOREIGN KEY (`category-id`) REFERENCES `categories`(`id`);

ALTER TABLE `comments` ADD CONSTRAINT `comments_fk0` FOREIGN KEY (`Activity_id`) REFERENCES `activities`(`id`);

ALTER TABLE `comments` ADD CONSTRAINT `comments_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

