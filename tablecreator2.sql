
-- replace the db name univ with the proper DB name, per homework requirement.

-- drop database if exists antdishi_userstorage;
-- create database antdishi_userstorage;
-- use antdishi_userstorage;
 -- rating and visit amount table for each page   
-- sample table creating  code
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
-- Step #1 Insert products into the review page.
-- insertion query (pname, purl, pimage, 0,0,0,0,0,0,0); for each product
-- example 
-- insert into review values('dsp1','purl','pimageurl',0,0,0,0,0,0,0);


-- review table for each produce. 
-- Name them for  your initials and p#. 
-- example below. 
create table dsp1
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp2
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp3
(review varchar(200),
star varchar (30),
primary key(review,star));
create table dsp4
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp5
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp6
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp7
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp8
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp9
(review varchar(200),
star varchar (30),
primary key(review));
create table dsp10
(review varchar(200),
star varchar (30),
primary key(review));





