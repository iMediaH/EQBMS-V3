-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 06 日 06:25
-- 服务器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `eqbms`
--

-- --------------------------------------------------------

--
-- 表的结构 `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `AdminUser` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '管理员用户名',
  `AdminPassword` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`AdminUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='管理员表';

--
-- 转存表中的数据 `admininfo`
--

INSERT INTO `admininfo` (`AdminUser`, `AdminPassword`) VALUES
('123', '123');

-- --------------------------------------------------------

--
-- 表的结构 `courseinfo`
--

CREATE TABLE IF NOT EXISTS `courseinfo` (
  `CourseId` int(11) NOT NULL AUTO_INCREMENT COMMENT '课程id',
  `CourseName` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '课程名',
  `CouerseInfo` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '课程简介',
  `TeacherId` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '教师id',
  PRIMARY KEY (`CourseId`),
  KEY `TeacherId` (`TeacherId`),
  KEY `TeacherId_2` (`TeacherId`),
  KEY `CourseId` (`CourseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='课程表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `courseinfo`
--

INSERT INTO `courseinfo` (`CourseId`, `CourseName`, `CouerseInfo`, `TeacherId`) VALUES
(1, 'Web程序设计', 'Web程序设计xxx', '20130001');

-- --------------------------------------------------------

--
-- 表的结构 `judgment`
--

CREATE TABLE IF NOT EXISTS `judgment` (
  `QuestionId` int(11) NOT NULL AUTO_INCREMENT COMMENT '题目id',
  `UnitId` int(11) NOT NULL COMMENT '知识单元id',
  `Nanyidu` int(11) NOT NULL COMMENT '难易度',
  `TypeId` int(11) NOT NULL COMMENT '题型名id',
  `Question` text COLLATE utf8_bin NOT NULL COMMENT '题目',
  `Answer` text COLLATE utf8_bin NOT NULL COMMENT '答案',
  `Image` text COLLATE utf8_bin COMMENT '图片附件',
  PRIMARY KEY (`QuestionId`),
  KEY `UnitId` (`UnitId`),
  KEY `Nanyidu` (`Nanyidu`),
  KEY `TypeId` (`TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='判断题模板题型表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `judgment`
--

INSERT INTO `judgment` (`QuestionId`, `UnitId`, `Nanyidu`, `TypeId`, `Question`, `Answer`, `Image`) VALUES
(1, 6, 2, 9, '你是傻瓜嘛', '是', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `multiplechoice`
--

CREATE TABLE IF NOT EXISTS `multiplechoice` (
  `QuestionId` int(11) NOT NULL AUTO_INCREMENT COMMENT '题目id',
  `UnitId` int(11) NOT NULL COMMENT '知识单元id',
  `Nanyidu` int(11) NOT NULL COMMENT '难易度',
  `TypeId` int(11) NOT NULL COMMENT '题型名',
  `Question` text COLLATE utf8_bin NOT NULL COMMENT '题目',
  `Answer` text COLLATE utf8_bin NOT NULL COMMENT '答案',
  `Image` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '图片附件',
  `Option1` text COLLATE utf8_bin NOT NULL COMMENT '选项',
  PRIMARY KEY (`QuestionId`),
  KEY `UnitId` (`UnitId`),
  KEY `Nanyidu` (`Nanyidu`),
  KEY `TypeName` (`TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='多选题模板题型表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `multiplechoice`
--

INSERT INTO `multiplechoice` (`QuestionId`, `UnitId`, `Nanyidu`, `TypeId`, `Question`, `Answer`, `Image`, `Option1`) VALUES
(2, 5, 2, 7, 'WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好WEB大法好', 'WEB大法好', NULL, 'WEB大法好');

-- --------------------------------------------------------

--
-- 表的结构 `nanyiduinfo`
--

CREATE TABLE IF NOT EXISTS `nanyiduinfo` (
  `NanyiduId` int(11) NOT NULL AUTO_INCREMENT COMMENT '难易度id',
  `NanyiduName` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '难易度类型名',
  PRIMARY KEY (`NanyiduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='难易度表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `nanyiduinfo`
--

INSERT INTO `nanyiduinfo` (`NanyiduId`, `NanyiduName`) VALUES
(1, '简单'),
(2, '一般'),
(3, '困难');

-- --------------------------------------------------------

--
-- 表的结构 `shortanswer`
--

CREATE TABLE IF NOT EXISTS `shortanswer` (
  `QuestionId` int(11) NOT NULL AUTO_INCREMENT COMMENT '题目id',
  `UnitId` int(11) NOT NULL COMMENT '题目id',
  `Nanyidu` int(11) NOT NULL COMMENT '难易度',
  `TypeId` int(11) NOT NULL COMMENT '题型名id',
  `Question` text COLLATE utf8_bin NOT NULL COMMENT '题目',
  `Answer` text COLLATE utf8_bin NOT NULL COMMENT '答案',
  `Image` text COLLATE utf8_bin COMMENT '图片附件',
  PRIMARY KEY (`QuestionId`),
  UNIQUE KEY `QuestionId` (`QuestionId`),
  KEY `UnitId` (`UnitId`),
  KEY `Nanyidu` (`Nanyidu`),
  KEY `TypeId` (`TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='简答题模板题型表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `shortanswer`
--

INSERT INTO `shortanswer` (`QuestionId`, `UnitId`, `Nanyidu`, `TypeId`, `Question`, `Answer`, `Image`) VALUES
(1, 1, 1, 8, '惺惺惜惺惺惺惺惜惺惺惺惺惜惺惺惺惺惜惺惺想想当年', 'dwdqq', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `singlechoice`
--

CREATE TABLE IF NOT EXISTS `singlechoice` (
  `QuestionId` int(11) NOT NULL AUTO_INCREMENT COMMENT '题目id',
  `UnitId` int(11) NOT NULL COMMENT '知识单元id',
  `Nanyidu` int(11) NOT NULL COMMENT '难易度',
  `TypeId` int(11) NOT NULL COMMENT '题型名',
  `Question` text COLLATE utf8_bin NOT NULL COMMENT '题目',
  `Answer` text COLLATE utf8_bin NOT NULL COMMENT '答案',
  `Image` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '图片附件',
  `Option1` text COLLATE utf8_bin NOT NULL COMMENT '选项',
  `Option2` text COLLATE utf8_bin NOT NULL,
  `Option3` text COLLATE utf8_bin NOT NULL,
  `Option4` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`QuestionId`),
  UNIQUE KEY `QuestionId` (`QuestionId`),
  KEY `UnitId` (`UnitId`),
  KEY `Nanyidu` (`Nanyidu`),
  KEY `TypeId` (`TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='单选题模板题型表' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `singlechoice`
--

INSERT INTO `singlechoice` (`QuestionId`, `UnitId`, `Nanyidu`, `TypeId`, `Question`, `Answer`, `Image`, `Option1`, `Option2`, `Option3`, `Option4`) VALUES
(2, 1, 1, 1, '通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过通过', 'A', NULL, 'sdd', 'SSS', 'QQ', 'SQW'),
(3, 5, 2, 1, '好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好', 'B', NULL, 'A:csscsscss\r\nB:csscss\r\nC:csscssc\r\nD:AAA', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `teacherinfo`
--

CREATE TABLE IF NOT EXISTS `teacherinfo` (
  `TeacherNum` int(11) NOT NULL AUTO_INCREMENT COMMENT '教师序号',
  `TeacherId` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '教师ID',
  `TeacherPassword` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '123456' COMMENT '密码',
  `TeacherName` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '姓名',
  `TeacherTitle` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '职称',
  `TeacherPhone` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '联系电话',
  `TeacherEmail` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT 'email',
  `TeacherImage` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '../images/uesr-img.jpg' COMMENT '教师头像',
  PRIMARY KEY (`TeacherNum`),
  UNIQUE KEY `TeacherID` (`TeacherId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='教师表' AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `teacherinfo`
--

INSERT INTO `teacherinfo` (`TeacherNum`, `TeacherId`, `TeacherPassword`, `TeacherName`, `TeacherTitle`, `TeacherPhone`, `TeacherEmail`, `TeacherImage`) VALUES
(1, '20130001', '123456', '张佳', '', '', '', '../images/uesr-img.jpg'),
(4, '20130002', '123456', '徐舒畅', '讲师', '11111111111', NULL, '../images/uesr-img.jpg'),
(8, '11111111', '123456', 'nana', '', NULL, NULL, '../images/uesr-img.jpg'),
(14, '1234', '123456', '蛋蛋2', '教授', '', '', '../images/uesr-img.jpg'),
(15, 'hei', '123456', '笨笨', '助教', '', '', '../images/uesr-img.jpg'),
(18, '8723', '123456', '小王12', '教授', '', '', '../images/uesr-img.jpg'),
(24, '102391', '123456', 'nihaoma', '助教', '', '', '../images/uesr-img.jpg'),
(25, '2013211308', '123456', 'QQ', '助教', '18857119135', '', '../images/uesr-img.jpg'),
(26, '20140002', '123456', 'aza', '教授', '', '', '../images/uesr-img.jpg'),
(27, '1231a', '123456', '123', '教授', '', '', '../images/uesr-img.jpg'),
(29, 'sddq', '123456', '123', '教授', '', '', '../images/uesr-img.jpg'),
(30, '2edda', '123456', 'ww', '教授', '', '', '../images/uesr-img.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `typenamemenu1`
--

CREATE TABLE IF NOT EXISTS `typenamemenu1` (
  `TypeMenuId` int(11) NOT NULL AUTO_INCREMENT,
  `TypeMenu` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '给定题型统称名',
  `TypeLevel` int(11) NOT NULL DEFAULT '1' COMMENT '菜单级别：1',
  `TableName` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '对应表名',
  PRIMARY KEY (`TypeMenuId`),
  UNIQUE KEY `typename_2` (`TypeMenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='题型一级菜单，给定表名' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `typenamemenu1`
--

INSERT INTO `typenamemenu1` (`TypeMenuId`, `TypeMenu`, `TypeLevel`, `TableName`) VALUES
(1, '单选题', 1, 'singlechoice'),
(2, '多选题', 1, 'multiplechoice'),
(3, '简答题', 1, 'shortanswer'),
(4, '判断题', 1, 'judgment');

-- --------------------------------------------------------

--
-- 表的结构 `typenamemenu2`
--

CREATE TABLE IF NOT EXISTS `typenamemenu2` (
  `TypeId` int(11) NOT NULL AUTO_INCREMENT COMMENT '题型子菜单ID',
  `TypeLevel` int(11) NOT NULL DEFAULT '2' COMMENT '题型子菜单级别：2',
  `TypeName` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '题型名称',
  `TypeMenuId` int(11) NOT NULL COMMENT '父菜单id',
  PRIMARY KEY (`TypeId`),
  KEY `typemenu1id` (`TypeMenuId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='题型二级菜单，题型名' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `typenamemenu2`
--

INSERT INTO `typenamemenu2` (`TypeId`, `TypeLevel`, `TypeName`, `TypeMenuId`) VALUES
(1, 2, '单项选择题', 1),
(2, 2, '程序单选题', 1),
(5, 2, '单选题', 1),
(6, 2, '单选题11', 1),
(7, 2, '多选题', 2),
(8, 2, '程序设计题', 3),
(9, 2, '是非题', 4);

-- --------------------------------------------------------

--
-- 表的结构 `unitinfo`
--

CREATE TABLE IF NOT EXISTS `unitinfo` (
  `UnitId` int(11) NOT NULL AUTO_INCREMENT COMMENT '单元id',
  `UnitName` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '单元名',
  `UnitInfo` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '单元简介',
  `CourseId` int(11) NOT NULL COMMENT '课程id',
  PRIMARY KEY (`UnitId`),
  KEY `CourseId_2` (`CourseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='知识单元表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `unitinfo`
--

INSERT INTO `unitinfo` (`UnitId`, `UnitName`, `UnitInfo`, `CourseId`) VALUES
(1, 'Html', 'Htmlxxxx', 1),
(5, 'css', 'cssss', 1),
(6, 'php', 'phpxx', 1);

--
-- 限制导出的表
--

--
-- 限制表 `courseinfo`
--
ALTER TABLE `courseinfo`
  ADD CONSTRAINT `courseinfo_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teacherinfo` (`TeacherID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `judgment`
--
ALTER TABLE `judgment`
  ADD CONSTRAINT `judgment_ibfk_3` FOREIGN KEY (`TypeId`) REFERENCES `typenamemenu2` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `judgment_ibfk_1` FOREIGN KEY (`UnitId`) REFERENCES `unitinfo` (`UnitId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `judgment_ibfk_2` FOREIGN KEY (`Nanyidu`) REFERENCES `nanyiduinfo` (`NanyiduId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `multiplechoice`
--
ALTER TABLE `multiplechoice`
  ADD CONSTRAINT `multiplechoice_ibfk_3` FOREIGN KEY (`TypeId`) REFERENCES `typenamemenu2` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `multiplechoice_ibfk_1` FOREIGN KEY (`UnitId`) REFERENCES `unitinfo` (`UnitId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `multiplechoice_ibfk_2` FOREIGN KEY (`Nanyidu`) REFERENCES `nanyiduinfo` (`NanyiduId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `shortanswer`
--
ALTER TABLE `shortanswer`
  ADD CONSTRAINT `shortanswer_ibfk_3` FOREIGN KEY (`TypeId`) REFERENCES `typenamemenu2` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shortanswer_ibfk_1` FOREIGN KEY (`UnitId`) REFERENCES `unitinfo` (`UnitId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shortanswer_ibfk_2` FOREIGN KEY (`Nanyidu`) REFERENCES `nanyiduinfo` (`NanyiduId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `singlechoice`
--
ALTER TABLE `singlechoice`
  ADD CONSTRAINT `singlechoice_ibfk_3` FOREIGN KEY (`TypeId`) REFERENCES `typenamemenu2` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `singlechoice_ibfk_1` FOREIGN KEY (`UnitId`) REFERENCES `unitinfo` (`UnitId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `singlechoice_ibfk_2` FOREIGN KEY (`Nanyidu`) REFERENCES `nanyiduinfo` (`NanyiduId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `typenamemenu2`
--
ALTER TABLE `typenamemenu2`
  ADD CONSTRAINT `typenamemenu2_ibfk_1` FOREIGN KEY (`TypeMenuId`) REFERENCES `typenamemenu1` (`TypeMenuId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `unitinfo`
--
ALTER TABLE `unitinfo`
  ADD CONSTRAINT `unitinfo_ibfk_1` FOREIGN KEY (`CourseId`) REFERENCES `courseinfo` (`CourseId`) ON DELETE CASCADE ON UPDATE CASCADE;
