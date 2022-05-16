-- Database: `dbteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `aprendiz`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `usuario_nuevo`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(45) DEFAULT NULL,
  `Cedula_Usuario` varchar(60) DEFAULT NULL,
  `Correo_Usuario` varchar(60) DEFAULT NULL,
  `Num_Usuario` varchar(60) DEFAULT NULL,
  `Dire_Usuario` varchar(15) DEFAULT NULL,

  PRIMARY KEY (`Id_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `usuario_interesado`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(45) DEFAULT NULL,
  `Cedula_Usuario` varchar(60) DEFAULT NULL,
  `Correo_Usuario` varchar(60) DEFAULT NULL,
  `Num_Usuario` varchar(60) DEFAULT NULL,
  `Observacion` varchar(200) DEFAULT NULL,

  PRIMARY KEY (`Id_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
