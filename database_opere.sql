create database opere_arte;
use opere_arte;
create table autore
(
codA int not null auto_increment,
nome varchar(45) not null,
cognome varchar(45) not null,
anno varchar(4) not null,
citta varchar(45) not null,
primary key(codA)
);

create table opera
(
codO int not null auto_increment,
nome varchar(45) not null,
categoria varchar(45) not null,
citta varchar(45) not null,
nazione varchar(45) not null,
autore_fk int not null,
primary key(codO),
foreign key (autore_fk) REFERENCES autore(codA)
);

insert into autore values('', 'Pablo', 'Picasso', '1595', 'Roma');
insert into autore values('', 'Leonardo', 'da Vinci', '1599', 'Roma');
insert into autore values('', 'Giuseppe', 'Verdi', '1587', 'Napoli');

insert into opera values('', 'Gioconda', 'Scultura', 'Roma', 'Italia', 2);
insert into opera values('', 'Guernica', 'Pittura', 'Roma', 'Italia', 1);
insert into opera values('', 'Traviata', 'Lirica', 'Venezia', 'Italia', 3);