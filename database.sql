CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `database`;

DROP TABLE IF EXISTS `MyShapes`;
CREATE TABLE `MyShapes` (
  `shape` varchar(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
);

INSERT INTO `MyShapes` VALUES ('Star', 'Green', 'greenstar.jpg');
INSERT INTO `MyShapes` VALUES ('Triangle', 'Yellow', 'yellowtriangle.jpg');
INSERT INTO `MyShapes` VALUES ('Circle', 'Blue', 'bluecircle.jpg');
INSERT INTO `MyShapes` VALUES ('Square', 'Red', 'redsquare.jpg');
