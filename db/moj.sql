create database if not exists formaweb3 character set utf8 collate utf8_unicode_ci;

grant all privileges on formaweb3.* to 'formaweb_user'@'localhost' identified by 'secret';

use formaweb3

drop table if exists commentaire;
drop table if exists production;
drop table if exists users;
drop table if exists password_resets;
drop table if exists accueilSite;
drop table if exists boutique;
drop table if exists commande;

create table production (
idProd integer not null primary key auto_increment,
intituleProd varchar(500) not null,
descriptionProd varchar(1000) not null,
imageProd varchar(600) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into production values
(1, 'Nos machines', 'Pour permettre la réalisation de ce projet, nous projetons d''acquérir des machines à tricoter automatiques. Ces machines sont déjà en vente sur le marché, la marque Kniterate commercialise aujourd''hui cette technologie pour environ 8000€. Sur le site de l''entreprise, la cliente devra se créer un compte et rentrer ses mensurations à l''aide de « tuto vidéo » expliquant comment prendre ses mensurations de la façon la plus précise possible. A partir de ces mesures, le métier à tisser imprimera le patron du modèle du jean acheté par la cliente. Enfin, une couturière, employée de l’entreprise, sera en charge de mettre en forme les patrons, c''est-à-dire, l''assemblage et la pose des éventuels boutons et fermetures éclairs. Le site internet rend donc nos jeans accessibles à nos clientes dans la France entière puisque le produit serait livré à domicile dans un délai de 10 jours.', 'images/machine.jpg');
insert into production values
(2, 'Pourquoi acheter chez MyOwnJeans ?', 'Pour se sentir bien dans ses vêtements : Grâce au sur-mesure le jean s''adapte parfaitement à la morphologie de la cliente et non pas l''inverse, Pour acheter français : Les machines et le fils de coton seront importés mais la fabrication des jeans se fera en France, Par souci d''écologie : La machine utilisée par l''entreprise tisse directement le pantalon. Par conséquent, il n''y a aucune chute de tissus minimisant ainsi l''impact environnemental du pantalon. De plus, le coton sera issu du commerce équitable (certification Max Havelaar, label GOTS…).', '');




CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


 CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


create table commentaire (
idCom integer not null primary key auto_increment,
contenuCom varchar(500) not null,
idConf integer not null,
idBout integer not null,
idUsr int(10) UNSIGNED NOT NULL,
constraint fk_com_conf foreign key(idBout) references boutique(idBout),
constraint fk_com_usr foreign key(idUsr) references users(id)
) engine=innodb character set utf8 collate utf8_unicode_ci;



create table accueilSite (
idAcc integer not null primary key auto_increment,
intituleAcc varchar(500) not null,
descriptionAcc varchar(500) not null,
imageAcc varchar(500) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into accueilSite values (1, '', 'Bienvenue sur le blog de MyOwnJeans. Bonne visite ! Vous pouvez commentez tous les articles de notre collection !','images/atelier.jpg');

insert into accueilSite values(2, 'Qui sommes nous ?', 'Nous sommes une entreprise spécialisée dans la vente de jeans sur-mesure. Les jeans seront confectionnées dans nos locaux à Bellecour avec la possiblilité de les envoyer dans la France entière afin de les livrer directement chez nos clients.', '');


create table boutique (
idBout integer not null primary key auto_increment,
intituleBout varchar(500) not null,
descriptionBout varchar(500) not null,
prixBout varchar(100) not null,
imageBout varchar(500) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into boutique values (1, 'Le Jean Brut Bleu', 'Avec son tissu 100% français, ce jeans saura parfaitement s''adapter à votre morphologie','Prix : 225 €', '/web/FormawebV4/public/images/bleu.JPG');
insert into boutique values (2, 'Le Jean Noir', 'Incontournable dans le dressing d''une femme, optez pour ce jean 100% pratique !','Prix : 225 €','/web/FormawebV4/public/images/noir.JPG');
insert into boutique values (3, 'Le Jean Blanc', 'Idéal pour l''été, laissez vous tenter par cette couleur !','Prix : 225 €','/web/FormawebV4/public/images/blanc.jpg');

create table commande (
idCom integer not null primary key auto_increment,
nomCom varchar(100) not null,
prenomCom varchar(100) not null,
mailCom varchar(100) not null,
numCom int(100) not null,
descriptionCom varchar(6000) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;