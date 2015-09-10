/*
Navicat MySQL Data Transfer

Source Server         : localhost_wamp
Source Server Version : 50051
Source Host           : localhost:3308
Source Database       : itildemo

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2015-07-13 10:48:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_depart`
-- ----------------------------
DROP TABLE IF EXISTS `t_depart`;
CREATE TABLE `t_depart` (
  `depart_id` int(11) NOT NULL auto_increment,
  `depart_name` varchar(64) default NULL,
  `depart_parent_id` int(11) default NULL,
  PRIMARY KEY  (`depart_id`),
  KEY `t_depart_ibfk_1` (`depart_parent_id`),
  CONSTRAINT `t_depart_ibfk_1` FOREIGN KEY (`depart_parent_id`) REFERENCES `t_depart` (`depart_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_depart
-- ----------------------------
INSERT INTO `t_depart` VALUES ('5', '测试', null);
INSERT INTO `t_depart` VALUES ('6', '运维部', null);
INSERT INTO `t_depart` VALUES ('7', '客户单位', null);
INSERT INTO `t_depart` VALUES ('8', '华为', '7');
INSERT INTO `t_depart` VALUES ('9', '中兴', '7');
INSERT INTO `t_depart` VALUES ('10', '工程师', '6');
INSERT INTO `t_depart` VALUES ('11', '系统工程师', '10');
INSERT INTO `t_depart` VALUES ('12', '软件工程师', '10');
INSERT INTO `t_depart` VALUES ('13', '架构工程师', '10');
INSERT INTO `t_depart` VALUES ('15', 'ceshioasdf', null);

-- ----------------------------
-- Table structure for `t_engineer_infor`
-- ----------------------------
DROP TABLE IF EXISTS `t_engineer_infor`;
CREATE TABLE `t_engineer_infor` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(64) NOT NULL,
  `engineer_sort_name` varchar(64) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_name` (`user_name`),
  KEY `engineer_sort_name` (`engineer_sort_name`),
  CONSTRAINT `t_engineer_infor_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `t_user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_engineer_infor_ibfk_2` FOREIGN KEY (`engineer_sort_name`) REFERENCES `t_enginerr_sort` (`engineer_sort_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_engineer_infor
-- ----------------------------

-- ----------------------------
-- Table structure for `t_enginerr_sort`
-- ----------------------------
DROP TABLE IF EXISTS `t_enginerr_sort`;
CREATE TABLE `t_enginerr_sort` (
  `id` int(11) NOT NULL auto_increment,
  `engineer_sort_name` varchar(64) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `engineer_sort_name` (`engineer_sort_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_enginerr_sort
-- ----------------------------

-- ----------------------------
-- Table structure for `t_req_sort`
-- ----------------------------
DROP TABLE IF EXISTS `t_req_sort`;
CREATE TABLE `t_req_sort` (
  `sort_id` int(11) NOT NULL auto_increment,
  `sort_name` varchar(64) NOT NULL,
  `sort_parent_id` int(11) default NULL,
  PRIMARY KEY  (`sort_id`),
  KEY `sort_parent_id` (`sort_parent_id`),
  CONSTRAINT `t_req_sort_ibfk_1` FOREIGN KEY (`sort_parent_id`) REFERENCES `t_req_sort` (`sort_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_req_sort
-- ----------------------------

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(64) NOT NULL,
  `name` varchar(64) default NULL,
  `staff_id` varchar(32) default NULL,
  `depart_id` int(11) default NULL,
  `position` varchar(32) default NULL,
  `sex` varchar(8) default 'man',
  `telephone` varchar(16) default NULL,
  `phone` varchar(16) default NULL,
  `email` varchar(32) default NULL,
  `user_role` varchar(4) default '1',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `user_name` USING BTREE (`user_name`),
  KEY `depart_id` (`depart_id`),
  CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`depart_id`) REFERENCES `t_depart` (`depart_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
