CREATE DATABASE employee;
USE employee;

CREATE TABLE salary(
empID INT(4),
empName VARCHAR(50),
BasicSalary INT(6),
OTRate FLOAT,
OTHours INT(11),
Months TINYINT(10),
CONSTRAINT PRIMARY KEY(empID)
);