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


SELECT column_name
FROM table_name
[ 
    WHERE dieu_kien 
    GROUP BY column_name 
    HAVING dieu_kien_group
    ORDER BY column_name ASC | DESC
    LIMIT position, quantity
]

-- 1. 
SELECT *
FROM products
--  2.
SELECT name, price, image 
FROM products
ORDER BY price ASC, name DESC

-- 5
SELECT name, detail, price 
FROM products 
WHERE name LIKE '%iphone%';

SELECT name, detail, price 
FROM products 
WHERE name LIKE 'iphone%';  -- '%iphone'

-- 6
SELECT *
FROM products 
WHERE name LIKE '%macbook%'
AND price > 25000000;

-- 7
SELECT *
FROM products 
WHERE price >= 500000
AND price <= 1000000

SELECT *
FROM products 
WHERE price BETWEEN 500000 AND 1000000


-- 9
SELECT *
FROM products 
WHERE name = 'iPhone X 256GB'
OR name = 'iPhone 8 Plus 256GB'
OR name = 'iPhone 7 Plus 32GB';

SELECT *
FROM products 
WHERE name IN (
    'iPhone X 256GB', 
    'iPhone 8 Plus 256GB', 
    'iPhone 7 Plus 32GB'
);

-- 10

SELECT name, detail, price 
FROM products 
ORDER BY price DESC 
LIMIT 0,10; -- page=1

SELECT name, detail, price 
FROM products 
ORDER BY price DESC 
LIMIT 10,10; -- page=2

-- 13
SELECT * FROM `categories` ORDER BY name ASC

-- 14
SELECT name, price, image 
FROM products
ORDER BY price DESC, name ASC

-- 19
SELECT avg(price) AS DGTB
FROM products

SELECT sum(price)/count(id) AS DGTB
FROM products



SELECT column_name
FROM table_name1, table_name2
[ 
    WHERE dieu_kien_lien_ket (PK = FK)
    AND dieu_kien_loc
    GROUP BY column_name 
    HAVING dieu_kien_group
    ORDER BY column_name ASC | DESC
    LIMIT position, quantity
]

SELECT column_name
FROM table_name1
[ 
    INNER JOIN table_name2 ON dieu_kien_lien_ket (PK = FK)
    WHERE dieu_kien_loc
    GROUP BY column_name 
    HAVING dieu_kien_group
    ORDER BY column_name ASC | DESC
    LIMIT position, quantity
]


-- 20
SELECT p.name, c.name, detail, price
FROM products AS p, categories AS c
WHERE id_type = c.id

SELECT p.name AS tensp, c.name AS tenloai, detail, price
FROM products AS p
INNER JOIN categories AS c
ON id_type = c.id


-- 21.1
SELECT c.name AS tenloai, count(p.id) AS tongSP 
FROM products AS p
INNER JOIN categories AS c
ON id_type = c.id
WHERE c.name = 'phụ kiện'
OR c.name = 'iMac'
GROUP BY c.name
HAVING tongSP >= 10
ORDER BY tongSP ASC

-- 21.2 3
SELECT c.name AS tenloai, avg(p.price) AS DGTB,
 min(p.price) AS DGMIN,  max(p.price) AS DGMAX
FROM products AS p
INNER JOIN categories AS c
ON id_type = c.id
GROUP BY c.name

-- 21.6

SELECT c.name AS tenloai, avg(p.price) AS DGTB
FROM products AS p
INNER JOIN categories AS c
ON id_type = c.id
WHERE c.name = 'Macbook Pro Retina'
-- GROUP BY c.name

-- 4
SELECT c.name AS tenloai, sum(p.price) AS tongtien,
count(p.id) AS tongSP
FROM products AS p
INNER JOIN categories AS c
ON id_type = c.id
WHERE price BETWEEN 50000000 AND 100000000
GROUP BY c.name

-- 5
SELECT b.id AS SOHD, date_order, total, sum(quantity) as tongsoluong
FROM bills b
INNER JOIN bill_detail d
ON b.id = d.id_bill
GROUP BY b.id
