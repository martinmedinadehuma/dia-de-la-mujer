create database mujeer;
use mujeer;

create table mujeres(
idlista int not null auto_increment,
nombre varchar(10)not null,
sexo text,
mensaje text,
primary key(idlista)
)engine=InnoDB;
