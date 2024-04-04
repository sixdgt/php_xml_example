CREATE DATABASE php_xml_example;

use php_xml_example;

CREATE TABLE kyc(
    id int not null primary key auto_increment,
    full_name varchar(255) not null,
    email varchar(255) not null,
    contact varchar(255) not null,
    address varchar(255) not null,
    password varchar(255) not null
);