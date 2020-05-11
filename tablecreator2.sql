
-- replace the db name univ with the proper DB name, per homework requirement.

-- drop database if exists antdishi_userstorage;
-- create database antdishi_userstorage;
-- use antdishi_userstorage;
 -- rating and visit amount table for each page   
create table review
( pname varchar(15),
Purl varchar (100),
pimageurl varchar(100),
visit numeric(5,0),
onestar numeric(5,0),
twostar numeric(5,0),
threestar numeric (5,0),
fourstar numeric(5,0),
fivestar numeric(5,0),
Average numeric(5,0),
primary key (pname)
);
-- review table for each page
create table dp1
(review varchar(200),
star varchar (30),
primary key(review));
create table dp2
(review varchar(200),
star varchar (30),
primary key(review));
create table dp3
(review varchar(200),
star varchar (30),
primary key(review));
create table dp4
(review varchar(200),
star varchar (30),
primary key(review));
create table dp5
(review varchar(200),
star varchar (30),
primary key(review));
create table dp6
(review varchar(200),
star varchar (30),
primary key(review));
create table dp7
(review varchar(200),
star varchar (30),
primary key(review));
create table dp8
(review varchar(200),
star varchar (30),
primary key(review));
create table dp9
(review varchar(200),
star varchar (30),
primary key(review));
create table dp10
(review varchar(200),
star varchar (30),
primary key(review));


create table pp1
(review varchar(200),
star varchar (30),
primary key(review));
create table pp2
(review varchar(200),
star varchar (30),
primary key(review));
create table pp3
(review varchar(200),
star varchar (30),
primary key(review));
create table pp4
(review varchar(200),
star varchar (30),
primary key(review));
create table pp5
(review varchar(200),
star varchar (30),
primary key(review));
create table pp6
(review varchar(200),
star varchar (30),
primary key(review));
create table pp7
(review varchar(200),
star varchar (30),
primary key(review));
create table pp8
(review varchar(200),
star varchar (30),
primary key(review));
create table pp9
(review varchar(200),
star varchar (30),
primary key(review));
create table pp10
(review varchar(200),
star varchar (30),
primary key(review));

create table rmp1
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp2
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp3
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp4
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp5
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp6
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp7
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp8
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp9
(review varchar(200),
star varchar (30),
primary key(review));
create table rmp10
(review varchar(200),
star varchar (30),
primary key(review));




create table rap1
(review varchar(200),
star varchar (30),
primary key(review));
create table rap2
(review varchar(200),
star varchar (30),
primary key(review));
create table rap3
(review varchar(200),
star varchar (30),
primary key(review));
create table rap4
(review varchar(200),
star varchar (30),
primary key(review));
create table rap5
(review varchar(200),
star varchar (30),
primary key(review));
create table rap6
(review varchar(200),
star varchar (30),
primary key(review));
create table rap7
(review varchar(200),
star varchar (30),
primary key(review));
create table rap8
(review varchar(200),
star varchar (30),
primary key(review));
create table rap9
(review varchar(200),
star varchar (30),
primary key(review));
create table rap10
(review varchar(200),
star varchar (30),
primary key(review));


-- insertion query (pname, purl, pimage, 0,0,0,0,0,0,0);
-- insert into review values('dp1',0,0,0,0,0,0,0);



