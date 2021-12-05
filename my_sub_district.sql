-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 08:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_sub_district`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL COMMENT 'รหัสประเภทสถานที่',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อประเภทสถานที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'ร้านค้า'),
(2, 'วัด'),
(3, 'สถานที่ท่องเที่ยว'),
(4, 'ร้านอาหาร'),
(5, 'ที่พัก');

-- --------------------------------------------------------

--
-- Table structure for table `culture`
--

CREATE TABLE `culture` (
  `id` int(11) NOT NULL COMMENT 'รหัสประเพณี',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อประเพณี',
  `detail` text NOT NULL COMMENT 'รายละเอียดประเพณี',
  `id_vill` int(11) DEFAULT NULL COMMENT 'รหัสหมู่บ้าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `culture`
--

INSERT INTO `culture` (`id`, `name`, `detail`, `id_vill`) VALUES
(1, 'วันสงกรานต์', 'การสรงน้ำพระ คือ การทำความสะอาดพระพุทธรูป หิ้งพระ รูปภาพ และสิ่งของต่าง ๆ รวมไปถึงที่ประดิษฐานขององค์พระพุทธรูปให้สะอาดบริสุทธิ์ หรือเรียกอีกอย่างว่า “การถวายเครื่องเถราภิเษก” ซึ่งเป็นพิธีกรรมที่มีมาตั้งแต่สมัยพุทธกาลและสืบเนื่องต่อมาจนถึงปัจจุบันและต้องทำเป็นประจำทุกปี ถือว่าเป็นการชำระพระวรกายของพระพุทธเจ้าให้ปราศจากมลทิน เพื่อให้เกิดมุทิตาจิต เบิกบานใจ สุขใจ และเกิดความเป็นสิริมงคลกับผู้ที่ปฏิบัติและทุกคนในบ้าน นอกจากนี้ยังเป็นการแสดงถึงความเคารพและเลื่อมใสศรัทธาต่อพระรัตนตรัยทั้ง 3 ประการอีกด้วย', 3),
(2, 'บุญเบิกบ้าน', 'เป็นการทำบุญเพื่อชำระล้างสิ่งที่เป็นเสนียดจัญไร อันจะทำให้เกิดความเดือดร้อนแก่บ้านเมือง บ้านเมืองอยู่ไม่เป็นสุข ในบางครั้งก็ทำเมื่อฝนแล้งหรือไม่ตกต้องตามฤดูกาล โดยเชื่อกันว่าเมื่อทำแล้วจะทำให้ฝนตกและบ้านเมืองอยู่เย็นเป็นสุข เพื่อจะได้ทำนาและปลูกพืชพันธ์ธัญญาหารต่างๆ', 5),
(3, 'บุญข้าวประดับดิน', '“บุญเดือนเก้า ข้าวประดับดิน” หรือ “บุญข้าวประดับดิน” เป็นประเพณีหนึ่งในฮีตสิบสอง ของชาวอีสาน เพื่ออุทิศบุญกุศลให้กับผู้ล่วงลับไปแล้ว นิยมทำกันในวันแรม 14 ค่ำ เดือนเก้า หรือที่เรียกว่า บุญเดือนเก้า บุญข้าวประดับดิน เป็นบุญที่ทำเพื่ออุทิศส่วนกุศลให้แก่ เปรต (ชาวอีสานบางถิ่นเรียก เผต) หรือญาติมิตรที่ตายไปแล้ว ข้าวประดับดิน ได้แก่ ข้าวและอาหารคาวหวาน พร้อมหมากพลู บุหรี่ที่ห่อด้วยใบตอง กล้วย นำไปวางไว้ตามใต้ต้นไม้ แขวนไว้ตามกิ่งไม้ ตามบริเวณกำแพงวัดบ้าง (คนอีสานโบราณเรียกกำแพงวัดว่า ต้ายวัด) หรือวางไว้ตามพื้นดิน เรียกว่า \"ห่อข้าวน้อย\" พร้อมกับเชิญวิญญาณของญาติมิตร นำภัตตาหารไปถวายแด่พระภิกษุ สามเณร แล้วอุทิศส่วนกุศลแก่ผู้ตาย โดยหยาดน้ำ (กรวดน้ำ) ไปให้ด้วย', 5),
(4, 'พิธีเถราภิเษก', 'หรือพิธี “ฮดสรง” คือพิธีสรงน้ำหรือรินน้ำแก่พระสงฆ์ ซึ่งเป็นรูปแบบประเพณีที่เก่าแก่ของผู้คนในแถบอีสาน โดยได้รับอิทธิพลมาจากอาณาจักรล้านช้าง การจัดพิธีฮดสรงนั้นจะถูกจัดขึ้นเมื่อชาวบ้านและพระเถระในคณะสงฆ์เห็นว่า มีพระสงฆ์ที่เล่าเรียนจบในบั้นหรือขั้นต่างๆ แล้ว จึงสมควรที่จะจัดพิธีฮดสรงให้', 5),
(5, 'บุญผะเหวด', 'บุญผะเหวด หรือบุญพระเวส หมายถึง บุญพระเวสสันดร เรียกอีกอย่างหนึ่งว่า บุญมหาชาติ ชาวอีสานจะนิยมจัดขึ้นในเดือนสี่ (ช่วงเดือนมีนาคม) เป็นบุญประจำปีในฮีตสิบสอง ดังที่ปราชญ์อีสานได้ประพันธ์ผญา (บทกลอน) เกี่ยวกับการทำบุญในช่วงเดือนสามและเดือนสี่ไว้ว่า “เถิงเมื่อเดือนสามค้อยเจ้าหัวคอยปั้นข้าวจี่ ตกเมื่อเดือนสี่ค้อยจัวน้อยเทศน์มัทรี” แปลว่า เมื่อถึงเดือนสามพระภิกษุสามเณรจะรอชาวบ้านทำบุญข้าวจี่ และเมื่อถึงเดือนสี่(ช่วงเดือนมีนาคม) สามเณรเทศน์กัณฑ์มัทรีในงานบุญมหาชาติ\r\nบุญผะเหวดของชาวอีสานถือเป็นงานบุญสำคัญ ชาวบ้านจะจัดให้มีพิธีอย่างใหญ่โต งานบุญต่อเนื่องกัน 2-3 วัน มูลเหตุที่มีการทำบุญมีคติความเชื่อมาจากเรื่อง พระมาลัยสูตรว่า\r\n“พระมาลัยได้ขึ้นไปไหว้พระธาตุเกศแก้วจุฬามณีในสวรรค์ชั้นดาวดึงส์ พบพระศรีอริยเมตไตรย องค์พระศรีอริยเมตไตรยได้ดำรัสสั่งกับพระมาลัยว่า ถ้ามนุษย์อยากพบพระองค์ จงอย่าได้ทำบาปหนัก ได้แก่ ฆ่าบิดามารดา ฆ่าพระอรหันต์ ทำร้ายพระพุทธเจ้า และยุยงให้พระสงฆ์แตกกัน อนึ่งให้ฟังเทศน์เรื่องราวมหาเวสสันดรชาดกให้จบในวันเดียวกัน ฟังแล้วให้นำไปประพฤติปฏิบัติจะได้รับอานิสงส์มาก และจะได้พบพระศาสนาของพระศรีอริยเมตไตรย เมื่อพระมาลัยกลับมาถึงโลกมนุษย์ จึงได้บอกเรื่องราวให้มนุษย์ทราบ ด้วยเหตุนี้ชาวอีสานผู้ปรารถนาจะพบศาสนาพระศรีอริยเมตไตรย จึงพากันทำบุญพระเวสสันดรสืบต่อมาจนถึงปัจจุบัน”\r\n', 5),
(6, 'ตักบาตรเทโวโรหณะ ', 'ตักบาตรเทโว หรือเรียกว่า การตักบาตรเทโวโรหณะ ซึ่งคำว่า \"เทโว” ย่อมาจาก \"เทโวโรหณะ” แปลว่า การเสด็จจากเทวโลก การตักบาตรเทโวจึงเป็นการระลึกถึงวันที่พระพุทธองค์เสด็จกลับจากการโปรดพระพุทธมารดาในเทวโลก ประเพณีการทำบุญกุศลเนื่องในวันออกพรรษานี้ ทุกวัดในประเทศไทย ก็จะมีการจดพิธีการตักบาตรเทโวนี้\r\nตักบาตรเทโว หรือตักบาตรเทโวโรหณะ เป็นวันที่พระพุทธเจ้าเสด็จลงจากสวรรค์ ชั้นดาวดึงส์ในเวลาเช้าวันแรม 1 ค่ำ เดือน 11 หลังจากที่พระองค์ทรงจำพรรษาที่นั้นเป็นเวลา 3 เดือน ความสำคัญของวันเทโวโรหณะ เป็นวันที่มีการทำบุญตักบาตรที่พิเศษวันหนึ่ง กล่าวคือ ในพรรษาหนึ่งพระพุทธเจ้าได้เสด็จไปยังสวรรค์ชั้นดาวดึงส์แสดงพระอภิธรรมโปรด พระมารดา และทรงจำพรรษาที่นั้น พอออกพรรษาก็เสด็จลงจากเทวโลกนั้นมายังโลกมนุษย์ โดยเสด็จลงที่เมืองสังกัสส์ ใกล้เมืองพาราณสี ชาวบ้านชาวเมืองทราบข่าวก็พากันไปทำบุญตักบาตรพระพุทธองค์ที่นั้น และเป็นการรับเสด็จพระพุทธองค์ด้วย กล่าวกันว่า ในวันนี้ได้เกิดเหตุอัศจรรย์ คือ เทวดา มนุษย์ และสัตว์นรก ต่างมองเห็นซึ่งกันและกัน จึงเรียกวันนี้อีกชื่อหนึ่งว่า \"วันพระเจ้าเปิดโลก” คือ เปิดให้เห็น กันทั้ง 3 โลกนั้นเอง\r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL COMMENT 'รหัสชุดข้อมูลของหน้าบ้าน',
  `list_silder` varchar(12) NOT NULL COMMENT 'รายการรหัสของประเพณีที่จะโชว์เป็นไลด์',
  `history` text NOT NULL COMMENT 'ประวัติตำบล',
  `about_subDis` text NOT NULL COMMENT 'เกี่ยวกับตำบล',
  `culture_subDis` text NOT NULL COMMENT 'ศาสนา ประเพณี วัฒนธรรม',
  `list_culture` text NOT NULL COMMENT 'รายการรหัสของประเพณี',
  `about_web` text NOT NULL COMMENT 'รายละเอียดเกี่ยวกับเว็บ',
  `picOfAboutWeb` text NOT NULL COMMENT 'รูปพื้นหลักรายละเอียดเกี่ยวกับเว็บ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `list_silder`, `history`, `about_subDis`, `culture_subDis`, `list_culture`, `about_web`, `picOfAboutWeb`) VALUES
(1, '1,2,3,4,5,6', 'โดยแต่เดิมตำบลบ้านค้อจะขึ้นกับตำบลบ้านผือ อำเภอบ้านผือ จังหวัดอุดรธานี ได้แยกตัวออกจากตำบลบ้านผือ และได้จัดตั้งเป็นองค์การบริหารส่วนตำบลบ้านค้อ ในวันที่ 25 มีนาคม พ.ศ. 2539 และตั้งที่ทำการที่บ้านค้อ หมู่ 1 ขึ้น ต่อมาได้ยกฐานะเป็นองค์การบริหารส่วนตำบลขนาดกลางเมื่อวันที่ 25 มีนาคม พ.ศ. 2553 และต่อมาเมื่อวันที่ 7 เมษายน พ.ศ. 2555 องค์การบริหารส่วนตำบลบ้านค้อได้ย้ายที่ทำการมาที่ใหม่ตรงบริเวณสามแยกระหว่างทางไปบ้านนาคูณและบ้านหนองกอง (เป็นหนึ่งในหมู่บ้านของตำบลบ้านค้อในปัจจุบัน)', 'ตำบลบ้านค้อ เป็นตำบลขนาดเล็ก ประกอบด้วยหมู่บ้านทั้งหมด 6 หมู่บ้านได้แก่ บ้านค้อ บ้านหนองกอง บ้านนารายณ์ บ้านนาคูณ บ้านน้อยนารายณ์ และบ้านค้อน้อย จากข้อมูลของสำนักทะเบียนราษฎร์อำเภอบ้านผือ ณ กันยายน 2559 พบว่าตำบลบ้านค้อ มีจำนวนประชากร ทั้งสิ้น 3,137 คน แยกเป็นชาย 1,604 คน หญิง 1,533 คน มีจำนวนครัวเรือนทั้งสิ้น 947 ครัวเรือน', 'ในตำบลบ้านค้อได้สืบสาน ศาสนา ประเพณี และวัฒนธรรมส่วนใหญ่มากจากไทยพวน เนื่องจากเป็นตำบลขนาดเล็ก ผู้คนทั้งหมดตำบลเลยนับถือพุทธศาสนา โดยมีวัดในถึงตำบล 8 แห่ง ผู้คนส่วนใหญ่ในตำบลจะมีกิจกรรมร่วมกันทางวัดอยู่ตลอดทั้งปี พร้อมกับทรงเสริมให้บุตรหลานบวรเรียน หรือบวรภาคฤดูร้อนในช่วงปิดเทอมอยู่ตลอด ภาษาที่ใช้ในถิ่นจะเป็นภาษาไทยพวนและภาษาอีสานปะปนกันไป ภูมิปัญญาท้องถิ่นที่สืบทอดกันมาได้แก่ ไม้ไผ่จักสาน บั้งไฟ ในทุกๆปีจะมีงานประจำปี ได้แก่ บุญปีใหม่ บุญมหาชาติ ประเพณีสงกรานต์ บุญบั้งไฟ ประเพณีเข้าพรรษา บุญเข้าประดับดิน บุญสารไทย ประเพณีออกพรรษา และประเพณีบุญทอดกฐิน', '1,2,3,4,5,6', 'นายวชิระ ทองเลิศ 64040249107 นักศึกษาชั้นปีที่ 1 มหาวิทยาลัยราชภัฎอุดรธานี เป็นผู้จัดทำเว็บไชต์ \"เที่ยวบ้านฉัน ตำบลบ้านค้อ\" นี้ขึ้นเพื่อเป็นโปรเจคในรายวิชา CS34205 การเขียนโปรแกรมบนเว็บ\r\nภาคเรียนที่ 1 ปีการศึกษา 2564 เพื่อเสนออาจารย์ภาณุพันธุ์ ชื่นบุญ และเพื่อประโยชน์ในการศึกษาถึงวิธีการและการปฏิบัติจริงในการสร้างเว็บไชต์ขึ้น', 'data/pic/sunset-gcc15a802e_1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(20) NOT NULL COMMENT 'ชื่อเข้าสู่ระบบ',
  `password` text NOT NULL COMMENT 'รหัสผ่าน',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ-นามสกุล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `name`) VALUES
('ghjghgkgu', 'e10adc3949ba59abbe56e057f20f883e', 'Ryujin Park'),
('jfffhjh', 'c33367701511b4f6020ec61ded352059', 'Dodoria'),
('wachira', 'e10adc3949ba59abbe56e057f20f883e', 'wachira thonglert');

-- --------------------------------------------------------

--
-- Table structure for table `picofculture`
--

CREATE TABLE `picofculture` (
  `id` int(11) NOT NULL COMMENT 'รหัสรูปภาพประเพณี',
  `link` text NOT NULL COMMENT 'ลิงค์รูปภาพประเพณี',
  `id_cul` int(11) DEFAULT NULL COMMENT 'รหัสประเพณี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picofculture`
