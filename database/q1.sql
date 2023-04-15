
drop table dinning;
drop table room;
drop table billing;
drop table cab;
drop table manage;
drop table handle ;
drop table feedback;
drop table customer;
drop table employee;
drop table admin;



create table admin(adm_id int primary key,name varchar(20),age int,adm_mobile varchar(20));
\d admin;
INSERT INTO admin VALUES(11,'Shubham',45,9567834565);
INSERT INTO admin VALUES(12,'Varad',56,9657370043);
INSERT INTO admin VALUES(13,'Yash',37,8237474149);
INSERT INTO admin VALUES(14,'Akash',19,7708978935);
INSERT INTO admin VALUES(15,'Salman',23,9874567431);



create table employee(emp_id int primary key, name varchar(20),age int,salary money,emp_mobile varchar(20),feedback varchar(100));
\d employee;

INSERT INTO employee VALUES(20,'Prasad',47,'50000',9874566767);
INSERT INTO employee VALUES(21,'Nilesh',41,'100000',9334567851);
INSERT INTO employee VALUES(22,'Abhishek',39,'150000',9456784551);
INSERT INTO employee VALUES(23,'Aditya',32,'300000',8765894513);
INSERT INTO employee VALUES(24,'Mayur',67,'250000',7895674512);



create table customer(cust_id int primary key, cust_name varchar(20),cust_mobile int);
\d customer;

create table feedback(adm_id int references admin(adm_id) on delete cascade on update set NULL,cust_id int references customer(cust_id)on delete cascade on update set NULL);
\d customer;

create table handle(cust_id int references customer(cust_id) on delete cascade on update set NULL,emp_id int references employee(emp_id)  on delete cascade on update set NULL);
\d handle;


//changes
create table manage(adm_id int references admin(adm_id) on delete cascade on update set NULL,emp_id int references employee(emp_id)on delete/ cascade on update set NULL);
\d manages;

create table cab(cab_no varchar(10) primary key,cab_driver char(120),cab_rating int, cab_mobile int, cust_id int references customer(cust_id));
\d cab;

create table billing(bill_no int primary key,bill money,cust_id int references customer(cust_id));
\d billing;

create table room(room_no int primary key,room_type varchar(20),room_rating int,room_rate money,cust_id int references customer(cust_id), bill_no int references billing(bill_no) UNIQUE);
\d room;

create table dinning(table_no int primary key,dinning_type varchar(10),cust_id int references customer(cust_id), bill_no int references billing(bill_no) UNIQUE);
\d dinning;






select * from admin;
select * from employee;
select * from customer;
select * from feedback;
select * from handle;
select * from manage;
select * from cab;
select * from room;
select * from dinning;
select * from billing;
