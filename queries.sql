use db_coop;

drop table if exists user_role;
create table user_role(
	id int(10) primary key auto_increment,
	name varchar(30)
);
insert into user_role(name) values('Manager');
insert into user_role(name) values('Admin');
insert into user_role(name) values('Member');

drop table if exists users;
create table users(
	id int(10) primary key auto_increment,
	name varchar(45),
	email varchar(50) unique,
	password varchar(50),
	role_id int(10),
	avatar_name varchar(500) default null
);
insert into users(name, email, password, role_id) values('Sapayth Hossain', 'safayet.qubee@gmail.com', '12345', 2);
insert into users(name, email, password, role_id) values('Waish Chowdhury', 'waish@gmail.com', '12345', 1);
insert into users(name, email, password, role_id) values('Munna Ahsan', 'munna@gmail.com', '12345', 1);

drop table if exists members;
create table members(
	id int(10) primary key auto_increment,
	name_en varchar(100),
	name_bn varchar(100),
	fathers_name varchar(100),
	mothers_name varchar(100),
	profession varchar(100),
	designation varchar(100),
	dob datetime,
	blood_group varchar(3),
	curr_addr_house varchar(50),
	curr_addr_road varchar(50),
	curr_addr_post varchar(50),
	curr_addr_thana varchar(50),
	curr_addr_zilla varchar(50),
	parm_addr_village varchar(50),
	parm_addr_house varchar(50),
	parm_addr_road varchar(50),
	parm_addr_post varchar(50),
	parm_addr_thana varchar(50),
	parm_addr_zilla varchar(50),
	nid_no varchar(20),
	birth_cirtificate_no varchar(20),
	phone_no_1 varchar(15),
	phone_no_2 varchar(15),
	identifier_name varchar(50),
	identifier_member_id int(10),
	nominee_name varchar(50),
	rel_with_nominee varchar(50),
	nominee_contact_no varchar(15),
	role_id int(10),
	avatar_name varchar(500) default null
);
insert into members(name_en, profession, dob, blood_group, phone_no_1)
	values('Sapayth', 'Dev', '1992-12-27 19:30:13', 'A+', '01444111222');