--

INSERT INTO `picofculture` (`id`, `link`, `id_cul`) VALUES
(1, 'data/pic/festival_re-size/บุญข้าวประดับดิน.png', 3),
(2, 'data/pic/festival_re-size/เถราภิเษก.png', 4),
(3, 'data/pic/festival_re-size/บุญเบิกบ้าน.png', 2),
(4, 'data/pic/festival_re-size/บุญพะเวด.png', 5),
(8, 'data/pic/festival_re-size/เทศการปีใหม่_ตักบาตรเทโว.png', 6),
(9, 'data/pic/festival_re-size/วันสงการนต์.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `picofplace`
--

CREATE TABLE `picofplace` (
  `id` int(11) NOT NULL COMMENT 'รหัสรูปภาพ',
  `link` text NOT NULL COMMENT 'ลิงค์รูปภาพ',
  `id_pln` int(11) DEFAULT NULL COMMENT 'รหัสสถานที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picofplace`
--

INSERT INTO `picofplace` (`id`, `link`, `id_pln`) VALUES
(1, 'data/pic/temple_re-size/วัดนารายณ์น้อย.png', 6),
(2, 'data/pic/temple_re-size/วัดนารายณ์ใหญ่.png', 7),
(3, 'data/pic/temple_re-size/วัดป่านอกบ้านค้อ.png', 8),
(4, 'data/pic/temple_re-size/วัดป่านาคูณ.png', 25),
(5, 'data/pic/temple_re-size/วัดป่าหนองกอง.png', 13),
(6, 'data/pic/temple_re-size/วัดศรีสว่างอรุณ.png', 22),
(7, 'data/pic/temple_re-size/วัดโพธิชัยมงคล.png', 21),
(8, 'data/pic/temple_re-size/วัดในบ้านค้อ.png', 11),
(9, 'data/pic/store_re-size/ร้านนายธีระชัย.png', 4),
(10, 'data/pic/store_re-size/ร้านนายพร.png', 9),
(11, 'data/pic/store_re-size/ร้านนายเมธี.png', 3),
(12, 'data/pic/store_re-size/ร้านพี่ขม.png', 10),
(13, 'data/pic/store_re-size/ร้านพ่อหมิว.png', 23),
(14, 'data/pic/store_re-size/ร้านยายสมหมาย.png', 28),
(16, 'data/pic/store_re-size/ร้านสมบัติการค้า.png', 14),
(17, 'data/pic/store_re-size/ร้านแม่ตู่การค้า.png', 5),
(18, 'data/pic/store_re-size/ร้านแม่อุ้ย.png', 12),
(19, 'data/pic/store_re-size/สายฝนการค้า.png', 24),
(20, 'data/pic/Hotel_re-size/ธาราริน.png', 27),
(21, 'data/pic/Hotel_re-size/ไพศาลรีสอร์ท.png', 26);

-- --------------------------------------------------------

--
-- Table structure for table `picofproducts`
--

CREATE TABLE `picofproducts` (
  `id` int(11) NOT NULL COMMENT 'รหัสรูปภาพ',
  `link` text NOT NULL COMMENT 'ลิงค์รูปภาพ',
  `id_pro` int(11) DEFAULT NULL COMMENT 'รหัสสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picofproducts`
--

INSERT INTO `picofproducts` (`id`, `link`, `id_pro`) VALUES
(1, 'data/pic/product_re-size/กล้วยทอด.png', 1),
(2, 'data/pic/product_re-size/ข้าวเหนียวต้ม.png', 2),
(3, 'data/pic/product_re-size/จิ้งหรีดทอด.png', 3),
(4, 'data/pic/product_re-size/ปลาร้าทรงเครื่อง.png', 4),
(5, 'data/pic/product_re-size/สาเกเชื่อม.png', 5),
(6, 'data/pic/product_re-size/เข่งปลาทู.png', 6),
(7, 'data/pic/product_re-size/เครื่องจักสาน.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL COMMENT 'รหัสสถานที่',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อสถานที่',
  `lat` text NOT NULL COMMENT 'ละติจูด',
  `lng` text NOT NULL COMMENT 'ลองจิจูด',
  `id_vill` int(11) DEFAULT NULL COMMENT 'รหัสหมู่บ้าน',
  `id_ctgry` int(11) DEFAULT NULL COMMENT 'รหัสประเภท',
  `detail` text NOT NULL COMMENT 'รายละเอียดสถานที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `lat`, `lng`, `id_vill`, `id_ctgry`, `detail`) VALUES
(3, 'ร้านนายเมธี', '17.72342000', '102.42343000', 5, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(4, 'ร้านธีระชัย', '17.72354000', '102.42443000', 5, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(5, 'แม่ตู้การค้า', '17.72955400', '102.42417000', 3, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(6, 'วัดไวกูลฐาราม', '17.72332900', '102.42758300', 5, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(7, 'วัดอุตตมาวาส', '17.73033600', '102.42485700', 5, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(8, 'วัดป่าสาระวารี', '17.74258', '102.43761', 6, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(9, 'ร้านนายพร', '17.74256700', '102.43588100', 6, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(10, 'ร้านพี่ขม', '17.74383800', '102.43674400', 1, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(11, 'วัดอุดมธัญญาผล', '17.74571', '102.43640', 1, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(12, 'ร้านแม่อุ้ย', '17.74940200', '102.44749000', 2, 4, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(13, 'วัดป่าหนองกอง', '17.75950300', '102.44916000', 2, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(14, 'ร้านสมบัติการค้า', '17.76493800', '102.44879900', 2, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(21, 'วัดโพธิ์ชัยมงคล', '17.76617200', '102.44730900', 2, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(22, 'วัดศรีสว่างอรุณ', '17.75747200', '102.46093800', 4, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(23, 'ร้านพ่อหมิว', '17.75485600', '102.46462500', 4, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(24, 'ร้านสายฝนการค้า', '17.75315300', '102.46514700', 4, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น'),
(25, 'วัดป่านาคูณ', '17.74860800', '102.46203700', 4, 2, 'วัดสวยอุดรธานี การเดินทางสะดวก อยู่ไม่ไกลจากตัวเมืองอุดรธานีมากนัก อุโบสถมีความสวยงามที่ล้อมรอบพญานาค ภายในมีพระพุทธรูปศักดิ์สิทธิ์ ใกล้ ๆ อุโบสถจะมีสระน้ำที่ว่ากันว่ามีพญานาคสถิตอยู่ บริเวณวัดก็กว้างขวาง มีลานจอดรถ แม้วัดจะอยู่ในบริเวณชุมชน แต่ก็มีความสงบ ร่มรื่นดีเลย '),
(26, 'รีสอร์ทไฟวงศ์', '17.70178800', '102.44093200', 7, 5, 'ห้องสะอาด อาหารอร่อย กับราคาบ้านๆเป็นกันเอง ถ้าแวะมาเที่ยวบ้านผือ ก็ต้องมาพักกับเรา รีสอร์ทไฟวงศ์'),
(27, 'ธารารินรีสอร์ท', '17.70053900', '102.44560800', 7, 5, 'ฤกษ์งาม ยามดี ถึงวันสำคัญใกล้เข้ามาแล้วใครที่ยังคิดไม่ออก จะจัดงานแบบไหน ยังไง ปรึกษาเราได้นะคะ จัดงานยุคนี้ต้องทำตามมาตราการป้องกันโรคโควิด-19 555+'),
(28, 'ร้านยายสมหมาย', '17.76500600', '102.44888300', 2, 1, 'ครบครันของใช้สอย อาหารเช้าสดใหม่ ราคาเป็นกันเอง ต้องร้านเราเท่านั้น');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อสินค้า',
  `detail` text NOT NULL COMMENT 'รายละเอียด',
  `id_pln` int(11) DEFAULT NULL COMMENT 'รหัสสถานที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `id_pln`) VALUES
(1, 'กล้วยทอด', 'กล้วยทอด กรอบ หวานมัน หอมใบเตย', 3),
(2, 'ข้าวโพดข้าวเหนียวต้ม ', 'ข้าวโพดข้าวเหนียวต้ม เหนียวนุ่ม หอมหวาน สดใหม่จากสวนเกษตกร', 3),
(3, 'จิ้งหรีดทอด', 'จิ้งหรีดทอด กรอบมัน ไม่เหม็นคาว สดใหม่จากฟาร์มเกษตกร', 3),
(4, 'ปลาร้าทรงเครื่อง', 'ปลาร้าทรงเครื่อง หอมมัน หอมนัว แซ่บหลาย สไตล์อีสานบ้านเฮา', 3),
(5, 'สาเกเชื่อม', 'สาเกเชื่อม หอมหวานมัน สดใหม่จากฟาร์ฒเกษรตกร', 3),
(6, 'เข่งปลาทู', 'เข่งปลาทู งานทำมือ ดีมีคุณภาพ และราคาย่อยเยาว์ ', 3),
(7, 'เครื่องจักสาน', 'เครื่องจักสาน งานทำมือ ดีมีคุณภาพ และราคาย่อยเยาว์ ', 3),
(8, 'เสื่อกก', 'เสื่อกก งานทำมือ ดีมีคุณภาพ และราคาย่อยเยาว์ ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sub_district`
--

CREATE TABLE `sub_district` (
  `id` int(11) NOT NULL COMMENT 'รหัสตำบล',
  `name` text NOT NULL COMMENT 'ชื่อตำบล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_district`
--

INSERT INTO `sub_district` (`id`, `name`) VALUES
(1, 'บ้านค้อ'),
(2, 'บ้านผือ'),
(8, 'สามพร้าว'),
(9, 'เมืองหนองคาย');

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `id` int(11) NOT NULL COMMENT 'รหัสหมู่บ้าน',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อหมู่บ้าน',
  `id_dis` int(11) DEFAULT NULL COMMENT 'รหัสตำบล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`id`, `name`, `id_dis`) VALUES
(1, 'บ้านค้อ', 1),
(2, 'บ้านหนองกอง', 1),
(3, 'บ้านนารายณ์', 1),
(4, 'บ้านนาคูณ', 1),
(5, 'บ้านน้อยนารายณ์', 1),
(6, 'บ้านค้อน้อย', 1),
(7, 'บ้านผือ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culture`
--
ALTER TABLE `culture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_culture_village` (`id_vill`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `picofculture`
--
ALTER TABLE `picofculture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pic_culture` (`id_cul`);

--
-- Indexes for table `picofplace`
--
ALTER TABLE `picofplace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pic_plance` (`id_pln`);

--
-- Indexes for table `picofproducts`
--
ALTER TABLE `picofproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pic_product` (`id_pro`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_plance_village` (`id_vill`),
  ADD KEY `fk_plance_ctgry` (`id_ctgry`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pro_plance` (`id_pln`);

--
-- Indexes for table `sub_district`
--
ALTER TABLE `sub_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_village_s_dis` (`id_dis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสถานที่', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `culture`
--
ALTER TABLE `culture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเพณี', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชุดข้อมูลของหน้าบ้าน', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picofculture`
--
ALTER TABLE `picofculture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพประเพณี', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `picofplace`
--
ALTER TABLE `picofplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `picofproducts`
--
ALTER TABLE `picofproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสถานที่', AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_district`
--
ALTER TABLE `sub_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตำบล', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหมู่บ้าน', AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `culture`
--
ALTER TABLE `culture`
  ADD CONSTRAINT `fk_culture_village` FOREIGN KEY (`id_vill`) REFERENCES `village` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `picofculture`
--
ALTER TABLE `picofculture`
  ADD CONSTRAINT `fk_pic_culture` FOREIGN KEY (`id_cul`) REFERENCES `culture` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `picofplace`
--
ALTER TABLE `picofplace`
  ADD CONSTRAINT `fk_pic_plance` FOREIGN KEY (`id_pln`) REFERENCES `place` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `picofproducts`
--
ALTER TABLE `picofproducts`
  ADD CONSTRAINT `fk_pic_product` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `fk_plance_ctgry` FOREIGN KEY (`id_ctgry`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_plance_village` FOREIGN KEY (`id_vill`) REFERENCES `village` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_pro_plance` FOREIGN KEY (`id_pln`) REFERENCES `place` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `village`
--
ALTER TABLE `village`
  ADD CONSTRAINT `fk_village_s_dis` FOREIGN KEY (`id_dis`) REFERENCES `sub_district` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
