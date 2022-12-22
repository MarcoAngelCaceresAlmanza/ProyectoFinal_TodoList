-- drop database  bd_registro;
create database bd_registro;
use bd_registro;

create table usuarios(
id_usuario int primary key not null auto_increment,
usuario varchar(50),
correo varchar (50),
contraseña varchar(30)
);

insert into usuarios values (1,'kevin santiago ferro','chano17sp@gmail.com','1111');
insert into usuarios values (2,'seyber michael','milthon@gmail.com','1234');
insert into usuarios values (3,'angel','Edwin@gmail.com','3333');
insert into usuarios values (4,'Joseph Arana Saldivar','rasiel@gmail.com','2222');

create table tareas(
id_tareas int primary key not null auto_increment,
nomtarea varchar (50),
id_usuario  int,
foreign key (id_usuario) references usuarios(id_usuario));

INSERT INTO tareas VALUES(1,'correr',1);
INSERT INTO tareas VALUES(2,'desayunar',4);
INSERT INTO tareas VALUES(3,'trabajar',3);
INSERT INTO tareas VALUES(4,'almorzar',2);

-- select*from tareas

      
