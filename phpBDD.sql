create database IMGEuro;
use IMGEuro;
create table usuarios(
	COD int primary key auto_increment,
	NOMBRE varchar(30),
	APELLIDOS varchar(60),
	EMAIL varchar(60) unique key,
	USUARIO varchar(60) unique key,
	ALTA date default current_timestamp,
	BAJA date default current_timestamp,
    PASS varchar(20)

);
create table contenido(
	COD int primary key auto_increment,
    TEXTO longtext,
    IMG1 varchar(40),
    IMG2 varchar(40),
    FECHAPUBLI timestamp default current_timestamp
);