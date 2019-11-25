create database postit;
use postit;

create table `pessoajuridica` (
  `IDUSUARIO` int(11) NOT NULL,
  `CNPJ` varchar(30) NOT NULL,
  PRIMARY KEY (`IDUSUARIO`)
);

create table `pessoafisica` (
  `IDUSUARIO` int(11) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  PRIMARY KEY (`IDUSUARIO`)
);

create table `usuario` (
  `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(100) NOT NULL,
  PRIMARY KEY (`IDUSUARIO`)
);



