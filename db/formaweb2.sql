create database if not exists formaweb2 character set utf8 collate utf8_unicode_ci;

grant all privileges on formaweb2.* to 'formaweb_user'@'localhost' identified by 'secret';

use formaweb2

drop table if exists commentaire;
drop table if exists conference;
drop table if exists users;
drop table if exists password_resets

create table conference (
idConf integer not null primary key auto_increment,
intituleConf varchar(45) not null,
descriptionConf varchar(200) not null
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
idUsr integer not null,
constraint fk_com_conf foreign key(idConf) references conference(idConf),
constraint fk_com_usr foreign key(idUsr) references users(idUsr)
) engine=innodb character set utf8 collate utf8_unicode_ci;