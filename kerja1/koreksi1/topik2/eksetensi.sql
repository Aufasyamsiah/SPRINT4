create database login;
use login;
create table user (
    username varchar(25) not null primary key,
    password varchar(35) not null
);

insert into user(username,password)
values('muslimah','muslimah02'),
('akhwat','jannah'),
('fara','laili');