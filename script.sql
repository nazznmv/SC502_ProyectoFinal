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
COMMIT;

SELECT * FROM USERS;
