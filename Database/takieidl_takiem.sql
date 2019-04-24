-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2019 at 11:01 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takieidl_takiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(40) NOT NULL,
  `class_subject` varchar(250) NOT NULL,
  `class_teacher_id` int(11) NOT NULL,
  `class_period` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_subject`, `class_teacher_id`, `class_period`) VALUES
(1, 'أول أ', 'رياضيات', 13, 'التانية'),
(2, 'أول أ', 'رياضيات', 13, 'التانية'),
(3, 'أول ب', 'رياضيات', 73, 'التانية'),
(4, 'gfsd', 'dsfd', 13, 'fesdf'),
(5, 'أول أ', 'رياضيات', 13, 'التانية'),
(6, 'أول أ', 'رياضيات', 68, 'التانية'),
(7, 'أول أ', 'رياضيات', 68, 'التانية');

-- --------------------------------------------------------

--
-- Table structure for table `classes-table`
--

CREATE TABLE `classes-table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Hours` int(40) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  `SubjectName` varchar(40) NOT NULL,
  `Class` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `c_plan`
--

CREATE TABLE `c_plan` (
  `c_plan_id` int(20) NOT NULL,
  `plan_id` int(20) NOT NULL,
  `subject_name` varchar(40) NOT NULL,
  `class_name` varchar(40) NOT NULL,
  `day_name` varchar(20) NOT NULL,
  `period_name` varchar(20) NOT NULL,
  `section_name` varchar(20) NOT NULL,
  `homework_type` int(11) NOT NULL,
  `homework_text` varchar(250) DEFAULT NULL,
  `homework_url` varchar(250) NOT NULL,
  `teacher_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `c_plan`
--

INSERT INTO `c_plan` (`c_plan_id`, `plan_id`, `subject_name`, `class_name`, `day_name`, `period_name`, `section_name`, `homework_type`, `homework_text`, `homework_url`, `teacher_id`) VALUES
(1, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 1, '0', '0', 55),
(2, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 1, NULL, '0', 55),
(3, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 1, NULL, '', 55),
(4, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 1, NULL, '', 55),
(5, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 1, 'واجب', '', 55),
(6, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 2, NULL, 'http://localhost/takiem/services/teacher/planclasses', 55),
(7, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 2, NULL, 'http://localhost/takiem/services/teacher/planclasses', 55),
(8, 1, 'رياضيات', 'أول ب', 'الأحد', 'الثانية', '', 1, 'واجب', '', 55);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `evaluation_id` int(11) NOT NULL,
  `evaluation_type` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`evaluation_id`, `evaluation_type`) VALUES
(1, '10 - 1'),
(2, 'انجز / لم ينجز'),
(3, 'اجتاز / لم يجتاز'),
(4, 'حاضر / غائب');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `e_id` int(20) NOT NULL,
  `e_type` varchar(20) NOT NULL,
  `e_txt_one` varchar(20) NOT NULL,
  `e_txt_two` varchar(20) NOT NULL,
  `e_txt_three` varchar(20) DEFAULT NULL,
  `e_txt_four` varchar(20) DEFAULT NULL,
  `teacher_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`e_id`, `e_type`, `e_txt_one`, `e_txt_two`, `e_txt_three`, `e_txt_four`, `teacher_id`) VALUES
(15, '2', 'جضر', 'غياب', '', '', 68),
(16, '2', 'ض', 'ج', 'ج ج', 'م', 68),
(18, '1', '1', '10', NULL, NULL, 68);

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE `father` (
  `parent_id` int(11) NOT NULL,
  `parent_name` varchar(250) NOT NULL,
  `parent_email` varchar(250) NOT NULL,
  `parent_password` varchar(250) NOT NULL,
  `parent_phone` varchar(50) NOT NULL,
  `parent_status` varchar(20) NOT NULL,
  `parent_code` varchar(20) NOT NULL,
  `parent_no_msg` int(2) NOT NULL,
  `parent_token` varchar(250) NOT NULL,
  `parent_token_web` varchar(250) NOT NULL,
  `parent_enterdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `father`
--

