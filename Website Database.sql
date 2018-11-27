show databases;
create database c9;
use c9;
create table test(
id int auto_increment primary key,
fName varchar(40),
lName varchar(40),
gender varchar(1),
age int,
favColor varchar(10));
insert into test (
fFame, lName, gender, age, favColor)
values
('Tom','Riddle,'m','43,'black'),
('Harry','Potter','m',17,'blue');

