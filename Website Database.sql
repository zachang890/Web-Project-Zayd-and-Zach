create database if not exists Webdatabase;
use Webdatabase;
create table if not exists test(
id int auto_increment primary key,
fName varchar(40),
lName varchar(40),
gender varchar(1),
age int,
favColor varchar(10));
insert into test (
fName, lName, gender, age, favColor)
values
('Tom','Riddle','m',43,'black'),
('Harry','Potter','m',17,'blue');
