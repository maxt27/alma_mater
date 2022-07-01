-- komentar
-- stavki za izdelavo PB in TABELE
CREATE DATABASE alma_mater_db;   -- izdelaj PB
USE alma_mater_db;              -- izbereš zgoraj izdelano PB
CREATE TABLE student(           -- ustvariš novo tabelo
    email varchar(100) PRIMARY KEY,
    ime varchar(50)  NOT NULL,
    priimek varchar(50) NOT NULL
);

INSERT INTO student (email, ime, priimek) VALUES ('miha.zorman', 'Miha', 'Zorman')