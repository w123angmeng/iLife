 `food_info_users`
--


DROP TABLE IF EXISTS `food_info_users`;

CREATE TABLE IF NOT EXISTS `food_info_users` 
(
  `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
 
 `username` varchar(30) NOT NULL,
 
 `password` varchar(200) NOT NULL,
  
`email` varchar(50) NOT NULL DEFAULT '',
 
 `role` varchar(30) NOT NULL DEFAULT 'admin',
 
 `salt` varchar(10) NOT NULL,
  
`status` tinyint(4) NOT NULL,
 
 `joindate` int(10) UNSIGNED NOT NULL,
 
 `joinip` varchar(15) NOT NULL,
  
`lastvisit` int(10) UNSIGNED NOT NULL,
 
 `lastip` varchar(15) NOT NULL,
 
 `remark` varchar(500) NOT NULL,
  `starttime` int(10) UNSIGNED NOT NULL,
  `endtime` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`uid`),
  
UNIQUE KEY `username` (`username`),
  
KEY `index_role` (`role`)
) 
ENGINE=MyISAM AUTO_INCREMENT=2 
DEFAULT CHARSET=utf8;

--
-- ת����е����� `food_info_users`
--

INSERT INTO `food_info_users` (`uid`, `username`, `password`, `email`, `role`, `salt`, `status`, `joindate`, `joinip`, `lastvisit`, `lastip`, `remark`, `starttime`, `endtime`) VALUES
(1, 'admin', '3c9f403476e9cea86f1edb9eff01f666', '', 'admin', '3754', 0, 0, '', 0, '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
