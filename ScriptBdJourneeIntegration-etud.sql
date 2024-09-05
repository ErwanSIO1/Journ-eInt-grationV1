#------------------------------------------------------------
# BD: bdJourneeIntegration(script mysql)
#------------------------------------------------------------
CREATE DATABASE `bdjourneeintegration`;
USE `bdjourneeintegration`;
#------------------------------------------------------------
# Table: Developpeur
#------------------------------------------------------------
CREATE TABLE Developpeur(
        id      Int  Auto_increment  NOT NULL ,
        nom Varchar (20) NOT NULL,
	prénon Varchar (15) NOT NULL,
	CONSTRAINT Classe_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Données de départ
#------------------------------------------------------------
INSERT INTO Developpeur VALUES ('1', 'COVER','Harry'), ('2', 'TOUIL','Sacha');

#------------------------------------------------------------
# Droits des utilisateurs
#------------------------------------------------------------
CREATE USER `consultSIO2Integration`@`%` IDENTIFIED BY 'pwd2Consult';
GRANT SELECT ON `bdjourneeintegration`.`developpeur` TO `consultSIO2Integration`@`%`;
