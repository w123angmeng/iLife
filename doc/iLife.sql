

SET FOREIGN_KEY_CHECKS=0;


#####################Create iLife database######################################################################
DROP  DATABASE IF EXISTS  iLife;
CREATE DATABASE iLife DEFAULT CHARSET utf8;
USE  iLife;
#####################Create iLife database end##################################################################

-- ----------------------------
-- Table structure for i_goods_info
-- ----------------------------
DROP TABLE IF EXISTS `i_goods_info`;
CREATE TABLE `i_goods_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_id` int(10) unsigned NOT NULL COMMENT '真实商品id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `unit` varchar(5) NOT NULL COMMENT '商品单位',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sell_num` int(10) unsigned DEFAULT '0',
  `image` varchar(100) DEFAULT '',
  `oper_time` datetime NOT NULL
  PRIMARY KEY (`id`),
  KEY `idx_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for i_goods_cart_info
-- ----------------------------
DROP TABLE IF EXISTS `i_goods_cart_info`;
CREATE TABLE `i_goods_cart_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_id` int(10) unsigned NOT NULL COMMENT '真实商品id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `unit` varchar(5) NOT NULL COMMENT '商品单位',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `num` int(10) unsigned DEFAULT '0',
  `total_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `image` varchar(100) DEFAULT '',
  `oper_time` datetime NOT NULL
  PRIMARY KEY (`id`),
  KEY `idx_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;