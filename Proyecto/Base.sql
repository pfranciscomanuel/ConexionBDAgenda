CREATE DATABASE Agenda;
USE Agenda;
CREATE TABLE Amigo(
    nombre VARCHAR(80) PRIMARY KEY,
    direccion VARCHAR(120) NOT NULL,
    telCasa VARCHAR(30) NOT NULL,
    telCel VARCHAR(30) NOT NULL,
    fechaNac VARCHAR(30) NOT NULL,
    apodo VARCHAR(50) NOT NULL,
    sexo VARCHAR(10) NOT NULL
);

INSERT INTO Amigo (nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo) values ('Francisco Perez Sanchez','Balcones del sur #722 74301','2221768920','2222222','20/11/1959','Francis','Hombre');

INSERT INTO Amigo (nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo) values('Ana Hernandez Perez','Cruz MARAVILLAS #722 74301','2221768920','2222222','20/11/1999','Ana','Mujer');

INSERT INTO Amigo (nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo) values('Alberto Alvarez Rodriguez','Puebla El CARMEN #581 74912','9642575501','2220221546','11/08/1985','Alber','Hombre');

INSERT INTO Amigo (nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo) values('Maria Diaz Huerta','San Pedro SAN PEDRO #342 71243','8223246571','2222212565','11/02/1996','Mari','Mujer');

INSERT INTO Amigo (nombre,direccion,telCasa,telCel,fechaNac,apodo,sexo) values('Joel Gutierez Garcia','Castellon CASTELLON #911 71244','2193452110','22225421545','11/02/1997','Joel','Hombre');

