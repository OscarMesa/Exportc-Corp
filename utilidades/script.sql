/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : tablatarifas

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-12-20 15:52:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `areas`
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`descripcion`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of areas
-- ----------------------------
BEGIN;
INSERT INTO `areas` VALUES ('1', 'AREA - METROPOLITANA');
COMMIT;

-- ----------------------------
-- Table structure for `destinos`
-- ----------------------------
DROP TABLE IF EXISTS `destinos`;
CREATE TABLE `destinos` (
`id`  int(5) NOT NULL AUTO_INCREMENT ,
`area`  int(5) NOT NULL ,
`destino`  varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`kilo`  int(6) NOT NULL ,
`sobre`  int(6) NOT NULL ,
`minimoKG`  int(6) NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=27

;

-- ----------------------------
-- Records of destinos
-- ----------------------------
BEGIN;
INSERT INTO `destinos` VALUES ('1', '1', 'ITAGUI', '176', '2750', '7390'), ('2', '1', 'ENVIGADO', '176', '3750', '7390'), ('3', '1', 'SABANETA', '176', '2570', '7390'), ('4', '1', 'BELLO', '176', '2750', '7390'), ('5', '1', 'MEDELLIN', '176', '2750', '7390'), ('6', '1', 'SAN - ANTONIO-DE-PRADO', '191', '2750', '7390'), ('7', '1', 'LA ESTRELLA', '191', '2750', '7390'), ('8', '1', 'CALDAS', '191', '2750', '7390'), ('9', '1', 'COOPACABANA', '191', '2750', '7390'), ('10', '1', 'GIRARDOTA', '191', '2750', '7390'), ('11', '1', 'MUTATA', '441', '4998', '13302'), ('12', '1', 'CHIGORODO', '441', '4998', '13302'), ('13', '1', 'CAREPA', '441', '4998', '13302'), ('14', '1', 'ZUNGO', '441', '4998', '13302'), ('15', '1', 'APARTADO', '441', '4998', '13302'), ('16', '1', 'CURRULAO', '441', '4998', '13302'), ('17', '1', 'EL TRES', '441', '4998', '13302'), ('18', '1', 'TURBO', '441', '4998', '13302'), ('19', '1', 'NECOCLI', '675', '9417', '20188'), ('20', '1', 'TADO', '523', '7601', '15731'), ('21', '1', 'ANIMAS', '523', '7601', '15731'), ('22', '1', 'ITSMINA', '523', '7601', '15701'), ('23', '1', 'CONDOTO', '523', '7601', '15731'), ('24', '1', 'CERTEGUI', '523', '7601', '15731'), ('25', '1', 'YUTO', '523', '7601', '15731'), ('26', '1', 'QUIBDO', '523', '7601', '15731');
COMMIT;

-- ----------------------------
-- Table structure for `tipo_envio`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_envio`;
CREATE TABLE `tipo_envio` (
`id`  int(5) NOT NULL AUTO_INCREMENT ,
`descripcion`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`identificador`  char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`),
UNIQUE INDEX `unk_identificado` (`identificador`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of tipo_envio
-- ----------------------------
BEGIN;
INSERT INTO `tipo_envio` VALUES ('1', 'Correo', 'C'), ('2', 'Carga', 'P');
COMMIT;

-- ----------------------------
-- Auto increment value for `areas`
-- ----------------------------
ALTER TABLE `areas` AUTO_INCREMENT=3;

-- ----------------------------
-- Auto increment value for `destinos`
-- ----------------------------
ALTER TABLE `destinos` AUTO_INCREMENT=27;

-- ----------------------------
-- Auto increment value for `tipo_envio`
-- ----------------------------
ALTER TABLE `tipo_envio` AUTO_INCREMENT=3;
