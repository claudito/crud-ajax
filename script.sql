

CREATE TABLE `usuarios` (
  `idusuarios` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `user` varchar(8) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `tipo` enum('admin','user') DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;



INSERT INTO `usuarios` (`idusuarios`, `nombres`, `apellidos`, `user`, `pass`, `tipo`, `fecha_creacion`) VALUES
(1, 'Luis Augusto', 'Claudio', '46794282', '46794282', 'admin', '2016-11-24 13:47:34'),
(2, 'Pedro', 'Ruiz', '123', '123', 'admin', '2016-11-24 13:50:07');