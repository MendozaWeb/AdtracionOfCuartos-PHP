DROP DATABASE IF EXISTS NewHotel;
CREATE DATABASE NewHotel;
USE NewHotel ;


drop table if exists user;
create table user(
	id int not null auto_increment primary key,
	fullname varchar(500) not null,
	username varchar(100) not null unique,
	email varchar(255) not null unique,
	password varchar(255) not null,
	created_at datetime not null
);

DROP TABLE IF EXISTS CLIENTE;
CREATE TABLE   CLIENTE
 ( ID_CLI  INT AUTO_INCREMENT PRIMARY KEY  ,
    NOMBRE_CLI VARCHAR (60) NOT NULL, 
    APELL_CLI VARCHAR (60)NOT NULL ,
    DNI CHAR (8));

SELECT * FROM PER_HOTEL;

DROP TABLE IF EXISTS  PER_HOTEL;
CREATE TABLE PER_HOTEL( 
    COD_PER CHAR (3) PRIMARY KEY ,
    DESCRIP  VARCHAR (30),
    NOMBRR_PER VARCHAR (30),
    APELL_OPER VARCHAR (30));
    

/*INSER INTO HOTEL VALUES (COD_HOTEL_DETTS, COD_PER ,COD_ECO,COD_SEMI, ) */
DROP TABLE IF EXISTS CUAR_ECONOMICO;
CREATE TABLE  CUAR_ECONOMICO
( COD_ECO CHAR (3) PRIMARY KEY ,
    PRE_CUR INT,
    DESCRIP_CUR VARCHAR (30)
);

DROP TABLE IF EXISTS  CUAR_SEMI_PRESEN;
CREATE TABLE CUAR_SEMI_PRESEN(
    COD_SEMI  CHAR (3) PRIMARY KEY,
    PRE_CUR INT ,
    DESCRIP_CUR VARCHAR (60)
);

 /*SELECT * FROM CUAR_SEMI_PRESEN;*/

DROP TABLE IF EXISTS PRESENCIAL;
CREATE TABLE  PRESENCIAL
( COD_PRE CHAR (3) PRIMARY KEY ,
    PRE_CUR INT,
    DESCRIP_CUR VARCHAR (35)
);

DROP TABLE IF EXISTS CUR_RAPIDON;
CREATE TABLE CUR_RAPIDON (
    COD_RAP CHAR (3)PRIMARY KEY,
    PRE_CUR INT,
    DESCRIP_CUR VARCHAR (60)
);

SELECT * FROM CLIENTE ;

/*insert into comunidad (nom_com, pob_com, sup_com) values ('Pais Vasco','5487200','55470');*/
INSERT INTO CLIENTE VALUES (NULL,'SImom','Cuentas','21458796');
INSERT INTO CLIENTE  VALUES (NULL,'Alex','Cusca','36524198');
INSERT INTO CLIENTE  VALUES (NULL,'Fernada','Casas','9865823');
INSERT INTO CLIENTE  VALUES (NULL,'JAIRO','ORE','73632340');

INSERT INTO PER_HOTEL VALUES  ('P01','LIMPIEZA','Daniel','Torres');
INSERT INTO PER_HOTEL VALUES  ('P02','recepcion','Diego','Aliaga');
INSERT INTO PER_HOTEL  VALUES  ('P03','portero','David','Mendez');
INSERT INTO PER_HOTEL  VALUES  ('P04','seguridad','Yanil','Guerrero');
SELECT  * FROM PER_HOTEL; 

INSERT INTO CUAR_ECONOMICO VALUES ('E01',15,'TV,CABLE,BAÑO');
INSERT INTO CUAR_ECONOMICO VALUES ('E02',10,'BAÑO,TV');
INSERT INTO CUAR_ECONOMICO VALUES ('E03',20,'TV,BAÑO,CABLE,INTERNET');

INSERT INTO CUAR_SEMI_PRESEN VALUES('S01',40,'TV+,YACUSI,TELEFONONO,BAÑO TEMICO');
SELECT * FROM CUR_RAPIDON;

INSERT INTO PRESENCIAL  VALUES('PR1',80,'TV++,VACUSI,TELEFONO,HABITDOBLE,BAR');
INSERT INTO PRESENCIAL  VALUES('PR2',100,'TV++,YACUSI,TELEFONO,HABITDOBLE,BAR,SALA DE SPA,PISANA');

INSERT INTO CUR_RAPIDON  VALUES('R01',5,'CUARTO SOLO');
INSERT INTO CUR_RAPIDON  VALUES('R02',2,'CAUARTO COMPARTIDO');

/* CREAR UN PROCEDIMIENTO ALMACENADO QUE BUSQUE POR CODIGO Y NOMBRE PRODUCTO*/	
/*DROP PROCEDURE IF EXISTS HO_BUS_CLI;
DELIMITER $$
CREATE PROCEDURE HO_BUS_CLI
(COD INT ,NOM VARCHAR(60),DNI CHAR (8) )
BEGIN
	SELECT P.ID_CLI,P.NOMBRE_CLI,P.DNI,
   
    FROM CLIENTE P INNER JOIN CATEGORIA C INNER JOIN MARCA M
    ON P.COD_CAT=C.COD_CAT 
	WHERE P.COD_PROD LIKE CONCAT('%',COD,'%') OR 
		  P.NOM_PROD LIKE CONCAT('%',NOM,'%');
END $$
DELIMITER $$;

CALL SP_BUS_PROD('','NUL

/*DROP TABLE IF EXISTS CLIENTE;
CREATE TABLE   CLIENTE
 ( ID_CLI  INT AUTO_INCREMENT PRIMARY KEY  ,
    NOMBRE_CLI VARCHAR (60) NOT NULL, 
    APELL_CLI VARCHAR (60)NOT NULL ,
    DNI CHAR (8)); */


