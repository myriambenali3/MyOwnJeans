create database if not exists formaweb3 character set utf8 collate utf8_unicode_ci;

grant all privileges on formaweb3.* to 'formaweb_user'@'localhost' identified by 'secret';

use formaweb3

drop table if exists commentaire;
drop table if exists conference;
drop table if exists users;
drop table if exists password_resets;
drop table if exists Formation;

create table conference (
idConf integer not null primary key auto_increment,
intituleConf varchar(45) not null,
descriptionConf varchar(600) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

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
idUsr int(10) UNSIGNED NOT NULL,
constraint fk_com_conf foreign key(idConf) references conference(idConf),
constraint fk_com_usr foreign key(idUsr) references users(id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into conference values
(1, 'MyOwnJeans', 'Chez MyOwn, nous souhaitons offrir un service aux femmes ayant du mal à se vétir, en leur proposant des jeans adaptés;');
insert into conference values
(2, 'Praticité', 'Plus besoin de courir dans tous les magasins avant de trouver le jean parfait. Gain de temps et d argent, notre entreprise facilitera la vie de nombreuses femmes');
insert into conference values
(3, 'Pour qui', 'Femmes de catégorie aisé');

create table Formation (
idForm integer not null primary key auto_increment,
intituleForm varchar(45) not null,
descriptionForm varchar(600) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into Formation values (1, 'Jeans', 'Bleu');

insert into Formation values(2, 'Jeans', 'Rouge');

insert into Formation values(3, 'Jeans', 'Vert');