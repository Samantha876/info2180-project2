-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 07:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

/*SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";*/


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: schema
--
DROP DATABASE IF EXISTS schemadb;
CREATE DATABASE  schemadb;
USE schemadb;

-- --------------------------------------------------------

--
-- Table structure for table   issues  
--

DROP TABLE IF EXISTS  issues  ;
CREATE TABLE    issues   (
    id   int(11) NOT NULL DEFAULT 1,
    title   varchar(35) NOT NULL,
    description   text NOT NULL,
    type   varchar(35) NOT NULL,
    priority   varchar(35) NOT NULL,
    status   varchar(35) NOT NULL,
    assigned_to   int(11) NOT NULL,
    created_by   int(11) NOT NULL,
    created   datetime(6) NOT NULL DEFAULT current_timestamp,
    updated   datetime(6) NOT NULL,
  PRIMARY KEY (id)
);

-- --------------------------------------------------------

--
-- Table structure for table   users  
--

DROP TABLE IF EXISTS   users  ;
CREATE TABLE    users   (
    id   int(11) NOT NULL DEFAULT 3,
    firstname   varchar(35) not null DEFAULT '',
    lastname   varchar(35) NOT NULL DEFAULT '',
    password   varchar(16) NOT NULL, 
    email   varchar(320) NOT NULL,
    date_joined   datetime(6) NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (id)
) ;


INSERT INTO users(id, password, email) VALUES (1,SHA1('password123'),'admin@project2.com');
insert into users(id, firstname,lastname,password,email) values(2,'Mickey', 'Mouse',SHA1('passwordm'), 'mickeymouse@disney.com');
insert into issues(title,description,type, priority,status,assigned_to,created_by) values ('Home screen','Need to create a proper home screen','bug','high','open',2,1);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;