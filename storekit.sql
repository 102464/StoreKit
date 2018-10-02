/* STOREKIT DATABASE DEPLOYMENT SCRIPT */
/* Open your MYSQL Monitor and input this line and enter: 
CREATE DATABASE StoreKit;
*/
CREATE TABLE Accounts(username varchar(32),password varchar(32));
CREATE TABLE AuthKey(username varchar(32),authkey varchar(10));
CREATE TABLE Products(productname varchar(1024),productid varchar(10));
CREATE TABLE Deposits(username varchar(32),deposit varchar(10));
CREATE TABLE Payments(username varchar(32),productid varchar(10));
INSERT INTO Accounts VALUES ('admin','admin');
/* DEFAULT Account and password: admin admin */                                                            
