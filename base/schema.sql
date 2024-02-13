CREATE TABLE users(
   id_users INT AUTO_INCREMENT,
   nom VARCHAR(50)  NOT NULL,
   prenom VARCHAR(50)  NOT NULL,
   pseudo VARCHAR(50) ,
   pwd VARCHAR(50)  NOT NULL,
   types INT,
   PRIMARY KEY(id_users),
   UNIQUE(pseudo)
);

CREATE TABLE variete(
   id_variete INT AUTO_INCREMENT,
   nom VARCHAR(50) ,
   occupation DECIMAL(10,2)   NOT NULL,
   rendement DECIMAL(15,2)   NOT NULL,
   PRIMARY KEY(id_variete)
);

CREATE TABLE parcelle(
   id_parcelle INT AUTO_INCREMENT,
   surface DECIMAL(15,2)  ,
   id_variete INT NOT NULL,
   PRIMARY KEY(id_parcelle),
   FOREIGN KEY(id_variete) REFERENCES variete(id_variete)
);

CREATE TABLE cueilleurs(
   id_cueilleur INT AUTO_INCREMENT,
   nom VARCHAR(50)  NOT NULL,
   genre CHAR(1)  NOT NULL,
   naissance DATE NOT NULL,
   PRIMARY KEY(id_cueilleur)
);

CREATE TABLE types(
   id_type INT AUTO_INCREMENT,
   nom VARCHAR(50) ,
   PRIMARY KEY(id_type)
);

CREATE TABLE depense(
   id_depense INT AUTO_INCREMENT,
   montant DECIMAL(18,2)   NOT NULL,
   datemontant DATE NOT NULL,
   id_type INT NOT NULL,
   PRIMARY KEY(id_depense),
   FOREIGN KEY(id_type) REFERENCES types(id_type)
);

CREATE TABLE salaire(
   id_salaire INT AUTO_INCREMENT,
   montant DECIMAL(18,2)   NOT NULL,
   dates DATE NOT NULL,
   id_cueilleur INT NOT NULL,
   PRIMARY KEY(id_salaire),
   FOREIGN KEY(id_cueilleur) REFERENCES cueilleurs(id_cueilleur)
);

CREATE TABLE cueillette(
   idcueillette INT AUTO_INCREMENT,
   datecueillette DATE,
   poidscueilli DECIMAL(10,2)   NOT NULL,
   id_parcelle INT NOT NULL,
   id_cueilleur INT NOT NULL,
   PRIMARY KEY(idcueillette),
   FOREIGN KEY(id_parcelle) REFERENCES parcelle(id_parcelle),
   FOREIGN KEY(id_cueilleur) REFERENCES cueilleurs(id_cueilleur)
);