use formaweb
create table Commentaire (
idCom integer not null primary key auto_increment,
auteurCom varchar(100) not null,
contenuCom varchar(500) not null,
idConf integer not null,
constraint fk_com_conf foreign key(idConf) references Conference(idConf)
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into Commentaire values
(1, 'Jean Barr', 'Merci beaucoup pour cette excellente conférence', 1);
insert into Commentaire values
(2, 'Anne Haunime', 'Une conférence vraiment très instructive.', 1);
