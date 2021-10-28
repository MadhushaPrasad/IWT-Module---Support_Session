CREATE DATABASE bookshop;
USE bookshop;

CREATE TABLE sales(
bookid VARCHAR(4),
bookName VARCHAR(30),
bookPrice FLOAT,
bookQtySold INT,
bookMonthSold VARCHAR(20),
CONSTRAINT PRIMARY KEY(bookid)
);

INSERT INTO sales VALUES("2005","Advance CSS",400,10,"May"),
						("3800","Master JS",400,40,"February"),
						("3200","HTML5 fro Beginners",450,20,"March"),
						("3600","HTML5",300,10,"April"),
						("3005","C++ Programming",300,5,"April"),
						("1004","PHP Programming",1000,11,"May");