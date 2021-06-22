CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `browser_name` varchar(255) NOT NULL,
  `browser_version` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `visitor` (`id`, `browser_name`, `browser_version`, `type`, `os`, `url`, `ref`, `added_on`) VALUES
(1, 'Chrome', '77.0.3865.120', 'PC', 'Window', 'http//127.0.0.1/php/visitor/index.php', '', '2019-10-29 08:42:03'),
(2, 'Chrome', '77.0.3865.120', 'PC', 'Window', 'http//127.0.0.1/php/visitor/about.php', 'http://127.0.0.1/php/visitor/index.php', '2019-10-29 08:42:13'),
(3, 'Chrome', '77.0.3865.120', 'PC', 'Window', 'http//127.0.0.1/php/visitor/index.php', 'http://127.0.0.1/php/visitor/about.php', '2019-10-29 08:42:26');

ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
