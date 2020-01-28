-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 03:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih20`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `name` varchar(75) NOT NULL,
  `alumni_id` varchar(50) NOT NULL,
  `rno` varchar(20) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `stat1` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `stat2` varchar(20) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `verified` int(5) NOT NULL,
  `pass_rec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`name`, `alumni_id`, `rno`, `password`, `mobile`, `address`, `dob`, `email`, `stat1`, `sex`, `college`, `year`, `stat2`, `des`, `verified`, `pass_rec`) VALUES
('PRIYANSHU GOEL', 'asdf', '027', 'e4cd965813bcdd73e3e9f07727b034dc', '9219892506', 'Vishal book depot,Ghanta Ghar,Railway Road,Meerut', '2020-01-02', 'princegoel1999pg@gmail.com', 'Married', 'Male', 'Ann Institute of Engineering', '2018', 'Startup', 'SXJWCIQWNCJN ENJWNEJFVNJVNFJDNVJSFNVJKFNKJFNJVN JNJSFNJJDFJBFFDBJDJJSJSJCSNCSJSCSCSCJNSCJSCJNSCSCSSCSCBSCNBSC', 0, 'NULL'),
('PRINCE GOEL', 'goel995', '1402712', 'e4cd965813bcdd73e3e9f07727b034dc', '6398216904', 'GALI NO 7, SHIV SHAKTI NAGAR, MEERUT', '8952-06-05', 'goelpriyanshu99@gmail.com', 'Unmarried', 'Male', 'Govt College of Arts & Commerce, Panjim', '2015', 'Startup', 'wfqejrh2erijhgufvwefbvwurbyubtrvfuwbeewbfhebyfvyfbvbdwbdchedbc hd cnd chkwfbvwhbchvwdbhcgwfvgbfcwnc san jqhbhebvhvbvvvvv', 1, 'NULL'),
('rishabh tyagi', 'rishabh', '16441761', 'e4cd965813bcdd73e3e9f07727b034dc', '4567859066', 'thrsyd', '2004-01-17', 'princegoel1999pg@gmail.com', 'Married', 'Male', 'Govt College of Arts & Commerce, Panjim', '2017', 'Startup', 'ghjkl', 0, '0'),
('pranshat singh', '3456789', '17261417', 'e4cd965813bcdd73e3e9f07727b034dc', '2345678978', 'farsgthyujbk', '2006-01-02', 'princegoel1999pg@gmail.com', 'Married', 'Male', 'Govt College of Arts & Commerce, Panjim', '2015', 'Studies', 'gvkhbj.knm/', 0, '0'),
('Aastha garg', '66777788', '18027002', 'e4cd965813bcdd73e3e9f07727b034dc', '6778945028', 'HNO34. bansal colony,arya nagar bareilllyar', '2013-05-15', 'ava@gmail.coom', 'Unmarried', 'Female', 'Govt Engineering College, Goa', '2011', 'Job', 'uhfalgijkl', 0, '0'),
('RAHUL', '337124459960668', '1802713074115', 'e4cd965813bcdd73e3e9f07727b034dc', '0639816904', 'DELHI', '4556-03-12', 'goelpriyanshu99@gmail.com', 'Unmarried', 'Male', 'Goa college of Management', '2015', 'Studies', 'fdwhvufhuwfvhuwfvhfuwvhfuvhwufvhjvnjenwjkevnjkfnvjfvjvnjkfvbhjfvbhfvbhfvbhfvbhjfvbhjvbwhjvbfhvbwhfvbhfvbhwbhwfvbhfvbwhbhvwbjwhvbwv', 1, '0'),
('PRIYANSHU GOEL', 'asdfq', '18027130754', 'e4cd965813bcdd73e3e9f07727b034dc', '0638216904', 'GALI NO 7, SHIV SHAKTI NAGAR, MEERUT', '2001-01-01', 'chiraggoel2001@gmail.com', 'Married', 'Male', 'Goa college of Management', '2004', 'Studies', 'sdbhdbjdcjdbcncbcbsdjhcbc fbqhbfhbhqefbhbjhqqcns dcn nd cq chd bdchbdc  ebehrbhwbefvhbhedbsvhdvhjdvbjhvb', 2147483647, '0'),
('adarsh gupta', '00190876', '18271108', '8181796dcd3eab93f6db7419b37fb7a5', '4567890098', 'farsgthyu', '2019-09-06', 'fin@gmail.com', 'Married', 'Male', 'Govt College of Arts & Commerce, Panjim', '2018', 'Studies', '3rthrtykgv', 0, '0'),
('nikhil gupta', '4567890', '18271209', '95cb3384b299aff883328196a4134758', '4567867890', 'gabh', '2019-06-13', 'fit5yn@gmail.com', 'Unmarried', 'Male', 'Govt College of Arts & Commerce, Panjim', '2017', 'Startup', '3467890', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `chattb`
--

CREATE TABLE `chattb` (
  `chatid` int(20) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `chatbody` text NOT NULL,
  `chatdate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chattb`
--

INSERT INTO `chattb` (`chatid`, `userid`, `chatbody`, `chatdate`) VALUES
(1, '0', 'hii', '4:56 pm'),
(2, 'goel995', 'huuu', '4:58 pm'),
(3, 'goel995', 'hhggg', '5:02 pm'),
(4, 'goel995', 'isiisis\r\n', '5:32 pm'),
(5, 'asdf', 'kkk', '5:45 pm'),
(6, 'goel995', 'hhhh', '06:44:29pm'),
(7, 'asdf', 'jkk', '19-01-2020'),
(8, 'asdf', 'dffdfffv', '19-01-2020 23:40'),
(9, 'asdf', 'gvvgvvggvvvgv', '19-01-2020 23:40'),
(10, 'chirag', 'hi', '20-01-2020 00:44'),
(11, 'asdf', 'gggyhbb', '20-01-2020 09:21'),
(12, 'goel995', 'jdjd\r\n', '20-01-2020 12:18'),
(13, 'goel995', 'harsh', '20-01-2020 12:19'),
(14, 'goel995', 'ddddd', '20-01-2020 14:37');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `coll_id` varchar(50) NOT NULL,
  `coll_name` varchar(250) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`coll_id`, `coll_name`, `pass`) VALUES
('124@manage', 'Goa college of Management', '9fa3b1eda6a5d2e81e234f432386fb58'),
('agnel@207', 'Agnel Institute of Technology and Design', '9561ea4d6f696df98ee98665ec05409b'),
('ann@19', 'Ann Institute of Engineering', 'd0c986c85c74e7ef97fdb038edc0567a'),
('arceng17', 'Goa college of Architecture', '6578514ba586a4911eb60a3beaf9eeb0'),
('artseng@21', 'Goa college of Arts', 'ecd489bb853c5eb530144796898e8095'),
('carmel@24', 'Carmel College of Arts & Commerce', '38c6624be011e90542a20aac71bfa21d'),
('ces124', 'CES College of Arts & Commerce', '8ec5b1419a1312cb242f0372ab1f93d2'),
('collegeeng@11', 'College of Engineering', '26a8fec1f74d6437eea13cb68a10cc17'),
('culinary@123', 'Academy of Culinary Education', '559fd617f96319684b6f3c05417b944d'),
('engineer72', 'Goa Engineering College, Ponda', '042d17d01f6afd49cca6af84558a1719'),
('gecgoa@23', 'Govt Engineering College, Goa', 'afdcd6650be8d957efa3f19f27dea6ec'),
('goapanjim98', 'Govt College of Arts & Commerce, Panjim', '38616463f88f372d3aa39959e52795b6'),
('goasc@121', 'Govt College of Arts, Science & Commerce, Khandola', '17722abc2efe63a8d7de6e71d63820de'),
('govsanquel117', 'Govt College of Arts, Science & Commerce, Sanquel', '523f2a2bade11217d7f23cf406910c4a'),
('iohm231', 'Institute of Hotel Management,Goa', 'ac4c2a043f8b9658288558380e3d1406'),
('iphbgov@13', 'IPHB, Bambolim', 'a92bac768b7d5a115d9388d592b5312f'),
('learninst@01', 'Engineers Learning Institute', '0dbcffee21df418e70f2750d1ef852d9'),
('medical@25', 'Goa Medical College', 'b2f38768ca5fc9510d00644223247de5'),
('music197', 'Goa college of Music, Panjim', '70c1bd8867557cd03a374dd30044f495'),
('panjim123', 'Goa college of Home Science,Panjim', 'fc47e781e51a8dd55c011d3829a10c91'),
('pernem@91', 'Govt College of Arts & Commerce, Pernem', '0e9d5c15f0503c3d314be841921c8b2a'),
('pharmacy@12', 'Goa college of Pharmacy', 'df5dda181ee1f8034c8191de3a813cb5');

-- --------------------------------------------------------

--
-- Table structure for table `colortb`
--

CREATE TABLE `colortb` (
  `colorid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `colorbg` varchar(20) NOT NULL,
  `colortxt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colortb`
--

INSERT INTO `colortb` (`colorid`, `username`, `colorbg`, `colortxt`) VALUES
(1, 'goel995', 'orange', 'red'),
(2, 'asdf', 'red', 'peach'),
(3, 'ashish', 'skyblue', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `col_alumni`
--

CREATE TABLE `col_alumni` (
  `rno` varchar(50) NOT NULL,
  `name` varchar(75) NOT NULL,
  `year` varchar(10) NOT NULL,
  `col_name` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_alumni`
--

INSERT INTO `col_alumni` (`rno`, `name`, `year`, `col_name`) VALUES
('027', 'PRIYANSHU GOEL', '2018', 'Ann Institute of Engineering'),
('0271', 'PRIYANSHU GOEL', '2018', 'Ann Institute of Engineering'),
('1001279', 'Mayank kumar', '2017', 'Goa college of Music, Panjim'),
('1002480', 'Hemant yadav', '2018', 'Goa college of Music, Panjim'),
('10112775', 'Gunjan sharma', '2015', 'Engineers Learning Institute'),
('1042485', 'Piyush Pandey', '2010', 'Goa college of Arts'),
('1084285', 'Farhan Kureshi', '2008', 'Goa college of Arts'),
('1094599', 'Payal Sharma', '2009', 'Goa college of Arts'),
('1112273', 'Sushil Pant', '2009', 'Ann Institute of Engineering'),
('111441128', 'Deepika Singh', '2011', 'Goa college of Arts'),
('111770014', 'Kavish Bhatia', '2011', 'Goa college of Arts'),
('11275401', 'Mukul kumar', '2015', 'Goa Medical College'),
('113248', 'Abhinay singh', '2012', 'Goa college of Music, Panjim'),
('1174394', 'Ritika Gautam', '2011', 'Ann Institute of Engineering'),
('11887765', 'Neeraj Kumar', '2008', 'Goa college of Architecture'),
('1216581', 'Aashi', '2012', 'Goa college of Pharmacy'),
('1248011', 'Riya garg', '2019', 'Goa college of Music, Panjim'),
('12481024', 'Arnav Jain', '2012', 'Goa college of Arts'),
('12617174', 'Mitali jain', '2012', 'Govt College of Arts & Commerce, Pernem'),
('1275407', 'Gunjan sharma', '2015', 'Goa Medical College'),
('1278819', 'Madhur saxena', '2015', 'Goa college of Home Science,Panjim'),
('129945', 'Saumya', '2011', 'Goa college of Music, Panjim'),
('1324551', 'Sumit jain', '2015', 'Goa college of Pharmacy'),
('13412412', 'Shruti singh', '2019', 'Govt College of Arts & Commerce, Pernem'),
('1348018', 'Parul singh', '2015', 'Goa college of Music, Panjim'),
('13500017', 'Ridhi sharma', '2014', 'Goa Medical College'),
('14027121', 'Vishal jain', '2014', 'Govt College of Arts & Commerce, Panjim'),
('14121474', 'Prince yadav', '2012', 'Govt College of Arts, Science & Commerce, Sanquel'),
('14127456', 'Mukul kumar', '2018', 'Institute of Hotel Management,Goa'),
('1417118', 'Manas khera', '2018', 'Govt College of Arts, Science & Commerce, Khandola'),
('14211291', 'Deepti kumari', '2019', 'Govt College of Arts, Science & Commerce, Sanquel'),
('14213169', 'Raju Rastogi', '2014', 'Goa college of Arts'),
('1425462252', 'jatin kumar', '2017', 'Goa college of Management'),
('14265044', 'Rahul ojha', '2017', 'Govt College of Arts & Commerce, Pernem'),
('1426678', 'Aman dixit', '2014', 'Goa college of Pharmacy'),
('14277843', 'Akash bansal', '2016', 'Goa college of Pharmacy'),
('1432816', 'Devi Chand', '2015', 'Ann Institute of Engineering'),
('1443214161', 'RISHAB TYAGI', '2014', 'Goa college of Management'),
('1451278', 'Disha jain', '2014', 'IPHB, Bambolim'),
('1464646', 'Bablu Yadav', '2005', 'Goa college of Architecture'),
('148592', 'Shivam Giri', '2004', 'Goa college of Architecture'),
('1495438', 'Ayushi Panchal', '2008', 'Ann Institute of Engineering'),
('1500265', 'Karan yadav', '2014', 'Govt College of Arts & Commerce, Pernem'),
('1501127', 'Neha gautam', '2011', 'Govt College of Arts, Science & Commerce, Khandola'),
('15027111', 'Deepali singh', '2013', 'Govt Engineering College, Goa'),
('15045321', 'Pinki Tyagi', '2015', 'Goa college of Arts'),
('15121284', 'Shivam dubey', '2014', 'Govt College of Arts, Science & Commerce, Sanquel'),
('151271154', 'Jayant kumar', '2015', 'IPHB, Bambolim'),
('15271129', 'Pranat sharma', '2017', 'Institute of Hotel Management,Goa'),
('15271181', 'Ishita gupta', '2018', 'Institute of Hotel Management,Goa'),
('1531341512', 'Akrushi kulshreshta', '2013', 'Goa college of Management'),
('15414141', 'Aditi Aghnihotri', '2015', 'Goa college of Arts'),
('1544669', 'Tushar kaura', '2015', 'Goa college of Pharmacy'),
('15450011', 'Yukti gupta', '2018', 'Govt College of Arts & Commerce, Panjim'),
('1588911', 'Ashish Dhami', '2011', 'Goa Medical College'),
('1601123', 'Nikhil  gupta', '2016', 'Govt College of Arts, Science & Commerce, Khandola'),
('160270094', 'Jatin jain', '2018', 'IPHB, Bambolim'),
('16027105', 'Anjul kumar', '2011', 'Govt Engineering College, Goa'),
('16112749', 'Muskan mittal', '2015', 'Goa college of Home Science,Panjim'),
('16120113', 'Aayushi sharma', '2017', 'Govt College of Arts, Science & Commerce, Sanquel'),
('1612588', 'Vikash singh', '2011', 'Goa college of Pharmacy'),
('161271125', 'Rishabh Yadav', '2014', 'Institute of Hotel Management,Goa'),
('1612778', 'Rampal tiwari', '2016', 'Goa Medical College'),
('16271181', 'Deepak sharma', '2015', 'Institute of Hotel Management,Goa'),
('16441761', 'Rishabh Tyagi', '2017', 'Govt College of Arts & Commerce, Panjim'),
('16441762', 'Sumit kumar', '2017', 'Govt College of Arts & Commerce, Panjim'),
('170270054', 'Komal gupta', '2017', 'IPHB, Bambolim'),
('17027104', 'Aditi singh', '2015', 'Govt Engineering College, Goa'),
('17027109', 'Ankit kumar', '2017', 'Govt Engineering College, Goa'),
('170271112', 'Twinkle singh', '2015', 'Institute of Hotel Management,Goa'),
('17027112', 'Anshita kapoor', '2012', 'Govt Engineering College, Goa'),
('170273145', 'Rajat Goel', '2017', 'Goa college of Arts'),
('17120154', 'Sagar yadav', '2018', 'Govt College of Arts, Science & Commerce, Sanquel'),
('17181128', 'Yash kumar', '2012', 'IPHB, Bambolim'),
('172476', 'Ritul agrawal', '2018', 'Goa college of Pharmacy'),
('17251194', 'Gaurav singh', '2016', 'Govt College of Arts & Commerce, Pernem'),
('17261151', 'Mayank kumar', '2015', 'Govt College of Arts & Commerce, Pernem'),
('17261301', 'Pranjal yadav', '2016', 'Govt College of Arts & Commerce, Panjim'),
('17261417', 'Prashant singh', '2015', 'Govt College of Arts & Commerce, Panjim'),
('17271145', 'Aryan verma', '2019', 'Goa college of Home Science,Panjim'),
('17271201', 'Prachi singh', '2016', 'Govt College of Arts & Commerce, Panjim'),
('172884', 'Shivam goyal', '2012', 'Goa college of Pharmacy'),
('17452911', 'Ankit tyagi', '2013', 'Institute of Hotel Management,Goa'),
('1750454895', 'Ashish Chauhan', '2016', 'Goa college of Management'),
('17841561', 'Arvind dixit', '2014', 'Institute of Hotel Management,Goa'),
('18012911', 'Vineet pal', '2015', 'Govt College of Arts, Science & Commerce, Sanquel'),
('18021001', 'Rakshit singh', '2016', 'Govt College of Arts, Science & Commerce, Sanquel'),
('18025004', 'Ridhi singh', '2015', 'Govt College of Arts, Science & Commerce, Sanquel'),
('18027002', 'Aastha garg', '2011', 'Govt Engineering College, Goa'),
('18027003', 'Abay joshi', '2014', 'Govt Engineering College, Goa'),
('180270055', 'Ishita singh', '2017', 'IPHB, Bambolim'),
('18027007', 'Anmol gupta', '2014', 'Govt Engineering College, Goa'),
('180271012', 'Hariom gupta', '2017', 'Institute of Hotel Management,Goa'),
('180271013', 'Chandan singh', '2016', 'Institute of Hotel Management,Goa'),
('18027112', 'Om  prakash', '2018', 'Govt College of Arts, Science & Commerce, Khandola'),
('18027114', 'Mansi goyal', '2016', 'Goa college of Home Science,Panjim'),
('180271209', 'Nikhil  gupta', '2017', 'Govt College of Arts & Commerce, Panjim'),
('180271307411', 'RAHUL', '2015', 'Goa college of Management'),
('1802713074115', 'RAHUL', '2015', 'Goa college of Management'),
('180271311', 'Harshita Sharma', '2014', 'Ann Institute of Engineering'),
('18027229', 'Harsh gupta', '2018', 'Goa college of Home Science,Panjim'),
('180273045', 'Simran Chaddha', '2018', 'Goa college of Architecture'),
('18072461', 'Riya garg', '2014', 'Govt College of Arts, Science & Commerce, Khandola'),
('18100256', 'Dev gupta', '2015', 'Govt College of Arts & Commerce, Pernem'),
('18102718', 'Shaswat tiwari', '2019', 'Goa Medical College'),
('18102774', 'Saurabh gupta', '2013', 'Goa Medical College'),
('1811024', 'Arshad Khan', '2009', 'Ann Institute of Engineering'),
('1812455', 'Rohit singh', '2014', 'Govt College of Arts, Science & Commerce, Khandola'),
('18127112', 'Utkarsh dubey', '2018', 'Govt College of Arts, Science & Commerce, Sanquel'),
('1812714', 'Vinay kumar', '2014', 'Goa college of Home Science,Panjim'),
('181277545', 'Sakshi tyagi', '2014', 'IPHB, Bambolim'),
('18210042', 'Arun kumar', '2016', 'Govt College of Arts & Commerce, Pernem'),
('182700054', 'Richa tiwari', '2013', 'IPHB, Bambolim'),
('18271108', 'Adarsh gupta', '2018', 'Govt College of Arts & Commerce, Panjim'),
('18271121', 'Mohita shayam', '2017', 'Govt College of Arts, Science & Commerce, Khandola'),
('1827115', 'Aashish singh', '2015', 'Govt College of Arts, Science & Commerce, Khandola'),
('18401192', 'Anushka kant', '2017', 'Govt College of Arts & Commerce, Pernem'),
('18441925', 'Suman Singh', '2019', 'Govt College of Arts & Commerce, Panjim'),
('1899451', 'Anuj kumar', '2015', 'Goa college of Pharmacy'),
('19127011', 'Lakhan gupta', '2019', 'Govt College of Arts, Science & Commerce, Sanquel'),
('19181274', 'Suryaman singh', '2011', 'IPHB, Bambolim'),
('1925167', 'Harshita awal', '2019', 'Goa college of Pharmacy'),
('1925888', 'Ayush khurana', '2018', 'Goa Medical College'),
('19271254', 'Hina kumari', '2013', 'IPHB, Bambolim'),
('1974112', 'Archie agrawal', '2014', 'Govt College of Arts, Science & Commerce, Khandola'),
('1979114', 'Mansi gupta', '2012', 'Govt College of Arts, Science & Commerce, Khandola'),
('1982748', 'Devansh Mittal', '2014', 'Goa college of Home Science,Panjim'),
('1992743', 'Ayush garg', '2012', 'Goa college of Home Science,Panjim'),
('2012', 'Anamika Dudeja', '2012', 'Goa college of Architecture'),
('2112915', 'Shivam singh', '2016', 'Goa college of Home Science,Panjim'),
('2245138', 'Gagan Singh', '2010', 'Ann Institute of Engineering'),
('2345', 'amit', '2015', 'ggfggg'),
('24519756', 'Kangna Saxena', '2016', 'Agnel Institute of Technology and Design'),
('2451977', 'Mukul shyam', '2016', 'Engineers Learning Institute'),
('245432', 'Ishan Agarwal', '2014', 'Goa college of Architecture'),
('2455677', 'Lokesh singh', '2018', 'Goa Medical College'),
('2711295', 'Divya rana', '2015', 'Goa college of Home Science,Panjim'),
('3114528', 'Ishika Gupta', '2011', 'Goa college of Architecture'),
('3115145411', 'vijay kant', '2014', 'Goa college of Management'),
('432151', 'Akshit tyagi', '2014', 'Goa college of Music, Panjim'),
('44221135', 'Rishab Jalan', '2007', 'Goa college of Architecture'),
('4587612', 'Hitesh Tripathi', '2017', 'Ann Institute of Engineering'),
('525119', 'Shub shah', '2018', 'Engineers Learning Institute'),
('526251', 'Abdul sameed', '2018', 'Engineers Learning Institute'),
('5294521', 'Ayub Soreng', '2015', 'Agnel Institute of Technology and Design'),
('541132', 'Shubham singh', '2012', 'Goa college of Music, Panjim'),
('546841553', 'Daksh Shrivastav', '2016', 'Goa college of Management'),
('54698412', 'Kamal Kant Tyagi', '2015', 'Agnel Institute of Technology and Design'),
('55549545', 'Nirmal chaurasia', '2011', 'Goa college of Management'),
('5915907', 'Manmeet Kaur', '2011', 'Goa college of Architecture'),
('592520', 'Rita Kashyap', '2013', 'Agnel Institute of Technology and Design'),
('5925917', 'Rishu xalxo', '2015', 'Agnel Institute of Technology and Design'),
('59259514', 'Vishal Chaudhary', '2016', 'Goa college of Architecture'),
('625005', 'Rajat gupta', '2019', 'Engineers Learning Institute'),
('6464899', 'Aman patel', '2017', 'Engineers Learning Institute'),
('66458251', 'Khushi Rajpoot', '2012', 'Goa college of Management'),
('725114', 'Amisha tyagi', '2014', 'Engineers Learning Institute'),
('7481104', 'Deeksha Singh', '2017', 'Ann Institute of Engineering'),
('754294', 'Vaibhav singh', '2017', 'Engineers Learning Institute'),
('754355', 'Tarun', '2016', 'Engineers Learning Institute'),
('789456123', 'Pulkit Kukreja', '2008', 'Agnel Institute of Technology and Design'),
('8011438', 'Aksh Pundir', '2017', 'Ann Institute of Engineering'),
('852743691', 'Bhuvan kulkarni', '2014', 'Agnel Institute of Technology and Design'),
('854399', 'Sumit kumar', '2015', 'Engineers Learning Institute'),
('856473', 'Ankita Das', '2009', 'Agnel Institute of Technology and Design'),
('874214511', 'Rohit kashyap', '2014', 'Goa college of Management'),
('874596', 'Anusha Kansal', '2013', 'Agnel Institute of Technology and Design'),
('95175348', 'Devika Maurya', '2013', 'Agnel Institute of Technology and Design'),
('95486721', 'Neha Rai', '2013', 'Agnel Institute of Technology and Design'),
('9981127', 'Garvit gupta', '2017', 'Goa Medical College');

-- --------------------------------------------------------

--
-- Table structure for table `col_event`
--

CREATE TABLE `col_event` (
  `id` varchar(50) NOT NULL,
  `on_d` varchar(10) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `college` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `col_event`
--

INSERT INTO `col_event` (`id`, `on_d`, `sub`, `detail`, `college`) VALUES
('001', '2020-01-22', 'Hello', 'For all alumni', 'Goa college of Management'),
('21', '2020-01-30', 'dvdfdderg', 'grgrg', 'Goa college of Management');

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `id` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`id`, `password`) VALUES
('directorate2goa', '1864aae2c9bf22108bbba4a3a9792589');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_date` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `add_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_date`, `id`, `subject`, `detail`, `add_time`) VALUES
('2020-01-22', '21', 'previous', 'gahshshdjdjsjs', '2020-01-17 13:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `from_date` varchar(20) NOT NULL,
  `to_date` varchar(20) NOT NULL,
  `id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`from_date`, `to_date`, `id`, `subject`, `detail`, `time`) VALUES
('2020-01-20', '2020-01-23', '001', 'Hello', 'this is for testing purpose', '2020-01-17 01:21:50'),
('2020-01-20', '2020-01-21', '2525', 'Registration', 'Registration for fresh semester will be starting from 20th January', '2020-01-20 08:58:33'),
('2020-01-18', '2020-01-19', '30214', 'meeting', 'presentation', '2020-01-18 13:48:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`rno`),
  ADD UNIQUE KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `chattb`
--
ALTER TABLE `chattb`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`coll_id`);

--
-- Indexes for table `colortb`
--
ALTER TABLE `colortb`
  ADD PRIMARY KEY (`colorid`);

--
-- Indexes for table `col_alumni`
--
ALTER TABLE `col_alumni`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `col_event`
--
ALTER TABLE `col_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chattb`
--
ALTER TABLE `chattb`
  MODIFY `chatid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `colortb`
--
ALTER TABLE `colortb`
  MODIFY `colorid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
