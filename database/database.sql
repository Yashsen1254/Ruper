DROP DATABASE IF EXISTS `Ruper`;

CREATE DATABASE `Ruper`;

USE `Ruper`;    

CREATE TABLE `Admins` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `UserName` VARCHAR(255) NOT NULL,
    `Password` VARCHAR(255) NOT NULL
);

CREATE TABLE `Clients` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `UserName` VARCHAR(255) NOT NULL,
    `Password` VARCHAR(255) NOT NULL
);

CREATE TABLE `Categories` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL
);

CREATE TABLE `Products` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `CategoryId` INT NOT NULL,
    `Name` VARCHAR(255) NOT NULL,
    `Description` VARCHAR(255) NOT NULL,
    `Price` INT(11) NOT NULL,
    `ImageFileName` VARCHAR(255) NOT NULL,
    FOREIGN KEY (`CategoryId`) REFERENCES `Categories` (`Id`)
);

CREATE TABLE `Wishlists` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `ProductId` INT NOT NULL,
    `ClientId` INT NOT NULL,
    FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`),
    FOREIGN KEY (`ClientId`) REFERENCES `Clients` (`Id`)
);

CREATE TABLE `Carts` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `ProductId` INT NOT NULL,
    `ClientId` INT NOT NULL,
    `Quantity` INT(11) NOT NULL,
    FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`),
    FOREIGN KEY (`ClientId`) REFERENCES `Clients` (`Id`)
);

CREATE TABLE `Orders` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `ClientId` INT NOT NULL,
    `Status` VARCHAR(255) NOT NULL,
    `Price` INT(11) NOT NULL,
    FOREIGN KEY (`ClientId`) REFERENCES `Clients` (`Id`)
);

CREATE TABLE `OrderItems` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `OrderId` INT NOT NULL,
    `ProductId` INT NOT NULL,
    `TotalQuantity` INT(11) NOT NULL,
    `TotalPrice` INT(11) NOT NULL,
    FOREIGN KEY (`OrderId`) REFERENCES `Orders` (`Id`),
    FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`)
);

CREATE TABLE `Checkouts` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `FirstName` VARCHAR(255) NOT NULL,
    `LastName` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `Phone` VARCHAR(255) NOT NULL,
    `ZipCode` VARCHAR(255) NOT NULL,
    `City` VARCHAR(255) NOT NULL,
    `StreetAddress` VARCHAR(255) NOT NULL
);

CREATE TABLE `Payments` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `OrderId` INT NOT NULL,
    `Cash` INT(11) NOT NULL,
    FOREIGN KEY (`OrderId`) REFERENCES `Orders` (`Id`)
);

CREATE TABLE `Feedback` (
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `Message` VARCHAR(255) NOT NULL
);