CREATE TABLE IF NOT EXISTS `visitor_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `visitor_counter` (`id`, `visitor_counter`) VALUES
(1, 10004);