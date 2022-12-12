CREATE DATABASE cosmos;

use cosmos;

CREATE TABLE salgsvarer(
   produktID INT AUTO_INCREMENT PRIMARY KEY,
   produktnavn NOT NULL VARCHAR(15),
   produktpris NOT NULL INT(4),
   tilgjengelig INT(5)
   );


CREATE TABLE brukere(
   brukerID INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   brukernavn NOT NULL VARCHAR(255),
   passord NOT NULL VARCHAR(255)
   );
