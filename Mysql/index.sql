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


-- 1-1
-- 1-n 
-- n-n

-- products n <-> 1 product_type

ALTER TABLE `products` 
ADD CONSTRAINT `FK_PRODUCTS_VS_TYPE` 
    FOREIGN KEY (`type_id`) 
    REFERENCES `product_type`(`id`) 
    ON DELETE RESTRICT 
    ON UPDATE RESTRICT;


INSERT INTO product_type (`name`, `desc`, `status`)
VALUES ('Oppo', 'Mô tả cho loại sản phẩm Oppo', 1);

INSERT INTO products(type_id,name,price,promt_price)
VALUES (2, 'Samsung XX', 1000000, 9900000),
        (2, 'Samsung XY', 3000000, 0);


UPDATE products 
SET status = 1,
    price=10500000
WHERE id=5

DELETE FROM products 
WHERE id=6


