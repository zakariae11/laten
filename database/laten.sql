create database laten1;

use laten1;
CREATE TABLE entitePhysique (
    id_entite_physique INT PRIMARY KEY auto_increment,
    id_entite_social INT,
    libelle VARCHAR(255),
    numero_client VARCHAR(50),
    adresse VARCHAR(255),
    code_postal VARCHAR(50),
    status_ep VARCHAR(50),
    date_creation DATE
);

CREATE TABLE entitySociale (
    id_entite_social INT PRIMARY KEY auto_increment,
    raison_social VARCHAR(255),
    numero_registre VARCHAR(50),
    patente VARCHAR(50),
    adresse VARCHAR(255),
    code_postal VARCHAR(50)
);

CREATE TABLE contact (
    id_contact INT PRIMARY KEY auto_increment,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    adresse VARCHAR(255),
    cin VARCHAR(50)
);

CREATE TABLE contactRole (
    id_contact_role INT PRIMARY KEY auto_increment,
    id_entite_physique INT,
    id_contact INT,
    role VARCHAR(255),
    FOREIGN KEY (id_entite_physique) REFERENCES entitePhysique (id_entite_physique),
    FOREIGN KEY (id_contact) REFERENCES contact (id_contact)
);

CREATE TABLE contrat (
    id_contrat INT PRIMARY KEY auto_increment,
    id_entite_physique INT,
    numero_contrat VARCHAR(50),
    statut_contrat VARCHAR(50),
    version_contrat VARCHAR(50),
    type_contrat VARCHAR(50),
    frequence_facturation VARCHAR(50),
    date_creation DATE,
    date_demarrage DATE,
    FOREIGN KEY (id_entite_physique) REFERENCES entitePhysique (id_entite_physique)
);

CREATE TABLE article (
    id_article INT PRIMARY KEY auto_increment,
    id_contrat INT,
    libelle VARCHAR(255),
    montant DECIMAL(10, 2),
    remise DECIMAL(10, 2),
    devise VARCHAR(50),
    date_creation DATE,
    FOREIGN KEY (id_contrat) REFERENCES contrat (id_contrat)
);


INSERT INTO entitySociale(raison_social, numero_registre, patente, adresse, code_postal)
VALUES
('Societe A', 123456, 'PAT123', 'Rue A, Ville A', 11111),
('Societe B', 789012, 'PAT456', 'Rue B, Ville B', 22222),
('Societe C', 345678, 'PAT789', 'Rue C, Ville C', 33333),
('Societe D', 901234, 'PATABC', 'Rue D, Ville D', 44444),
('Societe E', 567890, 'PATDEF', 'Rue E, Ville E', 55555),
('Societe F', 123789, 'PATGHI', 'Rue F, Ville F', 66666),
('Societe G', 456012, 'PATJKL', 'Rue G, Ville G', 77777),
('Societe H', 890345, 'PATMNO', 'Rue H, Ville H', 88888),
('Societe I', 678901, 'PATPQR', 'Rue I, Ville I', 99999),
('Societe J', 234567, 'PATSTU', 'Rue J, Ville J', 10101);

INSERT INTO contact(nom, prenom, adresse, cin)
VALUES
('Nom1', 'Prenom1', 'Adresse1', 'CI111111'),
('Nom2', 'Prenom2', 'Adresse2', 'CI222222'),
('Nom3', 'Prenom3', 'Adresse3', 'CI333333'),
('Nom4', 'Prenom4', 'Adresse4', 'CI444444'),
('Nom5', 'Prenom5', 'Adresse5', 'CI555555'),
('Nom6', 'Prenom6', 'Adresse6', 'CI666666'),
('Nom7', 'Prenom7', 'Adresse7', 'CI777777'),
('Nom8', 'Prenom8', 'Adresse8', 'CI888888'),
('Nom9', 'Prenom9', 'Adresse9', 'CI999999'),
('Nom10', 'Prenom10', 'Adresse10', 'CI101010');

