create database center;

CREATE TABLE type_rendezvous(
    nom_type VARCHAR(255) NOT NULL PRIMARY key,
    prix int(11) NOT NULL
);

CREATE TABLE `patient` (
  `pemail` varchar(255) NOT NULL primary key,
  `pcin` varchar(25) NOT NULL unique,
  `pfname` varchar(50) NOT NULL,
 `pphone` varchar(20) NOT NULL,
 `address` varchar(25) NOT NULL,
  `password` varchar(75) NOT NULL
)

    CREATE TABLE rendezvous(
        appo_num INT(11) NOT NULL PRIMARY KEY,
        pemail varchar(255) not null,
        nom_type VARCHAR(255) not null,
        appo_date date DEFAULT NULL,
        heure time not null,
        FOREIGN KEY(pemail) REFERENCES patient(pemail),
        FOREIGN KEY(nom_type) REFERENCES type_rendezvous(nom_type)
        );

CREATE TABLE indisponible(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    d_debut DATE DEFAULT NULL,
    d_fin DATE DEFAULT NULL
);

CREATE TABLE docteur(
    docemail VARCHAR(255) NOT NULL PRIMARY KEY,
    docpassword VARCHAR(255) NOT NULL,
    id_i int(11) not null,
    appo_num int(11) not null,
	FOREIGN KEY(id_i) REFERENCES indisponible(id),
	FOREIGN KEY(appo_num) REFERENCES rendezvous(appo_num)
);


CREATE TABLE compte(
    c_email VARCHAR(255) NOT NULL PRIMARY KEY,
    role VARCHAR(255) NOT NULL,
    FOREIGN KEY(c_email) REFERENCES patient(pemail),
    FOREIGN KEY(c_email) REFERENCES docteur(docemail)
);