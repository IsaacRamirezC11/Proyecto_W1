drop schema if exists `proyectofinal`;

create schema if not exists `proyectofinal` default character set utf8 collate utf8_spanish_ci;

USE `proyectofinal`;

CREATE TABLE `persona`(
`numero` int(11) primary key NOT NULL auto_increment,
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar (10) not null,
`email` text not null,
`password` varchar(10) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int(11) not null default '2'
)engine=Innodb default charset=utf8;

INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Adolfo Ulises Munos Cano','ICO','320149008','Ecatepec de Morelos','5534156789','adolfomc@gmail.com','191950');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('María Fernanda López Rivera','ICO','320149009','Nezahualcóyotl','5541234567','mferlopez@gmail.com','123456');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Juan Carlos Hernández Gómez','ICO','320149010','Chalco','5523456789','juancarlos@gmail.com','654321');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Alejandra Ramírez Torres','ICO','320149011','Tlalnepantla','5512345678','alejandra.rt@gmail.com','abcdef');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Roberto García Martínez','ICO','320149012','Texcoco','5598765432','robertogm@gmail.com','fedcba');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Diana Paola Sánchez Paredes','ICO','320149013','Atizapán de Zaragoza','5534567890','dianapsp@gmail.com','pass1');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Miguel Ángel Pérez Salas','ICO','320149014','Coacalco','5545678901','miguelaps@gmail.com','contra');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Daniela Torres Campos','ICO','320149015','Naucalpan','5522345678','daniela.tc@gmail.com','123abc');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Luis Enrique Flores Silva','ICO','320149016','Tultitlán','5567890123','luisef@gmail.com','admin123');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Karina Gómez López','ICO','320149017','Iztapalapa','5578901234','karina.gl@gmail.com','qwerty123');
INSERT INTO `persona`(`nombre_usuario`,`carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)VALUES('Carlos Andrés Mendoza Jiménez','ICO','320149018','Cuautitlán Izcalli','5589012345','carlosamj@gmail.com','word2');

select * from  persona;