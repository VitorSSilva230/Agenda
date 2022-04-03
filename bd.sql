CREATE DATABASE agenda_crud;

create table contatos (
id int unsigned auto_increment primary key,
nome varchar(80) not null,
senha varchar(20) default null,
email varchar(80) default null,
ativo enum('s','n') default null,
create_date timestamp default current_timestamp,
update_date timestamp current_timestamp
excluido char(1) default null,
);