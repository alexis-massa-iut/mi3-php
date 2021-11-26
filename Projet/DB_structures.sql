-- COPYRIGHT MATHIEU MULOT

DROP TABLE IF EXISTS secteurs_structures;
DROP TABLE IF EXISTS secteur;
DROP TABLE IF EXISTS structure;

CREATE TABLE IF NOT EXISTS secteur (
  ID int(11) NOT NULL AUTO_INCREMENT,
  LIBELLE varchar(100) NOT NULL,
  CONSTRAINT secteur_pk PRIMARY KEY (ID),
  CONSTRAINT secteur_uq UNIQUE(LIBELLE)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS structure (
  ID int(11) NOT NULL AUTO_INCREMENT,
  NOM varchar(100) NOT NULL,
  RUE varchar(200) NOT NULL,
  CP varchar(5) NOT NULL,
  VILLE varchar(100) NOT NULL,
  ESTASSO tinyint(1) NOT NULL,
  NB_DONATEURS INT,
  NB_ACTIONNAIRES INT,
  CONSTRAINT structure_pk PRIMARY KEY (ID),
  CONSTRAINT structure_cp_ck CHECK (CP REGEXP '[0-9]{5}'),
  CONSTRAINT structure_estasso_ck CHECK (ESTASSO IN (0,1)),
  CONSTRAINT structure_don_ck CHECK (NB_DONATEURS IS NULL OR NB_DONATEURS>0),
  CONSTRAINT structure_act_ck CHECK (NB_ACTIONNAIRES IS NULL OR NB_ACTIONNAIRES>0),
  CONSTRAINT structure_don_act_ck CHECK (NB_DONATEURS IS NULL AND NB_ACTIONNAIRES IS NOT NULL
    OR NB_DONATEURS IS NOT NULL AND NB_ACTIONNAIRES IS NULL)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE  IF NOT EXISTS secteurs_structures (
  ID int(11) NOT NULL AUTO_INCREMENT,
  ID_STRUCTURE int(11) NOT NULL,
  ID_SECTEUR int(11) NOT NULL,
  CONSTRAINT secteurs_structures_pk PRIMARY KEY (ID),
  CONSTRAINT secteurs_structures_structure_fk FOREIGN KEY (ID_STRUCTURE) REFERENCES structure (ID),
  CONSTRAINT secteurs_structures_secteur_fk FOREIGN KEY (ID_SECTEUR) REFERENCES secteur (ID),
  CONSTRAINT secteurs_structures_uq UNIQUE(ID_STRUCTURE,ID_SECTEUR)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO secteur(LIBELLE) VALUES ('Energie');
INSERT INTO secteur(LIBELLE) VALUES ('Environnement');
INSERT INTO secteur(LIBELLE) VALUES ('Transport');
INSERT INTO secteur(LIBELLE) VALUES ('Automobile');
INSERT INTO secteur(LIBELLE) VALUES ('Informatique');

INSERT INTO structure(NOM,RUE,CP,VILLE,ESTASSO,NB_DONATEURS,NB_ACTIONNAIRES) VALUES ('Veolia','rue veolia','75000','Paris',0,NULL,1000000);
INSERT INTO structure(NOM,RUE,CP,VILLE,ESTASSO,NB_DONATEURS,NB_ACTIONNAIRES) VALUES ('Renault','rue Renault','78000','Versailles',0,NULL,2000000);
INSERT INTO structure(NOM,RUE,CP,VILLE,ESTASSO,NB_DONATEURS,NB_ACTIONNAIRES) VALUES ('WWF','rue WWF','92000','Antony',1,300000,NULL);
INSERT INTO structure(NOM,RUE,CP,VILLE,ESTASSO,NB_DONATEURS,NB_ACTIONNAIRES) VALUES ('Microsoft','rue Microsoft','75000','Paris',0,NULL,4000000);

INSERT INTO secteurs_structures(ID_STRUCTURE,ID_SECTEUR) VALUES (1,1);
INSERT INTO secteurs_structures(ID_STRUCTURE,ID_SECTEUR) VALUES (1,2);
INSERT INTO secteurs_structures(ID_STRUCTURE,ID_SECTEUR) VALUES (1,3);
INSERT INTO secteurs_structures(ID_STRUCTURE,ID_SECTEUR) VALUES (2,4);
INSERT INTO secteurs_structures(ID_STRUCTURE,ID_SECTEUR) VALUES (3,2);
INSERT INTO secteurs_structures(ID_STRUCTURE,ID_SECTEUR) VALUES (4,5);

COMMIT;
