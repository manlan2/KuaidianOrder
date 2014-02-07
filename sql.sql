/*创建用户及对应数据库，用户对对应的数据库享有所有权限*/
CREATE USER 'easyOrder'@'localhost' IDENTIFIED BY "easyOrder";/*用户名easyOrder，密码easyOrder*/
GRANT USAGE ON * . * TO 'easyOrder'@'localhost' IDENTIFIED BY "easyOrder" WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;
CREATE DATABASE IF NOT EXISTS `easyOrder` ;
GRANT ALL PRIVILEGES ON `easyOrder` . * TO 'easyOrder'@'localhost';

/*使用数据库*/
use easyOrder;

/*创建表*/
create table user(
	/*账户本身信息*/
	userName varchar(100) NOT NULL,
	userPassword varchar(100) NOT NULL,
	userPower varchar(100) NOT NULL,
	
	tmpOrderID bigint NOT NULL,
	primary key(userName)
) CHARACTER SET utf8 COLLATE utf8_general_ci;
insert user values("wbx","wbx","root",1);
insert user values("a","a","zs",2);

create table tmp_order(
	id bigint NOT NULL AUTO_INCREMENT,
	goodsIDArray LONGTEXT NOT NULL,
	goodsNumArray LONGTEXT NOT NULL,
	goodsSizeArray LONGTEXT NOT NULL,
	goodsMoneyArray LONGTEXT NOT NULL,
	primary key(id)
) CHARACTER SET utf8 COLLATE utf8_general_ci;
insert tmp_order values (null,"","","","");
insert tmp_order values (null,"","","","");

create table goods(
	id bigint NOT NULL AUTO_INCREMENT,
	name varchar(100) NOT NULL,
	
	/*存储的库房*/
	repository LONGTEXT NOT NULL,
	
	primary key(id)
) CHARACTER SET utf8 COLLATE utf8_general_ci;
insert goods values(null,"测试货物南瓜饼");