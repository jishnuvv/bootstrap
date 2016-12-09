-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 06:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `conformrequest` (IN `send` INT, IN `receive` INT)  begin
update friend set active=1 where sender=send  and receiver=receive;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `friend1` (IN `sender` INT, IN `receiver` INT, IN `active` INT)  begin
insert into friend(sender,receiver,active)values(sender,receiver,active); 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `friendrequest` (IN `reciever` INT)  begin
select id,firstname,lastname,file,mobileno from user1 join friend on id=sender where receiver=reciever and active=0;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `photo_upload` (IN `id` INT, IN `photo` VARCHAR(50), IN `fname` VARCHAR(20), IN `file` VARCHAR(30), IN `lname` VARCHAR(30))  begin
insert into photo_upload(user_id,photo,firstname,file,lastname)values(id,photo,fname,file,lname);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `statusupdate` (IN `id` INT, IN `status` VARCHAR(140), IN `firstname` VARCHAR(20), IN `file` VARCHAR(30), IN `lname` VARCHAR(30))  begin
insert into update_status(userid,status,firstname,file,lastname)values(id,status,firstname,file,lname);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `unfriend` (IN `uid` INT, IN `fid` INT)  begin
update friend set active=0 where (sender=uid and receiver=fid) or (sender=fid and receiver=uid);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `user` (IN `fname` VARCHAR(20), IN `sname` VARCHAR(20), IN `email` VARCHAR(30), IN `password` VARCHAR(20), IN `file` VARCHAR(20), IN `birthday` DATE, IN `gender` VARCHAR(20))  begin
insert into user1(firstname,lastname,mobileno,password,file,birthday,gender)values(fname,sname,email,password,file,birthday,gender);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `user1` (IN `name` VARCHAR(20))  begin
select * from user1 where firstname=name or lastname=name; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `veiwfriends` (IN `uid` INT)  begin
select id,firstname,lastname,file from user1 join friend on (id= sender or id=receiver) where (sender=uid or receiver=uid)and active=1 AND id<>uid;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewphotos` (IN `stid` INT)  begin
select firstname,lastname,file,photo,photo_id from photo_upload join friend on (user_id=sender or user_id=receiver) where(receiver=stid  or sender=stid ) and active=1 and user_id<>stid ;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewstatus` (IN `stid` INT)  begin
select firstname,lastname,file,status from update_status join friend on (userid=sender or userid=receiver) where (receiver=stid or sender=stid) and active=1 and userid<>stid;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`sender`, `receiver`, `active`) VALUES
(2, 1, 1),
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_upload`
--

CREATE TABLE `photo_upload` (
  `user_id` int(11) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `photo_id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `file` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_upload`
--

INSERT INTO `photo_upload` (`user_id`, `photo`, `photo_id`, `firstname`, `file`, `lastname`) VALUES
(2, 'Desert.jpg', 1, 'syama', 'Hydrangeas.jpg', 't'),
(2, 'Koala.jpg', 2, 'syama', 'Hydrangeas.jpg', 't');

-- --------------------------------------------------------

--
-- Table structure for table `update_status`
--

CREATE TABLE `update_status` (
  `userid` int(11) DEFAULT NULL,
  `status` varchar(140) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `file` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_status`
--

INSERT INTO `update_status` (`userid`, `status`, `firstname`, `file`, `lastname`) VALUES
(2, ' hii friends\n					', 'syama', 'Hydrangeas.jpg', 't');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `file` varchar(20) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `firstname`, `lastname`, `mobileno`, `password`, `file`, `birthday`, `gender`) VALUES
(1, 'jishnu', 'vv', 'jishnuvv61@gmail.com', 'JISHNUvv??123', 'Chrysanthemum.jpg', '1997-12-15', 'male'),
(2, 'syama', 't', 'syamadamodharan96@gmail.com', 'SYAMAdh??123', 'Hydrangeas.jpg', '1988-12-31', 'female'),
(3, 'jyothish', 's', 'jyothishsj713@gmail.com', 'JYOTHISHsj??123', 'Jellyfish.jpg', '1994-03-03', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo_upload`
--
ALTER TABLE `photo_upload`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photo_upload`
--
ALTER TABLE `photo_upload`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
