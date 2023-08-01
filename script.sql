/*Proyecto Ambiente Web Cliente/Servidor

SOLEMATE

*/
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE SOLEMATE;

USE SOLEMATE;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`,`role`) VALUES
(1, 'tannya', 'tannya', 'Tannya','Granados','admin'),
(2, 'irina', 'irina', 'Irina','Bonilla','user');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
CREATE TABLE `categories` (
  `category_id` INT AUTO_INCREMENT PRIMARY KEY,
  `category_name` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'hombre'),
(2, 'infante'),
(3, 'mujer'),
(4, 'juvenil');


CREATE TABLE `brands` (
  `brand_id` INT AUTO_INCREMENT PRIMARY KEY,
  `brand_name` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Nike'),
(2, 'New Balance'),
(3, 'Adidas');


CREATE TABLE `products` (
  `product_id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_name` VARCHAR(100) NOT NULL,
  `category_id` INT,
  `brand_id` INT,
  `model` VARCHAR(100) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`product_name`, `category_id`, `brand_id`, `model`, `image`)
VALUES
('Nike Air Jordan 1 Low', 1, 1, 'Air Jordan 1 Low', '../img/men/Nike-AirJordan1Low.jpg'),
('Nike Force 1', 2, 1, 'Force 1', '../img/toddler/Nike-Force1.jpg'),
('Nike Air Max 90SE', 3, 1, 'Air Max 90SE', '../img/women/Nike-AirMax90SE.jpg'),
('Nike Air More Uptempo', 4, 1, 'Air More Uptempo', '../img/youth/Nike-AirMoreUptempo.jpg'),
('New Balance 550', 1, 2, '550', '../img/men/NB-550.jpg'),
('New Balance 550', 2, 2, '550', '../img/toddler/NB-550.jpg'),
('New Balance 550', 3, 2, '550', '../img/women/NB-550.jpg'),
('New Balance 574', 4, 2, '574', '../img/youth/NB-574.jpg'),
('Adidas Forum 84 Green', 1, 3, 'Forum 84 Green', '../img/men/Adidas-Forum_84_Low_Shoes_Green_FZ6298_01_standard.jpg'),
('Adidas DNAxLEGO', 2, 3, 'DNAxLEGO', '../img/toddler/Adidas-_DNA_x_LEGOr_Two-Strap_Hook-and-Loop_Shoes_Yellow_HQ1308_01_standard.jpg'),
('Adidas Forum White', 3, 3, 'Forum White', '../img/women/Adidas-Forum_XLG_Shoes_White_IE0236_01_standard.jpg'),
('Adidas Forum White', 4, 3, 'Forum White', '../img/youth/Adidas-Forum_Low_Shoes_White_FY7974_01_standard.jpg');


CREATE TABLE `inventory` (
  `inventory_id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_id` INT,
  `quantity` INT NOT NULL,
  FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `inventory` (`inventory_id`, `product_id`, `quantity`)
VALUES
(1, 1, 10),
(2, 2, 5),
(3, 3, 8),
(4, 4, 12),
(5, 5, 20),
(6, 6, 15),
(7, 7, 18),
(8, 8, 25),
(9, 9, 6),
(10, 10, 3),
(11, 11, 9),
(12, 12, 7);

  
  
COMMIT;



