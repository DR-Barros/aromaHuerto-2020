CREATE DATABASE abrespac_aromahuerta;
USE abrespac_aromahuerta;



CREATE TABLE temporada(
    temporada VARCHAR(10) NOT NULL,
    id VARCHAR(1) NOT NULL,
    PRIMARY KEY(id)
);
INSERT INTO temporada(temporada, id) VALUES
("verano", "0");



CREATE TABLE plantas(
    id VARCHAR(3) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    temporada VARCHAR(10) NOT NULL,
    exposicion VARCHAR(10) NOT NULL,
    PRIMARY KEY(nombre)
);
INSERT INTO plantas(id, nombre, temporada, exposicion) VALUES
("0", "acelga amarilla", "ambos", "sombra"),
("1", "acelga roja", "ambos", "sombra"),
("2", "acelga verde", "ambos", "sombra"),
("3", "ají cristal", "verano", "sol"),
("4", "albahaca", "verano", "semi"),
("5", "apio", "invierno", "sol"),
("6", "berenjena", "verano", "sol"),
("7", "caléndula", "ambos", "sol+semi"),
("8", "cebollin", "ambos", "sol"),
("9", "tomate cherry", "verano", "sol"),
("10", "cilantro", "invierno", "semi"),
("11", "coliflor", "invierno", "sombra"),
("12", "espinaca", "invierno", "sombra"),
("13", "kale", "ambos", "sol+semi"),
("14", "lechuga", "ambos", "semi"),
("15", "oregano", "verano", "sol"),
("16", "perejil", "ambos", "semi"),
("17", "rabano", "invierno", "semi"),
("18", "rucula", "ambos", "sol"),
("19", "zapallo italiano", "verano", "sol");



CREATE TABLE blog(
    titulo VARCHAR(100) NOT NULL,
    link VARCHAR(50) NOT NULL,
    descripcion VARCHAR(1000),
    PRIMARY KEY(titulo)
);



CREATE TABLE usuarios(
    rut VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    mail VARCHAR(50) NOT NULL,
    contraseña VARCHAR(50) NOT NULL,
    PRIMARY KEY(mail)
);