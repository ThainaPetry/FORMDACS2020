USE `univille`;


CREATE TABLE `academia` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `horaini` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`));

GRANT ALL PRIVILEGES ON univille.* TO 'root'@'%' WITH GRANT OPTION; 
FLUSH PRIVILEGES;

LOCK TABLES `academia` WRITE;
insert into academia(nome, horaini) values ('Thaina', '10:00');
insert into academia(nome, horaini) values ('Luan', '11:00');
insert into academia(nome, horaini) values ('Matheus', '12:00');
UNLOCK TABLES;

