###################################################################################################################
# Copyright (C), 2017-2017, Hercules, Ltd.
#  File name:      init.sql
#  Author:  wangfei     Version: 1.0.0       DATE: 2016.05.05
#  Description:   Use this file to init rrfx database after import a new rrfx database 
#  History:          
#    1. DATE:	
#       Author:  
#       Modification:   
###################################################################################################################


###################################################################################################################
#	Upgrade date: 2017.12.26
#	Upgrade author: 王梦
#	Upgrade reason: initial create this file
###################################################################################################################

SET FOREIGN_KEY_CHECKS=0;
USE  ilife;

#######Clean All Tables############################################################################################
TRUNCATE food_info_users;

#######Add system basic setting data#########################################################
#######food_info_users################
INSERT INTO `food_info_users` VALUES ('1', 'admin', '123456', '18363822396', '王梦', 'admin@sinomoses.com', 'admin', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('2', 'wangfeng@sinomoses.com', '123456', '17305351001', '王枫', 'wangfeng@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('3', 'caopeng@sinomoses.com', '123456', '13964528420', '曹鹏', 'caopeng@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('4', 'chengxk@sinomoses.com', '123456', '18363803289', '程学凯', 'chengxk@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('5', 'wangmeng@sinomoses.com', '123456', '18363822396', '王梦', 'wangmeng@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('6', 'chenjl@sinomoses.com', '123456', '18615059032', '陈敬龙', 'chenjl@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('7', 'liyd@sinomoses.com', '123456', '15910039657', '栗银丹', 'liyd@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('8', 'wangyang@sinomoses.com', '123456', '18363858330', '王洋', 'wangyang@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('9', 'yury@sinomoses.com', '123456', '15275565033', '于汝意', 'yury@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('10', 'shipeng@sinomoses.com', '123456', '13954534323', '施鹏', 'shipeng@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('11', 'wangxin@sinomoses.com', '123456', '15689923787', '王鑫', 'wangxin@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('12', 'jiaoll@sinomoses.com', '123456', '18254590346', '焦丽丽', 'jiaoll@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('13', 'liuzl@sinomoses.com', '123456', '18753550274', '刘志力', 'liuzl@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('14', 'liwx@sinomoses.com', '123456', '17853598961', '李文新', 'liwx@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('15', 'liuhui@sinomoses.com', '123456', '13296452490', '刘慧', 'liuhui@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('16', 'zhanglj@sinomoses.com', '123456', '17862863940', '张立杰', 'zhanglj@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('17', 'dubiao@sinomoses.com', '123456', '', '杜标', 'dubiao@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('18', 'shangwj@sinomoses.com', '123456', '', '尚文杰', 'shangwj@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('19', 'tianbo@sinomoses.com', '123456', '', '田波', 'tianbo@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');
INSERT INTO `food_info_users` VALUES ('20', 'dongyz@sinomoses.com', '123456', '', '董衍泽', 'dongyz@sinomoses.com', 'user', '', '0', NOW(), '', '', '', '','','');