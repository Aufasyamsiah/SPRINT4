create database pondok;
use pondok;
create table login (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    name varchar(255) not null primary key,
    password varchar(255) not null
);

insert into login(id,name,password)
values('muslimah','m321'),
