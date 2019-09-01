use db_ecommerce;

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
	avatar_name varchar(500) default null
);
insert into users(name, email, password, role_id) values('Sapayth Hossain', 'safayet.qubee@gmail.com', '12345', 2);
insert into users(name, email, password, role_id) values('Waish Chowdhury', 'waish@gmail.com', '12345', 1);
insert into users(name, email, password, role_id) values('Munna Ahsan', 'munna@gmail.com', '12345', 1);

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

drop table if exists item_category;
create table item_category(
	id int(10) primary key auto_increment,
	name varchar(50)
);
insert into item_category(name) values('Frozen Food');
insert into item_category(name) values('Drinks');
insert into item_category(name) values('Vegitables');
insert into item_category(name) values('Fruits');
insert into item_category(name) values('Fish');
insert into item_category(name) values('Meat');
insert into item_category(name) values('Perfume');
insert into item_category(name) values('Cooking Essentials');

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

drop table if exists transaction_type;
create table transaction_type(
	id int(10) primary key auto_increment,
	name varchar(30)
);
insert into transaction_type(name) values("Purchase");
insert into transaction_type(name) values("Stock Adjustment");

drop table if exists stock_transaction_master;
create table stock_transaction_master(
	id int(10) primary key auto_increment,
	transaction_type_id int(10),
	transaction_date datetime default current_timestamp,
	doc_reference varchar(20) unique,
	note text,
	created_by_id int(100)
);
insert into stock_transaction_master(transaction_type_id, doc_reference, note) values(1, '101', 'initial voucher 1');
insert into stock_transaction_master(transaction_type_id, doc_reference, note) values(1, '102', 'initial voucher 2');
insert into stock_transaction_master(transaction_type_id, doc_reference, note) values(1, '103', 'initial voucher 3');

drop table if exists stock_transaction_details;
create table stock_transaction_details(
	id int(10) primary key auto_increment,
	item_id int(10),
	qty int(10),
	uom_id int(10),
	price float,
	purchase_date datetime default current_timestamp,
	stock_transaction_id int(10)
);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(1, 10, 1, 500, 1);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(2, 15, 1, 150, 1);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(3, 18, 1, 220, 1);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(4, 9, 1, 215, 1);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(5, 30, 1, 90, 1);

insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(2, 10, 1, 500, 2);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(3, 15, 1, 150, 2);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(1, 18, 1, 220, 2);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(5, 9, 1, 215, 2);

insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(5, 10, 1, 500, 3);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(4, 15, 1, 150, 3);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(1, 18, 1, 220, 3);
insert into stock_transaction_details(item_id, qty, uom_id, price, stock_transaction_id) values(2, 9, 1, 215, 3);	

select p.name 'Product name', b.name 'brand', c.name 'category', s.name 'supplier', u.name 'uom' from products p, brands b, item_category c, suppliers s, uom u where p.brand_id = b.id and p.supplier_id = s.id and p.category_id = c.id and p.uom_id = u.id;