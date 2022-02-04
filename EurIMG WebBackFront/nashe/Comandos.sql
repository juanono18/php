create database practica;
use practica;
create table usuarios(
COD int primary key auto_increment,
correo varchar(50) not null ,
contraseña varchar(50) not null
);
select * from usuarios;
create table contenido(
COD int primary key auto_increment,
Localización varchar(50),
Titulo varchar(200) not null,
Resumen varchar(255) not null ,
Descripcion mediumtext not null,
img1 varbinary(400),
img2 varbinary(400)
);
drop table usuarios;
drop database jardineria;
