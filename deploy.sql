/* STOREKIT DATABASE DEPLOYMENT SCRIPT */
/* Open your MYSQL Monitor and input this line and enter: 
CREATE DATABASE StoreKit;
Then open PHPStorm, connect to your database.
Right-click the SQL command and click "run 'xxx.sql'"
Then the deployment is successfully completed
*/
CREATE TABLE Accounts(username varchar(32),password varchar(32));
CREATE TABLE AuthKey(username varchar(32),authkey varchar(10));
CREATE TABLE Products(productname varchar(1024),productid varchar(10),price decimal(16,2));
CREATE TABLE Deposits(username varchar(32),deposit decimal(16,2));
CREATE TABLE Payments(username varchar(32),productid varchar(10));
INSERT INTO Accounts VALUES ('admin','admin');
/* Create subscription */
INSERT INTO Products VALUES ('Free Subscription','46417236',0.00);
INSERT INTO Products VALUES ('Personal Subscription','15502929',5.00);
INSERT INTO Products VALUES ('Business Subscription','63562012',10.00);
INSERT INTO Products VALUES ('Enterprise Subscription','35998535',100.00);
/* DEFAULT Account and password: admin admin */                                                            
