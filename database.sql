create database tepsit_project;
use tepsit_project;
create table users
(
id int(5) not null auto_increment,
typology_user varchar(13) not null,
full_name varchar(50) not null,
surname varchar(50) not null,
address varchar(50) not null,
cap varchar(5) not null,
country varchar(50) not null,
province varchar(2) not null,
phone_numbers varchar(10) not null,
birth_of_date date not null,
fiscal_code varchar(16) not null,
email varchar(45) not null,
password varchar(45) not null,
confirm_password varchar(45) not null,
primary key(id),
unique key (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




