/*
Navicat MySQL Data Transfer

Source Server         : idea
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-05-19 08:25:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `trader_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `num` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('1', '1', '3', '6', '3', '0');
INSERT INTO `cart` VALUES ('14', '2', '2', '3', '2', '24');
INSERT INTO `cart` VALUES ('11', '1', '1', '1', '2', '24');
INSERT INTO `cart` VALUES ('12', '1', '1', '2', '2', '24');
INSERT INTO `cart` VALUES ('5', '2', '3', '6', '23', '0');
INSERT INTO `cart` VALUES ('6', '13', '1', '2', '3', '36');
INSERT INTO `cart` VALUES ('7', '13', '1', '2', '2', '24');
INSERT INTO `cart` VALUES ('8', '2', '2', '4', '2', '22');
INSERT INTO `cart` VALUES ('15', '1', '1', '1', '2', '24');
INSERT INTO `cart` VALUES ('13', '1', '1', '2', '3', '36');
INSERT INTO `cart` VALUES ('16', '1', '1', '1', '3', '36');
INSERT INTO `cart` VALUES ('17', '1', '1', '1', '3', '36');

-- ----------------------------
-- Table structure for manager
-- ----------------------------
DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manager
-- ----------------------------
INSERT INTO `manager` VALUES ('1', 'jtf', '12');
INSERT INTO `manager` VALUES ('2', 'qwe', '111');
INSERT INTO `manager` VALUES ('3', 'asd', '111');
INSERT INTO `manager` VALUES ('4', 'zxc', '111');

-- ----------------------------
-- Table structure for orderform
-- ----------------------------
DROP TABLE IF EXISTS `orderform`;
CREATE TABLE `orderform` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `trader_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `num` int(10) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `state` int(2) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderform
-- ----------------------------
INSERT INTO `orderform` VALUES ('1', '2', '2', '6', '23', '广州', '20190508', '0', '0');
INSERT INTO `orderform` VALUES ('2', '3', '3', '6', '23', '广州', '20190508', '0', '0');
INSERT INTO `orderform` VALUES ('3', '3', '2', '6', '23', '广州', '20190508', '0', '0');
INSERT INTO `orderform` VALUES ('4', '3', '2', '2', '23', '广州', '20190508', '0', '0');
INSERT INTO `orderform` VALUES ('5', '1', '2', '2', '23', '广州', '20190508', '0', '0');
INSERT INTO `orderform` VALUES ('6', '2', '2', '4', '2', '广州', '20190508', '3', '22');
INSERT INTO `orderform` VALUES ('7', '2', '3', '5', '2', '广州', '20190508', '3', '20');
INSERT INTO `orderform` VALUES ('8', '2', '3', '5', '2', '广州', '20190508', '0', '20');
INSERT INTO `orderform` VALUES ('9', '2', '2', '4', '2', '广州', '20190508', '3', '22');
INSERT INTO `orderform` VALUES ('10', '1', '3', '6', '3', '河南省洛阳市', '20190509', '0', '0');
INSERT INTO `orderform` VALUES ('11', '1', '1', '1', '2', '河南省洛阳市', '20190509', '0', '24');
INSERT INTO `orderform` VALUES ('12', '1', '3', '6', '3', '河南省洛阳市', '20190509', '1', '0');
INSERT INTO `orderform` VALUES ('13', '1', '1', '2', '2', '河南省洛阳市', '20190511', '1', '24');
INSERT INTO `orderform` VALUES ('14', '2', '2', '6', '23', '广州', '20190512', '3', '0');
INSERT INTO `orderform` VALUES ('15', '2', '3', '6', '23', '广州', '20190512', '0', '0');
INSERT INTO `orderform` VALUES ('16', '2', '2', '4', '2', '广州', '20190512', '1', '22');
INSERT INTO `orderform` VALUES ('17', '2', '2', '3', '2', '广州', '20190512', '1', '24');
INSERT INTO `orderform` VALUES ('18', '2', '2', '3', '2', '广州', '20190512', '0', '24');
INSERT INTO `orderform` VALUES ('19', '2', '2', '4', '2', '广州', '20190512', '0', '22');
INSERT INTO `orderform` VALUES ('20', '2', '0', '0', '0', '广州', '20190512', '0', '0');
INSERT INTO `orderform` VALUES ('21', '1', '0', '0', '0', '河南省洛阳市', '20190518', '0', '0');
INSERT INTO `orderform` VALUES ('22', '1', '3', '6', '3', '河南省洛阳市', '20190518', '0', '0');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `num` int(20) NOT NULL,
  `trader_id` int(20) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `del` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '有爱亲自装', '12', '3', '1', 'index/index img/channel_itemAd1.jpg', '0');
INSERT INTO `product` VALUES ('2', '得力办公生活', '12', '3', '1', 'index/index img/channel_itemAd2.jpg', '0');
INSERT INTO `product` VALUES ('3', '婴儿车', '12', '5', '2', 'index/index img/channel_itemAd3.jpg', '0');
INSERT INTO `product` VALUES ('4', '七巧版画', '11', '11', '2', 'index/index img/channel_itemAd4.jpg', '0');
INSERT INTO `product` VALUES ('5', '进口奶粉', '10', '11', '3', 'index/index img/channel_itemAd5.jpg', '1');
INSERT INTO `product` VALUES ('6', '卡通纯棉儿童内裤', '0', '123', '3', 'index/index img/channel_itemAd6.jpg', '0');
INSERT INTO `product` VALUES ('7', '123', '123', '11', '3', 'index/index%20img/backgroundimg1.jpg', '0');
INSERT INTO `product` VALUES ('8', '', '0', '0', '2', 'index/index%20img/', '1');
INSERT INTO `product` VALUES ('9', 'sdadas', '0', '0', '2', 'index/index%20img/', '1');
INSERT INTO `product` VALUES ('10', '儿童玩具', '2', '123', '2', 'index/index%20img/channel_itemAd8.jpg', '0');
INSERT INTO `product` VALUES ('11', '儿童玩具111', '123', '2', '2', 'index/index%20img/channel_itemAd1.jpg', '1');
INSERT INTO `product` VALUES ('12', '记事本', '1', '1231', '2', 'index/index%20img/channel_itemAd7.jpg', '0');
INSERT INTO `product` VALUES ('13', 'dasdasd', '555', '11', '2', 'index/index%20img/advertisement2.JPG', '0');
INSERT INTO `product` VALUES ('14', '', '0', '0', '2', 'index/index%20img/', '1');
INSERT INTO `product` VALUES ('15', '哟哟哟哟', '123', '12', '0', 'index/index%20img/password.png', '0');
INSERT INTO `product` VALUES ('16', '123213', '123', '12', '3', 'index/index%20img/backgroundimg.png', '0');
INSERT INTO `product` VALUES ('17', '特性', '1', '12', '2', 'index/index%20img/backgroundimg1.jpg', '0');
INSERT INTO `product` VALUES ('18', '商品233', '123', '23', '2', 'index/index%20img/channel_itemAd8.jpg', '0');

-- ----------------------------
-- Table structure for trader
-- ----------------------------
DROP TABLE IF EXISTS `trader`;
CREATE TABLE `trader` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `del` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trader
-- ----------------------------
INSERT INTO `trader` VALUES ('1', 'tianmao1', '12', '13333333331', '0');
INSERT INTO `trader` VALUES ('2', 'admin', '123', '12341234121', '0');
INSERT INTO `trader` VALUES ('3', '123', '11', '11111111111', '0');
INSERT INTO `trader` VALUES ('4', 'jtfjtfjtf111', '123', '11111111111', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `regi_date` varchar(50) NOT NULL,
  `del` int(2) NOT NULL,
  `account` int(8) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123', '2147483647', '20190507', '0', null, '河南省洛阳市');
INSERT INTO `user` VALUES ('2', '201508090045', '111', '222', '20190507', '1', null, '广州');
INSERT INTO `user` VALUES ('3', 'admin123456', '123', '0', '20190507', '1', '0', '北京');
INSERT INTO `user` VALUES ('4', 'asd', '', '0', '20190507', '1', null, '河南省洛阳市');
INSERT INTO `user` VALUES ('5', 'admin2', '', '1111111111', '20190507', '0', null, '周口市');
INSERT INTO `user` VALUES ('6', 'admin3', '1234', '2147483647', '20190507', '0', null, '广州');
INSERT INTO `user` VALUES ('7', 'admin4', '123', '2147483647', '20190507', '0', null, '周口市');
INSERT INTO `user` VALUES ('8', 'admin5', 'asd', '11111111111', '20190507', '0', null, '河南省洛阳市');
INSERT INTO `user` VALUES ('9', 'admin6', 'asd', '11111111111', '20190507', '0', null, '广州');
INSERT INTO `user` VALUES ('10', 'admin7', '1234', '11111111111', '20190507', '0', null, '周口市');
INSERT INTO `user` VALUES ('11', 'admin8', '123', '11111111111', '20190507', '0', null, '北京');
INSERT INTO `user` VALUES ('12', 'ad', '11', '123', '1', '1', null, '河南省洛阳市');
INSERT INTO `user` VALUES ('13', '季腾飞', '123', '11111111111', '20190507', '0', '1000', '周口市');
INSERT INTO `user` VALUES ('14', '啊是aaaaa', '333', '11111111111', '20190507', '0', '1000', '北京');
INSERT INTO `user` VALUES ('15', 'jtfasdasd', '123', '11111111111', '', '0', '1000', '周口市');
INSERT INTO `user` VALUES ('16', 'adminadmin', '123', '11111111111', '', '0', '1000', '河南省洛阳市');
INSERT INTO `user` VALUES ('17', '季腾飞2222', '123', '11111111111', '', '0', '1000', '北京');
INSERT INTO `user` VALUES ('18', '季腾飞', '111', '11111111111', '20190508', '0', '1000', '周口市');
INSERT INTO `user` VALUES ('19', '季腾飞1111', '11', '11111111111', '20190508', '0', '1000', '河南省洛阳市');
INSERT INTO `user` VALUES ('20', '季腾飞1111', '1', '11111111111', '20190508', '0', '1000', '周口市');
INSERT INTO `user` VALUES ('21', 'admin', '1', '11111111111', '', '0', '1000', '河南省洛阳市');
INSERT INTO `user` VALUES ('22', 'admina', '12', '11111111111', '', '0', '1000', '周口市');
INSERT INTO `user` VALUES ('23', 'jtfjtf', '123', '11111111111', '', '0', '1000', '河南省洛阳市');
INSERT INTO `user` VALUES ('24', '里里里', '123', '11111111111', '', '0', '1000', '1');
INSERT INTO `user` VALUES ('25', '莉萨的', '123', '11111111111', '20190508', '0', '1000', '2');
INSERT INTO `user` VALUES ('26', '阿达', '123', '11111111111', '20190508', '0', '1000', '北京');
INSERT INTO `user` VALUES ('27', '2015', '11', '11111111111', '20190508', '0', '1000', '北京');
INSERT INTO `user` VALUES ('28', 'admin', '12', '11111111111', '20190512', '0', '1000', '北京');
INSERT INTO `user` VALUES ('29', 'admin', '123', '11111111111', '20190516', '0', '1000', '北京');
INSERT INTO `user` VALUES ('30', 'admin', '123', '11111111111', '20190516', '0', '1000', '北京');
INSERT INTO `user` VALUES ('31', 'admin', '123', '11111111111', '20190516', '0', '1000', '北京');
INSERT INTO `user` VALUES ('32', 'jtf11', '123', '12345678901', '20190518', '0', '1000', '北京');
