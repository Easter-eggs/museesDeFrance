CREATE TABLE `inventaire_depot` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ca_id` int(20) DEFAULT NULL,
  `numdep` varchar(255) NOT NULL,
  `numdep_sort` varchar(255) DEFAULT NULL,
  `numdep_display` varchar(255) DEFAULT NULL,
  `numinv` text,
  `acte_depot` text,
  `date_prisencharge` date DEFAULT NULL,
  `proprietaire` text,
  `acte_fin_depot` text,
  `date_inscription` text,
  `date_inscription_display` text,
  `designation` text,
  `designation_display` text,
  `inscription` text,
  `materiaux` text,
  `techniques` text,
  `mesures` text,
  `etat` text,
  `auteur` text,
  `auteur_display` text,
  `epoque` text,
  `utilisation` text,
  `provenance` text,
  `observations` text,
  `validated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `numdep` (`numdep`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `inventaire_depot_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `record_id` int(11) NOT NULL,
  `credits` text NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inventaire_id` (`record_id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `inventaire_inventaire` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ca_id` int(20) DEFAULT NULL,
  `numinv` varchar(255) NOT NULL,
  `numinv_sort` varchar(255) DEFAULT NULL,
  `numinv_display` varchar(255) DEFAULT NULL,
  `designation` text,
  `designation_display` text,
  `mode_acquisition` text,
  `donateur` text,
  `date_acquisition` text,
  `avis` text,
  `prix` text,
  `date_inscription` text,
  `date_inscription_display` text,
  `observations` text,
  `inscription` text,
  `materiaux` text,
  `techniques` text,
  `mesures` text,
  `etat` text,
  `auteur` text,
  `auteur_display` text,
  `epoque` text,
  `utilisation` text,
  `provenance` text,
  `validated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `numinv` (`numinv`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `inventaire_inventaire_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `record_id` int(11) NOT NULL,
  `credits` text,
  `file` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inventaire_id` (`record_id`)
) DEFAULT CHARSET=utf8;

