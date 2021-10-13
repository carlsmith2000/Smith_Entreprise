CREATE database smithentreprise;
use smithentreprise;
CREATE TABLE `articles` ( 
`reference` INT NOT NULL AUTO_INCREMENT ,
`nom` VARCHAR( 50 ) NOT NULL ,
`description` VARCHAR( 200 ) ,
`prix` FLOAT NOT NULL ,
PRIMARY KEY ( `reference` ) 
) ENGINE=INNODB;
CREATE TABLE `clients` ( 
`numero` INT NOT NULL AUTO_INCREMENT ,
`nom` VARCHAR( 100 ) NOT NULL ,
`prenom` VARCHAR( 100 ) NOT NULL ,
`adresse` VARCHAR( 200 ) NOT NULL ,
`codepostal` INT UNSIGNED NOT NULL ,
`ville` VARCHAR( 100 ) NOT NULL ,
`pays` VARCHAR( 50 ) DEFAULT 'France' NOT NULL ,
`telephone` VARCHAR( 50 ) ,
PRIMARY KEY ( `numero` ) 
) ENGINE=INNODB;
CREATE TABLE `achats` (
`id_achat` INT NOT NULL AUTO_INCREMENT ,
`id_client` INT NOT NULL ,
`id_article` INT NOT NULL ,
`quantite` INT NOT NULL ,
`date` DATE NOT NULL ,
PRIMARY KEY ( `id_achat` ),
INDEX (`id_article`),
FOREIGN KEY (`id_article`)
REFERENCES articles(`reference`)
ON UPDATE CASCADE ON DELETE RESTRICT,
INDEX (`id_client`),
FOREIGN KEY (`id_client`)
REFERENCES clients(`numero`)
) ENGINE=INNODB;
