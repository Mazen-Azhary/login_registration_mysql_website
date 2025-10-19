Create database registration;
Use registration;
create table user(
user_id int not null auto_increment,
email varchar(225) not null,
name varchar(225) not null,
password varchar(225) not null,
registration_date timestamp default current_timestamp,
PRIMARY KEY (user_id)
);