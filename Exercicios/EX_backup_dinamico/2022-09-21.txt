-- TABLE: cliente
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
INSERT INTO `cliente` (`id`, `nome`, `idade`, `sexo`) VALUES ('1', 'felipe', '21', 'm');
INSERT INTO `cliente` (`id`, `nome`, `idade`, `sexo`) VALUES ('2', 'maria', '19', 'f');
INSERT INTO `cliente` (`id`, `nome`, `idade`, `sexo`) VALUES ('3', 'felipe', '21', 'm');
INSERT INTO `cliente` (`id`, `nome`, `idade`, `sexo`) VALUES ('4', 'maria', '19', 'f');