INSERT INTO `father` (`parent_id`, `parent_name`, `parent_email`, `parent_password`, `parent_phone`, `parent_status`, `parent_code`, `parent_no_msg`, `parent_token`, `parent_token_web`, `parent_enterdate`) VALUES
(1, 'Ahmed', 'ahmed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8678676876', '', '', 0, '', '', '2018-10-16 20:58:22'),
(2, 'عماد السيد حمزة', 'emad.elsayed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01012380', '', '', 0, 'kxhxy4YAtE:APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', 'd25630c2a0a7023d26f6451dc510ca25', '2018-10-16 21:21:06'),
(5, 'سارة ابراهيم ', 'sara.khater@gmail.net', '827ccb0eea8a706c4c34a16891f84e7b', '01012380709', 'active', '4529', 0, 'asdsdasdasd', '624eb1ffc343f6311974852f04329728', '2018-10-23 19:38:40'),
(13, 'Sara', 'sara.khater@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01063779301', 'active', '3846', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '698f94bb4eb1d15ec4cfb211cfd8fb42', '2018-11-09 13:01:56'),
(15, 'Sara', 'sara.kter@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01063879301', 'active', '9219', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', 'd650c84c0336e9b73813112edcf2886e', '2018-11-09 22:51:12'),
(16, 'moaaz Fathy', 'm.elneshawy@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '01099885903', 'active', '1194', 0, 'cTxIrfgi8g4:APA91bF3Ck2mhiruNiUiPFhZ3arv1IHMRkW2T74j_tO596zZRiY_Gxa-W3BCuM9DoAax64SqCIyAIvlopJx-PqVHvurX0Y7M8zoCzWL5kc2V6z88dChvljv7slIX4aKfcEYAdWAKTLnY', '6007ea722b36475fde0b563f7409bb9a', '2018-11-09 23:24:47'),
(34, 'ffsdgf', 'sfgdf@dsv5ffscd.dffd', '71d62ceb873b45ee9ab53f3e9fa52412', '42655454523', 'deactive', '1108', 1, '1549160468198', '88c81cc1a260cd15e53fa67bbd1feec0', '2019-02-09 04:38:41'),
(35, 'hdggdfgh', 'xbcvbg@fxfbhxfh.fhxfh', 'e10adc3949ba59abbe56e057f20f883e', '4346543645', 'deactive', '5987', 1, '1549687639988', 'b6a5e584a30e11bbf961f1ece2126511', '2019-02-09 04:47:22'),
(36, 'hdggdfghgsfd', 'xbcvbg@fgsdf.fhxfh', 'e10adc3949ba59abbe56e057f20f883e', '563456356', 'deactive', '4172', 1, '1549687725906', 'ca4d42ebfa45a11e85c9c01b8728c215', '2019-02-09 04:48:48'),
(37, 'ffsdgf', 'sfgdf@dsv5ffscd.dffdffd', '71d62ceb873b45ee9ab53f3e9fa52412', '4265355454523', 'active', '9649', 0, '1549160468198f', 'c26959ff1e9bf7641e6df1b114e52d2c', '2019-02-09 04:49:29'),
(38, 'fgdgfndgf', 'fssbfg@fdbf.fbgf', 'e10adc3949ba59abbe56e057f20f883e', '5246543645', 'deactive', '6222', 1, '1549687824638', '4aa659273fb8c0d444b50b050a202ccc', '2019-02-09 04:50:28'),
(39, 'adel', 'adel@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '01091460759', 'active', '5701', 0, '1552405073350', 'cba6c5e2b3d0f33a145e280b5a323345', '2019-02-09 04:59:01'),
(40, 'ffsdgfg', 'sfgdf@dsv5ffscd.dffdffdg', 'cc3f49d6d00aca039831dff368adb0c1', '42653554545239', 'active', '9212', 0, '1549160468198f', '79ce43ceddf030c5a82e85d500c2523f', '2019-02-09 05:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `government_id` int(11) NOT NULL,
  `government_name` varchar(50) NOT NULL,
  `government_parent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`government_id`, `government_name`, `government_parent`) VALUES
(1, 'الرياض', 0),
(2, 'مكة المكرمة', 0),
(3, 'المدينة المنورة', 0),
(4, 'القصيم', 0),
(5, 'المدينة الشرقية', 0),
(6, 'منطقة عسير', 0),
(7, 'منطقة تبوك', 0),
(8, 'منطقة حائل', 0),
(9, 'منطقة الحدود الشمالية', 0),
(10, 'منطقة جازان', 0),
(11, 'منطقة نجران', 0),
(12, 'منطقة الباحة', 0),
(13, 'منطقة الجوف', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_student`
--

CREATE TABLE `group_student` (
  `plan_student_group_id` int(11) NOT NULL,
  `plan_group_idd` int(11) NOT NULL,
  `plan_student_id` int(20) NOT NULL,
  `plan_type` int(10) NOT NULL,
  `plan_group_code` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_student`
--

INSERT INTO `group_student` (`plan_student_group_id`, `plan_group_idd`, `plan_student_id`, `plan_type`, `plan_group_code`) VALUES
(16, 4, 9, 2, '36372'),
(17, 7, 10, 2, '44441'),
(18, 4, 6, 2, ''),
(19, 4, 9, 2, ''),
(20, 4, 10, 2, ''),
(21, 4, 10, 2, ''),
(22, 4, 11, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `group_student_c`
--

CREATE TABLE `group_student_c` (
  `plan_student_group_id` int(11) NOT NULL,
  `plan_group_idd` int(11) NOT NULL,
  `plan_student_id` int(20) NOT NULL,
  `plan_type` int(10) NOT NULL,
  `plan_group_code` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_student_c`
--

INSERT INTO `group_student_c` (`plan_student_group_id`, `plan_group_idd`, `plan_student_id`, `plan_type`, `plan_group_code`) VALUES
(16, 4, 9, 2, '86762'),
(17, 7, 10, 2, '86762');

-- --------------------------------------------------------

--
-- Table structure for table `group_student_old`
--

CREATE TABLE `group_student_old` (
  `group_student_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_student_name` varchar(250) NOT NULL,
  `group_student_code` varchar(50) NOT NULL,
  `group_link` varchar(250) NOT NULL,
  `group_type` enum('manual','code','excel','group') NOT NULL DEFAULT 'manual',
  `group_code` varchar(20) NOT NULL,
  `group_student_deleteflag` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_student_old`
--

INSERT INTO `group_student_old` (`group_student_id`, `group_id`, `group_student_name`, `group_student_code`, `group_link`, `group_type`, `group_code`, `group_student_deleteflag`) VALUES
(6, 1, 'بدر بن محمد بن عبد اللهالزهرانى', '', '', 'manual', '50073', 0),
(5, 1, 'حسن بن احمد بن حسن', '', '', 'manual', '50073', 0),
(7, 1, 'سعود عبد العزيز يحيى حسن', '', '', 'manual', '50073', 0),
(8, 1, 'سعود عبد العزيز يحيى حسن', '', '', 'manual', '50073', 0),
(9, 1, 'نواف منصور نواف الحربى ', '', '', 'manual', '50073', 0),
(10, 1, 'مهنى مهيد مهناء السبيعى', '', '', 'manual', '50073', 0),
(11, 1, 'سلطان متعب مهناء السبيعى', '', '', 'manual', '50073', 1),
(12, 12, 'سارة ابراهيم ', '', '', 'manual', '19038', 0),
(13, 12, '', '', 'excel sheet', 'excel', '19038', 0),
(14, 12, '', '54545', '', 'code', '19038', 0),
(15, 12, '', '', 'excel sheet', 'excel', '19038', 0),
(16, 12, '', '', 'excel sheet', 'excel', '', 0),
(17, 12, '', '54545', '', 'code', '', 0),
(18, 3, 'احمد محمد محمود عدلى', '', '', 'manual', '55006', 0),
(19, 3, '', '', 'http://localhost/takiem/index.php/services/teacher/group', 'excel', '55006', 0),
(20, 3, '', '222222', '', 'code', '55006', 0),
(21, 3, '', '222222', '', 'code', '', 0),
(22, 6, '', '1', '', 'code', '', 0),
(23, 6, '', '1', '', 'code', '', 0),
(24, 6, '', '1', '', 'code', '', 0),
(25, 6, '', '1', '', 'code', '', 0),
(26, 9, '', '1', '', 'code', '', 0),
(27, 8, '', '1', '', 'code', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_takiem`
--

CREATE TABLE `group_takiem` (
  `plan_group_id` int(11) NOT NULL,
  `plan_school_id` varchar(20) NOT NULL,
  `plan_school_name` varchar(250) NOT NULL,
  `plan_class` varchar(40) NOT NULL,
  `plan_classroom` varchar(20) NOT NULL,
  `plan_subject` varchar(40) NOT NULL,
  `plan_teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_takiem`
--

INSERT INTO `group_takiem` (`plan_group_id`, `plan_school_id`, `plan_school_name`, `plan_class`, `plan_classroom`, `plan_subject`, `plan_teacher_id`) VALUES
(4, '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية', 'أول ', 'أ', 'رياضيات', 68),
(5, '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية', 'أول', 'أ', 'رياضيات', 68),
(6, '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية', 'أول', 'أ', 'رياضيات', 68),
(7, '24', 'دار البراء الابتدائية الأهلية للبنين', 'أول', 'أ', 'لغة عربية ', 68),
(8, '23', 'ابتدائى - ابتدائية أجيال الرموك الأهلية الابتدائية', 'أول ', 'أ', 'علوم', 68);

-- --------------------------------------------------------

--
-- Table structure for table `group_takiem_old`
--

CREATE TABLE `group_takiem_old` (
  `group_id` int(11) NOT NULL,
  `group_school_id` varchar(20) NOT NULL,
  `group_school_name` varchar(250) NOT NULL,
  `group_stage` varchar(40) NOT NULL,
  `group_class` varchar(20) NOT NULL,
  `group_subject` varchar(40) NOT NULL,
  `group_teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_takiem_old`
--

INSERT INTO `group_takiem_old` (`group_id`, `group_school_id`, `group_school_name`, `group_stage`, `group_class`, `group_subject`, `group_teacher_id`) VALUES
(1, '2', 'دار البراء الابتدائية الأهلية للبنين', 'أول', 'أ', 'رياضيات', 73),
(2, '2', 'دار البراء الابتدائية الأهلية للبنين', 'أول', 'أ', 'علوم', 73),
(3, '', 'ابتدائية أجيال اليرموك الأهلية', 'أول', 'أ', 'رياضيات', 13),
(4, '', 'ابتدائية أجيال اليرموك الأهلية', 'أول', 'أ', 'رياضيات', 13),
(5, '', 'ابتدائية أجيال اليرموك الأهلية', 'أول', 'أ', 'رياضيات ', 25),
(6, '', 'ابتدائية أجيال اليرموك الأهلية', 'ثانى ', 'أ', 'رياضيات', 68),
(7, '', 'ابتدائية أجيال اليرموك الأهلية', 'خامس', 'ج', 'علوم', 68),
(8, '', 'ابتدائية أجيال اليرموك الأهلية', 'سادس', 'ب', 'رياضيات', 68),
(9, '', 'ابتدائية أجيال اليرموك الأهلية', 'أول ', 'د', 'علوم', 68);

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `holiday_id` int(20) NOT NULL,
  `holiday_name` varchar(40) NOT NULL,
  `holiday_startdate` varchar(20) NOT NULL,
  `holiday_endate` varchar(20) NOT NULL,
  `teacher_id` int(20) NOT NULL,
  `holiday_deletefag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`holiday_id`, `holiday_name`, `holiday_startdate`, `holiday_endate`, `teacher_id`, `holiday_deletefag`) VALUES
(2, 'اجازة 111', '16/07/2018', '20/07/2018', 55, 1),
(3, 'اجازة 111', '16/07/2018', '20/07/2018', 55, 1),
(4, 'اجازة 1', '16/07/2018', '20/07/2018', 55, 0),
(5, 'اجازة 4', '16/07/2018', '20/07/2018', 55, 0),
(7, 'اجازه عيد الفطر', '16/07/2018', '20/07/2018', 68, 0),
(8, 'اجازه ', '16/07/2018', '20/07/2018', 68, 0),
(9, 'اجازه ', '16/07/2018', '20/07/2018', 68, 0),
(10, 'اجازه ', '16/17/2018', '20/07/2018', 68, 0),
(11, 'البحث عن المشاركات', '13/02/2019', '28/02/2019', 68, 1),
(12, 'اجازه ', '21/02/2019', '27/02/2019', 68, 0),
(14, ' thanks ', '27/02/2019', '28/02/2019', 68, 0),
(15, '25 jan', '11/02/2019', '12/02/2019', 78, 0);

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `homework_id` int(20) NOT NULL,
  `homework_week` varchar(40) NOT NULL,
  `homework_week_id` int(20) NOT NULL,
  `homework_period` varchar(20) NOT NULL,
  `homework_subject` varchar(40) NOT NULL,
  `homework_type` varchar(20) NOT NULL,
  `homework_details` varchar(40) NOT NULL,
  `homework_day` varchar(40) NOT NULL,
  `homework_day_id` int(20) NOT NULL,
  `homework_note` varchar(250) NOT NULL,
  `homework_student_id` int(20) NOT NULL,
  `homework_student_name` varchar(250) NOT NULL,
  `homework_more_details` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`homework_id`, `homework_week`, `homework_week_id`, `homework_period`, `homework_subject`, `homework_type`, `homework_details`, `homework_day`, `homework_day_id`, `homework_note`, `homework_student_id`, `homework_student_name`, `homework_more_details`) VALUES
(1, 'الأسبوع الأول', 1, 'الاولى ', 'رياضيات', '1', 'كتاب الطالب', 'الاحد', 1, 'لم يقم بعمل الواجب', 1, 'زياد رجب', 'لم يتم تحديد صفحات'),
(2, 'الأسبوع الأول', 1, 'الثالثة', 'علوم ', '2', 'كتاب نشاط ', 'الأحد ', 1, '', 1, 'زياد رجب', 'صفحة رقم 22 الفقرةالثانية و الثالثة'),
(3, 'الأسبوع الأول', 1, 'الرابعة', 'لغة عربية', '3', 'ورقة عمل', 'الاحد', 1, '', 1, 'زياد رجب', 'لم يتم فيها تحديد صفحات'),
(4, 'الأسبوع الأول', 1, 'الاولى ', 'رياضيات', '1', 'كتاب الطالب', 'الاحد', 1, 'لم يقم بعمل الواجب', 20, 'Ahmed', 'لم يتم تحديد صفحات'),
(5, 'الأسبوع الأول', 1, 'الثالثة', 'علوم ', '2', 'كتاب نشاط ', 'الأحد ', 1, '', 20, 'Ahmed', 'صفحة رقم 22 الفقرةالثانية و الثالثة'),
(6, 'الأسبوع الأول', 1, 'الرابعة', 'لغة عربية', '3', 'ورقة عمل', 'الاحد', 1, '', 20, 'Ahmed', 'لم يتم فيها تحديد صفحات'),
(7, 'الأسبوع الثانى', 1, 'الاولى ', 'رياضيات', '1', 'كتاب الطالب', 'الاحد', 1, 'لم يقم بعمل الواجب', 20, 'Ahmed', 'لم يتم تحديد صفحات'),
(8, 'الأسبوع الثالث', 1, 'الاولى ', 'رياضيات', '1', 'كتاب الطالب', 'الاحد', 1, 'لم يقم بعمل الواجب', 20, 'Ahmed', 'لم يتم تحديد صفحات'),
(9, 'الأسبوع الرابع', 1, 'الاولى ', 'رياضيات', '1', 'كتاب الطالب', 'الاحد', 1, 'لم يقم بعمل الواجب', 20, 'Ahmed', 'لم يتم تحديد صفحات');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `main_tab`
--

CREATE TABLE `main_tab` (
  `main_tab_id` int(11) NOT NULL,
  `main_group_id` int(11) NOT NULL,
  `main_tab_title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `tab_sub_title_first` varchar(250) CHARACTER SET utf8 NOT NULL,
  `evaluation_id` varchar(250) NOT NULL,
  `main_teacher_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_tab`
--

INSERT INTO `main_tab` (`main_tab_id`, `main_group_id`, `main_tab_title`, `tab_sub_title_first`, `evaluation_id`, `main_teacher_id`) VALUES
(1, 4, 'كتاب النشاط ', '', '', '68'),
(2, 7, 'كتاب الدعوي', 'الحضور', '', '68'),
(3, 7, 'البحث المتقدم', 'الصورة الرمزية', '', '68'),
(4, 7, 'البحث المتقدم', 'الصورة للتوضيح', '', '68'),
(5, 7, 'الكتاب الاول', 'البحث المتقدم', '', '68'),
(6, 7, 'علي', 'حسن', '', '68'),
(7, 4, 'كتاب الرياضيات ', 'الجمع', '', '68'),
(8, 4, 'كتاب طالب', 'تدريبات ', '', '68'),
(9, 4, 'رياضيات', 'الجمع', '', '68'),
(10, 5, 'Roll', 'Back', '', '68'),
(11, 4, 'تيست 1', 'فرعي 1', '', '68'),
(12, 4, 'ت رئيسي', 'ت فرعي 1', '18', '68'),
(13, 7, 'sffdfs', 'sdfsdf', '12', '68'),
(14, 4, 'new', 'sub 1', '15', '68'),
(15, 8, 't 1', 's1', '15', '68'),
(16, 4, 't1 new', 's1 new', '15', '68'),
(17, 4, 'تبويب جديد 1', 'تبويب فرعي 1', '15', '68'),
(18, 11, 'new main tab', 'new  sub tab', '7', '68'),
(19, 5, 'tttttt', 'ssss1', '15', '68'),
(20, 4, 'tttttt', 'ssss1', '15', '68');

-- --------------------------------------------------------

--
-- Table structure for table `main_tab_new`
--

CREATE TABLE `main_tab_new` (
  `main_tab_id` int(11) NOT NULL,
  `main_group_id` int(11) NOT NULL,
  `main_tab_title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `main_teacher_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message_msg` varchar(40) NOT NULL,
  `message_type` int(3) NOT NULL,
  `message_enterdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_recivername` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `new_plans`
--

CREATE TABLE `new_plans` (
  `plan_id` int(20) NOT NULL,
  `plan_week_id` int(20) NOT NULL,
  `plan_week` varchar(40) NOT NULL,
  `plan_period` varchar(40) NOT NULL,
  `plan_day_id` int(20) NOT NULL,
  `plan_day` varchar(40) NOT NULL,
  `plan_subject` varchar(40) NOT NULL,
  `plan_details` varchar(40) NOT NULL,
  `plan_student_id` int(20) NOT NULL,
  `plan_student_name` varchar(40) NOT NULL,
  `period_start_time` varchar(20) NOT NULL,
  `period_end_time` varchar(20) NOT NULL,
  `student_class` varchar(20) NOT NULL,
  `student_classroom` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_plans`
--

INSERT INTO `new_plans` (`plan_id`, `plan_week_id`, `plan_week`, `plan_period`, `plan_day_id`, `plan_day`, `plan_subject`, `plan_details`, `plan_student_id`, `plan_student_name`, `period_start_time`, `period_end_time`, `student_class`, `student_classroom`) VALUES
(1, 1, 'الأسبوع الأول', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', 'خامس', 'ب'),
(2, 1, 'الأسبوع الأول', 'الثانية', 1, 'الأحد', 'علوم', 'البناء الضوئى', 1, 'زياد رجب', '06:45', '07:30', 'خامس', 'ب'),
(3, 1, 'الأسبوع الأول', 'الثالثة', 1, 'الأحد', 'تاريخ', 'بداية الدولةالسعودية', 1, 'زياد رجب', '06:45', '07:30', 'خامس', 'ب'),
(4, 1, 'الأسبوع الأول', 'الرابعة', 1, 'الأحد', 'لغة عربية', 'نصوص', 1, 'زياد رجب', '06:45', '07:30', 'خامس', 'ب'),
(5, 1, 'الأسبوع الأول', 'الخامسة', 1, 'الأحد', 'قران كريم', 'سورة الشرح', 1, 'زياد رجب', '06:45', '07:30', 'خامس', 'ب'),
(6, 2, 'الأسبوع الثانى', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', '', ''),
(7, 3, 'الأسبوع الثالث', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', '', ''),
(8, 4, 'الأسبوع الرابع', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', '', ''),
(9, 5, 'الأسبوع الخامس', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', '', ''),
(10, 6, 'الأسبوع السادس', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', '', ''),
(11, 7, 'الأسبوع السابع', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 1, 'زياد رجب', '06:45', '07:30', '', ''),
(12, 1, 'الأسبوع الأول', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', 'خامس', 'ب'),
(13, 1, 'الأسبوع الأول', 'الرابعة', 1, 'الأحد', 'لغة عربية', 'نصوص', 20, 'Ahmed', '06:45', '07:30', 'خامس', 'ب'),
(14, 1, 'الأسبوع الأول', 'الثانية', 1, 'الأحد', 'علوم', 'البناء الضوئى', 20, 'Ahmed', '06:45', '07:30', 'خامس', 'ب'),
(15, 1, 'الأسبوع الأول', 'الثالثة', 1, 'الأحد', 'تاريخ', 'بداية الدولة السعودية', 20, 'Ahmed', '06:45', '07:30', 'خامس', 'ب'),
(16, 2, 'الأسبوع الثانى', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', '', ''),
(17, 3, 'الأسبوع الثالث', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', 'خامس ', 'ب'),
(18, 4, 'الأسبوع الرابع', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', '', ''),
(19, 5, 'الأسبوع الخامس', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', 'خامس ', 'ب'),
(20, 7, 'الأسبوع السابع', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', '', ''),
(21, 6, 'الأسبوع السادس', 'الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', 20, 'Ahmed', '06:45', '07:30', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `new_tabs_sub`
-- (See below for the actual view)
--
CREATE TABLE `new_tabs_sub` (
);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `note_type` varchar(20) NOT NULL,
  `note_content` varchar(20) NOT NULL,
  `note_student_id` int(11) NOT NULL,
  `note_teacher_id` int(11) NOT NULL,
  `note_group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `note_type`, `note_content`, `note_student_id`, `note_teacher_id`, `note_group_id`) VALUES
(1, 'golden_card', '3', 2, 5, 1),
(2, 'golden_card', '3', 2, 5, 1),
(3, 'golden card', '3', 12, 13, 10),
(4, 'golden card', '3', 12, 13, 10),
(5, 'text ', 'مشارك بفعالية', 12, 13, 10),
(6, 'text', 'مشارك بفعالية', 11, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification_father`
--

CREATE TABLE `notification_father` (
  `notif_id` int(40) NOT NULL,
  `notif_teacher_id` varchar(40) NOT NULL,
  `notif_parent_id` varchar(40) NOT NULL,
  `notif_message` varchar(250) NOT NULL,
  `notif_status` varchar(40) NOT NULL,
  `notif_option` varchar(20) NOT NULL,
  `notif_delete` tinyint(4) NOT NULL,
  `notif_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notif_msg_flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification_father`
--

INSERT INTO `notification_father` (`notif_id`, `notif_teacher_id`, `notif_parent_id`, `notif_message`, `notif_status`, `notif_option`, `notif_delete`, `notif_date`, `notif_msg_flag`) VALUES
(2, '68', '1', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', '0', 0, '2019-01-04 21:52:52', 0),
(3, '68', '1', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', '0', 0, '2019-01-04 21:53:25', 0),
(4, '68', '1', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', '0', 0, '2019-01-04 22:11:01', 0),
(5, '68', '1', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', '0', 0, '2019-01-04 22:11:02', 0),
(6, '68', '1', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', '0', 0, '2019-01-04 22:11:05', 0),
(14, '68', '16', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', 'outbox', 0, '2019-01-04 22:11:07', 0),
(19, '68', '39', 'قام احمد محمد بإرسال طلب إضافة ', 'unread', 'notif', 0, '2019-01-04 22:11:07', 1),
(22, '68', '39', 'قام مجدى بإرسال طلب إضافة ', 'unread', 'notif', 0, '2019-01-04 22:11:07', 1),
(23, '68', '16', 'قام بدر بن محمد بن عبد الله بإرسال طلب إضافة ', 'unread', 'inbox', 0, '2019-01-04 22:11:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification_teacher`
--

CREATE TABLE `notification_teacher` (
  `notif_id` int(40) NOT NULL,
  `notif_teacher_id` varchar(40) NOT NULL,
  `notif_parent_id` varchar(40) NOT NULL,
  `notif_message` varchar(250) NOT NULL,
  `notif_option` varchar(40) NOT NULL,
  `notif_status` varchar(40) NOT NULL,
  `notif_delete` tinyint(4) NOT NULL DEFAULT '0',
  `notif_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `notif_student_id` int(40) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification_teacher`
--

INSERT INTO `notification_teacher` (`notif_id`, `notif_teacher_id`, `notif_parent_id`, `notif_message`, `notif_option`, `notif_status`, `notif_delete`, `notif_date`, `notif_student_id`) VALUES
(1, '55', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-01 12:53:57', 0),
(2, '55', '23', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-01-01 13:02:36', 0),
(3, '55', '23', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-01-02 11:06:15', 0),
(9, '68', '23', 'فضلا أستاذ اريد تقريرلأبنى هذا الأسبوع', 'ready', 'unread', 0, '2019-01-05 17:45:41', 0),
(11, '68', '23', 'فضلا أستاذ اريد تقريرلأبنى هذا الأسبوع', 'inbox', 'unread', 0, '2019-01-05 17:48:04', 0),
(12, '68', '23', 'فضلا استاذ أريد تقرير لأبنى هذا الأسبوع', 'inbox', 'unread', 0, '2019-01-05 17:47:57', 0),
(13, '68', '23', 'فضلا استاذاريد تقرير لأبنى هذا الأسبوع', 'inbox', 'unread', 0, '2019-01-28 20:43:24', 0),
(14, '68', '23', 'قام زياد رجب عبد الله الزهرانى بإرسال طلب إضافة', 'notif', 'unread', 0, '2019-01-28 20:53:52', 1),
(15, '68', '23', 'قام منصور نواف حربى بإرسال طلب إضافة', 'notif', 'unread', 0, '2019-01-05 17:50:40', 0),
(16, '68', '23', 'شكرا ', 'outbox', 'unread', 0, '2019-01-05 17:56:54', 0),
(17, '68', '23', 'لا عليك ، هذا واجبنا', 'outbox', 'unread', 0, '2019-01-05 17:56:54', 0),
(18, '55', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-09 19:33:55', 0),
(19, '68', '23', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-01-09 19:40:57', 0),
(20, '3', '2', 'message', 'notif', 'unread', 0, '2019-01-19 08:02:07', 4),
(21, '3', '2', 'message', 'outbox', 'unread', 0, '2019-01-19 08:07:27', 0),
(22, '68', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-24 17:25:34', 0),
(23, '68', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-24 17:25:36', 0),
(24, '68', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-24 17:25:37', 0),
(25, '68', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-24 17:25:38', 0),
(26, '68', '23', 'ابنكم مشاغب ', 'ready', 'unread', 0, '2019-01-24 17:25:39', 0),
(28, '73', '16', 'hi from moaaz postman', 'notif', 'unread', 0, '2019-01-28 15:08:13', 60),
(29, '68', '23', 'ابنكم مشاغب ', 'inbox', 'unread', 0, '2019-01-24 17:25:39', 0),
(30, '68', '23', 'فضلا استاذاريد تقرير لأبنى هذا الأسبوع', 'inbox', 'read', 0, '2019-01-05 17:48:18', 0),
(31, '12', '13', 'dfdsfsdfds', 'outbox', 'unread', 0, '2019-01-28 21:11:54', 0),
(32, '73', '16', 'hi from moaaz postman', 'outbox', 'unread', 0, '2019-01-28 21:16:27', 0),
(33, '73', '16', 'test', 'outbox', 'unread', 0, '2019-01-28 21:22:08', 0),
(34, '73', '16', 'test', 'outbox', 'unread', 0, '2019-01-28 21:55:24', 0),
(35, '68', '23', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-01-29 19:16:41', 0),
(36, '68', '23', 'ابنكم مشاغب [vh ', 'outbox', 'unread', 0, '2019-01-29 19:16:57', 0),
(37, '68', '16', 'mmmmmmmmmm the money to you ', 'outbox', 'unread', 0, '2019-01-29 19:31:20', 0),
(38, '68', '2', 'nmmmmm', 'outbox', 'unread', 0, '2019-01-29 19:32:05', 0),
(39, '68', '5', 'mmmmmmmmmm', 'outbox', 'unread', 0, '2019-01-29 19:48:12', 0),
(40, '68', '2', 'mmmmmmmmmm the money to pay for the', 'outbox', 'unread', 0, '2019-01-29 19:52:10', 0),
(41, '68', '1', 'mmmm', 'outbox', 'unread', 0, '2019-01-29 19:54:27', 0),
(42, '12', '0', 'كل عام و انتم بخير ', 'ready', 'unread', 0, '2019-02-01 17:43:42', 0),
(43, '68', '0', 'any', 'ready', 'unread', 0, '2019-02-01 18:03:08', 0),
(44, '68', '0', 'الصورة الأصلية كتبت بواسطه البريد', 'ready', 'unread', 0, '2019-02-01 18:13:26', 0),
(45, '68', '0', 'البحث عن المشاركات التي كتبها', 'ready', 'unread', 0, '2019-02-01 18:14:26', 0),
(46, '73', '16', 'السلام عليكم', 'outbox', 'unread', 0, '2019-02-02 19:52:48', 0),
(47, '68', '16', 'gyjj', 'outbox', 'unread', 0, '2019-02-02 21:25:20', 0),
(48, '68', '16', 'xxxxc', 'outbox', 'unread', 0, '2019-02-08 20:42:31', 0),
(49, '68', '16', 'ssssss', 'outbox', 'unread', 0, '2019-02-09 18:00:28', 0),
(50, '73', '39', 'ؤيةي', 'outbox', 'unread', 0, '2019-02-09 23:41:35', 0),
(51, '73', '39', 'رتيو', 'outbox', 'unread', 0, '2019-02-10 01:53:47', 0),
(52, '68', '0', 'ss', 'ready', 'unread', 0, '2019-02-10 13:32:00', 0),
(53, '68', '16', 'ففففف', 'outbox', 'unread', 0, '2019-02-10 15:03:33', 0),
(54, '68', '16', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-02-10 15:03:42', 0),
(55, '68', '16', 'البحث عن المشاركات التي كتبها ام', 'outbox', 'unread', 0, '2019-02-10 15:04:35', 0),
(56, '68', '16', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-02-10 15:05:01', 0),
(57, '68', '16', 'البحث عن المشاركات التي كتبها', 'outbox', 'unread', 0, '2019-02-10 15:07:36', 0),
(58, '68', '16', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-02-10 15:08:45', 0),
(59, '68', '16', 'البحث عن المشاركات التي كتبها ام', 'outbox', 'unread', 0, '2019-02-10 15:09:02', 0),
(60, '68', '16', 'البحث عن المشاركات التي كتبها ام', 'outbox', 'unread', 0, '2019-02-10 15:09:23', 0),
(61, '68', '16', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-02-10 15:09:31', 0),
(62, '68', '15', 'البحث عن المشاركات التي كتبها ام في', 'outbox', 'unread', 0, '2019-02-10 15:58:02', 0),
(63, '68', '1', 'البحث عن المشاركات التي كتبها ام في بي بي ', 'outbox', 'unread', 0, '2019-02-10 15:58:25', 0),
(64, '68', '1', 'الصورة الأصلية كتبت بواسطه البريد', 'outbox', 'unread', 0, '2019-02-10 15:58:35', 0),
(65, '68', '1', 'الصورة في بي ام في هذه', 'outbox', 'unread', 0, '2019-02-10 15:58:59', 0),
(66, '68', '1', 'ابنكم مشاغب ', 'outbox', 'unread', 0, '2019-02-10 15:59:06', 0),
(67, '68', '16', 'الصورة الأصلية كتبت بواسطه البريد', 'outbox', 'unread', 0, '2019-02-10 15:59:26', 0),
(68, '73', '39', 'روؤززرت', 'outbox', 'unread', 0, '2019-02-23 14:43:39', 0),
(69, '73', '33', 'فاتوو', 'outbox', 'unread', 0, '2019-03-05 17:24:42', 0),
(70, '73', '39', 'fhdfgh', 'outbox', 'unread', 0, '2019-03-05 17:39:45', 0),
(71, '73', '16', 'ahln', 'outbox', 'unread', 0, '2019-03-08 21:25:40', 0),
(72, '73', '16', 'ahln', 'outbox', 'unread', 0, '2019-03-08 21:25:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(11) NOT NULL,
  `period_name` varchar(40) NOT NULL,
  `period_start_time` varchar(20) NOT NULL,
  `period_end_time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_id`, `period_name`, `period_start_time`, `period_end_time`) VALUES
(1, 'الأولى', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'الأولى', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'الثالثة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'الثالثة', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'الثالثة', '10:45', '11:30'),
(6, 'gfsd', 'dsfd', 'fdsffs'),
(7, 'الأولى', '06:45', '07:30');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_week_id` int(20) NOT NULL,
  `plan_week` varchar(40) NOT NULL,
  `plan_teacher_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_week_id`, `plan_week`, `plan_teacher_id`) VALUES
(4, 'الأسبوع الأول', '68'),
(5, 'الأسبوع الثانى', '68'),
(6, 'الأسبوع الثالث', '68'),
(7, 'الاسبوع الرابع', '68'),
(8, 'الاسبوع الخامس', '68');

-- --------------------------------------------------------

--
-- Table structure for table `plans_teacher`
--

CREATE TABLE `plans_teacher` (
  `plan_id` int(20) NOT NULL,
  `plan_week_id` int(20) NOT NULL,
  `plan_week` varchar(40) NOT NULL,
  `plan_period` varchar(40) NOT NULL,
  `plan_day_id` int(20) NOT NULL,
  `plan_day` varchar(40) NOT NULL,
  `plan_subject` varchar(40) NOT NULL,
  `plan_details` varchar(40) NOT NULL,
  `plan_start_time` varchar(20) NOT NULL,
  `plan_end_time` varchar(20) NOT NULL,
  `plan_class` varchar(20) NOT NULL,
  `plan_classroom` varchar(20) NOT NULL,
  `plan_school_id` varchar(20) NOT NULL,
  `plan_school_name` varchar(250) NOT NULL,
  `plan_homework_type` varchar(10) NOT NULL,
  `plan_homewok_details` varchar(250) NOT NULL,
  `plan_teacher_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plans_teacher`
--

INSERT INTO `plans_teacher` (`plan_id`, `plan_week_id`, `plan_week`, `plan_period`, `plan_day_id`, `plan_day`, `plan_subject`, `plan_details`, `plan_start_time`, `plan_end_time`, `plan_class`, `plan_classroom`, `plan_school_id`, `plan_school_name`, `plan_homework_type`, `plan_homewok_details`, `plan_teacher_id`) VALUES
(1, 4, 'الأسبوع الأول ', 'الفترة الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', '06:30', '07:15', 'رابع', 'ج', '23', 'ابتدائية أجيال اليرموك الابتدائية', '1', 'واجب', '68'),
(3, 5, 'الأسبوع الثانى ', 'الفترة الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', '06:30', '07:15', 'رابع', 'ج', '23', 'ابتدائية أجيال اليرموك الابتدائية', '1', 'واجب', '68'),
(4, 6, 'الأسبوع الثالث', 'الفترة الأولى', 1, 'الأحد', 'رياضيات ', 'التجميع التصاعدى', '06:30', '07:15', 'رابع', 'ج', '23', 'ابتدائية أجيال اليرموك الابتدائية', '1', 'واجب', '68');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(20) NOT NULL,
  `report_title` varchar(40) NOT NULL,
  `report_class` varchar(40) NOT NULL,
  `report_subject` varchar(40) NOT NULL,
  `report_student_id` int(20) NOT NULL,
  `report_tab_type` varchar(20) NOT NULL,
  `teacher_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_title`, `report_class`, `report_subject`, `report_student_id`, `report_tab_type`, `teacher_id`) VALUES
(1, 'تقرير الطالب بدر بن محمد', 'أول أ', 'رياضيات', 11, 'كتاب الطالب', 55),
(2, 'تقرير الطالب بدر بن محمد', 'أول أ', 'رياضيات', 11, 'كتاب الطالب', 55);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_name` varchar(40) NOT NULL,
  `report_date` datetime NOT NULL,
  `report_type` varchar(20) NOT NULL,
  `report_subject` varchar(20) NOT NULL,
  `report_homeworktype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `school_government` varchar(40) NOT NULL,
  `school_administration` varchar(250) NOT NULL,
  `school_stage` varchar(40) NOT NULL,
  `school_type` varchar(40) NOT NULL,
  `school_sector` varchar(40) NOT NULL,
  `school_no_classes` int(10) NOT NULL,
  `school_teacher_id` int(11) NOT NULL,
  `school_country` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_government`, `school_administration`, `school_stage`, `school_type`, `school_sector`, `school_no_classes`, `school_teacher_id`, `school_country`) VALUES
(1, 'ابتدائية أجيال اليرموك الابتدائية', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 39, ''),
(2, 'دار البراء الابتدائية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 73, ''),
(3, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 13, ''),
(5, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 13, ''),
(6, 'fgsf', 'الرياض', 'dfsdg', 'sfgd', 'fsgd', 'fdgsf', 5, 59, ''),
(7, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 59, ''),
(8, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 59, ''),
(9, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 59, ''),
(10, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 59, ''),
(12, 'مدرسة كفر شيشتا', 'الغربية', 'ادارة شرق المحلة التعليمية', 'الثانية', 'بنين', 'الابتدائي', 0, 30, ''),
(13, 'sklsldf', 'الغربية', 'dkfmksdf', 'slkdjflskdjf', 'lkjvlksdf', 'lskdflskd', 0, 30, ''),
(14, 'مسنيبنمس', 'اليبسي', 'نقتصثخهقت', 'مسيبةى', 'سينبمن', 'نسيبم', 0, 30, ''),
(15, 'سيببيبي يبص', 'الغربية', 'ادارة شرق المحلة التعليمية', 'الثانية', 'سيبس', 'شسير', 0, 30, ''),
(16, 'KLKL', 'الرياض', 'الرياض', 'dff', ';slkds;dksldkm', 'fg', 0, 30, ''),
(17, 'أجيال االيرموك', 'الرياض', 'الرياض', 'ابتدائي', 'أهلي', 'الرياض', 8, 64, ''),
(18, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'بنين', 7, 13, ''),
(23, 'ابتدائية أجيال الرموك الأهلية الابتدائية', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'kjabjab', 30, 68, 'السعودية تدعو'),
(24, 'المؤمنddccvvv', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'kjabjabخ', 0, 68, 'دولة'),
(28, 'المؤمن العالمية الأهلية للبنين', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى ', 'kjabjab', 0, 68, 'السعودية'),
(30, 'dfghfghgd', 'gdfhgfh', 'dgfhfg', 'dscadhfghsd', 'dscadhfghsd', 'cggf', 6, 70, ''),
(31, 'dfghfghgd', 'gdfhgfh', 'dgfhfg', 'gfhfgd', 'dscadhfghsd', 'cggf', 6, 70, ''),
(32, 'dfghfghgd', 'gdfhgfh', 'dgfhfg', 'gfhfgd', 'dscadhfghsd', 'cggf', 6, 70, ''),
(33, 'dfghfghgd', 'gdfhgfh', 'dgfhfg', 'gfhfgd', 'dscadhfghsd', 'cggf', 6, 70, ''),
(34, 'school_name', 'school_government', 'school_administration', 'school_stage', 'school_type', 'school_sector', 0, 0, ''),
(35, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 6, 70, ''),
(36, 'school_name', 'school_government', 'school_administration', 'school_stage', 'school_type', 'school_sector', 0, 0, ''),
(37, 'school_name', 'school_government', 'school_administration', 'school_stage', 'school_type', 'school_sector', 0, 0, ''),
(38, 'fvdf', 'القصيم', 'fgsdf', 'fvdfv', 'fav fav', 'SFSU', 9, 70, ''),
(39, 'daddy', 'مكة المكرمة', 'staff', 'dsfsd', 'dsfsd', 'dafsdsdf', 6, 70, ''),
(40, 'ابتدائية أجيال اليرموك الأهليه', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 7, 76, ''),
(41, 'اجيال اليرموك', 'الرياض', 'الرياض', 'الابتدائية', 'اهلي', 'الرياض', 8, 79, ''),
(42, 'ااا', 'اااا', 'اتتا', 'ااا', 'اااا', 'تتتت', 8, 79, ''),
(43, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 8, 80, ''),
(44, 'jjj', 'hgff', 'mjjj', 'njj', 'nnnj', 'jjjh', 1, 75, ''),
(45, 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 8, 80, ''),
(46, 'hi the following information', 'hi to the', 'hi the following information', 'hi the following information', 'hi the following information', 'hi the following', 3, 68, 'hhhhhh'),
(47, 'hi the following information', 'hi the following information to', 'hi the following information to', 'hi the following', 'hi the following information to', 'hi the following information to', 33, 68, 'hi'),
(48, 'hi the following information', 'hi the following information', 'hi the following information to', 'hi the following information', 'hi the following information', 'if so what', 3999, 68, 'info'),
(49, 'hi the following information', 'hi to the the', 'hi the following information', 'hi the following', 'if so what', 'hi the following file', 338, 68, 'file'),
(50, 'a', 'a', 'a', 'a', 'a', 'a', 8, 81, ''),
(52, 'اجيال اليرموك', 'الرياض', 'الرياض', 'ابتدائي', 'بنين', 'أهلي', 8, 82, 'الرياض'),
(53, 'hgccc', 'gharbya', 'hgfdsr', 'hgfcb', 'jggff', 'nkgf', 6, 78, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentnew`
--

CREATE TABLE `studentnew` (
  `student_id` int(40) NOT NULL,
  `student_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `student_parent_id` varchar(20) NOT NULL,
  `student_school_id` varchar(20) NOT NULL,
  `student_school_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `student_group_id` varchar(20) NOT NULL,
  `student_country` varchar(20) CHARACTER SET utf8 NOT NULL,
  `student_teacher_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentnew`
--

INSERT INTO `studentnew` (`student_id`, `student_name`, `student_parent_id`, `student_school_id`, `student_school_name`, `student_group_id`, `student_country`, `student_teacher_id`) VALUES
(1, 'سارة ابراهيم عباس', '1', '1', 'مدرسة مصر الجديدة النموذجية بنات', '1', '??????? ??? ???????', '1'),
(2, 'سارة ابراهيم عباس', '1', '1', 'مدرسة مصر الجديدة النموذجية بنات', '1', 'جمهورية مصر العربية', '1'),
(18, 'علي', '33', '2', 'دار البراء الابتدائية الأهلية للبنين', '1', 'Egypt', '73'),
(20, 'Ahmed', '39', '2', 'دار البراء الابتدائية الأهلية للبنين', '2', 'ابتدائى', '73'),
(9, 'moaaz', '16', '2', 'دار البراء الابتدائية الأهلية للبنين', '2', 'Egypt', '68'),
(10, 'Adel', '16', '2', 'دار البراء الابتدائية الأهلية للبنين', '1', 'Egypt', '73'),
(11, 'Ali', '16', '2', 'دار البراء الابتدائية الأهلية للبنين', '1', 'Egypt', '73'),
(19, 'dfsdfdfg', '39', '2', 'دار البراء الابتدائية الأهلية للبنين', '2', 'ابتدائى', '73'),
(21, 'Mohamed', '39', '2', 'دار البراء الابتدائية الأهلية للبنين', '2', 'ابتدائى', '73');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_school` varchar(250) NOT NULL,
  `student_government` varchar(50) NOT NULL,
  `student_admin` varchar(250) NOT NULL,
  `student_stage` varchar(250) NOT NULL,
  `student_education_type` varchar(40) NOT NULL,
  `student_sector` varchar(10) NOT NULL,
  `student_class` varchar(10) NOT NULL,
  `student_classroom` varchar(4) NOT NULL,
  `student_code` int(11) NOT NULL,
  `student_parent_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_school`, `student_government`, `student_admin`, `student_stage`, `student_education_type`, `student_sector`, `student_class`, `student_classroom`, `student_code`, `student_parent_id`) VALUES
(13, 'زياد رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'أول ', 'أ', 35626598, 5),
(2, 'خالد رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'ثانى', 'ج', 35626598, 5),
(4, 'نواف رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'خامس', 'ب', 35626598, 5),
(5, 'نواف رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'خامس', 'ب', 35626598, 5),
(6, 'نواف رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'خامس', 'ب', 35626598, 5),
(9, 'زايد رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'خامس', 'ب', 35626598, 5),
(10, 'زايد رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'خامس', 'ب', 35626598, 5),
(11, 'زايد رجب عبد الله الزهرانى', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطقة الرياض', 'ابتدائى', 'أهلى', 'بنين', 'خامس', 'ب', 35626598, 5),
(1, 'moaaz', 'مدرسة', 'الرياض', 'ادارة شرق', 'الابتدائية', 'اهلي', 'بنين', 'الرابع', 'ب', 12, 16),
(14, 'آمن', 'مدرسة المحلة الراقية', 'الغربية', 'ادارة شرق المحلة التعليمية', 'الابتدائية', 'عام', 'بنين', 'الاول', 'أ', 12, 16),
(18, 'خالد رجب عبد الله الزهرانى ', 'ابتدائية أجيال اليرموك الأهلية ', 'الرياض', 'الإدارة العامة للتعليم بمنطفة الرياض ', 'ابتدائى ', 'أهلى', 'بنين', 'أول', 'ب', 323233, 16);

-- --------------------------------------------------------

--
-- Table structure for table `students_tabs`
--

CREATE TABLE `students_tabs` (
  `student_tab_id` int(11) NOT NULL,
  `student_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `student_group` varchar(20) NOT NULL,
  `student_evaluation` varchar(40) CHARACTER SET utf8 NOT NULL,
  `student_main_id` varchar(20) NOT NULL,
  `student_sub_tab` varchar(20) NOT NULL,
  `teacher_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_tabs`
--

INSERT INTO `students_tabs` (`student_tab_id`, `student_name`, `student_group`, `student_evaluation`, `student_main_id`, `student_sub_tab`, `teacher_id`) VALUES
(1, 'sara', '7', 'excellent', '1', '2', '68'),
(2, 'ahmed', '7', 'good', '1', '2', '68'),
(3, 'mohamed', '7', 'good', '1', '2', '68'),
(4, 'sara ibrahim', '7', 'very good', '1', '2', '68');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(40) NOT NULL,
  `subject_enterdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_tab`
--

CREATE TABLE `sub_tab` (
  `sub_tab_id` int(11) NOT NULL,
  `sub_main_id` int(11) NOT NULL,
  `sub_tab_title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `evaluation_id` varchar(250) NOT NULL,
  `sub_group_id` varchar(20) NOT NULL,
  `sub_teacher_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_tab`
--

INSERT INTO `sub_tab` (`sub_tab_id`, `sub_main_id`, `sub_tab_title`, `evaluation_id`, `sub_group_id`, `sub_teacher_id`) VALUES
(1, 7, 'الحضور', '1', '4', '68'),
(2, 2, 'dsjkfhdsklfjhkdj', '2', '4', '68'),
(3, 1, 'صفحة 1', '15', '4', '68'),
(4, 1, 'صفحة 2', '18', '4', '68'),
(5, 9, 'الجمع', '15', '4', '68'),
(6, 12, 'ت فرعي 2', '15', '4', '68'),
(7, 16, 's2 new', '16', '4', '68'),
(8, 17, 'تبوبب فرعي 2', '15', '4', '68');

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `tab_id` int(20) NOT NULL,
  `tab_main_name` varchar(40) NOT NULL,
  `tab_sub_name` varchar(40) NOT NULL,
  `tab_eva` varchar(40) NOT NULL,
  `tab_main_id` int(20) NOT NULL,
  `tab_student_id` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`tab_id`, `tab_main_name`, `tab_sub_name`, `tab_eva`, `tab_main_id`, `tab_student_id`) VALUES
(1, 'كتاب اللطلاب', 'التقييم العام', '10', 1, 1),
(2, 'كتاب الطلاب', 'التدريبات', 'انجز', 1, 1),
(3, 'كتاب الطلاب', 'الإختبار', 'اجتاز', 1, 1),
(4, 'كتاب النشاط', 'التقييم العام', 'اجتاز', 2, 1),
(4, 'كتاب النشاط', 'التقييم العام', 'اجتاز', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `tab_id` int(11) NOT NULL,
  `tab_main_name` varchar(50) NOT NULL,
  `tab_sub_name` varchar(50) NOT NULL,
  `tab_evaluation` varchar(50) NOT NULL,
  `tab_teacher_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`tab_id`, `tab_main_name`, `tab_sub_name`, `tab_evaluation`, `tab_teacher_id`) VALUES
(2, 'كتاب الطلاب', 'التقييم ', '', 5),
(3, 'كتاب الطلاب', 'التقييم ', '10 - 1', 5),
(4, 'كتاب الطلاب', 'التدريبات', 'اجتاز / لم يجتاز ', 5),
(5, 'كتاب النشاط', 'التقييم', '1-10', 13),
(6, 'كتاب النشاط', 'التقيي', '1-10', 13),
(7, 'كتاب النشاط', 'الحضور', 'حاضر / غائب', 13),
(8, 'كتاب النشاط', 'التقييم', '1-10', 13),
(9, 'كتاب الطلاب', 'التدريبات', 'اجتاز / لم يجتاز ', 5),
(10, 'كتاب الطلاب', 'التدريبات', 'اجتاز / لم يجتاز ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(250) NOT NULL,
  `teacher_email` varchar(250) NOT NULL,
  `teacher_password` varchar(250) NOT NULL,
  `teacher_phone` varchar(50) NOT NULL,
  `teacher_status` varchar(20) NOT NULL,
  `teacher_code` varchar(20) NOT NULL,
  `teacher_no_msg` int(11) NOT NULL,
  `teacher_token` varchar(250) NOT NULL,
  `teacher_token_web` varchar(250) CHARACTER SET utf32 NOT NULL,
  `teacher_enterdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `teacher_phone`, `teacher_status`, `teacher_code`, `teacher_no_msg`, `teacher_token`, `teacher_token_web`, `teacher_enterdate`) VALUES
(28, 'Ahmed', 'ahmed@gmmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01012380709', 'active', '5656', 0, '', '', '2018-10-16 20:56:10'),
(13, 'sara', 'sasasasas@jkkj.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', 'active', '1598', 0, '', '', '2018-10-16 20:56:10'),
(30, 'Moaaz', 'moaaz@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', '01226073054', 'active', '7589', 0, '', '', '2018-10-16 20:56:10'),
(29, 'Ahmed', 'ahmed@gmmrrail.com', 'e10adc3949ba59abbe56e057f20f883e', '01012380709', 'active', '4253', 0, '', '', '2018-10-16 20:56:10'),
(27, 'Ahmed', 'ahmed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01012380709', 'active', '1542', 0, '', '', '2018-10-16 20:56:10'),
(32, 'عماد السيد بدير حمزة', 'emad.elsayed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '5423536321542', 'active', '2236', 0, 'kxhxy4YAtE:APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '8fb54a2b0d61974d27e1158aafb150e8', '2018-10-16 21:03:52'),
(33, 'Sara', 'adsfd@dfd.dsfgs', '827ccb0eea8a706c4c34a16891f84e7b', '5635463546', 'active', '9865', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '78c7b34a77a7a8a5c73b44b71668d5a2', '2018-10-17 19:42:00'),
(34, 'عماد السيد بدير حمزة', 'emad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '5423536321542', 'deactive', '7504', 1, 'kxhxy4YAtE:APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '0dbb9563735af2378a855b6a88c90a3a', '2018-10-17 21:46:30'),
(39, 'Sara ', 'sara.khater@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0106377930188888', 'active', '0562', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC]]]]]', '679b420264dd4017647d027dae6bb2e4', '2018-11-09 11:49:22'),
(36, 'عماد السيد بدير حمزة', 'emad.elsaye1d@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '542353611321542', 'deactive', '3176', 1, 'kxhxy4YAtE:APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '8e30522c692036312ae0127afc47dc3d', '2018-10-27 14:28:32'),
(37, 'عماد السيد بدير حمزة', 'emad.elsayzzed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '656565675', 'active', '4104', 1, 'kxhxy4YAtE:APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '7b6cd6130b137ac2d007f7cd6e7cdfdc', '2018-10-30 23:38:17'),
(67, 'jkgkjh', 'kjhg@rgdfg.fdg', 'e10adc3949ba59abbe56e057f20f883e', '587657657', 'deactive', '7492', 1, '1546614651004', '34fabd1da738613f0087749936f4efeb', '2019-01-04 15:10:54'),
(40, 'Sara ', 'sara.khate44r@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '010637794301', 'active', '5286', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', 'cead9f3484ce016cfcdb6fde046e8b22', '2018-11-10 19:10:41'),
(41, 'Sara ', 'sara.khater6565@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0106377935601', 'active', '7165', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '17c1ae9befaeabb411c354236058d62d', '2018-11-10 20:53:51'),
(42, 'Sara ', 'sara.khate144r@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0106377914301', 'active', '9579', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '7ffcfcbe7cf45136729da02eb28abb9d', '2018-11-10 21:02:30'),
(43, 'Sara ', 'sara.khater199@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0106377935655', 'active', '8586', 0, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '0630895427b66f756144c3812f7e78b2', '2018-11-10 21:08:35'),
(44, 'Sara ', 'sara.khatkker@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0109779301', 'active', '9569', 0, 'sljdfjsdkjflks00', 'd4c9bcf0dc6f81e53a6e0425e9b39e26', '2018-11-16 09:09:16'),
(59, 'aliali', 'ali@ali.ali', '7620a9e9628e55159954d6cd3dab8672', '0123123', 'active', '6974', 0, 'dlsN-PNQ7Mk:APA91bHZUO3KBLSXHPCFQ1SjjHfTQjqGQ5Ic8o1AHxoGPkBLVJXknM-FV3RO3xRJYTuiLyjuDX_J6Hs0ZlAxGBvOOSrn8WcBYKpefCFu26ODBJqk9DllRnsF3W4lg5-UsEGeXVkjKBLh', '3701b6b76ec6f37651cf505d83fde183', '2018-12-09 22:36:49'),
(45, 'Sara ', 'sartkker@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0100009779301', 'deactive', '0163', 1, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '126e31d05a0098f6a11292942fd6a130', '2018-11-16 13:32:17'),
(46, 'Sara ', 'sartnnkker@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '0009779301', 'deactive', '9200', 1, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', 'a0c0980c8c61c92e7d4c9643ac9d83a3', '2018-11-16 13:39:58'),
(47, 'sara.kr@gmail.com', 'sar.kr@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', '000665444', 'deactive', '1751', 1, 'c1R_QsnTu50:APA91bGwK0O4yMzYMxjIAWdwfU1GLBfCbxuVNg53X-d93qNZIFBgSZ4IWRcDUiVD__W1deD2-PsOLVUDhHKa7dWvpLe1qAlVbvHyRPt170sy0XCeSmXrbJE0rWx7iHLllKKaFTkew-T5', '6683ae73e7cc92288536fe2ccfa15b8a', '2018-11-16 13:43:17'),
(48, 'Sara ', 'sara.khater@gmail.', 'dcddb75469b4b4875094e14561e573d8', '020027762129', 'deactive', '9170', 1, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XKyQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', '420cacfc1b5d3713240fc54166891fbc', '2018-11-16 13:43:44'),
(49, 'hi the', 'the@ksjsjs.sskk', '670b14728ad9902aecba32e22fa4f6bd', '07979494', 'deactive', '7760', 1, 'c1R_QsnTu50:APA91bGwK0O4yMzYMxjIAWdwfU1GLBfCbxuVNg53X-d93qNZIFBgSZ4IWRcDUiVD__W1deD2-PsOLVUDhHKa7dWvpLe1qAlVbvHyRPt170sy0XCeSmXrbJE0rWx7iHLllKKaFTkew-T5', '31554e422ed944c9286125697552b8ba', '2018-11-16 13:48:32'),
(50, 'hi the following', 'zjxjdjdj@nxndn.xxx', '670b14728ad9902aecba32e22fa4f6bd', '076767976', 'active', '2887', 0, 'c1R_QsnTu50:APA91bGwK0O4yMzYMxjIAWdwfU1GLBfCbxuVNg53X-d93qNZIFBgSZ4IWRcDUiVD__W1deD2-PsOLVUDhHKa7dWvpLe1qAlVbvHyRPt170sy0XCeSmXrbJE0rWx7iHLllKKaFTkew-T5', '2e2fcc4b23310b9218e5c425c5b21619', '2018-11-16 13:55:09'),
(51, 'fdsgfdg', 'sdfsd@fdbnndf.dvf', 'e10adc3949ba59abbe56e057f20f883e', '68766836748', 'deactive', '3229', 1, 'kjhkj', '7deb1dea1797a239e2d98a01bdd1ce88', '2018-11-17 10:06:16'),
(52, 'ali(+++++', 'ali@ali.ali', '670b14728ad9902aecba32e22fa4f6bd', '08099666', 'active', '9247', 0, 'c1R_QsnTu50:APA91bGwK0O4yMzYMxjIAWdwfU1GLBfCbxuVNg53X-d93qNZIFBgSZ4IWRcDUiVD__W1deD2-PsOLVUDhHKa7dWvpLe1qAlVbvHyRPt170sy0XCeSmXrbJE0rWx7iHLllKKaFTkew-T5', '35410fe7ece298768d1ae2b95c93cb27', '2018-11-17 10:58:40'),
(53, 'kjnkjn', 'hjhk@fdf.dfjh', 'e10adc3949ba59abbe56e057f20f883e', '8687576876', 'deactive', '2849', 1, '1542451380129', 'b1ea23dbd52eb69ebf579bf43836c02d', '2018-11-17 14:03:27'),
(54, 'kjnkjn', 'hjhk@fdf.dfjhff', 'e10adc3949ba59abbe56e057f20f883e', '8687576876434', 'deactive', '4725', 1, '15424513801294gfd', '9e194d9bf8cc04f0140cc7d74b92dcf2', '2018-11-17 14:08:20'),
(55, 'kjnkjn', 'hjhdfdk@fdffdff.dfgfg', 'e10adc3949ba59abbe56e057f20f883e', '542462436345', 'deactive', '5996', 1, 'sdkjfhkjfsdk', '6d9b300b40307b3c4e8f85073eb94035', '2018-11-17 14:10:41'),
(56, 'سارة ابراهيم عباس محمد خاطر', 'sara.khater.1993@gmail.com', '140f6969d5213fd0ece03148e62e461e', '01063779301', 'deactive', '1045', 1, '0', '6da7e327a8d83df6a99bdbe5f586daa1', '2018-12-07 07:56:08'),
(61, 'jkjkljk', 'DSFKLJDSLKFKLDJFKLSDJ@dflksdjf.com', 'e10adc3949ba59abbe56e057f20f883e', '331121325', 'deactive', '8513', 1, '0', '3f42a6a74698976bd5d03f04997f25c7', '2018-12-22 18:31:03'),
(58, 'shady', 'a@a.aaa', '000000', '01063779301', 'deactive', '0852', 1, '0', '332905a9f43ec87d30d97eb66906ff71', '2018-12-07 08:20:16'),
(60, 'Sara ', 'sara.khate1r@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '010637719301', 'deactive', '1341', 1, 'APA91bGoxKGAGe1bdaXm1szNbAYtG9XK11yQ0gcrKdsSrRBq4YgTW_nyMBrbjMwFaw9i_bNY_IktyvyduaeJXb7nfHGr0bzGO4MXPYFX_IZ_n49ryNL4EkC', 'e6cf5f02f31f4621eba873aa3ce91988', '2018-12-10 16:16:44'),
(62, 'سارة ابراهيم عباس محمد خاطر', ',mmmmmmm', 'e10adc3949ba59abbe56e057f20f883e', '112211221', 'deactive', '3448', 1, '0', '21849283a410bfa3bcd1ca6caa3ae18c', '2018-12-22 18:34:11'),
(63, 'abc', 'abc', 'c20ad4d76fe97759aa27a0c99bff6710', '00', 'deactive', '1862', 1, '0', '4e79ab942cb1d8f5f911bd1206a1d973', '2018-12-30 09:41:19'),
(64, 'abc', 'abc', '900150983cd24fb0d6963f7d28e17f72', 'abc', 'deactive', '8883', 1, '0', '64e5a0812715e6204ad3857be98ae2ed', '2018-12-30 09:41:52'),
(65, 'abc', 'abc', '900150983cd24fb0d6963f7d28e17f72', 'abc', 'deactive', '2213', 1, '0', '72e44f5ea6091dbdd25cc6c26042d72a', '2018-12-30 09:42:12'),
(66, 'gfgh', 'dasdasd', 'b3f81d24969cb406938be5962ec5b7a2', 'asdasd', 'deactive', '9496', 1, '0', '13a60b27366cbfa8072087a5f4a78b4d', '2018-12-30 11:17:40'),
(68, 'ali Ahmed khan', 'a@a.a', 'e10adc3949ba59abbe56e057f20f883e', '01021164799', 'active', '6137', 1, 'fRovNbDDGzM:APA91bGTk40KAz4ZJU_GItIuNkKLnjGHr-22unaYOh6AmDrZ7_KcBDURZ9SstpoQp0r6HVmtgeUQHLyajYHYL0XALlJYVd0Fvwe-mvgJbAEwZ9yFZv8rfeBi4EDk46P-i0_JKA1V0Ren', '83558f07deac723e1cf3d947a5ddde6a', '2019-01-04 15:15:32'),
(69, 'fdsgf', 'aaa@aaa.aaa', 'e10adc3949ba59abbe56e057f20f883e', '12345678', 'deactive', '6713', 1, 'dscasd', '43d13412f0e6794a854568af30fc5765', '2019-01-04 15:28:20'),
(70, 'dwarfs', 'lhkj@dgsg.dgf', 'e10adc3949ba59abbe56e057f20f883e', '9457348759', 'deactive', '1463', 1, '1546620598412', '7dd7461a12fa8c845c4674b0792399ae', '2019-01-04 16:50:00'),
(80, 'omda', 'eastsindbad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000000', 'active', '2319', 0, 'faLVIGzckNM:APA91bE2VHILyhuHL1XvGdVMZ8ASAQDef5pexqyouS-59_EsNTjbzHjOwrL7I_qpIRM_ab7Ab1FsIx6sEIY90_CvOWaX0_weiltZUjqHpMkT0Ji1R3rKmZlf-GNWfP7zwEEAMIEt3yhJ', '47dae83bcec1fe1523f5de83b89a2dd5', '2019-01-28 11:54:20'),
(71, 'ةبةبةبةب', 'ةبةبةبةب', '861282481fb18842e2ab942b5063db9e', 'ةبةبةبة', 'deactive', '9578', 1, '0', '4ac23e549f6d34e49e6fe1ea024d981d', '2019-01-05 19:22:11'),
(72, 'سارة ابراهيم عباس محمد خاطر', 'sara@gmail.com', '7cec85c75537840dad40251576e5b757', '010235665988', 'deactive', '8853', 1, '0', 'cf792ac5809106bd5734b1b6868fa797', '2019-01-05 21:41:25'),
(73, 'معاذ فتحى النشاوى', 'moaaz@epic.com', '4e7f25a06c7dde7efa0f5d7f8d1f11a9', '01063779301', 'active', '8054', 1, '0', '4ee31fabc6dbda672cfca7669510e883', '2019-01-06 08:57:49'),
(74, 'mmmm', 'moaaz@gmail.com', '96e79218965eb72c92a549dd5a330112', '123456841', 'deactive', '0891', 1, '0', 'cea687fc8c3b9854ee6154c4a738d9ef', '2019-01-06 20:13:08'),
(75, 'شسي', 'moaaz@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '01226073054', 'active', '2115', 0, 'eoTNquVj2rM:APA91bHJmxKz4dCJ9z_t6g_hZQNsxXLbCsSwJ4UxyDhMzpJEvF2gcwkakLI237jQ7w9kzVVrRILxwOyllkR4Px6CLNZythSWGx8WanxQX1I-XlYKThxzFtML_BMYG0tfvUWH8OYBAbzj', '4d3705797b4a50dec0fbbc6bbfc75ba7', '2019-01-06 20:18:59'),
(76, 'سارة إبراهيم عباس محمد', 'sara@epicsyst.net', '4c93008615c2d041e33ebac605d14b5b', '01004468111', 'active', '6505', 0, 'f508-PIIddc:APA91bGfjbqHtjJtr3uCVZZgQfkpsJ-rvhEJJdk8t9M94rZCpRmAXcu3uEwRF9w55KqbvcG8uuh3SCZQmqPKecd_lWktAzGHU1jj5IuafLTogFIQGkZDESj3faYsYBM17oFCOjCbxPbe', '8a697dd29f388c95639025309888d463', '2019-01-20 21:15:04'),
(78, 'mo', 'm.elneshawy@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', '12359870871', 'active', '0958', 0, 'eoTNquVj2rM:APA91bHJmxKz4dCJ9z_t6g_hZQNsxXLbCsSwJ4UxyDhMzpJEvF2gcwkakLI237jQ7w9kzVVrRILxwOyllkR4Px6CLNZythSWGx8WanxQX1I-XlYKThxzFtML_BMYG0tfvUWH8OYBAbzj', '1d5438a330ffa445938b0f429d712cf9', '2019-01-21 13:30:22'),
(79, 'emad', 'eastsindbad@msn.com', 'e10adc3949ba59abbe56e057f20f883e', '0548430412', 'active', '5727', 0, 'faLVIGzckNM:APA91bE2VHILyhuHL1XvGdVMZ8ASAQDef5pexqyouS-59_EsNTjbzHjOwrL7I_qpIRM_ab7Ab1FsIx6sEIY90_CvOWaX0_weiltZUjqHpMkT0Ji1R3rKmZlf-GNWfP7zwEEAMIEt3yhJ', 'b8247992fddedb5f3858386d113c629b', '2019-01-23 18:31:11'),
(81, 'Emad', 'omda@omda.com', 'e10adc3949ba59abbe56e057f20f883e', '056056056056', 'active', '3161', 0, 'd3s7d26QMRk:APA91bFCNIdS8ib8VZ53HqwqmedDep3pv80ww5sMxxnFxdIw1P4u4w3SsRK5N1agVl8I_Y5OStIG-DKgqIOfW5o4g2USRvNPiXnNll89p09IhPJsyd4thhBsyS_CrF1KyIEJT8hxypNJ', '51362154f867ad6f1abe329d4b65fff5', '2019-01-30 13:42:37'),
(82, 'emad', 'eastsindbad1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0548430413', 'active', '9225', 0, 'dvPJWWBje4w:APA91bEK4XFCyeytORJ6viK7zzLCT0uX4f4gjWFGbaZXQAyoahKIt6sYF2tv4-aAVbKjJhXptzCHSuLQJranHQpMux_SDJ-puY0P6Lw7HsNdegaZri-LP2622B4INayIr9Xm_J6qspJr', 'b4381bdeebbef9ed37d62c9f28da6cf7', '2019-02-11 10:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_plan`
--

CREATE TABLE `teacher_plan` (
  `plan_id` int(20) NOT NULL,
  `plan_day_id` varchar(20) NOT NULL,
  `plan_day` varchar(20) NOT NULL,
  `plan_period` varchar(20) NOT NULL,
  `plan_period_start` varchar(20) NOT NULL,
  `plan_period_end` varchar(20) NOT NULL,
  `plan_subject` varchar(20) NOT NULL,
  `plan_class` varchar(20) NOT NULL,
  `plan_classroom` varchar(20) NOT NULL,
  `plan_teacher_id` varchar(20) NOT NULL,
  `plan_school_id` varchar(20) NOT NULL,
  `plan_school_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_plan`
--

INSERT INTO `teacher_plan` (`plan_id`, `plan_day_id`, `plan_day`, `plan_period`, `plan_period_start`, `plan_period_end`, `plan_subject`, `plan_class`, `plan_classroom`, `plan_teacher_id`, `plan_school_id`, `plan_school_name`) VALUES
(1, '1', 'الأحد ', 'الفترة الأولى ', '06:45', '07:30', 'علوم ', 'خامس', 'ب', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(2, '1', 'الأحد ', 'الفترة الثالثة', '08:35', '09:15', 'رياضيات', 'أول ', 'ب', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(3, '1', 'الأحد ', 'الفترة الرابعة', '09:15', '09:55', 'رياضيات', 'أول ', 'ج', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(4, '1', 'الأحد ', 'الفترة السادسة ', '10:50', '11:30', 'رياضيات', 'أول ', 'أ', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(5, '1', 'الأحد', 'الفترة السابعة', '11:30', '12:15', 'علوم', 'ثانى', 'ب', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(31, '2', 'الاثنين', 'الفترة السادسة ', '10:50', '11:30', 'رياضيات', 'أول ', 'أ', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(32, '3', 'الثلاثاء', 'الفترة السادسة ', '10:50', '11:30', 'رياضيات', 'أول ', 'أ', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(33, '4', 'الأربعاء', 'الفترة السادسة ', '10:50', '11:30', 'رياضيات', 'أول ', 'أ', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(34, '5', 'الخميس', 'الفترة السادسة ', '10:50', '11:30', 'رياضيات', 'أول ', 'أ', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(35, '3', 'الثلاتاء', 'الخامسة', '01:30', '02:15', 'علوم', 'خامس ', 'ب', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(36, '1', 'الأحد', 'ااولي', '8:36', '11:36', 'العربيه', 'الثاني', 'ج', '68', '23', 'ابتدائية أجيال الرموك الأهلية الابتدائية'),
(37, '1', 'الأحد', 'الفتره الاولى الاولى', '5:41', '7:25', 'انجليزي', 'الصف الثالث الاعدادي', 'ب', '68', '49', 'hi the following information'),
(38, '1', 'الأحد', 'الحصة الأولى', '6:45', '7:30', 'رياضيات', 'أول', '1', '82', '52', 'اجيال اليرموك'),
(39, '2', 'الاثنين', 'ughv', '14:43', '17:43', 'yhgd', 'ggg', '1hg', '78', '53', 'hgccc');

-- --------------------------------------------------------

--
-- Structure for view `new_tabs_sub`
--
DROP TABLE IF EXISTS `new_tabs_sub`;
-- Error reading structure for table takieidl_takiem.new_tabs_sub: #1356 - View 'takieidl_takiem.new_tabs_sub' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `classes-table`
--
ALTER TABLE `classes-table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `c_plan`
--
ALTER TABLE `c_plan`
  ADD PRIMARY KEY (`c_plan_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `father`
--
ALTER TABLE `father`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`government_id`);

--
-- Indexes for table `group_student`
--
ALTER TABLE `group_student`
  ADD PRIMARY KEY (`plan_student_group_id`);

--
-- Indexes for table `group_student_c`
--
ALTER TABLE `group_student_c`
  ADD PRIMARY KEY (`plan_student_group_id`);

--
-- Indexes for table `group_student_old`
--
ALTER TABLE `group_student_old`
  ADD PRIMARY KEY (`group_student_id`);

--
-- Indexes for table `group_takiem`
--
ALTER TABLE `group_takiem`
  ADD PRIMARY KEY (`plan_group_id`);

--
-- Indexes for table `group_takiem_old`
--
ALTER TABLE `group_takiem_old`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`homework_id`);

--
-- Indexes for table `main_tab`
--
ALTER TABLE `main_tab`
  ADD PRIMARY KEY (`main_tab_id`);

--
-- Indexes for table `main_tab_new`
--
ALTER TABLE `main_tab_new`
  ADD PRIMARY KEY (`main_tab_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `new_plans`
--
ALTER TABLE `new_plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `notification_father`
--
ALTER TABLE `notification_father`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `notification_teacher`
--
ALTER TABLE `notification_teacher`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_week_id`);

--
-- Indexes for table `plans_teacher`
--
ALTER TABLE `plans_teacher`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `studentnew`
--
ALTER TABLE `studentnew`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students_tabs`
--
ALTER TABLE `students_tabs`
  ADD PRIMARY KEY (`student_tab_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sub_tab`
--
ALTER TABLE `sub_tab`
  ADD PRIMARY KEY (`sub_tab_id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`tab_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_plan`
--
ALTER TABLE `teacher_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `classes-table`
--
ALTER TABLE `classes-table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_plan`
--
ALTER TABLE `c_plan`
  MODIFY `c_plan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `evaluation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `e_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `father`
--
ALTER TABLE `father`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `government`
--
ALTER TABLE `government`
  MODIFY `government_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `group_student`
--
ALTER TABLE `group_student`
  MODIFY `plan_student_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `group_student_c`
--
ALTER TABLE `group_student_c`
  MODIFY `plan_student_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `group_student_old`
--
ALTER TABLE `group_student_old`
  MODIFY `group_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `group_takiem`
--
ALTER TABLE `group_takiem`
  MODIFY `plan_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group_takiem_old`
--
ALTER TABLE `group_takiem_old`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holiday_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `homework_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `main_tab`
--
ALTER TABLE `main_tab`
  MODIFY `main_tab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `main_tab_new`
--
ALTER TABLE `main_tab_new`
  MODIFY `main_tab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_plans`
--
ALTER TABLE `new_plans`
  MODIFY `plan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification_father`
--
ALTER TABLE `notification_father`
  MODIFY `notif_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notification_teacher`
--
ALTER TABLE `notification_teacher`
  MODIFY `notif_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_week_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plans_teacher`
--
ALTER TABLE `plans_teacher`
  MODIFY `plan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `studentnew`
--
ALTER TABLE `studentnew`
  MODIFY `student_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1334;

--
-- AUTO_INCREMENT for table `students_tabs`
--
ALTER TABLE `students_tabs`
  MODIFY `student_tab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_tab`
--
ALTER TABLE `sub_tab`
  MODIFY `sub_tab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `tab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `teacher_plan`
--
ALTER TABLE `teacher_plan`
  MODIFY `plan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
