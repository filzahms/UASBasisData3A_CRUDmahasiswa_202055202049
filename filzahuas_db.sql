create database filzahuas_db;

use filzahuas_db;

CREATE TABLE `mahasiswa` (
    `id` int(11) NOT NULL auto_increment,
    `nama` varchar(50),
    `nim` char(12),
    `prodi` varchar(30),
    PRIMARY KEY (`id`)
);