INSERT INTO entitePhysique (id_entite_social, libelle, numero_client, adresse, code_postal, status_ep, date_creation) 
VALUES 
(1, 'Entité Physique 1', 1001, 'Adresse 1', 10000, 'AC', '2022-01-01'),
(1, 'Entité Physique 2', 1002, 'Adresse 2', 10000, 'AC', '2022-01-02'),
(1, 'Entité Physique 3', 1003, 'Adresse 3', 10000, 'KO', '2022-01-03'),
(2, 'Entité Physique 4', 1004, 'Adresse 4', 20000, 'PR', '2022-01-04'),
(2, 'Entité Physique 5', 1005, 'Adresse 5', 20000, 'AC', '2022-01-05'),
(2, 'Entité Physique 6', 1006, 'Adresse 6', 20000, 'AC', '2022-01-06'),
(3, 'Entité Physique 7', 1007, 'Adresse 7', 30000, 'AC', '2022-01-07'),
(3, 'Entité Physique 8', 1008, 'Adresse 8', 30000, 'PR', '2022-01-08'),
(3, 'Entité Physique 9', 1009, 'Adresse 9', 30000, 'AC', '2022-01-09'),
(4, 'Entité Physique 10', 1010, 'Adresse 10', 40000, 'KO', '2022-01-10');

INSERT INTO contrat (numero_contrat, statut_contrat, version_contrat, type_contrat, frequence_facturation, date_creation, date_demarrage) 
VALUES 
( 123, 'AC', 1, 'POSTPAID', 'ANNU', '2022-01-01', '2022-02-01'),
( 123, 'AC', 2, 'PREPAID', 'MENS', '2022-01-02', '2022-03-01'),
( 789, 'KO', 1, 'POSTPAID', 'ANNU', '2022-01-03', '2022-04-01'),
( 234, 'AC', 2, 'PREPAID', 'MENS', '2022-01-04', '2022-05-01'),
( 234, 'KO', 3, 'POSTPAID', 'ANNU', '2022-01-05', '2022-06-01'),
( 890, 'KO', 1, 'PREPAID', 'MENS', '2022-01-06', '2022-07-01'),
( 345, 'AC', 1, 'POSTPAID', 'ANNU', '2022-01-07', '2022-08-01'),
( 678, 'AC', 1, 'PREPAID', 'MENS', '2022-01-08', '2022-09-01'),
( 5678, 'AC', 9, 'POSTPAID', 'ANNU', '2022-01-09', '2022-10-01'),
( 5678, 'AC', 8, 'PREPAID', 'MENS', '2022-01-10', '2022-11-01');

INSERT INTO contactRole (id_entite_physique, id_contact, role)
VALUES 
(1, 1, 'admin'),
(1, 2, 'decisionmaker'),
(2, 3, 'manager'),
(3, 4, 'admin'),
(3, 5, 'decisionmaker'),
(4, 6, 'manager'),
(5, 7, 'admin'),
(6, 8, 'decisionmaker'),
(7, 9, 'manager'),
(8, 10, 'admin');

INSERT INTO article (id_contrat, libelle, montant, remise, devise, date_creation) VALUES
(1, 'Article 1', 1000.00, 0.00, 'EUR', '2022-01-01'),
(1, 'Article 2', 500.00, 50.00, 'EUR', '2022-01-01'),
(2, 'Article 3', 750.00, 0.00, 'MAD', '2022-01-02'),
(2, 'Article 4', 2000.00, 100.00, 'MAD', '2022-01-02'),
(3, 'Article 5', 1200.00, 0.00, 'DOL', '2022-01-03'),
(3, 'Article 6', 800.00, 80.00, 'DOL', '2022-01-03'),
(4, 'Article 7', 1500.00, 0.00, 'EUR', '2022-01-04'),
(4, 'Article 8', 1000.00, 75.00, 'EUR', '2022-01-04'),
(5, 'Article 9', 500.00, 0.00, 'MAD', '2022-01-05'),
(5, 'Article 10', 250.00, 25.00, 'MAD', '2022-01-05');

ALTER TABLE article
ADD prix_facture DECIMAL(10,1);

set sql_safe_updates = 0;
UPDATE article 
set prix_facture = montant - remise;

drop TRIGGER if EXISTS delete_cascading;
drop TRIGGER if EXISTS delete_cascading;
DELIMITER //
CREATE TRIGGER delete_cascading before DELETE
ON entitysociale 
for EACH ROW
BEGIN
 DELETE  FROM entityphisique where old.id_entite_social=entityphisique.id_entite_social;
END //
DELIMITER ;
DELIMITER //
CREATE TRIGGER DELETE_cascading_onPhis BEFORE DELETE
ON	entitephysique
FOR EACH ROW
BEGIN
 DELETE FROM contactrole WHERE contactrole.id_entite_physique= old.id_entite_physique;
 DELETE FROM contrat WHERE contrat.id_entite_physique=old.id_entite_physique;
END //
DELIMITER ;