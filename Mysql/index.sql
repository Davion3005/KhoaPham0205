CREATE TABLE `php0205`.`products` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , 
    `price` DOUBLE NOT NULL DEFAULT '0' , 
    `image` VARCHAR(100) NULL DEFAULT NULL , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_hide, 1_show' , 
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP 
);


ALTER TABLE `products` 
ADD `promt_price` FLOAT NOT NULL DEFAULT '0' 
AFTER `price`;

ALTER TABLE `products` 
CHANGE `promt_price` `promt_price` DOUBLE NOT NULL DEFAULT '0';

users
id name email password phone address gender status 

CREATE TABLE `php0205`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NULL DEFAULT NULL , 
    `email` VARCHAR(50) NOT NULL , 
    `password` VARCHAR(150) NOT NULL , 
    `phone` VARCHAR(50) NULL DEFAULT NULL , 
    `address` VARCHAR(255) NULL DEFAULT NULL , 
    `gender` VARCHAR(10) NULL DEFAULT NULL , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_inactive, 1_active' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;



product_type 
id name desc status

CREATE TABLE `php0205`.`product_type` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `desc` TEXT NULL DEFAULT NULL ,
    `status` TINYINT NOT NULL DEFAULT '0' COMMENT '0_hide, 1_show' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;