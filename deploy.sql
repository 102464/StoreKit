/* STOREKIT DATABASE DEPLOYMENT SCRIPT */
/* Open your MYSQL Monitor and input this line and enter: 
CREATE DATABASE StoreKit;
Then open PHPStorm, connect to your database.
Right-click the SQL command and click "run 'xxx.sql'"
Then the deployment is successfully completed
*/
CREATE TABLE Accounts(username varchar(32),password varchar(32));
CREATE TABLE AuthKey(username varchar(32),authkey varchar(10));
CREATE TABLE Products(productname varchar(1024),productid varchar(10));
CREATE TABLE Deposits(username varchar(32),deposit decimal(16,2));
CREATE TABLE Payments(username varchar(32),productid varchar(10));
INSERT INTO Accounts VALUES ('admin','admin');
/* DEFAULT Account and password: admin admin */                                                            
