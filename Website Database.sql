create database if not exists Webdatabase;
use Webdatabase;
create table if not exists colleges(
id int auto_increment primary key,
collegeName varchar(40),
admissionStatus varchar(40),
publicOrPrivate varchar(40),
milesFromhome int,
preferredCollege varchar(10));
insert into colleges (
collegeName, admissionStatus, publicOrPrivate, milesFromhome, preferredCollege)
values
('UCLA','Accepted','Public',350,'Yes'),
('SJSU','Accepted','Public',20,'Yes'),
('USC','Accepted','Private',360,'Yes'),
('Stanford','Deferred','Private',14,'Yes'),
('MIT','Accepted','Private',3100,'Yes'),
('UCB','Rejected','Public',30,'No'),
('CMU','Rejected','Private',2600,'No'),
('Cal Poly SLO','Accepted','Public',200,'No'),
('Harvard','Rejected','Private',3100,'Yes');
