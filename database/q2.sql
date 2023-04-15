drop table manages;
drop table handles;
drop table cab;
drop table feedback;
drop table din_billing;
drop table dinning;
drop table room_billing;
drop table room;
drop table admin;
drop table emp;
drop table cust CASCADE;


create table cust(cust_username varchar(20) primary key, cust_name varchar(40), cust_mob varchar(10), cust_email varchar(30)UNIQUE,cust_pass varchar(20),cust_feedback varchar(100),cust_source_addr varchar(30));
\d cust; 


create table emp(emp_id int primary key, emp_name varchar(40), emp_mob varchar(10),emp_email varchar(30), emp_username varchar(20),emp_age int, emp_salary money, emp_pass varchar(20));
\d emp;
INSERT INTO emp VALUES(20,'Yash',8237474149,'mehtaus0208@gmail.com','yash_mehta123',20,'320000','shubhstar');
INSERT INTO emp VALUES(21,'Shubham',8237678904,'shubhstar123@gmail.com','shubhstar123',23,'23567','kariya');
INSERT INTO emp VALUES(22,'Varad',9657370043,'vara456@gmail.com','vara456',24,'25000','MCS');
INSERT INTO emp VALUES(23,'Akash',7709524356,'akash10@gmail.com','akash_10',26,'36500','MSC');
INSERT INTO emp VALUES(24,'Atharva',8790789045,'atharva545@gmail.com','atharva231',28,'46000','MBA');


create table admin(admin_name varchar(20) primary key, admin_mob varchar(10), admin_age int, admin_pass varchar(20),emp_id int references emp(emp_id) on delete cascade on update set null);
\d admin;




create table room(room_type varchar(20) primary key, room_rating varchar(10), room_rate numeric(100), cust_username varchar(20) references cust(cust_username) on delete cascade on update set NULL);
\d room;


INSERT INTO room(room_type, room_rate)VALUES('Single Bed','800');
INSERT INTO room(room_type, room_rate)VALUES('Double Bed','1100');
INSERT INTO room(room_type, room_rate)VALUES('Deluxe','1900');
INSERT INTO room(room_type, room_rate)VALUES('Suits','2100');


create table room_billing(room_bill_no int primary key, cust_username varchar(20) references cust(cust_username) on delete cascade on update set NULL);
\d room_billing;






create table dinning(table_no int primary key, table_type varchar(10), cust_username varchar(20) references cust(cust_username) on delete cascade on update set NULL);
\d dinning;

create table din_billing(din_bill_no int primary key, table_no int references dinning(table_no) on delete cascade on update set NULL, cust_username varchar(20) references cust(cust_username)on delete cascade on update set NULL);
\d din_billing;



create table feedback(feedback_no int primary key,cust_feed varchar(100),admin_name varchar(20) references admin(admin_name) on delete cascade on update set NULL,cust_email varchar(30) references cust(cust_email)); 
\d feedback;


create table cab(cab_no varchar(10) primary key, cab_driver_name char(30),cab_mobile_no varchar(10), cust_username varchar(20) references cust(cust_username) on delete cascade on update set NULL, cab_source_addr varchar(30) ,cab_book_date date);
\d cab;

INSERT INTO cab(cab_no,cab_driver_name, cab_mobile_no)VALUES('MH12AC8659', 'Santosh', 9567893566);
INSERT INTO cab(cab_no,cab_driver_name, cab_mobile_no)VALUES('MH12PS7484', 'Vikas', 8679056577);
INSERT INTO cab(cab_no,cab_driver_name, cab_mobile_no)VALUES('MH12GH9201', 'Tukaram', 9379211089);
INSERT INTO cab(cab_no,cab_driver_name, cab_mobile_no)VALUES('MH12BR9211', 'Dhananjay', 7002359011);
INSERT INTO cab(cab_no,cab_driver_name, cab_mobile_no)VALUES('MH12MV6945', 'Ramesh', 9712120745);




create table handles(cust_username varchar(20) primary key references cust(cust_username)on delete cascade on update set NULL, emp_id int  references emp(emp_id)on delete cascade on update set NULL);
\d handles;



create table manages(admin_name varchar(20) primary key references admin(admin_name) on delete cascade on update set NULL, emp_id int references emp(emp_id)on delete cascade on update set NULL);
\d manages;


/*select * from cust;
select * from emp;
select * from admin;
select * from feedback;
select * from cab;
select * from billing;
select * from room;
select * from dinning;
select * from handles;
select * from manages;*/
