create database dbbarberia;

use dbbarberia;

create table cortes
(
	id int auto_increment primary key,
    corte varchar(100),
    precio decimal(8,2),
    imagen varchar(100)
);

create table usuario
(
	usuario varchar(100), 
    passwordd varchar(100)
);

create table reservacion
(
	id int auto_increment primary key,
	nombre varchar(100), 
    apellido varchar(100),
    telefono varchar(9),
    fecha date,
    hora time,
    corte_id INT,
    FOREIGN KEY (corte_id) REFERENCES cortes(id)
);

insert into cortes (corte, precio, imagen) values ('Corte Escolar', 10.00,"../vista/img/escolar.png");
insert into cortes (corte, precio, imagen) values ('Corte Clasico', 20.00,"../vista/img/clasico.png");
insert into cortes (corte, precio, imagen) values ('Corte Urbano', 30.00,"../vista/img/urbano.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Low Fade', 40.00,"../vista/img/lowfade.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Mid Fade', 50.00,"../vista/img/midfade.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Taper Fade', 40.00,"../vista/img/taperfade.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Skin Fade', 30.00,"../vista/img/skinfade.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Flat Top', 20.00,"../vista/img/flattop.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Colombiano', 10.00,"../vista/img/colombiano.jpeg");
insert into cortes (corte, precio, imagen) values ('Corte Mohicano', 20.00,"../vista/img/mohicano.jpg");
insert into cortes (corte, precio, imagen) values ('Corte Burst Fade', 10.00,"../vista/img/burtsfade.png");
insert into cortes (corte, precio, imagen) values ('Corte Blowout', 30.00,"../vista/img/blowout.jpg");

select * from cortes;

insert into usuario (usuario, passwordd) values ('admin','123');

select * from usuario;


