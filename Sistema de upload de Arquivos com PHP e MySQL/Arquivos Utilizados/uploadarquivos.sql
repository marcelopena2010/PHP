SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `arquivos` (
  `arquivo_id` int(11) NOT NULL auto_increment,
  `arquivo_nome` varchar(255) NOT NULL,
  `arquivo_link` varchar(255) NOT NULL,
  PRIMARY KEY  (`arquivo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
