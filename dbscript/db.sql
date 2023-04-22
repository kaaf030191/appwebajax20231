create database dbajax20231;
use dbajax20231;

create table tdata
(
idData char(13) not null,
requestData int not null,
responseData int not null,
created_at datetime not null,
updated_at datetime not null
) engine=innodb;