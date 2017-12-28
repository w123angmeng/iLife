

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `t_id` int(10) unsigned NOT NULL COMMENT '真实商品id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `unit` varchar(5) NOT NULL COMMENT '商品单位',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sell_num` int(10) unsigned DEFAULT '0',
  `image` varchar(100) DEFAULT '',
  `oper_time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for i_goods_cart_info
-- ----------------------------
DROP TABLE IF EXISTS `i_goods_cart_info`;
CREATE TABLE `i_goods_cart_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `t_id` int(10) unsigned NOT NULL COMMENT '真实商品id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `unit` varchar(5) NOT NULL COMMENT '商品单位',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `num` int(10) unsigned DEFAULT '0',
  `total_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `image` varchar(100) DEFAULT '',
  `uid` int(10) unsigned NOT NULL COMMENT '操作人id',
  `username` varchar(30) NOT NULL COMMENT '操作人',
  `oper_time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for i_order_info
-- ----------------------------
DROP TABLE IF EXISTS `i_order_info`;
CREATE TABLE `i_order_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `order_no` varchar(50) NOT NULL COMMENT '订单号',
  `total_price` decimal(10,2) NOT NULL COMMENT '订单金额',
  `total_num` int(10) unsigned DEFAULT 0 COMMENT '商品总数',
  `oper_time` datetime NOT NULL COMMENT '下单时间',
  `uid` int(10) unsigned NOT NULL COMMENT '下单人id',
  `username` varchar(30) NOT NULL COMMENT '下单人',
  `is_valid` tinyint(1) unsigned NOT NULL COMMENT '是否有效',
  `cancle_flag` tinyint(1) unsigned NOT NULL COMMENT '是否取消'
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for i_order_goods_info
-- ----------------------------
DROP TABLE IF EXISTS `i_order_goods_info`;
CREATE TABLE `i_order_goods_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id' PRIMARY KEY,
  `order_no` varchar(50) NOT NULL COMMENT '订单号',
  `goods_id` int(10) unsigned NOT NULL COMMENT '商品id',
  `goods_t_id` int(10) unsigned NOT NULL COMMENT '商品t_id',
  `goods_name` varchar(20) NOT NULL COMMENT '商品名称',
  `goods_num` int(10) unsigned DEFAULT '0' COMMENT '商品数量',
  `goods_unit` varchar(10) NOT NULL COMMENT '商品单位',
  `goods_price` decimal(10,2) NOT NULL COMMENT '商品单价',
  `total_price` decimal(10,2) NOT NULL COMMENT '商品总价',
  `oper_time` datetime NOT NULL COMMENT '下单时间',
  `uid` int(10) unsigned NOT NULL COMMENT '下单人id',
  `username` varchar(30) NOT NULL COMMENT '下单人',
  `is_valid` tinyint(1) unsigned NOT NULL COMMENT '是否有效',
  `cancle_flag` tinyint(1) unsigned NOT NULL COMMENT '是否取消'
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;