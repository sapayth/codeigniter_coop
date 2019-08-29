use db_scm;

drop table if exists user_role;
create table user_role(
	id int(10) primary key auto_increment,
	name varchar(30)
);
insert into user_role(name) values('Manager');
insert into user_role(name) values('Admin');

drop table if exists users;
create table users(
	id int(10) primary key auto_increment,
	name varchar(45),
	email varchar(50) unique,
	password varchar(50),
	role_id int(10),
	avatar_name varchar(500)
);
insert into users(name, email, password, role_id) values('Sapayth Hossain', 'safayet.qubee@gmail.com', '12345', 1);
insert into users(name, email, password, role_id) values('Waish Chowdhury', 'waish@gmail.com', '12345', 2);
insert into users(name, email, password, role_id) values('Munna Ahsan', 'munna@gmail.com', '12345', 2);

drop table if exists suppliers;
create table suppliers(
	id int(10) primary key auto_increment,
	name varchar(50),
	contact_no varchar(15),
	email varchar(40) default 'N/A',
	address text,
	comments text
);
insert into suppliers(name, contact_no, email, address, comments) values('Ajij Co', '01715323654', 'ajij.com@gmail.com', 'Badda, Dhaka', 'Perfume');
insert into suppliers(name, contact_no, email, address, comments) values('Moon International', '01714545451', 'moon.international@gmail.com', 'Shantinagar, Dhaka', 'They supply Industrial Parts');

drop table if exists product_category;
create table product_category(
	id int(10) primary key auto_increment,
	name varchar(50)
);
insert into product_category(name) values('Frozen Food');
insert into product_category(name) values('Drinks');
insert into product_category(name) values('Vegitables');
insert into product_category(name) values('Fruits');
insert into product_category(name) values('Fish');
insert into product_category(name) values('Meat');
insert into product_category(name) values('Perfume');
insert into product_category(name) values('Cooking Essentials');

drop table if exists brands;
create table brands(
	id int(10) primary key auto_increment,
	name varchar(50)
);
insert into brands(name) values('Unilever');
insert into brands(name) values('ACI');
insert into brands(name) values('Radhuni');
insert into brands(name) values('Provati');
insert into brands(name) values('Knorr');
insert into brands(name) values('Pran RFL');

drop table if exists uom;
create table uom(
	id int(10) primary key auto_increment,
	name varchar(20)
);
insert into uom(name) values('KG');
insert into uom(name) values('Piece');
insert into uom(name) values('Gram');
insert into uom(name) values('Litre');
insert into uom(name) values('Dozen');

drop table if exists products;
create table products(
	id int(10) primary key auto_increment,
	code varchar(10),
	sku varchar(15) unique,
	name varchar(50),
	brand_id int(10),
	supplier_id int(10),
	category_id int(10),
	net_weight float(10),
	gross_weight float(20),
	sales_price float,
	purchase_cost float,
	stock_level float,
	uom_id int(10),
	comments text
);
insert into products(code, sku, name, brand_id, supplier_id, category_id, net_weight, sales_price, purchase_cost, stock_level, uom_id) values('rand-code', 'rand-sku-ZZ11', 'Pran Chilli Powder (Jar)', 6, 1, 8, 250, 90, 85, 50, 3);
insert into products(code, sku, name, brand_id, supplier_id, category_id, net_weight, sales_price, purchase_cost, stock_level, uom_id) values('rand-code', 'rand-sku-ZZ00', 'ACI Pure Halim Mix', 6, 1, 8, 200, 45, 35, 50, 3);

select p.name 'Product name', b.name 'brand', c.name 'category', s.name 'supplier', u.name 'uom' from products p, brands b, product_category c, suppliers s, uom u where p.brand_id = b.id and p.supplier_id = s.id and p.category_id = c.id and p.uom_id = u.id;