/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : mall

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-08 17:50:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mall_goods`
-- ----------------------------
DROP TABLE IF EXISTS `mall_goods`;
CREATE TABLE `mall_goods` (
  `good_id` int(11) NOT NULL AUTO_INCREMENT,
  `good_name` varchar(500) DEFAULT NULL COMMENT '商品名称',
  `good_image` varchar(200) DEFAULT NULL COMMENT '主图',
  `good_images` text COMMENT '多图反序列化',
  `good_coding` int(11) DEFAULT NULL COMMENT '商品编码',
  `good_num` int(11) DEFAULT NULL COMMENT '剩余数量',
  `good_preprice` float(11,2) DEFAULT NULL COMMENT '现价',
  `good_oriprice` float(11,2) DEFAULT NULL COMMENT '原价',
  `good_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `good_state` int(11) DEFAULT '1' COMMENT '目前状态',
  `store_id` int(11) DEFAULT NULL COMMENT '店铺id',
  `good_info` text COMMENT '商品详情',
  `good_score` float(11,1) DEFAULT '4.0' COMMENT '评分',
  PRIMARY KEY (`good_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_goods
-- ----------------------------
INSERT INTO `mall_goods` VALUES ('15', 'Tg7B7PznGc', 'http://localhost/images/dt-if1-l-tuda5.gif', 'a:7:{i:0;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:1;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:2;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:3;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:4;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:5;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:6;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";}', '22008', '50', '37.12', '40.50', '1520498047', '1', '2', 'qzkCrc8WxrnEmyaN2LSYjLTXkWDOYkba2jiThMdABh75uCNk747MMlYZ7Za0wL0WK7VIsHCUGBDsICW4y2XH9wU29OJhRcKCBbezVE1rGQLGwVMBnn11Kue6XvpWu5GvmLnt4vtWsesr6dgVR5hczc29Rmsx3KIDTNTjbr5wZuRjFUSBHOMqT0zZXhFo8YzN3B8cVEYwMHw37oEJDqjIooUyBD2Ywj8nNnmjLYzjn2JwKOaZVTEAgGRxBaSK3Qfy5uB8xrcKX8A9XWEE9kkQWgtbzy3DHwgo60tbpdy57gfWHRpQ5X2UN1cQKxQLz1ZIp2YUanIGTCaIvFQ1CDjRrEb3gl3J10aMPM5sa9OWh5NzUunRoB951DG5zR2g5cHboxQdCiMNXXmpCA6wKXqzAONoaWXzvbsmP97blvzthdFxO3gGgIQJIk7jQk18IKXOJEaZkDfkdcPWWx9ze8J2I8hoYFZZONViGbdhVotgEM1fYVC3aSc3', '4.0');
INSERT INTO `mall_goods` VALUES ('16', '3sr8pN9KDt', 'http://localhost/images/dt-if1-l-tuda5.gif', 'a:7:{i:0;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:1;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:2;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:3;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:4;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:5;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";i:6;s:45:\"http://www.mall.com/images/dt-if1-l-tuda5.gif\";}', '61133', '30', '32.00', '68.00', '1520498047', '1', '3', '9YUMPJW8PuOCAcTCjPtvoGQxhRj9cdKKD3KiDhtYF6h4oyfmV0UpZfwxpY5qDEAuR0IIu1uVfukkG7Mizo5il4t51iXjFJeZddJ9zdisSpj7qUg59RVxnEqnk6Rz3TYWgho08QTePqwDHqg9pJsXwUH1B2QcwCyvp8AnFAARhDQDeXmbrwmpjIH1JwBSVfFOzfXgdSK9upRx7lv0MxEOcNR0HIVbmZ9R3r9Kd1t5NUbVBJHIfLOkJYixoJb4exVx4LFivxE9BvPnFKDOcP4OmD7xSgAQSHrKdL4jREdjdbSvrPShKdwb2LwzQxHd67QCXDJmfpez5O5nrVacn6ZctvUAjrmoNNwjXWAWk4hMajk8tGt1ztiL1qNiZwqDMAwzqULhjTa77euI0k2qaE6bw9HVxhWvSreQONjDdJGqCvMz40d96NhgzASaiHlizQFqWRYZbRJl3v822HoZuS8V4BuAESRQyewlOh8RCQ8i2Quax44n1O8l', '4.0');

-- ----------------------------
-- Table structure for `mall_message`
-- ----------------------------
DROP TABLE IF EXISTS `mall_message`;
CREATE TABLE `mall_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_title` varchar(300) DEFAULT NULL COMMENT '标题',
  `message_text` text COMMENT '发布能容',
  `message_time` int(11) DEFAULT NULL COMMENT '发布时间',
  `message_form` varchar(100) DEFAULT NULL COMMENT '来源',
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=401 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_message
-- ----------------------------
INSERT INTO `mall_message` VALUES ('201', 'UHdHQULfvu', '2XeicobagSUYXAaP57RMC95hBBQlXATUfjtWsI8JLotKb4y3ItQEUviJBfkwide5uVuHBUjzz2pqbCCCdtXuUQFFxjqr3f1HAfBU', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('202', 'HiSomsXngu', '9vvUWZMU5hEcXKHZtF9EcVEdH4au0yYV6Y3qnQMmMlsm8IcsVggg87SpbLWmjYZMf104vzIMdxUYFtJRfOnsdOcfiOe66XUujZDJ', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('203', '3ZMxCF1aX6', 'UWQwi6C82KsfVQlT5bRdCKTFxkJiEmxvObRhTiEpIIG03kyKE14XiTBQfiSPZkjzioeK3GnhfGWkmamAWS0dS7VKN3FGgWFGgYOk', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('204', 'O5IrAubHY3', 'jgUO79A2GGodoYGydoQ6bdWhxbbpH1zX0rjncMkdW85Sxlf2JnPF9TdoWtMG5FzZ9DWAiAHJjWZdOR961jXvJXrkVZAHRJ2Oyb8n', '1520414238', '小赵说事', '1', '27');
INSERT INTO `mall_message` VALUES ('205', 'vNF8eXrL4n', 'UnN6NzfJd0aMYdg8YLa5jK1u0CYYVO8SSYtV92V5b1WGfi8jwUpfTLjazdRItJWygR3wvp5djJtTsqqbk81rrmCxHNXcpjVJuRkn', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('206', 'zmxDcQupIx', 'zgSFZPmlkkH3IQQX3eK82nmR9Lnepp5dEVyQKSuW1p82KnIAsUhEyAOK4YHJh6ul14ZHsgvn58icpuOJXhGLZMAwMZRSb9aVqhOG', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('207', 'T7T7oyDmVb', 'JdzuitzV8eVIbIJp2vwIFUyLIah51bCrwdvxvPGwl1iuuCLnfxRN7GRnvtqGoAHMVlmAHx1Grk7ZblniiDDE2n63jhcfScl21dr5', '1520414238', '小赵说事', '1', '26');
INSERT INTO `mall_message` VALUES ('208', 'TSRwVNKPwO', 'FIvpvYFifrQaofvxRoSHEonLPDhJGFl3nbCbyopzEGElHpg7BIwXuurRKhxrk48xt4ZbYujMV8L0LSZ9zji3BAbbtPNhTgVLc7LG', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('209', '8EjkIzn523', 'Xq3JVkH80jhaTiq5aOleJRG5rRydMXl5GQ7MJyUifLKAYEIgk7433M4EGxtHb2UpAPE3OHUbE1CwGd4lY3J3diAHpLjYD8G6OlUf', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('210', 'TCwzQ1XUOV', 'XECKEKJIeYCjRFqSd0lkbLRLK0aEcWabSzdGZo2LHl1uJyBdNqRTLvm5tKkMBbdRAp9X7Xnvg1B0NMbdXRKslgvvpQ0rtUFbDb3X', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('211', '1CBQzbQNQS', '25Y3xTWMeEyDEJ8iKYYaqjIpX7uMXOjDXpg6axRLNSo4sWl5zdNtZppHmjGHupRJ1sGmGtm1ZJqOFoqJv3Gh2pvME9XCRxIIqvCo', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('212', 'f6E2Cu53lX', 'xW6HC1JHVW75zs8B9MR5jWCRUZH6AN2sU6vmRu5Yqs4UN0Y05fMzGA9TsU2DEYVrESz6BoV53VhLlOPWiyJKhYbO5SOVAE11w1ay', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('213', 'tq35YnMRcz', 'Z14BFUNIGiEmHLawDz44DpmuTUF6iUprJjujR7D8PjL9HNBklmf64MwXR8uFuXrEwWXlVhXgFkLrll94DbUg5vOTYSYUB6JXFyHM', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('214', 'JtYtZ4QR7i', 'i1gfbjPXehPKNicvcmfI0rnjiVxWXDsXYKP9O8RqLvoyOZWzKW4cIqzH2i4h8K906hRJgJHI7dQaaNpo7hGOk28cwvFvkLOjBXoO', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('215', '7ZMC4N1Rij', 'bBUjxaTDiwcIfQw3h9cmlA7Sv9YDajXxtN9hPbdOlTqabEuF2gTZop0MuA7ET8jcyP3ajrvyfIoZVx0iaYWy1EA39Gac3UuQri84', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('216', 'xt5w941egr', 'NZhFyeZnupWSq2IXK5GgfDemKBYeFYuypWNjwLGWs49nThMkvHeBvytEroboU4Cxxc2EV94Iq0oDhwWSoencu92f6tCRWqzIH1LR', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('217', '5JQxfmUfNe', 'BBdLe6XzRspn0kA6LLrgLyJYOD9jYtYeeyoxUuSA39sRCiq0AoUiaKHGOrul9714SxE0Z5Ikfoby4dXo0z281x4ATmIz0h06PEa6', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('218', 'zBFYqNrzFi', '85IcSjeFsHRNpqD6ePCxUYWII3mPcPLZyybX2XMYn3xD5234BVqgb4v02g81oJa0gtLqQpAj8a1awToFFmwon4j269dJRlGE1ZT1', '1520414238', '小赵说事', '1', '27');
INSERT INTO `mall_message` VALUES ('219', 'Ws19NmwGMd', 'Ces5p0oDg0JbsRxcUiz9axBYnbIXYJczwOjRVjEE1dewO5muO7nGhiTFu6r0QXdKx2po2uHCUMxf03Rr40NXcOqJpeJeY1ZTzNzY', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('220', 'aAFoY72Ce9', 'XGWkpNwoZ59d0suNszujMjdUSZ0A5SL140nZ6C8EpUtjq28DsqxVcIMZLxToAAWemyZaU6hbmUjRx67E7wLlkTcKW1RGnIBaemlz', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('221', 'yhB7WaooWY', '3uyV39IjPohUeap1jMPG0Ag1S0gN30tMyMhDDl6vt85H2ZtC99Aq4e8p0ZVjcfRqjEfFhc9OLbV93c8uwkYcDF8krKEym4OoNX2Z', '1520414238', '小赵说事', '1', '27');
INSERT INTO `mall_message` VALUES ('222', 'wbnOTtRsZy', 'Kj0dhWCg6EkVblApdbB0QyUFQI4kk8fAf74CNu38cnukmcst5YZlNd2ns5ghbXhuciUGgiwwf4wfkwmiIOiKxPnQ0NbOhSQlRoEJ', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('223', 'G8ZnXtuGMD', 'fFWvBqYwxCyHXnuLEsWgCXLVEWbVFhoP9dKPTpMm28pwF2HI5vvD2wRGyIegXZpncE5BxAMmQ2V2yBmvVmkx24updlB7cBVYc4so', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('224', 'c1X2izFx6i', 'eQMb2cgn8UKWWT1y0bYzPksGU9MzXEKP92GhZN5zGVDLpX309NcnZhZlhXGKeWsKeaQNylei5dGorEchLiX6JtSFYFL6K8zJ1iqk', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('225', 'XHRROeXQIh', '21cwuSgSVNVPQvaiCleqLLn2TSFbs2eVqp7aqALWCm4vOL0F7JeDJtsxZRQP24oTCkyXUc7lcxjvsrvWBZOjByZyggXEkBaYWftu', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('226', 'cifxNboqm2', '6yv9xbHPicItxolAxjkNXMHg4N1K2fhQ5P4AfkY3jIh3GG6C1KOUN03UrtsftNqaJAdV6BWMvxJLWjyV0f0EMS38nxRHOvQVXaxW', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('227', 'Li9DvWArRz', 'zPcqhsuKDDKrbUBz719tGTevbSofidML2U2NgU0VHShlg8jNHdiiNIQwKqBCisUnOZAoqHcbiU6DSJyJBnPexiCuIFZn0gzshvBW', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('228', 'CZpG5ay7BH', 'BvpZDaxKw3td6NH6L0QsuGvlTLEZxhmFgdrx4nK5PqGMxqJsnEUlAYcKivYBaWQ8zjjw9cBx2RfJQtBn9dD8AkOqEJDWZzZENQ2e', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('229', 'oSMCw3BIm0', 'eZoPBhHUhdCIUud81flaiWwkNJ0fO4KZkIdevZ62BNscLL4A9WcALhOob6yN9dDYOU2rdseYKiLP6yMvzibQpe5aAERsGsiPs7Ul', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('230', 'K11pnHmZar', 'KwVSw8kpRO4KzWOUgEEcWKeohk9r8c8YGqcePVM7umZh7HMjhVJh9Og2dOyzSOeZZGkGhZB14dDKKglAnL8v2HyRXM51on2omELb', '1520414238', '小赵说事', '1', '23');
INSERT INTO `mall_message` VALUES ('231', 'yt2Cw6FLpP', '51KgfLvpVlMaKQm9InMSZEZiSDbDYikR2hmv5BXGgY4bim6rZ4GyEz1MxSdgK3vgmKipDJKul8E9wdYphXVzKZfoB5o2fCRtbZtx', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('232', 'ypYlfcsHh0', 'QBSHC6Mjw2aALk0DpiyRadWZlqAwQE9PsnCdnjy5BpkdXAoBxwiDeDFUj7XUBX59fXiL7vmWdXBxwtoeHKPx8xDIsZ0SbIKiBNU7', '1520414238', '小赵说事', '1', '23');
INSERT INTO `mall_message` VALUES ('233', 'VEG5daL9XL', '0QwV8BIBC7dL64aH3pvAZmrVDi9KSwmvnT3wa2awpWTdoFDjT67nUnbP1Z2AJllTV8J3f8LDFRTj0lTxPKjMNoES284XMSTZ5mKM', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('234', 'ayE1I0TZLK', 'vlK36WVdhSjO1WAqk1Dy8FwK6Vy9LDq7GkKeOdKEHT0muOmsAcML0nHmTXhtPwQ0VoBiWLAdh50Ba54SZF14NSCC2eMNM9zXhTWU', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('235', 'Ey9e6jV6CK', 'L9X866k552cWc72FwXYPkTvy8iYRH9mPnKXResG03DjyIxH6q6OjTeSGZyKZwZeBT5ZKhxG5xIrXNBKAC64Cz1ez18dpEJU0vWeH', '1520414238', '小赵说事', '1', '23');
INSERT INTO `mall_message` VALUES ('236', 'aCTe7XVAjl', '8k6YFYR3AK7JnaHlu8BVuvEUO3bJhA6O34Vpx9JKqYRHXL1Wcp0CWpOh8D3Bh1Xpy1LImZqph4b8tltG22NOujALm5L6G53OLtUA', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('237', 'ozCk3VHjIy', 'daib9a7gPP5jX3DOUMGNHoVWOXK9caFoPPLSVJpwdSAfNH9VzeJEbTIxVcNCSjWWfQjVZDTcXTQB9555RACB9pB8SgDSHpPIqZ6N', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('238', 'eOnRwCNWKl', 'H1lO7E2wAWkCWpdB7GJb2WebVP7d2wpiVS3Pvf3e4tft6qgTpGr1pz9s49uTK29o5IACbhoGz4oQn6iGfpZ89dgBS5INR3tO3wcG', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('239', 'KBwKOgyllE', 'S1aiXXPfAAjHfOmBIkhbgqEVakslUzptbW7Fojab1SIlD4y5ptWRFgppVVi8JwfuwIMQb1ivKMb5cckAAlv00u39YCmzz1RmB016', '1520414238', '小赵说事', '1', '26');
INSERT INTO `mall_message` VALUES ('240', '8w10vRgvS8', 'bO9EvykhqmipAdHZpu44um2LxrnGUQdhenuriSYjTv0sHgEtsmewYmK4bMhAY90pCOvlUquQ4aMZhP4WPx9JFH7ODwUH4Q82JRWj', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('241', 'dK74WKdRY9', '2lG3DYKhS411NKfOEEaWv10gwoRllMhdo4lsxLRw7hlDl66sJTdFLScq44QYL52IbXmBKbD7XpPhQSC5ZzGpc7IGuAGKHmjsXmVb', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('242', 'vmGRxa3fGD', 'YeBdUK1VK5LF2lUsKNFPt4VETbjG9FUM3ScFdKKhtlKSzOUAWIvikmrAq1KPBFI2Uqj5mfjXzPV7M972Yka8vXNHBq4UmvWi5c0E', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('243', 'cIaGVrp0ZO', 'ybEN8vaO2XE42px0lxB5TQFw7lD8O7D4yZPRL6H5IAqlUjWTbgiWx7sfdr3bXsLcT9dclvVMLxLtLQsvuFQyxsta1loniRnhCXno', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('244', 'ug80ynoT3l', 'SikuHZxwcPU0NURv6IpfzQXWOL5DSahM8X2MTE8yGthZ9KzHFBZwtcYjkaTMDMRkhdoZbQL5iUsu6wCZYmOW2UrihCEt6PBWU6kD', '1520414238', '小赵说事', '1', '18');
INSERT INTO `mall_message` VALUES ('245', 'UCNmRJAWYj', 'D7zD2cq71CorgIlmfD0ajTVVq6BwRZgUmpx5WUyu9w9mDariqSBQMc5au8TFN1TGjYhUuv2bNsYacmB7pjdZ8Hab7JC8AfEB47MY', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('246', '2apDyslFYR', 'WoBi0LlEHM30wg8POwaO9MAuRnbJ64LpDmbhmDA3EXejxJVmMmJltU6ZourhO8zG25hcC7tOPHPUqVCe2SSEO3g4goWXLiotEsRo', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('247', 'gOBVKYJtSV', 'qgiVuiQqDaRJ0KsEcupAJibytSUEHu0V2Vz1h9V4T3fJYkRDP4Uv4jzbzM7ZgVoFKXhsp6l5TDZvXMXMywku3iocHtEOzF1RASuR', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('248', 'whnhQgMtFe', 'NcspI6cb5rq0M2uTn3uKmxJftvxXOv2MIpfS9yXzd164llNJmCHsaCffnewMRKg8lLQxPlhw4TsiHrXGpPfG4LRMJgRei8NDC99r', '1520414238', '小赵说事', '1', '25');
INSERT INTO `mall_message` VALUES ('249', 'qQkkNZgUrW', 't1BaoU3xYYQAw6obPo2APQXK1w1mkne1amy3BxGVvQ1vBAa1phuioo5QFNlbNbI2TQrCw9GXl4x5dgnyB71LqDPlSll8geQVETeH', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('250', 'MSvkhk8qaI', 'bk2zovxBJCnM7FO1NhmbBOVsvRQ5KPPX6imkRW2fADkgk0KqTcC06APJCXwZYr6dXh2duy6AtQdnnVJ09sEeuFJzKXTZ5rU8Ebtt', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('251', 'tLfF3vvage', 'JoMAcQlcv8cJFzHwQNt2DTDtkqD0wekUOLooKMH8Yl6hOzkWKKgu8gSmA9sUfm3AKCAfhqVmjJYaPog8lYv2G85tBIhTLIdQvIPs', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('252', 'oXIv018Pco', 'tJIggaRuvmCbcdDv1Z3CsAQi0Vufk4iUm0dJOK2LYP4iRhxCJTIms522rZEJaM9jNb3J0F7p5O26kCTG7ywdFLQsV0lIy32G1MXl', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('253', 'pFXASSli2A', '5MnZBroSD6wSpFp6SEfyRM5u31hYomR5Uo9bLoWyAqwX3v6a6RZTbxmqca1k9OhbjTRF2rWaIUn5uACNtutY6qirWKe5Ho0OcCpa', '1520414238', '小赵说事', '1', '18');
INSERT INTO `mall_message` VALUES ('254', 'yQ8xl6iGOL', 'R8fsja1zYxhRsZGMZTuaOirNqkEAFUUlOoqWgqe3gUdmEdnz1G6OQ4svc4aNzq4zFnUMuC8A2VFrPABAPfB589OIz16UmQH8O4th', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('255', 'kGrx6Sbsru', '569WSbRBKYfgSmvsYop1M6z2CH0WY1nkE32bKaiEP51c7Y5b4e72GiE3s9Fmti1Fc8BTL9UZML7RSHic2utbOkLLozH0PwmjnvjK', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('256', 'PBQaC1pf2k', 'wA30nyGB1JImqKIj1VHIRqXa5YBJLOVgVzDRZv5JuVnq0SbTwLQaRJ41J2syZ12xreeWoWRfu1r6SqRheHKcD16NE0A7skEskfBa', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('257', 'nwizAI8X6p', '3oN43OrVG4upp7SbEJvLtXNjyqjYxWfr8cP5ivykgqBmTJhplcJuU9MrfBtKlI9e5dDwZJAbjXGso4E4zA8kHmcoIgV9FUjTl19P', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('258', 'TL4ujlJCE9', 'SPpKBBZ9MnsgzsDiI3uFN6vzu3iM2RCfNzFT1xm61kgykrXSbfepsUFBlNpsxo7HkdMpdAugOHDyr0Fj1hgM6mT3wasxmoMQ6hGi', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('259', 'xr6ZAtd89W', 'gUauYRUNyh7D4Yu9EtjhQov6IjtDNb5ehA8sOZKE5WRWrMSL7HgOgHGIHV2K2DYENbvFW0kADQmvwZ5Moiwh8mrsfREKF5a89OYx', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('260', '8izYofy33D', 'GTsbyD1kmBqTI5OZAs1IsrtdbcQWcgTbgTtIczZmowbgQ4sLOgKRJ7Jt1yQSQIRmHQCKH4vVmSNl8k7mPNgro9d8b3EHo4LOYfbP', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('261', 'JOaaPVl6iw', 'DCtIvNtbZzj2PIpz03DrrYUYihLa0Ja1pvmVUwJTUzxasqWgUTTghMW6mZ4bgZjbb26glTw1fB7OyMTIP2V3wAwmdVQG9CfWA9uQ', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('262', 'PhsU0nxZR7', 'RRRYukxeE2mLg4puAg4jAeqQZKaW3EsMv3InQOOQx8OanEfTYlbW1zBFuqtIZxaFdaGQRK1zSf1wLq09K03Wx49G8BlVLixPOzRr', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('263', '9SdItjpdej', 'tzuah6xWj8CUn6XvQzaIFi5VqFeQWn1J5LkLm24JoBm4bNqf4WEDXMdsVHdyB86TzjmiRNEzgAH0LtjhsU9jqX6sK5FQEDfiVLue', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('264', 'tx6cP0pgeN', 'tsHPki5IH71NjUTCZjgXhkn6ojYEsZjXTf35lu0a5G1JSwt1hAWobQcB8TlGIJ9gF7wYChU3rWcDZxkTBnsmxsiH3bC0xBKLvPwo', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('265', 'TfVv6IDeeS', '64hWsxqxESVNuMHBhPw9HWZlCwKLD68KCdDQO2BdKKjFF3tkDRbvvHhIOxSv6noemN5vvYcDXftbhp5i8prnAY0YaHUfvesaECvA', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('266', 'k1I2SvRenW', '0YCFNjTBV70JmmcBd8Mjcaz2gd2uvNRcS82qsZgfU4o1sMn4U3JyvkLEQrWkXB5eO1iWufKfNl7qDYuZSI0XvOKoJ8hftOn1rbYi', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('267', 'hZLrkO11sv', 'yFBmzHlooZz15T5v4r1iXl069iCU2G31s9FhTOLBKcM00ePWgbf9I6l3n7rn0nHai4GOdscfkzcO8VsbMR5BiI7dl9XSoWCdkBDh', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('268', 'Q38wLA8cM1', 'Mu9JOBmyovrTwgbsB0DDnIJpNcwNBd5jjjcI0avEQTjmgcZafzh2IimnLi15HVEaSqLB9O0nKqcilwLQHFC8Tm3vlY6jd4brJuM5', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('269', 'RhAN6kIohM', '1F1fTw05RjTfjkZ4n4Ap4t3ulYu8J85ah4saT8MwKSDV4TsKEJO85hCKUo3iqJSHI56Yc1D5AQ5adO5pqS9LkHjpqyi6IPMIpbOF', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('270', 'XfmXewdUsX', 'anyCD4cU9tMbx9lRaBDOgaGLhWL2mdbHSDfvDT0uPvzGyx89AV18Vwr9Eol9BYsp9HvOPISxphvCfcnJXxFKf9eSGFbrpjHS7lmd', '1520414238', '小赵说事', '1', '23');
INSERT INTO `mall_message` VALUES ('271', 'MeAqx0mglX', 'DUAqQyw8qMhTwDB80o7RENk3BeiiLKPqEXE0Nri4VwSyGTuoLgIdOLuc2nJHTqFkYc3gNiEbg9cjfXICjZzNdUiqfor00Y5IJ0jo', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('272', 'AjYIHTOZuI', 'v4McxlXGnis8mtwpTcdTS8Jf40TjgmvVg8B4GqMjmnCLgGXJr2GNxRv5RcSOr0YIre73WJb6jRhJycoN6OL5OaCxnyZwkiBTMkAz', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('273', 'FMvoks8pue', 'sA53Co2bNE7C9Ly4C2xjN8IW3phS63b7Y1O980Dt8a0Mdszks17eKkydtms9CaGbX51cTwA0WrweG7EGJ763wbJz8sOIC2ltnTrR', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('274', 'nsI8dCIW5A', 'eXRinTNoG7nrQTuG6gTnv9cXq7qQGSTW5deoYxKnqHTcV3fYOJ3k9hOnJl2PBS2rF8jAKZ7RNQIEawmliNlNvpNWhj7D4wIy8DoN', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('275', 'f7NQLyDPMi', 'FySBM6ror5y0CBjvjVCaK6DurOzTZsARgg19RQvA5gOtc8PovDTaBbcjNw7sDkycDxXgCUNoQjrF7rjg8kIUCYVTaUlKp8Y0imWF', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('276', 'aiD27YnOxH', 'wQT5Xsn0vmsnz4cpCTRlLITrWTbVf4XeGbXC6mTUM1A5lV3Ot63HUxHcDgEEhDXEb5sPgCP4YlMp5titGcKUvZwyvZrkT2UYyRSi', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('277', 'Or7bP1LjWg', 'xmmP9OPfmit1GP9zDbJUWOBjBf1GBHUbZMMLFDSuoWOQvpDiFfoJ7XQFpvhid4sneHX4Vo7O6yy0wMbptrSszvbWl59obPMaQ02F', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('278', 'fPFM1FpMvE', 'RywRGNSCtkaXBbPNtV4tYLZUEQxAHBKFDi3cq9D0zbdLg5NIfJiObLkxCsElGA1MY6j8LE2k2JZIdO2bLsnJ9qTM2lVslNZAcppf', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('279', 'WpqnkNWDqa', '8Ro1CfekK7wS9WtwkdxaF5sMCfGOuaMsJz9wi22IbJoZE5jaIEZ55SlMFJIwtHIXRQfzy3UO4dwo7R07xovGtkvMYjCwEPRP8Lo1', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('280', '5X2kB6Wgzt', 'dYkCL2TZGDffGEmgLFXztkw7g65ddsuJG2skOk3AYkpKODj9vUuzOrNt901QScWSeAtsUqP26uyyXE7pKO5t8FzmJTYqael03DDw', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('281', '0WkOB5SUQB', '29rlQOoHxJLmqm9kvSu6VvYPJ0iJTQgiZwPissbbyGJSglh7LXSN3OF9c61UUnNrtALfNYFydZZRqDsN9eQ1qO9ErdiSe2I1lbM1', '1520414238', '小赵说事', '1', '12');
INSERT INTO `mall_message` VALUES ('282', 'nfxi8dF3ut', 'YjgWs43ZZOl5GGqLTZ48QIIgLGIqd2YkRFWmFPgfo93rqvWYPAHoRDfszj3uopTE8ZcCWML8h6I6XMz0cDwv3FKsS5QQrc1bewEG', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('283', 'HJRdlr7sW4', 'q7chh0ANApc4TKLXMVnHBiBwc9tjn6BvV9PTkVyYlYuSODLrZyVNuBbZby4D2wpzMfJBnr9byk86gD6KrW48sMqPL30jkPMC5heB', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('284', 'fIU9y1JwyA', 'JD9Zt48c6WGFOkqaYZypsm3HhIs6nReVEdhtqk1eCuIC9Ja5EDFCUGuqsGMDvbsB4UGOOG7QnjUC1h3V6NNX8rPfrZn8JqwB6igd', '1520414238', '小赵说事', '1', '18');
INSERT INTO `mall_message` VALUES ('285', 'yauTkEC4Br', 'vJC4nqMfeLlTyffXdou2CNxZga8YDfBx7czbxpKxL3sUSYepc9AjuZlStl2kFdrTKgZzxBA3IEmfWq1AHsmX4IjSNanipAxca0lW', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('286', 'SmBgaajqQ0', '3MwhtafTzrEUDJtsdXRRY2ibNGxRRrnh4KvHmQOhRCeUNLk1ov7wsv1hefMQDyVdA8WsQMGNvaU1SCxi60fkR34popfYbzKB355Y', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('287', 'jRMuXykHDC', 'UCaeJRZTzf7no2hHBtBDRXNTnQJZZ98IMSVS1SmHiDZFs0Dq3CduNlVJ2dzyY0a3iDZSqGcudAZZwHRxZ7nDAzMhiMnMaTFwLeC1', '1520414238', '小赵说事', '1', '12');
INSERT INTO `mall_message` VALUES ('288', 'OhDr4X8CTc', 'eQl5iiIzHbLsInEaS4mvo3voU1awH96RjS6cZ9OO8mffFQ20hqGywyPcxA10OC42DFjjDbinRz5FmQTdmiTntRQJiq0nmLloB9i5', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('289', 'jLDal7Ww2O', 'oyTxPNckBv9Yah5RfE9WbSqRZN1PAagkQr8PeUzbE9dYJ6YrW8k1WXfHR4CiEYVzbSetQYoiIJtEzWCbtg4rAOIDMN1yo1pKqCd9', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('290', 'W1ucJYb9oh', 'C2bCF5SSRyU4JgtDbXlBKE3Kk1hnVfUbPERfxteyd3bEkanl07xDZrmXNsNDPo0vjHbEziWFAf6ZJCFoVOqJJ3LP5OFu4rNE8Njw', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('291', '9nL5L7829Y', 'CMXtgi30JcJpOAn1qwYkthePLHCOIFOHcN3xkje97g4fREueZyxwzDAe76Z68j8ZIxtSs7y5TY4QAD9fAQIxUQesABdX9TKKrxKj', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('292', 'dcivvJB4VD', 'KoIS2rA4eUKg1QAXOsH8e72Ca1xYqYcCAWwVbNkmjN6ruoTOmSQiqOOeoYBBbV0fY3xCjmfUx72xKSTWEkKNHuJndmbtyr0eTVjg', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('293', 'r1Y5BQ0D0g', 'rwybFYU1yVkhLhS0sxLsXGekq6RSHKOcIBTBCJntxCiq5R5Uhj9mnSgbEfwIwJHglJ5WmcQSylEUNohlotpFUQm9LEPhkwtPyWa9', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('294', 'tSo4ack8Tr', 'tF0v0nQIzmFDNbhYclt5PneDggwZfecAKc7vHIQf2UzFTQRlXuQEbHqAT43eYy9o39NUoMcQxtCqVePKPijqRyg9rWHv9EuP4fCZ', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('295', 'ifGSGQ2jro', 'Nvpmnkt0uF80RqPXhfMzzhMyHkLfjN5dor0vL6oZHm9h1xYxnEo2NdSxT1U4qvHnRHJBDlrXuMZbklRtOvhuPAIeEcXyO8rgd63j', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('296', 'zhAydhbxcn', 'QhnHc3hStUBX5dI8TqwnEwXJaKPZyXpFHSG4vYeOOxCMuwAYdUsNSYtp4afjhuDNXRr5lmYZmh6Ws2ThnvCq5VoC7BiP1pcKHGXs', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('297', 'XPFyeUNabn', 'Jyokxk9JrgJ5qLJvsL3TTtatRoXiNQLn5O02p1xM30rR9LlssywKlnc3Rh4ffi7cKHjmQukBIbop6qWaWieX2OWadOdgICrq9BXs', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('298', 'JNU9AHlU5j', 'wY4ptAjqwkQocIfpNby2WfHWvTRLpn2taQXHK7GbatBtfJSg5p8EZMT60GAVAV6W69hjnMaelc9aHUIT1FbNylTi9EPbNvNubihB', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('299', 'V8MnRyISHz', 'kysWwa0gCjY7eLNR4ur68mctESwDe2WES4l2ixpH2sE3N7xpYbAmGHpUQYDLN1yZDiZ5qdTZzI3vnfwA44Tl8KQqRV1tIJyc51xY', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('300', 'JSYs7Wbbxd', 'H3VEWQ8N2oaVr6Ky4X9daucpvRkiMrJXO1h2b7gJbGe0m79IosJVm8pR93HrA3YEv7nocO7blc8EiDKrvIUwo5BrBGt5mVAHzYi1', '1520414238', '小赵说事', '1', '12');
INSERT INTO `mall_message` VALUES ('301', 'ZMlAdYXLkW', 'CnFORXw1CjJttxag4vJJfKsxpsIRHPquarLqtugLiBHtp64NtnjiJ5Hr63XjQcFACdRYz1zaSDY0bkKsCGrhywzZUdfO5ySZ7QVG', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('302', 'sQoTuLjvFZ', 'dhUa2CVYLVVsfrbrCFD27GocvtkFcx2RD3gm2M0PKdO63vyHSgNqR7BBICzEf76mNSZbVMePD2DrVBccVMsnMNvm40s9zLS9MxQj', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('303', 'as0X9dnXAF', '3Kt7qTaVolfds8ODzVHBF3cKrG4GEfjVHfI5DEguUpSw27gVVh9mTqcLLSCzmHS0JpvWvNtRAa87gBDB0d2Paw1DwRtO27GsCrpB', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('304', 'VhM9EVULH0', 'mU2SF9M4zwDVgrdT7ZoMwNom1POQaK9VPCpJkVzfIJmV8ZacCQNSYUMDBfg9tk5LbXXL3Q1NxhjmBvUMHeEg0Y64vHJ0XeONWGBy', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('305', 'fLCd5U8wFJ', 'z2MzyRi4qnU8h9KHLaef7ykG1HyK8HXYYO8h7fUlO6EyMlIr3VY2DhzJ3s7LSnBQIl9v4stvqbjNnggOGh4PxKGaEzYcABiS8dai', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('306', 'zyT67EcNdt', 'mOWSWma97KxAW4cKHcIicZm0Zoyaq4WRfSAKMUdMdRSKK0wyPYUBmObJLWJU5M3LqHdbGmqiGzjrU2dat0vZWaxY7MgoeK4nabHt', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('307', 'YAp039ave8', 'imKVxHtp4wKsrXDyXmNqQj7j5tZnN5s7vGKGl669L3Jcgwna9u4OplPawXEfjBNWVnrg8M87OtKxKiL5xXwnFsGOFvy9idt0kI8J', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('308', 'imkh6AQeED', 'yIzAqbrYpZKWs5G9KxcN7xRK9kggW7UFvDfBquTyiTg7g8Bb49L1Rox82DmutRryLVSwMFwD6hZnJEkbmea4LOu1VoSMarmahDfL', '1520414238', '小赵说事', '1', '18');
INSERT INTO `mall_message` VALUES ('309', '7624jzHdLJ', 'ExfIwNS7dcSPZq4nfSKJqufQYAX1LynSTReGZQokJsP8uYEL6tImzVPk9CT6OezgP5Ne9gpsdFvMg2EiT3a83hqOBvcu657fgSwo', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('310', 'ohARII3zjn', '5qWmBZHJLZI0zWxzU9pJJJMCWWQtKArRQWz4VM2eIwt1Q3tIZQAjiYzsf3Eb2xA2pDdQwPOiJrJXrrMpRZ70j5GxT7BJa38bli7K', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('311', 'pqTQD4H9ro', 'upcHSgFU1AlWznmyyuZ4xYv9xA7VoOMByBdFhREPAchaBRezAJz7qgj5GAd0GYZ2eOptkk41SSDONnVtj3kMVqEftPTy4XrBGfna', '1520414238', '小赵说事', '1', '18');
INSERT INTO `mall_message` VALUES ('312', 'MTYbf7A55e', 'WVoq4V7kQWLXWIqN2seCdylO6LsNWn08vkTWn5qmZRJHnjgFaATMHleI1rkhhHFYyfKkoXBExLZZJiWM9A8Ben0H9VzepS2nfL3n', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('313', 'eqVbZh88NY', 'zdxuMIFF5ZCdXgRaJ4P1LS3uefVjoRKiGYqMPhyYV4hKYZ3v7gnocs1O3sLCwe9E7evZORBHCbmSAhbJFWdajzHvsv5AmdKpE58M', '1520414238', '小赵说事', '1', '26');
INSERT INTO `mall_message` VALUES ('314', 'LlEGlXZK4B', 'LFj5348f7UUumCSGQkEwuVkPKaB28s0qd9PNoOMS05gOHe1Ru8jgK6OlO0Ca8BCqxlnu1wsAFalwvK2gwrIkuVAyf98JfVWxnLKl', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('315', '0YuWIgqOvT', '6wOBY4INaUGusrenFyTMfgBfl3ggVQ5uss6TETzeYuNaSlusjKD6d7zu1R4wzn1TZcsEH0wPDzPWZnF3oKKDLlw0iCXim3fkJD6U', '1520414238', '小赵说事', '1', '26');
INSERT INTO `mall_message` VALUES ('316', 'mTbWzoTk96', 'ANb9kUMVuJqNYqhYdPLUTmxCexT84u0j8M60IAzX16QYpPIiDIN5cFfbx2JJqSjR35wwrXxXII4B8uIZ2MChNYo04KE2DBEwyGmO', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('317', 'ZYbVuSNBel', '7FHpYdg16YeyEqQ0bd2MipUOwdhA6kKHxRrJSVP8djVewQtFooRDkDXTlJ4IUtsHb0EHeNwOPjXjUZm3xD0zyyDzJ6Rh5ZiuF207', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('318', 'pfZc9jzATu', 'ueRt92cSqB6Bg8KmGAsUFMrKvusKvm77IoWQo0upsyRu6pG4igTTQX6fuBqPT8gefHSk9tTUM8HPT7KhyJYTeIgd5oH98yJlJyIs', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('319', 'GDP7oCy6aP', 'fNuybgto29ffHgwRWdQkoqvd1QE1vqIo5RVMiaqdhQIom5FnPHDoyiXq00NDyHqwVpydfCC3ngRXXK1x0ZcNlpzJj2ynbumIqNrn', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('320', 'ZzuI1PHUyq', 'en9NF4IZ2wqhEboG5MxSmlcRSU3O4yzuuIpfAgZImMuWZyp40YPBaicugWhz1zRwVYPZFWdeSFRXkyyn5yBJDbW7T6YmWjpgqYks', '1520414238', '小赵说事', '1', '27');
INSERT INTO `mall_message` VALUES ('321', 'IGyN3ktuvf', 'IcN6TWzopSAsyN3MTULbQDPywiAFfFMrIMTDfE1bBxeNwS2URDaObgYd7glP5u9DhnqC4FyJVItoVW5ADd7bKm9gW6BUoeMWZWAX', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('322', 'Ie8g8B875s', 'QE4qaejNPydEcym3tGGQnYI0RFpqoH4PRyyvEP3ERyDKWvJ4D4FJQoSgOgkUlYjRtRyRqk9bp8gysoCF6DRYsG2lljHQHHo4Vvr4', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('323', 'WRdnueu1EX', 'A6Ytms9Dsgxn6M9WCYaVH0cYGDY4YnuqHu3t272E73vQiIiofxmmkZzrWYk86xuh5udeqKfpJNtyNQ895RYhSPud1wTV1jqo9i5r', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('324', 'zG5AOsDTcG', 'kdAX5xvvZqUG8AffpsDY9wAeJVaiPRCt7QSnGvFXoKlZXwMQwBljIT8wTJixVV4kTJik7cMY1U3xcV44i52B8R9O7rDwHQJt3oOE', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('325', 'PUT75NQL31', 'a2q5xVundLIRWY7UApBKQ7j6rcsbDMkSUzvfXzIrO2Br23CvZHxjsjOOezOGK47wyzkCDDEhaGEaTrjXQxx20ef7YexHyF4Miqju', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('326', 'ZK1khhm55U', 'fiEy18f7a5ifXQ1ogjiHCxRqZYGhNnFxPzgIyOLNO6YEA4qz4nglzHS2QvXFHVUpsK6mFzuqi6Upu2KFsQ0FNvSQNg1x9gc9uR7g', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('327', 'nsaUPIXNmE', 'mMvzPQbHpcrWJOpXYi3J7pZsnMra7XouSXmRBkpcYK0jV1LRJC7H84IbMzOWNs85JFjmDQDVPm358L0e6bf0fZJ3rvbigXfpLXmh', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('328', 'EM5xEJ4QXS', 'eClRijqak7jc8nE4LMNIK0AzFOPnVpND2apva2LtfkYy0Iq5Hg5K4NFDzGUZqILRYPOPWpOyT1Xp0TJBQJ3rWxbbiSEdM8cCE8cD', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('329', 'w6g6gmYcPx', 'zevGnLuWrv4zTCK4PIv2Mp2jJwzZW2WkMpWKPXH7wG7cHmJQprhmM3SZUD2aOlYoxpTC16WcEYa2Gjyrwu9ei2B2N4BWeMjQsjmI', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('330', 'Hj7RqhejvN', 'InSlhntGmghWnkSOaDdHpSY0m8DKlyNldGQki8TmDaxNj6m0j9ArSiZaAOemomIa2gaiL9Teh2dii0B3gp04KfcazGfvsjqCEHjK', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('331', 'A8TmJmoVo5', 'D5hBBgSvYK3vJuxBJRJoNOLKTFekBwm3qOHhUGWDdPg2hPiDgCtua6JGQpkAGOxmmrU7m34uWPeJglOyQ2YEoazX8lTZa0vJE9Fp', '1520414238', '小赵说事', '1', '15');
INSERT INTO `mall_message` VALUES ('332', 'MTROGZgm1f', 'jCNPobH5HOIDavrNoU0mpqy8SHRKVtcU2yvW5RGgyGL8Z5ioO7sbqgVaH6NLDDudmw3u9Te48u5fNqTI704gNuGz0br4vZk9tWBJ', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('333', 'tk4YsCAG7F', 'cc8HQjFLoRh5WmkbjyhIQ3D1yGce62N52r4idmD9avZsmcEqye9UPioI7P3GyTPeAI3GCqFqjt2MPtwwXTk77A8X6jxNxOxaD6Ny', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('334', 'FxrNchMDdd', 'C7vmfSLCZxFB59qxx8u1cLJMQAsQvtYYkwcSybxwXY8Y8fAAnjB9XPA9aCdhLVc6ND9WzIsptCWTLHzqzCjwSzBpWwoAyfdhfZ13', '1520414238', '小赵说事', '1', '12');
INSERT INTO `mall_message` VALUES ('335', '2riC70Qq16', 'lDgdMq0qVemkjyg4vFufYvvyKTCK29qLOXT4yCdTh2yZneq54XV1VOeKNjGD83ybByDVoAMtgTmxskNBsvsRIx1wSdKpwdGgyg6A', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('336', 'baKGOPICvf', 'IjGkCLzHeor93hEwCWYvEDdYEu8GQxENPWdt7K7Umw4vPRybHazVRsR8rmgKTmAJl8j0E0eiqzm1lmyesyAugOivrGlJVpEJiHkn', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('337', 'mt2DwC17hj', 'ilYe8BWVZQjheXwYmD8ezvF3HZYDoPQyTi1GAILcg6O2b76gp35f3kddpaP00ideAyiP0Tb8B0BDqDfx4TJv6kJl0hHnr8NcNc6j', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('338', 'cg7z49CfMA', 'wrbNTkJGBbDiTxJmOuXw6M4Y60eiiYHnoHrAjlMStFftDOp6OlnSV40815mB2o8s2dtQTkeqelYK3fcx3eyTcmulOfxfgSD5mMm9', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('339', 'yAMvlMgRk2', 'Sk79XT9i8Hm3RUDwUgxwY1eVVq7cv4G9UJ22xbmViUK73SkwPCVHvgn8f0Mgs2p9JAJc3U45Ioq1VTo6UhQVXWDylILdRxY8VtZa', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('340', 'g47MkJJPtw', 'QsjM02D15pF8HA0RBIZqMXrFkFgK6qsm7whiU2Dkz4rY3t10GYFUMUk4g0Vh6PBd3hHB6uCsUkyi3jrCP5EuFMBCq1Np74yMe7Mu', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('341', 'PEPefvtqjI', 'WjsTwHWFT0Fcl2oKH36R37u8CVBthBh3H193EdvN5eRJbGjJZmvc04gVbhW5qHowGNUkmPyc7PTbCot0aLsCRTMMBhu1o53JBCB8', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('342', 'N5W2HAeyiR', 'ZWIFNGfjgTcngw6rKU4taJD7v5asH9TmhwjJI00FSBD12m2NqUKsamu0hmF8HJ4zxgLUXsRvNxOHdtbv3lGwrtmYrRs2vxif3XGH', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('343', 'pJrMf5bFwq', 'cgc7UNEvObANTVM0V6XVWj9hDYjMrcM03dyphufRX9w4QQWeiBD8nvd5iF3OQ9kQdPz1hmQOCRfWbhos1OAeRhOOfYioNuzwaWzB', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('344', 'q238fjG0X9', 'EJynsWCArqKYt3wKtbSOkGen5iCj3vq5CMKwSNm2FNXqFIOtskhjKI6wZ54aU70hDnsUt7Zq4inXzujorhpzVfZEdY7K3UK0LRcU', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('345', 'gbFyC6kfuo', 'Y5495ngXmPdJaKe6EDnKQBq2r8SXZMfRiIr0KN3JXQyRc1XhwbbwuWGnnYOhxODurFseoFYH3mpAFyHUI2xJRy9wvTEbUsaa0BlI', '1520414238', '小赵说事', '1', '27');
INSERT INTO `mall_message` VALUES ('346', 'KKOniD9RGX', 'QYW9tOYhyF4TtpI4zhCsxPg5p9veGajFO9PhZc0pRH8wYaz13i5QJRsdaWZ6jNZyXpNfdEgfVdGFizYU3hROYSmDRukuYvyMkxNB', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('347', 'HwHnMG0P3z', 'iNNBH9b2dc0nTVGo3qbeWoUXSS6I2FqUd2qhXlAHQf1QVJTENWdwb45QL3ZksqoAm9HM1mr02WFnD6EVQdtFX0tOEFlC9u3dfQ4F', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('348', 'ijyCXjjrY6', '3Ztaf77wTDPTHhUXsHPsnYfzcgJASn3WpWWEUGI4mRCgOziA4D6qbNdvru1VExXor8DxYQ78oZhcjWJCCfON1KkWLSAdSlL92xY5', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('349', 'ZlJInGChl0', 'mEVvQIke5Sip28fvhGgitDqThIwrjL3SgJ6wDvQpyNEEZenLOzUIYt51CMiEV44uHUp2XhfMmuKmT3IwSglY904FtSczz9HrSXmC', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('350', 'C7qT0Dfqha', 'NWOYMuj6x8dsZvjHPE0IgbMCCvMYlG38oZ3tWO8UbZ6oiXlEzYLv6LbzmeNibeqZTGR9K1mWuPM017zUkj7BjSaL9EOit6bcKB1c', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('351', 'J9pAivn5vJ', 'r08PFypIMsgsWayDOrT2MTJCPyshmOzxzDJb78RSXf3fM27MAfDRbcP5hQTXzfISD1xJbfXPQ7PNp2O5KqIvUfCDcsyYQ7qc3qdQ', '1520414238', '小赵说事', '1', '18');
INSERT INTO `mall_message` VALUES ('352', 'upLQzhrYT9', '8JKn3scqGnYisYKpArJrM60eACr7GXNJnUrrEiBsuNg1XU2dJZZkDiv8uzMUYtFNO9YkA7FDmveBbznEdebEzdMnaRN6eZZomcpN', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('353', 'PlPHrZz0Uf', 'VzIx210d9qsPcY7oKGhp4zqQd3gRhnUasdTGGOlXf3Z9bR8LulA7NSdfA2g0DZzJ5i6QRJCTmey5htJSusHiQYuxPVKrDkhfLiUe', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('354', '8cYbvAxvdW', '80yVlmham2pTw6F7uWkDlA8BV1Sok06gUjCsTfMGhwFMZnttxQTO9qrlO7E0yr1c6k01s6Z2MmUwV7W6Mi63tvpo1uGdWwSEmgPh', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('355', 'fEnIPBldrX', 'fMovxussvLyRcd1EVpW0WENwX0vPelxz5nR6tNzg6azpNGydRanPGEhcGJ3axrTuJzEIfZlZN97RMKhZV9melEEFQUej23Pwe8fw', '1520414238', '小赵说事', '1', '25');
INSERT INTO `mall_message` VALUES ('356', 'lzGz0GRbJk', 'dx8C69Kix6t1yjr2DhtYgtu2Zjs5VhN4zjNfGISZ1VyLsyAPKDlOn41xCO5AItwI4C5rAeoLvRlnjX6iuibEm68TtBJZqblmkEhO', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('357', 'pu0VmpNeMR', '30A48HmyI0JEWydyQr2ko9vDlNnkPe8HWBOkYNhNLTlrvUPvdyBQSp1c0F3QLvzLEnDVmWRwUgxO5hMTbEcbQX5OZbHgyOknNlba', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('358', 'QHHNdnDVfK', 'sYYwKJ7ugkPxfabuAvHlUHXwKFU3kqIwJ6Hig49eIwp33CLt8ejUCs2RaxCCeFCjJgCob0veA5jifvv4x5wC3hL1g6MGvaeTKNnD', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('359', '0nu7wb7249', 'lQjEu6yWiPxiyeT9zpnD2Z9G1zawy8MRXRrmY7yWO0jg27DSOdFemt7kgCQpP2hG1BarCVl4RjFCanqroQut7JsNEl1anOI9BBJU', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('360', 'LZ6ScdsB2A', '6WsIPyjpvzir9FfwEbnnOpzS5pEf1M2HkPLEhbkVEnbMquGL8vQpsTogwohSJBzyVWqv9rO8LkXZSeZ05Xil7PEMokCfZBYt3eAo', '1520414238', '小赵说事', '1', '26');
INSERT INTO `mall_message` VALUES ('361', '2Gn89A5ik4', 'EKB6RAgcqm6YbluL489xAKLemyDt2Dl2vlOP4CU3QvORyX2srW5F5Lj2hA7beB0rD9HiWy6UEVI459KUkY84gzno3DtzzZu4wXzn', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('362', 'cdyHzBhPGg', '7T3vcrlQxMx9hmNZf2MYA8OOTzTMkBXdOy70slX5X3xVpYtLsGGo2UZCsAe4QUxqwyTUlbcFwKBPi0D0kIcnpbhfr9SpMqLX6Rcq', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('363', 'dpDGwIb2LZ', 'I4GtwkBouuCezeSejyLW8WVSxXQXxAl0FhLLsmrbCsJ7Vyi28EQt2iUdENc8TLWC10Sib3Op8om4W8H9CelDNPYbg4a3nRszKln1', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('364', '2gGpLZVLAZ', '7b8bPlEBlzhUZuyxmlBjoNUPSH63SxU6x4wMkypDzUeIRDBxM2tKowfdAcZZN5mStpzGghCPwsuR02o64t1U0iZ9z86sWBSdTyLv', '1520414238', '小赵说事', '1', '23');
INSERT INTO `mall_message` VALUES ('365', 'PfLIwalqJd', 'TgvQekDlSLBS3veoHqrmoipFxb9dsOCa3tL0Z57CZXcMF7YrZv1oY7d16vsdDnqllztjik4QlOqee6Bj0kUbZ1v3eExrfznKd0Hz', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('366', 'ZjNCi5mK03', 'gSN2sKNGgX5UxfjDq5dfv95mOmHEKMu6elapcAb4al7aF0T9pA1nWLV82wDBCygvTLyWGUONxim4zeZacVvTyEfHU38fnsc8U1FJ', '1520414238', '小赵说事', '1', '13');
INSERT INTO `mall_message` VALUES ('367', 'hz92oq2Xhk', 'DK1gaYwM6SXeHQiofi2VumnFwsXu3voSNL00upeC3POa9MpB8gmKVsYiSVSxFrhWsqgAVJsQmtzZ4xdpzMugTwwWyEXqCeNZl9xq', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('368', 'iQPBYjzxqM', 'PayzdADrPuFHBzwMdsJEFpZdIIHAAWh7RcT2S5MS2yrizouecdi7PnLxNGKJ6W0TzBthky0fJzTCLgfnHHXprOzFE2mTdtpiWUHx', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('369', 'eedIy7qwha', '9YLmFgSh4vtehDVu5P6l1TMIvmriwOvaUO8vTkily9ezQYlvVxPhabFdM3KOCTMZWQhyzW18FtY7HNRWIa9JQpsWzoLlpODUaT6F', '1520414238', '小赵说事', '1', '15');
INSERT INTO `mall_message` VALUES ('370', '4g6KV2zN0Q', 'BpD1EQLhDii6d2tB1gB4Yy99qBLDrOcUwJQrv2kNynvp8giV5JWsHf4KPpSe77adnKlUT2ZpQnaRgUJt0RnhvB2PAGJwMC8S5j7Z', '1520414238', '小赵说事', '1', '17');
INSERT INTO `mall_message` VALUES ('371', 'ic9zXsVUyc', 'DJQf2rpyKPHsXd6GE4N9KkcYd8J0Iqv7SiJb8JPI22RccojWItfEtq7d7eE88kv1MhHyFwjrADgi64m6xWI5UTvuD6U5EHHd9oRJ', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('372', '8uKG3JF6Al', 'BrC5sZ3xStz5BGX7FGtagrhi6b3t56nRKtkUJ0TwFiWIqoYgetE5NewWAPhH6NgU8JeUXwCPEJRVkLgxLuicLFEYSoRFFbpdAQtg', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('373', 'pzm7Ckc32V', 'GKHPkE4idranEfB8oAdPhLrjfdFWUJ39f5L6cyGpzvtjR4Z5y0P4EG1SQZ1Em478RC5ODOlefo5Gaxm2MkJDQSt3nBJnML5asyzj', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('374', 'cO0c5m4zZB', 'AoN9L8P8yqv8W7gTbBcQnA6ZFnyXxRLcZ1KRHZO2S6iLtcZo0zZLmQgjdv7bUednCJfunDsWZwYr64rrsh2CBLzpib0geF67itor', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('375', 'BTwrYq1FH1', 'TPHBx6javY8dwFd3ZyDgHQe8QAjzPJkg6pF68sMGU8LWG3ozurNwXsKlsX0kg3ZyXdn82G9jMaEhlZ0caZzxbeLcfbNkt8e1Ugdk', '1520414238', '小赵说事', '1', '25');
INSERT INTO `mall_message` VALUES ('376', 'KpAcuo6zPJ', 'VcHIxh2zaMLj3BwncdQFGIxammrf7ncNvFNc9Czxg5rtz8uv28wAW1MVcFz1FhLgy2qK17jVYquVH0T6yZDV4OS0uL4PiKjKv39x', '1520414238', '小赵说事', '1', '23');
INSERT INTO `mall_message` VALUES ('377', '71x4YlMfEq', '6r3Wq6q7ZMBoO7sS7VYoSyIWKlKkctbgSetbVBAXBEunbSf0e15NanLQPLCVQyroMHSIbcaVB6KLRCH8932UmcnBq7i818yuvIl6', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('378', 'yEBb6y3UlJ', 'x3tMbRDRFD8g7lbs6KUKBcojt0UPkIKplzk4XmO4uHH9SCI9Tji0OCmFNmT8u948eFzyg6YQNYslOUMYASDTcwrPisjqT4J4224R', '1520414238', '小赵说事', '1', '16');
INSERT INTO `mall_message` VALUES ('379', 'dJDY2EGXev', 'xw9tKFA3u0mAW323DvBmWX5QRLeX54KULj2QfyYvFWhb2mh70cPm5T7SCJY4l7xro5jEAqcFgsclNioW3O8geICtcrKJfxOacZph', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('380', '0UdniSsgO1', 'WcFGflFhRLDK8eDuHyDEnpJynSBOmemQhqBzcB471vg6wUJjLdoneoWQ6wmtUAOxlVHNFLd7TQUvNfljLkOjnCdQTMa9D7Jyz9BO', '1520414238', '小赵说事', '1', '24');
INSERT INTO `mall_message` VALUES ('381', 'oWjGzjnO6S', '2k4LiJ0kCNe89eF4IhUJsBkkwKHWNvvyEXVxDsk3NLByvje8yfecrKghOJujDM1HKP2iWYHpD8ao22AURG1H9ZaJMh91iT3TuEAE', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('382', '1qRqLsbH4x', 'hXl31bdMoQ5x82EBSZon0LOGi7gt1WhkMEZ1zIforvGHM6raSdqI0vKI1QJdt4cHs8NwG00DsVcieQWbqy6FmCt7Eor0CSXDuSne', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('383', 'OeIMS5mvcC', 'MRegrmsRwDshSgdFLRVoc2rlXmHnIECQg0GhRzYdAfd958U8n1lV9C32OLxRecEaMdYPjF8BNgy79j1lxmCxEd9VWPbv5b2z44uk', '1520414238', '小赵说事', '1', '22');
INSERT INTO `mall_message` VALUES ('384', 'fmoij868An', 'gKkwoBKekE7d7WJz2gNdRcgLop1162ospa3IA8zhzoHuZFjB2pBcAg6eXr9i8PKOgFnhqCUzpR8j0ncGA4bAt7khdY5fWfr6anTS', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('385', 'rooFJ3gv0I', '0K419zOgvFGJV3TUDE9PzIYEXzK1m1Gnz9v0oLKetYyp3nhX8EUWm629Hbp88DeDmettH8QuBxPu3RsLBArGNzllCnTOYlvKqRTR', '1520414238', '小赵说事', '1', '27');
INSERT INTO `mall_message` VALUES ('386', 'vTFNe1Q0x0', '93R6TdgeYeaVGgahwBDkpPFbCfOEkpkaGT0nwFER2kDU4F1tcrI4DPoglzgcyp3PIuCzJHdZmTDiJSK5aS4bVwEGNmZv7JhUNqzJ', '1520414238', '小赵说事', '1', '30');
INSERT INTO `mall_message` VALUES ('387', 'FRSIvFbH77', 'cfYXm38NTMhK0FO8sjZxTyjOTYpjZ4PwKM1bZbJTmXoE13vOOCA6D603xrkZvhvu2nLWUWU8dhZyvEQr4PD4wdc09i15mlg3WlSZ', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('388', '8yDcDqgAT9', 'oUipwp2QoBjq959FIJvd6vOZGQHrLpYHNrBEOSaC4hb63cO1FITIujM6He4hdTNLGd7ixSy2LMUEK0mr4yY8cDRt29mDk5GNlYG8', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('389', 'C42sjkXure', 'rtOR4iX1BfXvwsrzs9nPEwX2InNWQZqk723EhOHa7RFrJM8BTXngZcJgUPLZn4SMjmtEalAh1yAuhmL2HIUrducMyVi2Mpm8RLv0', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('390', 'JypvUwOB5i', 'k3rkTQvpeg5AqJCV2ZWzteanaXBgFFdN43iaiQEs97eibLhPqOVYhIs3aFakoy8BHU0brFuukZPbHNQrnxdsDSYY75PaE49d9Z3U', '1520414238', '小赵说事', '1', '28');
INSERT INTO `mall_message` VALUES ('391', '0faYMwAJnZ', 'V6Q7PzRGlWP2FWFaIBbOalkjdcgfQkY2xNFf7397bbcmzlEgyb1hENM39fB42Y9SZYnMade60kD1jUSfxXfixNdXcv8LlOO5BpZK', '1520414238', '小赵说事', '1', '29');
INSERT INTO `mall_message` VALUES ('392', 'Iw2gBW53t7', 's44kmCXiQF2Om7o18otB1vItmYKY2xBRhi6CGHIfjsPgqds14Is1wgonWCP5cciN3KHcNtuc8yBdXPcw9yzPWc7GY1wKUr0IzG1Y', '1520414238', '小赵说事', '1', '20');
INSERT INTO `mall_message` VALUES ('393', 'yWTLmJRM2q', 'bFEohxcJgJjUNQzrVeiyH6r54wsxkFW37SU6bHEBV8Z9eGZojcSPj4ZmiYyZFlzqXQbNjOhS52BqCrX77618wmJKNZObdjso630e', '1520414238', '小赵说事', '1', '26');
INSERT INTO `mall_message` VALUES ('394', 'tEVc7bsjJ5', 'IHuYGCBO4MFfKRDfsBA8GPh2IT2IHWmY9TE4Chq2g4gX6IPvKyo7D8btveojroGFxe4SSD9R4Wm6Y9ZlDqFwyihQNNvg89TFevTz', '1520414238', '小赵说事', '1', '10');
INSERT INTO `mall_message` VALUES ('395', '8FGz18AYzs', 'eTB7vscgnTcmG5ytlOZ73mfYatKGvfI29ANLXmnMiO5nkdKUSiUTpxWHwwjdQC3LZ3FaWcD3oRHmHTXTdWOv4lEs1ziKCDgNKQjV', '1520414238', '小赵说事', '1', '21');
INSERT INTO `mall_message` VALUES ('396', 'Mco1V5WHsu', 'Vgrqsp62NZZZi8LXPs1jAiLcoFTSHV46Cz45dbJxWpENmiFK2C6Ss7grpRuQBAQa1PkdZix2wNKNGACaK1FCUCEmiSivJizI4Kwf', '1520414238', '小赵说事', '1', '14');
INSERT INTO `mall_message` VALUES ('397', 'PiDTiqJJXu', 'xCK9BD5RRg2spdCBQxuGDhK6FQx3n4vo6VFncT6AsYSreebpcKCFjCoBbfsz8x6Eg39iktTq6c5mNCOhFXEj8hMiJANSPJeWhz8q', '1520414238', '小赵说事', '1', '12');
INSERT INTO `mall_message` VALUES ('398', '51QBqCSP4d', 'zxSQmcgWxdsSwvRIhJPy975A8715VMGclmhxybN7QeGFNP4mepMwWiJ8Ui64B54DdJImlpC2u92Rho42ac15qjT4C5ZxhWOEobdG', '1520414238', '小赵说事', '1', '11');
INSERT INTO `mall_message` VALUES ('399', 'GPplwNZqS3', '90wG8cBA1HEU7neCWrXekCFv1z5UsYcP9rHQMypJ64cDPV6PsHChx9wmIVmG6tMF7oZptCw9wI2WF5sNjwnppW4gz80Q9QfNdRYr', '1520414238', '小赵说事', '1', '19');
INSERT INTO `mall_message` VALUES ('400', '0wlyAIsXCG', 'zWZEIZecBjfQyWgJO6z3tdsoJ1J0Bi6cTwb0MaoeYQrvHDEVYWs9s1Ut6mehDApq2wi97sMOQMru1VB7jFmFYuGReVkBADulBx0g', '1520414238', '小赵说事', '1', '21');

-- ----------------------------
-- Table structure for `mall_users`
-- ----------------------------
DROP TABLE IF EXISTS `mall_users`;
CREATE TABLE `mall_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nickname` varchar(20) DEFAULT NULL COMMENT '用户名',
  `user_password` text COMMENT '密码',
  `user_telephone` char(11) DEFAULT NULL COMMENT '电话号码',
  `user_time` int(11) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mall_users
-- ----------------------------
INSERT INTO `mall_users` VALUES ('2', 'admin1', 'eyJpdiI6InZwYTlaTXBlVlRkVExKQ1VrNGJWeXc9PSIsInZhbHVlIjoiWVdVRVRZd3ZjTXlNYnB2QXdjZDgxQT09IiwibWFjIjoiOWU1NGM2ZjZmN2E5NDA5ZTA4M2ExNmUzMDJlY2UyYWNjZjI4NDM4MmQ2MDIxOWUxNWRhM2VhOTEwOTNiODJhOCJ9', '18280195336', '1520409612');
INSERT INTO `mall_users` VALUES ('3', 'admin1', 'eyJpdiI6IjlxaWp0ME1weGZ5Wk1lU2M0cmtINnc9PSIsInZhbHVlIjoiOWhRSUhLN3VhSG5yQ1ByVVVPUU13QT09IiwibWFjIjoiOTM5NGYwZTJiNmEyNmUyYmZlMDA0MWUyODFkZGJjMTNlYTRmNDI3ZDk1NWVjMDJmZDA1MmQ0Nzc5Nzc2NWM3NyJ9', '18280195337', '1520410077');
