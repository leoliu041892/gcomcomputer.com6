CREATE TABLE `user` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `username` char(15) NOT NULL default '',
  `password` char(32) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `regdate` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;