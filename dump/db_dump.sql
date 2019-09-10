SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `webnode`;

DROP TABLE IF EXISTS `ad_campaign`;
CREATE TABLE `ad_campaign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;


DROP TABLE IF EXISTS `ad_group`;
CREATE TABLE `ad_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `ad_campaign_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ad_campaign_id` (`ad_campaign_id`),
  CONSTRAINT `ad_group_ibfk_1` FOREIGN KEY (`ad_campaign_id`) REFERENCES `ad_campaign` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf32;


DROP TABLE IF EXISTS `ad_keyword`;
CREATE TABLE `ad_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(256) NOT NULL,
  `ad_group_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `ad_views` int(11) NOT NULL,
  `ad_clicks` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `conversion_no` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ad_group_id` (`ad_group_id`),
  KEY `currency_id` (`currency_id`),
  CONSTRAINT `ad_keyword_ibfk_1` FOREIGN KEY (`ad_group_id`) REFERENCES `ad_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `ad_keyword_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;


DROP TABLE IF EXISTS `ad_server`;
CREATE TABLE `ad_server` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `options` text NOT NULL,
  `output_type` varchar(64) NOT NULL,
  `return_structure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;


DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;
